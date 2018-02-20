<?php

// /posts/index
// /posts
// /(controller)/(action)/(options)

namespace App\Controller;

class PostsController extends AppController
{
    public function index()
    {
        $posts = $this->Posts->find('all');
        // $this->set('posts', $posts);
        $this->set(compact('posts'));
    }
}