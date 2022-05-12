<!-- 
Class 10 Assingment: Suman Chandra Sen, Id:1886 

Case Study:
    Question 01:
        Practice class 10
        Create a own design registration form
        Practice all things which already done in class 10
		
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

                        if (empty($fname) || empty($lname) || empty($email) || empty($mobile) || empty($address) || empty($postCode)) {

                            $validationMsg = validate('* Mark fields are required');
            
                        } else if (validateEmail($email) == false) {
            
                            $validationMsg = validate('Email is not valid', 'warning');
            
                        } else if (filterEduMail($email) == false) {
            
                            $validationMsg = validate('Email is not a edu mail', 'warning');
            
                        } else {
            
                            $validationMsg = validate("Congratulations {$fname} {$lname} !!! Successfully Saved Data.", 'success');
            
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
                                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lname">Last Name <span style="color:red"> * </span></label>
                                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="mobile">Mobile <span style="color:red"> * </span></label>
                                        <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email <span style="color:red"> * </span></label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    </div>
                                    
                                </div>
                                 <div class="form-group">
                                    <label for="address">Address <span style="color:red"> * </span></label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Apartment, Road, or floor">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" id="city" name="city" placeholder="City">
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
                                        <input type="text" class="form-control" id="postCode" name="postCode" placeholder="Post Code">
                                    </div>
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

