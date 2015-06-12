<?php

class UnderscoreTwig {

  public function lists($oldArray, $key)
  {
    $newArray = array();
    foreach ($oldArray as $row) {
      if (is_object($row) && isset($row->{$key})) {
        $newArray[] = $row->{$key};
      }
      else if (is_array($row) && isset($row[$key])) {
        $newArray[] = $row[$key];
      }
    }
    return $newArray;
  }

}
