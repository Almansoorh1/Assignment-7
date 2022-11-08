<?php
class JSONHelper {
  // Methods
  # Reading the content of a JSON file into a php array
  static function read_json($file) {
    // Read the JSON file
    if (file_exists($file)) {
      $class = file_get_contents($file);
      $classarr=[];
      // Decode the JSON file
      $classarr = json_decode($class,true);
      return $classarr;
    }
  }
  # Saves a php array into a JSON file
  static function write_json($file,$phparray){
    # Opens the file for writing
    if (file_exists($file)) {
      $content = [];
      foreach ($phparray as $key => $value) $content[$key] = $value;
      $new = fopen($file, 'w+');
      fwrite($new, json_encode($content));
      fclose($new);
      return true;
    }
  }
  static function delete_json($file, $index) {
    //		Deletes content of a JSON file
    // Check if file exists
    if (file_exists($file)) {
      $dlt = json_decode(file_get_contents($file), true); // read data from file
      if (!isset($dlt[$index])) return false; // return if row does not exist
      unset($dlt[$index]); // Remove row
      // encode array to json and save to file
      file_put_contents($file, json_encode($dlt));
      return true;
    }
  }
  static function modify_json($file, $index,$classarr){
    //		Modifies content of a JSON file
    if (file_exists($file)) {
      $change = json_decode(file_get_contents($file), true); // read data from file
      if (!isset($change[$index])) return false; // return if row does not exist
      $change[$index] = array_merge($change[$index], $classarr);
      // encode array to json and save to file
      file_put_contents($file, json_encode($change));
      return true;
    }
  }
}
?>
