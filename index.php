<?php

class Task{
    public $description;
    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }

    public function description()
    {
        return $this->description;
    }
}

$tasks = [
    new Task("go to market"),
    new Task("finish my screencast"),
    new Task("Clean my room")
];

$tasks[1]->complete();

require 'index.view.php';
