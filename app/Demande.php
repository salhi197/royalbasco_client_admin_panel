<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'somme',
		'nom',
		'prenom',
		'pays',
		'telephone',
    ];
    
}
