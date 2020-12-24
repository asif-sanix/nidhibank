<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Agent;
use App\Model\Member;
use App\Model\SavingAccountScheme;
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






    public function getAgentList(Request $request){
      


     if ($request->ajax()) {
        $page = $request->page;
        $resultCount = 5;

        $offset = ($page - 1) * $resultCount;

        $members = Agent::where('name', 'LIKE', '%' . $request->term. '%')
                                ->orderBy('name')
                                ->skip($offset)
                                ->take($resultCount)
                                ->selectRaw('id, name as text')
                                ->get();

        $count = Count(Agent::where('name', 'LIKE', '%' . $request->term. '%')
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




    public function getMemberSingle(Request $request, $id)
    {
      $member = Member::where('id', $id)->select('id','name','address_1','state','district','email','mobile_no')->first();
      
      if($member->id != '' || $member->id != null){
        return response()->json(['message'=>'Recoud Fount','data'=>$member,'error'=>false]);
      }
      
      return response()->json(['message'=>'Recoud Not Fount','data'=>'','error'=>true]);
    }


    public function schemeDetails(Request $request, $id)
    {
      $scheme = SavingAccountScheme::where('id', $id)->select('id','name','interest_payout','interest_rate','minimum_balance')->first();
      
      if($scheme->id != '' || $scheme->id != null){
        return response()->json(['message'=>'Recoud Fount','data'=>$scheme,'error'=>false]);
      }
      
      return response()->json(['message'=>'Recoud Not Fount','data'=>'','error'=>true]);
    }

}
