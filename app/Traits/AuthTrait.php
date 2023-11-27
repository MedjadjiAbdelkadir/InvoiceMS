<?php

namespace App\Traits;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

trait AuthTrait
{
    public function checkGuard($type){
        if($type == 1){
            $guardName = 'unit_manager' ;
        }elseif($type == 2){
            $guardName = 'branch_manager' ;
        }elseif($type == 3){
            $guardName = 'region_manager' ;
        }else{
            $guardName = 'web' ;
        }

        return $guardName ;
    }

    public function attemptAuth($guard , $email , $password){

        return Auth::guard($guard)->attempt([
            'email'=>$email ,'password'=> $password
        ]);
    }

    public function loginAuth($data){
        return Auth::login($data);
    }


    public function redirectTo($guard){
        if(auth($guard)->check() == 'unit_manager'){
            return redirect(RouteServiceProvider::UnitManagerProfile);
        }elseif(auth($guard)->check() == 'branch_manager'){
            return redirect(RouteServiceProvider::BranchManagerProfile);
        }elseif(auth($guard)->check() == 'region_manager'){
            return redirect(RouteServiceProvider::RegionManagerProfile);
        }
    }
}
