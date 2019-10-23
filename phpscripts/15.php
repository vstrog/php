//Array function
<?php
function makeMonths(){
       
$months = [1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            // Make the month pull-down menu:
echo '<select name="month">';
    foreach ($months as $key => $value) {
        echo "\n<option value=\"$key\">$value</option>";
}
    echo '</select>';
        } //end makeMonths function