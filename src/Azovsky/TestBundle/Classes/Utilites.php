<?php
namespace Azovsky\TestBundle\Classes;
use Exception;
use ErrorException;
use DateTime;
use DateTimeZone;
//use Doctrine\ORM\Query\
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utilites
 *
 * @author 
 */
class Utilites {
    /*
     * @param double $a
     * @param double $b
     * @return double $a+$b
     */
    public static function getSumm ($a, $b) {
        if (isset($a)&&isset($b)) {
            return $a+$b;
        }
    }
    //put your code here
}
