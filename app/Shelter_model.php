<?php

namespace App;

use Illuminate\Support\Facades\DB;

class Shelter_model
{
    public static function getPets(){
        $pets = DB::table('pets')->select('pets.*')->where('status', '=', 0)->get();
        return $pets;
    }

    public static function getPetsbyCat($cat){
        $pets = DB::table('pets')->select('pets.*')->where('cat_id', '=', $cat)->where('status', '=', 0)->get();
        return $pets;
    }

    public static function checkEmail($email){
        $user = DB::table('petlovers')->select('petlovers.*')->where('email', '=', $email)->count();
        if($user != 0){
            return false;
        }else{
            return true;
        }
    }

    public static function insertUser($name, $email, $pass){
        $password_digest = substr(md5($pass),0,32);
        $date =  date("Y-m-d H:i:s");
        DB::table('petlovers')->insert(['name' => $name, 'email' => $email, 'created_at' => $date, 'updated_at' => $date, 'password_digest' => $password_digest]);
    }

    public static function getUser($email, $pass){
        $pass_encrypt = substr(md5($pass),0,32);
        $user = DB::table('petlovers')->select('petlovers.*')->where('email', '=', $email)->where('password_digest', '=', $pass_encrypt)->count();
        return $user;
    }

    public static function getUserbyEmail($email){
        $user = DB::table('petlovers')->select('petlovers.*')->where('email', '=', $email)->get();
        return $user;
    }

    public static function adoptPet($id, $user_id){
        $date = date("Y-m-d H:i:s");
        DB::table('pets')->where('id', '=', $id)->update(['status' => 1]);
        DB::table('adoptions')->insert(['created_at' => $date, 'petlover_id' => $user_id, 'pet_id' => $id]);
    }

    public static function getMypets($id){
        $pets = DB::table('pets')->join('adoptions', 'pets.id', '=', 'adoptions.pet_id')->where('adoptions.petlover_id', '=', $id)->select('pets.name', 'pets.description', 'pets.image', 'adoptions.created_at')->get();
        return $pets;
    }

}
