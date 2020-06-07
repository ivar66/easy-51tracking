<?php
/*
* This is a new deleteOneOrderTrackingByNumber.php file.
*
* (c) ivar <625079860@qq.com>
* 
* Date: 2020/6/7 下午7:32
* 
* This source file is subject to the MIT license that is bundled with this source code in the file LICENSE.
*/

require_once '../vendor/autoload.php';

use Ivar\Easy51Tracking\Easy51Tracking;

$config = [
    'tracking_api_key' => '自己申请',
];
$tracking_number = '10145425944960136xx';
$carrier_code    = 'bestex';

$obj = new Easy51Tracking($config);
$res = $obj->deleteOneOrderTrackingByNumber($carrier_code,$tracking_number);
var_export($res);