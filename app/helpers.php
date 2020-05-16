<?php

function presentPrice($price)
{
    $number = $price / 100;
    return '$' . number_format($number, 2);
}

function setActiveCategory($category, $output = 'active')
{
    return request()->category == $category ? $output : '';
}

function productImage($path)
{
    return $path && file_exists('storage/' . $path) ? asset('storage/' . $path) : asset('img/not-found.jpg');
}
