<?php 
$indictedText = $_GET['indictedText'];
$indictedWord = $_GET['indictedWord']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title> PHP-Badwords </title>
</head>

<body>
    
    <p> La stringa ricevuta è: "<?php echo $indictedText ?>"</p>
    <p> La stringa è lunga <?php echo strlen("$indictedText") ?> caratteri </p>
    <p> La stringa censurata è: " <?php echo str_replace("$indictedWord", "***", $indictedText) ?> "</p>

</body>
</html>