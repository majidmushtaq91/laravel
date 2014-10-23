<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 10/19/14
 * Time: 2:56 AM
 */

class PostController extends BaseController
{

    public function listing() {
        $posts = Post::all();
        //$posts = Post::where('title', 'LIKE', '%abc%')->get();
        //$posts = Post::where('title', 'LIKE', '%ab%')->take(1)->skip(1)->get();

        return View::make('post.listing', compact('posts'));
    }

    public function single($id) {
        $post = Post::find($id);
        return View::make('post.single')->with('post', $post);
    }

    public function insert(){
        //$post = new Post;
        //$post->title = 'A new title';
        //$post->content = '"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam';
        //$post->save();

        $data = array(
            'title' => 'A new title with array',
            'content' => 'A simple content for this post which is inserted by mass assignment !',
            'status' => 1,
        );

        Post::create($data);
        dd('Post inserted');
    }
    public function update($id) {

        $post = Post::find($id);
        $post->title = $_GET['title'];
        $post->save();

        dd('post updated : ' .  $post->title);
    }

    public function destroy($id) {
        $post = Post::find($id);
        $post->delete();
        dd('post has been removed !');
    }

}