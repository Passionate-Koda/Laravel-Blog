<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
</head>
<body>
	<section>
		<div class="mast">
			<h1>T<span>SSB</span></h1>
			<nav>
				<ul class="clearfix">
					<li><a href="#" class="selected">add posts</a></li>
					<li><a href="#">view posts</a></li>
					<li><a href="#">view posts</a></li>
					<li><a href="#">view posts</a></li>
					<li><a href="/logout">logout</a></li>
				</ul>
			</nav>
		</div>
	</section>
	<div class="wrapper">















<form class="" action="" method="post">
  <p>Are You Sure you want to Delete this Post?</p>
  <input type="hidden" name="_method" value="DELETE">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="submit" name="delete" value="Yes">
</form>
<form class="" action="" method="post">

  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="submit" name="delete" value="No">
</form>
