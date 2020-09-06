<?php

namespace App\Containers\Venue\Models;

use App\Ship\Parents\Models\Model;
use App\Containers\Church\Models\Church;

class Venue extends Model
{
  protected $fillable = [
    'name', 'location', 'church_id', 'capacity'
  ];

  protected $attributes = [];

  protected $hidden = [];

  protected $casts = [];

  protected $dates = [
    'created_at',
    'updated_at',
  ];

  public function organization()
  {
    return $this->belongsTo(Church::class);
  }
  /**
   * A resource key to be used by the the JSON API Serializer responses.
   */
  protected $resourceKey = 'venues';
}
