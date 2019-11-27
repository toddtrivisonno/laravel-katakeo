<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categories;
use App\Challenges;
use App\Content;

class ContentController extends Controller
{
    //
    public function getFullContent()
    {
        $categories = Categories::all();
        $fullContent = [];
        foreach ($categories as $category) {
            $unique_chal = Challenges::where('category_id', $category->id)->get();
            // array_push($challenges,$unique_chal);
            foreach ($unique_chal as $chall) {
                $content = Content::where('challenge_id', $chall->id)->get();
                $chall['content'] = $content[0];
            }
            $fullContent[$category->category_type] = $unique_chal;
        }
        $response = [

            'fullContent' => $fullContent,

        ];


        return response($response, 200);
    }
}
