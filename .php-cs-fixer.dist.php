<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/src')
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'short'],
        'phpdoc_annotation_without_dot' => false,
        'phpdoc_summary' => false,
        'yoda_style' => false,
        'increment_style' => ['style' => 'post'],
    ])
    ->setFinder($finder)
;
