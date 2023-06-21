<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Models\User;
class Post extends Model
{
  use softDeletes;
  protected $dates=['deleted_at'];
    protected $fillable = [
    'user_id',
    'title',
    'content',
    'photo',
    'slug'

    ];

    public function user(){

    return $this->belongsTo('App\Models\User','user_id');

  }

  public function tag(){

  return $this->belongsToMany('App\Models\Tag');

}
  //يعطيني مسار الصورةا optional if i do not use this type to show the image and use src="{{$item->photo}}"
//  public function getFeaturedAttribute($photo)
//  {
//    return asset($photo);
  //}
}
