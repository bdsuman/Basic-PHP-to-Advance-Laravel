<?php 

/*
Class 8 Assingment: Suman Chandra Sen, Id:1886 

Case Study:
    Question 01:
        Create a function that will return children, teenagers, young people, old people from the age

*/

//check inputed value integer or double
function checkValue($number){
    if(gettype($number)==='integer' || gettype($number)==='double'){
        return true;
    }else{
        return false;
    }
}
echo'Question 01:<br><br>';

/* 
hints: 
    children age = age>12;
    teenagers age = 12-18;
    young people age = 18-50;
    old people age = 50<age;
*/
function ageStage($age){
    $status='';

    if(checkValue($age)){
        if($age>=50){
            $status="Your age {$age}. You are <b>Old.</b>";
        }else if($age>=18){
            $status="Your age {$age}. You are <b>Young.</b>";
        }else if($age>=12){
            $status="Your age {$age}. You are <b>Teenagers.</b>";
        }else{
            $status="Your age {$age}. You are <b>Children.</b>";
        }
    }else{
        $status="Warning!!!. Input Age Value <b>{$age}</b> is Invalid. Please try again. ";  
    }

    return $status;
}

echo ageStage(29);

echo'<br><hr>Question 02:<br><br>';
/*
    Question 02:
        Create a function that will return the area of a rectangle, square, triangle
*/
function findArea($a, $b, $c=0)
{
    if(checkValue($a) && checkValue($b) && checkValue($c)){
            // Condition for Triangle
            // Length of sides must be positive
            // and sum of any two sides must be smaller than third side.
        if ( ($a > 0 && $b > 0 && $c > 0) && ($a + $b > $c) && $a + $c > $b && $b + $c > $a)
        {
            $s = ($a + $b + $c) / 2;
            return round(sqrt($s * ($s - $a) * ($s - $b) * ($s - $c)),3); 
        
        }else if($a > 0 && $b > 0){
            return round($a * $b); 
        }else{
            echo "Input value Invalid ";
        }
    }else{
        echo "Input value Invalid ";
    }
    
}
 
// Inputed Value
$a = 3;
$b = 4;
$c = 5;
 
echo "Area is ", findArea($a, $b,$c);