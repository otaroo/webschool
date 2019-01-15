




<?php 

class DatetimeFormat{
    private $month_l = array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฏาคม","สิงหาคม","กันยายน","ตุลาคม","พฤษจิกายน","ธันวาคม");
    private $month_s = array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
    function DTtoSDTthai($date){ // format datetime to short datetime  thai
        $dt = explode(" ",$date);
        $d =explode("-",$dt[0]);
        $_t = $dt[1];
         $_date = $d[2]." ".$this->month_s[($d[1]+0)]." ".($d[0]+543);
        return $_date." ".$_t;
    }
    function DTtoLDTthai($date){ //// format datetime to long datetime thai
        $dt = explode(" ",$date);
        $d =explode("-",$dt[0]);
        $_t = $dt[1];
        $_date = $d[2]." ".$this->month_l[($d[1]+0)]." ".($d[0]+543);
        return $_date." ".$_t;
    }

    function DTtoSDthai($date){ // format datetime to short date  thai
        $dt = explode(" ",$date);
        $d =explode("-",$dt[0]);
       // $_t = $dt[1];
        $_date = $d[2]." ".$this->month_s[($d[1]+0)]." ".($d[0]+543);
        return $_date;//." ".$_t;
    }

    function DTtoLDthai($date){ // format datetime to Long date  thai
        $dt = explode(" ",$date);
        $d =explode("-",$dt[0]);
       // $_t = $dt[1];
        //$_date = $d[2]." ".$this->month_s[($d[1]+0)]." ".($d[0]+543);
        //return $_date;//." ".$_t;
    }
    
    function DtoSDthai($date){ // format date to  short date  thai
        $d = explode("-",$date);
        $_date = $d[2]." ".$this->month_s[($d[1]+0)]." ".($d[0]+543);
        return $_date;//." ".$_t;
    }
    function DtoLDthai($date){ // format date to  long date  thai
        $d = explode("-",$date);
        $_date = $d[2]." ".$this->month_l[($d[1]+0)]." ".($d[0]+543);
        return $_date;//." ".$_t;
    }
    function Duration($begin,$end){
        $remain=intval(strtotime($end)-strtotime($begin));
        $wan=floor($remain/86400);
        $l_wan=$remain%86400;
        $hour=floor($l_wan/3600);
        $l_hour=$l_wan%3600;
        $minute=floor($l_hour/60);
        $second=$l_hour%60;
        $arr = array('d'=>$wan,'h'=>$hour,'m'=>$minute,'s'=>$second);
        return $arr;
    } 
//    DTtoSDTthai  DTtoLDTthai DTtoSDthai DTtoLDthai  DtoSDthai DtoLDthai Duration 
} 
/*
   $darr= duration("2017-06-25 08:30:39",date("Y-m-d H:i:s"));
    echo $darr['h'].' '.$darr['m'].' '.$darr['s'];
*/
?>