<?php

require '../db.php';
if(isset($_POST['name']))
{

$name=$_POST['name'];
$rating=$_POST['rating'];
$review=$_POST['review'];

$sql="INSERT INTO testimonials(name,review,rating)
VALUES('$name','$review','$rating')";

if(mysqli_query($conn,$sql))
{
    header("Location:index.php?review=success");
    exit();
}
else
{
echo mysqli_error($conn);
}

}

?>