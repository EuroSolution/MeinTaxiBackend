<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProviderDailyKm extends Model
{

	protected $fillable = ['provider_id', 'start_date', 'end_date', 'start_km', 'end_km',
        'total_km', 'status', 'tankstand', 'autosauber', 'schaden', 'motorol'];
	public $timestamps = false;
}
