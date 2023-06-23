<h1>Searched Data List</h1>

<table border="1" >
    <tr>
        <td>Id</td>
        <td>Title</td>
        <td>Description</td>
        <td>Created_at</td>
        <td>Updated_at</td>
    </tr>
    @foreach ($tasks as $task)
    <tr>
        <td>{{$task['id']}}</td>
        <td>{{$task['title']}}</td>
        <td>{{$task['description']}}</td>
        <td>{{$task['created_at']}}</td>
        <td>{{$task['updated_at']}}</td>

    </tr>
@endforeach


</table>