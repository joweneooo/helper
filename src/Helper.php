<?php 

namespace Neooo\Helper;


/**
 * Helper class for susyem 
 */
class Helper {

    /**
     * Random dunber
     */
    public static function rand()
    {
        return rand();
    }

    /**
     * Make Slug
     */
    public static function getSlug($title)
    {
        return strtolower(str_replace(' ', '-', $title));
    }

    /**
     * Get file Extension 
     */

     public static function getExtention($file_name)
     {
        $file_arr =  explode('.', $file_name);
        $file_ext = end( $file_arr ); 
        return strtolower( $file_ext );
     }


}