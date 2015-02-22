// When DOM is fully loaded
jQuery(document).ready(function($) {


	/* Init Scamp Player
	 ---------------------------------------------------------------------- */
	if ( Modernizr != 'undefined' ) {

		if ( Modernizr.touch ) {
			scamp_vars.autoplay = false;
		}
	}
	
	scamp_player = new $.ScampPlayer( $( '#scamp_player' ), {

		// Default Scamp Player options
		volume : scamp_vars.volume, // Start volume level
		autoplay : scamp_vars.autoplay, // Autoplay track
		no_track_image : scamp_vars.plugin_uri+'/img/no-track-image.png', // Placeholder image for track cover
		loop : scamp_vars.loop, // Loop tracklist
		random : scamp_vars.random, // Random playing
		titlebar : scamp_vars.titlebar, // Replace browser title on track title
		check_files : false, // Checks whether a track file exists
		client_id : scamp_vars.soundcloud_id, // Soundcloud Client ID
		onReady : function() {
			// Callback function
			
		},

		// Soundmanager2 options
		sm_options : { 
			url: scamp_vars.plugin_uri+'/js/swf/', 
			flashVersion: 9, 
			preferFlash: false, 
			useHTML5Audio: true, 
			allowScriptAccess: 'always', 
			debugMode: false, 
			debugFlash: false, 
			useConsole: false 
		}
		
	});

});