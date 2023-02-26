<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;


class FormComponent extends Component
{

    public $name;
    public $email;
    public $password;

    public $birthday;
    public $nip;

    public $is_company;

    public $success_message;

    protected $rules = [
        'name'=>'required|regex:/^[a-zA-z]/|min:2|max:75',
        'email'=> 'required|string|email:rfc,dns|max:255|unique:'.User::class,
        'password'=>'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/|max:120'
    ];
    public function render()
    {
        return view('livewire.form-component');
    }

    public function set_form_type($bool):void
    {
        if($bool === "0")
        {
            $this->is_company = intval($bool);

        }elseif($bool = "1")
        {
            $this->is_company = intval($bool);
        }
    }

    public function store():void
    {

        if($this->is_company === 0)
        {
            $this->rules +=['birthday'=>'required|date|after:1920/01/01|before:2021/01/01'];

            $this->validate();

            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'birthday' => $this->birthday,
                'password' => Hash::make($this->password),
                'is_company' => false
            ]);

            $this->success_message = "Zarejestrowano osobę fizyczną ".$this->name." w bazie danych.";
        }
        elseif($this->is_company === 1)
        {
            $this->rules +=['nip'=>'required|string|regex:/^[0-9]{10}$/'];

            $this->validate();

            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'nip' => $this->nip,
                'password' => Hash::make($this->password),
                'is_company' => true
            ]);

            $this->success_message = "Zarejestrowano firmę ".$this->name." w bazie danych.";
        }

    }
}
