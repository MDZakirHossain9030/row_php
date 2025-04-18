<!--//* array দিয়ে table create করলাম  -->
<?php

//todo:  array দিয়ে table create করলাম
$allFriends = array("MD Zakir Hossain", "MD Belel Ahmed", "MD Salek Khan");

echo "<table border='1px'>"; 
echo "<tr><th>Name</th></tr>"; 



    foreach($allFriends as $oneFriend){ ?>
        <tr>
        <td><?php echo $oneFriend?></td>;
    </tr>
   
<?php
}

echo "</table>";
?>








<!--//* csv file কে table আকারে দেখতে চাইলে    -->
<?php

error_reporting(error_level:E_ALL && E_WARNING);

//todo:  csv file কে table আকারে দেখতে চাইলে 

$file = fopen("zakir.csv", "r");


echo "<table border='1px'>";
while($column = fgetcsv($file)){ ?>
<tr>
        <td><?php echo $column[0]?></td>
        <td><?php echo $column[1]?></td>
        <td><?php echo $column[2]?></td>
        <td><?php echo $column[3]?></td>
    </tr>

<?php
// under 3 column for total salary adding

$numbers []= $column[3]; //3column এর সব কিছু arrayচ করেছি
$all_num []= array_shift($numbers); //3column থেকে  salary টা বাদ দিয়েছি 
$total = array_sum($all_num); //3 column সকল টাকা যোগ করছি


}   

?>

<!-- 1row for total amount  -->
<tr>
    <th colspan='3'>Total</th>
    <td><?php echo $total?></td> 
</tr>
</table>








<?php

    // csv file এর মধ্যে যে কোডগুলো আছে 
	
	/*
    name, age , address
    MD Zakir Hossain, 25, Monohurpur
    MD Belal Ahmed, 25, Koromnogar
    MD Amin Mia, 27, Monohurpur
	*/

?>