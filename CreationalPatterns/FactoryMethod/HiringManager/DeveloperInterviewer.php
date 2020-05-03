<?php

require_once 'Interviewer.php';

class DeveloperInterviewer implements Interviewer {
    
    public function askQuestions() {
        echo "Explain me about Design Pattern!!!";
    }
}
