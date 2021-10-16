<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\User;
use Section;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        @session_start();
        // if(request->)
    }
    public function login(Request $request)
    {
       
        $email['info'] = $request->user;
        $email['name'] = DB::table('employees')->where('email', $request->user)->first()->name;

        $passw = ($request->passw) ;

        if(Auth::attempt(['email'=>$email,'password'=>$passw])){
            
            return view('home',$email);
        }   
        else {
            $email['mess'] = 'Tên đăng nhập hoặc mật khẩu không đúng';
            return view('login',$email);
        }
    }
    public function register(Request $request)
    {

        $email = $request->email;
        $passw = $request->passw;
        DB::table('employees')->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            // 'position_id' =>$request->position_id,
            // 'DoB' => $request->DoB,
            'email' => $email,
            'password' => bcrypt($passw),
        ]);
         return view('login');
    }
    public function logout(Request $request){
        Auth::logout();
        return view('login');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.customers.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}