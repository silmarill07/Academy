<?php

namespace It20Academy\App\Models;

class Post
{
    private $title;
    private $content;
    private $author;
    private $status;
    private $category;
    private $img;

    public static function all(): array
    {
        $db = require_once '../storage/db.php';
        dump($db);
        $posts = isset($db['posts']) ? $db['posts'] : [];

        return array_map(function ($initialPost) {
            $post = new self;
            $post -> setTitle($initialPost['title']);
            $post -> setContent($initialPost['content']);
            $post -> setAuthor($initialPost['author']);
            $post -> setStatus($initialPost['status']);
            $post -> setCategory($initialPost['category']);
            $post -> setImg($initialPost['img']);

            return $post;


        }, $posts);
    }


    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    public function setImg(string $img): void
    {
        $this->img = $img;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    // public function setContent(): string
    // {
    //     return $this->content;
    // }

    // public function setAuthor(): string
    // {
    //     return $this->author;
    // }

    // public function setStatus(): string
    // {
    //     return $this->status;
    // }

    // public function setCategory(): string
    // {
    //     return $this->category;
    // }

    // public function setImg(): string
    // {
    //     return $this->img;
    // }
}