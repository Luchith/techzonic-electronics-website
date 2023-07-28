<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="login.css">
    <script>
    function checkPassword()
        {
            let pw = document.getElementById("txtPassword").value;
            let cpw = document.getElementById("txtConfimPassword").value;
            if(pw != cpw)
                {
                    alert("Password and confrim password should be the same");
                    event.preventDefault();
                }
        }
    </script>
</head>

<body>
    <h2>Techzonic Electronics Sign up form</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="rh.php" method="post">
			<h1>Create Account</h1>
					
			<input type="text" placeholder="Name" name="txtName" id = "txtName"/>
			<input type="email" placeholder="Email" required name="txtEmail" id="txtEmail"/>
			<input type="password" placeholder="Password" id="txtPassword" name="txtPassword" required/>
            	<input type="password" placeholder="Confirm Password" id="txtConfimPassword" name="txtConfimPassword"/>
            <input type="number" placeholder="Contact Number" name="txtContactNo" id="txtContactNo" pattern="[0-9]{10}" required />        
            
			<input type="submit" value="Sign Up" name="btnReg" onClick="checkPassword()">
            <a href="webpage1.php">home page</a>
		</form>
        
	</div>
	<div class="form-container sign-in-container">
		<form action="lh.php" method="post">
			<h1>Sign in</h1>
		 
			<input type="email" name="txtEmail" placeholder="Email" />
			<input type="password" name="txtPassword" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<input type="submit" value="Sign In" name="btnSubmit">
            <br>
            <a href="webpage1.php">Back to home page</a>
        </form>
         
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
                
				<input type="submit" class="ghost" id="signIn" value="Sign In">
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello,Valuable Customer!</h1>
				<p>Enter your personal details and register with us</p>
                 
				<input type="submit" class="ghost" id="signUp" value="Sign Up"> 
			</div>
		</div>
	</div>
</div>

<script>
    
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
    </script>
</body>
</html>
