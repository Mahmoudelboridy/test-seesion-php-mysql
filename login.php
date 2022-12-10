<?php
include ('conect.php');
?>

<form action="" method="Post">
    name:
    <input type="text" name="name" /><br><br>
    password:
    <input type="password" name="pass" /><br><br>
    <button name="btn">login</button>
</form>

<?php
if(isset($_POST['btn'])){
$name=$_POST['name'];
$pass=$_POST['pass'];
$select="SELECT * FROM `login` WHERE name='$name' AND pass='$pass'";
$query=mysqli_query($con,$select);
$row=mysqli_num_rows($query);
if($row>0){
    echo "<script>alert('succefully login')</script>";
    $rown=mysqli_fetch_assoc($query);
    $id=$rown['id'];
    session_start();
$_SESSION['name']=$name;
$_SESSION['id']=$id;
echo "<script>window.open('indo.php','_self')</script>";

}
}

?>