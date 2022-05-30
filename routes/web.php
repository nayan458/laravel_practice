<?php

use Illuminate\Support\Facades\Route as app;


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

app::get('/', function () {
    return view('welcome');
});

app::get('/helo', function () {
    echo"Hello world";
}); 

app::get('/test/{name}/{id?}',function($name,$id=NULL){
   $data = compact('name','id');
   return view('test')->with($data);
   
    // $data = compact('name','id');
    // return view('test')->with($data);
});

app::get('/demo',function(){
    return view('demo');
});

// *****************************************************************************************************

// Controllers

        //basic controler

                use App\Http\Controllers\basic_demo as bdc;

            app::get('/basicContollerDemo',[bdc::class,'greet']);

            
            /* demo of previous function */
            // democontroller::func
            // democontroller@func
    
        //single action controller
        
                use App\Http\Controllers\snglactnctrl;

            app::get('/snglctrl', snglactnctrl::class);

        //Resource Controller

                use App\Http\Controllers\studentController;
            app::resource('photo',studentController::class);

// ***********************************************************************************************

                use App\Http\Controllers\loginController;
            app::get('/form',[loginController::class, 'loginn']);
            app::post('/form',[loginController::class, 'register']);
            app::get('/vform',[loginController::class, 'validform']);

// ******************