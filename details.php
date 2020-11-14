<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM media INNER JOIN author on media.authorID = author.authorID INNER JOIN publisher ON media.publisherID = publisher.publisherID WHERE mediaID = {$id}";
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

   <title>Details</title>

</head>
<body>
<div class ="container">
<p class="h1">Details</p>
<table  class="table table-bordered">
           <tr>
               <th>Image</th>
               <td>
               <img src=<?php echo $data['image'] ?> alt='image' style='height:20em; object-fit:contain;'>
               </td >
           </tr>
           <tr>
               <th>Title</th>
               <td><?php echo $data['title'] ?></td>
           </tr >    
           <tr>
               <th>Author</th>
               <td><?php echo $data['first_name']." ".$data['last_name'] ?></td>
           </tr>
           <tr>
               <th>ISBN</th>
               <td><?php echo $data['ISBN'] ?></td>
           </tr>
           <tr>
               <th>Short Description</th>
               <td><?php echo $data['short_description'] ?></td>
           </tr>
           <tr>
               <th>Publish Date</th>
               <td><?php echo $data['publish_date'] ?></td>
           </tr>
           <tr>
               <th>Publisher</th>
               <td><?php echo $data['name'] ?></td>
           </tr>
           <tr>
               <th>Type</th>
               <td><?php echo $data['type'] ?></td>
           </tr>
           <tr>
               <th>Status</th>
               <td><?php echo $data['status'] ?></td>
           </tr>
       </table>
       <td><a href= "index.php"><button type="button" class='btn btn-info'>Back</button ></a ></td >


</div>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body >
</html >

<?php
}
?>