<?php

include_once './iengineer.php';
include_once './PhpProgrammer.class.php';
include_once './FrontendProgrammer.class.php';
include_once './Leader.class.php';

$jimmy = new Leader();
$tale = new PhpProgrammer();
$carb = new FrontendProgrammer();
$dragon = new PhpProgrammer();

$task = '平保';
$content = '有关平保会员登录违章代办业务开发事宜。';

echo '接收任务开始';
echo "<br><br>";

$sub_task = $jimmy->getTask($task, $content);

foreach ($sub_task[1] as $value) {
    $$value->setName($value);
    $$value->getTask($sub_task[0], $sub_task[2]);
}

echo '<br>';
$tale->getTask;
$carb->getTask;
$dragon->getTask;
echo '<br>';

echo '<br>';
$tale->think('平保代缴查询下单支付');
$carb->think('平保会员获取，判断，登录');
$dragon->think('平保会员代缴前端界面');
echo '<br>';

echo '<br>';
$tale->talk('平保代缴查询下单支付');
$carb->talk('平保会员获取，判断，登录');
$dragon->talk('平保会员代缴前端界面');
echo '<br>';

echo '<br>';
$jimmy->examine('tale平保代缴查询下单支付分析');
$jimmy->examine('dragon平保会员获取，判断，登录分析');
$jimmy->examine('carb平保会员代缴前端界面分析');
echo '<br>';

echo '<br>';
$tale->writeCode('平保代缴查询下单支付');
$carb->writeCode('平保会员获取，判断，登录');
$dragon->writeCode('平保会员代缴前端界面');
echo '<br>';

echo '<br>';
$jimmy->examine('tale平保代缴查询下单支付代码');
$jimmy->examine('dragon平保会员获取，判断，登录代码');
$jimmy->examine('carb平保会员代缴前端界面代码');
echo '<br>';

echo '<br>';
$tale->uploadCode('平保代缴查询下单支付');
$carb->uploadCode('平保会员获取，判断，登录');
$dragon->uploadCode('平保会员代缴前端界面');
echo '<br>';

echo '<br>';
$jimmy->examine('tale平保代缴查询下单支付上传');
$jimmy->examine('dragon平保会员获取，判断，登录上传');
$jimmy->examine('carb平保会员代缴前端界面上传');
echo '<br>';

echo '<br>';
$tale->say('与其他程序对接');
$dragon->say('与其他程序对接');
$carb->say('与其他程序对接');
echo '<br>';

echo '<br>';
$jimmy->examine('平保代缴查询');