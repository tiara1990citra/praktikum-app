<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends User
{
      /** @use HasFactory<\Database\Factories\AdminFactory> */
      use HasFactory, Notifiable;
    protected $primarykey = "id_admin";

    protected $guarded=[];
    
}
