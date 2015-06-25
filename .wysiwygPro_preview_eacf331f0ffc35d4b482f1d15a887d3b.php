<?php
if ($_GET['randomId'] != "cXjJjLQlCtPJj27N4EFlHyPC1gE_gXYFlxMdJFPWH0eFCqyfOWly4aBJNR7Q3hmA") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
