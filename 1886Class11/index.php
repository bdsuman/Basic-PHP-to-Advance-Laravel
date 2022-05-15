<!-- 
Class 11 Assingment: Suman Chandra Sen, Id:1886 

Case Study:
    Question 01:
        Practice class 11
        Create a own design registration form
        Practice all things which already done in class 11
		
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    
</head>
<body>    
<div class="container">
        <div class="card ">
                <div class="card-header text-center font-weight-bold">
                       <h2>Registration Form</h2>      
                </div>
                <div class="card-body">
    <?php
              
        /**
         * For Show validation message
         *
         * @param string $message
         * @param string $alertType
         */
        function validate($message, $alertType="danger") {
            return "<div class=\"alert alert-{$alertType} alert-dismissible fade show\" role=\"alert\">
                        <strong>{$message}!</strong>
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>";
        }
        
        /**
         * validateEmail For check valid email or not.
         * @param string $email
         */
        function validateEmail($email) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return true;
            } else {
                return false;
            }
        }

        /**
         * filterEduMail for filtering institution email addresses
         * @param string $email
         */
        function filterEduMail($email) {
            $validEmails = array('diu.edu.bd', 'brac.edu.bd', 'nsu.edu.bd','du.edu.bd','sust.edu.bd');
            $email_arr = explode('@', $email, 2);
            if (in_array(end($email_arr), $validEmails)) {
                return true;
            } else {
                return false;
            }
        }

         /**
         * validateUsername for valid username regular expression
         */
        function validateUsername($username) {
            
            // \w = 0-9A-Za-z_
            if (preg_match('/^\w{5,20}$/', $username)) {
                return true;
            } else {
                return false;
            }
        }


        /**
         * oldValue for keep old values of fields
         * @param string $fieldName
         */
        function oldValue($fieldName) {

            if (isset($_POST[$fieldName])) {
                echo $_POST[$fieldName];
            } else {
                echo '';
            }
        }

        /**
         * clearFormData for clear all fields values after success
         */
         function clearFormData() {
            $_POST = '';
         }



                    if(isset($_POST['submit']) || isset($_GET['submit'])){
                    
                        if(isset($_POST['submit'])){
                            $method=$_POST;
                        }else{
                            $method=$_GET;
                        }
                        /*echo '<pre>';
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
                        $age = $method['age'];

                        $gender       = '';
                        if (isset($_POST['gender'])) {
                                $gender  = $_POST['gender'];
                        }

                        $agree_status = '';
                        if (isset($_POST['agree_status'])) {
                            $agree_status = $_POST['agree_status'];
                        }

                        /*if (empty($fname) || empty($lname) || empty($email) || empty($mobile) || empty($address) || empty($postCode)) {

                            $validationMsg = validate('* Mark fields are required');
            
                        } */
                        $error = 0;
                        // for First Name
                        if (empty($fname)) {

                            $validationMsgfname = validate('First Name is required');
                            $error++;
                        }
                        // for Last Name
                        if (empty($lname)) {

                            $validationMsglname = validate('Last Name is required');
                            $error++;
                        }
                        // for Gender
                        if (empty($gender)) {

                            $validationMsgGender = validate('Gender is required');
                            $error++;
                        }


                        // for mobile
                        if ( empty($mobile)) {

                            $validationMsgMobile = validate('Mobile Number is required');
                            $error++;
                        }

                         //for email check 
                         if (empty($email)) {

                            $validationMsgEmail = validate('Email is required');
                            $error++;
            
                        }else if (validateEmail($email) == false) {
            
                            $validationMsgEmail = validate('Email is not valid', 'warning');
                            $error++;
            
                        } else if (filterEduMail($email) == false) {
            
                            $validationMsgEmail = validate('Email is not a edu mail', 'warning');
                            $error++;
            
                        }
                        //for addresse
                        if (empty($address)) {

                            $validationMsgAddress = validate('Address  is required');
                            $error++;
            
                        }
                        //for postcode
                        if (empty($postCode)) {

                            $validationMsgPostCode = validate('Post Code is required');
                            $error++;
            
                        }
                        // for Age
                        if(empty($age)) {
                            $validationMsgAge = validate('Age is required');
                            $error++;
                        }else if ($age < 18 || $age > 60) {

                            $validationMsgAge = validate('You are Not perfect for this course', 'warning');
                            $error++;
            
                        } 
                        // for user name
                       /* if(empty($userName)){
                            $validationMsgUserName = validate('Username is required');
                            $error++;
                        }else if (validateUsername($username) == false) {
            
                            $validationMsgUserName = validate('Username not valid', 'warning');
                            $error++;
            
                        } */
                        
                        if ($agree_status != 'yes') {
                            $validationMsgAgree = validate('Please agree terms and conditions', 'warning');
                            $error++;
                        } 
                        
                        echo $error;
                        if($error==0){
            
                            $validationMsg = validate("Congratulations {$fname} {$lname} !!! Successfully Saved Data.", 'success');
                            clearFormData();
                        }

                    }
                ?>
                    <h5 class="card-title"><span style="color:red"> * </span> Mark Field Are Required</h5>
                        <hr><br>
                        <?php 
                            if (isset($validationMsg)) {
                                    echo $validationMsg;
                                }
                        ?>
                        
                        <form action="" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="fname">First Name <span style="color:red"> * </span></label>
                                        <input type="text" class="form-control" id="fname"  name="fname" value="<?php oldValue('fname');?>" placeholder="First Name">
                                        <?php 
                                            if (isset($validationMsgfname)) {
                                                    echo $validationMsgfname;
                                                }
                                        ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lname">Last Name <span style="color:red"> * </span></label>
                                        <input type="text" class="form-control" name="lname" id="lname" value="<?php oldValue('lname');?>" placeholder="Last Name">
                                        <?php 
                                            if (isset($validationMsglname)) {
                                                    echo $validationMsglname;
                                                }
                                        ?>
                                    </div>
                                </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="fieldFive" class="form-label">Gender <span style="color:red"> * </span></label><br>
                                        
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                                        <label class="form-check-label" for="inlineRadio2">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Others">
                                        <label class="form-check-label" for="inlineRadio3">Others</label>
                                    </div>
                                    <?php 
                                            if (isset($validationMsgGender)) {
                                                    echo $validationMsgGender;
                                                }
                                    ?>
                                </div>
                                <div class="form-group col-md-6">
                                        <label for="age">Age <span style="color:red"> * </span></label>
                                        <input type="text" class="form-control"  name="age" id="age" value="<?php oldValue('age');?>" placeholder="Age">
                                        <?php 
                                            if (isset($validationMsgAge)) {
                                                    echo $validationMsgAge;
                                                }
                                    ?>       
                                </div>
                            </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="mobile">Mobile <span style="color:red"> * </span></label>
                                        <input type="tel" class="form-control" id="mobile"  name="mobile" value="<?php oldValue('mobile');?>" placeholder="Mobile">
                                        <?php 
                                            if (isset($validationMsgMobile)) {
                                                    echo $validationMsgMobile;
                                                }
                                    ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email <span style="color:red"> * </span></label>
                                        <input type="text" class="form-control" id="email" name="email" value="<?php oldValue('email');?>" placeholder="Email">
                                        <?php 
                                            if (isset($validationMsgEmail)) {
                                                    echo $validationMsgEmail;
                                                }
                                        ?>
                                    </div>
                                    
                                </div>
                                 <div class="form-group">
                                    <label for="address">Address <span style="color:red"> * </span></label>
                                    <input type="text" class="form-control" id="address" name="address" value="<?php oldValue('address');?>" placeholder="Apartment, Road, or floor">
                                    <?php 
                                            if (isset($validationMsgAddress)) {
                                                    echo $validationMsgAddress;
                                                }
                                    ?>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" id="city" name="city" value="<?php oldValue('city');?>" placeholder="City">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="upozilla">Upozilla</label>
                                        <select id="upozilla" name="upozilla" class="form-control">
                                            <option  >Choose...</option>
                                            <option value="Sadar" selected >Sadar</option>
                                            <option value="Gouripur" >Gouripur</option>
                                            <option value="Haluaghat" >Haluaghat</option>
                                            <option value="Tarakanda" >Tarakanda</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="postCode">Post Code<span style="color:red"> * </span></label>
                                        <input type="text" class="form-control" id="postCode" name="postCode" value="<?php oldValue('postCode');?>" placeholder="Post Code">
                                        <?php 
                                            if (isset($validationMsgPostCode)) {
                                                    echo $validationMsgPostCode;
                                                }
                                    ?>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="agree_status" value="yes" id="agreeCheckbox">
                                    <label class="form-check-label" for="agreeCheckbox">
                                        Are you Agree?
                                    </label>
                                    <?php 
                                            if (isset($validationMsgAgree)) {
                                                    echo $validationMsgAgree;
                                                }
                                    ?>
                                </div>
                                <div align="center">
                                    <button type="submit" name="submit" class="btn btn-primary">SAVE</button>
                                </div>
                                
                        </form>
                </div>
                <div class="card-footer text-muted">
                   Copyright &copy; 2022
                </div>
        </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>

