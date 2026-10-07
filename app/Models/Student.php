<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;

#[fillable('nis', 'name', 'gender', 'major', 'class')]
#[table('students')]
class Student extends Model
{

}
