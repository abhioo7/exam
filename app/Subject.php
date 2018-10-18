<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
     public $table = "subjects";
     const CREATED_AT = 'created';
     const UPDATED_AT = 'modified';
}
