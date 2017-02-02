<?php
	$extensions=array("css","png","gif","jpg","js");
	$types=array("text/css","image/png","image/gif","image/jpeg","text/javascript");
	$do=MVC::getDo();
	$path=MVC::getPath();
	$rp=realpath(__FILE__);
	$rp=substr($rp,0,strlen($rp)-24);
	$i=0;
	$lp=0;
	$ls=0;
	$dt=MVC::getDataText();
	$length=strlen($dt);
	if(substr($dt,0,1)!="/"){
		$dt="/".$dt;
		$length++;
	}
	while($i<$length){
		if(substr($dt,$i,1)=="."){
			$lp=$i;
		}
		else if(substr($dt,$i,1)=="/"){
			$ls=$i;
		}
		$i++;
	}
	$filename=substr($dt,$ls+1,$length-($ls+1));
	$ext=substr($dt,$lp+1,$length-($lp+1));
	$dest=$rp."/".$do.$dt;
//	echo $dest;
	if($ext=="php"){
		include($dest);
	}
	else{
		$i=0;
		$length=count($extensions);
		$good=false;
		while(($i<$length)&&(!$good)){
			if($ext==$extensions[$i]){
			//	echo $types[$i];
				header("Content-Description: File Transfer");
				header("Content-Type: ".$types[$i]);
				header("filename=".$filename);
				header("Content-Length: ".filesize($dest));
				readfile($dest);
			}
			$i++;
		}
	}