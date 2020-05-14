<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Restaurant;
use Illuminate\Support\Facades\DB;

class RestaurantsController extends Controller{

    public function list(){

        $restaurants = Restaurant::all();

        return view('admin.restaurants.list',['title'=>"Restaurants | List","restaurants"=>$restaurants]);
    }

    public function show($id){
        $restaurant = Restaurant::find($id);

        return view('admin.restaurants.show',['title'=>"Restaurant | Profile","restaurant"=>$restaurant]);
    }

    public function create(){

        return view('admin.restaurants.create',['title'=>"Restaurants | Add Restaurant"]);
    }

    public function store(Request $request){

        $post = $request->all();
        $error = false;

        if(isset($post) && !empty($post)){ //first layer of validation
            $restaurant = new Restaurant();
            $restaurant->fill($post);
            $restaurant->created = date("Y-m-d H:i:s");
            $restaurant->updated = date("Y-m-d H:i:s");
            $restaurant->save(); //add restaurant
        }else{ $error = true; }

        return view('admin.restaurants.create',['title'=>"Restaurants | Add Restaurant","error"=>$error]);
    }
}



