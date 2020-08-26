<?php

namespace App\Containers\Member\Models;

use App\Ship\Parents\Models\Model;

class Member extends Model
{
  protected $fillable = [
    'member_id'
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
