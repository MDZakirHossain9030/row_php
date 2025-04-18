<?php

// * error handling
//todo:  die() = এই method এর মাধ্যমে error বাহির করা খুব সহজ

/*
1>> error handling
2>> File Handling
3>> csv file 
4>> .htaccess এর কাজ = blog & about এই দুইটা pege এর কাজ htaccess এর মাধ্যমে করেছি 
5>> configaretion নিচের Hard icon ডানে ক্লিক -> open configaretion file এ ক্লিক-> bin & others file check<br>
*/



// ?error handling এর গল্প
// error_reporting, trigger, ini_ser_die_set_error_handling=
//  error reporting (ভুল)দেওয়ার কারনে trigger প্রেস করে ini(যেকোনোটাকে) die(মেরে) ফেলতে পারি, য়াবার নতুন ভাবে set_error_handler করতেও পারি




// todo:  Error Handling  এর কাজ;
/*
1>> error_reporting() = error show করবে না
2>> trigger_error() = মানে ইচ্ছে মত error er নামে দেওয়া যাবে  
3>> set_error_handler = error report দিলেও যেন দেখা যায় কি ধরনের error হয়ছে 

*/







//todo: error reporting 1
// todo: error reporting মানে যে ধরনের error দেখতে চাচ্ছি তাদের নাম বলে দিলেই report করে দিবে;


error_reporting(error_level: E_ALL && E_WARNING);
/*
error_reporting কে বলে দিলাম তুমি সব ধরনের error দেখাও কিন্তু error_ WARNING টা আমাকে দেখাইওনা. যে error টা দেখতে চাইনা সেটার নাম বলে দিতে হবে 
echo $s; =ইচ্ছে করে ভুল করেছি যাতে warning টা না দেখায় 
*/








/*
// todo: trigger_error মনে error এর নাম আমরা লিখে দিতে পারব*</h3>";

trigger_error(error_level: E_USER_ERROR, message:' There is a error' );
(There is a error দেখাবে)

echo $x;//ইচ্ছে করে ভুল করেছি $x নামে কোনো variable নাই 

*/


/*

//**ini_set(option:"display_errors", value:0);
//display_error দিলে সবসময় value:0 এবং তাহলে আর Browser এর মধ্যে error দেখাবে না বা display blank দেখাবে না ;
//die(); যেকোনো error কে find করার জন্য

*/


//set_error_handling এর কাজ 3
// todo: set_error_handling মানে error কে দেখাতে চাইলে বা hide করতে চাইলে বা save করে রাখতে চাইলে ;

// function customErrorHandler(
//     int $error, // এখানে অবশ্যই দুইটা parametter নিতে হবে,  int আরেকটা string নিয়েছি যা ইচ্ছে নেওয়া যাবে
//     string $message, 
//     ?int $file, // এই  দুইটা parametter optional হিসেবে নিয়েছি
//     ?string $line
//     ){
//     echo "Cuntomer Error: $message in $line and $file";
//       return true;    //যেখানে আছি সেখান থেকেই যদি off করে দিতে চাই তাহলে লেখতে হবে exit;

// }

// error_reporting(error_level:E_ALL && E_USER_ERROR);// error_reporting দিলেও error দেখাবে কারন নিচের লাইনে set_error_handler ব্যবহার করেছি
// set_error_handler(error_level:E_USER_ERROR, callback:"customErrorHandler");
//  echo $x; //$x নামে কোনো variable নাই এটা আমরা ইচ্ছে করে ভুল করেছি যাতে ভুলটা সহজে ধরতে পারি









//todo: directory create & remove
// *directory Handling এর কাজ;

//todo:  directory create কিভাবে করতে হয় 10 
// mkdir(directory:"zakir");


//todo: একটা directory এর মধ্যে আরেকটা directory create করতে চাচ্ছি//zakir এর ভেতরে hossain তার ভেতরে আবার arju নামে আরেকটা directory create করেছি
// mkdir('zakir/hossain/arju', 0755, true);//যেকোনো নাম্বার এবং true দিতে হবে


//todo: একটা directory এর মধ্যে যতগুলো directory থাকুক না কেন সবগুলোকে একসাথে remove করতে চাচ্ছি 
// rmdir("zakir");




// ?file handlind এর গল্প
// scandir_fopen_rename_copy_unlink_fclose_file put_show_read=
// scan কইরা দেইখা fopen করে সেটাকে copy,rename,unlink,fclose,put,show,read করতে পারব



/*
1>> file কে প্রথমে scan করতে হবে = __DIR__
2>> file create = fopen('tmp.txt', 'w')
3>> file rename = rename(from:"belal.csv", to:"zakir.csv")
4>> file cope = copy(from:"arju.csv", to:"zakir.csv")
5>> file remove = unlink("zakir.txt")
6>> file close = fclose($file)
7>> file write = file_put_contents(filename:"zakir.txt", data: "My name is MD Zakir Hossain")
8>> file show = অনেকভাবেই  শুকরানো যায়
9>> file read = অনেকভাবেই read করা যায়

*/



//todo: current Directory দেখতে চাচ্ছি  way 1
// echo __DIR__;



//todo: all directory scan করে দেখতে চাচ্ছি
// $scanDir = scandir(directory:__DIR__.'../../');







//todo: এভাবে file দিয়ে file চেক করতে পারি  আবার directory ও চেক করতে পারি way 2

// $scanDir = scandir(__DIR__.'../../');

// if(is_file(filename:$scanDir[3])){ //২ নাম্বার directory টা directory নাকি file সেটা চেক করতে চাচ্ছি 
//     echo "This is a File";
    
// }else{
//     echo "This is not a File <br>";
//     var_dump($scanDir[3]) ."<br>";//এই directory টা string নাকি অন্যকিছু সেটা চেক করতে চাচ্ছি


//     if(is_dir(filename:__DIR__."../../" .$scanDir[8])){ //৮ নাম্বার directory টা directory নাকি file সেটা চেক করতে চাচ্ছি 
//         echo "This is a Directory";
//     }else{
//         echo "This is not a Directory";
//     }
// }













//todo: zakir.txt নামে কোনো file বা directory আছে কিনা চেক করছি

// if(file_exists("zakir.txt")){
//     echo "it has";
// }else{
//     echo "it don't have";
// }





//todo: new যেকোনো file  create করতে চাইলে  2
// fopen('zakir.txt', 'w'); //দুইটা paremeter নিতে হয়




//todo: যেকোনো file rename করতে চাইলে 3
// rename(from:"arju.txt", to:"zakir.txt");// belal.csv fileকে zakir.csv file নামে rename করেছি //দুইটা paremeter নিতে হয়




//todo:  কোনো fileকে copy করে new file create করতে পারব 7
// copy(from:"arju.txt", to:"zakir.txt");




//todo: কোনো fileকে remove করতে চাইলে 8
// unlink(filename:"zakir.txt");



//todo: fileএ কাজ করা শেষ হলে সেই file টাকে close করতে চাচ্ছি 9
// fclose($file);




//todo: Append & prepend করতে চাইলে 5 = way 3
// file_put_contents(filename:"zakir.txt", data:"My name is Zakir Hossain" .PHP_EOL.FILE_APPEND);
// file_put_contents(filename:"zakir.txt", data:"I am", flags:FILE_APPEND) ;


//todo: file এর লেখাগুলো browerএ দেখতে চাইলে  5 = way 1
// echo file_get_contents(filename: "zakir.txt");//file এর মধ্যে যে লেখাগুলো আছে সেগুলো দেখাবে



//todo:  কোনো file কে read করতে চাইলে 6 = way 2
// readfile(filename:"zakir.txt");//যে file কে read করতে চাচ্ছি সেই file এর নামে বলে দিতে হবে



//todo:  fileটাকে array আকারে browserএ দেখতে চাইলে 5 = way 1
// echo "<pre>";
// print_r(pathinfo(path:"zakir.txt"));//শুধু fileটা দেখা যাবে



//todo: কোনো file এর সব  লাইন read করতে চাইলে  feof() 6 = way 2
// $file = fopen("zakir.txt", "r") or die("ai name file nai");//r মানে read এখানে অনেক ধরনের letter ব্যবহার করতে পারব

// while(! feof($file)){ //? ! feof এর মানে যতক্ষণনা পর্যন্ত code run করা শেষ হয় ততক্ষণ পর্যন্ত কাজ করবে   
//     echo fgets($file) . "<br>"; //fgets মানে প্রতিটি লাইন দেখাবে আর fgetc মানে প্রতিটি letter দেখাবে
// }









// * htaccess ফাইল এর কমন কিছু কাজ
// 1>> URL রিডিরেক্টশন
// 2>> লোড কাস্টোম এরর পেজ
// 3>> সলভ এরর পেজ, লাইক ৪০৪
// 4>> HTTP থেকে HTTPS ফোর্স
// 5>> ব্লক আইপি এড্রেস
// 6>> ডিফল্ট ল্যাঙ্গুয়েজ সেট
// 7>> নিদির্ষ্ট কোন ডিরেক্টরিতে পাসওয়ার্ড প্রোটেক্ট





//todo: .htaccess মানে  সার্ভারে ওয়েবসাইট কিভাবে রান হবে তা মূলত কন্ট্রোল করে এই   htaccess ফাইল।
// print_r($_SERVER['REQUEST_URI']);//url এর পিছনে /zakir দিলে borwser এ zakir দেখাবে



//todo: .htaccess এর লেখাগুলো এখানে request করে নিয়ে আসতেছি way ২ //এখন borwser এ গিয়ে যে file এর নাম বলব সেই file এর সব লেখা দেখাবে
// echo include('.' .$_SERVER['REQUEST_URI'] . '.php');





//todo: .htaccess এর মধ্যে যে লেখাগুলো আছে তা নিচে দেওয়া হল
// <IfModule mod_rewrite.c>
//     RewriteEngine on
// <!--নিচের ২টা লাইন মানে server এর কাছে যদি কোনো file বা directory এর request আসে তাহলে সে read না করে পাঠিয়ে দিবে index.php এর কাছে -->
//     RewrireCond %{REQUEST_FILENAME}% !d
//     RewrireCond %{REQUEST_FILENAME}% !f

//     <!--নিচের লাইনটা মানে index.php এর কাছে পাঠাচ্ছি -->
//     <!--index.php fileটা যদি public এর ভেতরে থাকে তাহলে লেখতে হবে public/index.php এবং index file গিয়ে একটা directory এর ভেতরে গিয়ে index.php file আনার জন্য একটা ডট(.) বাড়িয়ে দিতে হবে-->
// RewriteRule ^ index.php[L]

// </IfModule>









