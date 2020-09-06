<?php

namespace App\Containers\Event\Models;

use App\Ship\Parents\Models\Model;

class Event extends Model
{
  protected $fillable = [
    'name', 'event_date', 'start_time', 'end_time', 'organization_id', 'user_id', 'created_by'
  ];

  protected $attributes = [];

  protected $hidden = [];

  protected $casts = [];

  protected $dates = [
    'created_at',
    'updated_at',
  ];

  /**
   * A resource key to be used by the the JSON API Serializer responses.
   */
  protected $resourceKey = 'events';
}
