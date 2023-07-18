<?php

namespace I25ma\JdUnion\request;

class KplOpenAlphaConfigAddrsgetRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.alpha.config.addrsget";
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
    private  $ptKey;

    public function setPtKey($ptKey){
        $this->apiParas['ptKey'] = $ptKey;
    }
    public function getPtKey(){
        return $this->apiParas['ptKey'];
    }
    private  $ip;

    public function setIp($ip){
        $this->apiParas['ip'] = $ip;
    }
    public function getIp(){
        return $this->apiParas['ip'];
    }
}

?>