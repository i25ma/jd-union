<?php

namespace I25ma\JdUnion\request;

class UnionOpenPromotionParseRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.union.open.promotion.parse";
	}
	
	public function getApiParas(){
        if(empty($this->apiParas)){
	        return "{}";
	    }
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
    public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
    private  $promotionReq;

    public function setPromotionReq($promotionReq){
        $this->apiParas['promotionReq'] = $promotionReq;
    }
    public function getPromotionReq(){
        return $this->apiParas['promotionReq'];
    }
}

?>