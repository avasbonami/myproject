<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .error {color: #FF0000;}
</style>
</head>
<body>
<?php

$nameErr = $emailErr = $genderErr = $ContactErr = $addressErr = "";
$name = $email = $gender = $comment = $Contact = $address = "";
print_r($data);
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) 
    {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid email format";
    }
  }
  if (empty($_POST["gender"])) 
  {
    $genderErr = "Gender is required";
  } else 
  {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["contact"]))
  {
      $Contact = test_input($_POST['Contact']);
  }
  if (empty($_POST["name"])) 
  {
    $address = "Give your address";
  } else {
    $address = test_input($_POST["address"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$address)) 
    {
      $addressErr = "Only letters and white space allowed";
    }
  }
}
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
  <h2>Enter the Information </h2>
<p><span class="error">* Enter the required Information</span></p>
<form method="post" action="newform1.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="email"  name="email" value="<?php echo $email;?> " required>
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Contact: <input type="number" name="contact" value="<?php echo $Contact;?>">
  <span class="error"><?php echo $Contact;?></span>
  <br><br>
  Address: <textarea name="address" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
    
 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>