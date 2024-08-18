<?
$username = filter_input(INPUT_POST,'email');
$password = filter_input(INPUT_POST,'password');
if(!empty($username)){
if(!empty($password)){
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="youtube";

 $conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
 if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
 }
 else{
    $sql="INSERT INTO account (email,password) values('$email','$password')";
    if($conn->query($sql)){
        echo"New record is inserted sucessfully";
    }
    else{
        echo "Error:".$sql."<br>".$conn->error;
    }
    $conn->close();
 }   
}    
else{
    echo"possword should not be empty";
    die();
}
}
else{
    echo"email should not be empty";
    die();
}
?>