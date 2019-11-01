<?php

declare(strict_types=1);

/**
 *  Sort function by date.
 * 
 * @param array $a 
 * 
 * @param array $b 
 * 
 * @return int
 * 
 */

function sortFunction(array $a, array $b) : int {
    $date1 = strtotime($a['publishDate']);
    $date2 = strtotime($b['publishDate']);
    return $date2 - $date1;
}

usort($articles,'sortFunction');

?>

