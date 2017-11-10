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

					@if(auth()->guard('web_admin')->check())
					<li><a href="/logout">logout</a></li>
					@endif
				</ul>
			</nav>
		</div>
	</section>
	<div class="wrapper">
		<div id="stream">

			<table id="tab">
				<thead>
					<tr>

						<th>title</th>
						<th>author</th>
						<th>post</th>
						<th>date_created</th>
						<th>edit</th>
						<th>delete</th>


					</tr>
				</thead>
				<tbody>
					<tr>
						@foreach($view as $views)
							<td>{{ $views->title }}</td>
							<td>{{ $views->author }}</td>
							<td>{{ $views->body }}</td>
							<td>{{ $views->created_at }}</td>
							<td><a href="/post/edit/{{$views->id}} ">edit</a></td>
							<td><a href="/post/delete/{{$views->id}}" >delete</a></td>


					</tr>
					@endforeach
          		</tbody>
			</table>
		</div>

		<div class="paginated">
			<a href="#">1</a>
			<a href="#">2</a>
			<span>3</span>
			<a href="#">2</a>
		</div>
	</div>

	<section class="foot">
		<div>
			<p>&copy; 2016;
		</div>
	</section>
</body>
</html>
