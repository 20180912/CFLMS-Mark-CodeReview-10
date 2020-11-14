<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

   <title>By Publisher</title>

</head>
<body>
<div class ="container">
<p class="h1">Publisher</p>

<?php

if ($_GET['id']) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM media INNER JOIN author on media.authorID = author.authorID INNER JOIN publisher ON media.publisherID = publisher.publisherID WHERE publisher.publisherID = {$id}";
    $result = $connect->query($sql);
 
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
           echo "<table  class='table table-bordered'>
           <tr>
               <th>Image</th>
               <td>
               <img src=".$row['image']." alt='image' style='height:20em; object-fit:contain;'>
               </td >
           </tr>
           <tr>
               <th>Title</th>
               <td>".$row['title']."</td>
           </tr >    
           <tr>
               <th>Author</th>
               <td>".$row['first_name']." ".$row['last_name']."</td>
           </tr>
           <tr>
               <th>ISBN</th>
               <td>".$row['ISBN']."</td>
           </tr>
           <tr>
               <th>Short Description</th>
               <td>".$row['short_description']."</td>
           </tr>
           <tr>
               <th>Publish Date</th>
               <td>".$row['publish_date']."</td>
           </tr>
           <tr>
               <th>Publisher</th>
               <td>".$row['name']."</td>
           </tr>
           <tr>
               <th>Type</th>
               <td>".$row['type']."</td>
           </tr>
           <tr>
               <th>Status</th>
               <td>".$row['status']."</td>
           </tr>
       </table>";
    }
    } else {
        echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
    }
}

?>
<td><a href= "index.php"><button type="button" class='btn btn-info'>Back</button ></a ></td >

</div>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body >
</html >