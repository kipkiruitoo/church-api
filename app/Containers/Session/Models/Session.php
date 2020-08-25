<?php

namespace App\Containers\Session\Models;

use App\Ship\Parents\Models\Model;

class Session extends Model
{
  protected $fillable = [];

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

  public function members(){
    return $this->belongsToMany('App\Containers\Member\Models\Member');
  }

  /**
   * A resource key to be used by the the JSON API Serializer responses.
   */
  protected $resourceKey = 'sessions';
}
