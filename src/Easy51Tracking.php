<?php
/*
 * This file is part of the kang/easy-51tracking
 *
 * (c) kang <625079860@qq.com>
 *
 * Date: 2020/6/1 下午8:46
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Kang\Easy51Tracking;

use Kang\Easy51Tracking\Support\Config;
use Kang\Easy51Tracking\Traits;

class Easy51Tracking{

    use Traits\HasHttpRequest;

    /**
     * @var
     */
    protected $config;
    /**
     *  base URL
     */
    const ENDPOINT_URL = 'https://api.51tracking.com/v2';

    /**
     * Easy51Tracking constructor.
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = new Config($config);
    }

    /**
     * 列出所有运输商以及在51tracking系统中相应运输商简码
     * @return array
     */
    public function getAllCarriers(){
        $endpoint = $this->buildEndpoint('/carriers');
        $header = [
            'Content-Type' =>  'application/json',
            'Tracking-Api-Key' =>  $this->config->get('tracking_api_key'),
            'Lang' =>  $this->config->get('lang','cn')
        ];
        return $this->get($endpoint,[],$header);
    }

    /**
     * create order
     * @return array
     */
    public function create(){
        $endpoint = $this->buildEndpoint('/trackings/post');
        $header = [
            'Content-Type' =>  'application/json',
            'Tracking-Api-Key' =>  $this->config->get('tracking_api_key'),
        ];
        $params = [
            //todo
        ];
        return $this->post($endpoint,$params,$header);
    }

    /**
     * 拼接url
     * @param $endpoint
     * @return string
     */
    protected function buildEndpoint($endpoint){
        return self::ENDPOINT_URL.$endpoint;
    }

}