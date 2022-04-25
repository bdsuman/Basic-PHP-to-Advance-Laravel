<?php 

/*
Class 8 Assingment: Suman Chandra Sen, Id:1886 

Case Study:
    Question 01:
        Create a function that will return children, teenagers, young people, old people from the age

*/

//check inputed value must be integer or double
function checkValue($number){
    if(gettype($number)==='integer' || gettype($number)==='double' ){
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
function findArea($a, $b=0, $c=0)
{
    if(checkValue($a) && checkValue($b) && checkValue($c)){
            // Condition for Triangle
            // Length of sides must be positive
            // and sum of any two sides must be smaller than third side.
        if ( ($a > 0 && $b > 0 && $c > 0) && ($a + $b > $c) && $a + $c > $b && $b + $c > $a)
        {
            $s = ($a + $b + $c) / 2;
            return 'Triangle: '.round(sqrt($s * ($s - $a) * ($s - $b) * ($s - $c)),3); 
        
        }else if($a > 0 && $b > 0){
            return 'Rectangle : '.round(($a * $b),3); 
        }else if($a > 0){
            return 'Square : '.round(($a * $a),3); 
        }else{
            return "Input value Invalid ";
        }
    }else{
        return "Input value Invalid ";
    }
    
}
 
// Inputed Value
$a = 3;
$b = 4;
$c = 5;
 // 3 value is Triangle
echo "Area is ", findArea($a,$b,$c);
echo '<br>';
 // 2 value is Rectangle
echo "Area is ", findArea($a,$b);
echo '<br>';
  // 1 value is Square
echo "Area is ", findArea($a);
echo '<br>';

echo'<br><hr>Question 03:<br><br>';
/* 
    Question 03:
        GPA function for result publishing
*/


function gpa($mark){

        // Condition marks must be less than or equal to 100 and more than and equal 0
    if(checkValue($mark) && $mark>=0 && $mark<=100){
            if($mark>=80) 
                return "5.00"; 
            else if($mark>=70)
                return "4.00";
            else if($mark>=60)
                return "3.50";
            else if($mark>=50)
                return "3.00";
            else if($mark>=40)
                return "2.00";
            else if($mark>=33)
                return "1.00";
            else
                return "0.00";
    }else{
        return "Input Mark {$mark} Invalid.";
    }
}


$banglaMark = 50;
$englishMark = 66;
$mathMark = 89;
echo 'Kamal Obtain Marks Below:';
echo '<br><br>';
echo "Bangla Mark: {$banglaMark} and GPA: ".gpa($banglaMark);
echo '<br>';
echo "English Mark: {$englishMark} and GPA: ".gpa($englishMark);
echo '<br>';
echo "Math Mark: {$mathMark} and GPA: ".gpa($mathMark);
echo '<br><br>';
echo 'CGPA: '.gpa(($banglaMark+$englishMark+$mathMark)/3);


echo'<br><hr>Question 04:<br><br>';
/* 
    Question 04:
        Create an age calculator function
*/
function ageCalculator($birthDate){
    
    $todayDate = date('Y-m-d');

    $birthDateTime = new DateTime($birthDate);
    
    $todayDateTime = new DateTime($todayDate);
    
    $difference = $birthDateTime->diff($todayDateTime);

    return  $difference->y.' Year '. $difference->m.' Month '. $difference->d.' Days.';
}
//Hints: Date Formate YYYY-MM-DD

$birthDate = '1992-09-06';

echo "Your Birth Date {$birthDate} and Today Date <br><br>";
echo 'Your Age : '.ageCalculator($birthDate);

echo'<br><hr>Question 05:<br><br>';
/* 
    Question 05:
        Create a BMI function for health
*/
function bmi($height,$weight){
    $index =0;
    if(checkValue($height) && checkValue($weight) && $height>0 && $weight>0){
        
        $index = round($weight/($height*$height),2);
 
        $bmi="";
            if ($index < 18.5) {
                $bmi="Underweight - BMI : " . $index;
            } else if ($index < 25) {
                $bmi="Normal - BMI : ". $index;
            } else if ($index < 30) {
                $bmi="Overweight - BMI : " . $index;  
            } else {
                $bmi="Obese - BMI : " .$index;  
            }
    }else{
        $bmi="Invalid data Input. ";  
    }

    return $bmi;
}

//Hints Height in meter (m) and Weight in kilogram (kg) Input Data

$height = 1.70688;
$weight = 85;

echo 'Your BMI Value is : '.bmi($height,$weight);

echo'<br><hr>Question 06:<br><br>';
/* 
    Question 06:
        Create a currency converter function from taka to USD, CAD, POUND, EURO etc
*/

function moneyExchange($money,$convert){

    $convertedMoney = 0;
    if(checkValue($money) && $money>0){
        if($convert==='USD'){
            $convertedMoney = number_format($money/86.23,2);
        }else if($convert==='CAD'){
            $convertedMoney = number_format($money/67.54,2);
        }else if($convert==='POUND'){
            $convertedMoney = number_format($money/109.78,2);
        }else if($convert==='EURO'){
            $convertedMoney = number_format($money/92.41,2);
        }else{
            $convertedMoney = "Invalid Conversion";
        }
    }else{
        $convertedMoney = "Invalid Money Input";
    }

   return $convertedMoney;

}

//Hints Amount is BDT and Convertion Allow for only  USD,CAD,POUND,EURO
$amount = 10000;
$convert = 'EURO';
echo "Your Money is {$amount} BDT Converted to {$convert} : ".moneyExchange($amount,$convert);

