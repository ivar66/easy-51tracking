<?php
/*
 * This is a new PhpStorm file.
 *
 * (c) ivar <625079860@qq.com>
 *
 * Date: 2020/6/1 下午11:39
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
require_once '../vendor/autoload.php';

use Ivar\Easy51Tracking\Easy51Tracking;

$config = [
    'tracking_api_key' => '自己申请',
];

$obj = new Easy51Tracking($config);
$arrayAllCarriers = $obj->getAllCarriers();
// 物流商编码存储一下
file_put_contents('./tracking_carriers.txt',json_encode($arrayAllCarriers));
