<?php

namespace App\Containers\Church\Models;

use App\Ship\Parents\Models\Model;

class Church extends Model
{
  protected $fillable = [];

  protected $attributes = [];

  protected $hidden = [];

  protected $casts = [];

  protected $dates = [
    'created_at',
    'updated_at',
  ];

  public function members()
  {
    return $this->hasMany('App\Containers\Member\Models\Member');
  }

  public function users()
  {
    return $this->hasMany('App\Containers\User\Models\User');
  }

  /**
   * A resource key to be used by the the JSON API Serializer responses.
   */
  protected $resourceKey = 'churches';
}
