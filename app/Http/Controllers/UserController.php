<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // call The index page and fetch the data code 
    function index(){

        $data = UserModel::latest()->paginate();
        return view('index',compact('data'));
    }

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     // call the create new user form page
    function create(){
        return view('CreateUser');
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     // to store the data in database and validation also here
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);

        $user = new UserModel;

        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;

        $user->save();

        return redirect()->route('user.index')->with('success','Data Added Successfully');
    }

    // delete the user 
    public function destroy(UserModel $user){
        $user->delete();
        return redirect()->route('user.index')->with('success','User Deleted Successfully');
    }

    // show single user information 
    public function show(UserModel $user)
    {
        return view('show', compact('user'));
    }

    // call the edit user page and pass the single user data
    public function edit(UserModel $user)
    {
        return view('edit',compact('user'));
    }

    public function update(Request $request, UserModel $user)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);

        $user = UserModel::find($request->id);

        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;


        $user->save();

        return redirect()->route('user.index')->with('success',"Data Updated successfully");
        
    }

}
