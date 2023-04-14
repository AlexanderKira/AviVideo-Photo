var tag = document.createElement('script');

	tag.src = "https://www.youtube.com/iframe_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	var player;

	$('#video-modal').on('shown.bs.modal', function(event) {

		let button = $(event.relatedTarget),
			video = button.data("video");

		console.log(button);

		player = new YT.Player('player', {
			videoId: 'M7lc1UVf-VE',
			events: {
	  			'onReady': onPlayerReady,
			}
  		});
	})

	function onPlayerReady(event) {
		event.targget.playVideo();
	}