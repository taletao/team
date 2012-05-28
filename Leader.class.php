<?php

class Leader {

    private $__name = null;
    protected $_gender = null;
    private $__age = null;
    var $position = null;
    private $__trait = null;

    function getTask($task, $content) {
        $type = $this->__think($task);
        return $this->__assignTask($task, $type, $content);
    }
    
    function createTask($task, $receivers) {
        return $this->assignTask($task, $receivers);
    }

    function assignTask($task, $receivers = array()) {
        $tasks = array();
        $type_array = array(
            1 => array('carb'),
            2 => array('dragon', 'tale'),
            3 => array('dragon', 'carb', 'tale'),
        );
        return finish_time;
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