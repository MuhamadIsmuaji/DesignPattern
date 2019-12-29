<?php

// namespace CreationalPatterns\AbstractFactory;

/**
 * The Abstract Factory interface declares creation methods for each distinct
 * product type.
 */
interface TemplateFactory {

    /**
     * Create title template
     * @return TitleTemplate
     */
    public function createTitleTemplate();

    /**
     * Create page template
     * @return PageTemplate
     */
    public function createPageTemplate();

}