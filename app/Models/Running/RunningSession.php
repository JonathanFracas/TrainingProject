<?php

namespace App\Models\Running;

use App\Utils;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Seld\PharUtils\Timestamps;

/**
 *
 * --- CHAMPS BASE DE DONNEES ---
 * @property int $id -.
 * @property double $kms -.
 * @property double $time -.
 * @property timestamps $date -.
 *
 * --- ATTRIBUTS VIRTUELS ---
 * @property-read double $speed -.
 * @property-read double $pace -.
 */
class RunningSession extends Model
{
  use HasFactory;
	protected $table = "running_sessions";
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
	}
}
