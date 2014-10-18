<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 10/19/14
 * Time: 3:07 AM
 */

class ContactController extends BaseController {

    public function showContact() {
        $contact = New StdClass;
        $contact->phone = '09009294831';
        $contact->email = 'samt3ch@gmail.com';
        return View::make('contact')->with('contact', $contact);
    }
} 