<?php 
if (!function_exists('adminRoute')) {
    function adminRoute($slug,$param=null){
        return route('admin.'.request()->segment(2).'.'.$slug,$param);
    }
}
if (!function_exists('can')) {
    function can($expression,$type='admin') {
        $expression = strpos($expression, '_')?$expression : $expression.'_'.request()->segment(2);
        return  auth($type)->user()->hasAccess($expression.'_'.request()->segment(2));
    }
}

if (!function_exists('bucketPath')) {
    function bucketPath($name,$image='') {
        return  ('images/'.str_singular($name).'/'.$image);
    }
}
if (!function_exists('bucketUrl')) {
    function bucketUrl($image='',$path='') {       
        return 'https://'.preg_replace('/([^:])(\/{2,})/', '$1/','d3l8rf8g70ap0i.cloudfront.net/'.$path.'/'.$image);          
    }
}
if (!function_exists('cdn')) {
    function cdn($image='',$path='') {
        return bucketUrl($image,$path);          
    }
}

if (!function_exists('AccountSeriesGen')) {
    function AccountSeriesGen (String $type = '',$model = '\App\User',$field = 'id') {
        $config = \App\Model\AccountSeries::where('doc_key',$type)->first();

        $data = $model::first();

        if ($data) {
            $basicFormat = $config->prefix.''.$config->start_no;
            $startNo = ltrim($data->$field,$basicFormat);
            $strint = $config->prefix.''.$config->start_no;

            $str_len = strlen($strint);

            if ($str_len < $config->formate_in_degit) {

                $remanig_digit = $config->formate_in_degit-$str_len;

                $remanig_digit = $remanig_digit+1;

                return  $config->prefix.''.sprintf("%'.0".$remanig_digit."d\n", $config->start_no);
            }else {
                return $strint;
            }

        }else {
            $strint = $config->prefix.''.$config->start_no;

            $str_len = strlen($strint);

            if ($str_len < $config->formate_in_degit) {

                $remanig_digit = $config->formate_in_degit-$str_len;

                $remanig_digit = $remanig_digit+1;


                return  $config->prefix.''.sprintf("%'.0".$remanig_digit."d\n", $config->start_no);
            }else {
                return $strint;
            }
        }
    }
}





