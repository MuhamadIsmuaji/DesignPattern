<?php

require_once 'HiringManager.php';
require_once 'DeveloperInterviewer.php';

class DeveloperManager extends HiringManager {
    
    protected function makeInterviewer() {
        return new DeveloperInterviewer();
    }
}
