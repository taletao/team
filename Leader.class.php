<?php
class Leader {

    private $_name = null;
    protected $_gender = null;
    private $_age = null;
    public $position = null;
    private $_trait = null;

    function setName($name) {
        $this->_name = $name;
    }

    function getTask($task, $content) {
        $type = $this->__think($task);
        return $this->__assignTask($task, $type, $content);
    }

    private function __think($task) {
        if ('平保' == $task) {
            $type = 3;
        } else if ('参数调整' == $task) {
            $type = 2;
        }if ('界面美化' == $task) {
            $type = 1;
        }
        return $type;
    }

    private function __assignTask($task, $type, $content) {
        $tasks = array();
        $type_array = array(
            1 => array('carb'),
            2 => array('dragon', 'tale'),
            3 => array('dragon', 'carb', 'tale'),
        );
        return array($task, $type_array[$type], $content);
    }

    function say($content) {
        echo $this->_name . '说:' . $content . '。<br>';
    }
    
    function checkCode($task){
        echo $this->_name.'审查'.$task.'相关代码，并合并测试！';
    }

}