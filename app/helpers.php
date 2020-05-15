<?php

function presentPrice($price)
{
    $number = $price / 100;
    return '$' . number_format($number, 2);
}
