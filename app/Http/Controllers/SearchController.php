<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libs\Common;


class SearchController extends Controller
{
    public function search(Request $request)
    {
        $postlist = $request->query();
        $postresults = array();

        $results = "";
        $results = json_encode(['results'=>$results]);
        return $results;
      
    }


}