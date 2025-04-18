<?php
//   * DATA TYPES * ;

/*     
1>> String = "MD Zakir Hossain"
2>> Integer = 5 
3>> Float/decimal = 5.2
4>> Boolean = true or false
5>> Array = ["Zakir", "Belal", "Amin"]
6>> Object = const car{"color":MBW, "color":"white"}
7>> NULL = Empty
8>> Resource = বাহ্যিক ফাংশন কে করে
*/


// ?  STRING এর গল্প
// 1>> is_len_word-count_pos= is_len গিয়ে word_count গগণা করে pos রাখবো
// 2>> upper_replace_rev_trim_ucfirst_ucwords_explode= upper replace করব না হলে rev অথবা trim করে ফেলবে বাচাতে হলে ucfirst  রাখো বা ucwords  রাখো তাও না পারলে সবাইকে explode(array =আলালা) করো
// 3>> concate_slice_escape = সংসারকে concate করতে পারি slice করতে পারি এমনভাবে slice প্রতি বাড়িতে escape (*,$,/)বেড়া দিয়ে দেবো


//todo:  * STRING *;

/*
1>> is_string() = এটা string কিনা চেক করতে চাচ্ছি 
2>> strlen() = কতটা length বা ডিজিট আছে space কেও count করা হবে
3>> str_word_count()= কতটা word আছে 
4>> strpos("Hello world!", "world") = word এর position কত নাম্বারে 

*/





//todo: * string Modify(chance) *;
/*     
1>> strtoupper() = string এর সব অক্ষর বড় হাতের করবে 
2>> strtolower() = string এর সব অক্ষর ছোট হাতের করবে 
3>> str_replace("World", "Dolly", $x); = word replace করবে 
4>> strrev() = string Reverse করবে মানে বিপরিত করবে 
5>> trim() = string এর মধ্যে space থাকলে space remove করবে 
6>> ucfirst() = string এর প্রথম অক্ষর বড় হাতের করবে
7>> ucwords() = string এর প্রতিটি word এর প্রথম অক্ষর বড় হাতের করবে 
8>> explode(" ", $x); =string কে array করে ফেলবে 

*/




//todo: *string Concatenate(add সংসার জোড়া লাগাচ্ছি)* ;

//todo: way = 1;
$x = "Hello";
$x .= "World"; //দুইটাতেই $x দিয়েছি
echo $x   ."<br><br>";




//todo: way = 2;
$x = "Hello";
$y = "World";
$z = $x . $y; // ডট না দিয়ে + দিলে হবেনা কারন এটা string অংক করার সময় ডট দেওয়া যাবে
echo $z ."<br><br>";



//todo: way = 3;
$x = "Hello";
$y = "World";
echo $x . $y ."<br><br>";


//todo: way = 4;
$x = "Hello";
$y = "World";
$z = $x . $y;
echo "Result = $z" ."<br><br>";//Result নামে একটা লেখাও দিয়েছি 


//todo: way = 5;
$x = "Hello";
$y = "World";
$z = $x . $y;
echo "Result = " ."{$z} "."<br><br>"; //$z কে curle ব্রেকেটে দিয়েছি


//todo: way = 6;
$x = "Hello";
$y = "World";
$z = $x . $y;
echo "Result = {$z}" ."<br><br>";//result এর সাথে একই ব্রেকেটের মধ্যে curle ব্রেকেট দিয়েছি ডট দিতে হয় নাই





//todo: *string Slicing (substring বিয়োগ> সংসার ভেঙে দিচ্ছি)* ;

//todo: way = 1;
$country = "Bangladesh";
echo substr($country, 3)  ."<br><br>"; //কতটার পর থেকে রাখতে চাচ্ছি 



//todo: way = 2;
$country = "Bangladesh";
echo substr($country, 4, 2)  ."<br><br>";//4মানে কতটার পর থেকে রাখতে চাচ্ছি 2 কতটা রাখতে চাচ্ছি



//todo: way = 3;
$country = "Bangladesh";
echo substr($country, -5, 3)  ."<br><br>";//-5 পিছন থেকে count করে আসবে  3 কতটা রাখতে চাচ্ছি


//todo: way = 4;
$country = "Bangladesh";
echo substr($country, 5, -3)  ."<br><br>";//5 প্রথম 5 টা বাদ দেবে আর  -3 শেষের 3 টা বাদ দেবে


//todo: *Escape Characters( সংসারে ছেলে রাখবো নাকি মেয়ে রাখব )* ;
/*
1>>  \	Single Quote <br>
2>>  \"	Double Quote <br>
3>>  \$	PHP variables <br>
4>>  \n	New Line <br>
5>>  \r	Carriage Return <br>
6>>  \t	Tab <br>
7>>  \f	Form Feed <br>
8>>  \ooo	Octal value <br>
9>>  \xhh	Hex value <br>
*/

$name = "MD \"Zakir Hossain";
echo $name ."<br><br>";


//todo: এই ক্লাসে শুধু string নিয়ে কথা বলেছি পরের ক্লাসে (3) অন্যান্য Data type নিয়ে আলোচনা হবে;