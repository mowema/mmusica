<?php

/* Panel Options
------------------------------------------------------------------------*/

/* Options array */
$spectra_main_options = array( 


	/* General Settings
	-------------------------------------------------------- */
	array( 
		'type' => 'open',
		'tab_name' => _x( 'General Settings', 'Admin Panel', SPECTRA_THEME ),
		'tab_id' => 'general-settings',
		'icon' => 'gears'
	),

		array( 
			'type' => 'sub_open',
			'sub_tab_name' => _x( 'General Settings', 'Admin Panel', SPECTRA_THEME ),
			'sub_tab_id' => 'sub-general-basics'
		),

			// Ajax
			array( 
				'name' => _x( 'Ajax Load', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'ajaxed',
				'type' => 'switch_button',
				'plugins' => array( 'switch_button' ),
				'std' => 'on',
				'desc' => _x( 'Enable if you want ajax loading.', 'Admin Panel', SPECTRA_THEME ),
			),

			// Custom Date 
			array(
				'name' => _x( 'Date Format', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'custom_date',
				'type' => 'text',
				'std' => 'd/m/Y',
				'desc' => _x( 'Enter your custom date. More information: http://codex.wordpress.org/Formatting_Date_and_Time', 'Admin Panel', SPECTRA_THEME )
			),

			// Custom Comments Date
			array(
				'name' => _x( 'Comment Date Format', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'custom_comment_date',
				'type' => 'text',
				'std' => 'F j, Y (H:i)',
				'desc' => _x( 'Enter your custom comment date. More information: http://codex.wordpress.org/Formatting_Date_and_Time', 'Admin Panel', SPECTRA_THEME )
			),

			// Custom Event Date
			array(
				'name' => _x( 'Event Date Format', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'event_date',
				'type' => 'text',
				'std' => 'd/m',
				'desc' => _x( 'Enter your custom event date. More information: http://codex.wordpress.org/Formatting_Date_and_Time', 'Admin Panel', SPECTRA_THEME )
			),

			// Retina Displays
			array( 
				'name' => _x( 'Retina Displays', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'retina',
				'type' => 'switch_button',
				'plugins' => array( 'switch_button' ),
				'std' => 'off',
				'desc' => _x( 'To make this work you need to specify the width and the height of the image directly and provide the same image twice the size withe the @2x selector added at the end of the image name. For instance if you want your "logo.png" file to be retina compatible just include it in the markup with specified width and height ( the width and height of the original image in pixels ) and create a "logo@2x.png" file in the same directory that is twice the resolution.', 'Admin Panel', SPECTRA_THEME ),
			),

			// Content Animations
			array( 
				'name' => _x( 'Content Animations', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'content_animations',
				'type' => 'switch_button',
				'plugins' => array( 'switch_button' ),
				'std' => 'on',
				'desc' => _x( 'Enable CSS3 animation.', 'Admin Panel', SPECTRA_THEME ),
			),

			// Content Animations Mobile
			array( 
				'name' => _x( 'Content Animations (Touch Devices)', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'mobile_animations',
				'type' => 'switch_button',
				'plugins' => array( 'switch_button' ),
				'std' => 'on',
				'desc' => _x( 'Enable CSS3 animation on touch devices.', 'Admin Panel', SPECTRA_THEME ),
			),

			// Google Map Marker
			array(
				'name' => _x( 'Google Maps Marker', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'map_marker',
				'type' => 'add_image',
				'plugins' => array( 'add_image' ),
				'by_id' => true,
				'width' => '48',
				'height' => '56',
				'crop' => 'c',
				'std' => '',
				'button_title' => _x( 'Add Image', 'Admin Panel', SPECTRA_THEME ),
				'msg' => _x( 'Currently you don\'t have image, you can add one by clicking on the button below.', 'Admin Panel', SPECTRA_THEME ),
				'desc' => _x( 'Add Google Map Marker (48px x 56px).', 'Admin Panel', SPECTRA_THEME )
			),

			// Favicon
			array(
				'name' => _x( 'Custom Favicon', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'favicon',
				'type' => 'add_image',
				'plugins' => array( 'add_image' ),
				'by_id' => true,
				'width' => '16',
				'height' => '16',
				'crop' => 'c',
				'std' => '',
				'button_title' => _x( 'Add Image', 'Admin Panel', SPECTRA_THEME ),
				'desc' => _x( 'Upload a 16px x 16px .ico image for your theme, or specify the image address. http://favicon-generator.org', 'Admin Panel', SPECTRA_THEME )
			),

			// Slide Panel
			array( 
				'name' => _x( 'Slide Sidebar', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'slide_sidebar',
				'type' => 'switch_button',
				'plugins' => array( 'switch_button' ),
				'std' => 'on',
				'desc' => _x( 'Enable slide sidebar.', 'Admin Panel', SPECTRA_THEME ),
			),
			
		array( 
			'type' => 'sub_close'
		),
	

		/* Header / Navigation
		 -------------------------------------------------------- */
		array( 
			'type' => 'sub_open',
			'sub_tab_name' => _x( 'Header', 'Admin Panel', SPECTRA_THEME ),
			'sub_tab_id' => 'sub-header'
		),	
			// Show header on intro section?
			array( 
				'name' => _x( 'Show Header on Intro Section', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'show_navigation',
				'type' => 'switch_button',
				'plugins' => array( 'switch_button' ),
				'std' => 'off',
				'desc' => _x( 'Show header on intro section.', 'Admin Panel', SPECTRA_THEME ),
			),

			// Logo
			array(
				'name' => _x( 'Logo Image', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'logo',
				'type' => 'add_image',
				'plugins' => array( 'add_image' ),
				'by_id' => true,
				'width' => '100',
				'height' => '100',
				'crop' => 'c',
				'std' => '',
				'button_title' => _x( 'Add Image', 'Admin Panel', SPECTRA_THEME ),
				'msg' => _x( 'Currently you don\'t have image, you can add one by clicking on the button below.', 'Admin Panel', SPECTRA_THEME ),
				'desc' => _x( 'Add a logo image to the theme header.', 'Admin Panel', SPECTRA_THEME )
			),
			
		array( 
			'type' => 'sub_close'
		),


		/* Footer
		 -------------------------------------------------------- */
		array( 
			'type' => 'sub_open',
			'sub_tab_name' => _x( 'Footer', 'Admin Panel', SPECTRA_THEME ),
			'sub_tab_id' => 'sub-footer'
		),

			// Footer Content
			array( 
				'name' => _x( 'Footer Content', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'footer_content',
				'type' => 'textarea',
				'tinymce' => 'true',
				'std' => '<p>&copy; 2013 by YOUR NAME. All Rights Reserved. Powered by <a href="#">Themeforest</a>.</p>',
				'height' => '200',
				'desc' => _x( 'Add footer content.', 'Admin Panel', SPECTRA_THEME )
			),

			// Show Social icons?
			array( 
				'name' => _x( 'Show Social Icons', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'social_icons',
				'type' => 'switch_button',
				'plugins' => array( 'switch_button' ),
				'std' => 'off',
				'desc' => _x( 'Show or hide social icons.', 'Admin Panel', SPECTRA_THEME ),
				'group' => 'show_socials'
			),

			// Social Columns
			array( 
				'name' => _x( 'Select Social Icons Layout', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'social_layout',
				'type' => 'select',
				'std' => '4',
				'desc' => _x( 'Select social column layout', 'Admin Panel', SPECTRA_THEME ),
				'options' => array( 
					array( 'name' => '1 Column', 'value' => '1'),
					array( 'name' => '2 Columns', 'value' => '2'),
					array( 'name' => '3 Columns', 'value' => '3'),
					array( 'name' => '4 Columns', 'value' => '4')
				),
				'main_group' => 'show_socials',
				'group_name' => array('social_icons')
			),

			// Socials icons
			array(
				'name' => _x( 'RSS', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'social_rss',
				'type' => 'text',
				'std' => '',
				'desc' => _x( 'Enter "rss". Note: Blank field hides the icon.', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'show_socials',
				'group_name' => array('social_icons')
			),
			array(
				'name' => _x( 'Twitter', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'social_twitter',
				'type' => 'text',
				'std' => '',
				'desc' => _x( 'Twitter URL (http://...). Note: Blank field hides the icon.', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'show_socials',
				'group_name' => array('social_icons')
			),
			array(
				'name' => _x( 'Facebook', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'social_facebook',
				'type' => 'text',
				'std' => '',
				'desc' => _x( 'Facebook URL (http://...). Note: Blank field hides the icon.', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'show_socials',
				'group_name' => array('social_icons')
			),
			array(
				'name' => _x( 'Google+', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'social_gplus',
				'type' => 'text',
				'std' => '',
				'desc' => _x( 'Google+ URL (http://...). Note: Blank field hides the icon.', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'show_socials',
				'group_name' => array('social_icons')
			),
			array(
				'name' => _x( 'Soundcloud', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'social_soundcloud',
				'type' => 'text',
				'std' => '',
				'desc' => _x( 'Soundcloud URL (http://...). Note: Blank field hides the icon.', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'show_socials',
				'group_name' => array('social_icons')
			),
			array(
				'name' => _x( 'Vimeo', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'social_vimeo',
				'type' => 'text',
				'std' => '',
				'desc' => _x( 'Vimeo URL (http://...). Note: Blank field hides the icon.', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'show_socials',
				'group_name' => array('social_icons')
			),
			array(
				'name' => _x( 'Youtube', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'social_youtube',
				'type' => 'text',
				'std' => '',
				'desc' => _x( 'Youtube URL (http://...). Note: Blank field hides the icon.', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'show_socials',
				'group_name' => array('social_icons')
			),
			array(
				'name' => _x( 'Dribbble', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'social_dribbble',
				'type' => 'text',
				'std' => '',
				'desc' => _x( 'YouTube URL (http://...). Note: Blank field hides the icon.', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'show_socials',
				'group_name' => array('social_icons')
			),
			array(
				'name' => _x( 'Flickr', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'social_flickr',
				'type' => 'text',
				'std' => '',
				'desc' => _x( 'Flickr URL (http://...). Note: Blank field hides the icon.', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'show_socials',
				'group_name' => array('social_icons')
			),
			array(
				'name' => _x( 'Delicious', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'social_delicious',
				'type' => 'text',
				'std' => '',
				'desc' => _x( 'Delicious URL (http://...). Note: Blank field hides the icon.', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'show_socials',
				'group_name' => array('social_icons')
			),
			array(
				'name' => _x( 'Pinterest', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'social_pinterest',
				'type' => 'text',
				'std' => '',
				'desc' => _x( 'Pinterest URL (http://...). Note: Blank field hides the icon.', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'show_socials',
				'group_name' => array('social_icons')
			),
			array(
				'name' => _x( 'Instagram', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'social_instagram',
				'type' => 'text',
				'std' => '',
				'desc' => _x( 'Instagram URL (http://...). Note: Blank field hides the icon.', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'show_socials',
				'group_name' => array('social_icons')
			),

		array( 
			'type' => 'sub_close'
		),

	
	array( 
		'type' => 'close'
	),


	/* Fonts
	-------------------------------------------------------- */
	array( 
		'type' => 'open',
		'tab_name' => _x( 'Fonts', 'Admin Panel', SPECTRA_THEME ),
		'tab_id' => 'fonts',
		'icon' => 'font'
	),

		/* Google fonts
		 -------------------------------------------------------- */
		array(
			'type' => 'sub_open',
			'sub_tab_name' => _x( 'Google Web Fonts', 'Admin Panel', SPECTRA_THEME ),
			'sub_tab_id' => 'sub-google-fonts',
		),
			array(
				'name' => _x( 'Google Fonts', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'use_google_fonts',
				'type' => 'switch_button',
				'plugins' => array( 'switch_button' ),
				'std' => 'on',
				'group' => 'google_fonts',
				'desc' => _x( 'When this option is enabled, the text elements will be automatically replaced with the Google Web Fonts.', 'Admin Panel', SPECTRA_THEME ),
			),
			array(
				'name' => _x( 'Google Fonts', 'Admin Panel', SPECTRA_THEME ),
				'sortable' => false,
				'array_name' => 'google_fonts',
				'id' => array(
							  array( 'type' => 'textarea', 'name' => 'font_link', 'id' => 'font_link', 'label' => 'Font Link:' )
							  ),
				'type' => 'sortable_list',
				'main_group' => 'google_fonts',
				'group_name' => array( 'use_google_fonts' ),
				'button_text' => _x( 'Add Font', 'Admin Panel', SPECTRA_THEME ),
				'desc' => _x( '1. Go to ', 'Admin Panel', SPECTRA_THEME ) . '<a href="http://www.google.com/webfonts" target="_blank">Google Fonts</a><br/>'._x( '2. Select your font and click on "Quick-use"', 'Admin Panel', SPECTRA_THEME ).'<br/>'._x( '3. Choose the styles you want (bold, italic...)', 'Admin Panel', SPECTRA_THEME ).'<br/>'._x( '4. Choose the character sets you want', 'Admin Panel', SPECTRA_THEME ).'<br/>'._x( '5. Copy code from "blue box" and paste. For example:', 'Admin Panel', SPECTRA_THEME ).'<br/><code> &lt;link href=\'http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic,900,900italic,300,300italic&subset=latin,latin-ext\' rel=\'stylesheet\' type=\'text/css\'&gt;</code>',
			),
			array(
				'name' => _x( 'Integrate The Fonts Into Your CSS', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'google_code',
				'type' => 'textarea',
				'height' => '100',
				'std' => '',
				'main_group' => 'google_fonts',
				'group_name' => array( 'use_google_fonts' ),
				'desc' => _x( '
							The Google Web Fonts API will generate the necessary browser-specific CSS to use the fonts. All you need to do is add the font name to your CSS styles. For example:', 'Admin Panel', SPECTRA_THEME ). '<br/> <code>
							h1,h2,h3,h4,h5,h6,body { font-family : "Roboto", sans-serif; }
							</code>
							',
			),
		array(
			'type' => 'sub_close'
		),
		

	array( 
		'type' => 'close'
	),


	/* Plugins
	-------------------------------------------------------- */
	array( 
		'type' => 'open',
		'tab_name' => _x( 'Plugins', 'Admin Panel', SPECTRA_THEME ),
		'tab_id' => 'plugins',
		'icon' => 'th-large'
	),

		/* DISQUS
		 -------------------------------------------------------- */
		array(
			'type' => 'sub_open',
			'sub_tab_name' => _x( 'DISQUS Comments', 'Admin Panel', SPECTRA_THEME ),
			'sub_tab_id' => 'sub-plugins-disqus'
		),

			// Enable Disqus comments
			array(
				'name' => _x( 'DISQUS Comments', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'disqus_comments',
				'type' => 'switch_button',
				'plugins' => array( 'switch_button' ),
				'std' => 'off',
				'desc' => _x( 'Enable DISQUS comments. Replace default Wordpress comments.', 'Admin Panel', SPECTRA_THEME ),
				'group' => 'disqus'
			),

			// Disqus ID
			array(
				'name' => _x( 'DISQUS Website\'s Shortname', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'disqus_shortname',
				'type' => 'text',
				'std' => '',
				'desc' => _x( 'Enter DISQUS Website\'s Shortname.', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'disqus',
				'group_name' => array( 'disqus_comments' )
			),
			
		array(
			'type' => 'sub_close'
		),
		

		/* Tracks
		 -------------------------------------------------------- */
		array(
			'type' => 'sub_open',
			'sub_tab_name' => _x( 'Tracks', 'Admin Panel', SPECTRA_THEME ),
			'sub_tab_id' => 'sub-plugins-tracks',
		),

			// Enable Scamp Player
			array(
				'name' => _x( 'Music Player', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'scamp_player',
				'type' => 'switch_button',
				'plugins' => array( 'switch_button' ),
				'std' => 'on',
				'desc' => _x( 'Enable music player. NOTE: Spectra Plugin must be instaled and activated.', 'Admin Panel', SPECTRA_THEME ),
				'group' => 'player',
			),

			// Autoplay
			array(
				'name' => _x( 'Autoplay', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'player_autoplay',
				'type' => 'switch_button',
				'plugins' => array( 'switch_button' ),
				'std' => 'off',
				'desc' => _x( 'Autoplay tracklist. NOTE: Autoplay does not work on mobile devices.', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'player',
				'group_name' => array( 'scamp_player' )
			),

			// Startup Tracklist
			array( 
				'name' => _x( 'Startup Tracklist', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'startup_tracklist',
				'type' => 'posts',
				'post_type' => 'spectra_tracks',
				'std' => 'none',
				'options' => array(
				   	array( 'name' => '', 'value' => 'none' )
				),
				'desc' => _x( 'Select startup tracklist.', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'player',
				'group_name' => array( 'scamp_player' )
			),

			// Show Player
			array(
				'name' => _x( 'Show Player on Startup', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'show_player',
				'type' => 'switch_button',
				'plugins' => array( 'switch_button' ),
				'std' => 'off',
				'desc' => _x( 'Show player on startup.', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'player',
				'group_name' => array( 'scamp_player' )
			),

			// Show Tracklist
			array(
				'name' => _x( 'Show Tracklist on Startup', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'show_tracklist',
				'type' => 'switch_button',
				'plugins' => array( 'switch_button' ),
				'std' => 'off',
				'desc' => _x( 'Show playlist on startup.', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'player',
				'group_name' => array( 'scamp_player' )
			),

			// Random Tracks
			array(
				'name' => _x( 'Random Play', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'player_random',
				'type' => 'switch_button',
				'plugins' => array( 'switch_button' ),
				'std' => 'off',
				'desc' => _x( 'Random play tracks.', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'player',
				'group_name' => array( 'scamp_player' )
			),

			// Loop Tracks
			array(
				'name' => _x( 'Loop Tracklist', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'player_loop',
				'type' => 'switch_button',
				'plugins' => array( 'switch_button' ),
				'std' => 'off',
				'desc' => _x( 'Loop tracklist.', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'player',
				'group_name' => array( 'scamp_player' )
			),

			// Titlebar
			array(
				'name' => _x( 'Change Titlebar', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'player_titlebar',
				'type' => 'switch_button',
				'plugins' => array( 'switch_button' ),
				'std' => 'off',
				'desc' => _x( 'Replace browser titlebar on track title.', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'player',
				'group_name' => array( 'scamp_player' )
			),

			// Player Skin
			array( 
				'name' => _x( 'Player Skin', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'player_skin',
				'type' => 'select',
				'std' => 'dark',
				'desc' => _x( 'Select player skin.', 'Admin Panel', SPECTRA_THEME ),
				'options' => array( 
					array( 'name' => 'Light', 'value' => 'light'),
					array( 'name' => 'Dark', 'value' => 'dark')
				),
				'main_group' => 'player',
				'group_name' => array( 'scamp_player' )
			),

			// Soundcloud Client ID
			array(
				'name' => _x( 'Soundcloud Client ID', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'soundcloud_id',
				'type' => 'text',
				'std' => '',
				'desc' => _x( 'Add your Soundcloud ID', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'player',
				'group_name' => array( 'scamp_player' )
			),

			// Startup Volume
			array( 
				'name' => _x( 'Startup Volume', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'player_volume',
				'type' => 'range',
				'plugins' => array( 'range' ),
				'min' => 0,
				'max' => 100,
				'unit' => '',
				'std' => '70',
				'desc' => _x( 'Set startup volume.', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'player',
				'group_name' => array( 'scamp_player' )
			),

			// Accent Color
			array( 
				'name' => _x( 'Player Accent Color', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'player_color',
				'type' => 'color',
				'plugins' => array( 'colorpicker' ),
				'std' => '#F45826',
				'desc' => _x( 'Select accent color.', 'Admin Panel', SPECTRA_THEME ),
				'main_group' => 'player',
				'group_name' => array( 'scamp_player' )
			),
			
		array(
			'type' => 'sub_close'
		),
		

	array( 
		'type' => 'close'
	),


	/* Sidebars
	 ------------------------------------------------------------------------------------------ */
	array(
		'type' => 'open',
		'tab_name' => _x( 'Sidebars', 'Admin Panel', SPECTRA_THEME ),
		'tab_id' => 'sidebars',
		'icon' => 'bars'
	),
		array(
			'type' => 'sub_open',
			'sub_tab_name' => _x( 'Sidebars', 'Admin Panel', SPECTRA_THEME ),
			'sub_tab_id' => 'sub-sidebars'
		),
			array(
				'name' => _x( 'Sidebars', 'Admin Panel', SPECTRA_THEME ),
				'sortable' => false,
				'array_name' => 'custom_sidebars',
				'id' => array(
							  array( 'name' => 'name', 'id' => 'sidebar', 'label' => 'Name:' )
							  ),
				'type' => 'sortable_list',
				'button_text' => _x( 'Add Sidebar', 'Admin Panel', SPECTRA_THEME ),
				'desc' => _x( 'Add your custom sidebars.', 'Admin Panel', SPECTRA_THEME )
			),
		array(
			'type' => 'sub_close'
		),
	array(
		'type' => 'close'
	),

	
	/* Quick Edit
	 ------------------------------------------------------------------------------------------ */
	array(
		'type'     => 'open',
		'tab_name' => _x( 'Quick Edit', 'Admin Panel', SPECTRA_THEME ),
		'tab_id'   => 'editing',
		'icon' => 'code'
	),
	
		/* Custom CSS */
		array(
			'type'         => 'sub_open',
			'sub_tab_name' => _x( 'CSS', 'Admin Panel', SPECTRA_THEME ),
			'sub_tab_id'   => 'sub-custom-css'
		),
			array(
				'type'   => 'code_editor',
				'plugins' => array( 'code_editor' ),
				'lang' => 'css',
				'std'    => '',
				'height' => '200',
				'desc'   => _x( 'Add your custom CSS rules here. Every main CSS rule can be adjusted. Whenever you want to change theme style always use this field. When you do that you\'ll have assurance that whenever you upgrade the theme, your code will stay untouched. Avoid making changes to "style.css" file directly. Whenever you change something, you can always export your data using Advanced > Import/Export.', 'Admin Panel', SPECTRA_THEME ),
				'id'     => 'custom_css'
			),
		array(
			'type' => 'sub_close'
		),
	
		/* Custom Javascript */
		array(
			'type'         => 'sub_open',
			'sub_tab_name' => _x( 'Javascript', 'Admin Panel', SPECTRA_THEME ),
			'sub_tab_id'   => 'sub-custom-js'
		),
			array(
				'type'   => 'code_editor',
				'plugins' => array( 'code_editor' ),
				'lang' => 'js',
				'std'    => '',
				'height' => '200',
				'desc'   => _x( 'Add your custom Javascript code.  Below you have simple example of jQuery script:', 'Admin Panel', SPECTRA_THEME ) . '<br/><code>jQuery.noConflict(); <br/>jQuery(document).ready(function () { <br/>alert(\'Hello World!\' );<br/>});</code>',
				'id'     => 'custom_js'
			),
		array(
			'type' => 'sub_close'
		),
	
	array(
		'type' => 'close'
	),

	/* Advanced
	-------------------------------------------------------- */
	array( 
		'type' => 'open',
		'tab_name' => _x( 'Advanced', 'Admin Panel', SPECTRA_THEME ),
		'tab_id' => 'advanced',
		'icon' => 'wrench'
	),

		/* Ajax
		 -------------------------------------------------------- */
		array(
			'type' => 'sub_open',
			'sub_tab_name' => _x( 'Ajax', 'Admin Panel', SPECTRA_THEME ),
			'sub_tab_id' => 'sub-ajax'
		),
			// Ajax classes
			array( 
				'name' => _x( 'AJAX Filter', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'ajax_elements',
				'type' => 'textarea',
				'tinymce' => 'false',
				'std' => '.sp-play-list,.sp-add-list,.sp-play-track,.sp-add-track,.smooth-scroll,.ui-tabs-nav li a, .wpb_tour_next_prev_nav span a,.wpb_accordion_header a',
				'height' => '60',
				'desc' => _x( 'Add selectors separated by commas. These elements will not be processed by AJAX. NOTE: Don\'t remove default elements.', 'Admin Panel', SPECTRA_THEME )
			),

			// Ajax events
			array( 
				'name' => _x( 'AJAX Events', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'ajax_events',
				'type' => 'textarea',
				'tinymce' => 'false',
				'std' => 'YTAPIReady,getVideoInfo_bgndVideo',
				'height' => '60',
				'desc' => _x( 'Add events separated by commas. These events will be removed after page page by AJAX. NOTE: Don\'t remove default events.', 'Admin Panel', SPECTRA_THEME )
			),

			// Ajax reload scripts
			array( 
				'name' => _x( 'AJAX Reload Scripts', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'ajax_reload_scripts',
				'type' => 'textarea',
				'tinymce' => 'false',
				'std' => '/js/custom.js,shortcodes/assets/js/shortcodes.js,contact-form-7/includes/js/scripts.js,js_composer_front.js',
				'height' => '60',
				'desc' => _x( 'Add strings for reloaded scripts separated by commas. These scripts will be reloaded after page page by AJAX. NOTE: Don\'t remove default scripts.', 'Admin Panel', SPECTRA_THEME )
			),

			// Ajax Async
			array(
				'name' => _x( 'Asynchronous', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'ajax_async',
				'type' => 'switch_button',
				'plugins' => array( 'switch_button' ),
				'std' => 'on',
				'desc' => _x( 'Asynchronous AJAX.', 'Admin Panel', SPECTRA_THEME )
			),

			// Ajax Cache
			array(
				'name' => _x( 'Ajax Cache', 'Admin Panel', SPECTRA_THEME ),
				'id' => 'ajax_cache',
				'type' => 'switch_button',
				'plugins' => array( 'switch_button' ),
				'std' => 'off',
				'desc' => _x( 'AJAX Cache.', 'Admin Panel', SPECTRA_THEME )
			),
			
		array(
			'type' => 'sub_close'
		),


		/* Import and export
		 -------------------------------------------------------- */
		array( 
			'type' => 'sub_open',
			'sub_tab_name' => _x( 'Import/Export', 'Admin Panel', SPECTRA_THEME ),
			'sub_tab_id' => 'sub-import'
		),
			array( 
				'type' => 'export'
			),
			array( 
				'type' => 'import'
			),
		array( 
			'type' => 'sub_close'
		),

	array( 
		'type' => 'close'
	),


	/* Hidden fields
	 -------------------------------------------------------- */
	array( 
		'type' => 'hidden_field',
		'id' => 'theme_name',
		'value' => SPECTRA_THEME
	),
	
);


/* Dummy data
 ------------------------------------------------------------------------*/
$dummy_data = 'YTozNjp7czo2OiJhamF4ZWQiO3M6Mzoib2ZmIjtzOjExOiJjdXN0b21fZGF0ZSI7czo0OiJGLCBqIjtzOjE5OiJjdXN0b21fY29tbWVudF9kYXRlIjtzOjEyOiJGIGosIFkgKEg6aSkiO3M6MTA6ImV2ZW50X2RhdGUiO3M6MzoiZC9tIjtzOjY6InJldGluYSI7czozOiJvZmYiO3M6MTg6ImNvbnRlbnRfYW5pbWF0aW9ucyI7czozOiJvZmYiO3M6MTc6Im1vYmlsZV9hbmltYXRpb25zIjtzOjM6Im9mZiI7czoxMzoic2xpZGVfc2lkZWJhciI7czoyOiJvbiI7czoxNToic2hvd19uYXZpZ2F0aW9uIjtzOjM6Im9mZiI7czoxNDoiZm9vdGVyX2NvbnRlbnQiO3M6MTY5OiI8cCBzdHlsZT0idGV4dC1hbGlnbjogY2VudGVyOyIgZGF0YS1tY2Utc3R5bGU9InRleHQtYWxpZ246IGNlbnRlcjsiPjIwMTMgYnkgWU9VUiBOQU1FLiBBbGwgUmlnaHRzIFJlc2VydmVkLiBQb3dlcmVkIGJ5IDxhIGhyZWY9IiMiIGRhdGEtbWNlLWhyZWY9IiMiPlRoZW1lZm9yZXN0PC9hPi48L3A+IjtzOjEyOiJzb2NpYWxfaWNvbnMiO3M6Mjoib24iO3M6MTM6InNvY2lhbF9sYXlvdXQiO3M6MToiMyI7czoxNDoic29jaWFsX3R3aXR0ZXIiO3M6MToiIyI7czoxNToic29jaWFsX2ZhY2Vib29rIjtzOjE6IiMiO3M6MTI6InNvY2lhbF9ncGx1cyI7czoxOiIjIjtzOjE2OiJ1c2VfZ29vZ2xlX2ZvbnRzIjtzOjI6Im9uIjtzOjEyOiJnb29nbGVfZm9udHMiO2E6MTp7aTowO2E6MTp7czo5OiJmb250X2xpbmsiO3M6MTQ4OiI8bGluayBocmVmPSdodHRwOi8vZm9udHMuZ29vZ2xlYXBpcy5jb20vY3NzP2ZhbWlseT1Sb2JvdG86NDAwLDQwMGl0YWxpYyw3MDAsNzAwaXRhbGljLDkwMCw5MDBpdGFsaWMsMzAwLDMwMGl0YWxpYycgcmVsPSdzdHlsZXNoZWV0JyB0eXBlPSd0ZXh0L2Nzcyc+Ijt9fXM6MTU6ImRpc3F1c19jb21tZW50cyI7czozOiJvZmYiO3M6MTI6InNjYW1wX3BsYXllciI7czoyOiJvbiI7czoxNToicGxheWVyX2F1dG9wbGF5IjtzOjM6Im9mZiI7czoxNzoic3RhcnR1cF90cmFja2xpc3QiO3M6NDoibm9uZSI7czoxMToic2hvd19wbGF5ZXIiO3M6Mzoib2ZmIjtzOjE0OiJzaG93X3RyYWNrbGlzdCI7czozOiJvZmYiO3M6MTM6InBsYXllcl9yYW5kb20iO3M6Mzoib2ZmIjtzOjExOiJwbGF5ZXJfbG9vcCI7czozOiJvZmYiO3M6MTU6InBsYXllcl90aXRsZWJhciI7czozOiJvZmYiO3M6MTE6InBsYXllcl9za2luIjtzOjU6ImxpZ2h0IjtzOjEzOiJwbGF5ZXJfdm9sdW1lIjtzOjI6IjcwIjtzOjEyOiJwbGF5ZXJfY29sb3IiO3M6NzoiI0Y0NTgyNiI7czoxNToiY3VzdG9tX3NpZGViYXJzIjthOjE6e2k6MDthOjE6e3M6NDoibmFtZSI7czoxNDoiQ3VzdG9tIFNpZGViYXIiO319czoxMzoiYWpheF9lbGVtZW50cyI7czoxNDQ6Ii5zcC1wbGF5LWxpc3QsLnNwLWFkZC1saXN0LC5zcC1wbGF5LXRyYWNrLC5zcC1hZGQtdHJhY2ssLnNtb290aC1zY3JvbGwsLnVpLXRhYnMtbmF2IGxpIGEsIC53cGJfdG91cl9uZXh0X3ByZXZfbmF2IHNwYW4gYSwud3BiX2FjY29yZGlvbl9oZWFkZXIgYSI7czoxMToiYWpheF9ldmVudHMiO3M6MzM6IllUQVBJUmVhZHksZ2V0VmlkZW9JbmZvX2JnbmRWaWRlbyI7czoxOToiYWpheF9yZWxvYWRfc2NyaXB0cyI7czoxMDc6Ii9qcy9jdXN0b20uanMsc2hvcnRjb2Rlcy9hc3NldHMvanMvc2hvcnRjb2Rlcy5qcyxjb250YWN0LWZvcm0tNy9pbmNsdWRlcy9qcy9zY3JpcHRzLmpzLGpzX2NvbXBvc2VyX2Zyb250LmpzIjtzOjEwOiJhamF4X2FzeW5jIjtzOjI6Im9uIjtzOjEwOiJhamF4X2NhY2hlIjtzOjM6Im9mZiI7czoxMDoidGhlbWVfbmFtZSI7czo3OiJzcGVjdHJhIjt9';


/* init Panel
 ------------------------------------------------------------------------*/

global $spectra_opts;

/* Class arguments */
$args = array(
	'admin_path'  => '',
	'admin_uri'	 => '',
	'panel_logo' => '',
	'menu_name' => _x( 'Options', 'Admin Panel', SPECTRA_THEME ), 
	'page_name' => 'panel-main.php',
	'option_name' => 'spectra_panel_opts',
	'admin_dir' => '/admin',
	'menu_icon' => '',
	'dummy_data' => $dummy_data,
	'textdomain' => SPECTRA_THEME
	);

/* Add class instance */
$spectra_opts = new R_Panel( $args, $spectra_main_options );

/* Remove variables */
unset( $args );
?>