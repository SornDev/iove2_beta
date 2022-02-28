<?php
//date_default_timezone_set('America/Los_Angeles');
date_default_timezone_set('Asia/Bangkok');
///// facebook time -------------------

function fb_date($timestamp){  
    $difference = time() - $timestamp;  
    $periods = array("ວິນາທີ", "ນາທີ", "ຊົ່ວໂມງ");  
    $ending=" ຜ່ານມາ";  
    if($difference<60){  
        $j=0;  
        $periods[$j].=($difference != 1)?"":"";  
        $difference=($difference==3 || $difference==4)?"1 ":$difference;  
        $text = "$difference $periods[$j] $ending";  
    }elseif($difference<3600){  
        $j=1;  
        $difference=round($difference/60);  
        $periods[$j].=($difference != 1)?"":"";  
        $difference=($difference==3 || $difference==4)?"1 ":$difference;  
        $text = "$difference $periods[$j] $ending";       
    }elseif($difference<86400){  
        $j=2;  
        $difference=round($difference/3600);  
        $periods[$j].=($difference != 1)?"":"";  
        $difference=($difference != 1)?$difference:"1 ";  
        $text = "$difference $periods[$j] $ending";       
    }elseif($difference<172800){  
        $difference=round($difference/86400);  
        //$periods[$j].=($difference != 1)?"":"";  
        //$text = "Yesterday at ".date("g:ia",$timestamp);
		$text = date("d/m/Y",$timestamp);                                  
    }else{  
        /*
		if($timestamp<strtotime(date("Y-01-01 00:00:00"))){  
            $text = date("l j, Y",$timestamp)." at ".date("g:ia",$timestamp);         
        }else{  
            $text = date("l j",$timestamp)." at ".date("g:ia",$timestamp);            
        } 
		*/
		if($timestamp<strtotime(date("Y-01-01 00:00:00"))){  
            $text = date("d/m/Y",$timestamp);         
        }else{  
            $text = date("d/m/Y",$timestamp);            
        }  
    }  
    return $text;  
}  


function timeago($time_ago)
{
    $time_ago = strtotime($time_ago);
    $cur_time   = time();
    $time_elapsed   = $cur_time - $time_ago;
    $seconds    = $time_elapsed ;
    $minutes    = round($time_elapsed / 60 );
    $hours      = round($time_elapsed / 3600);
    $days       = round($time_elapsed / 86400 );
    $weeks      = round($time_elapsed / 604800);
    $months     = round($time_elapsed / 2600640 );
    $years      = round($time_elapsed / 31207680 );
    // Seconds
    if($seconds <= 60){
        return "ດຽວນີ້";
    }
    //Minutes
    else if($minutes <=60){
        if($minutes==1){
            return "1 ນາທີຜ່ານມາ";
        }
        else{
            return "$minutes ນາທີຜ່ານມາ";
        }
    }
    //Hours
    else if($hours <=24){
        if($hours==1){
            return "1 ຊົ່ວໂມງຜ່ານມາ";
        }else{
            return "$hours ຊົ່ວໂມງຜ່ານມາ";
        }
    }
    //Days
    else if($days <= 7){
        if($days==1){
            return "ມື້ວານນີ້";
        }else{
            return "$days ມື້ຜ່ານມາ";
        }
    }
    //Weeks
    else if($weeks <= 4.3){
        if($weeks==1){
            return "1 ອາທິດຜ່ານມາ";
        }else{
            return "$weeks ອາທິດຜ່ານມາ";
            
        }
    }
    //Months
    else if($months <=12){
        if($months==1){
            return "1 ເດືອນຜ່ານມາ";
        }else{
            return date("d/m/Y",$time_ago);
            //return "$months ເດືອນຜ່ານມາ";
        }
    }
    //Years
    else{
        if($years==1){
            return date("d/m/Y",$time_ago);
            //return "one year ago";
        }else{
            return date("d/m/Y",$time_ago);
            //return "$years years ago";
        }
    }
}

function duration($begin,$end){  
    $remain=intval(strtotime($end)-strtotime($begin));  
    $wan=floor($remain/86400);  
    $l_wan=$remain%86400;  
    $hour=floor($l_wan/3600);  
    $l_hour=$l_wan%3600;  
    $minute=floor($l_hour/60);  
    $second=$l_hour%60;  
    //return "ผ่านมาแล้ว ".$wan." วัน ".$hour." ชั่วโมง ".$minute." นาที ".$second." วินาที";  
	return $wan;  
	/// echo duration($show_category['date'],date("Y-m-d H:i:s")); ນັບຈຳນວນມື້
} 


/*

    ถ้าเก็บเวลาในรูปแบบ  datetime (ตัวอย่าง 2011-03-24 15:30:50)  
    $date_you="2011-03-24 15:30:50";  
    echo fb_date(strtotime($date_you));  

*/



function date_time(){
	echo date("Y-m-d H:i:s");
	}

	function pice_out($pice,$type){
		
		if($type != ''){
			
			}
			else{
				
				$pice_out = number_format($pice)." ກີບ";
				
				}
		return $pice_out;
		}



	/// ຟັງຊັ່ນຕັດຂໍ້ຄວາມ
	function cutStr($str, $maxChars='', $holder=''){

    if (strlen($str) >= $maxChars ){
			$str = iconv_substr($str, 0, $maxChars,"UTF-8") . $holder;
	} 
	return $str;
	} 

//$detail = "ว่ากันด้วยเรื่อง Function ตัดคำให้ Web Site โดยให้่มีการใส่เครื่องหมายต่อท้ายด้วยเพื่อความสวยงาม ทดสอบ";

//cutStr($detail,'100','...');

	/// ຟັງຊັ່ນຕັດຂໍ້ຄວາມ
function random($qtd){ 
//Under the string $Caracteres you write all the characters you want to be used to randomly generate the code. 
$Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789'; 
$QuantidadeCaracteres = strlen($Caracteres); 
$QuantidadeCaracteres--; 

$Hash=NULL; 
    for($x=1;$x<=$qtd;$x++){ 
        $Posicao = rand(0,$QuantidadeCaracteres); 
        $Hash .= substr($Caracteres,$Posicao,1); 
    } 

return $Hash; 
} 


function get_url() {
 $pageURL = 'http';
 //if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

?>