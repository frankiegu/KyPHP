<?php
/**
 * Script name: AlipayTradeCloseContentBuilder.php
 * Created by PhpStorm.
 * Create: 2017-11-01 16:09
 * Description: 支付宝电脑网站alipay.trade.close (统一收单交易关闭接口)业务参数封装
 * Author: Jason<1589856452@qq.com>
 */
namespace ky\Payment\Ali\type\pagepay;

class AlipayTradeCloseContentBuilder
{
    // 商户订单号.
    private $outTradeNo;

    // 支付宝交易号
    private $tradeNo;
    
    //卖家端自定义的的操作员 ID
    private $operatorId;

    private $bizContentarr = array();

    private $bizContent = NULL;

    public function getBizContent() {
        if(!empty($this->bizContentarr)){
            $this->bizContent = json_encode($this->bizContentarr,JSON_UNESCAPED_UNICODE);
        }
        return $this->bizContent;
    }

    public function getTradeNo() {
        return $this->tradeNo;
    }

    public function setTradeNo($tradeNo) {
        $this->tradeNo = $tradeNo;
        $this->bizContentarr['trade_no'] = $tradeNo;
    }

    public function getOutTradeNo() {
        return $this->outTradeNo;
    }

    public function setOutTradeNo($outTradeNo) {
        $this->outTradeNo = $outTradeNo;
        $this->bizContentarr['out_trade_no'] = $outTradeNo;
    }

    public function getOperatorId() {
    	return $this->operatorId;
    }
    
    public function setOperatorId($operatorId) {
    	$this->operatorId = $operatorId;
    	$this->bizContentarr['operator_id'] = $operatorId;
    }
}