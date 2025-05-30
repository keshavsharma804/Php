<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .body-1 {background-color: gold;}
        .body-2 {background-color: greenyellow;}
        .body-3 {background-color: pink;}
        .body-4 {background-color: blanchedalmond;}
        .body-5 {background-color: orange;}
        .body-6 {background-color: plum;}
        
    </style>
</head>
<body class="body- <?php echo rand (1,6); ?>">
   
    <?php echo '<h1> Hello From Php</h1>'; ?>
</body>
</html>