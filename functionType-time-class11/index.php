<?php

// * function 


// ?function এর গল্প
//userdefine_anonymous_callback_closure_built_arrow_conditional
//user এর anonymous(নাম নাই) call দে নাহয় clos করে দে built এর arrow, conditional আছে



// todo: function এর নাম;
/*
1>> varriable or userdefine function 
2>> anonymous or lambda function
3>> closure & callable function 
4>> built-in function
5>> arrow function
6>> conditional function
*/








// todo: varriable or userdefine function 1 string
//todo:আমিনের বয়স দেওয়া নাই paramiterএ দেওয়া আছে;

// function myFunction1($name, $age=50){
//   return "$name $age <br>";
// }
// echo myFunction1("MD Zakir Hossain= ",25);
// echo myFunction1("Belal Ahmed= ",30);
// echo myFunction1("MD Amin mia= ",);







// todo: varriable or userdefine function 2 string
// todo: একটা নাম্বারকে সবার নামের শেষে দিয়ে চাচ্ছি 

// function myFunction5($number,...$name,){
//   $counter = "";

//   for($i = 0; $i <count($name); $i++){
//     $counter .= "$name[$i] $number <br>";
//   }
//   return $counter ;
// }
// echo myFunction5("+8801759999030", "Zakir", "Belal", "Salek");






// * user defined number
// todo: varriable or userdefine function  1 number
//todo: দুইটা সংখ্যাকে argument হিসেবে পাঠাচ্ছি যোগ করার জন্য

// function number1(int $a, int $b):int{
//   return $a + $b;
// }
// echo number1(5,6);







// todo:varriable or userdefine function  2 number;
//todo:দুইটা দশমিক সংখ্যাকে argument হিসেবে পাঠাচ্ছি যোগ করার জন্য
// function number2(float $a, float $b):float{
//   return (int)($a + $b); //integer result দিবে
// }
// echo number2(5.2,6.5);








// todo: varriable or userdefine function  3 number;
//todo:বেশি সংখ্যাকে যোগ করতে চাইলে ...দিয়ে রিসিভ করতে হয় loop ব্যবহার করতে হয়
// function number3(...$number){
//   $counter = 0;
//   for($i = 0; $i<count($number); $i++){
//     $counter += $number[$i];
//   }
//   return $counter;
// }
// echo number3(5,6,3,4);










//todo: anunimous function (without name)
// $name = function($come){
//   return $come;
// };
// echo $name("MD Zakir Hossain");







// todo: anonymous or lambda function ;

// $x = 10;
// $anonymous = function ()use($x){    //global scope কে ব্লকের ভেতরে নিয়ে কাজ করতে চাচ্ছি use() এর মাধ্যমে আবার global লিখেও কাজ করা যায়
//     echo "variable x = $x";
// }; //anunymous function দিলে {} এর পরে অবশ্যই সেমিকোলন দিতে হবে
// echo $anonymous();









// কলব্যাক ফাংশন হলো একটি ফাংশন যা অন্য একটি ফাংশনের মধ্যে পাস করা হয় //একটা ফাংশন শুধু একটা কাজ করবে এটাই স্বাভাবিক
// todo: callback function way 1;
//একটা array কে function এর মধ্যে exicute করতে চাচ্ছি


//callback function way 1
// প্রতিটা নামে কয়টা করে length আছে তা দেখার জন্য
/*
echo "<pre>";
  function callbackfunction($name) {
    return strlen($name);
  }
  
  $friends = ["Zakir", "Amin", "Belal", "Salek"];
  $lengths = array_map("callbackfunction", $friends);
  print_r($friends);
  print_r($lengths);
*/







// todo: callback function way 2;
// সকল সংখ্যার সাথে ৫ গুন, অথবা ৫ এর নামাতা
/*
echo "<pre>";
function callbackfunction($num){
  return $num * 5;
}

$number = array(1,2,3,4,5,6,7,8,9,10);
$show = array_map("callbackfunction", $number);
print_r($number);
print_r($show);

*/








// todo: php তে built-in function প্রায় ১ হাজারের বেশি হবে;

/*
1>> var_dump() <br>
2>> array_map() <br>
*/







// todo: conditional function;
//todo: যদি সত্য হয় তাহলে আমার নাম দেখাবে আর নাহয় নাম দেখাবে না

// $name = true;
// if($name){
//   function myFunction($come){
//     return $come;
//   }
//   echo myFunction("MD Zakir Hossain");
// }








//todo: ১৭৭০ সালের জানুয়ারীর ১ তারিখ থেকে এখনো পর্যন্ত যত সেকেন্ড আছে সব সেকেন্ড দেখাবে 
// echo time()."<br>";




//todo: দিন বাড়াতে বা কমাতে চাইলে 

// $currentTimes = time();
// echo $currentTimes ."<br>";

// echo $currentTimes + 86400 ."<br>";
// echo $currentTimes + 5 * 24*60*60;








//todo: Unic Time stemp মানে আজকের দিনের তারিখ, মাস, সাল, ঘন্টা, মিনিট, সেকেন্ড সব দেখাবে

//todo: date time fommate in php এই লিঙ্কে ক্লিক করলেই দেখাবে আমরা টাইমটাকে কিভাবে দেখাতে চাচ্ছি

// echo date("Y-m-D H:i:sa");//ছোট হাতের h দিলে ১২ ঘন্টায় সময় দেখাবে আর s এর সাথে a দিলে am/pm দেখাবে







//todo: কোন zoneএর মধ্যে আছি= UTC zoneএ আছি

// echo date_default_timezone_get() ."<br>";







//todo: Time Zones in Bangladesh - Dhaka মানে বাংলাদেশের সঠিক সময়

//todo: time way 1
// date_default_timezone_set("Asia/Dhaka");
// echo date("Y-m-D H:i:sa");






//todo: time way 2
// $formatted_date =  date("Y-m-D H:i:sa");
// echo $formatted_date;






//todo: time way 3
// $timestamp = mktime(hour:0, minute:0, second:0, month:6, day:26, year:null);//null দেওয়ার কারনে সঠিক সালটা দেখাচ্ছে এখানে সাল লিখে দিলেও হবে
// echo date("Y-m-D H:i:sa", $timestamp);//echo করে দেখা যাবে আবার নিচে print_r করেছি সেভাবেও দেখা যাবে






//todo:  গত শুক্রবার কত তারিখ ছিল সেটা দেখতে চাচ্ছি

$timestamp = mktime(hour:0, minute:0, second:0, month:6, day:26, year:null);//null দেওয়ার কারনে সঠিক সালটা দেখাচ্ছে এখানে সাল লিখে দিলেও হবে
$timestamp = strtotime("second friday of june");//এখানে মাস দিন সাল সবকিছুই মনের মত করে দেখা যাবে
echo date("Y-m-d", $timestamp) ."<br>";



//todo: function কে যেকোনো জায়গা থেকে invoke বা call করা যাবে
//todo: nested function create করাযাবে
//todo: union data type mane কি কি রিসিভ করতে চাচ্ছি int, float, string, array null রিসিভ করতে চাইলে ?null দিতে হবে

