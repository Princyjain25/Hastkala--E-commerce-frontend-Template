<?php include './includes/header.php'?>
<section class="index-section mb-5" style="color: #5fbeaa !important; background-color: #313a43 !important;">
        <div class="page-content">
            <div class="mb-1 text-center">
                <h1 class="font-weight-bold">CREATE ACCOUNT</h1>
            </div>
        </div>

    </section>
    <section>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 bg-light p-5">
                    <form  id="signup">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="form-group col-md-6">
                            <label class="form-label col-label" for="name">Name</label>
                            <input class="field__input" type="text" name="name" placeholder="XYZ" id="name">
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3"></div>
                        <div class="form-group col-md-6">
                            <label class="form-label col-label my-3" for="emailaddress_personal;">Email Address</label>
                            <input class="field__input" type="text" name="emailaddress_personal;" placeholder="abc@gmail.com" id="email">
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3"></div>
                        <div class="form-group col-md-6">
                            <label class="form-label col-label my-3" for="username;">Username</label>
                            <input class="field__input" type="text" name="username;" placeholder="xyz" id="username">
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3"></div>
                        <div class="form-group col-md-6">
                            <label class="form-label col-label" for="ca_pass">Password </label>
                            <input class="field__input" type="password" name="ca_pass" placeholder="****" id="password">
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3"></div>
                        <div class="form-group col-md-6">
                            <label class="form-label col-label my-3" for="confirm_pw;">Confirm Password</label>
                            <input class="field__input" type="password" name="confirm_pw;" placeholder="****" id="confirm-password">
                        </div>
                        <div class="col-md-3"></div>

                    </div>
                    <div class="form-group text-center">
                        <input class="btn btn-outline-dark" type="submit" onclick="registration()" value="Create Account" >
                    </div>
                    </form>
                </div>
                <script >
    function registration()
	{

		var name= document.getElementById("name").value;
		var email= document.getElementById("email").value;
		var uname= document.getElementById("username").value;
		var pwd= document.getElementById("password").value;			
		var cpwd= document.getElementById("confirm-password").value;
		
        //email id expression code
		var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
		var letters = /^[a-zA-Z][a-zA-Z ]*$/;
        var username=/^[a-zA-Z0-9_-]{3,16}$/;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if(name=='')
		{
			alert('Please enter your name');
		}
		else if(!letters.test(name))
		{
			alert('Name field required only alphabet characters');
		}
		else if(email=='')
		{
			alert('Please enter your user email id');
		}
		else if (!filter.test(email))
		{
			alert('Invalid email');
		}
		else if(uname=='')
		{
			alert('Please enter the user name.');
		}
		else if(!username.test(uname))
		{
			alert('User name is invalid.');
		}
		else if(pwd=='')
		{
			alert('Please enter Password');
		}
		else if(cpwd=='')
		{
			alert('Enter Confirm Password');
		}
		else if(!pwd_expression.test(pwd))
		{
			alert ('Upper case, Lower case, Special character and Numeric letter are required in Password filed');
		}
		else if(pwd != cpwd)
		{
			alert ('Password not Matched');
		}
		else if(document.getElementById("confirm-password").value.length < 6)
		{
			alert ('Password minimum length is 6');
		}
		else if(document.getElementById("confirm-password").value.length > 12)
		{
			alert ('Password max length is 12');
		}
		else
		{				                            
               alert('Thank You !!');
			   window.location = "./index.php";
		}
	}
</script>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


<?php include './includes/footer.php'?>