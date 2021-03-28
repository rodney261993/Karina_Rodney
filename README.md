# Karina_Rodney
$url = "https://github.com/Materias-6-Creditos-UTP/Proyecto-Final-Ing-de-Software";
$urlexists = url_exists( $url);

function url_exists( $url = NULL ) {
     
     if( empty( $url ) ) {
          return false;
     }
     
     $options['http'] = array(
          'method' => "HEAD",
          'ignore_errors' => 1,
          'max_redirects' => 0
     );
     $body = @file_get_contents( $url, NULL, stream_context_create( $options ) );
     
     if( isset( $http_reponse_header ) ) {
          sscanf( $http_reponse_header[0], 'HTTP/%*d.%*d %d', $httpcode );
          
          $accepted_reponse = array( 200, 301, 302 );
          if( in_array( $httpcode, $accepted_reponse ) ) {
              return true;
          }
          else {
            return false;
          }
      else {
        return false;
      }
}
