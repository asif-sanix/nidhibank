<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Member;
use Illuminate\Http\Request;

class Commoncontroller extends Controller
{
   
    public function getMemberList(Request $request){
      


     if ($request->ajax()) {
        $page = $request->page;
        $resultCount = 5;

        $offset = ($page - 1) * $resultCount;

        $members = Member::where('name', 'LIKE', '%' . $request->term. '%')
                                ->orderBy('name')
                                ->skip($offset)
                                ->take($resultCount)
                                ->selectRaw('id, name as text')
                                ->get();

        $count = Count(Member::where('name', 'LIKE', '%' . $request->term. '%')
                                ->orderBy('name')
                                ->selectRaw('id, name as text')
                                ->get());

        $endCount = $offset + $resultCount;
        $morePages = $count > $endCount;

        $results = array(
              "results" => $members,
              "pagination" => array(
                  "more" => $morePages
              )
          );

        return response()->json($results);
    }
    return response()->json('oops');



    }

}
