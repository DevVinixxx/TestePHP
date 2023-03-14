<?php

namespace App\Http\Controllers;

use App\Models\UserRegistration;
use Illuminate\Http\Request;

class UserRegistrationController extends Controller
{

    public function index()
    {
        $users = UserRegistration::orderBy('id')->paginate(5);

        return view('welcome', ['users'=>$users]);
    }

    public function create()
    {
       return view('create');
    }

    public function store(Request $request)
    {
        $user = new UserRegistration;
        $user->name = $request->name;
        $user->cpf = $request->cpf;
        $user->birthdate = $request->birthdate;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->street = $request->street;
        $user->neighborhood = $request->neighborhood;
        $user->number = $request->number;
        $user->zip_code = $request->zip_code;
        $user->city = $request->city;
        $user->state = $request->state;
        //dd($user);
        $user->save();

        return redirect()->route('index');
    }

    public function show(string $id)
    {
        $user = UserRegistration::find($id);

        return view('update', ['user'=>$user]);
    }

    public function edit(string $id)
    {
        $user = UserRegistration::findOrFail($id);

        return view('update', ['user'=>$user]);
    }

    public function update(Request $request, string $id)
    {
       UserRegistration::findOrFail($request->id)->update($request->all());

       return redirect()->route('index');
    }

   
    public function destroy(string $id)
    {
        UserRegistration::findOrFail($id)->delete();

        return redirect()->route('index');
    }

    public function details($id)
    {
        $user = UserRegistration::find($id);

        return view('datails', ['user'=>$user]);
    }

}
