<?php

abstract class HiringManager {

    abstract protected function makeInterviewer();

    public function takeInterview() {
        $interviewer = $this->makeInterviewer();
        $interviewer->askQuestions();
    }
}