<?php

require_once('CSVHelper.php');
// READ
// echo '<pre>'; print_r(CSVHelper::read_csv('csv.csv')); // read a recordset from a CSV file
// WRITE
// CSVHelper::write_csv('csv.csv', [['id' => 6, 'first_name' => 'John', 'last_name' => 'Legend'], ['id' => 12, 'first_name' => 'Paul', 'last_name' => 'T.']]); // write a recordset to a JSON file
// MODIFY
// CSVHelper::modify_csv('csv.csv', array(0 => 1, 1 => 'John', 2 => 'Lennon')); // modify the record in a CSV file
// CSVHelper::modify_csv('csv.csv', array(1 => 2, 2 => 'John', 2 => 'Lennons')); // modify the record in a CSV file
// DELETE
// CSVHelper::delete_csv('csv.csv', 5); // delete the record from a CSV file
?>
