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

    Options:
      -h --help                     Show this screen
      -v --version                  Show version

    DOCOPT;


    $args = Docopt::handle($doc, ['version' => '1.0']);

    $result = genDiff(
        $args['<firstFile>'],
        $args['<secondFile>'],
        $args['--format']
    );
    print_r($result);
}
