<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    
    use HasFactory;
    public $fillable =[
        "name",
        "email",
        "password",
        'admin_id',
        'Gender',
        'rank'
    ];
     public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = trim($value);
    }
}
