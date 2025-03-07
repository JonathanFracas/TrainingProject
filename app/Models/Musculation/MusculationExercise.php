<?php

namespace App\Models\Musculation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * --- CHAMPS BASE DE DONNEES ---
 * @property int $id -.
 * @property string $name -.
 * @property string $body_part_id -.
 * @property string $exercise_type_id -.
 * @property boolean $weight -.
 *
 * --- RELATIONS ---
 * @property BodyPartType $body_part_type -.
 * @property ExerciseType $exercise_type -.
 */
class MusculationExercise extends Model
{
    use HasFactory;
	protected $table = "musculation_exercises";
	protected $primaryKey = "id";
	public $incrementing = false;
	protected $keyType = "integer";
	public $timestamps = false;

	protected $guarded = ['id'];


	/**
	 * RELATIONS
	 */

	public function body_part_type(): BelongsTo
	{
		return $this->belongsTo(BodyPartType::class);
	}

	public function exercise_type(): BelongsTo
	{
		return $this->belongsTo(ExerciseType::class);
	}
}
