<?php
/*
* This is a new createTest.php file.
*
* (c) ivar <dukang03@baidu.com>
* 
* Date: 2020/6/7 上午10:35
* 
* This source file is subject to the MIT license that is bundled with this source code in the file LICENSE.
*/
require_once '../vendor/autoload.php';

use Ivar\Easy51Tracking\Easy51Tracking;

$config = [
    'tracking_api_key' => '自己申请',
];
$params = [
    'tracking_number' => '10145425944960136xx',
    'carrier_code'    => 'bestex',
];

$obj = new Easy51Tracking($config);
$result = $obj->create($params);
var_export($result);die();