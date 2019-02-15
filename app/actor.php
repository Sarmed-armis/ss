<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
  protected $fillable = [
      'id', 'user_id', 'leve_id','admin','department_id'
  ];
}
