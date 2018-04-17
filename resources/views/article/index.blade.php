<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>

	<br>
	<a href="{{ url('article/create') }}">Create Article</a>   
	<br>
	<?php $no=1; ?>

	@foreach($article as $row)

	- <b> Article Number {{$no++}} </b> <br>
	- title {{ $row->title }} <br>
	- Content = {{substr($row->content,0, 10)}} <br>
	- Action = 
		<a href="{{'article/show/'.$row->id}}">Show</a> | 
		<a href="{{'article/edit/'.$row->id}}">Edit</a> |
		<a href="{{'article/hapus/'.$row->id}}">Delete</a> |

	@endforeach

{{$article->links()}}

</body>
</html>