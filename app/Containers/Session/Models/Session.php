<?php

namespace App\Containers\Session\Models;

use App\Ship\Parents\Models\Model;

class Session extends Model
{
  protected $fillable = [
    'name', 'church_id', 'venue_id', 'date', 'start_time', 'end_time'
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

  public function event()
  {
    return $this->belongsTo('App\Containers\Event\Models\Event');
  }
  public function members()
  {
    return $this->belongsToMany('App\Containers\Member\Models\Member', 'member_session', 'session_id', 'member_id')
      ->withPivot('temperature', 'temperature')
      ->withTimestamps();
  }

  /**
   * A resource key to be used by the the JSON API Serializer responses.
   */
  protected $resourceKey = 'sessions';
}
