<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }



class Post{
    private static $blog_posts = [
        [
            "title" => "Judul I",
            "slug" => "judul-i",
            "author" => "eko",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores ex, atque quas, dignissimos iusto saepe odit nisi est amet deleniti sapiente ullam quo nesciunt maxime, cupiditate officiis distinctio! Assumenda ad quisquam quaerat? Minima ex fuga consectetur rem repudiandae, optio voluptatem praesentium maiores vitae adipisci provident quo id excepturi, voluptatum quod?"
        ],
        [
            "title" => "Judul II",
            "slug" => "judul-ii",
            "author" => "dagus",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente blanditiis, neque qui vero velit temporibus hic consequatur cumque saepe officia sunt natus sint nisi nobis, fugiat tempore possimus quod atque? Ducimus sapiente incidunt obcaecati laborum quos nesciunt debitis ullam repellendus molestiae repellat tempora dicta fugit eum nemo dolorum in libero labore minus deleniti earum vel, possimus perferendis molestias impedit? Provident laborum maiores, animi maxime molestias ipsum consequatur tempore dolorem nulla at labore non possimus hic eius laudantium necessitatibus aspernatur repellat debitis nihil quidem? Ratione facilis adipisci quae blanditiis soluta. Consequatur, incidunt id! Officiis beatae qui provident illo assumenda. Ea, quibusdam."
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();    
        return $posts->firstWhere('slug', $slug);
    }
}
