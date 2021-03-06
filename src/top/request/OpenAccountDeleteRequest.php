<?php

namespace TopClient\request;

/**
 * TOP API: taobao.open.account.delete request
 *
 * @author auto create
 * @since  1.0, 2015.04.20
 */
class OpenAccountDeleteRequest
{

    /**
     * ISV自己账号的id列表
     **/
    private $isvAccountIds;

    /**
     * Open Account的id列表
     **/
    private $openAccountIds;

    private $apiParas = [ ];


    public function getIsvAccountIds()
    {
        return $this->isvAccountIds;
    }


    public function setIsvAccountIds($isvAccountIds)
    {
        $this->isvAccountIds               = $isvAccountIds;
        $this->apiParas["isv_account_ids"] = $isvAccountIds;
    }


    public function getOpenAccountIds()
    {
        return $this->openAccountIds;
    }


    public function setOpenAccountIds($openAccountIds)
    {
        $this->openAccountIds               = $openAccountIds;
        $this->apiParas["open_account_ids"] = $openAccountIds;
    }


    public function getApiMethodName()
    {
        return "taobao.open.account.delete";
    }


    public function getApiParas()
    {
        return $this->apiParas;
    }


    public function check()
    {

        RequestCheckUtil::checkMaxListSize($this->isvAccountIds, 20, "isvAccountIds");
        RequestCheckUtil::checkMaxListSize($this->openAccountIds, 20, "openAccountIds");
    }


    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
