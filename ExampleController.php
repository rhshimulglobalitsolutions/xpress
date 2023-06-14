<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Libs\Common;

class ExampleController extends Controller
{
    public function apisearch( request $request )
    {
        // リクエストMethod.POSTのデータを全て配列へ格納
        $lstpost = $request->query();

        // POSTデータを基に検索実行 -> 結果は配列へ格納
	$lstresult = array();
        //$lstresult = Common::execsearch( $lstpost );
	
        // 配列をJSON変換
        $strret = "";
        $strret = json_encode( $lstresult, $lstresult );

        // JSONを返却
        return $strret;
    }
    public function apiinsert( request $request )
    {
	$intret = 0;
        // リクエストMethod.POSTのデータを全て配列へ格納
        $lstpost = $request->query();

        // POSTデータを基にInsert実行 -> 結果は変数へ格納
        //$intret = Common::execinsert( $lstpost );
        $lstresult[ "ret" ] = $intret;

        // 配列をJSON変換
        $strret = json_encode( $lstresult, $lstresult );

        // JSONを返却
        return $strret;
    }

    public function apiupdate( request $request )
    {
        // リクエストMethod.POSTのデータを全て配列へ格納
        $lstpost = $request->query();

        // POSTデータを基にUpdate実行 -> 結果は変数へ格納
        $intret = Common::execupdate( $lstpost );
        $lstresult[ "ret" ] = $intret;

        // 配列をJSON変換
        $strret = json_encode( $lstresult, $lstresult );

        // JSONを返却
        return $strret;
    }

    public function apidelete( request $request )
    {

	$intret = 0;
        // リクエストMethod.POSTのデータを全て配列へ格納
        $lstpost = $request->query();

        // POSTデータを基にInsert実行 -> 結果は変数へ格納
        $intret = Common::execdelete( $lstpost );
        $lstresult[ "ret" ] = $intret;

        // 配列をJSON変換
        $strret = json_encode( $lstresult, $lstresult );

        // JSONを返却
        return $strret;
    }
}
