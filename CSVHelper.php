<?php
// CSV Class Methods
class CSVHelper {
  // READ
  static function read_csv($file)
  {
    if (file_exists($file) and is_file($file)) { // Check if file exists before proceeding
      $handle = fopen($file, 'r'); // open the file
      while (($info = fgetcsv($handle)) !== false) {
        $content[] = $info; // append csv to array
      }
      fclose($handle); // close the file
    }
    return $content; // return the array
  }
  // WRITE
  static function write_csv($file, $data)
  {
    if (file_exists($file) and is_file($file)) { // check to make sure file is being passed
      $handle = fopen($file, 'w+'); // open file in write mode
      foreach ($data as $index) {
        fputcsv($handle, $index); // add new row to csv file
      }
      fclose($handle);
    }
    return true;
  }
  // UPDATE
  static function modify_csv($file, $values)
  {
    $csv_info = [];
    if (file_exists($file) and is_file($file)) { // Check if file exists before proceeding
      $handle = fopen($file, 'r'); // open the file
      while (($info = fgetcsv($handle)) !== false) {
        $csv_info[] = $info; // append csv to array
      }
      fclose($handle); // close the file
    }
    foreach ($csv_info as $_find => $_modify) {
      if ($_modify[0] == array_values($values)[0]) { // check if passed key matches
        $csv_info[$_find] = array_replace($csv_info[$_find], $values); // replace the associative array within the multidimensinal array
      }
    }
    $change_ = fopen($file, 'w'); //write-only mode
    foreach ($csv_info as $_data) { //Re-write the edited array to csv
      fputcsv($change_, $_data);
    }
    fclose($change_);
    return true;
  }
  // DELETE
  static function delete_csv($file, $index)
  {
    $csv_info = [];
    if (file_exists($file) and is_file($file)) { // Check if file exists before proceeding
      $handle = fopen($file, 'r'); // open the file
      while (($info = fgetcsv($handle)) !== false) {
        $csv_info[] = $info; // append csv to array
      }
      fclose($handle); // close the file
    }
    foreach ($csv_info as $_find => $_delete) {
      if ($_delete[0] == $index) { // Match $element with id in csv
        unset($csv_info[$_find]); // Remove row
      }
    }
    $delete_ = fopen($file, 'w'); //write-only mode
    foreach ($csv_info as $_data) { //Re-write the edited array to csv
      fputcsv($delete_, $_data);
    }
    fclose($delete_);
    return true;
  }
}
?>
