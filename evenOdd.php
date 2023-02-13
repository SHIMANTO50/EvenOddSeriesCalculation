<?php
function check_even_odd($number)
{
    if ($number % 2 == 0) {
        return "$number is even.";
    } else {
        return "$number is odd.";
    }
}

$number = 7;
echo check_even_odd($number);

/*1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision*/