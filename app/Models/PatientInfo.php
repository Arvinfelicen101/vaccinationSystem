<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientInfo extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'address', 'first_vaxx', 'date_firstdose', 'second_vaxx', 'date_seconddose']; 
}
 