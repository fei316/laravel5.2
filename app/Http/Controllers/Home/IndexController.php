<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Model\Goods;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Facades\RiakClass;
class IndexController extends Controller
{
    public function index(Request $request){
//        $pdo = DB::connection()->getPdo();
//        dd($pdo);
//        $goods = DB::table('ecs_goods')->where('cat_id',4)->get();
//        dd($goods);

        /*
        $goods = Goods::where('cat_id',4)->get();
        dd($goods);
    	return view('welcome');
        */

        //$test1 = App::make('App\Contracts\LanguageContract');
        //var_dump($test1->speaking());

        $request->session()->put('key', 'value');

        var_dump(RiakClass::speaking());
    }

    public function show(Request $request){
        return response()->json(['name'=>'dengfei']);
    }
}
