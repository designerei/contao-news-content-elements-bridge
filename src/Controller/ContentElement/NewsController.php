<?php

namespace designerei\ContaoNewsContentElementBridgeBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsContentElement;
use Contao\CoreBundle\Twig\FragmentTemplate;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsContentElement(type: 'news_list', category: 'news')]
#[AsContentElement(type: 'news_reader', category: 'news')]
#[AsContentElement(type: 'news_archive', category: 'news')]
class NewsController extends AbstractContentElementController
{
    protected function getResponse(FragmentTemplate $template, ContentModel $model, Request $request): Response
    {
        $fields = [];

        if ($model->type == 'news_list') {
            $fields = [
                'news_archives',
                'news_readerModule',
                'numberOfItems',
                'news_featured',
                'news_order',
                'skipFirst',
                'perPage',
            ];
        } elseif ($model->type == 'news_archive') {
            $fields = [
                'news_archives',
                'news_readerModule',
                'news_format',
                'news_order',
                'news_jumpToCurrent',
                'perPage',
            ];
        } elseif ($model->type == 'news_reader') {
            $fields = [
                'news_archives',
                'news_keepCanonical',
                'overviewPage',
                'customLabel',
            ];
        }

        $configuration = [];
        foreach ($fields as $field) {
            $configuration[$field] = $model->$field;
        }

        $template->set('configuration', $configuration);

        return $template->getResponse();
    }
}
