<?php

declare(strict_types=1);

/**
 *  Sort function by date.
 * 
 * 
 * 
 */

function sortFunction(array $a, array $b) {
    $date1 = strtotime($a['publishDate']);
    $date2 = strtotime($b['publishDate']);
    return $date2 - $date1;
}

usort($articles,'sortFunction');

?>