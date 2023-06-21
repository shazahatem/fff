<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
  protected $table='profile_users';
  protected $fillable = [
      'province',
      'gender',
      'user_id',
      'bio'
  ];

  public function user(){

  return $this->belongsTo('App\User','user_id');

}
}
