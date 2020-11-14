<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   
    <title>Add Media</title>

</head>
<body>
<div class ="container">
<fieldset >
   <legend>Add Media</legend>

   <form  action="actions/a_create.php" method= "post">
       <table class="table table-bordered">
           <tr>
               <th>Image</th >
               <td><input  type="text" name="image"/></td >
           </tr>    
           <tr>
               <th>Title</th>
               <td><input  type="text" name= "title"/></td>
           </tr>
           <tr>
               <th>Author ID</th>
               <td><input  type="text" name= "authorID"/> (only use 1 or 2)</td>
           </tr>
           <tr>
               <th>ISBN</th>
               <td><input  type="text" name= "ISBN"/></td>
           </tr>
           <tr>
               <th>Short Description</th>
               <td><input  type="text" name= "short_description"/></td>
           </tr>
           <tr>
               <th>Publish Date</th>
               <td><input  type="text" name= "publish_date"/></td>
           </tr>
           <tr>
               <th>Publisher ID</th>
               <td><input  type="text" name= "publisherID"/> (only use 1, 2, or 3)</td>
           </tr>
           <tr>
               <th>Type</th>
               <td>
               <input type="radio" id="book" name="type" value="book">
               <label for="book">book</label><br>
               <input type="radio" id="CD" name="type" value="CD">
               <label for="CD">CD</label><br>
               <input type="radio" id="DVD" name="type" value="DVD">
               <label for="DVD">DVD</label>
               </td>
           </tr>
           <tr>
               <th>Status</th>
               <td>
               <input type="radio" id="available" name="status" value="available">
               <label for="available">available</label><br>
               <input type="radio" id="reserved"name="status" value="reserved">
               <label for="reserved">reserved</label><br>
               </td>
           </tr>
           <tr>
                <td><a href= "index.php"><button type="button" class="btn btn-info">Back</button></a></td>
                <td><button type="submit" class="btn btn-info">Insert Media</button></td>
           </tr >
       </table>
   </form>

</fieldset >
</div>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>