<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function translations()
    {
        return $this->hasMany(ProductTranslation::class);
    }
}
