<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'products'; //Nombre del modelo
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = [];

    protected $fillable = [  //Propiedades del modelo
        'name',
        'description',
        'unit_value',
        'category_id'
    ];

    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    //Funciones

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    //Foreign keys y otras conexiones
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */
    //Extiende la Consulta como por ejemplo los includes o thenincludes

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */
    //Funciones para cuando se reciba el campo lo configure quitandole espacios o pasandolo a mayuscula o minuscula

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
    //Funciones para cuando se devuelva el campo lo configure quitandole espacios o pasandolo a mayuscula o minuscula
}
