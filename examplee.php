<html>
    <body>
        <!-- <?php
        $a =5;
        $b =5.65;
        $c ="hello";
        $d = true;
        $e = NULL;

        $a =(array) $a;
        $b =(array) $b;
        $c =(array) $c;
        $d =(array) $d;
        $e =(array) $e;

        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);
        ?> -->

<!-- <?php
$arr = [10, 20, 30];   // Added ;
$arr = (array) $arr;   // Fixed casting
var_dump($arr);
?> -->




<!-- <?php
echo(sqrt(64) . "<br>");
echo(sqrt(0) . "<br>");
echo(sqrt(1) . "<br>");
echo(sqrt(9));
?> -->


<!-- <?php
for($a =0; $a <=10;$a++){
    echo "i love you baby: <br>";
}
?> -->

<!-- <?php
for( $a = 0; $a <= 10; $a++){
    if($a == 0)continue;
    echo "i love you baby:$a <br>";
}
?>   -->

<?php

/*
for ($a = 10; $a <=100; $a+=10){
    echo "this is number: $a <br>";
}
*/


/*
$products = ["laptop", "phone", "keyboard", "monitor", "printer"];

for ($i = 0; $i < count($products); $i++) {
    echo "Product $i: $products[$i] <br>";
}
    */


// $weekdays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

// for($day = 1; $day <=30; $day++){
//     $weekday = $weekdays[($day-1)% 7] ;
//     echo"day $day: $weekday <br>";
// }
// ?>


<!-- <?php
$cars =array("volvo","audi","bmw");
foreach($cars as $a){
    echo "$a <br>";
}
?> -->

<!-- <?php
$products =[
    "laptop" => 55555,
    "smartphone" => 65000,
    "Led tv" => 487985,
    "smart watch" => 12454,
];
echo "<h2> Product list and Price list item </h2>";
foreach($products as $product => $price){
    echo "product: $product =  $price <br>";
}
?> -->

<!-- <?php
$students = [
    ["name" => "Rahul", "marks" => [85, 90, 88]],
    ["name" => "Sneha", "marks" => [78, 82, 80]],
    ["name" => "Aman", "marks" => [92, 88, 95]]
];

foreach ($students as $student) {
    echo "<b>{$student['name']}</b><br>";
    
    foreach ($student['marks'] as $mark) {
        echo "Marks: $mark <br>";
    }
    
    echo "<hr>";
}
?> -->

<!-- <?php
$users = [
    ["id" => 1, "name" => "Pushkar", "email" => "pushkar2254@gmail.com"],
    ["id" => 2, "name" => "Riya", "email" => "riya@example.com"],
    ["id" => 3, "name" => "Karan", "email" => "karan@example.com"]
];

echo "
<style>
table {
  border-collapse: collapse;
  width: 50%;
  margin: 30px auto;
  font-family: Arial, sans-serif;
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
}
th {
  background-color: #4CAF50;   /* Header color */
  color: white;
  padding: 10px;
  text-align: left;
}
td {
  padding: 10px;
  border-bottom: 1px solid #ddd;
}
tr:nth-child(even) {
  background-color: #bcbbbced;  /* alternate row color */
}
tr:hover {
  background-color: #d9d1f7ff;   /* hover effect */
}
</style>
";

echo "<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
</tr>";

foreach ($users as $user) {
    echo "<tr>
            <td>{$user['id']}</td>
            <td>{$user['name']}</td>
            <td>{$user['email']}</td>
          </tr>";
}

echo "</table>";
?>
 -->

 <!-- <?php
 $number = array(1,55,65,78,46);
 rsort($number);
 $arrlenght =count($number);
 for($a = 0; $a < $arrlenght; $a++){
    echo$number[$a];
    echo"<hr>";
 }
 ?> -->

 <!-- <?php
$age = array("pushkar" => "18","sachin" => "23","hemant"=> "19");
asort($age);

foreach($age as $key => $key_value0){
    echo "sr  = " .$key .", age " .$key_value0;
    echo "<br>";
}



 ?> -->

 <!-- <html>
<body>

<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>

</body>
</html> -->

<html>
    <body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] =="POST");

?>

</body>
</html>