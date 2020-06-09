<?php
/*
* This is a new HasBuildParam.php file.
*
* (c) ivar <625079860@qq.com>
* 
* Date: 2020/6/5 下午9:37
* 
* This source file is subject to the MIT license that is bundled with this source code in the file LICENSE.
*/

namespace Ivar\Easy51Tracking\Traits;

use Ivar\Easy51Tracking\Exceptions\InvalidArgumentException;

trait HasBuildParam{

    /**
     * format url
     *
     * @param string $endpoint
     *
     * @return string
     */
    protected function _buildEndpoint($endpoint){
        return self::ENDPOINT_URL.$endpoint;
    }

    /**
     * build create tracking order
     *
     * @param  array $params
     * @return array
     * @throws InvalidArgumentException
     */
    protected function _buildOrderParams($params){
        $res = [];
        $arrField  = [
            'tracking_number'               =>  true,
            'carrier_code'                  =>  true,
            'destination_code'              =>  false,
            'title'                         =>  false,
            'logistics_channel'             =>  false,
            'customer_name'                 =>  false,
            'customer_email'                =>  false,
            'customer_phone'                =>  false,
            'order_id'                      =>  false,
            'order_create_time'             =>  false,
            'tracking_ship_date'            =>  false,
            'tracking_postal_code'          =>  false,
            'tracking_account_number'       =>  false,
            'tracking_destination_country'  =>  false,
            'lang'                          =>  false,
            'auto_correct'                  =>  false,
            'comment'                       =>  false,
        ];
        foreach ($arrField as $key => $val){
            if ($val == true && !isset($arrField[$key])){
                throw new InvalidArgumentException("order must param [{$key}] Not Exist");
            }
            if (isset($params[$key])){
                $res[$key] = $params[$key];
            }
        }
        return $res;
    }

    /**
     *
     * @param array $params
     *
     * @return array
     * @throws InvalidArgumentException
     */
    protected function _buildUpdateOrderParams($params){
        $res = [];
        $arrField  = [
            'title'                         =>  false,
            'logistics_channel'             =>  false,
            'customer_name'                 =>  false,
            'customer_email'                =>  false,
            'customer_phone'                =>  false,
            'order_id'                      =>  false,
            'destination_code'              =>  false,
            'archived'                      =>  false,
            'status'                        =>  false,
        ];
        foreach ($arrField as $key => $val){
            if ($val == true && !isset($arrField[$key])){
                throw new InvalidArgumentException("order must param [{$key}] Not Exist");
            }
            if (isset($params[$key])){
                $res[$key] = $params[$key];
            }
        }
        return $res;
    }
}