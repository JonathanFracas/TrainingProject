<?php

namespace App\Models\Bike;

use App\Utils;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Seld\PharUtils\Timestamps;

/**
 *
 * --- CHAMPS BASE DE DONNEES ---
 * @property int $id -.
 * @property double $kms -.
 * @property double $time -.
 * @property Carbon $date -.
 *
 * --- ATTRIBUTS VIRTUELS ---
 * @property-read double $speed -.
 * @property-read double $pace -.
 */
class BikeSession extends Model
{
	use HasFactory;
	protected $table = "bike_sessions";
	protected $primaryKey = "id";
	public $incrementing = false;
	protected $keyType = "integer";
	public $timestamps = false;

	protected $guarded = ['id'];

	protected $casts = [
		'date' => 'date',
	];

	protected $appends = [
		"speed", "pace"
	];


	/**
	 * Attributs virtuels
	 */

	public function getSpeedAttribute()
	{
		return Utils::getSpeed($this->kms, $this->time);
	}

	public function getPaceAttribute()
	{
		return Utils::getPace($this->kms, $this->time);
	}}
