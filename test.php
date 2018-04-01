<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/1
 * Time: 下午4:36
 */

require_once('./response.php');
$arr = array(
    'id' => 1,
    'name' => 'gang',
);

Response::json(200,'数据返回成功',$arr);



