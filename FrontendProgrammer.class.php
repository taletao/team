<?php

class FrontendProgrammer implements Iengineer {

    private $_name = null;
    protected $_gender = null;
    private $_age = null;
    var $position = null;
    private $_trait = null;

    function setName($name) {
        $this->_name = $name;
    }

    function getTask($task, $content) {
        echo $this->_name . '接收任务' . '<br>';
    }

    function think($task) {
        echo $this->_name . '分析任务' . '<br>';
    }

    function writeCode($code) {
        echo $this->_name . '开始编写前端代码' . '<br>';
    }

    function uploadCode($code) {
        echo $this->_name . '检测并上传代码' . '<br>';
    }

    function say($content) {
        echo $this->_name . $content . '。<br>';
    }

}