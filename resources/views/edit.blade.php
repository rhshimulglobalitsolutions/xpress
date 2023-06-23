<h1>Update Selected Item</h1>
<form action="/edit" method="POST">
    @csrf
<input type="hidden" name="id" value="{{$data['id']}}"> 
<input type="text" name="title" value="{{$data['title']}}"><br> <br>
<input type="text" name="description" value="{{$data['description']}}"><br> <br>
<button type="submit">Update</button>

</form>