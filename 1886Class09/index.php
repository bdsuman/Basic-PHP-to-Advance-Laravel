<!-- 
Class 9 Assingment: Suman Chandra Sen, Id:1886 

Case Study:
    Question 01:
        Practice class 9
        Create a own design registration form
        Practice all things which already done in class 9
		
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>    
<div class="container">
        <div class="card ">
                <div class="card-header text-center font-weight-bold">
                       <h2>Registration Form</h2>      
                </div>
                <div class="card-body">
                <?php
                    function required($field,$data,$check){
                        if($check==1){
                            if($data==''){
                                echo '<script> alert( "Warning!! '.$field.' field are Required.");</script>';
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
                    <h5 class="card-title"><span style="color:red"> * </span> Mark Field Are Required</h5>
                        <hr><br>
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
                                        <label for="email">Email</label>
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

</body>
</html>

