<?php

declare(strict_types=1);

/**
 *  Sort function by date.
 * 
 * @param $a array
 * 
 * @param $b array
 * 
 * returns date descending int.
 * 
 */

function sortFunction(array $a, array $b) : int {
    $date1 = strtotime($a['publishDate']);
    $date2 = strtotime($b['publishDate']);
    return $date2 - $date1;
}

usort($articles,'sortFunction');

?>

