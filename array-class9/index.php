<?php

//* Array;
// বিয়ে বাড়িতে ১টা প্লেটে করে অনেক গুলো সরবতের গ্লাস নিয়ে যেতে পারব, মানে বারবার ভেরিয়েবল না নিয়ে একটা ভেরিয়েবলে অনেক ডাটা রাখতে পারব একসাথে





//todo:  array ৩ প্রকার

/*
1>> Indexed array = প্রতিটা element এর index নাম্বার আছে
2>> Associative arrays = Array এর index(key) হিসেবে নাম দেওয়া যায়   
3>> Multidimensional arrays = Arrays এর মধ্যে array (nested array)
*/


// ? array built-in function এর গল্প
// is_set_sort_push_pop_unshift_shift_unset_keys_value_count_date
//1>> is সেট sort করে, পিছন দিয়ে ঢুকেবো বাহির করবো আবার সামনে দিয়ে ঢুকাবো বাহির করবো unset
//2>> keys value করে count করতে পারে date এর


//todo:  array some built-in function
/*
1>> isset() = এই নামে variable set করা আছে নাকি
2>> sort() = alphabeticali ভাবে সাজাবে
3>> array_push() = শেষে element add করবে
4>> array_pop() = শেষের element remove করবে 
5>> array_unshift() = প্রথমে element add করবে
6>> array_shift() = প্রথমে element remove করবে 
7>> unset($name[1]) = যেকোনো element remove
8>> array_keys() = array এর keys বাহির করে দিবে
9>> array_values() = array এর value বাহির করে দিবে
10>> count() = count value & keys
date("y-m-d H:i:s") = current time দেখাবে
*/






// todo: array details

// 2>> count & position find
// 3>> access 
// 4>> add & remove
// 5>> unset
// 6>> sort
// 7>> convert
// 8>> isset
// 9>> array adding
// 10>> need onle key or value
// 11>> foreach
// 12>> Multidimensional & for loop




//todo: Associative array create way 1 মানে নিজের মত করে key দিলাম
// echo "<pre>";
// $friends = array("one"=>"Zakir", "two"=>"Belal","three"=>"Amin");
// var_dump( $friends);




// todo: Associative array create way 2 মানে নিজের মত করে elementদিলাম
// echo "<pre>";
// $friends =[];
// $friends[0] ="Zakir";//0,1,2 এর পরিবর্তে stringও দেওয়া যাবে
// $friends[1] ="Belal";
// $friends[2] ="Amin";

// var_dump( $friends);








// todo: creat array way 1
// echo "<pre>";
// $friends = array("Zakir", "Belal", "Amin");
// var_dump( $friends);




//todo: array এর মধ্যে কয়টা element আছে তা দেখার জন্য =count()
// $friends = array("Zakir", "Belal", "Amin");
// var_dump(count($friends)) ;







// todo: index number দিলেই string এর letter দেখাবে;
// $value = "MD Zakir Hossain";
// var_dump($value[-1]);






// todo: index number দিলেই array এর element দেখাবে;
// $friends = array("Zakir", "Belal", "Amin");
// var_dump($friends[0]);






//todo: 0 নাম্বার element change করেছি
// echo "<pre>";
// $friends = array("Zakir", "Belal", "Amin");
// $friends[0] = "Kamal";
// var_dump($friends);





//todo:  নতুন element যোগ করতে চাচ্ছি way 1
// echo "<pre>";
// $friends = array("Zakir", "Belal", "Amin");
// $friends[] = "Kamal";
// var_dump($friends);






//todo:  isset মানে variable set করা আছে কি না
// $name = "Zakir";
// var_dump(isset($name));//true





//todo:  sort মানে alphabeticaly ভাবে সাজাবে
// echo "<pre>";
// $name = array("Zakir", "Belal", "Amin");
// sort($name);
// var_dump($name);




// todo: push মানে পিছন দিয়ে নতুন element যোগ করতে চাচ্ছি 
// echo "<pre>";
// $friends = array("Zakir", "Belal", "Amin");
// array_push($friends,"Kamal");
// var_dump($friends);





// todo: pop মানে পিছন থেকে  element বাদ ্দিতে চাচ্ছি 
// echo "<pre>";
// $friends = array("Zakir", "Belal", "Amin");
// array_pop($friends);
// var_dump($friends);





// todo: unshift মানে সামনে দিয়ে নতুন element যোগ করতে চাচ্ছি 
// echo "<pre>";
// $friends = array("Zakir", "Belal", "Amin");
// array_unshift($friends,"Kamal");
// var_dump($friends);





// todo: shift মানে সামনে থেকে  element বাদ ্দিতে চাচ্ছি 
// echo "<pre>";
// $friends = array("Zakir", "Belal", "Amin");
// array_shift($friends);
// var_dump($friends);






//todo:  unset মানে array এর যেকোনো element বাদ দেওয়ার জন্য 
// echo "<pre>";
// $friends = array("Zakir", "Belal", "Amin");
// unset($friends[1]);
// var_dump($friends);




//todo:  array এর শুধু index number নিতে চাচ্ছি
// echo "<pre>";
// $friends = array("Zakir", "Belal", "Amin");
// $a = array_keys($friends);
// var_dump($a);





// todo: array এর শুধু value নিতে চাচ্ছি
// echo "<pre>";
// $friends = array("Zakir", "Belal", "Amin");
// $a = array_values($friends);
// var_dump($a);





// todo: casting মানে convert করা = string কে array তে conver করেছি
// $name = "MD Zakir Hossain";
// $a = array($name);
// var_dump($a);






// todo: দুইটা array কে concate করতে চাচ্ছি = 2টা array কে concate করতে চাইলে কমপক্ষে ১টা Associative arrays লাগবে
// echo "<pre>";
// $friends = array("one" => "Zakir", "two" => "Belal");
// $friends += ["three" => "Amin", "four" => 1964];
// var_dump($friends);







// todo: Multidimensional array (nested array এর মত) এখানে লেখতে হবে

// $friends = array(
//     array("Zakir", 25, "unmarrid"),
//     array("Belal", 27, "unmarrid"),
//     array("Amin", 30, "marrid")
// );

// echo $friends[0][0] .$friends[0][1] .$friends[0][2] ."<br>";
// echo $friends[1][0] .$friends[1][1] .$friends[1][2] ."<br>";
// echo $friends[2][0] .$friends[2][1] .$friends[2][2] ."<br>";





//todo:  Multidimensional array এর মধ্যে for loop ব্যবহার করতে চাচ্ছি
// $cars = array (
//     array("Volvo",22,18),
//     array("BMW",15,13),
//     array("Saab",5,2),
//     array("Land Rover",17,15)
//   );
      
//   for ($row = 0; $row < 4; $row++) {
//     echo "<p><b>Row number $row</b></p>";
//     echo "<ul>";
//     for ($col = 0; $col < 3; $col++) {
//       echo "<li>".$cars[$row][$col]."</li>";
//     }
//     echo "</ul>";
//   }


