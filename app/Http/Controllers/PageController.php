<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
     public function index()

     {
        $data =array(
            'title'=>'services',
            'services'=>['web','program','assic']
        );
         return view("page.index") ->with($data);
     }



     public function Services()
     {
         $title = 'hi iam here';
        //  return view("page.services",compact("title"));
         return view("page.services")->with("title",$title);
     }
}
