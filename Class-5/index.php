<?php


// // Title convertion
$title = "<script>alart</script>";
$convertedTitle = htmlentities ($title);
echo $convertedTitle;

$convertedTitle = html_entity_decode ($title);
echo $convertedTitle;



// Stoping external attack
$title = "<script>alart</script>";
$convertedTitle = htmlspecialchars ($title);
echo $convertedTitle;


// String reapt
$str = "Khan";
echo str_repeat("<br>".$str, 5) ;



// Text explod and implode____


$str = "People walking by the Soldiers Monument on the Courthouse Square in Delhi have noticed some changes.";
echo '<pre>';
 print_r(explode(" ", $str));
echo '</pre>';




$str = "OIP.jpgsdv";

$strarry = explode(".", $str);

// echo '<pre>';
//  print_r(explode(".", $str));
// echo '</pre>';

if($strarry[1] == 'jpg'){
    echo "You're allowed to upload file";
}else{
    echo 'You can only upload jpg/jpeg file or'.'...<a href="#">Try again later!</a>';
}



?>

<input type="file">





<?php


$str = "OIP.jpg.png.html.css.php";

$strarry = explode(".", $str);

echo '<pre>';
 print_r(explode(".", $str));
echo '</pre>';

if(end ($strarry)== 'jpg'){
    echo "You're allowed to upload file";
}else{
    echo 'You can only upload jpg/jpeg file or'.'...<a href="#">Try again later!</a>';
}



?> 

<input type="file">




<?php
$name = ["Hemal","Khan","utfyurtgv"];
echo implode("-",$name);



// Array count

$users = [
[
    'id' => 1,
    'Name' => "X"
],
[
    'id' => 2,
    'Name' => "Y"
],
[
    'id' => 3,
    'Name' => "Z"
],
[
    'id' => 4,
    'Name' => "A"
],
[
    'id' => 5,
    'Name' => "B"
],
];
echo count($users);


// Limitation


$users = [
[
    'id' => 1,
    'Name' => "X"
],
[
    'id' => 2,
    'Name' => "Y"
],
[
    'id' => 3,
    'Name' => "Z"
],
[
    'id' => 4,
    'Name' => "A"
],
[
    'id' => 5,
    'Name' => "B"
],
[
    'id' => 5,
    'Name' => "B"
],
];
if(count($users) > 5){
    echo "Sit full";
}else{
    echo "Succes";
}


// Array incertion and deleition


$fruits = ['Orange','Mango','Bannana'];
array_push($fruits,"Apple",['Jackfruit' , 'Guava']);

echo '<pre>';
 print_r($fruits);
echo '</pre>';


$fruits = ['Orange','Mango','Bannana'];
array_pop($fruits);
 echo '<pre>';
 print_r($fruits);
echo '</pre>';


$fruits = ['Orange','Mango','Bannana'];
array_unshift($fruits, 'Apple');
 echo '<pre>';
 print_r($fruits);
echo '</pre>';


$fruits = ['Orange','Mango','Bannana'];
array_shift($fruits,);
 echo '<pre>';
 print_r($fruits);
echo '</pre>';



// Array revers

$fruits = ['Orange','Mango','Bannana'];
print_r (array_reverse($fruits));
 echo '<pre>';
 print_r($fruits);
echo '</pre>';



// Array Diffarence


$user = [
    'id' => 1,
    'Name' => "X"
];
$updateuser = [
    'id' => 1,
    'Name' => "Y"
];

echo '<pre>';
print_r(array_diff($user, $updateuser));
echo '</pre>';


$username = ' sgge';
var_dump(empty($usernam));
if(empty($usernam)){
    echo 'Sorry';
}else{
    echo 'Good to go';
}


$username = 
var_dump(isset($usernam));
?>