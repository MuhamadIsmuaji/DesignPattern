<?php

namespace CreationalPatterns\AbstractFactory;

/**
 * This Concrete Product provides Balinese page title templates.
 */
class BalineseTitleTemplate implements TitleTemplate {
    
    public function getTemplateString() {
        return "<h1>Balinese Template String</h1>";
    }
}
