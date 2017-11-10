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
 <h2>ADD POST</h2>
 <hr>





<form id="register" action="/admin/addpost" method="POST" enctype="">


@if(Session::has('message'))
	{{ Session::get('message') }}
@endif

<label for="">TITLE</label>
<span class="error">@if(count($errors)> 0 && $errors->has("title"))
{{$errors->get('title')[0]}}
@endif
</span>



<div class="">
<input type="text" name="title" value="" placeholder="Price of book">
</div>





<label for="">AUTHOR</label>
<span class="error">*@if(count($errors)> 0 && $errors->has("author"))
{{$errors->get('author')[0]}}
@endif
</span>
<div class="">

<input type="text" name="author" value="" placeholder="Year of Publication">
</div>


  <label for="">POST</label>
  <span class="error">*@if(count($errors)> 0 && $errors->has("body"))
{{$errors->get('body')[0]}}
@endif
</span>
  <div class="">

  <textarea name="body" id="" col rows="10"></textarea>
</div>




<input type="submit" name="add" value="Add Post">
{{csrf_field()}}
</form>

	<section class="foot">
		<div>
			<p>&copy; 2016;
		</div>
	</section>
</body>
</html>
