<?php

namespace App\Http\Livewire\Login;

use Livewire\Component;
use App\Traits\AuthTrait;


class SelectType extends Component
{
    use AuthTrait;
    public $selectType = 1;
    public $currentStep = 1;
    public $email, $password;
    public $errorMessage = '';

    public function render()
    {
        return view('livewire.login.select-type', [
            'selectType' => $this->selectType
        ]);
    }
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:8',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        try {

            $guard = $this->checkGuard($this->selectType);
            $authentication = $this->attemptAuth($guard , $this->email,  $this->password);

            if( !$authentication){
                $this->errorMessage = trans('pages/login.errorMessage');
            }
            $data = auth($guard )->user() ;

            // dd($data);
            // $this->loginAuth($data);

            if(auth('region_manager')->check()){
                dd('Welcome to the region manager Account') ;
            }
            // return route('');

        }catch (Exception $e) {

            throw new Exception('Internal Server Error');

        }

        // dd($this->email , $this->password);

        // $this->currentStep = 2;
    }
    public function changeType($type)
    {
        $this->selectType = $type; 

    }
}
