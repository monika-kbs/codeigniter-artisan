<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('url')) {
  function url($route = '') {
    return site_url($route);
  }
}

if (!function_exists('css')) {
	function css($file) {
		return site_url() . 'assets/css/' . $file;
	}
}

if (!function_exists('js')) {
	function js($file) {
		return site_url() . 'assets/js/' . $file;
	}
}


if (!function_exists('dd')) {
	function dd($data, $var_dump = false) {
		echo "<pre>";
		if ($var_dump) {
			var_dump($data);
		} else {
			print_r($data);
		}
		echo "</pre>";
		die;
	}
}

if (!function_exists('msg')) {
	function msg($key) {
		return config_item($key) ?? '';
	}
}

if (!function_exists('dump')) {
	function dump($data, $var_dump = false) {
		echo "<pre>";
		if ($var_dump) {
			var_dump($data);
		} else {
			print_r($data);
		}
		echo "</pre>";
	}
}

if (!function_exists('str_parse')) {
 function str_parse($txt)
 {
    $txt = preg_replace("/[\r\n]+/", "\n", $txt);
    return preg_replace("/\s+/", ' ', $txt);
 }
}

if (!function_exists('active')) {
 function active($route)
 {
 	$CI =& get_instance();
    return ($CI->uri->segment(2) == $route) ? 'active' : '';
 }
}

if (!function_exists('plugins')) {
  function plugins($file) {
    return site_url() . 'assets/plugins/' . $file;
  }
}

if (!function_exists('bootstrap')) {
  function bootstrap($file) {
    return site_url() . 'assets/bootstrap/' . $file;
  }
}
