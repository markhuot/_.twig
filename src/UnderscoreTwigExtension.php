<?php

use Twig_Extension;
use Twig_Filter_Method;

class UnderscoreTwigExtension extends Twig_Extension
{

    public function getName() {
        return 'underscore';
    }

    public function getVariables() {
        return array(
            '_' => new Twig_Variable(new TwigUnderscore()),
        );
    }
}
