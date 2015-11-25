<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    protected $slide_path = 'slide-show/';
    protected $technique_path = 'techniques/';
    protected $category_path = 'category-images/';
    protected $color_path = 'colors/';
    protected $products_path = 'products/';

    protected function admin_content_path() {
        $path = public_path('assets/content_application/');
        return $path;
    }

    protected function app_content_path() {

    	if (\App::environment('local')) {
		    $path = base_path('../ab15_frontend/public_html/content/');
		} else if (\App::environment('production')) {
			$path = base_path('../public_html/content/');
		}
    	
    	return $path;
    }

    protected function link_generator($route, $name) {
        return "<strong><a href='" . $route . "' class='alert-link' title='" . $name . "'>" . $name . "</a></strong>";
    }
}
