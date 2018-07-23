<?php
/**
 * ALIPAY API: zhima.merchant.order.rent.query request
 *
 * @author auto create
 * @since  1.0, 2017-05-25 14:34:06
 */
namespace Alipay\Request;

class ZhimaMerchantOrderRentQueryRequest extends AbstractAlipayRequest
{
    /**
     * 信用借还订单查询
     **/
    private $bizContent;
    
    public function setBizContent($bizContent)
    {
        $this->bizContent = $bizContent;
        $this->apiParams["biz_content"] = $bizContent;
    }
    public function getBizContent()
    {
        return $this->bizContent;
    }
}
