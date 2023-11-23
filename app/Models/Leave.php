<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $fillable=[

        'payroll_num',
        'leave_type',
        'startdate',
        'enddate',
        'days',
        'handOver_name',
        'handOver_phone',
        'department',
        'status',
        'approved_by',
        'date',
        'signature',
        'reason',
        'return_date',
        'last_taken',

    ];
}
