<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 10/19/14
 * Time: 2:56 AM
 */

class PostController extends BaseController{

    public function show() {
        $post = new StdClass();
        $post->title = 'My Post title';
        $post->content = 'This will just check a few PHP settings and then download composer.phar to your working directory. This file is the Composer binary. It is a PHAR (PHP archive), which is an archive format for PHP which can be run on the command line, amongst other things.';
        $post->author = 'Majid Khan';
        $post->date = '20-8-2014';
        $post->category = 'General';
        return View::make('post.show')->with('post', $post);
    }

} 