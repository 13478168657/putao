<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/','Home\HomeController@index');
//Route::get('index{id}.html','Home\HomeController@lists');
//Route::get('thread-{id}.html','Home\HomeController@detail');

//Route::get('consult','Consult\ConsultController@index');
//Route::get('instruction','Instruction\InstructionController@index');
//Route::get('notice','Notice\NoticeController@index');
//Route::get('payment','Payment\PaymentController@index');
//Route::get('about','About\AboutController@index');
Route::group(['domain' => '{account}.mlpt.cn'], function () {
//    dd($_SERVER['REQUEST_URI']);
    Route::get('/', function ($account) {
//        dd($account);
        $home = new App\Http\Controllers\Home\HomeController();
        if($account == 'm'){
            return $home->hindex();
//            return view('h5.home.index');
        }else{
            return $home->index();
        }
    });
    Route::get('g-{id}.html',function ($account,$id) {

        $home = new App\Http\Controllers\Home\HomeController();
        if($account == 'm'){
            return $home->hGoodsDetail($id);
//            return view('h5.home.index');
        }else{
            return $home->goodsDetail($id);
        }
    });
//    dd(3);
    Route::get('/index{id}.html', function ($account,$id) {
//        dd($account);
//        dd(1);
        $home = new App\Http\Controllers\Home\HomeController();
        if($account == 'm'){
            return $home->hlist($id);
//            return view('h5.home.index');
        }else{
            return $home->lists($id);
        }
    });
    Route::get('/thread-{id}.html', function ($account,$id) {
        $home = new App\Http\Controllers\Home\HomeController();
        if($account == 'm'){
            return $home->hdetail($id);
//            return view('h5.home.index');
        }else{
            return $home->detail($id);
        }
    });
    Route::get('/consult', function ($account) {
        $consult = new App\Http\Controllers\Consult\ConsultController();
        if($account == 'm'){
            return $consult->hindex();
//            return view('h5.home.index');
        }else{
            return $consult->index();
        }
    });
    Route::get('/instruction', function ($account) {
        $inst = new App\Http\Controllers\Instruction\InstructionController();
        if($account == 'm'){
            return $inst->hindex();
//            return view('h5.home.index');
        }else{
            return $inst->index();
        }
    });
    Route::get('/notice', function ($account) {
        $notice = new App\Http\Controllers\Notice\NoticeController();
        if($account == 'm'){
            return $notice->hindex();
//            return view('h5.home.index');
        }else{
            return $notice->index();
        }
    });
    Route::get('/payment', function ($account) {
        $pay = new App\Http\Controllers\Payment\PaymentController();
        if($account == 'm'){
            return $pay->hindex();
//            return view('h5.home.index');
        }else{
            return $pay->index();
        }
    });
    Route::get('/about', function ($account) {
        $about = new App\Http\Controllers\About\AboutController();
        if($account == 'm'){
            return $about->hindex();
//            return view('h5.home.index');
        }else{
            return $about->index();
        }
    });
//    Route::get('consult','Consult\ConsultController@index');
//    Route::get('instruction','Instruction\InstructionController@index');
//    Route::get('notice','Notice\NoticeController@index');
//    Route::get('payment','Payment\PaymentController@index');
//    Route::get('about','About\AboutController@index');
});
