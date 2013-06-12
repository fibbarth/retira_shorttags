// Retira as short tags
   function clearShortTags( $arquivo ){
     	$pattern = '/<\?(?!php)(?!xml)=?/';
   		if( preg_match($pattern, $content ) ){
   			$content = preg_replace($pattern, '<?php ', $content );
   			file_put_contents($arquivo, $content, LOCK_EX);
   		}
   }
