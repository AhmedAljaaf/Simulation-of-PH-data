<?php

/**
 * @author Ahmed J. Aljaaf
 * @copyright 2015
 */

  define("CM_Without_Aura","CM_Without_Aura");
  define("EM_Without_Aura","EM_Without_Aura");
  define("CM_With_Aura","CM_With_Aura");
  define("EM_With_Aura","EM_With_Aura");
  define("Episodic_Tension","E_Tension");
  define("Chronic_Tension","C_Tension");
  define("Cluster_Headache","Cluster");
  define("Paroxysmal_Hemicrania","Paroxysmal_Hemicrania");
  define("Sunct","Sunct");


// primary headache types 

//  define("CM_Without_Aura","1");
//  define("EM_Without_Aura","2");
//  define("CM_With_Aura","3");
//  define("EM_With_Aura","4");
//  define("Episodic_Tension","5");
//  define("Chronic_Tension","6");
//  define("Cluster_Headache","7");
//  define("Paroxysmal_Hemicrania","8");
//  define("Sunct","9");


// headache location - Binary
define("Headche_Location_Unilateral","0");
define("Headche_Location_Bilateral","1");

// headache intensity - integer
define("Headche_Intensity_Mild","1");
define("Headche_Intensity_Moderate","2");
define("Headche_Intensity_Severe","3");
define("Headche_Intensity_VerySevere","4");

// headache symptoms - migraine and tension type
define("Headche_Symptom_Non","1");
define("Headche_Symptom_Nausea","2");
define("Headche_Symptom_Vomiting","3"); 
define("Headche_Symptom_Photophobia","4"); 
define("Headche_Symptom_Phonophobia","5");

// aura symptoms
define("Headche_Aura_Non","1");
define("Altered_Vision","2");
define("Tingling_In_The_Body","3");
define("Weakness_Of_The_Arms_And_Legs","4");

// Cluster symptoms
define("Runny_Or_Stuffy_Nose","6");
define("Fullness_In_The_Ear","7");
define("Red_Eye","8");
define("Tearing_From_Eyes","9"); 
define("Puffy_Eye_Lids","10");
define("Facial_Redness","11");
define("Forehead_And_Facial_Sweating","12");

// Triggers - integer
define("Headche_Aggravated_by_Non","1");
define("Headche_Aggravated_by_PhysicalActivity","2");
define("Headche_Aggravated_by_LayingDown_Or_Sleep","3");
define("Headche_Aggravated_by_Alcohol","4");
define("Headche_Aggravated_by_Touch","5");

// Paroxysmal Hemicrania Triggers - including Alcohol which is number 4 above
// Reference - http://www.migrainetrust.org/research-article-paroxysmal-hemicrania-2010-12586
define("Headche_Aggravated_by_Stress","6");
define("Headche_Aggravated_by_Relaxation_After_Stress","7");
define("Headche_Aggravated_by_Exercise","8");
define("Headche_Aggravated_by_Neck_Movement","9");

// SUNCT triggers - including Movement of the neck which is number 9 above - Reference - http://brain.oxfordjournals.org/content/129/10/2746
define("Headche_Aggravated_by_Touching_The_Face_Or_Scalp","10");
define("Headche_Aggravated_by_Washing","11");
define("Headche_Aggravated_by_Shaving","12");
define("Headche_Aggravated_by_Chewing","13");
define("Headche_Aggravated_by_Eating","14");
define("Headche_Aggravated_by_Brushing_Teeth","15");
define("Headche_Aggravated_by_Talking","16");
define("Headche_Aggravated_by_Coughing","17");

// Headache quality
define("Pulsing","1");
define("Non_Pulsing","2");
define("Dull_Pain_Band_Like","3");

// Patient gender
define("Patient_Gender_Male","1");
define("Patient_Gender_Female","0");

?>