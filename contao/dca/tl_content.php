<?php

use Contao\Controller;
use Contao\System;

Controller::loadDataContainer('tl_module');
System::loadLanguageFile('tl_module');

// palettes
$GLOBALS['TL_DCA']['tl_content']['palettes']['news_list'] = '
    {type_legend},title,type,headline;
    {config_legend},news_archives,news_readerModule,numberOfItems,news_featured,news_order,skipFirst,perPage;
    {template_legend},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop;
';

$GLOBALS['TL_DCA']['tl_content']['palettes']['news_archive'] = '
    {type_legend},title,type,headline;
    {config_legend},news_archives,news_readerModule,news_format,news_order,news_jumpToCurrent,perPage;
    {template_legend},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop;
';

$GLOBALS['TL_DCA']['tl_content']['palettes']['news_reader'] = '
    {type_legend},title,type,headline;
    {config_legend},news_archives,news_keepCanonical;
    {news_overview_legend},overviewPage,customLabel;
    {template_legend},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop;
';

// fields
$fields = [
    'news_archives',
    'news_featured',
    'news_jumpToCurrent',
    'news_readerModule',
    'news_format',
    'news_order',
    'news_showQuantity',
    'news_keepCanonical',
    'skipFirst',
    'overviewPage',
    'customLabel',
];

foreach ($fields as $field) {
    $GLOBALS['TL_DCA']['tl_content']['fields'][$field] = $GLOBALS['TL_DCA']['tl_module']['fields'][$field];
}

// translations
$GLOBALS['TL_LANG']['CTE']['news'] = &$GLOBALS['TL_LANG']['FMD']['news'];
$GLOBALS['TL_LANG']['CTE']['news_list'] = &$GLOBALS['TL_LANG']['FMD']['newslist'];
$GLOBALS['TL_LANG']['CTE']['news_archive'] = &$GLOBALS['TL_LANG']['FMD']['newsarchive'];
$GLOBALS['TL_LANG']['CTE']['news_reader'] = &$GLOBALS['TL_LANG']['FMD']['newsreader'];
$GLOBALS['TL_LANG']['tl_content']['news_overview_legend'] = &$GLOBALS['TL_LANG']['tl_module']['news_overview_legend'];
