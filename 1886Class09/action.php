<?php 
   function required($field,$data,$check){
       if($check==1){
           if($data==''){
               echo '<script> alert( "Warning!! '.$field.' field are Required.");window.location=\'index.php\';</script>';
               return $check=0;    
           }else{
               return $check=1;
           }
       }
   }


   if(isset($_POST['submit']) || isset($_GET['submit'])){
   
       if(isset($_POST['submit'])){
           $method=$_POST;
       }else{
           $method=$_GET;
       }
   /* echo '<pre>';
           print_r($method);
       echo '</pre>';*/

       $fname = $method['fname'];
       $lname = $method['lname'];
       $mobile = $method['mobile'];
       $email = $method['email'];
       $address = $method['address'];
       $city = $method['city'];
       $upozilla = $method['upozilla'];
       $postCode = $method['postCode'];

       //Required Field 
       $check=1; // 0 = empty data 1 have data

       $check = required('First Name',$fname,$check);
       $check = required('Last Name',$lname,$check);
       $check = required('Mobile No ',$mobile,$check);
       $check = required('Address',$address,$check);
       $check = required('Post Code',$postCode,$check);

       if($check===1){
           echo "<h3><b>Congratulations {$fname} {$lname} !!! Successfully Saved Data.</b></h3>";
       }

   }
?>
