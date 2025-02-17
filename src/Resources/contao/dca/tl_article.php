<?php

$GLOBALS['TL_DCA']['tl_article']['fields']['article_teaser_image'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['article_teaser_image'],
    'exclude'   => true,
    'inputType' => 'fileTree',
    'eval'      => [
        'files'        => true,
        'filesOnly'    => true,
        'extensions'   => 'jpg,jpeg,png,svg,gif',
        'fieldType'    => 'radio',
        'mandatory'    => false,
        'tl_class'     => 'clr w50'
    ],
    'sql'       => "binary(16) NULL"
];

// Feld in die Palette einfügen
Contao\CoreBundle\DataContainer\PaletteManipulator::create()
    ->addField('article_teaser_image', 'teaser_legend', Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('default', 'tl_article');
