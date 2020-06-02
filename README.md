<h1 align="center">Easy 51Tracking</h1>

<p align="center">:calling: 一款满足51tracking，查询快递地址等的组件</p>



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
    'tracking_api_key' => 'xxxxxx',
];

$obj = new Easy51Tracking($config);
$arrayAllCarriers = $obj->getAllCarriers();
```

## License

MIT
