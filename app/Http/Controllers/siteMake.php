<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\students;
use App\Models\image;
use App\Models\cataghory;
use App\Models\ecom;
use App\Models\login;
use App\Models\funnel;
use App\Models\visitor;
use App\Models\learn;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
class siteMake extends Controller
{
   // function details($fname,$lname)
   // {
   // return "Fast name :".$fname."<br> Last name :".$lname;
   // }
   // function bio(Request $request){
      
      // return "This is ".$request->segment(1)." page<br>Welcome ".$request->segment(2). " You're ".$request->segment(3). " years old and live in ".$request->segment(4);
  
      // print_r($request->all());
      
   // }

   // function home(Request $request)
   // {
   // return $request->method();

   // }

   // function about()
   // {
   // 	return view('about');
   // }

   // function contact($phnnum,$fullname)
   // {
   // return view('contact',['phn'=>$phnnum,'fullname'=>$fullname]);
   // }
	
   // function phppc(){
   //    return view('phppc',['name'=>'php']);
   // }
   
   // function jspc(){
   //    return view('jspc',['name'=>'javascript']);
   // }
   
   // function javapc(){
   //    return view('javapc',['name'=>'java']);
   // }
   // function grpcon()
   // {
   //    return 'group controll worked';
   // }
   // function getdata(){
    
   //    $data=["name"=>"sohag sharif","email"=>"sohag@gmail.com"];    
   //  $inset= return $insert=DB::table('lara_tb')->insert($data);

   // $getData=DB::table('lara_tb')->get();
  
   // return view('name',['fetch'=>$getData]);

   // } 
      // function updateTable (){
      //    $datas=[
      //       ['name'=>'aaka','vote'=>99], 
      //       ['name'=>'baka','vote'=>99], 
      //       ['name'=>'caka','vote'=>99], 
      //       ['name'=>'daka','vote'=>99], 
      //    ];
      //    $count=count($datas);
      //    $datas['1']['name'];
       
      // for ($i=0; $i < $count; $i++) { 
      //    $idnum=$i+1;
      //  $name=$datas[$i]['name'].$idnum;
      // $vote=$datas[$i]['vote']+$idnum*3;
        

      //    $updateData=DB::table('lara_tb')->where('id',$idnum)->update(
      //          ['name'=>$name,'vote'=>$vote]

      //        );
      // }

         // $updateData=DB::table('lara_tb')->where('id','3')->update(
         //    ['name'=>'mustan2','vote'=>60]
         // );
         // if ($updateData == 1) {
         //    echo "Data update successfully";
         // } else {
         //   echo "data not update";
         // }
         
   //   }


      public function index()
      {
        $student_data=students::all();
        return view('student.index', ['student'=>$student_data]);
      }

      public function store(Request $request){
            $student = new students;
            $student->name=$request->name;
            $student->email=$request->email;
            if($request->hasfile('photo')){
               $file=$request->file('photo');
               $extension=$file->getClientOriginalExtension();
               $filename=time().'.'.$extension;
               $file->move('uploads/photo',$filename);   
               $student->image=$filename;            
            }
            $request->old('name');
            $request->old('email');
            
           $request->validate([
               'name' => 'required|min:3',
               'email' => 'required|email|unique:students,email',
              
            ]);

             $student->save();
            return redirect()->back()->with('status','Data added successfully.');
                  
             } 

         function data_update(Request $request,$id){
            $student=students::find($id);
            $student->name=$request->name;
            $student->email=$request->email;
            if($request->hasfile('photo')){
               $dir='uploads/photo/'.$student->image;
               if(File::exists($dir)){
                  File::delete($dir);
               }
               $file=$request->file('photo');
               $extension=$file->getClientOriginalExtension();
               $filename=time().'.'.$extension;
               $file->move('uploads/photo',$filename);   
               $student->image=$filename;            
            }
            $student->update();
            return redirect()->back()->with('status','Data update successfully.');

         }

         function data_delete(Request $request,$id){
            $student_delete=students::find($id);
            $dir='uploads/photo/'.$student_delete->image;
            if (FILE::exists($dir)) {
               FILE::delete($dir);
            }
            $student_delete->delete();
            return redirect()->back()->with('status','STUDENT DELETE SUCCESSFULLY');

         }
         // public function fetch($id){
         //    $studentf =students::find($id);
         //    // return $studentf->name;
         //    return view('name',['studentd'=>$studentf]);  
         // }
         // function student_update($id){
         //    $studentid=students::find($id);
         //    return view('student.student_update',['student_id'=>$studentid]);
         // }

         // //  function  __invoke(){
         // //    return 'hgello';
         // // }
         // function forelse(){
         //    $data=['bd','in','pk','uk','usa'];
         //    return view('about',['data1'=>$data]);
         // }

            function home(){
               return view('Rproject.home');
            }
            function contact(Request $req){
            //    return view('Rproject.contact');
            //   $come_name=$req->input('student_name');
            //   $come_email=$req->input('student_email');
            //   $come_details=$req->input('some_details');
            //   students::create([
            //    'name'=>$come_name,
            //    'name'=>$come_email,
            //    'name'=>$come_details

            //   ]);

            }
            function about(){
               return view('Rproject.about');
            }
            function insertdata(Request $req){

            //      $come_name=$req->input('student_name');
            //   $come_email=$req->input('student_email');
            //   $come_details=$req->input('some_details');
             
               //  $result=DB::insert('INSERT INTO `students`(`name`, `email`, `image`) VALUES (?,?,?)',[$come_name, $come_email,$come_details]);
                
               //  if($result==true){

               //          return "Succcess";
               //  }
               //  else{
               //          return "fail"; 
               //  }
               // students::create([
               //    'name'=>$come_name,
               //    'email'=>$come_email,
               //    'image'=>$come_details

               // ]);
               // $obj= new students;
               
               //    $obj->name=$req->input('student_name');
               //    $obj->email=$req->input('student_email');
               //    $obj->image=$req->input('some_details');  
               //    $obj->save();  
               // $id=$req->input('student_id');

               ///////update and delete //////////
               // $obj=students::find($id);
               // $obj->name=$req->input('student_name');
               // $obj->email=$req->input('student_email');
               // $obj->image=$req->input('some_details');  
               // $obj->update();  
               // $obj->delete();  
            //    $inputdata=$req->input('student_id');
            //    $obj=students::find($inputdata);
            //    return view('axio',['studentdata'=>$obj]);

             }

           
             function axiosdata(){
                $result= DB::table('students')->get();
                return view('axio',['axiosdata'=>$result]);
             }
            function axios_data_post(Request $req){
               $come_name=$req->input('student_name');
               $come_email=$req->input('student_email');
               $come_details=$req->input('some_details');

               students::create([
                     'name'=>$come_name,
                     'email'=>$come_email,
                     'image'=>$come_details
                     
   
                  ]);

            }


            function myfilepost(Request $req){
             $image_path=$req->file('filekey')->store('image2');
               image::insert([
                  'image_path'=>$image_path
               ]);
            }

            function filedown(){
               $down= Storage::download('image2/29h06YRl5mxH9qDc8WwTwjlTaqP5SqlpkXcaxNSz.png','short.png');
               return $down;
            }
            function getfile(){
            $result= DB::table('images')->get();          
            return $result;
            }

            function formtodwn($path){
               ///// download //////
            //    $fpath="image2/".$path;
            //   $vv=Storage::download($fpath);
            //   return $vv;
            ///////////////////////

            $dpath="image2/".$path;
             $dd=DB::table('images')->where('image_path',$dpath)->delete();
              
                 $cc=Storage::delete([$dpath]);    
                 return redirect()->back();
              
            }



            function postdata(Request $req){
               $name=$req->input('f_name');
               $email=$req->input('f_email');
               $image=$req->input('f_image');
               $inser=students::insert([
                  'name'=>$name,
                  'email'=>$email,
                  'image'=>$image
               ]);
               if($inser == true){
                  return 1;
               }
             }



            function home_data(){
               
               $result= DB::table('students')->get();
               
               return view('newpg.home');
            }
             function home_data_fetch(){
               
              return $result= DB::table('students')->get();
               
               
            }
            function condel(Request $request){
               $uid=$request->input('db');
               
              $dd= DB::table('students')->where('id',$uid)->delete();
              if($dd == true){
                 return 1;
              }

            }

            function conedit(Request $request){
               $id=$request->input('evid');
               $name=$request->input('evname');
               $edd= students::where('id',$id)->update([
                  'name'=>$name
               ]);
               if($edd == true){
                  return 1;
               }
            }

            function log_check(Request $req){
               $email=$req->input('email');
               $psw=$req->input('psw');

              $result= login::where('email',$email)->where('psw',$psw)->count();
              if($result==true){
                 $req->session()->put('user',$email);
                 return 1;
              }
            }
            function ahome(Request $req){
               $ses=$req->session()->has('user');
               if($ses == 1 ){
                  return view('login.home');
               }else{
                return redirect('login');
               }
               
            }
            function ff(Request $req){
              $req->session()->flush();
               $f=$req->session()->has('user');
               if($f == 0 ){
                  return redirect('login');
               }
            }

            ////////photo//////////
            function photoupload(Request $req){
               $up=$req->file('photo')->store('public');
               $ex=explode('/',$up)[1];
               $servername=$_SERVER["HTTP_HOST"];
               $finalimgpath=$servername.'/storage/'.$ex;
            $imgup=image::insert([
                  'image_path'=>$finalimgpath
                  ]);

               // $uu=58
                 $data= image::find(58);
                 
               if($imgup == true){
                  return $data->image_path;
               }
            }
        /////////////  ecom  user  ////////////////
        function ecomh(Request $req){  
          $ip=$req->ip();      
         $checkuser=visitor::where('ip',$ip)->increment('view');
         if($checkuser == false){
            visitor::insert([
               'ip'=>$ip,
               'view'=>1
            ]);
         }
         
           return view('ecom.ecomweb.index');

        }

        ///////////// admin ecom  ////////////////
        function adminecom(Request $req){
         $user=visitor::all();
         $views=DB::table('visitors')->sum('view');
         $funnel=DB::table('funnels')->get();

         return view('ecom.admin.index',['users'=>$user,'view'=>$views,'funnel'=>$funnel]);
        }
        function admincata(){
         return view('ecom.admin.cataghory');
        }
        function adminpd(){
           return view('ecom.admin.product');
        }
        function insert_cata(Request $req){
         $insert_cata=cataghory::insert([
            'cataghory'=>$req->input('cata_name')
         ]);
         if($insert_cata == true){
            return 1;
         }
        }
        function getcataghory(){
         $get_cata=cataghory::all();
        return $get_cata;
      }
      function cataeditc(Request $req){
         $id=$req->input('idp');
         $cataname=$req->input('cataeditp');
         
         // $cata_editv=cataghory::find($id)->update([
         //    'cataghory'=>$cataname
         // ]);
         $cata_editv=DB::table('cataghories')->where('id',$id)->update([
            'cataghory'=>$cataname
         ]);
         if($cata_editv == true){
           return 1;
         }
      }
      function deletecata(Request $req){
         $id=$req->input('deleteid');
         // $cataname=$req->input('cataeditp');
         
         $delete=cataghory::find($id)->delete();
          
         // $delete=DB::table('cataghories')->where('id',$id)->delete();
            
         if($delete == true){
           return 1;
         }
      }
      function cata_fetch(){
         $cata=cataghory::all();
         return $cata;
      }
      function addproduct(Request $req){
         $cata=$req->input('cataghory');
         $name=$req->input('pname');        
         $add_product_photo=$req->file('photo')->store('public');        
         $ex=explode('/',$add_product_photo)[1];        
         // $servername=$_SERVER["HTTP_HOST"];
         $finalimgpath='/storage/'.$ex;        
         $price=$req->input('pprice');
         $link=$req->input('plink');

        return $addproduct=ecom::insert([
            'cataghory'=>$cata, ///
            'name'=>$name,
            'price'=>$price,
            'imgpath'=>$finalimgpath,///           
            'link'=>$link
         ]);
        
      }
      function showproduct(){
          return ecom::all();
      }
      function editproduct(Request $req){
         $idnum=$req->input('idnum');
         $ecata=$req->input('edit_select_val');
         $ename=$req->input('edit_name_val');
         $eprice=$req->input('edit_price_val');        
          $eimg=$req->input('edit_img_val');
         $eimgfile=$req->file('edit_imgfile_val');  
         $elink=$req->input('edit_link_val');
         // $servername=$_SERVER["HTTP_HOST"];      
         if(filesize($eimgfile)){
            $semieimgfile=$req->file('edit_imgfile_val')->store('public');
            $semiex=explode('/',$semieimgfile)[1];
             $finalimg='/storage/'.$semiex; //////// 
             $getoldimg=ecom::find($idnum);            
             $expoldimg=explode('/',$getoldimg->imgpath)[2];
              $deldir='public/'.$expoldimg; 
              $vv=Storage::delete($deldir);    
         }else{
             $finalimg=$eimg;          
         }
         
        return DB::table('ecoms')->where('id',$idnum)->update([
            'cataghory'=>$ecata,
            'name'=>$ename,
            'price'=>$eprice,
            'imgpath'=>$finalimg,
            'link'=>$elink
         ]);
      }
      function productdel(Request $req){
         $delid=$req->input('delid');
         return ecom::find($delid)->delete();
      }
      ////// get cata in nav //////
     function getnavcata(){
      $cata=cataghory::all();
         return $cata;
     }
     ///////user site ////////
     function getproduct(){
        if(isset($_GET['p'])){
         $p=$_GET['p'];
           if($p == 'all'){
            // return  $cata=ecom::take(3)->get();
            return  $cata=ecom::all();
           }else{
           return  $cata=ecom::where('cataghory',$p)->get();
           }
          
        }else{
         // return $cata=ecom::take(3)->get();
         return  $cata=ecom::all();
        }
      // $cata=ecom::all();
      // return $cata;
     }
function funsend(Request $req){
   $validated=$req->validate([     
      'funem' => 'required|email|unique:funnels,email',    
   ]);
 
  if($validated){
   return funnel::insert([
      'email'=> $req->input('funem')
   ]);
  }else{
     return 0;
  }
   
  

}
   //   function moreimage(Request $req){
   //      $firstid=$req->id; //14 
   //      $lastid=$firstid+3; //14 +3 = 17   (14-16)=14,15,16
   //      return $cata=ecom::where('id','>=',$firstid)->where('id','<',$lastid)->get();
   //   }

   //   function getpic(){

   //          $getoldimg=ecom::find(27);
             
   //           $expoldimg=explode('/',$getoldimg->imgpath)[2];
   //            $deldir= 'public/'.$expoldimg;       
   //    // $vb=ecom::find(26)->get('imgpath');
   //    // $bb= explode('/', $vb)[1];
   //    // return json_encode($bb);
   //    $vv=Storage::delete($deldir); 
   //   if($vv){
   //      return 'ok';
   //   }else{
   //     return 'not';
   //   }
   //  }

   



///////////// EARN AND LEARN ////////////////

function somadan_home(){
   $cata_list=learn::where('active',1)->get();
   return view('earnandlearn.public.home',['cataghory'=>$cata_list]);
}
function content(Request $req,$content){
   // $cata_list=learn::all();
  $value=learn::where('main_content',$content)->where('active',1)->get();
  $cata_list=learn::where('active',1)->get();
if(!empty($value[0])){
   return view('earnandlearn.public.index',['val'=>$value,'cataghory'=>$cata_list]);
   
}
else{
   return redirect('somadan');
}
}


function wproot_home(){
   $cata_list=learn::all();
   return view('earnandlearn.admin.home',['cataghory'=>$cata_list]);
}

function wproot(Request $req){
  
  $main_key= $req->segment(4);
  $cata_list=learn::all();
  $value=learn::where('main_content',$main_key)->get();
 
   if($main_key && !empty($value[0])){
      return view('earnandlearn.admin.index',['val'=>$value,'cataghory'=>$cata_list]);
   }else{
      return redirect('somadan/a/wproot/');
   }
}

function updatedataf(Request $req){
    $id=$req->input('id');
    $main_content=$req->input('main');
      $header=$req->input('header');
   $sub_header=$req->input('sub_h');
   $content=$req->input('cnt');
    $active=$req->input('active');
   return  DB::table('learns')->where('id',$id)->update([

      'main_content'=>$main_content,
      'header'=>$header,
      'sub_header'=>$sub_header,
      'content'=>$content,
      'active'=>$active
   ]);

   

}

function datadeletef(Request $req){

    $id=$req->input('id');
    
   return  DB::table('learns')->where('id',$id)->update([

      'active'=>0
   ]);

}


}
