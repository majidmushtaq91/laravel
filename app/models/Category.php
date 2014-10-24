<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 10/25/14
 * Time: 3:05 AM
 */

class Category extends Eloquent {


    public function users(){
        return $this->belongsToMany('User');
    }

} 