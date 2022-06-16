<html>
<head>
<title>PHP test</title>
</head>
<body>
<?php
$username = $_POST["usernamelog"];
$password = $_POST["passwordlog"];
$access = 0;
$invalid = 0;
if($username == "" && $password == ""){
   $invalid = 1;
}
$conn = new mysqli("localhost", "root", "Rado1000", "main");
//$stmt = $conn->prepare('SELECT * FROM employees WHERE name = ?');
//$stmt->bind_param('s', $name);
//$stmt->execute();
$sql = "SELECT username, token FROM tokenapi";
$result = $conn->query($sql);
if($result->num_rows > 0){
   while($row = $result->fetch_assoc()){
      if($username == $row["username"] && $password == $row["token"]){
         echo "You signed up successfully";
         $access = 1;
      }
   }
   if($access == 0 && $invalid != 1){
      echo "Incorrect username or password!";
   }
}else{
   echo "The table is empty";
}
?>
<center><h1><?php echo "This is a test for PHP!"?></h1></center>
<form id="formlog" action="index.php" method="POST">
<p>
   <label>Username: </label>
   <input type="text" id="usernamelog" name="usernamelog"/>
</p>
<p>
   <label>Password: </label>
   <input type="text" id="passwordlog" name="passwordlog"/>
</p>
<input type="submit" id="submitlog" name="submitlog" value="Submit"/>
</form>
<br/>
<br/>
<br/>
<form id="formreg" action="register.php" method="POST">
<p>
   <label>Username: </label>
   <input type="text" id="usernamereg" name="usernamereg"/>
</p>
<p>
   <label>Password: </label>
   <input type="text" id="passwordreg" name="passwordreg"/>
</p>
<input type="submit" id="submitreg" name="submitreg" value="Submit"/>
<br/>
<br/>
<br/>
</form>
<?php
echo gethostbyname("google.com");
?>
</body>
</html>
