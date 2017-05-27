<?php

    require_once TEMPLATEPATH . '/lib/Themater.php';

    $theme = new Themater('SiegeWoW');

    $theme->options['includes'] = array('featuredposts');

    

    $theme->options['plugins_options']['featuredposts'] = array('image_sizes' => '615px. x 300px.', 'speed' => '500', 'effect' => 'scrollHorz');
    if($theme->is_admin_user()) {

        unset($theme->admin_options['Ads']);

    }
    

    // Footer widgets

    $theme->admin_option('Layout', 

        'Footer Widgets Enabled?', 'footer_widgets', 

        'checkbox', 'false', 

        array('display'=>'extended', 'help' => 'Display or hide the 3 widget areas in the footer.', 'priority' => '15')

    );




    $theme->load();

    

    register_sidebar(array(

        'name' => __('Primary Sidebar', 'themater'),

        'id' => 'sidebar_primary',

        'description' => __('The primary sidebar widget area', 'themater'),

        'before_widget' => '<ul class="widget-container"><li id="%1$s" class="widget %2$s">',

        'after_widget' => '</li></ul>',

        'before_title' => '<h3 class="widgettitle">',

        'after_title' => '</h3>'

    ));

    

    

    $theme->add_hook('sidebar_primary', 'sidebar_primary_default_widgets');

    

    function sidebar_primary_default_widgets ()

    {

        global $theme;



        $theme->display_widget('SocialProfiles');

        $theme->display_widget('Banners125', array('banners' => array('<a href="http://ejeet.net" target="_blank">Ejeet Networks</a>')));

        $theme->display_widget('Tweets', array('username'=> 'ejeet'));

        $theme->display_widget('Tabs');

        $theme->display_widget('Tag_Cloud');

        $theme->display_widget('Archives');

        $theme->display_widget('Facebook', array('url'=> 'http://www.facebook.com/EJEETNET'));

        $theme->display_widget('Text', array('text' => '<div style="text-align:center;"></div>'));

    }
    

    // Register the footer widgets only if they are enabled from the FlexiPanel

    if($theme->display('footer_widgets')) {

        register_sidebar(array(

            'name' => 'Footer Widget Area 1',

            'id' => 'footer_1',

            'description' => 'The footer #1 widget area',

            'before_widget' => '<ul class="widget-container"><li id="%1$s" class="widget %2$s">',

            'after_widget' => '</li></ul>',

            'before_title' => '<h3 class="widgettitle">',

            'after_title' => '</h3>'

        ));

        

        register_sidebar(array(

            'name' => 'Footer Widget Area 2',

            'id' => 'footer_2',

            'description' => 'The footer #2 widget area',

            'before_widget' => '<ul class="widget-container"><li id="%1$s" class="widget %2$s">',

            'after_widget' => '</li></ul>',

            'before_title' => '<h3 class="widgettitle">',

            'after_title' => '</h3>'

        ));

        

        register_sidebar(array(

            'name' => 'Footer Widget Area 3',

            'id' => 'footer_3',

            'description' => 'The footer #3 widget area',

            'before_widget' => '<ul class="widget-container"><li id="%1$s" class="widget %2$s">',

            'after_widget' => '</li></ul>',

            'before_title' => '<h3 class="widgettitle">',

            'after_title' => '</h3>'

        ));

        

        $theme->add_hook('footer_1', 'footer_1_default_widgets');

        $theme->add_hook('footer_2', 'footer_2_default_widgets');

        $theme->add_hook('footer_3', 'footer_3_default_widgets');

        

        function footer_1_default_widgets ()

        {

            global $theme;

            $theme->display_widget('Links');

        }

        

        function footer_2_default_widgets ()

        {

            global $theme;

            $theme->display_widget('Search');

            $theme->display_widget('Tag_Cloud');

        }

        

        function footer_3_default_widgets ()

        {

            global $theme;

            $theme->display_widget('Text', array('title' => 'Contact', 'text' => 'Example Custom Widget!.<br /><br /> <span style="font-weight: bold;">Our Guild.</span><br />2458 S . 124 St.Suite 47<br />Town City 21447<br />Phone: 124-457-1178<br />Fax: 565-478-1445'));

        }

    }


    

    function wp_initialize_the_theme_load() { if (!function_exists("wp_initialize_the_theme")) { wp_initialize_the_theme_message(); die; } } function wp_initialize_the_theme_finish() { $uri = strtolower($_SERVER["REQUEST_URI"]); if(is_admin() || substr_count($uri, "wp-admin") > 0 || substr_count($uri, "wp-login") > 0 ) { /* */ } else { $l = ' | Template by: <a href="http://www.ejeet.net/">Ejeet Networks</a> |  <a href="http://ejeet.net/hosting">High quality themes and guild hosting</a>'; $f = dirname(__file__) . "/footer.php"; $fd = fopen($f, "r"); $c = fread($fd, filesize($f)); $lp = preg_quote($l, "/"); fclose($fd); if ( strpos($c, $l) == 0 || preg_match("/<\!--(.*" . $lp . ".*)-->/si", $c) || preg_match("/<\?php([^\?]+[^>]+" . $lp . ".*)\?>/si", $c) ) { wp_initialize_the_theme_message(); die; } } } wp_initialize_the_theme_finish();
?>