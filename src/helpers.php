<?php

if (! funtion_exists('upper')) {
    function upper($value){
        return Text\Format::upperText($value);
    }
}
if (! funtion_exists('lower')) {
    function lower($value){
        return Text\Format::lowerText($value);
    }
}
