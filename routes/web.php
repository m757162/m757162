<?php
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siteMake;
use App\Http\Controllers\admin;
use App\Http\Middleware\newmiddkeware;
use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Cookie;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */


// Route::prefix('admin')->group(function () {
//    Route::get('/admin1',function (){
//  return"admin 1 page";
// });
// Route::get('/admin2',function (){
//  return"admin 2 page";
// });
// Route::get('/admin3',function (){
//  return"admin 3 page";
// });
// });
// Route::get('/', [siteMake::class,'home']);
// Route::get('/about',function (){
//  return view('name');
// })->name('nppty');

// Route::get('/about',function (){
//  return"Mahamudul hasan";
// });

// Route::get('/about',function (){
//  return"Mahamudul hasan";
// });
// Route::get('/contact',function (){
// 	return "rajnogor,khulna";
// });
// Route::get('/home',function(){
// 	return view('homelv');
// });
// Route::get('/{fullname}', 'App\Http\Controllers\siteMake@bio');

// Route::get('/home/{st}/{nd}/{rd}', 'App\Http\Controllers\siteMake@bio');

// Route::get('/about','App\Http\Controllers\siteMake@about');
// Route::get('/contact/{phnnum}/{fullname}','App\Http\Controllers\siteMake@contact');
// Route::prefix('admin')->group(function(){
// 	Route::get('/', function(){
// 		return "Home page";
// 	});
// 	Route::get('/about', function(){
// 		return "about page";
// 	});
// 	Route::get('/contact', function(){
// 		return "contact page";
// 	});
// });
// Route::get('/',function(){
// 	return view('homelv');
// });
// Route::get('/home',function(){
// 	return 'namefunc_worked';
// })->name('fn');
// Route::get('/option/{op?}',function(){
//  return 'option parameter';
// });
// Route::get('/option/{op}',function($op){
// 	return $op;
// //    })->wherealpha('op');
// Route::get('/first/second/thard',function(Request $request){ 
//    return "Welcome ".$request->segment(2). " You're ".$request->segment(2). " years old <br>"; 
// });
// Route::post('/vv', function (Request $request) {
//       return view('about');
//  });
// Route::get('1st', function(){
//  return "This is first page";
// });

// Route::get('2nd', function(){
//     return "This is lasthuy page";
//    });
// //   Route::Redirect('2nd','1st');
// Route::get('/', function(){
//     return view('index');
// });
// Route::get('home', function () {
//     return view('home');
// });

// Route::get('phppc', function () {
//     return view('phppc');
// });

// Route::get('jspc', function () {
//     return view('jspc');
// });

// Route::get('javapc', function () {
//     return view('javapc');
// });

// Route::get('phppc',[siteMake::class,'phppc']);
// Route::get('jspc',[siteMake::class,'jspc']);
// Route::get('javapc',[siteMake::class,'javapc']);

// Route::get('/project',function(){
//  return view('project/index');
// });

// Route::get('/',function(request $request){
//    $ck=$request->method();
//   if($ck){
//       return "it is ".$ck ." method";
//   }else{
//       echo "not process";
//   }
// });
// Route::post('/testt',function(request $request){
//     $ck=$request->method();
//    if($ck){
//        return "it is ".$ck ." method";
//    }else{
//        echo "not process";
//    }
//  });

// Route::get('/', function () {
//     return view('javapc');
// });
// Route::get('users/{id}', function (request $rq) {
//       $tt=$rq->is('users/bb');
//       if ($tt) {
//          return 'is func worked';
//       }else{
//           return "not workid";
//       }
// });

// Route::get('/',function(){
//     return view('homelv');
// });
// Route::post('laravel/1stpg/test',function(Request $rq){
//     return  $jsn= $rq->only('email','name');    
// });
// Route::get('/test',function(){
//     return 'middleware worked';
// })->middleware('age');
// Route::get('/test',function(){
//     return 'middleware worked';
// })->middleware('age');
// Route::middleware('age')->group(function () {
    
// Route::get('/test',function(){
//     return view('name');
// });

// Route::get('/test2',function(){
//     return 'middleware worked';
// });
// });

// Route::name('laravel.')->group(function (){
//     Route::get('smh',function (){
//         return view('homelv');
//     })->name('smh');
// });

// Route::name('admin.')->prefix('adminp')->group(function () {
//     Route::get('/users', function () {
//         Return 'hello';
//     })->name('users');
    
//     Route::get('/users2', function () {
//         Return 'hello2';
//     })->name('users2');
// });

//////////databases//////////
 // Route::get('user/{user}', function(User $user){
 //     return $user->email;
// });

// Route::get('/nn/{id}', function () {
//     return view('name');
// })->name('bb');


// Route::get('/getdata',function (){
//     return DB::table('lara_tb')->get();
// });

// Route::get('insertdata', function(){
//     $data=["name"=>"rubel sharif","email"=>"rubel@gmail.com"];

   
//     $insert=DB::table('lara_tb')->insert($data);
//     if($insert == '1'){
//         return 'data indert successfully';
//     }else{
//         return 'data insert not succesfully';
//     }
// });
// Route::get('/', [siteMake::class,'getdata']);
// Route::get('users/{id}', function () {
//   return  DB::table('lara_tb')->insert(['name'=>'Mahamudul hasan','email'=>'samh@gmail.com']);
// });

///////////    get and dd        ////////////
// Route::get('/',function (){
//       $st=DB::table('lara_tb')->get();    
//       dd($st);
// });

///////////    where        ////////////
// Route::get('/',function (){
//      return $st=DB::table('lara_tb')->where('name','Rana sharif')->get();        
// });

///////////    first data        ////////////
// Route::get('/',function (){
//      return $st=DB::table('lara_tb')->where('name','Mahamudul hasan')->first();        
// });

///////////    find(id)        ////////////
// Route::get('/',function (){
//      return $st=DB::table('lara_tb')->find('1');        
// });


///////////    value        ////////////
// Route::get('/',function (){
//     return  $st=DB::table('lara_tb')->value('email');
           
// });

///////////    pluck        ////////////
// Route::get('/',function (){
//     return  $st=DB::table('lara_tb')->pluck('email');
           
// });

///////////    count       ////////////
// Route::get('/',function (){
//     return  $st=DB::table('lara_tb')->count('id');
           
// });

///////////    max and min        ////////////
// Route::get('/',function (){
//     return  $st=DB::table('lara_tb')->min('vote');
           
// });

///////////    avg       ////////////
// Route::get('/',function (){
//     return  $st=DB::table('lara_tb')->avg('vote');
           
// });

///////////    sum        ////////////
// Route::get('/',function (){
//     return  $st=DB::table('lara_tb')->sum('vote');
           
// });

///////////    exists and doesntexists       ////////////
// Route::get('/',function (){
//     return  $st=DB::table('lara_tb')->where('id','44')->exists();
//     return  $st=DB::table('lara_tb')->where('id','44')->Doesntexist();
           
// });

// Route::get('/', function () {
    // return DB::table('lara_tb')->where('id',12)->update(
    //     ['vote'=>14,'name'=>'crednasmhe','email'=>'renasme@gmail.com'],
    // );
// });

// Route::get('/', [siteMake::class,'updateTable']);
// Route::get('/',function (){
//     return  $st=DB::table('lara_tb')->where('id','10')->delete();
// });
   

     ///////////student project/////////////
// Route::get('', function () {
//    return view('student.index');
// });
// Route::get('/student',[siteMake::class,'index']);
// Route::get('/student_add', function () {
//    return view('student.student_add');
// });

// Route::post('/store',[siteMake::class,'store']);
// Route::get('/student_update/{id}',[siteMake::class,'student_update']);
// Route::put('/data_update/{id}',[siteMake::class,'data_update']);
// Route::get('/data_delete/{id}',[siteMake::class,'data_delete']);
////////////////////end///////////////////

// Route::fallback(function(){
// return view('welcome');
// });

// Route::get('/adminpanel',[admin::class,'index']);
// Route::get('/datainsert',function(){
//     return view('admin.data_insert');
// });
// Route::post('/datastore',[admin::class,'store']);

// Route::put('/dataupdateput/{id}',[admin::class,'update']);
// // Route::prefix('user')->group(function(){

//     Route::get('/dataupdate/{id}',[admin::class,'edit']);
//     Route::get('/datadelete/{id}',[admin::class,'destroy']);
// });
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
///////////////// single method controller  //////////
// Route::get('onmethod',siteMake::class);
// Route::get('forelse',[siteMake::class,'forelse']);
Route::get('/',[siteMake::class,'home']);
Route::post('/contact',[siteMake::class,'contact']);
Route::get('/contact',function(){
    return view('Rproject.contact');
});


// Route::post('/daata',function(){
//     return view('axio');
// });
// Route::post('/axios',[siteMake::class,'insertdata']);


 /////////////////axios fetch  post ///////////////
    // Route::post('/axios',[siteMake::class,'axios_data_post']);

 /////////////////axios fetch end ///////////////


 /////////////////axios fetch data ///////////////
// Route::get('/axiosdata',[siteMake::class,'axiosdata']);
 /////////////////axios fetch data  end///////////////


// Route::get('/about',[siteMake::class,'about']);

// Route::get('/boots',function (){
//  return view('bootsprac');
// }); 

// Route::get('/myfile',function (){
//  return view('uploadfileR.uploadfile');
// });

// Route::post('/myfilepost',[siteMake::class,'myfilepost']);

// Route::get('/filedown',[siteMake::class,'filedown']);
// Route::get('/getfile',[siteMake::class,'getfile']);

// Route::get('/download/image2/{path}',[siteMake::class,'formtodwn']);

///////////////////session ////////////////////
// Route::get('/1st', function (Request $request){
//      $request->session()->put('key','success');
// });
// Route::get('/2nd', function (Request $request){
//     return  $request->session()->get('key');
// });
// Route::get('/3rd', function (Request $request){
//      $request->session()->forget('key');
// });

// Route::get('/1st', function (Request $request){
//      Cookie::queue('key','cookie');   
// });
// Route::get('/2nd', function (Request $request){
//     return  Cookie::get('key'); 
   
// });
// Route::get('/3rd', function (Request $request){
//     Cookie::queue(Cookie::forget('key'));
// });


Route::get('/index',function (){
     return view('newpg.layouts.app');
});
Route::post('/postdata',[siteMake::class,'postdata']);

Route::get('/home',[siteMake::class,'home_data']);
Route::get('/home_data',[siteMake::class,'home_data_fetch']);
Route::post('/condel',[siteMake::class,'condel']);
Route::post('/conedit',[siteMake::class,'conedit']);

Route::post('/log_check',[siteMake::class,'log_check']);
Route::get('/ahome',[siteMake::class,'ahome']);
Route::get('/ff',[siteMake::class,'ff']);


Route::get('/login',function (){
    return view('login.login');
});

/////////photo////////////////////

Route::get('/photo',function (){
    return view('newpg.photo');
});

Route::post('/photoupload',[siteMake::class,'photoupload']);


///////////////////ecom////////////////
Route::get('/ecom',[siteMake::class,'ecomh']);

 

 
//////////////////ecom admin ////////////

Route::get('/adminecom',[siteMake::class,'adminecom']);
Route::get('/admincata',[siteMake::class,'admincata']);
Route::get('/adminpd',[siteMake::class,'adminpd']);
Route::get('/cata_fetch',[siteMake::class,'cata_fetch']);
Route::get('/getcataghory',[siteMake::class,'getcataghory']);
Route::get('/showproduct',[siteMake::class,'showproduct']);
Route::get('/getnavcata',[siteMake::class,'getnavcata']);
Route::get('/getproduct',[siteMake::class,'getproduct']);
Route::get('/moreimage/{id}',[siteMake::class,'moreimage']);
Route::post('/insert_cata',[siteMake::class,'insert_cata']);
Route::post('/editcataghory',[siteMake::class,'cataeditc']);
Route::post('/deletecata',[siteMake::class,'deletecata']);
Route::post('/addproduct',[siteMake::class,'addproduct']);
Route::post('/editproduct',[siteMake::class,'editproduct']);
Route::post('/productdel',[siteMake::class,'productdel']);
Route::post('/funsend',[siteMake::class,'funsend']);



// Route::get('/pic',[siteMake::class,'getpic']);


//////////////// EARN AND LEARN //////////////
////////////public/////
Route::get('/somadan',[siteMake::class,'somadan_home']);
Route::get('/somadan/{content}',[siteMake::class,'content']);

////////////admin///////
Route::get('/somadan/a/wproot/',[siteMake::class,'wproot_home']);   ////catch cataghory
Route::get('/somadan/a/wproot/{main_content?}',[siteMake::class,'wproot']); ////catch value
Route::post('/dataupdatef',[siteMake::class, 'updatedataf']); //update data from admin
Route::post('/datadeletef',[siteMake::class, 'datadeletef']); //update data from admin


