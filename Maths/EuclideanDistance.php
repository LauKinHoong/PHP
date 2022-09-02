<?php
/**
 * This function calculates
 * Euclidean Distance between
 * two coordinates
 *
 * @param double first coordinate x position
 * @param double first coordinate y position
 * @param double second coordinate x position
 * @param double second oordinate y position
 * @return double distance
 */
function euclideanDistance($x1, $y1, $x2, $y2)
{
    $dX = pow($x2 - $x1, 2);
    $dY = pow($y2 - $y1, 2);
    $d = sqrt($dX + $dY);
    return $d;
}