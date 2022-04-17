<?php
/*
Class 6 Assingment: Suman Chandra Sen, Id:1886 

Case Study:

Question 01:

	You have purchased some items from a supershop. Purchase product array is given below-

	$purchased_products = array(
        		array('name' => 'banana',  'qty' => 10, 'total_price' => 550),
        		array('name' => 'apple',     'qty' => 50,  'total_price' => 1500),
        		array('name' => 'orange',  'qty' => 7,    'total_price' => 600),
    	);
    How much product quantity you have purchased (total purchased qty = 67)
    Calculate the total amount of all purchased items (total amount = 2650 tk).
*/
echo'Question 01:<br><br>';
$totalQuantity = 0;
$allTotalPrice = 0;

$purchased_products = array(
    array('name' => 'banana',  'qty' => 10, 'total_price' => 550),
    array('name' => 'apple',     'qty' => 50,  'total_price' => 1500),
    array('name' => 'orange',  'qty' => 7,    'total_price' => 600),
);

foreach($purchased_products as $product){

    $totalQuantity+=$product['qty'];
    $allTotalPrice+=$product['total_price'];
}

echo "Total Purchased Quantity = {$totalQuantity}<br>";
echo "Total Amount = {$allTotalPrice} tk ";

echo'<br><hr>Question 02:<br><br>';
/*
    You have two array of emails, these are given below-
	    $first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 
        $second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];
        You have to make a single array from this two arrays
        And don’t keep any value in multiple time
*/

$first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 
$second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];

//Array Merge funtion Make two or more array in a single array 
$mergeArray = array_merge($first_email_array, $second_email_array);
/*echo "Make a Single Array from Given Two Arrays Below Output";
echo '<pre>';
print_r($mergeArray);
echo '</pre>';
*/
//Array Unique funtion Make array all data unique value
$uniqueArray = array_unique($mergeArray);
echo "Merging Array are Transform Unique Array Below Output";
echo '<pre>';
print_r($uniqueArray);
echo '</pre>';

echo'<br><hr>Question 03:<br><br>';
/*
    $citylist = array(  "Black Canyon City", "Chandler", "Flagstaff", "Gilbert",
                        "Glendale", "Globe", "Mesa", "Miami",
                        "Phoenix", "Peoria", "Prescott", "Scottsdale",
                        "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" 
                    );
    Split this given array into chunks 4
*/

$citylist = array(  
                    "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", 
                    "Globe", "Mesa", "Miami","Phoenix", "Peoria", "Prescott", "Scottsdale",
                    "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" 
                );

/*Array Chunk funtion Make array into chunks 4 */
$part=4;
$partition = array_chunk($citylist,$part);


echo '<pre>';
print_r($partition);
echo '</pre>';