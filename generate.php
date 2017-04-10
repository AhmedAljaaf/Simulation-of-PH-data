<?php

/**
 * @author Ahmed Al-Jaaf
 * @copyright 2015
 */

include ('consistent.php');
include ('functions.php');

/** Attributes */
echo 'duration,location,quality,intensity,trigger,symptoms,aura,period,gender,headache_type';
echo '</br>';
// INSERT INTO `synthetic_data`.`headache_dataset` VALUES ('2125', '1', '2', '3', '9', '11', '1', '365', '0', 'Paroxysmal_Hemicrania');
/**  Number of records will be generated */
$records = 900;
    for ($x = 0; $x < $records; $x++) {    
        $primary_haeadche = array('Migraine','Tension','TAC');
        $weights = array(4,4,3); // Migraine has four sub-types, Tension has two sub-types, but it is most common form, and TAC has three sub-types
        $weighted_headache_types = weighted_random($primary_haeadche, $weights);
            switch ($weighted_headache_types) { 
                case ($weighted_headache_types == 'Migraine'):
              //  echo 'INSERT INTO `synthetic_data`.`headache_dataset` VALUES (';
                echo (Migraine());
                echo '</br>';        
                break;
                case ($weighted_headache_types == 'Tension'):
              //  echo 'INSERT INTO `synthetic_data`.`headache_dataset` VALUES (';
                echo (Tension());
                echo '</br>';
                break;
                case ($weighted_headache_types == 'TAC'):
               // echo 'INSERT INTO `synthetic_data`.`headache_dataset` VALUES (';
                echo (TAC());
                echo '</br>';
                break;  
                default:
                break;
            }
    }

?>