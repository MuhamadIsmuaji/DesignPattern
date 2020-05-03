<?php

require_once 'HiringManager.php';
require_once 'SalesInterviewer.php';

class SalesManager extends HiringManager {
    
    protected function makeInterviewer() {
        return new SalesInterviewer();
    }
}
