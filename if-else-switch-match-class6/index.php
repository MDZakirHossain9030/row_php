<?php
// todo: class 4  nai 

// * if-else_switch_match;

// ?if_else এর গল্প
//if_else, nested, sorter, whitch, match = if, nested এর মধ্যে কারেন্টে short দিতে চাও তাহলে switch দাও না হয় match দিয়ে আগুন জালাও


/*
1>> if else 
2>> shorter if else 
3>> nested if else 
4>> switch 
5>> match
*/




//todo: if-else
// todo: if-else* (if always true, elseif true or false, else always false);
// todo: if-else এর মধ্যে logical operator ব্যবহার করা যাবে";

// $age = 30;
// if($age < 25){
//     echo "you age my younger brother";
// }elseif($age == 25){
//     echo "samilar age";
// }else{
//     echo "you are old man";
// }





//todo: nested if else
// todo: nested if else* (একটার ভেতর অরেকটা এভাবে যত খুশি পাখির বাসার মত);

$name = "Zakir";
$age = 25;
$country = "Bangladesh";
$markes = 25;

if($name === "Zakir"){
    echo "I am MD Zakir Hossain <br>";
    if($age ==25){
        echo "semilar age  <br>";
        if($country === "Bangladesh"){
            echo "I live in Bangladesh  <br>";
            if($markes >=100 || $markes <=0){
                echo "It's markes is not avalable  <br>";
            }elseif($markes >80 & $markes <100){
                echo "A+  <br>";
            }elseif($markes >70 & $markes <=79){
                echo "A-  <br>";
            }elseif($markes > 60 & $markes <=69){
                echo "A <br>";
            }elseif($markes > 50 & $markes <=59){
                echo "B <br>";
            }elseif($markes > 40 & $markes <=49){
                echo "C <br>";
            }elseif($markes > 33 & $markes <=39){
                echo "D <br>";
            }else{
                echo "Fail";
            }
        }else{
            echo "I don't live this country";
        }
    }else{
        echo "This age not matched";
    }
}else{
    echo "I don't know this person";
}







//todo: shorter if else 
// todo: shorter if else* (curle brecket দিতে হয় না );
// $name = "akir";

// if($name === "Zakir")
// echo "I am Zakir";

// else
//     echo "I don't know him";










//todo: switch
// todo: switch* (if else এর মতই কাজ করে);
 $name = "Jamal";

 switch($name){
        case "Zakir":
            echo "I am MD Zakir Hossain";
            break;

        case "Belal":
            echo "I am MD Belal Ahmed"; 
            break;

        default: //switch ব্যবহার করলে default keyword ব্যবহার করতে হবে
                echo "I don't know him";

        case "Jamal": //অনেকের কাজ একই রকম হলে এভাবে নেওয়া যাবে
        case "Kamal":
        echo "He is a student";
 }







 // todo: Match
// todo: Match* (js এর মধ্যে object লেখা যায় এভাবে, Object এ থাকে key আর value);
$value = "Nahid";    
$match = match ($value){  //match কে variable এর মধ্যে রাখতে হয়
    "Zakir" => "I am Zakir",
    "Belal" => "I am Belal",
    "Jamal","Kamal" => "He is a Farmer", //অনেকের কাজ একই রকম হলে এভাবে নেওয়া যাবে
    "Nahid", "Sakib" => myFunction(),//এটার velue টাকে আমরা function এর মধ্যে return করেছি
    default => "I don't know him",//switch এর মত match লেখলেও default keyword ব্যবহার করতে হবে
};
echo $match;


function myFunction(){
    return "He is a Student";
}