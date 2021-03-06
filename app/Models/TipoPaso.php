<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoPaso
 * @package App\Models
 * @version January 15, 2018, 9:18 am -05
 *
 * @property \Illuminate\Database\Eloquent\Collection roleHasPermissions
 * @property string nombre
 * @property string titulo
 * @property string seccion
 * @property string reglas
 */
class TipoPaso extends Model
{
    use SoftDeletes;

    public $table = 'tipo_paso';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'titulo',
        'seccion',
        'reglas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'titulo' => 'string',
        'seccion' => 'string',
        'reglas' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pasosAlianzas()
    {
        return $this->hasMany(\App\Models\Validation\PasosAlianza::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pasosIniciativas()
    {
        return $this->hasMany(\App\Models\PasosIniciativa::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pasosInscripcions()
    {
        return $this->hasMany(\App\Models\PasosInscripcion::class);
    }
}
