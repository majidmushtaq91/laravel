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

        return View::make('post.listing');
    }

    public function single($id,$slug) {

        return View::make('post.single')->with(array('id' => $id, 'slug' => $slug));
    }

    public function update($id) {

        dd($_POST);
    }

} 