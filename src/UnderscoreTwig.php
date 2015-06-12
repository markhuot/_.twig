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

}
