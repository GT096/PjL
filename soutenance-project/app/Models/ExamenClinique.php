<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $consultation_id
 * @property string $description
 * @property string $observation
 * @property integer $typeExamen_id
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property Consultation $consultation
 * @property TypeExamen $typeExamen
 */
class ExamenClinique extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['consultation_id', 'description', 'observation', 'typeExamen_id', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function consultation()
    {
        return $this->belongsTo('App\Models\Consultation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function typeExamen()
    {
        return $this->belongsTo('App\Models\TypeExamen', 'typeExamen_id');
    }
}
