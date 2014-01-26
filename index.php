<?php require("/srv/http/inc/header.php"); ?>
<meta http-equiv="refresh" content="10">
<?php
$section = file_get_contents('devices_current', NULL, NULL, 134, 900);
?>
<h1>Who is home?</h1>
<?php
if (strpos($section,'**MAC1**') !== false) {
    echo '<span class="success">**NAME1** is home!</span><br />';
    } elseif (strpos($section,'**MAC1**') == false){
    echo '<span class="error">**NAME1** is not home!</span><br />';
}
if (strpos($section,'**MAC2**') !== false) {
    echo '<span class="success">**NAME2** is home!</span><br />';
    } elseif (strpos($section,'**MAC2**') == false){
    echo '<span class="error">**NAME2** is not home!</span><br />';
}
if (strpos($section,'**MAC3**') !== false) {
    echo '<span class="success">*NAME3** is home!</span><br />';
    } elseif (strpos($section,'**MAC3**') == false){
    echo '<span class="error">**NAME3** is not home!</span><br />';
}
if (strpos($section,'**MAC4**') !== false) {
    echo '<span class="success">**NAME4** is home!</span><br />';
    } elseif (strpos($section,'**MAC4**') == false){
    echo '<span class="error">**NAME4** is not home!</span><br />';
}
?>
<h1>Stats</h1>
<?php
$filename = 'devices_current';
if (file_exists($filename)) {
    echo 'Last scan: ' . date ("H:i:s", filemtime($filename)) . ' UTC <br />';
    echo 'Last load: ' . date("H:i:s") . ' UTC <br />';
    echo 'Your IP address: ' . $_SERVER['REMOTE_ADDR'];

}
?>
<?php require("/srv/http/inc/footer.php"); ?>
