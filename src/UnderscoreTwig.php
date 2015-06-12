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


	/**
	 * Wraps the content in a tag with optional css class names
	 * using Emmet-style sytax for class names (e.g. 'div.foo.bar')
	 * only if the content is not empty.
	 * @todo Implement other attributes like id, data-, etc
	 */
	public function wrapIfNotEmpty($str, $tag = 'p')
	{
		$result = '';

		if ($str)
		{
			$parts = explode('.', trim($tag));
			$tag   = array_shift($parts);
			$class = implode(' ', $parts);
			if ($class) $class = " class=\"$class\"";
			$result .= "<{$tag}{$class}>{$str}</{$tag}>";
		}

		return $result;
	}
}
