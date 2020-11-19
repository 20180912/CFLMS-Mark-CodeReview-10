
<?php 

require_once 'db_connect.php';

if ($_POST) {
    $title = $_POST['title'];
    $title = mysqli_real_escape_string($connect, $title);
    $image = $_POST['image'];
    $authorID = $_POST['authorID'];
    $ISBN = $_POST['ISBN'];
    $short_description = $_POST['short_description'];
    $short_description = mysqli_real_escape_string($connect, $short_description);
    $publish_date = $_POST['publish_date'];
    $publisherID = $_POST['publisherID'];
    $type = $_POST['type'];
    $status = $_POST['status'];

   $id = $_POST['id'];

   $sql = "UPDATE media SET title='$title', image='$image', authorID=$authorID, ISBN=$ISBN, short_description='$short_description', publish_date='$publish_date', publisherID=$publisherID, type='$type', status='$status' WHERE mediaID = {$id}" ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>