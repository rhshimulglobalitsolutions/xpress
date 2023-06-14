<?php

namespace App\Libs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class Common
{
    static public function execsearch( $argwhere )
    {
	    $listresults = array();
        //eloquentの処理
        $data = [
                    'title' =>$argwhere['title'],
                    'description' => $argwhere['description']
        ];
        //$listresults =$this->performSearch($data);
	    return $listresults;
    }
    
    private function performSearch($data)
    {
        $results =[];
    }

    static public function checkcomp( $argid )
    {
        $id = $argid;
        $htret = DB::table('tasks')->where('id', $id)->first();

        //print_r( $htret );
        //print $id."aaaaa" ;
        
        $flg_comp = $htret->flg_comp;
        return $flg_comp;
    }
    
}