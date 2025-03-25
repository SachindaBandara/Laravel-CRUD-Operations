<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'emp_name',
        'dob',
        'phone',
    ];
}
