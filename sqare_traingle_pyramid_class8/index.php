<?php




// * এখানে যা যা আছে shape এবং function


// todo: Square

// $size = 5;
// for($row = 0; $row < $size; $row++){
//   for($col = 0; $col < $size; $col++){
//     echo "* ";
//   }
//   echo "<br>";
// }
// echo "<br><br>";



// todo: Traingle_1

// $size = 5;
// for($row = 0; $row < $size; $row++){
//   for($col =0; $col <= $row; $col++){
    
//     echo "* ";
//   }
//   echo "<br>";
// }




// todo: Traingle_2

// $size =5;
// for($row = $size; $row > 0; $row--){
//   for($col = 0; $col  < $row; $col++){

//     echo "* ";
//   }
//   echo "<br>";
// }



// todo: pyramid

// $size = 5;
// for ($row = 1; $row <= $size; $row++){
//     // print space before star
//     for ($space = $size - $row; $space > 0; $space--){
//         echo "&nbsp &nbsp";
//     }

//     for ($shape = 1; $shape <= (2 * $row - 1); $shape++){
//         echo "*&nbsp;";
//     }

//     echo "<br>";
// }





// todo: function এর নাম;
/*
1>> user defined
2>> anunimous function
3>> built-in function
4>> arrow function
5>> conditional function
*/








// todo: user defined 3 string
//todo: argument হিসেবে ৩টা নামকে পাঠানো হচ্ছে 

// function myFunction3(string $name){ //$name দিয়ে ৩টা নামকে রিসিভ করা হচ্ছে 
//  return $name ."<br>";
// }
// echo myFunction3("MD Zakir Hossain"); 
// echo myFunction3("Amin Mia"); 
// echo myFunction3("Belal Ahmed"); 




// todo: user defined 4 string
//todo:আমিনের বয়স দেওয়া নাই paramiterএ দেওয়া আছে;

// function myFunction4($name, $age=50){
//   return "$name $age <br>";
// }
// echo myFunction4("MD Zakir Hossain= ",25);
// echo myFunction4("Belal Ahmed= ",30);
// echo myFunction4("MD Amin mia= ",);





// todo: user defined 5 string
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
// todo: user defined 1 number
//todo: দুইটা সংখ্যাকে argument হিসেবে পাঠাচ্ছি যোগ করার জন্য

// function number1(int $a, int $b):int{
//   return $a + $b;
// }
// echo number1(5,6);







// todo:user defined 2 number;
//todo:দুইটা দশমিক সংখ্যাকে argument হিসেবে পাঠাচ্ছি যোগ করার জন্য
// function number2(float $a, float $b):float{
//   return (int)($a + $b); //integer result দিবে
// }
// echo number2(5.2,6.5);






// todo: user defined 3 number;
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





// todo: php তে built-in function প্রায় ১ হাজার এর উপরে হবে;

/*
1>> var_dump() <br>
2>> array_map() <br>
*/






// todo: arrow function = 1টা array return করতে চাচ্ছি 

// echo "<pre>";
// function number($i){
//   return $i+2;
// }
// // $m = array(1,2,3);
// var_dump (array_map ("number",array(1,2,3)));






// todo: conditional function;
//যদি সত্য হয় তাহলে আমার নাম দেখাবে আর নাহয় নাম দেখাবে না

// $name = true;
// if($name){
//   function myFunction($come){
//     return $come;
//   }
//   echo myFunction("My name is Zakir");
// }





//todo: function কে যেকোনো জায়গা থেকে invoke বা call করা যাবে
//todo: nested function create করাযাবে
/*php লেখার সময় প্রথমে লেখতে হবে declare(strict_type=1)
  এটা লেখলে argument যদি দেয় string এবং যদি paramiter রিসিভ করি int , float তাহলে ভুলটা ধরে দিবে অতি সহযে */





  //todo: union data type mane কি কি রিসিভ করতে চাচ্ছি 

/* function unionDataType(int|float|string|array $name):int|float|string{ //(paramiterএ যদি array রিসিভ করি তাহলে fixed use করতে পারব):int|float|string এতগুলো না দিয়ে mixed দিলেও চলবে,null রিসিভ করতে চাইলে ?null দিতে হবে
  return $name;
 }
 echo unionDataType("MD Zakir Hossain");
 */


