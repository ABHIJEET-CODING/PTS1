<?php

//if (isset($_SESSION['usertype'])) {
// redirect(base_url() . admin_folder . "/Dashboard");
//}
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>Login </title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->
		<!-- <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/admin/images/icons/favicon111.ico" /> -->
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/fontawesome.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/animate/animate.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/css/util.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/css/main.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
	</head>

	<body>
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<div class="login100-pic js-tilt" data-tilt> <img src="<?php echo base_url(); ?>assets/img/img-01.png" alt="IMG"> </div>
					<form class="login100-form" method="POST" id="user_registration"> 
                        <span class="login100-form-title">
                            TPO Register
                        </span>
						<div class="wrap-input100 form-group">
							<input class="input100 form-control" type="text" name="name" placeholder="Name" style="background-color:rgb(232, 240, 254)!important;" > 
                            <span class="focus-input100"></span> <span class="symbol-input100">
                                <i class="" aria-hidden="true"></i>
                            </span> 
                        </div>
						<div class="wrap-input100 form-group">
                            <select class="input100 form-control" name="department" style="background-color:rgb(232, 240, 254)!important;">
                                <option selected disabled>Select department</option>
                                <option value="IT">IT</option>
                                <option value="CSE">CSE</option>
                                <option value="Mechanical">Mechanical</option>
                                <option value="Electrical">Electrical</option>
                            </select>
                        </div>
						<div class="wrap-input100 form-group">
							<input class="input100 form-control" type="email" name="email" placeholder="Email" style="background-color:rgb(232, 240, 254)!important;"> 
                            <span class="focus-input100"></span> <span class="symbol-input100">
                                <i class="" aria-hidden="true"></i>
                            </span> 
                        </div>
						<div class="wrap-input100 form-group">
							<input class="input100 form-control" type="number" name="contact_no" placeholder="Contact No" style="background-color:rgb(232, 240, 254)!important;"> 
                            <span class="focus-input100"></span> <span class="symbol-input100">
                                <i class="" aria-hidden="true"></i>
                            </span> 
                        </div>
						<div class="wrap-input100 form-group">
							<input class="input100 form-control" type="password" name="password" id="password" placeholder="Enter password" style="background-color:rgb(232, 240, 254)!important;"> 
                            <span class="focus-input100"></span> <span class="symbol-input100">
                                <i class="" aria-hidden="true"></i>
                            </span> 
                        </div>
						<div class="wrap-input100 form-group">
							<input class="input100 form-control" type="password" name="confirm_password" placeholder="Confirm Password" style="background-color:rgb(232, 240, 254)!important;"> <span class="focus-input100" ></span> 
                  <span class="symbol-input100">
                      <i class="" aria-hidden="true"></i>
                  </span> 
            </div>
            <div class="container-login100-form-btn">
							<span><a href="<?php echo base_url(); ?>Login" type="link">Click Here To Login</a></span>
						</div>
						<div class="container-login100-form-btn">
							<button class="login100-form-btn" type="button" id="user_regsiter"> Register </button>
						</div>
						<div class="text-center p-t-136"> </div>
					</form>
				</div>
			</div>
		</div>
		<!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>assets/plugins/tilt/tilt.jquery.min.js"></script>
		<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
		</script>
        <script src="<?php echo base_url(); ?>assets/plugins/js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"> </script>
        <!-- <script src="<?php echo base_url(); ?>assets/admin/sweetalert2/sweetalert2.min.js"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"> </script> -->
            <script>
                $(document).ready(function(){
                    $('#user_registration').validate({ // initialize the plugin
                        rules: {
                            usertype: {
                                required : true,
                            },
                            name: {
                                required : true,
                            },
                            department: {
                                required : true,
                            },
                            email: {
                                required : true,
                                email : true,
                            },
                            contact_no: {
                                required : true,
                            },
                            password: {
                                required :true,
                                minlength : 5
                            },
                            confirm_password: {
                                minlength : 5,
                                equalTo : "#password"
                            },

                        },   
                        messages: {
                            usertype: {
                                required: "This field is required",
                            }, 
                            name: {
                                required: "This field is required",
                            }, 
                            email: {
                                required : "This field is required",
                                email    : "Enter valid Email"
                            },
                            contact_no: {
                                required: "This field is required",
                            },
                            password: {
                                required  : "Password is required",
                                minlength : "Enter minimum 5 character"
                            },
                            confirm_password: {
                                required  : "Confirm password  required",
                                minlength : "Enter minimum 5 character",
                                equalTo   : "Confirm password is not match"
                            }, 
                        }, 
                        errorElement: "span",
                        errorPlacement: function (error, element) {
                            error.addClass("invalid-feedback");
                            element.closest(".form-group").append(error);
                        },
                        highlight: function (element, errorClass, validClass) {
                            $(element).addClass("is-invalid");
                        },
                        unhighlight: function (element, errorClass, validClass) {
                            $(element).removeClass("is-invalid");
                        },
                    });
                    $("#user_regsiter").click(function (event) {
                        var valid = $("#user_registration").valid();
                        if (valid == false) {
                            return false;
                        }
                        //stop submit the form, we will post it manually.
                        event.preventDefault();

                        // Get form
                        var form = $('#user_registration')[0];

                        // Create an FormData object 
                        var data = new FormData(form);

                        $.ajax({
                            type: "POST",
                            dataType:'json',
                            enctype: 'multipart/form-data',
                            url: "<?php echo base_url() ?>Registration/registration_tpo",
                            data: data,
                            processData: false,
                            contentType: false,
                            success: function (data) {
                            if(data){
                                alert('registration Success');
                                } else{
                                  alert('Something went to wrong');
                                } 
                            },
                        });
                    });
                });
        </script>
    </body>
    
</html>