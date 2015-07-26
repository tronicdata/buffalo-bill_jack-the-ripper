console.log("im here");
$.ajax({
	type: "GET",
	dataType: "jsonp",
	cache: false,
	url: "https://api.instagram.com/v1/users/self/media/recent/?access_token=ACCESS-TOKEN",
	success: function(data) {
		console.log(data);
		console.log(data.data.length);
		for (i=0; i < data.data.length; i++){
			$('.posts').append('<img src="' + data.data[i].images.standard_resolution.url + '"/>');
		}
	}
})
