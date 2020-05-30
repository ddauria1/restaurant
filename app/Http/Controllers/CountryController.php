<?php

namespace App\Http\Controllers;

use App\Model\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{


    public function list()
    {


        $country = Country::all();


        return view('admin.restaurants.country.list', ['title' => "Country | List", "country" => $country]);
    }


    public function create()
    {


        $country = Country::all();


        return view('admin.restaurants.country.create', ['title' => "Country | Create"]);
    }


    public function store(Request $request)
    {


        $post = $request->all();
        $error = false;

        if (isset($post) && !empty($post)) { //first layer of validation
            $country = new Country();
            $country->fill($post);
            $country->save(); //add country

        } else {
            $error = true;
        }


        return redirect('/admin/restaurants/country');
    }


    public function delete($country)

    {

        Country::destroy($country);


        return redirect('/admin/restaurants/country');
    }
}
