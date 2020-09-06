<?php

namespace App\Containers\Member\Models;

use App\Ship\Parents\Models\Model;
use Illuminate\Support\Str;

class Member extends Model
{
  protected $fillable = [
    'id', 'name', 'gender', 'phone', 'church_id', 'location', 'qr_string', 'yob'
  ];

  protected $attributes = [];

  protected $hidden = [];

  protected $casts = [];

  protected $dates = [
    'created_at',
    'updated_at',
  ];


  public function church()
  {
    return $this->belongsTo('App\Containers\Church\Models\Church');
  }

  public function sessions()
  {
    return $this->belongsToMany('App\Containers\Session\Models\Session')->withPivot('temperature', 'temperature')
      ->withTimestamps();
  }



  /**
   * A resource key to be used by the the JSON API Serializer responses.
   */
  protected $resourceKey = 'members';
}
