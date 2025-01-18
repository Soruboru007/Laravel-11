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
        //データベースからすべてのpostsを取得する
        $name = 'Laravel';
        $age = 34;
        return view('posts.index' ['username' => $name, 'age' => $age]);
    }

    /**
     * 新しいリソースを作成するフォームを表示する。
     */
    public function create()
    {
        //
    }

    /**
     * 新しく作成されたリソースを保存する。
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * 指定されたリソースを表示する。
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * 指定されたリソースを編集するフォームを表示する。
     */
    public function edit(Post $post)
    {
        //
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
