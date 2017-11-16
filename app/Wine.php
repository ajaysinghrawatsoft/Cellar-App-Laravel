<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    public $fillable = ['name', 'grapes', 'country', 'region', 'year', 'notes', 'wineImage'];
}