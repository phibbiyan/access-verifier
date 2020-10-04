<?php 

namespace Phibbiyan\Verifier;

use App\User;

class Verifier{
    public static function validateApi($user, $company){
        $user = User::where('_id', '=', $user)
            ->where('company', '=', $company)
            ->first();
        
        if(!$user){
            die("You are not allowed to view these pages");
        }
        
    }
    
    public static function validateUser(){
        if(!isset($_SESSION['user'])){
            header('Location: /');
            die();
        }
    }
}