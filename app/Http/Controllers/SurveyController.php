<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class SurveyController extends Controller
{
    function index()
    {
        $data= Task::all();  //retrieving all data from database table.
        return view('list',['tasks'=>$data]);  //Display all data from database table in a list.
    }

    function show($id)
    {
        return Task::findorFail($id);   //searches for the object in the database using its id and returns it.
      //  $data= Task::findorFail($id);
       // return view('list', ['tasks' =>$data]);
    }
    

    function additem(Request $request)
    {
        $this->validate($request, [ //inputs are not empty or null
            'title' => 'required',
            'description' => 'required',
        ]);
  
        $data = new Task;
        $data->title = $request->input('title'); //retrieving user inputs
        $data->description = $request->input('description');  //retrieving user inputs
        $data->save();   //storing new value.
        return redirect('list');   //return to registered data list.

    }

    function edit($id)
    {
        $data= Task::findorFail($id);  //search by id.
        return view('edit', ['data'=>$data]);  //show the data that want to edit.

    }

    function update(Request $request)
    {
        $this->validate($request, [ // the new values should not be null.
            'title' => 'required',
            'description' => 'required',
        ]);
  
        $data = Task::findorFail($request->id); // uses the id to search values that need to be updated.
        $data->title = $request->input('title'); //retrieves user input.
        $data->description = $request->input('description');//retrieves user input.
        $data->save();    //store the updated value.
        return redirect('list');  //return to registered data list.

    }

    public function delete( $id)
    {
        $data = Task::findorFail($id);  //search by id to delete the item.
        $data->delete();         //delete item.
        return redirect('list');  //return to registered data list.
    }

    public function search($title,)
    {
        return Task::where('title', 'like', '%'. $title. '%')->get();  //searches for the object in the database using string value and returns it.
    }

}
