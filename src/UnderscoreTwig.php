<?php

class UnderscoreTwig {

  public function lists($oldArray, $key)
  {
    $newArray = array();
    foreach ($oldArray as $row) {
      if (isset((object)$row->{$key})) {
        $newArray[] = (object)$row->{$key};
      }
    }
    return $newArray;
  }

  public function links($objects, $title, $href, $prefix='')
  {
    $arrayOfLinks = array();
    foreach ($objects as (object)$object) {
      $arrayOfLinks[] = '<a href="'.$prefix.$object->{$href}.'">'.$object->{$title}.'</a>';
    }
    return $arrayOfLinks;
  }

  public function map($oldArray, $mappings)
  {
    $newArray = array();
    foreach ($oldArray as $index => $row) {
      foreach ($mappings as $newKey => $oldKey) {
        if (isset((object)$row->{$oldKey})) {
          $newArray[$index][$newKey] = (object)$row->{$oldKey};
        }
      }
    }
    return $newArray;
  }

  public function wrapIfNotEmpty($wrap='<p>', $variable, $close='</p>)
  {
    if (!empty($variable)) {
      return $wrap.$variable.$close;
    }

    return '';
  }

}
