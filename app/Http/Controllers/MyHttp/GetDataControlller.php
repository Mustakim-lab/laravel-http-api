<?php

namespace App\Http\Controllers\MyHttp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetDataControlller extends Controller
{
    public function index()
    {
       $collection= Http::get("https://reqres.in/api/users?page=1");

       //dd($collection);
       return view('ApiData.showdata',['collection'=>$collection['data']]);
    }

    public function single()
    {
        $collection=Http::get("https://reqres.in/api/users/8");

        //return $collection->json();

        return view('ApiData.singledata',['collection'=>$collection['data']]);
    }


    public function resource()
    {
        $collection=Http::get("https://reqres.in/api/unknown");

        return view('ApiData.resource',['collection'=>$collection['data']]);
    }


    public function postdata()
    {
        $collection=Http::post("https://reqres.in/api/users",[
            'name'=>'morpheus',
            'job'=>'leader'
        ]);

        return $collection->json();
    }


    public function updatedata()
    {
        $collection=Http::put("https://reqres.in/api/users/829",[
            'name'=>'mustakim',
            'job'=>'leader'
        ]);

        return $collection->json();
    }


    public function deletedata($id)
    {

        $collection=Http::delete("https://reqres.in/api/users/",$id);

        return $collection->json();
    }


}
