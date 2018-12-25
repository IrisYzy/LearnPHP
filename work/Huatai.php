<?php
/**
 * Created by PhpStorm.
 * User: yuanzi
 * Date: 2018/12/18
 * Time: 下午5:09
 */

class Huatai
{
    //渠道号码
    protected $comId = '100012';

    //私钥
    protected $private = 'qsc2016@HT';

    public function __construct()
    {
        if (config()->app->enviroment == 'test'){
            $this->comId = '100024';
            $this->private = '123456@HT';

            $this->InsureInterfaceUrl = 'http://219.141.242.74:9039/service_platform/InsureInterface';
            $this->EdrIssueInrerface = 'http://219.141.242.74:9039/service_platform/EdrIssueInterface';
            $this->PlyRecordInterface = 'http://219.141.242.74:9039/service_platform/PlyRecordInterface';          // 月付批单接口测试地址
            $this->InstalmentEdrInterface = 'http://219.141.242.74:9039/service_platform/InstalmentEdrInterface';  // 月付退保接口测试地址
        }else{
            $this->InsureInterfaceUrl = 'http://202.108.103.193:9015/service_platform/InsureInterface';
            $this->EdrIssueInrerface = 'http://219.141.242.74:9015/service_platform/EdrIssueInterface';
            $this->PlyRecordInterface = 'http://202.108.103.193:9015/service_platform/PlyRecordInterface';           // 月付批单接口地址
            $this->InstalmentEdrInterface = 'http://202.108.103.193:9015/service_platform/InstalmentEdrInterface';   // 月付退保接口地址
        }
    }

    public function request($url,$json)
    {
        $curl = new \Curl\Curl();
        $curl->setHeader('Content-Type','application/json');
        $curl->post($url,$json);
        $response = $curl->response;

        return $response;
    }

    /**
     * 华泰投保请求
     *
     *
     *

     */
    public function InsureInterface(\App\Models\Policy $policy,$policyInsured)
    {
        if ($policyInsured instanceof \App\Models\PolicyInsured){
            $json = json_encode(self::ResponseData($policy,[$policyInsured]));
        } else {
            $json = json_encode(self::ResponsData($policy,$policyInsured));
        }

        $signature = [
            'json'        => $json,
            'channelCode' => $this->comId,
            'signature'   => md5($json . $this->private),
        ];

        $url = $this->InsureInterfaceUrl . '?' . http_build_query($signature);
        $responses = $this->request($url, $json);

        $response = json_decode($responses);

        if (empty($response)) {
            \App\Services\Tool::alert('policy_id:' . $policy->id . '--' . $policy->type . '--出单接口返回为空');

            $response = [
                "type"          => 'failed',
                "failed_reason" => '接口返回为空',
                "request"       => '',
                'retry'         => true
            ];
            return $response;
        }

        if ($response->responseCode == '1'){
            $response = [
                'type' => 'success',
                'policy_no' => $response->policyNO,
                'policy_url' => $response->policyURL,
                'totalPremium' => $response->totalPremium,
                'orderId' => $response->orderId
            ];
            return $response;
        }

        if ($response->responseCode == '2') {
            $response = [
                'type' => 'repeat',
                "policy_no" =>$response->policyNO,
                "policy_url" => $response->policyURL,
                "totalPremium" => $response->totalPremium,
                "orderId" => $response->orderId
            ];

            return $response;
        }

        if ($response->responseCode == '2') {
            $response = [
                'type'  => 'repeat',
                'policy_no' => $response->policyNO,
                'policy_url' => $response->policyURL,
                'totalPremium' => $response->totalPremium,
                "orderId" => $response->orderId
            ];
            return $response;
        }
        if ($response->responseCode == '0'){
            $response = [
                "type" => 'failed',
                "failed_reason" => $response->responseInfo,
                "request" => $json,
                "retry" => false,
            ];
            return $response;
        }
        $response = [
            "type" => 'failed',
            "failed_reason" => '错误的返回',
            "request" => $json,
            "response" => $responses,
            "retry" => false,
        ];
        return $response;
    }

    /**
     * 退保请求
     *
     *
     *
     *
     * */
    public function SurrenderInterface($policy_no,$policy_id,$pay_times)
    {
        $json = json_encode(self::EdrIssueData($policy_no,$policy_id,$pay_times));
        //签名串
        $signature = [
            'json'          => $json,
            'channelCode'   => $this->comId,
            'signature'     => md5(json . $this->private),
        ];
        $url = $this->InstalmentEdrInterface . '?' . http_build_query($signature);
        $responses = self::request($url,$json);
        $response = json_encode($responses);
        if (empty($response)){
            $response = [
                "type"      => 'failed',
                "failed_reason" => '接口返回为空',
                "request"       => $json,
                "response"      => '',
                'retry'         => true
            ];
            return $responses;
        }
        if ($response->responseCode == '1'){
            if ($response->responseInfo == 'Success') {
                $response = [
                    'type'         => 'success',
                    'surrender_no' => $response->endorsementNO,
                    'order_id'     => $response->refundNO
                ];
                return $response;
            }
        }
        if ($response->responseCode == '0'){
            if ($response->responseInfo == '该保单不能超过1次批单'){
                $response = [
                    'type'         => 'success',
                    'surrender_no' => $response->endorsementNO,
                    'order_id'     => $response->refundNO
                ];
                return $response;

            }else {
                $response = [
                    'type'      => 'failed',
                    'surrender_no'  => $response->responseInfo,
                    'request'       => $json,
                    'response'      => $responses
                ];
                return $response;
            }
        }

        $response = [
            "type"  => 'failed',
            "failed_reason" => '错误的返回',
            "request"       => $json,
            "response"      => $responses
        ];
        return $response;

    }
















}