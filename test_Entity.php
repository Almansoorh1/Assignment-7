<?php

require_once('Entity.php');

//JSON
// READ
// echo '<pre>';print_r(JSONHelper::read_json('json.json')); // read a recordset from a JSON file
// WRITE
// JSONHelper::write_json('json.json', [['id' => 6, 'first_name' => 'John', 'last_name' => 'Doe'], ['id' => 7, 'first_name' => 'Paul', 'last_name' => 'Degrasso']]); // write a recordset to a JSON file
// MODIFY
// JSONHelper::modify_json('json.json', 0, ['id' => 1, 'first_name' => 'John', 'last_name' => 'Lennon']); // modify the record in a JSON file
///JSONHelper::modify_json('json.json',0,['firstname'=>'John','lastname'=>'Lennon','birthdate'=>'1940-10-09']);
// DELETE
//JSONHelper::delete_json('json.json', 5); // delete the first record from a JSON file

//CSV
// READ
// echo '<pre>'; print_r(CSVHelper::read_csv('csv.csv')); // read a recordset from a CSV file
// WRITE
// CSVHelper::write_csv('csv.csv', [['id' => 6, 'first_name' => 'John', 'last_name' => 'Legend'], ['id' => 12, 'first_name' => 'Paul', 'last_name' => 'T.']]); // write a recordset to a JSON file
// MODIFY
// CSVHelper::modify_csv('csv.csv', array(0 => 1, 1 => 'John', 2 => 'Lennon')); // modify the record in a CSV file
// CSVHelper::modify_csv('csv.csv', array(1 => 2, 2 => 'John', 2 => 'Lennons')); // modify the record in a CSV file
// DELETE
// CSVHelper::delete_csv('csv.csv', 5); // delete the record from a CSV file
