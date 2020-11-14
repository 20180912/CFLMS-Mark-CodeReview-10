<?php 

require_once 'db_connect.php';

if ($_POST) {
    $title = $_POST['title'];
    $image = $_POST['image'];
    $authorID = $_POST['authorID'];
    $ISBN = $_POST['ISBN'];
    $short_description = $_POST['short_description'];
    $publish_date = $_POST['publish_date'];
    $publisherID = $_POST['publisherID'];
    $type = $_POST['type'];
    $status = $_POST['status'];

    $sql = "INSERT INTO media (title, image, authorID, ISBN, short_description, publish_date, publisherID, type, status) VALUES ('$title', '$image', $authorID, $ISBN, '$short_description', '$publish_date', $publisherID, '$type', '$status')";
    if($connect->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>" ;
        echo "<a href='../create.php'><button type='button' class='btn btn-info'>Back</button></a>";
        echo "<a href='../index.php'><button type='button' class='btn btn-info'>Home</button></a>";
    } else  {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $connect->close();
}

?>