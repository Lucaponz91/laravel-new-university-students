<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $fillable=[
    'name',
    'surname',
    'date_of_birth',
    'enrolment_date',
    'fiscal_code',
    'email',
    'registration_number'
   ];
}
