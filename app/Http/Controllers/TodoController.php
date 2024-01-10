<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Todo::all();
        
        //$data=Todo::orderBy('id','asc')->get();
        return view('todo/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todo/index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'todo'=>'required'
        // ]);
        // $data = ['todo'=>$request->input('todo')];
        Todo::create($request->all());
        return redirect('todo');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Todo::where('id', $id)->first();
        return view('todo/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'todo' =>$request->input('todo'),
            'is_done' =>$request->input('is_done')
        ];
        Todo::where('id', $id)->update($data);
        return redirect('todo')->with('success', 'To do list berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Todo::where('id', $id)->delete();
        return redirect('todo')->with('success', 'To do list berhasil dihapus');
    }
}
