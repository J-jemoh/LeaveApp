<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable=[

        'firstname',
        'lastname',
        'gender',
        'dob',
        'location',
        'role',
        'email',
        'payroll_num',
        'empId',
        'department',
        'designation',
        'employ_date',
        'phonenumber'
    ];
}
