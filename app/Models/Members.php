<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'blood_group',
        'group',
        'council_no',
        'date_of_enrollment',
        'date_of_itba',
        'dob',
        'sprouse_name',
        'profile_picture'
    ];
}
