<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PostTag;
use App\Models\Store;
use App\Models\Tag;
use Illuminate\Http\Request;

class StoreController extends Controller
{


    public function index1()
    {

        $store= Store::find(1);


        return view('home', compact('store'));
    }

    public function index()
    {
        $store = Store::all();
        return view('stores.index', compact('store'));
    }

    public function create()
    {

        $categories = Category::all();
        $tags = Tag::all();


        return view('stores.create', compact('categories', 'tags'));


    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|string',
            'likes' => 'required|integer',
            'category_id' => 'required|string',
            'tags'=>'array',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $post = Store::create($data);

        $post->tags()->attach($tags);

        return redirect()->route('stores.index');

    }

    public function show(Store $post)
    {
        return view('stores.show', compact('post'));
    }

    public function edit(Store $post)
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('stores.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Store $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'likes' => 'integer',
            'category_id'=>'string',
            'tags'=>'array'
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $post->update($data);
        $post->tags()->sync($tags);
        return redirect()->route('stores.show', $post->id);

    }
    public function destroy(Store $post){
    $post->delete();
    return redirect()->route('stores.index');

    }
}
