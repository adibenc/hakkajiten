<?php

// originally used at laravel

if (!function_exists('preout')) {
    function preout($v) {
        echo "<pre>";
        var_dump($v);
        echo "</pre>";
    }
}

if (!function_exists('prx')) {
    function prx($v) {
        preout($v);
        exit;
    }
}

if (!function_exists('preson')) {
    function preson($v) {
        // dd($var);
        echo "<pre>";
        echo json_encode($v,JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        echo "</pre>";
    }
}

if (!function_exists('presonRet')) {
    function presonRet($v) {
        return json_encode($v,JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
}

if (!function_exists('jsonResponse')) {
    function jsonResponse($respCode,$msg,$data) {
        $r=[
            'status' => $respCode ,
            'message' => $msg ,
            'data' => $data
        ];
        return response()->json($r, $respCode);
    }
}

if (!function_exists('jsonResponseStatus')) {
    function jsonResponseStatus($bool, $msg, $data = null) {
        $r=[
            'success' => (bool) $bool ,
            'message' => $msg ,
            'data' => $data
        ];
        return response()->json($r);
    }
}

if (!function_exists('toFile')) {
    function toFile($content = "cnt", $file = "file") {
        $f = fopen($file, "w");
        fwrite($f,$content);
        fclose($f);
        return true;
    }
}

if (!function_exists('arrayGet')) {
    function arrayGet($array, $key, $default = NULL) {
        return isset($array[$key]) ? $array[$key] : $default;
    }
}

if (!function_exists('allRoutes')) {
    function allRoutes() {
        Route::get('all-routes', function(){
            // group
            $ar = Route::getRoutes();
            $cn = 0;
            foreach($ar as $k => $e){
                preout($e->getName());
                preout(route('home')."/".$e->uri);
                $cn = $k+1;
            }
            preout($cn);
        });
    }
}

//get stisla file from 
if (!function_exists('stisla')) {
    function stisla($file) {
        return config('view.ui.template').$file;
    }
}

if (!function_exists('logs')) {
    function logs($cn) {
        return log_message(7, $cn);
    }
}
