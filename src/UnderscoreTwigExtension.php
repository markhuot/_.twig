<?php

class UnderscoreTwigExtension extends Twig_Extension
{

    public function getName() {
        return 'underscore';
    }

    public function getGlobals() {
        return array(
            '_' => new UnderscoreTwig\UnderscoreTwig(),
        );
    }
}
