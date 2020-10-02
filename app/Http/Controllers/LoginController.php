<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $hashar = app()->make('hash');
        $email = $request->input('email');
        $password = $request->input('password');
        //print $email;
        $login = User::where('email',$email)->first();
        //print_r($login);
        if(!$login){
          $res['success'] = false;
          $res['message'] = 'Tu email es o password incorrecto 1';
          return response($res);
        }
        else{
          if(  $hashar->check($password, $login->password) ){
            $api_token = sha1(time());
            $create_token = User::where('id',$login->id)->update(['remember_token' => $api_token]);
            if( $create_token ){
              $res['success'] = false;
              $res['api_token'] = $api_token;
                $res['message'] = $login;
                return response($res);
            }
            else{
              $res['success'] = false;
              $res['message'] = 'Tu email es incorrecto 2';
              return response($res);
            }
          }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
