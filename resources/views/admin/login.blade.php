<!DOCTYPE html>
<html>
<head>
	<title>@yield('browsertitle')</title>
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
</head>
<body>
	<section>
		<div class="mast">
			<h1>T<span>SSB</span></h1>
		</div>
	</section>
	<div class="wrapper">
		<h1 id="register-label">Admin Login</h1>
		<hr>
		<form id="register"  action ="/admin" method ="POST">

			<div>

				<span class="err">@if(count($errors)> 0 && $errors->has("email"))
				{{$errors->get('email')[0]}}
				@endif
				</span>

				<label>email:</label>
				<input type="text" name="email" placeholder="email">
			</div>
			<div>
				<span class="err">@if(count($errors)> 0 && $errors->has("password"))
				{{$errors->get('password')[0]}}
				@endif
				</span>
				<label>password:</label>
				<input type="password" name="password" placeholder="password">
			</div>

			{{csrf_field()}}
			<input type="submit" name="login" value="Login">
		</form>

		<h4 class="jumpto">Have an account? <a href="login.php">register</a></h4>

	<section class="foot">
		<div>
			<p>&copy; 2016;
		</div>
	</section>
</body>
</html>
