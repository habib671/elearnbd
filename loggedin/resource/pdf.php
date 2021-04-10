
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pdf_style.css">
</head>

</html>

<table>
 <thead>
  <th>Question Name</th>
  <th>Download Link</th>
 
  </thead>
 </table>
<?php 
	include "config.php";
   if (isset($_GET['tablename'])){
    $table = $_GET['tablename'];
   }
	$sql = "SELECT * FROM ${table}";
	$result = $con->query($sql);
	
	if($result->num_rows > 0){
		while ($row = $result->fetch_assoc()) { ?>



 <table>
  <tr>
      
      <td>
      <?php echo  $row["name"]." " ; ?>	
      </td>
         
      <td>
      <a target="_blank" href="
			<?php
			echo $row["link"];
			?> "
			">Download</a>
      </td>
      
  </tr>
 
  </table>
  <?php
}

}
?>
		