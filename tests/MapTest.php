<?php

class MapTest extends PHPUnit_Framework_TestCase {

  private $twig;

  protected function setUp()
  {
    $this->twigLoader = new Twig_Loader_String();
    $this->twigSettings = array('cache' => false, 'autoescape' => false, 'debug' => true);
    $this->twig = new Twig_Environment($this->twigLoader, $this->twigSettings);
    var_dump(class_exists('UnderscoreTwig\UnderscoreTwigExtension'));
    // $this->twig->addExtension(new UnderscoreTwig\UnderscoreTwigExtension);
  }

  public function testSample()
  {
    $this->assertEquals($this->twig->render('Hi {{ name }}', array('name' => 'Mark')), 'Hi Mark');
  }

}
