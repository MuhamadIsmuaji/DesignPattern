<?php

// namespace CreationalPatterns\AbstractFactory;

/**
 * Each distinct product type should have a separate interface. All variants of
 * the product must follow the same interface.
 *
 * For instance, this Abstract Product interface describes the behavior of page
 * title templates.
 */
interface TitleTemplate {

    /**
     * Get template string
     * @return string
     */
    public function getTemplateString();
}