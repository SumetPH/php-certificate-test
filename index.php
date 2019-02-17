<?php
date_default_timezone_set("Asia/Bangkok");

$conn = mysqli_connect('localhost', 'root', '12345678', 'db_words');
mysqli_set_charset('utf8');

if (!$conn) {
    echo 'fail';
}

if (!filter_var('not@gmail.com', FILTER_VALIDATE_EMAIL)) {
    echo "err";
}

echo date('d-m-Y');

// echo "
//     <script> 
//         if(confirm('test')){
//             window.location = 'index.html'    
//         } else {
//             window.location = 'index.php'
//         }
//     </script>
// ";

$path = $_FILES['file']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);

echo $ext;

// if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
//     $password = test_input($_POST["password"]);
//     $cpassword = test_input($_POST["cpassword"]);
//     if (strlen($_POST["password"]) <= '8') {
//         $passwordErr = "Your Password Must Contain At Least 8 Characters!";
//     }
//     elseif(!preg_match("#[0-9]+#",$password)) {
//         $passwordErr = "Your Password Must Contain At Least 1 Number!";
//     }
//     elseif(!preg_match("#[A-Z]+#",$password)) {
//         $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
//     }
//     elseif(!preg_match("#[a-z]+#",$password)) {
//         $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
//     }
// }
// elseif(!empty($_POST["password"])) {
//     $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
// } else {
//      $passwordErr = "Please enter password   ";
// }
