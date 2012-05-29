<?php

class FrontendProgrammer implements Iengineer {

    private $_name = null;
    protected $_gender = null;
    private $_age = null;
    public $position = null;
    private $_trait = null;

    public function setName($name) {
        $this->_name = $name;
    }

    public function getTask($task, $content) {
        echo $this->_name . '接收' . '【' . $task . '】任务,内容为' . $content . '<br>';
    }

    public function think($task) {
        echo $this->_name . '分析【' . $task . '】任务' . '<br>';
    }

    private function __writeCode($code) {
        echo $this->_name . '开始编写有关【' . $code . '】的前端代码' . '<br>';
    }

    public function uploadCode($code) {
        echo $this->_name . '检测并上传' . $code . '相关代码完毕' . '<br>';
    }

    public function say($content) {
        echo $this->_name . $content . '。<br>';
    }

}