<?php

namespace App\Http\Controllers;

use Couchbase\SearchQuery;
use Illuminate\Http\Request;

use App\Shelter_model;
use Illuminate\Support\Facades\Input;

class Shelter extends Controller
{
    public function index(Request $request){
        return view('/home');
    }

    public function pets(Request $request){
        $pets = "";
        $cat_name = "";
        $check = 0;
        $cat = $request->cat;
        $name = "";
        $user = "";
        if(!empty($cat) and $cat != 0){
            $pets = Shelter_model::getPetsbyCat($cat);
            if($cat == 1){
                $cat_name = "Dogs";
            }
            if($cat == 2){
                $cat_name = "Cats";
            }
        }else{
            $cat_name = "All pets";
            $pets = Shelter_model::getPets();
        }
        if($request->session()->has('NAME')){
            $name = $request->session()->get('NAME');
        }
        if($request->session()->has('ID')){
            $check = 1;
            $user = $request->session()->get('ID');
        }
        return view('/pets')->with('PETS', $pets)->with('CAT_NAME', $cat_name)->with('CHECK', $check)->with('NAME', $name);
    }

    public function register(Request $request){
        $check = 0;
        $error = "";
        $message = "";
        if(!empty(Input::get('error'))){
            $check = 1;
            $error = Input::get('error');
            if($error == 1){
                $message = "Email already registered!";
            }
            if($error == 2){
                $message = "Passwords don't match!";
            }
        }
        return view('/register')->with('CHECK', $check)->with('ERROR', $message);
    }

    public function register_action(Request $request){
        $name = Input::get('name');
        $email = Input::get('email');
        $pass = Input::get('pass');
        $pass_conf = Input::get('pass_conf');

        $val_email = Shelter_model::checkEmail($email);
        if($val_email){
            if($pass != $pass_conf){
                return redirect()->action('Shelter@register', ['error' => 2]);
            }else{
                Shelter_model::insertUser($name, $email, $pass);
                return redirect()->action('Shelter@pets', ['cat' => 0]);
            }
        }else{
            return redirect()->action('Shelter@register', ['error' => 1]);
        }
    }

    public function login(Request $request){
        $check = 0;
        $error = "";
        $message = "";
        if(!empty(Input::get('error'))){
            $check = 1;
            $error = Input::get('error');
            if($error == 1){
                $message = "Login failed!";
            }
        }
        return view('/login')->with('CHECK', $check)->with('ERROR', $message);
    }

    public function login_action(Request $request){
        $skips = ["[","]","\""];
        $email = Input::get('email');
        $pass = Input::get('pass');
        $user = Shelter_model::getUser($email, $pass);
        if($user == 0){
            return redirect()->action('Shelter@login', ['error' => 1]);
        }else{
            $id = str_replace($skips, ' ',Shelter_model::getUserbyEmail($email)->pluck('id'));
            $name = str_replace($skips, ' ',Shelter_model::getUserbyEmail($email)->pluck('name'));
            session(['ID' => $id]);
            session(['NAME' => $name]);
            return redirect()->action('Shelter@pets', ['cat' => 0]);
        }
    }

    public function logout(Request $request){
        $request->session()->forget(['ID', 'NAME']);
        $request->session()->flush();
        return redirect()->action('Shelter@pets', ['cat' => 0]);
    }

    public function adopt(Request $request){
        $id = $request->id;
        $user_id = $user = $request->session()->get('ID');
        Shelter_model::adoptPet($id, $user_id);
        return redirect()->action('Shelter@pets', ['cat' => 0]);
    }

    public function mypets(Request $request){
        $name = "";
        $id = "";
        if($request->session()->has('NAME')){
            $name = $request->session()->get('NAME');
        }
        if($request->session()->has('ID')){
            $id = $request->session()->get('ID');
        }

        $pets = Shelter_model::getMypets($id);
        return view('/mypets')->with('NAME', $name)->with('PETS', $pets);
    }
}
