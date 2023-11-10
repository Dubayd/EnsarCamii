<?php 
  $path = "contact.php"; 
  
  $file1 = basename($path); 
  $file2 = basename($path, ".php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $file2;?>
    </title>
</head>
<body>
    
</body>
</html>