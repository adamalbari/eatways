<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function resep()
    {
        return $this->belongsTo('App\Resep');
    }

    public function bahan()
    {
        return $this->belongsTo('App\Bahan');
    }

    public function recipeIngredient()
    {
        return $this->belongsTo('App\RecipeIngredient');
    }

    public function purchase()
    {
        return $this->belongsTo('App\Purchase');
    }
}