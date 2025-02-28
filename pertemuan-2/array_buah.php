<?php

  // Mendefinisikan Array
  $ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];

  // Menampilkan Array Buah index ke-1
  echo $ar_buah[1];


  // Menampilkan Jumlah(count()) buah
  echo "<br/>JUmlah Buah : " . count($ar_buah);

  // Menampilkan Seluruh Buah
  echo "<ol>";
  foreach ($ar_buah as $buah) {
    echo "<li>" . $buah . "</li>";
  }
  echo "</ol>";

  // Menambahkan buah
  $ar_buah[] = "Apel";

  //Menghapus(unset([])) buah index ke-1 
  unset($ar_buah[1]);

  // mengubah Index ke 2 menjadi Manggis
  $ar_buah[2] = "Manggis";

  // Menampilkan Seluruh Buah dengan Indexnya
  echo "<ul>";
  foreach ($ar_buah as $i => $Buah) {
    echo "<li>Buah Index-" . $i . " adalah : " . $Buah . "</li>";
  }
  echo "</ul>";

  echo "<ul>";
  sort($ar_buah);
  foreach ($ar_buah as $i => $Buah) {
    echo "<li>Buah Index-" . $i . " adalah : " . $Buah . "</li>";
  }
  echo "</ul>";

?>