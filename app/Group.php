<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
     public $table = "groups";
     const CREATED_AT = 'created';
     const UPDATED_AT = 'modified';
}
