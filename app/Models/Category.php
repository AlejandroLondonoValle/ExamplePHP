<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'categories'; //Nombre del modelo
    protected $primaryKey = 'id';
    public $timestamps = false;
    // protected $guarded = [];

    protected $fillable = [  //Propiedades del modelo
        'name',
        'description',
        // Otros campos...
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
