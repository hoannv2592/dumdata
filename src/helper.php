<?php
/**
 * Set DIE function
 * @author Hoannv <vanhoanpt92@gmail.com>
 */

if (!function_exists('dd')) {
    function dd()
    {
        $args = func_get_args();
        call_user_func_array('dump', $args);
        die();
    }
}

/**
 * SET Dump data 
 * @author Hoannv <vanhoanpt92@gmail.com>
 */
if (!function_exists('d')) {
    function d()
    {
        $args = func_get_args();
        call_user_func_array('dump', $args);
    }
}