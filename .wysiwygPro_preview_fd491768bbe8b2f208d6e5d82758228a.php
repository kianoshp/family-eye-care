<?php
if ($_GET['randomId'] != "R4d5HQ89_LZuZWQ5fwOi9qkoS65bHATYSxQ8qsllBizkXUrhzTVXqbu7GeQblhEC") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
