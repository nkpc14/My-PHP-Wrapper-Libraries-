<?php
/**
 * Created by PhpStorm.
 * User: Nitish Kumar
 * Date: 8/15/2018
 * Time: 11:43 AM
 */



/**
 * PHP 7.0 Notes
 * Latest Updates and Functions in PHP 7.3
 *
 */

/**
 * Scalar Type Declarations
 * TWO type
 *          ->coercive(default)
 *          ->strict
 */

//Coercive mode

    function sumOfInts(int ...$ints){ //int is corecive mode
        return array_sum($ints);
    }

    var_dump(sumOfInts(2,'3',4.1));
