<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * リソースの一覧を表示する。
     */
    public function index()
    {
        // データベースからすべてのpostsを取得する
        $name = 'Bishwas';
        $age = 21;
        $posts = [
            'post1',
            'post2',
            'post3',
            'post4',
        ];

        return view('posts.index', ['username' => $name, 'age' => $age, 'posts' => $posts]);
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
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect()->route(('posts.index'));
    }

    /**
     * 指定されたリソースを表示する。
     */
    public function show(Post $post)
    {
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
