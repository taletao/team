<?php

interface Iengineer {
    public function setName($name);

    public function getTask($task, $leader);

    public function think($content);

    public function writeCode($code);

    public function uploadCode($code);
}