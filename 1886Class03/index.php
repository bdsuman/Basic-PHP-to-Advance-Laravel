<?php
/*
Class 3 Assingment: Suman Chandra Sen, Id:1886 

Case Study:
Question 01:
Let’s make a result grade calculator…
Rishita’s subject marks: SubjectA = 75, SubjectB = 80, SubjectC = 65, SubjectD = 90.
Result Calculation formula: Sum all subjects marks and divided by total subject quantity. 
From this given formula, you will get a mark. Show the Grade message by the mark.

    A+ = 80 - 100 
    A   = 70 - 79
    A-  = 60 - 69
    B   = 50 - 59
    C   = 40 - 49
    F   = 01 - 39 
*/
// Functions For Marks Grading

//Lets  Start Rishita Marks Calculate
$avg=0;
$subFullMarks=0;
//Subject Marks
    $SubjectA = 75;
    $subFullMarks+=$SubjectA;

    $SubjectB = 80;
    $subFullMarks+=$SubjectB;

    $SubjectC = 65;
    $subFullMarks+=$SubjectC;

    $SubjectD = 90;
    $subFullMarks+=$SubjectD;


$avg=$subFullMarks/4;

echo "Rishita Full Marks: $subFullMarks, Avarage: $avg";
echo '<br>';
$mark=$avg;
$grade='';

// Mark Check Not More than 100 or Not less than 0;
if($mark>=0 && $mark<=100){ 
    if($mark>=80) 
         $grade="A+"; 
    else if($mark>=70)
        $grade="A"; 
    else if($mark>=60)
        $grade="A-";
    else if($mark>=50)
        $grade="B";
    else if($mark>=40)
        $grade="C";
    else
        $grade="F";
}else{
    $grade="Marks Input Invalid";  
}

echo " Your Grade : ".$grade;

echo '<br><br><hr><br>';

/*
Case Study:
Question 02:
    Let’s make a game with your bike… You are riding a bike, your bike has some functionalities, these are… start, stop, break, gear, signal, headlight. 
    When you click on the power/start button, your bike takes a start, 
    When you click stop, your bike takes a stop, 
    When you press the break, your bike take break, 
    when you give the gear, your bike move faster and faster, 
    when you press the signal button, your bike shows a signal light.
    When you press the headlight button, your bike’s headlight will start.
*/

//Start a Bike Functions
$bikeStatus='start';

switch($bikeStatus){
    case 'start':
            echo 'Bike takes a Start.';
        break;
    case 'stop':
            echo 'Bike takes a Stop.';
        break;
    case 'break':
            echo 'Bike take Break.';
        break;
    case 'gear':
            echo 'Bike move Faster and Faster.';
        break;
    case 'signal':
            echo 'Bike shows a Signal light.';
        break;
    case 'headlight':
            echo 'Bike Headlight will start.';
        break;
    default:
        echo 'Error: You Press Ivalid Button.';
}