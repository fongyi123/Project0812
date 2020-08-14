<?php
// header("Access-Control-Allow-Origin: *");
//綠燈憑證
$curDate = date('Y-m-d H:i:s');
echo '{"time": "' . $curDate . '"}';
?>
