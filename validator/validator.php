<?php
	 function nameValidate($full_name){
        $full_name = preg_match("/^([a-zA-Z' ]+)$/",$full_name);
        return $full_name;
    }

    function passwordvaltidate($password){
        $password = preg_match("/^([a-zA-Z'0-9'?=\S*(\W)]+)$/",$password);
        return $password;
    }

    function cpassvaltidate($pass, $cpass){
        if ($pass == $cpass) {
            $result = passwordvaltidate($cpass);
            return $result;
        }
        else
        {
            return 0;
        }
    }

    function emailvaltidate($email)
    {
        $email = preg_match("/^([a-zA-Z'0-9'?=\S*(\W)]+)$/",$email);
         return $email;
    }

    function mobvaltidate($mobile_number)
    {
        $mobile_number = preg_match("/^([0-9' ]+)$/",$mobile_number);
         return $mobile_number;
    }

    function birthvalidate($day,$month,$year)
    {
        if($year >= 1990 && $year <= 2019){
            if($month >= 1 && $month <= 12)
            {
                switch ($month) {
                    case 1:
                        $max_day = 31;
                        break;
                    case 2:
                        $max_day = 28;
                        break;
                        if($year % 4 == 0){
                            $max_day = 29;
                        }
                    case 3:
                        $max_day = 31;
                        break;
                    case 4:
                        $max_day = 30;
                        break;
                    case 5:
                        $max_day = 31;
                        break;
                    case 6:
                        $max_day = 30;
                        break;
                    case 7:
                        $max_day = 31;
                        break;
                    case 8:
                        $max_day = 31;
                        break;
                    case 9:
                        $max_day = 30;
                        break;
                    case 10:
                        $max_day = 31;
                        break;
                    case 11:
                        $max_day = 30;
                        break;
                    case 12:
                        $max_day = 31;
                        break;
                    default:
                        $max_day = 30;
                        break;
                }
                if($day >= 1 && $day <= $max_day ){
                    return 1;
                }
                else{
                    return 0;
                }
            }
            else
            {
               return 0; 
            }
        }
        else 
        {
            return 0;
        }
    }

     function arrayValidate($array_name,$array_value)
        {
        return array_key_exists($array_value, $array_name);
        }
?>