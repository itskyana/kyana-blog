<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post
{
    private static $blog_posts = [
            [
                "title" => "Judul Tulisan Pertama",
                "slug" => "judul_tulisan_pertama",
                "author" => "Sandhika Galih",
                "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa repudiandae, delectus impedit veritatis, facilis aperiam ipsam deleniti doloremque quam sequi velit ipsum quae accusantium repellendus porro aut est cumque adipisci."
            ],
            [
                "title" => "Judul Tulisan Kedua",
                "slug" => "judul_tulisan_kedua",
                "author" => "Kyana",
                "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa repudiandae, delectus impedit veritatis, facilis aperiam ipsam deleniti doloremque quam sequi velit ipsum quae accusantium repellendus porro aut est cumque adipisci. Adolor sit amet consectetur adipisicing elit. Culpa repudiandae, delectus impedit veritatis, facilis aperiam ipsam deleniti doloremque quam sequi velit ipsum quae accusantium repellendus porro aut est cumque adipisci."
            ]
        ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
