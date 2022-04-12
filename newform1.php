<?php
$data = array("Name"=>$_POST["name"],"Email"=>$_POST["email"],"Contact"=>$_POST["contact"],"Gender"=>$_POST["gender"],"Address"=>$_POST["address"],);
print_r($data);
echo "<h2>Your Information:</h2>";
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['gender'];
$contact = $_POST['contact'];
$address = $_POST['address'];
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $contact;
    echo "<br>";
    echo $address;
    echo "<br>";

?>