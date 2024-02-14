<?php

namespace App\Views;

use App\Helpers\Config;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class ConfigExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('config', [$this, 'config'])
        ];
    }

    public function config($var, $default = null)
    {
        return config($var, $default);
    }
}
