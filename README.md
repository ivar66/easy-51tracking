<h1 align="center">Easy 51Tracking</h1>

<p align="center">:mailbox: 一款满足51tracking，查询快递物流信息等的组件</p>



## 特点

1. 支持目前51tracking的api接口
1. 简单配置即可灵活增减服务商
1. 统一的返回值格式，便于日志与监控
1. 更多等你去发现与改进...

## 平台支持

- [51tracking](https://www.51tracking.com/)

## 环境需求

- PHP >= 5.6

## 安装

```shell
$ composer require lvar/easy-51tracking
```

## 使用

获取所有运营商的编码
```php
<?php

use Ivar\Easy51Tracking\Easy51Tracking;

$config = [
    'tracking_api_key' => '自己申请',
];

$obj = new Easy51Tracking($config);
$result = $obj->getAllCarriers();

```

创建单个运单号

```php

<?php
use Ivar\Easy51Tracking\Easy51Tracking;

$config = [
    'tracking_api_key' => '自己申请',
];
$params = [
    'tracking_number' => '物流运单号',// 必填
    'carrier_code'    => '运输商编码',// 必填
    //... 若干别的信息，可查api文档
];

$obj = new Easy51Tracking($config);
$result = $obj->create($params);

```

更新运单号中部分信息
```php
<?php

use Ivar\Easy51Tracking\Easy51Tracking;

$config = [
    'tracking_api_key' => '自己申请',
];
$tracking_number = '物流运单号';
$carrier_code    = '运输商编码';

$params = [
    'title' => '这是测试',
    //... 若干别的信息，可查api文档
];

$obj = new Easy51Tracking($config);
$result = $obj->updateOneOrderTrackingByNumber($carrier_code,$tracking_number,$params);

```

列出单个运单号物流信息
```php

<?php
use Ivar\Easy51Tracking\Easy51Tracking;

$config = [
    'tracking_api_key' => '自己申请',
];

$tracking_number = '物流运单号';
$carrier_code    = '运输商编码';

$obj = new Easy51Tracking($config);
$result = $obj->getOrderTrackingByNumber($carrier_code,$tracking_number);

```

删除运单号
```php
<?php

use Ivar\Easy51Tracking\Easy51Tracking;

$config = [
    'tracking_api_key' => '自己申请',
];
$tracking_number = '物流运单号';
$carrier_code    = '运输商编码';

$obj = new Easy51Tracking($config);
$result = $obj->deleteOneOrderTrackingByNumber($carrier_code,$tracking_number);
```

## Todo
- [x] 获取所有运输商
- [x] 创建单个运单号
- [x] 更新单个运单号
- [x] 删除单个运单号
- [x] 查询单个运单号
- [ ] 创建多个运单号
- [ ] 获取多个运单号的物流信息
- [ ] 获取多个运单号的物流信息
- [ ] 修改多个运单号附加信息。如：订单号，商品标题，快递状态等。
- [ ] 删除多个运单号
- [ ] 修改运输商简码
- [ ] 查询用户剩余额度
- [ ] 查看不同状态快递数量
- [ ] 设置部分单号不再更新
- [ ] 查询收货地址是否偏远
- [ ] 获取快递时效
- [ ] 获取空运单号查询结果
 

## License

MIT
