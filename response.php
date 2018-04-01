<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/1
 * Time: 下午3:49
 */

//$arr = array(
//    'id' => 1,
//    'name' => 'gang',
//
//);
////json_encode()指支持UTF-8的编码格式
//$data = "输出json数据";
//iconv("UTF-8","GBK",$data);//此时吧$data数据转化为GBK编码格式
//
//echo json_encode($arr);
class Response
{
    /**
     *按json方式输出数据
     * @param integer $code 状态码
     *@param string $message 提示信息
     *@param  array $data 数据
     * return string
     */
    public static function json($code,$message,$data)
    {
        if (!is_numeric($code))
        {
            return "";
        }

        $result = array(
            'code' => $code,
            'message' => $message,
            'data' => $data,
        );
        echo json_encode($result);

    }

    public static function xml()
    {
        $xml = "<?xml version = '1.0' encoding='UTF-8'?>";
        $xml .="<root>";
        $xml .="<code>200</code>";
        $xml .="<message>数据返回成功</message>";
        $xml .="<data>";
            $xml .="<id>1</id>";
            $xml .="<name>gang</name>";
        $xml .="</data>";


        $xml .="</root>";
        echo $xml;
    }
}