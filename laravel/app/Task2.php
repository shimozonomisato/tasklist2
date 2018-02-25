<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task2 extends Model
{
    protected $fillable = ['name'];

    /*タスク所有ユーザーの取得*/
    public function user()
    {
      return $this->belongsTo(user::class);
    }
}
