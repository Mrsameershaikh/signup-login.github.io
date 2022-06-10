<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Xelpmoc</title>
    <link rel="stylesheet" href="style.css">
    <!---we had linked our css file----->
</head>
<body>
    <div class="full-page">
        <div class="navbar">
            <div>
                <a href='index.php'>Xelpmoc</a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='#'>Home</a></li>
                    <li><a href='#'>About Us</a></li>
                    <li><a href='#'>Services</a></li>
                    <li><a href='#'>Contact</a></li>
                    <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                </ul>
            </nav>
        </div>
        <div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                    <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                </div>
                <form action="loginhelp.php" method="post" id='login' class='input-group-login'>
                    <input type='text'class='input-field' name="email" placeholder='Email Id' required >
		    <input type='password'class='input-field' name="password" placeholder='Enter Password' required>
		    <input type='checkbox'class='check-box'><span>Remember Password</span>
		    <button type='submit'class='submit-btn'>Log in</button>
		 </form>
		 <form action="signuphelp.php" method="POST" id='register' class='input-group-register'>
		     <input type='text'class='input-field' name="first_name" placeholder='First Name' required>
		     <input type='text'class='input-field' name="last_name" placeholder='Last Name ' required>
		     <input type='email'class='input-field' name="email" placeholder='Email Id' required>
		     <input type='password'class='input-field' name="password" placeholder='Enter Password' required>
		     <input type='password'class='input-field' name="confirm_password" placeholder='Confirm Password'  required>
		     <input type='checkbox'class='check-box' required><span>I agree to the terms and                                                   conditions</span>
                    <button type='submit'class='submit-btn'>Register</button>
	         </form>
            </div>
        </div>
    </div>
    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>