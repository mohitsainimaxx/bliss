<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiUserController extends Controller
{
   
       
public function getUsers(){
    try{
        $data= \App\User::paginate(10);
      return \Illuminate\Support\Facades\Response::json($data, 200) ;
     
    } catch (\PHPUnit\TextUI\Exception $e){
         return \Illuminate\Support\Facades\Response::json($data, 201) ;
    }       
   
}
}
