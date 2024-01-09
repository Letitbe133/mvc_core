<?php

class AppController
{
    public static function index()
    {
        include VIEWS.'app/index.php';
    }

    public static function contact()
    {
        include VIEWS.'app/contact.php';
    }
}
