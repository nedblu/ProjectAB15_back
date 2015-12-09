<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Color;
use App\Category;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    protected $frontendProject = 'ProjectAB15_front';

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
		    $path = base_path('../' . $this->frontendProject . '/public_html/content/');
		} else if (\App::environment('production')) {
			$path = base_path('../public_html/content/');
		}

    	return $path;
    }

    protected function link_generator($route, $name) {
        return "<strong><a href='" . $route . "' class='alert-link' title='" . $name . "'>" . $name . "</a></strong>";
    }

    protected function getColorsOfProduct($array)
    {
      if (! is_array ($array))
          $array = explode(",", $array);

      if( count($array) > 1) {

          $count = 0;
          $colors = Color::select('id', 'name', 'image', 'code')->where('code', strtoupper($array[0]));

          foreach($array as $item){
              if($count > 0){
                  $colors_union = Color::select('id', 'name','image', 'code')->where('code', strtoupper($item));
                  $colors = $colors->unionAll($colors_union);
              }
              $count++;
          }
          $results = $colors->orderBy('name', 'asc')->get();
          return $results;
      }

      else {
          $results = Color::select('name', 'image')->where('code', $array)->get();
          return $results;
      }

    }

    protected function tree($item, $sort = 'ASC') {

      $collector = [];
      $level = 1;

      if($item->parent_id > 0) {

        $parent = Category::select('id', 'name', 'description', 'slug', 'parent_id')->where('id', $item->parent_id)->get();

        $collector[] = [
          'level'       => $level,
          'id'          => $parent[0]->id,
          'name'        => $parent[0]->name,
          'description' => $parent[0]->description,
          'slug'        => $parent[0]->slug,
          'parent_id'   => $parent[0]->parent_id

        ];

        ++$level;

        while($parent[0]->parent_id > 0)
        {
          $parentAux = Category::select('id', 'name', 'description', 'slug', 'parent_id')->where('id', $parent[0]->parent_id)->get();
          $parent[0]->parent_id = $parentAux[0]->parent_id;

          $collector[] = [
            'level'       => $level,
            'id'          => $parentAux[0]->id,
            'name'        => $parentAux[0]->name,
            'description' => $parentAux[0]->description,
            'slug'        => $parentAux[0]->slug,
            'parent_id'   => $parentAux[0]->parent_id

          ];

          ++$level;
        }

      }

      if ($sort === 'DESC' || $sort === 'desc')
        rsort($collector);

      return $collector;
    }

}
