<!DOCTYPE html>
<html>
<head>
	<title>Cakra | Login</title>
	<link rel="stylesheet" type="text/css" href="/loginn/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>

	<img class="wave" src="/loginn/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="/loginn/img/bg.svg">
		</div>
		<div class="login-content">
			<form action="/login" method="post">
                @csrf
				<img src="/loginn/img/avatar.svg">
				<h2 class="title">Login</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="username" name="username" id="username" required autofocus @if(Cookie::has('username')) value="{{ Cookie::get('username') }}" @endif class="input" placeholder="Username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" name="password" id="password" required class="input" placeholder="Password" @if(Cookie::has('password')) value="{{ Cookie::get('password') }}" @endif>
            	   </div>
            	</div>
                <div class="form-group text-end">
                    <label for="remember"> Remember me</label>
                    <input type="checkbox" @if(Cookie::has('username')) checked @endif   name="remember" value="1">
                </div>
            	<a href="/register" class="nav-link">Register?</a>
            	<input type="submit" class="btn" value="login">
            </form>
        </div>
    </div>
</body>
</html>
