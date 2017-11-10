<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
</head>
<body>
	<section>
		<div class="mast">
			<h1>T<span>SSB</span></h1>
		</div>
	</section>

	<div class="wrapper">
		<h1 id="register-label">Admin Register</h1>
		<hr>
		<form id="register"  action ="/admin/register" method ="POST">

			<div>
				<span class="err">@if(count($errors)> 0 && $errors->has("firstname"))
				{{$errors->get('firstname')[0]}}
				@endif
				</span>

				<label>first name:</label>

				<input type="text" name="firstname" placeholder="first name">
			</div>

			<div>
				<span class="err">@if(count($errors)> 0 && $errors->has("lastname"))
				{{$errors->get('lastname')[0]}}
				@endif
				</span>
				<label>last name:</label>
				<input type="text" name="lastname" placeholder="last name">
			</div>

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

			<div>
				<span class="err">@if(count($errors)> 0 && $errors->has("password_confirmation"))
				{{$errors->get('password_confirmation')[0]}}
				@endif
				</span>

				<label>confirm password:</label>
				<input type="password" name="password_confirmation" placeholder="password">
			</div>

			<input type="submit" name="register" value="register">
			{{csrf_field()}}
		</form>

		<h4 class="jumpto">Have an account? <a href="login.php">login</a></h4>
	</div>

	<section class="foot">
		<div>
			<p>&copy; 2016;
		</div>
	</section>
</body>
</html>
