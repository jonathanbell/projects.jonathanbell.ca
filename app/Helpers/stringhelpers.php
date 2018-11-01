<?php

// See: /vendor/laravel/framework/src/Illuminate/Foundation/helpers.php
// for more ideas.

if (! function_exists('comma_values_to_array')) {
    /**
     * Make an array from comma seperated values.
     *
     * @param  str    $str
     * @return array
     */
    function comma_values_to_array($str) {
        $old = explode(',', $str);
        $new = array();

        foreach($old as $item) {
            $s = trim($item);
            if (!empty($s)) {
                $new[] = $s;
            }
        }

        return $new;
    }
}
