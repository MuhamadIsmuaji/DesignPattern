<?php

// namespace CreationalPatterns\AbstractFactory;

class Page {
    public function render(TemplateFactory $templateFactory) {
        return $templateFactory->createPageTemplate();
    }
}
