<?php
$secret = 1282;
$value = mt_rand(10000, 99999999);
while ($value % $secrer != 0) {
  $value = mt_rand(10000, 99999999);
}
echo "Random value is " . $value;
?>
