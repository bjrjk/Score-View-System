<?php
function check($code){
	$CONST_XOR_KEY=chr(31);
	$str_array=explode("-",$code);
	if(count($str_array)!=3){
		return false;
	}
	$RandKey=chr(intval($str_array[2]));
	$len=strlen($str_array[0]);
	$Base64Array=base64_decode($str_array[0]);
	if($Base64Array==false){
		return false;
	}
	for($i=0;$i<$len;$i++){
		$Base64Array[$i]=$Base64Array[$i]^$RandKey;
		$Base64Array[$i]=$Base64Array[$i]^$CONST_XOR_KEY;
		if(ord($Base64Array[$i])<32||ord($Base64Array[$i])==127){
			$Base64Array[$i]='';
		}
	}
	$Base64Array=trim($Base64Array);
	$flag=strtoupper(substr(MD5($Base64Array),0,5))==$str_array[1]?true:false;
	if(!$flag){
		return false;
	}
	$json_obj=json_decode($Base64Array,true);
	if($json_obj==NULL){
		return false;
	}
	return $json_obj;
}
function encrypt($code){
        $code=strval($code);
        $CONST_XOR_KEY=chr(31);
        $code=trim($code);
        $RandKey=chr(rand(1,254));
        $MD5Hash=strtoupper(substr(MD5($code),0,5));
        $len=strlen($code);
        for($i=0;$i<$len;$i++){
            $code[$i]=$code[$i]^$CONST_XOR_KEY;
            $code[$i]=$code[$i]^$RandKey;
        }
        $code=trim(base64_encode($code));
        return $code . '-' . $MD5Hash . '-' . ord($RandKey); 
}
?>
