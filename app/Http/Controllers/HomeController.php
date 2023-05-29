<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;
use Illuminate\Support\Facades\DB;


class Homecontroller extends Controller
{
    public function index(){
        return view('form.index',[
            'form' => form::get(),
            
        ]); 
    }

    public function create(){
        return view('form.create');

    } 
    
    public function store(Request $request)
    {
    //    dd($request->all()); //value Check ok 

    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'address' => 'required',
       
    ]);

    $form = new form;
    $form->name = $request->name;
    $form->email = $request->email;
    $form->address = $request->address;

    $form->save();

    return back()->withSuccess('Successfully Insert Data !!!!!');

    } 

   

  
    }