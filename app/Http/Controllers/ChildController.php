<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;

class ChildController extends Controller
{
    // fetch all data from database
    public function index(Request $request)
    {
        $childs = Child::all();
       
        return view('welcome',['childs'=>$childs]);
        
    }

    //create new child
    public function create(Request $request)
    {
        $request->validate([
            'firstname'=> ['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
            'gender'=>['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
            'city'=>['string', 'regex:/^[a-zA-Z\s]+$/'],
            'state'=>['string', 'regex:/^[a-zA-Z\s]+$/'],
            'address'=>['string', 'regex:/^[a-zA-Z\s]+$/'],
           
            'lastname'=>['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
            'age'=>['numeric'],
           
            'zipcode'=>['numeric']
           ]);

    

        $child = new Child;
        $child->firstname = $request->firstname;
        $child->middlename = $request->middlename;
        $child->lastname = $request->lastname;
        $child->age = $request->age;
        $child->gender = $request->gender;
        $child->address = $request->address;
        $child->state = $request->state;
        $child->city = $request->city;
        $child->country = $request->country; 
        $child->zipcode = $request->zipcode;
        $child->save();

        return redirect(route('index'));

    }

    //edit data 
    public function edit($id)
    {
    

        $child = Child::find($id);
        return view('edit',['child'=>$child]);

    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'firstname'=> ['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
            'gender'=>['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
            'city'=>['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
            'state'=>['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
            'address'=>['string', 'regex:/^[a-zA-Z\s]+$/'],
           
            'lastname'=>['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
            'age'=>['numeric'],
           
            'zipcode'=>['numeric']
           ]);


        $child = Child::find($id);
        $child->firstname = $request->firstname;
        $child->middlename = $request->middlename;
        $child->lastname = $request->lastname;
        $child->age = $request->age;
        $child->gender = $request->gender;
        $child->address = $request->address;
        $child->state = $request->state;
        $child->city = $request->city;
        $child->country = $request->country; 
        $child->zipcode = $request->zipcode;
        $child->save();

        return redirect(route('index'));

        
    }

    //delete data
    public function destroy($id)
    {
        Child::destroy($id);
        return redirect(route('index'));
    }



}
