<?php

$nama = "Adiprima raharja"; /* variabel global */

function haloDunia () {
  $nama = "Puji raharjo"; # variabel lokal
  echo $nama . '<br>';
}

haloDunia();

echo $nama; # adiprima raharja