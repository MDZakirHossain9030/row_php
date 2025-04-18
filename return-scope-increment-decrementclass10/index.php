<?php

// * ReturnStateMent, Scope, require or include




//todo: ReturnStateMent;

//todo: function থেকে return করাকেই return statement বলা হয় 


//todo:  declare
/*
1>> ticks 
2>> encode 
*/



//todo: tick মানে function এর data কে কতবার exicute করতে চাচ্ছি

// function name(){
//     echo "= Zakir <br>";
// }

// register_tick_function('name');//name নামে যে function টা আছে সেটা register এর মাঝে tick করে লেখ এবং নিচে declare করো কতবার দেখাতে চাও
// declare (ticks=1);


// for($i = 0; $i<10; $i++){
//  echo $i;
// }










//todo: Scope;
/*
1>> local scope
2>> global scope
3>> static
*/




// todo: local scope & global scope ব্লকের ভিতর থেকে বা বাহির থেকে এক্সেস করা যাবে


//todo: local scope  ব্লকের ভেতরে থাকে, loca scope কে বাহির থেকে exess করা যায় না ;
//todo: global scope ব্লকের বাইরে থাকে, ব্লকের উপরে অথবা নিচে যা ব্লকের ভেতর থেকে exess করা যায় না আর যদি exess করতেই চাই তাহলে ব্লকের ভেতরে global লেখে variable এর নাম বলে দিতে হবে যাকে বলা হয় global keyword;

// $name = "Zakir";
// function myFunction(){
//     global $name; //global কে local করে নিলাম এখন যেকোনো যায়গা থেকে exess করতে পারব
//     echo $name;

//     global $hello;//নিচের local কে global করে নিলাম এখন এটাকে বাইরে থেকেও exess করতে পারব
//     $hello =  "Hello!";
// }
// myFunction();

// echo $hello;







//todo: static way 1 ;

function myFunction(){
    static $count = 0; //static দেওয়ার কারনে প্রতিবার এক এক করে যোগ হচ্ছে
    $count++;
    return $count ."<br>";
}
echo myFunction(); 
echo myFunction(); 
echo myFunction(); 



//todo: static way 2;
function staticFunction(){
    sleep(1);
    return 20 ."<br>";
}



function foo(){
    static $x = staticFunction(); //static না লেখলে অনেক সময় পরে আসবে 
    return $x;
}
echo foo();
echo foo();
echo foo();
echo foo();






// todo: require or include
//todo: অন্য file এর সবকিছু নিয়ে আসতে চাইলে require or include ব্যবহার করি;
//todo: require & include এর মধ্যে পার্থক্য হলো;



//todo: 1 include করলে যে file থেকে code নিয়ে আসতে চাচ্ছি সেই file এর নাম ভুল হলে সেই file এর কোনো code exicute হবে না অন্যান্য file এর code exicute ঠিকি হবে <br>
//todo: 2 require করলে যে file থেকে code নিয়ে আসতে চাচ্ছি সেই file এর নাম ভুল হলে সব file এর  কোনো code exicute হবে না  


//todo: require_once or include_once মানে একবার increment হবে</h2>";

?>

