<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jobapi extends Model
{
protected $fillable = [
'title',
'description',
'salary',
'location',
];
}
