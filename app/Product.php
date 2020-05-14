<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function presentPrice()
    {
        $number = $this->price / 100;
        return '$' . number_format($number, 2);
    }
}
