<?php
// +----------------------------------------------------------------------
// | ThinkIMS [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2015-2019 http://www.thinkims.cn/ All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +---------------------------------------------------------------------
// | Author: dangyuzhang <2085@163.com>
// +----------------------------------------------------------------------   


namespace app\common\exception;


use ims\library\exception\IMSException;

class TestException extends IMSException
{
    // 返回状态码 例如 200 404 500
    public $status = 400;
    // 返回错误消息
    public $message = '测试错误';
    // 返回码
    public $code = 1;
}