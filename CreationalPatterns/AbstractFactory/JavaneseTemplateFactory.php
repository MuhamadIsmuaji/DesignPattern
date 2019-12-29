<?php

// namespace CreationalPatterns\AbstractFactory;
require_once('TemplateFactory.php');
require_once('JavanesePageTemplate.php');
require_once('JavaneseTitleTemplate.php');

/**
 * Each Concrete Factory corresponds to a specific variant (or family) of
 * products.
 *
 * This Concrete Factory creates Javanese templates.
 */
class JavaneseTemplateFactory implements TemplateFactory {
    
    public function createTitleTemplate() {
        return new JavaneseTitleTemplate;
    }

    public function createPageTemplate() {
        $pageTemplate = new JavanesePageTemplate($this->createTitleTemplate());

        return $pageTemplate->getTemplateString();
    }

}
