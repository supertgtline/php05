<?php
$a = array("r"=>1,"t"=> 2,"y"=> 3,"u"=> 17);
$i = 0; /* for illustrative purposes only */
echo $a["t"];
echo "<br/>";
foreach ($a as $v) {
    echo "\$a[$i] => $v.\n";
    $i++;
}

?>