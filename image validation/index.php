<?php

require_once "func/functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    
<form enctype="multipart/form-data" method="post" action="display_image.php">
<?php

echo createFormInput("First name","firstname");
echo createFormInput("Last Name","lastname");
echo createFormInput("Email Address","email");
echo createFormInput("Address","address","textarea");
echo createFormInput("Photo","photo","file");
echo createButton();
?>
</form>
</body>
</html>