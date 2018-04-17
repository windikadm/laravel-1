<ul>
    @foreach ($errors->all() as $row)
    <li> {{$row}} </li>
    @endforeach
</ul>
<form action="{{url('article/create')}}" method="post">
	
	Title : <input type="text" name="title"><br>
	Content : <input type="text" name="content"><br>
	
	{{csrf_field()}}
	<button type="submit" >GOL</button>
</form>