<?php

class Tale extends Programmer {

    function __construct() {
        $this->__name = 'tale';
        $this->__gender = '男';
        $this->__age = '20';
        $this->position = 'PHP程序员';
        $this->__trait = 'PHP程序编写';
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