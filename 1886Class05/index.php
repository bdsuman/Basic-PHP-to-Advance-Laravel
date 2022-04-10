<?php
/*
Class 5 Assingment: Suman Chandra Sen, Id:1886 

Case Study:

Question 01:

	We have an array [12,34,2,6,78]. What kind of array is this? Find all prime numbers from this array.
    Step 1: First let us find the factors of the given number( factors are the number that completely divides the given number)
    Step 2: Then check the total number of factors of t nhatumber
    Step 3: Hence, If the total number of factors is more than two, it is not a prime number but a composite number.
    Because When a number is divisible by only one and itself, then it is a prime number.
*/
echo'Question 01:<br><br>';
 $numbers=[12,34,2,6,78];
 echo "[12,34,2,6,78] = This array is called Indexed array";
 echo '<br> <br>';
 //echo var_dump($numbers);
$num = 2;  
   foreach($numbers as $number) 
            {  
                $div_count=0;  
                for ( $i=1; $i<=$number; $i++)  
                {  
                        if (($number%$i)==0)  
                            {  
                                $div_count++;  
                            }  
                }

                if ($div_count<3){  
                    echo "{$number} is a Prime Number.<br>";   
                }  
               
            }  
echo'<br><hr>Question 02:<br><br>';
/*
Question 02:

	Let’s think about a use case, Daraz admin’s have some products for uploads on their e-commerce site. 
    So make an array of products which contains 5 products.
    Go to daraz website and pick any 5 products and make your array.
    Must mention Which type of array you have made.
*/

$products = [
                ['name'=>'SONY PLUS SMART / WIFI HD LED TV ( RAM-1 GB-ROM 8 GB )','size'=>32,'4K'=>true,'price'=>11790],
                ['name'=>'Xiaomi Mi P1 L43M6-6AEU','size'=>43,'4K'=>true,'price'=>40989],
                ['name'=>'Samsung N4010 HD TV 32N4010','size'=>32,'4K'=>false,'price'=>17315],
                ['name'=>'Vikan SMART WIFI ANDROID LED TV 1 GB 8 GB','size'=>32,'4K'=>true,'price'=>11900],
                ['name'=>'Haier Android 9.0 Smart TV (LE43K6600UG)','size'=>43,'4K'=>true,'price'=>40970]
            ];

    echo "This array is called Multidimensional array";
    // echo '<pre>';
    // echo var_dump($products);
echo'<br><br><hr>Question 03:<br><br>';
/*
Question 03:

    This is an array array(0,10,80,67,60,89,91,56,45,30,95,83,99) 
    Find the maximum value from this array.
    Must use a foreach loop.
*/
$numbers=array(0,10,80,67,60,89,91,56,45,30,95,83,99);
$max = 0;
foreach ($numbers as $value) {
    if ($value > $max) {
        $max = $value;
    }
}
echo "{$value} is Maximum Value from this Array.";

echo'<br><br><hr>Question 04:<br><br>';
/*
Question 04:
    Let’s traverse this array(0,10,80,67,60,89,91,56,45,30,95,83,99) and print 0 index then skip 1 index again print 2 skip 3….
*/
$numbers=array(0,10,80,67,60,89,91,56,45,30,95,83,99);
foreach ($numbers as $key=>$value) {
    if ($key%2!==0) {
        //echo "skip {$key} index {$value} value.<br>";
       continue;
    }else{
        echo "{$key} index {$value} value.<br>";
    }
}
?>  