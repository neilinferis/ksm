<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        return $this->user = $user;
    }

    public function index()
    {
        $all_users = $this->user->where('role_id', 2)->orderBy('last_name')->get();

        return view('users.index')->with('all_students', $all_users);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name'    =>  'required|max:50',
            'last_name'     =>  'required|max:50',
            'middle_name'   =>  'max:50',
            'phone'         =>  'max:15',
            'dob'           =>  'max:15',
            'address'       =>  'max:150',
            'email'         =>  'required|max:100',
        ]);
        
        $this->user->first_name     =   $request->first_name;
        $this->user->last_name      =   $request->last_name;
        $this->user->middle_name    =   $request->middle_name;
        $this->user->phone          =   $request->phone;
        $this->user->date_of_birth  =   $request->dob;
        $this->user->address        =   $request->address;
        $this->user->email          =   $request->email;
        $this->user->password       =   Hash::make($request->first_name  . $request->dob);
        $this->user->save();

        return redirect()->route('user.index');
    }
}