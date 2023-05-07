<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
    use HasFactory;

        protected $fillable = [
            'firstname',
            'lastname',
            'email',
            'role',
            'password',
            'gender',
            'status',
        ];
}
