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
        $posts = New Stdclass();


            $posts->title  = 'title ';
            $posts->author  = 'author ';
            $posts->description = 'Description ';



        return View::make('post.listing')->with('posts', $posts);
    }

    public function single($id,$slug) {

        return View::make('post.single')->with(array('id' => $id, 'slug' => $slug));
    }

    public function update($id) {

        dd($_POST);
    }

} 