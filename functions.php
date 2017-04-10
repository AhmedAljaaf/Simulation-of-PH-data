<?php

/**
 * @author Ahmed J. Aljaaf
 * @copyright 2015
 */


function Migraine(){
    
    /**  Headache Duration - anything from 4 hours to 72 hours - use minites  */
    $duration = rand (240,4320);
    /**  Headache Location - always on one side - Unilateral=0 and Bilateral=1 */
    $location = Headche_Location_Unilateral;
    $quality = Pulsing;
    $trigger = Headche_Aggravated_by_PhysicalActivity;
                
    /**  Headache intensity */
    $rand_intensity = rand(1,2);
        switch ($rand_intensity) {
            case ($rand_intensity == 1):
                $intensity = Headche_Intensity_Moderate;        
            break;
            case ($rand_intensity == 2):
                $intensity = Headche_Intensity_Severe;  
            break;
        default:
        break;
        }      
            
    /**  Headache symptoms - 1=nausea, 2=vomiting, 3=photophobia, 4=phonophobia */
    $rand_symptoms = rand(1,4);                      
        switch ($rand_symptoms) {
            case ($rand_symptoms == 1):
                $symptoms = Headche_Symptom_Nausea;        
                break;
            case ($rand_symptoms == 2):
                $symptoms = Headche_Symptom_Vomiting;  
                break;
            case ($rand_symptoms == 3):
                $symptoms = Headche_Symptom_Photophobia;
                break;
             case ($rand_symptoms == 4):
                $symptoms = Headche_Symptom_Phonophobia;
                break;
            default:
            break;
        }
        
    /**  Aura symptoms */
    $aura_symptoms = rand(2,4);                      
        switch ($aura_symptoms) {
            case ($aura_symptoms == 2):
                $aura = Altered_Vision;        
                break;
            case ($aura_symptoms == 3):
                $aura = Tingling_In_The_Body;  
                break;
            case ($aura_symptoms == 4):
                $aura = Weakness_Of_The_Arms_And_Legs;
                break;
            default:
            break;
        }
        
    /** Migraine affects male less than female. About three out of four people who have migraines are women.
    Refrences  http://www.migrainetrust.org/faqs?page=1  -  Therefore 1=male, 2=female, 3=female, 4=female. */
    $gender_type = array('Male','Female');
    $gender_weights = array(1,3);
    $weighted_gender = weighted_random($gender_type, $gender_weights);
    switch ($weighted_gender) { 
        case ($weighted_gender == 'Male'):
        $gender = Patient_Gender_Male;        
        break;
        case ($weighted_gender == 'Female'):
        $gender = Patient_Gender_Female;
        break;
    default:
    break;
    }

    /**  Identifying the type of migraine headache */
    $migraine_type = rand(1,2);
    switch ($migraine_type) {
        case ($migraine_type == 1):
        /** migraine without aura */
                $period = rand(4,26);       
                if ($period <= 14) {
                        /** episodic migraine without aura */
                        $aura = Headche_Aura_Non;
                        $headache_type = EM_Without_Aura;
                      //  return ($duration.",".$location.",".$quality.",".$intensity.",".$trigger.",".$symptoms.",".$aura.",".$period.",".$gender.",'".$headache_type."');");   
			return ($duration.",".$location.",".$quality.",".$intensity.",".$trigger.",".$symptoms.",".$aura.",".$period.",".$gender.",".$headache_type); 
	               } else {
                        /** chronic migraine without aura */
                        $aura = Headche_Aura_Non;
                        $headache_type = CM_Without_Aura;
                        return ($duration.",".$location.",".$quality.",".$intensity.",".$trigger.",".$symptoms.",".$aura.",".$period.",".$gender.",".$headache_type);   
                }
        break;
        case ($migraine_type == 2):
        /** migraine with aura */
                $period = rand(4,26);
                if ($period <= 14) {
                        /** episodic migraine with aura */
                        $headache_type = EM_With_Aura;
                        return ($duration.",".$location.",".$quality.",".$intensity.",".$trigger.",".$symptoms.",".$aura.",".$period.",".$gender.",".$headache_type);   
	               } else {
                        /** chronic migraine with aura */
                        $headache_type = CM_With_Aura;
                        return ($duration.",".$location.",".$quality.",".$intensity.",".$trigger.",".$symptoms.",".$aura.",".$period.",".$gender.",".$headache_type);   
                }      
        break;
        default:
        break; 
    }
}

function Tension(){

    /**  Headache Location - Unilateral=0 and Bilateral=1 */
    $location = Headche_Location_Bilateral;
    $quality = Dull_Pain_Band_Like;
    $trigger = Headche_Aggravated_by_Non;
    $aura = Headche_Aura_Non;
    
    /**  Headache intensity */
    $rand_intensity = rand(1,3);
        switch ($rand_intensity) {
            case ($rand_intensity == 1):
                $intensity = Headche_Intensity_Mild;        
            break;
            case ($rand_intensity == 2):
                $intensity = Headche_Intensity_Mild;       
            break;
            case ($rand_intensity == 3):
                $intensity = Headche_Intensity_Moderate;
            break;
        default:
        break;
        }  

    /**  Headache symptoms - 1=Non, 2=Photophobia, 3=Phonophobia */
    $rand_symptoms = rand(1,3);                      
        switch ($rand_symptoms) {
            case ($rand_symptoms == 1):
                $symptoms = Headche_Symptom_Non;        
                break;
            case ($rand_symptoms == 2):
                $symptoms = Headche_Symptom_Photophobia;  
                break;
            case ($rand_symptoms == 3):
                $symptoms = Headche_Symptom_Phonophobia;
                break;
            default:
            break;
        }
  
    /** Gender */
    $rand_gender = rand(1,2);
        if ($rand_gender == 1)
             $gender = Patient_Gender_Male;
        else 
             $gender = Patient_Gender_Female;

    /**  Calculating max duration based on the period */
    $period = rand(1,26); // days
        switch ($period) {
        case ($period == 1):
            $max_duration = 1440; // minutes       
            break;
        case ($period == 2):
            $max_duration= 2880;
            break;
        case ($period == 3):
            $max_duration = 4320;
            break;
        case ($period == 4):
            $max_duration= 5760;
            break;
        case ($period == 5):
            $max_duration= 7200;
            break;
        case ($period == 6):
            $max_duration= 8640;
            break;
        case ($period >= 7):
            $max_duration= 10080;
            break;
        default:
        break;
        }
    /**  Headache Duration - anything from 0.5 hours to 168 hours, which is 7 days - use minites */
    $duration = rand (30,$max_duration);
    /**  Identifying the type of Tension headache */
    if ($period <= 14) {
            /** episodic tension type headache */
            $headache_type = Episodic_Tension;
            return ($duration.",".$location.",".$quality.",".$intensity.",".$trigger.",".$symptoms.",".$aura.",".$period.",".$gender.",".$headache_type);   
            } 
    else {
            /** chronic tension type headache */
            $headache_type = Chronic_Tension;
            return ($duration.",".$location.",".$quality.",".$intensity.",".$trigger.",".$symptoms.",".$aura.",".$period.",".$gender.",".$headache_type);   
    }      
}

/** Trigeminal Autonomic Cephalalgias TAC */
function TAC(){

    /**  Headache Location - Unilateral=0 and Bilateral=1 */
    $location = Headche_Location_Unilateral;
    $aura = Headche_Aura_Non;
    
     /**  Symptoms  */
    $rand_symptoms = rand(1,7);
    switch ($rand_symptoms) {
        case ($rand_symptoms == 1):
        $symptoms = Runny_Or_Stuffy_Nose;        
        break;
        case ($rand_symptoms == 2):
        $symptoms = Fullness_In_The_Ear;  
        break;
        case ($rand_symptoms == 3):
        $symptoms = Red_Eye;  
        break;
        case ($rand_symptoms == 4):
        $symptoms = Tearing_From_Eyes;  
        break;
        case ($rand_symptoms == 5):
        $symptoms = Puffy_Eye_Lids;  
        break;
        case ($rand_symptoms == 6):
        $symptoms = Facial_Redness;  
        break;
        case ($rand_symptoms == 7):
        $symptoms = Forehead_And_Facial_Sweating;  
        break;
    default:
    break;
    }
    
    /**  Control - distingush amonge Cluster, Paroxysmal hemicrania and SUNT headaches */
    $tac_type = rand(1,3);
    switch ($tac_type){ 
    	case ($tac_type == 1):
            /**  Cluster */
            /**  Headache duration - minutes */
            $duration = rand (15,180);
            $quality = Non_Pulsing;
            /**  Pain intensity  */
                $pain_intensity = array('Severe','VerySevere');
                $intensity_weights = array(1,2);
                $weighted_intensity = weighted_random($pain_intensity, $intensity_weights);
                switch ($weighted_intensity) { 
                    case ($weighted_intensity == 'Severe'):
                    $intensity = Headche_Intensity_Severe;        
                    break;
                    case ($weighted_intensity == 'VerySevere'):
                    $intensity = Headche_Intensity_VerySevere;
                    break;
                default:
                break;
                }
            /**  Triggers - Returns two times LayingDown_Or_Sleep and one time Alcohol */
                $trigger_type = array('LayingDown_Or_Sleep','Alcohol');
                $trigger_weights = array(2,1);
                $weighted_triggers = weighted_random($trigger_type, $trigger_weights);
                switch ($weighted_triggers) {
                    case ($weighted_triggers == 'LayingDown_Or_Sleep'):
                    $trigger = Headche_Aggravated_by_LayingDown_Or_Sleep;        
                    break;
                    case ($weighted_triggers == 'Alcohol'):
                    $trigger = Headche_Aggravated_by_Alcohol;
                    break;
                default:
                break;
                }
            /**  Gender - male to female ratio about 6:1  for cluster only */
                $gender_type = array('Male','Female');
                $gender_weights = array(6,1);
                $weighted_gender = weighted_random($gender_type, $gender_weights);
                switch ($weighted_gender) { 
                    case ($weighted_gender == 'Male'):
                    $gender = Patient_Gender_Male;        
                    break;
                    case ($weighted_gender == 'Female'):
                    $gender = Patient_Gender_Female;
                    break;
                default:
                break;
                }
            /**  Pain may last from 4 to 12 weeks (calculated usind days) - Refrences http://www.migrainetrust.org/factsheet-cluster-headache-10908 */
            $period = rand(28,84);
            $headache_type = Cluster_Headache;
            return ($duration.",".$location.",".$quality.",".$intensity.",".$trigger.",".$symptoms.",".$aura.",".$period.",".$gender.",".$headache_type); 
    	break;
    	case ($tac_type == 2):
            /**  Paroxysmal hemicrania */
            /**  Headache duration - minutes - Refrence - http://www.migrainetrust.org/research-article-paroxysmal-hemicrania-2010-12586 */
            $duration = rand (2,30);
            $quality = Non_Pulsing;
            /**  Pain intensity - Not all of the headaches are severe - Reference  http://www.bellaireneurology.com/headaches/clus_what_is.html#.VcvYVnFViko */
                $pain_intensity = array('Moderate','Severe');
                $intensity_weights = array(3,1);
                $weighted_intensity = weighted_random($pain_intensity, $intensity_weights);
                switch ($weighted_intensity) { 
                    case ($weighted_intensity == 'Moderate'):
                    $intensity = Headche_Intensity_Moderate;        
                    break;
                    case ($weighted_intensity == 'Severe'):
                    $intensity = Headche_Intensity_Severe;
                    break;
                default:
                break;
                }
            /**  Triggers  */
                $triggers_type = rand(1,5);
                switch ($triggers_type) {
                    case ($triggers_type == 1):
                    $trigger = Headche_Aggravated_by_Stress;        
                    break;
                    case ($triggers_type == 2):
                    $trigger = Headche_Aggravated_by_Relaxation_After_Stress;        
                    break;
                    case ($triggers_type == 3):
                    $trigger = Headche_Aggravated_by_Alcohol;        
                    break;
                    case ($triggers_type == 4):
                    $trigger = Headche_Aggravated_by_Exercise;        
                    break;
                    case ($triggers_type == 5):
                    $trigger = Headche_Aggravated_by_Neck_Movement;
                    break;
                default:
                break;
                }
            /**  Gender - male to female ratio about 6:1  for cluster only */
                $gender_type = array('Male','Female');
                $gender_weights = array(1,2);
                $weighted_gender = weighted_random($gender_type, $gender_weights);
                switch ($weighted_gender) { 
                    case ($weighted_gender == 'Male'):
                    $gender = Patient_Gender_Male;        
                    break;
                    case ($weighted_gender == 'Female'):
                    $gender = Patient_Gender_Female;
                    break;
                default:
                break;
                }
            /**  attacks lasting seven days to one year separated by a pain-free period lasting one month or longer      */
            $period = rand(7,365);
            $headache_type = Paroxysmal_Hemicrania;
            return ($duration.",".$location.",".$quality.",".$intensity.",".$trigger.",".$symptoms.",".$aura.",".$period.",".$gender.",".$headache_type);  
    	break;
    	case ($tac_type == 3):
            /**  SUNT */
            /**  Headache duration lasting 5-240 seconds - Reference - http://ihs-classification.org/en/02_klassifikation/02_teil1/03.03.00_cluster.html  */
            $duration = rand (1,4);
            $quality = Pulsing;
            /**  SUNT pain intensity is moderate - Reference - http://brain.oxfordjournals.org/content/129/10/2746 */
            $intensity = Headche_Intensity_Moderate;
            /**  Triggers  */
                $triggers_type = rand(1,9);
                switch ($triggers_type) {
                    case ($triggers_type == 1):
                    $trigger = Headche_Aggravated_by_Touching_The_Face_Or_Scalp;        
                    break;
                    case ($triggers_type == 2):
                    $trigger = Headche_Aggravated_by_Neck_Movement;        
                    break;
                    case ($triggers_type == 3):
                    $trigger = Headche_Aggravated_by_Washing;        
                    break;
                    case ($triggers_type == 4):
                    $trigger = Headche_Aggravated_by_Shaving;        
                    break;
                    case ($triggers_type == 5):
                    $trigger = Headche_Aggravated_by_Chewing;
                    break;
                    case ($triggers_type == 6):
                    $trigger = Headche_Aggravated_by_Eating;
                    break;
                    case ($triggers_type == 7):
                    $trigger = Headche_Aggravated_by_Brushing_Teeth;
                    break;
                    case ($triggers_type == 8):
                    $trigger = Headche_Aggravated_by_Talking;
                    break;
                    case ($triggers_type == 9):
                    $trigger = Headche_Aggravated_by_Coughing;
                    break;
                default:
                break;
                }
            /**  Gender - male to female ratio about 6:1  for cluster only */
                $gender_type = array('Male','Female');
                $gender_weights = array(2,1);
                $weighted_gender = weighted_random($gender_type, $gender_weights);
                switch ($weighted_gender) { 
                    case ($weighted_gender == 'Male'):
                    $gender = Patient_Gender_Male;        
                    break;
                    case ($weighted_gender == 'Female'):
                    $gender = Patient_Gender_Female;
                    break;
                default:
                break;
                }
            $period = 0; // Unkown
            $headache_type = Sunct;
            return ($duration.",".$location.",".$quality.",".$intensity.",".$trigger.",".$symptoms.",".$aura.",".$period.",".$gender.",".$headache_type);
    	break;
    	default :
        break;
}
}

function weighted_random($values, $weights){ 
    $count = count($values); 
    $i = 0; 
    $n = 0; 
    $num = mt_rand(0, array_sum($weights)); 
    while($i < $count){
        $n += $weights[$i]; 
        if($n >= $num){
            break; 
        }
        $i++; 
    } 
    return $values[$i]; 
}


?>