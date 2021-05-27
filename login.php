<?php include './includes/header.php'?>
<section class="index-section mb-5" style="color: #5fbeaa !important; background-color: #313a43 !important;">
        <div class="page-content">
            <div class="mb-1 text-center">
                <h1 class="font-weight-bold">LOGIN</h1>
            </div>
        </div>

    </section>
    <section>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 bg-light">
                    <label class="form-label col-label my-3" for="email_login" >Email Address</label>
                    <input class="field__input border-dark" type="text" name="email_login" placeholder="joe.black@gmail.com" id="email_login">

                    <label class="form-label col-label my-3" for="pass_login">Password</label>
                    <input class="field__input border-dark" type="password" name="pass_login" placeholder="*****" id="pass_login">
                    <input type="checkbox"  class="mt-3"  onclick="showpw()"> &nbsp;Show Password

                    <div class="form-group text-center my-3">
                        <a href="#" class="col-label my-3">Forgot your password?</a><br>
                        <a href="#" class="btn btn-outline-dark my-3" type="submit" onClick="login()"><i class="fa fa-save mr-2"></i>Sign In</a><br>
                        <a href="./create account.php" class="col-label my-3">Create Account</a>
                    </div>
                    <script>
                         function login()
                        {
                            var uname = document.getElementById("email_login").value;
                            var pwd = document.getElementById("pass_login").value;
                            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                            if(uname =='')
                            {
                                alert("Please enter the Email Id");
                            }
                            else if(pwd=='')
                            {
                                alert("Please enter the Password");
                            }
                            else if(!filter.test(uname))
                            {
                                alert("Enter valid email id.");
                            }
                            else if(pwd.length <6)
                            {
                                alert("Password min length is 6.");
                            }
                            else if(pwd.length>15)
                            {
                                alert("Password max length is 15.");
                            }
                            else
                            {
                        alert('Login Successfully !!');
                    //Redirecting to other page or webste code or you can set your own html page.
                        window.location = "./userpanel_profile.php";
                                }
                        }
                        function showpw() {
                        var x = document.getElementById("pass_login");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                        }
                    </script>

                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<?php include './includes/footer.php'?>