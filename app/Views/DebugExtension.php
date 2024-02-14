<?php

namespace App\Views;

use App\Helpers\Config;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class DebugExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('dump', [$this, 'dump'])
        ];
    }

    public function dump($var)
    {
        if ((new Config())->get('production') === true) {
            return;
        }
        dump($var);
    }
}
