<?php

namespace CreationalPatterns\AbstractFactory;

/**
 * The Balinese variant of the whole page templates.
 */
class BalinesePageTemplate extends BasePageTemplate {
    
    public function getTemplateString() {
        $renderedTitle = $this->titleTemplate->getTemplateString();
        
        return '<div class="balinese">' . $renderedTitle . '</div>';
    }
}
