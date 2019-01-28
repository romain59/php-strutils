<?php
/**
 * Created by PhpStorm.
 * User: romainbon
 * Date: 2019-01-28
 * Time: 15:37
 */

require"classe/StrUtils.php";

$myStr = new StrUtils('php is awesome !');

echo $myStr->bold();
echo '<br><br>';
echo $myStr->italic();
echo '<br><br>';
echo $myStr->underline();
echo '<br><br>';
echo $myStr->capitalize();
echo '<br><br>';
echo $myStr->uglefy();


