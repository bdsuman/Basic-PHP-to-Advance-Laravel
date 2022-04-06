<?php
/*
Class 4 Assingment: Suman Chandra Sen, Id:1886 

Case Study:

Question 01:

                Your client said that he needs a dropdown, which contains all days of the running month. 
        Sometimes we fill up a registration form that, which date of birth. So find out in 
        google (get number of days in specific month php) and do this assignment using a for loop.
        Day quantity is not equal for every month. Like as - february - 28, March - 31, april - 30
        So days of running month should dynamic (by php build in function)
*/
echo "Question 01<hr>";
        // Collect Current Month & Year using PHP build in function
       $currentMonth = date('m');
        $currentYear = date('Y');
	    $monthAllDay = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear);

    echo "Current Month & Year: {$currentMonth},{$currentYear} <br> Current Month All Days: {$monthAllDay}";
    echo '<br>';

	for ($i=1; $i <=$monthAllDay ; $i++) { 
		echo $i;
		echo "<br> ";
	}

    echo "<br> <br> Question 02 <hr> ";
/*
Question 02: 

        If we print 1-100, our output will be 100 times. But this time you have print out only the odd (বিজোড়) number within 1-100.
    You have to rotate from 1 to 100.
    Your output message should like that, “3 is a odd number”
    Not need to print even number

*/

	for($i=1; $i<=100; $i++){
		if($i % 2 != 0){
			echo "$i  is a odd number " ;
			echo "<br>";
		}
	}

    echo "<br> <br> Question 03 <hr>";

/*	Question 03: 

		Factorial - I think everyone knows the word. Factorial of 4 is given below:
            4! = 4*3*2*1 = 24
            6! = 6*5*4*3*2*1 = 720  
        So let’s calculate the factorial of 7.
*/
	
    $num = 7;
	$result = 1;
	for ($i = $num ;$i> 0;$i--){
		$result *= $i; 
	}
	echo " {$num} Factorial Value = {$result}";

    echo "<br> <br> <br> <br> Question 04 <hr>";

/*	Question 04: 

		Print out from 100 - 1 using a while loop. 
        You must use decrement operator
*/
	$numbers = 100;
	while($numbers>=1){
		echo $numbers;   
		echo "<br> ";
        $numbers--;
	}
    echo "<br> <br> Question 05 <hr>";

/*   Question 05: 

		You have an array of your purchased product items. 
        ['apple', 'orange', 'banana', 'mango']
        Show all products as a table list.
        Output should like that: “sl- 1 and product - apple”
*/

$fruits=['apple', 'orange', 'banana', 'mango'];

foreach ($fruits as $key => $fruit) {

        //Pre-increment for serial 1
        ++$key;
        echo "Serial - {$key} and Product - {$fruit}";
        echo "<br> ";

}