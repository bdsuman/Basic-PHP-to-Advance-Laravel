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

<?php


?>    
<div class="container">
        <div class="card ">
                <div class="card-header text-center font-weight-bold">
                       <h2>Registration Form</h2> 
                       
                </div>
                <div class="card-body">
                    <h5 class="card-title"><span style="color:red"> * </span> Mark Field Are Required</h5>
                        <hr><br>
                        <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">First Name <span style="color:red"> * </span></label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Last Name <span style="color:red"> * </span></label>
                                        <input type="password" class="form-control" id="inputPassword4" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Mobile <span style="color:red"> * </span></label>
                                        <input type="tel" class="form-control" id="inputPassword4" placeholder="Mobile">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    
                                </div>
                                 <div class="form-group">
                                    <label for="inputAddress2">Address <span style="color:red"> * </span></label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, Road, or floor">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputCity">City</label>
                                        <input type="text" class="form-control" id="inputCity" placeholder="City">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Upozilla</label>
                                        <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputZip">Zip <span style="color:red"> * </span></label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>
                                <div align="center">
                                    <button type="submit" class="btn btn-primary">SAVE</button>
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

