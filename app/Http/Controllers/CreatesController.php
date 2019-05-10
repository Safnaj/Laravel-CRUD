<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class CreatesController extends Controller
{
    //Initialize Method
    public function home(){
        $items = Item::all();
        return view('home',['items'=>$items]);
    }

    //Add Method
    public function add(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ]);

        //Getting Data from HTML Form and Inserting to DB
        $items = new Item;
        $items->title = $request->input('title');
        $items->description = $request->input('description');
        $items->save();
        return redirect('/')->with('info','Item Added Successfully..!');
    }

    //Find a Particular Item using it ID
    public function update($id){
        $items = Item::find($id);
        return view('update',['items'=>$items]);
    }

    //Edit & Update
    public function edit(Request $request, $id){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ]);

        $data = array(
          'title' => $request->input('title'),
          'description' => $request->input('description')
        );

        //Update
        Item::where('id', $id)->update($data);
        return redirect('/')->with('info','Item Updated Successfully..!');
    }

    public function read($id){
        $items = Item::find($id);
        return view('read', ['items' => $items]);
    }

	//Delete Function using ID
    public function delete($id){
        Item::where('id', $id)->delete();
        return redirect('/')->with('info','Item Deleted Successfully..!');
    }
}
