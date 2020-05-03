<?php

require_once 'Interviewer.php';

class SalesInterviewer implements Interviewer {
    
    public function askQuestions() {
        echo "Explain me about awesome Sale!!!";
    }
}
