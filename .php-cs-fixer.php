<?php
/*
 * This document has been generated with
 * https://mlocati.github.io/php-cs-fixer-configurator/#version:3.0.0-beta.2|configurator
 * you can change this configuration by importing this file.
 */

$finder = PhpCsFixer\Finder::create()
    ->exclude('somedir')
    ->in(__DIR__);

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => ['syntax'=>'short'],
        'phpdoc_order' => true,
    ])
    ->setFinder($finder);
