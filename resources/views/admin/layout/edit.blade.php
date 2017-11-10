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
 <h2>Edit POST</h2>
 <hr>





<form id="register" action="/post/edit/{{$view->id}}" method="POST" enctype="">

<input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{{ csrf_token() }}">


<label for="">TITLE</label>
<span class="error">@if(count($errors)> 0 && $errors->has("title"))
{{$errors->get('title')[0]}}
@endif
</span>
<div class="">

<input type="text" name="title" value="{{$view->title}}" placeholder="Price of book">
</div>





<label for="">AUTHOR</label>
<span class="error">*@if(count($errors)> 0 && $errors->has("author"))
{{$errors->get('author')[0]}}
@endif
</span>
<div class="">

<input type="text" name="author" value="{{$view->author}}" placeholder="Year of Publication">
</div>


  <label for="">POST</label>
  <span class="error">*@if(count($errors)> 0 && $errors->has("body"))
{{$errors->get('body')[0]}}
@endif
</span>
  <div class="">

  <textarea name="body" id="" col rows="10">{{$view->body}}</textarea>
</div>




<input type="submit" name="update" value="Edit Post">
{{csrf_field()}}
</form>

	<section class="foot">
		<div>
			<p>&copy; 2016;
		</div>
	</section>
</body>
</html>
