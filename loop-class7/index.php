<?php

//* Loop




// todo: Loop এর মধে beake & continue important = break দিলে break এর পরের গুলো আর দেখাবে না, আর continue দিলে যেখানে continue থাকবে সেটা বাদে সবগুলো দেখাবে;
/*
1>> while loop (শুধু variableটা  উপরে থাকবে )
2>> do while loop (variable উপরে থাকবে do এর মধ্যে echo & $i++ থাকবে,while এর মধ্যে condition থাকবে)
3>> for loop (৩টা expressionই থাকবে)
4>> foreach loop (phpএর নিজস্ব loop)

*/













//todo: While loop
// todo: while loop (শুধু variableটা  উপরে থাকবে);
// $i = 0; //শূন্য থেকে শুরু করবে

// while ($i < 10) { //১০ এর কম থাকবে
//   $i = $i+1; //প্রতিবার ১ যোগ হবে
//   echo "$i  <br>";
// }








//todo: do While loop
// todo: do while loop (variable উপরে থাকবে do এর মধ্যে echo & $i++ থাকবে,while এর মধ্যে condition থাকবে);
// $i = 0;

// do {
//   $i++; //$i++ নাদিলে চলতেই থাকবে এবং computer এর ram full হবে যাবে
//   if ($i == 3) 
//   continue; //break দিলে 2 এর পরে আর যাবে না continue দিলে 3 বাদে সব দেখাবে
//   echo $i ."<br>";
// } while ($i < 6);









//todo: for loop
// todo: for loop (৩টা expressionই থাকবে, loop এর মধ্যে এটাই ব্যবহার হয় বেশি);
// for ($x = 0; $x <= 10; $x++) {
//     echo  $x ."<br>";
//   }




//todo: I want to show all disit of array //for loop(example)
//  $numbers = array(1,2,3,4,5,6,7,8,9,10);

//     for($i = 0; $i < count($numbers); $i++){
//     echo $numbers[$i] . "<br>";
//  }








//todo: I want to divide array numbers even number / odd number
// $numbers = array(1,2,3,4,5,6,7,8,9,10);


// for($i = 0; $i < count($numbers); $i=$i+1){
//     if($i %2 ==1){
//         echo $i ."<br>";
//     }

// }









//todo: foreach loop


// todo: I want to show array index number or value
// $fruit = array("Mango"=>"200", "Banana"=>"80", "jackfruit"=>"350");

// foreach($fruit as $key => $value){
//     echo $value ."<br>"; //$key(index), $value(value)
// }















