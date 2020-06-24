<?php

namespace App;
use App\Demande;
use App\User;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function getDemandes()
    {
    	return Demande::all()->count();
    }

    public function getUsers()
    {
    	return User::all()->count();
    }


}