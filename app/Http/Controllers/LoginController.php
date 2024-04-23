<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class LoginController extends Controller
{
    //
    public static function index(){
        return view('login');
    }

    public static function checkLogin(Request $request){

        // Verifica se o arquivo JSON existe em STORAGE
        if (Storage::disk('local')->exists('public/users.json')) {
            // Lê o conteúdo do arquivo JSON
            $conteudoJson = Storage::disk('local')->get('public/users.json');

            // Decodifica o conteúdo JSON para um array associativo
            $dadosJson = json_decode($conteudoJson, true);

            foreach($dadosJson as $user) {
                if($user['user']===$request->input('user') && $user['password']===$request->input('pass')){
                    
                    Session::put('user', $user['user']);
                    Session::put('name', $user['name']);
                    Session::put('age',  $user['age']);
                    Session::put('city', $user['city']);
                    Session::put('job',  $user['job']);
                    Session::put('photo',$user['photo']);

                    return redirect('/');

                } else {
                  //  return redirect('/login')->with('msg','Usuário ou senha inválidos!');
                  return redirect('/login')->with('msg','Usuário deslogado');

                }
            }

        } else {
            // Arquivo não encontrado
            return response()->json(['error' => 'Arquivo não encontrado'], 404);
        }
    }

    public static function logout() {
        // Remove todas as chaves e valores da sessão
        Session::flush();

        return redirect('/')->with('msg','Usuário deslogado');
    }
}
