<?php

class PagesController
{
    public function home()
    {
        return view('/');
    }

    public function about()
    {
        return view('/about');
    }

    public function blog()
    {
        return view('/blog');
    }

    public function contact()
    {
        return view('/contact');
    }
}