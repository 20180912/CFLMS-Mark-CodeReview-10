<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   
    <title>Big Library</title>

</head>
<body>

<div class ="container">
  
<p class="display-3 text-info">Big Library</p>
<p class="h3">All</p>
   <table class="table table-bordered mt-5">
       <thead>
           <tr>
               <th scope="col">Image</th>
               <th scope="col">Title</th>
               <th scope="col">Author</th>
               <th scope="col">Publisher</th>
               <th scope="col">Type</th>
               <th scope="col">Status</th>
           </tr>

       </thead>

       <tbody>

       <?php
           $sql = "SELECT * FROM media INNER JOIN author on media.authorID = author.authorID INNER JOIN publisher ON media.publisherID = publisher.publisherID";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td><img src={$row['image']} alt='image' class='img-thumbnail' style='height:15em; object-fit:contain;'></td>
                       <td>" .$row['title']."</td>
                       <td>" .$row['first_name'] ." ". $row['last_name']."</td>
                       <td>" .$row['name']."</td>
                       <td>" .$row['type']."</td>
                       <td>" .$row['status']."</td>
                       <td>
                           <a href='details.php?id=" .$row['mediaID']."'><button type='button' class='btn btn-info'>Details</button></a>
                       </td>
                       <td>
                           <a href='update.php?id=" .$row['mediaID']."'><button type='button' class='btn btn-info'>Edit</button></a>
                           <a href='delete.php?id=" .$row['mediaID']."'><button type='button' class='btn btn-info'>Delete</button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>

       </tbody>
   </table>
    <a href= "create.php"><button type="button" class="btn btn-info">Add Medium</button></a>
<hr>
<p class="h3">By Publisher</p>
    <?php
           $sql = "SELECT publisherID, name FROM publisher";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo "<a href='publisher.php?id=" .$row['publisherID']."'><button type='button' class='btn btn-info'>". $row['name']."</button></a><br>";
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>

</div>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>