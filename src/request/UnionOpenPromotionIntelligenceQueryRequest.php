<?php

namespace I25ma\JdUnion\request;

class UnionOpenPromotionIntelligenceQueryRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.union.open.promotion.intelligence.query";
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
    private  $req;

    public function setReq($req){
        $this->apiParas['req'] = $req;
    }
    public function getReq(){
        return $this->apiParas['req'];
    }
}

?>