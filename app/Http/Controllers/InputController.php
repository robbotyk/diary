<?php

namespace App\Http\Controllers;

use App\Input;
use App\Http\Requests\PostRequest;
use App\Http\Requests\PostsRequest;

class InputController extends Controller
{
    
    // Input一覧表示 
    public function index(Input $input)
    {
        return view('index')->with(['inputs' => $input->get()]);
    }
    
    public function create(Input $input)
    {
        return view('create')->with(['input' => $input->get()]);
    }
    public function show(Input $input)
    {
        return view('show')->with(['input' => $input]);
    }
    public function store(PostRequest $request, Input $input)
    {
        $post = $request['diary'];
        $input->fill($post)->save();
        return redirect('/inputs/' . $input->id);
    }
    public function edit(Input $input)
    {
        return view('edit')->with(['input' => $input]);        
    }
    public function update(PostsRequest $request, Input $input)
    {
        $post = $request['diary'];
        $input->fill($post)->save();
        return redirect('/inputs/' . $input->id);
        
    }
        
    public function delete(Input $input)
    {
        $input->delete();
        return redirect('/');
    } 
    
}
