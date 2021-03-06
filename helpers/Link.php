<?php

class Link {
    /**
     * This class will mainly be used
     * to build links with static methods
     */

     /**
      * @var String
      */
     private static $absolute_style_path = 'http://localhost/Snail-Documentation/assets/css/';

     /**
      * @var String
      */
     private static $absolute_script_path =  'http://localhost/Snail-Documentation/assets/js/';

    /**
     * @var String
     */
     private static $absolute_img_path = 'http://localhost/Snail-Documentation/assets/img/';
	
	/**
	 * @var String
	 */
	private static $absolute_path = 'http://localhost/Snail-Documentation/assets/';


    /**
     * @param $css_file
     * @param $folder
     *
     * Generates a stylesheet link
     */
     public static function style($css_file, $folder = null) {
	     if ($folder == null) {
		     echo '<link href="' . self::$absolute_style_path . $css_file . '" rel="stylesheet">' . "\n";
	     } else {
		     echo '<link href="' . self::$absolute_path . $folder . '/' . $css_file . '" rel="stylesheet">' . "\n";
	     }
     }

    /**
     * @param $js_file
     * @param $folder
     *
     * Generates a javascript
     * file link
     */
     public static function script($js_file, $folder = null) {
	     if ($folder == null) {
		     echo '<script src="' . self::$absolute_script_path . $js_file . '"></script>' . "\n";
	     } else {
		     echo '<script src="' . self::$absolute_path . $folder . '/' . $js_file . '"></script>' . "\n";
	     }
     }

    /**
     * @param $font
     *
     * Generates a google font style tag
     */
    public static function google_font($font) {
        echo '<link href="' . $font . '" rel="stylesheet">' . "\n";
    }

    /**
     * @param $src
     * @param $width
     * @param $height
     * @param $css
     * @param $folder
     *
     * generates img tag
     */
    public static function img($src, $width, $height, $css = null, $folder = null) {
        /*
         * @var String
         */
	    if ($folder == null) {
		    $src = self::$absolute_img_path . $src;
	    } else{
		    $src = self::$absolute_path . $folder . '/' . $src;
	    }
        

        echo '<img src="' . $src . '" class="' . empty($css) ? "" : $css . '"
               width="' . $width . '" height="' . $height.'">' . "\t";
    }

    /**
     * @param $search_term
     * @param $between_tags
     *
     * Googles the given search term
     */
    public static function google($search_term, $between_tags) {
        /*
         * @var Array
         */
        $split = explode(" ", $search_term);

        /*
         * @var String
         */
        $search_term = "https://www.google.nl/#q=";

        /*
         * @var Integer
         */
        $last_index = Arr::find_index($split, Arr::last($split));

        for ($ii = 0; $ii < Arr::size($split); $ii++) {
            $search_term .= $split[$ii];
            $search_term .= $last_index != $ii ? "+" : "";
        }

        echo '<a href="' . $search_term . '">' . $between_tags . '</a>';
    }
}