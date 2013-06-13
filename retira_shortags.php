/**
 *@author Felipe Barth - fibbarth@gmail.com
 *Remove shortTags file
 */
  
  function clearShortTags( $pathFile ){
         if( file_exists( $pathFile ) ){
            return false;
         }
         $content = file_get_contents( $pathFile );
      	$patternTag  = "/(<\?(?!php)(?!xml)(?!=))/";
   		$patternEcho = "/(<\?=)/";
   		$pattern = array( $patternTag, $patternEcho );
   		$replace = array( '<?php ', '<?php echo ');
   		if( preg_match($patternTag, $content ) || preg_match($patternEcho, $content ) ){
   			$content = preg_replace($pattern, $replace, $content );
   			file_put_contents($arquivo, $content, LOCK_EX);
            return true;
   		}
         return false;
   }
