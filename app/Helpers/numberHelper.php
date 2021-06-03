<?php

if (!function_exists('increment')) {
    function increment(){
        static $i = 0 ;
      return $i= $i +1;
       
    }
  }
?>