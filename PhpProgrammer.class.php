<?php

class PhpProgrammer {

    $this->__name = '';
    $this->_gender = '';
    $this->_age = '';
    $this->position = '';
    $this->_trait = '';

    private function __setName($name) {
        $this->__name = $name;
    }

    private function __setGender($gender) {
        $this->_gender = $gender;
    }

    private function __getTask($task, $leader) {
        echo $this->__name . '接收来至' . $leader . '的【' . $task . '】任务' . '<br>';
    }

    private function __think($task) {
        echo $this->__name . '分析【' . $task . '】任务' . '<br>';
    }

    private function __talk($content) {

        echo $this->__name . '与大家讨论【' . $content . '】内容' . '<br>';
    }

    private function __writeCode($code) {
        echo $this->__name . '开始编写有关【' . $code . '】的代码' . '<br>';
    }

    private function __uploadCode($code) {
        echo $this->__name . '检测并上传' . $code . '相关代码完毕' . '<br>';
    }

    private function __say($content) {
        echo $this->__name . $content . '。<br>';
    }

}