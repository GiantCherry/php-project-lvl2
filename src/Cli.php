<?php

namespace DifferenceComputer\Cli;

use Docopt;

function run()
{
    $doc = <<<'DOCOPT'
    Generate diff
    
    Usage:
      gendiff (-h|--help)
      gendiff (-v|--version)
      gendiff [--format <fmt>] <firstFile> <secondFile>
    
    Options:
      -h --help                     Show this screen
      -v --version                  Show version
      --format <fmt>                Report format [default: pretty]
    
    DOCOPT;

    $result = Docopt::handle($doc, array('version' => '1.0.0rc2'));

    print_r($result);

    foreach ($result as $k => $v) {
        echo $k . ': ' . json_encode($v) . PHP_EOL;
    }
}
