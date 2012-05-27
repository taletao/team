<?php

class Jimmy extends Programmer {

    private $__name = null;
    protected $_gender = null;
    private $__age = null;
    var $position = null;
    private $__trait = null;

    function __construct() {
        $this->__name = 'Jimmy';
        $this->__gender = '男';
        $this->__age = '28';
        $this->position = 'PHP程序员';
        $this->__trait = '思考、统筹、分配';
    }

    function createTask($task, $receivers) {
        return $this->assignTask($task, $receivers);
    }

    function assignTask($task, $receivers = array()) {

        if (!$task || empty($receivers) || !is_array($receivers)) {
            return false;
        }
        foreach ($receivers as $key => $value) {
            $key = new $value();
            $key->getTask($task, $this->__name);
        }
    }

    function talkAboutTask($receivers, $taskContent) {
        foreach ($receivers as $key => $value) {
            $key = new $value();
            $key->talk($taskContent);
        }
    }
    
    function talk($content) {

        echo $this->__name . '与大家讨论【' . $content . '】内容' . '<br>';
    }
    
    function say($content){
        echo $this->__name.$content.'。<br>';
    }
    
    function examine($task){
        if($task){
            echo '任务'.$task.'审核通过，继续下一个动作</br>';
        }else{
            echo '任务'.$task.'审核未通过，重新上一个动作</br>';
        }
    }

}