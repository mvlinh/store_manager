<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\User;
use Section;
use DB;
use time;
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

        $passw = ($request->passw) ;

        if(Auth::attempt(['email'=>$email,'password'=>$passw])){
            $email['info'] = $request->user;
            $email['name'] = DB::table('employees')->where('email', $request->user)->first()->name;
            if (auth()->user()->id == auth()->user()->position_id) {
                return redirect('admin/dashboard');
            }
            return redirect()->route('dashboard');
        }   
        else {
            $email['mess'] = 'Tên đăng nhập hoặc mật khẩu không đúng';
            return view('login',$email);
        }
    }
    public function register(Request $request)
    {
        if($request->has('file_upload')){
            $file = $request->file_upload;
            $ext = $file->extension();
            
            $file_name = time().'-'.'avatar'.'.'.$ext;
            $file->move(public_path('assets/images/users'),$file_name);
        }   
        $email = $request->email;
        $passw = $request->passw;
        DB::table('employees')->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'position_id' => Auth::user()->id,
            'DoB' => $request->DoB,
            'email' => $email,
            'avatar' => $file_name,
            'address' => $request->address,
            'password' => bcrypt($passw),
        ]);
         return redirect()->route('addemployee',['noti'=>'successfully']);
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