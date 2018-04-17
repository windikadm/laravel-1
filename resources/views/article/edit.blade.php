<ul>
    @foreach ($errors->all() as $row)
    <li> {{$row}} </li>
    @endforeach
</ul>

<form action="{{url('article/update')}}" method="post">
	<input type="hidden" name="id" value="{{$article->id}}">
	Title : <input type="text" name="title" value="{{$article->title}}" ><br>
	Content : <input type="text" name="content" value="{{$article->content}}" ><br>
	{{csrf_field()}}
	<button type="submit">UPDATE</button>
</form>