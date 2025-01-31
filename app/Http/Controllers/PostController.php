<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * リソースの一覧を表示する。
     * ＼＼
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * 新しいリソースを作成するフォームを表示する。
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * 新しく作成されたリソースを保存する。
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required', 'min:5', 'max:255',
            'content' => 'required', 'min:10',
        ]);
        Post::create($validated);

        return to_route(('posts.index'));
    }

    /**
     * 指定されたリソースを表示する。
     */
    public function show(Post $post)
    {
        // $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $post]);
    }

    /**
     * 指定されたリソースを編集するフォームを表示する。
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * 指定されたリソースを更新する。
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * 指定されたリソースを削除する。
     */
    public function destroy(Post $post)
    {
        //
    }
}
