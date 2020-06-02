<?php
/*
 * This is a new PhpStorm file.
 *
 * (c) kang <625079860@qq.com>
 *
 * Date: 2020/6/1 下午11:39
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
require_once '../vendor/autoload.php';

use Kang\Easy51Tracking\Easy51Tracking;

$config = [
//    'tracking_api_key' => 'ecff5895-8548-4a60-b4ff-3f9fc45969a9',
    'tracking_api_key' => 'af036741-f14f-4116-9816-1765a341fcfc',
];

$obj = new Easy51Tracking($config);
$arrayAllCarriers = $obj->getAllCarriers();