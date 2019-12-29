<?php

// namespace CreationalPatterns\AbstractFactory;
require_once('BasePageTemplate.php');

/**
 * The Javanese variant of the whole page templates.
 */
class JavanesePageTemplate extends BasePageTemplate {
    
    public function getTemplateString() {
        $renderedTitle = $this->titleTemplate->getTemplateString();
        
        return '<div class="javanese">' . $renderedTitle . '</div>';
    }
}
