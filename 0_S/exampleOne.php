<?php

namespace S;

//Неверная реализация

// class PostController {
//     private $posts      = [];
//     private $postSerive = null;

//     public function __construct(PostService $postSerive)
//     {
//         $this->postSerive = $postSerive;
//     }

//     public function createPost(array $postData)
//     {

//     }

//     public function editPost(array $postData)
//     {

//     }

//     public function validatePost(array $postData)
//     {

//     }

//     public function addPost()
//     {

//     }

//     public function findPost($id)
//     {

//     }

//     public function deletePost($id)
//     {

//     }

//     public function render() {

//     }
// }

//Верная реализация

class Post {
    private $postSerive = null;

    public function __construct(PostService $postSerive)
    {
        $this->postSerive = $postSerive;
    }

    public function createPost(array $postData)
    {

    }

    public function editPost(array $postData)
    {

    }
}

class PostService {
    public static function validatePost(array $postData)
    {

    }
}

class Posts {
    private $posts = [];
    
    public function addPost()
    {

    }

    public function findPost($id)
    {

    }

    public function deletePost($id)
    {

    }

    protected function getPosts() {
        
    }
}

class PostsHTMLTemplate extends Posts {
    public function render() {

    }
}