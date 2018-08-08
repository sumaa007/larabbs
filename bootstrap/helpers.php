<?php

function route_class() {
    return str_replace('.', '-', Route::currentRouteName());
}

if ( !function_exists('pp')) {
    /**
     * 调试用
     *
     * @param $v
     */
    function pp($v)
    {
        echo '<pre>';
        print_r($v);
        echo '</pre>';
    }
}