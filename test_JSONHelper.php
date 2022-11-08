<?php

require_once('JSONHelper.php');
// READ
 echo '<pre>';print_r(JSONHelper::read_json('json.json')); // read a recordset from a JSON file
// WRITE
// JSONHelper::write_json('json.json', [['id' => 6, 'first_name' => 'John', 'last_name' => 'Doe'], ['id' => 7, 'first_name' => 'Paul', 'last_name' => 'Degrasso']]); // write a recordset to a JSON file
// MODIFY
// JSONHelper::modify_json('json.json', 0, ['id' => 1, 'first_name' => 'John', 'last_name' => 'Lennon']); // modify the record in a JSON file
///JSONHelper::modify_json('json.json',0,['firstname'=>'John','lastname'=>'Lennon','birthdate'=>'1940-10-09']);
// DELETE
//JSONHelper::delete_json('json.json', 5); // delete the first record from a JSON file
?>
