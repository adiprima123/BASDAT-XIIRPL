<?php

//cara 1
$temanfavorit = ['fayi', 'iqbal', 'hasan', 'yoga', 'zidan', 'haikal', 'pratama', 'putra', 'fajar', 'adit'];
echo "10 teman favorit";
echo "<br />";
print_r($temanfavorit);


echo "<hr />";
array_push($temanfavorit, "pratama", "fathir");
echo "2 teman favorit";
echo "<br />";
echo $temanfavorit [1];
echo "<br />";
echo $temanfavorit [2];
echo "<hr />";

echo "total semua teman";
echo "<br />";
print_r($temanfavorit);
echo "<hr />";
?>