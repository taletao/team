<?php

class Zxl extends Programmer {
    
    protected $blood = '钟氏';

    function __construct() {
        $this->__name = 'zxl';
        $this->_gender = '男';
        $this->_age = '20';
        $this->position = 'PHP程序员';
        $this->_trait = 'PHP程序编写';
    }

    function setName($name) {
        $this->__name = $name;
    }

    private function __setGender($gender) {
        $this->_gender = $gender;
    }

    function getTask($task, $leader) {
        echo $this->__name . '接收来至' . $leader . '的【' . $task . '】任务' . '<br>';
    }

    function think($task) {
        echo $this->__name . '分析【' . $task . '】任务' . '<br>';
    }

    function talk($content) {

        echo $this->__name . '与大家讨论【' . $content . '】内容' . '<br>';
    }

    function writeCode($code) {
        echo $this->__name . '开始编写有关【' . $code . '】的代码' . '<br>';
    }

    function uploadCode($code) {
        echo $this->__name . '检测并上传' . $code . '相关代码完毕' . '<br>';
    }

    function say($content) {
        echo $this->__name . $content . '。<br>';
    }

}