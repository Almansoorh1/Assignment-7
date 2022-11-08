<?php
require_once('JSONHelper.php');
require_once('CSVHelper.php');
class Entity {
  function read($file)
  {
    $_extension = pathinfo($file, PATHINFO_EXTENSION);
    if ($_extension == 'json') {
      return JSONHelper::read($file);
    } elseif ($_extension == 'csv') {
      return CSVHelper::read($file);
    }
  }
  //WRITE
  function write($file, $data)
  {
    $_extension = pathinfo($file, PATHINFO_EXTENSION);
    if ($_extension == 'json') {
      return JSONHelper::write($file, $data);
    } elseif ($_extension == 'csv') {
      return CSVHelper::write($file, $data);
    }
  }
  //MODIFY
  function modify($file, $index = 0, $data)
  {
    $_extension = pathinfo($file, PATHINFO_EXTENSION);
    if ($_extension == 'json') {
      return JSONHelper::update($file, $index, $data);
    } elseif ($_extension == 'csv') {
      return CSVHelper::update($file, $data);
    }
  }
  //DELETE
  function delete($file, $index)
  {
    $_extension = pathinfo($file, PATHINFO_EXTENSION);
    if ($_extension == 'json') {
      return JSONHelper::delete($file, $index);
    } elseif ($_extension == 'csv') {
      return CSVHelper::delete($file, $index);
    }
  }
}
?>
