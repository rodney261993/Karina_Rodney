<?php
$url = "http://github.com/Materias-6-Creditos-UTP/Proyecto-Final-Ing-de-Software";
$urlexists = url_exists( $url );

function url_exists( $url = NULL ) {
    if(empty($url)){
        return false;
    }
    $options['http'] = array(
        'method' => "HEAD",
        'ignore_errors' => 1,
        'max_redirects' => 0
    );
    $body = @file_get_contents($url, NULL, stream_context_create($options));

    if(isset($http_response_header)){
        sscanf($http_response_header[0], 'HTTP/%*d.%*d %d', $httpcode);

        $accepted_responce = array(200, 301, 302);
        if(in_array($httpcode, $accepted_responce)){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}
?>
