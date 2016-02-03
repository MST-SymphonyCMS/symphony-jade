<?php

use Tale\Jade\Compiler;
include('extensions/jade/vendor/autoload.php');

class FormatterJade extends TextFormatter
{
    private $compiler;

    public function __construct()
    {
        $this->compiler = new Compiler([
            'pretty' => true,
            'mode' => MODE_XHTML,
            'paths' => null
        ]);
    }

    public function about()
    {
        return [ 'name' => 'Jade' ];
    }

    public function run($string)
    {
        return trim($this->compiler->compile($string));
    }
}
