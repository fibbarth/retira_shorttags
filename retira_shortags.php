// Retira as short tags
   function clearShortTags( $content, $arquivo ){
      	$patternTag  = '/(<\?(?!php)(?!xml)(?!=))/';
   		$patternEcho = '/(<\?=)/';
   		$pattern = array( $patternTag, $patternEcho);
   		$replace = array( '<?php ', '<?php echo ');
   		if( preg_match($patternTag, $content ) || preg_match($patternEcho, $content ) ){
   			$content = preg_replace($pattern, $replace, $content );
   			file_put_contents($arquivo, $content, LOCK_EX);
   		}
   }
