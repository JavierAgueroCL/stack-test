<?php
namespace App\Helpers;
use Request;

class MenuHelper
{
    public static function prefix($prefix) {
		$out = "";
    	if(Request::is($prefix.'/*')) {
			$out .= "m-menu__item--active m-menu__item--open";
		}

		return $out;
    }
	 public static function submenu($prefix) {
	  $out = "";
	  if(Request::is('*/'.$prefix)) {
		  $out .= "m-menu__item--active";
	  }
	  return $out;
	 }
}
