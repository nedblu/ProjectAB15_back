<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    protected $slide_path = 'slide-show/';
    protected $technique_path = 'technique/';

    protected function admin_content_path() {
        $path = public_path('assets/content_application/');
        return $path;
    }

    protected function app_content_path() {

    	if (\App::environment('local')) {
		    $path = base_path('../alphabeta_web/public_html/content/');
		} else if (\App::environment('production')) {
			$path = base_path('../public_html/content/');
		}
    	
    	return $path;
    }
}
