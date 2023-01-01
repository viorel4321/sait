<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  
   <?php
 
 $connect = mysqli_connect("localhost", "admin", "leroiv461", "essence3");

 $query = "select * from tabel";
 
 $result = mysqli_query($connect, $query);
 
 echo mysqli_num_rows($result);

 $row = mysqli_fetch_assoc($result);
echo $row['descriere'];

printf ("%s (%s) %s \n", $row["id"], $row["descriere"], $row["id"]);
   ?>
   


  </body>
</html>
