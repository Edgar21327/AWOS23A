<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Hash;


class CustomAuthController extends Controller
{
//METODOS PARA LLAMAR A LAS VITAS
    //Vista de Inicio
    public function inicio(){
        return view ("inicio.index-inicio");
    }
    //Vista de Catalogo
    public function catalogo(){
        return view ("catalogo.index-catalogo");
    }
    //Vista de Ubicacaion
    public function ubicacion(){
        return view ("ubicacion.index-ubicacion");
    }
    //Vista de Ventas
    public function ventas(){
        return view ("ventas.index-ventas");
    }
    //Vista de Login
    public function login(){
        return view ("sesion.login.index-login");
    }   
    //Vista de Registro
    public function registro(){
        return view("sesion.registro.index-registro");
    }
    //Vista de Perfil
    public function perfil(){
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=',Session::get('loginId'))->first();
            
        }
        return view("sesion.perfil.index-perfil")->with('user',$user);
    }
    //Vista de Edicion de perfil
    public function editarPerfil(){
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=',Session::get('loginId'))->first();
            
        }
        return view("sesion.perfil.index-editar")->with('user',$user);
    }
//METODOS PARA LLAMAR A LAS VITAS


//METODO PARA REGISTRAR USUARIOS
    public function registerUser(Request $request){
        // echo 'Value posyed';
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|max:12',
            'avatar',
            'external_id',
            'external_auth'
        ]);
        $user = new User();
        $user -> name = $request -> name;
        $user -> email = $request -> email;
        $user -> password = Hash::make($request -> password);
        $user -> avatar = $request -> avatar;
        $user -> external_id = $request -> external_id;
        $user -> external_auth = $request -> external_auth;

        $res = $user -> save();
        if($res){
            return back()->with('success','You have registered succesfuly');
            
        }else{
            return back()->with('fail','Something wrong');
        }

    }
//METODO PARA REGISTRAR USUARIOS

//METODO PARA VALIDAR CREDENCIALES DE USIARIO
    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email|',
            'password'=>'required|min:6|max:12'
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('perfil');
            }else{
                return back()->with('fail','Contraseña incorrecta');
            }
        }else{
            return back()->with('fail','El correo no esta registrado');
        }
        
    }
//METODO PARA VALIDAR CREDENCIALES DE USIARIO


//METODOS PARA VALIDAS USUARIOS CON REDES SOCIALES
    public function redirectToProvider($driver)
    {
        return Socialite::driver($driver)->redirect();
    }
    //
    public function handleProviderCallback($driver)
    {
        $user = Socialite::driver($driver)->user();

    // $userExists = User::where('external_id', $user->id)->where('external_auth',$driver)->first();

    // if($userExists){
    //     Auth::handleProviderCallback($userExists);
    // }else{
    //     $userNew = User::create([
    //         'name'=>$user->name,
    //         'email'=>$user->email,
    //         'avatar'=>$user->avatar,
    //         'external_id'=>$user->external_id,
    //         'external_auth'=>$user->external_auth
    //     ]);
    //     Auth::handleProviderCallback($userNew);
    // }
    //return view('login/dashboard')->with('user',$user);
    dd($user);
        // $user->token;
    }
//METODOS PARA VALIDAS USUARIOS CON REDES SOCIALES

//METODO PARA VISUALIZAR INFORMACION DEL USIARIO
    public function dashboard(){
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=',Session::get('loginId'))->first();
            
        }
    return view('login/dashboard')->with('user',$user);
    }
//METODO PARA VISUALIZAR INFORMACION DEL USIARIO

//METODO PARA CERRAR SESION
public function logout(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');

    // if(Session::has('loginId')){
    //     Session::pull('loginId');
    //     return redirect('login');
    // }
}
//METODO PARA CERRAR SESION
}