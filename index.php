<html>
<body>
<?php
if(isset($_POST['user_name']) && isset($_POST['phone_number'])) {
    $data = $_POST['user_name'] . '-' . $_POST['phone_number'].';';
    $result = file_put_contents('saveServerFile.txt', $data, FILE_APPEND | LOCK_EX);
    if($result === false) {
        die('There was an error writing this file');
    }
    else {
        echo "File has been successfully saved.";
    }
}
else {
   die('No POST DATA to Process');
}

?>


<!--
/* Shell Script to acces the text file and to log in server system file */

/* down vote accepted
In cross-platform, lowest-common-denominator sh you use: */


#!/bin/sh
value = 'cat filepath\saveServerFile.txt'
echo "$value"

/* In bash or zsh, to read a whole file into a variable without invoking cat:*/

#!/bin/bash
value = $(<filepath\saveServerFile.txt)
echo "$value"

-->
</body>
</html>