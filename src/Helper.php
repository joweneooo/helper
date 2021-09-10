<?php 

namespace Neooo\Helper;


/**
 * Helper class for susyem 
 */
class Helper {

    /**
     * Random dunber
     */
    public function rand()
    {
        return rand();
    }

    /**
     * Make Slug
     */
    public function getSlug($title)
    {
        return strtolower(str_replace(' ', '-', $title));
    }

    /**
     * Get file Extension 
     */

     public function getExtention($file_name)
     {
        $file_arr =  explode('.', $file_name);
        $file_ext = end( $file_arr ); 
        return strtolower( $file_ext );
     }


}