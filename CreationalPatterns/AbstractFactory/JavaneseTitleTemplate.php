<?php

// namespace CreationalPatterns\AbstractFactory;
require_once('TitleTemplate.php');

/**
 * This Concrete Product provides Javanese page title templates.
 */
class JavaneseTitleTemplate implements TitleTemplate {
    
    public function getTemplateString() {
        return "<h1>Javanese Template String</h1>";
    }
}
