<?php

include_once './Programmer.class.php';
include_once './Jimmy.class.php';
include_once './Zxl.class.php';
include_once './Zwx.class.php';
include_once './Tale.class.php';

$jimmy = new Jimmy();
$tale = new Tale();
$zwx = new Zwx();
$zxl = new Zxl();
$jimmy -> assignTask('平保', array('Zxl', 'Tale', 'Zwx'));
echo '<br>';
echo '开始分析';
echo '<br>';
$jimmy->talkAboutTask(array('Zxl', 'Tale', 'Zwx'), '有关平保违章代办业务开发事宜');

echo '<br>';
$tale->getTask;
$zwx->getTask;
$zxl->getTask;
echo '<br>';

echo '<br>';
$tale->think('平保代缴查询下单支付');
$zwx->think('平保会员获取，判断，登录');
$zxl->think('平保会员代缴前端界面');
echo '<br>';

echo '<br>';
$tale->talk('平保代缴查询下单支付');
$zwx->talk('平保会员获取，判断，登录');
$zxl->talk('平保会员代缴前端界面');
echo '<br>';

echo '<br>';
$jimmy->examine('tale平保代缴查询下单支付分析');
$jimmy->examine('zxl平保会员获取，判断，登录分析');
$jimmy->examine('zwx平保会员代缴前端界面分析');
echo '<br>';

echo '<br>';
$tale->writeCode('平保代缴查询下单支付');
$zwx->writeCode('平保会员获取，判断，登录');
$zxl->writeCode('平保会员代缴前端界面');
echo '<br>';

echo '<br>';
$jimmy->examine('tale平保代缴查询下单支付代码');
$jimmy->examine('zxl平保会员获取，判断，登录代码');
$jimmy->examine('zwx平保会员代缴前端界面代码');
echo '<br>';

echo '<br>';
$tale->uploadCode('平保代缴查询下单支付');
$zwx->uploadCode('平保会员获取，判断，登录');
$zxl->uploadCode('平保会员代缴前端界面');
echo '<br>';

echo '<br>';
$jimmy->examine('tale平保代缴查询下单支付上传');
$jimmy->examine('zxl平保会员获取，判断，登录上传');
$jimmy->examine('zwx平保会员代缴前端界面上传');
echo '<br>';

echo '<br>';
$tale->say('与其他程序对接');
$zxl->say('与其他程序对接');
$zwx->say('与其他程序对接');
echo '<br>';

echo '<br>';
$jimmy->examine('平保代缴查询');