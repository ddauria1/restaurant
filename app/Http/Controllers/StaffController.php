<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Staff;
use App\Model\Restaurant;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller{

    public function list(){

        $staff = DB::select('
                SELECT rls.*,r.name AS restaurantName,u.name AS staffName
                FROM restaurants_link_staff AS rls,restaurants AS r, users AS u
                WHERE rls.restaurantID=r.id
                AND rls.uid=u.id');

        return view('admin.staff.list',['title'=>"Staff | List","staff"=>$staff]);
    }

    /*public function show($id){
        $restaurant = Restaurant::find($id);
        $countries =  Country::all();

        return view('admin.restaurants.show',['title'=>"Restaurant | Profile","restaurant"=>$restaurant,"countries"=>$countries]);
    }

    public function create(){
        $countries =  Country::all();
        return view('admin.restaurants.create',['title'=>"Restaurants | Add Restaurant",'countries'=>$countries]);
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

        $countries =  Country::all();
        return view('admin.restaurants.create',['title'=>"Restaurants | Add Restaurant","error"=>$error,'countries'=>$countries]);
    }

    public function update(Request $request){

        $post = $request->all();
        $error = false;
        if(isset($post) && !empty($post)){ //first layer of validation
            $restaurant = Restaurant::find($post['id']);
            $restaurant->fill($post);
            $restaurant->updated = date("Y-m-d H:i:s");
            $restaurant->save(); //edit restaurant
        }else{ $error = true; }

        $countries =  Country::all();

        return view('admin.restaurants.show',['title'=>"Restaurants | Profile","error"=>$error,"restaurant"=>$restaurant,'countries'=>$countries]);
    }

    public function delete($id){
        $error = true;
        if(isset($id) && !empty($id) && is_numeric($id)){
            $restaurant = Restaurant::find($id);
            $restaurant->delete();
            $error = false;
        }

        $restaurants = Restaurant::all();

        return view('admin.restaurants.list',['title'=>"Restaurants | List","restaurants"=>$restaurants,"error"=>$error]);
    }*/
}



