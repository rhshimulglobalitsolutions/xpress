<h1>Registered Data List</h1>

<table border="1" >
    <tr>
        <td>Id</td>
        <td>Title</td>
        <td>Description</td>
        <td>Created_at</td>
        <td>Updated_at</td>
        <td>Operation1</td>
        <td>Operation2</td>
    </tr>
    @foreach ($tasks as $task)
    <tr>
        <td>{{$task['id']}}</td>
        <td>{{$task['title']}}</td>
        <td>{{$task['description']}}</td>
        <td>{{$task['created_at']}}</td>
        <td>{{$task['updated_at']}}</td>
        <td>
            <a href={{"edit/".$task['id']}}>Edit</a>
        
        </td>
        <td>
            <a href={{"delete/".$task['id']}}>Delete</a>
            
        </td>

    </tr>
@endforeach


</table>