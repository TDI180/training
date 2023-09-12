<?php
      namespace Michael;

      function strlen() {
        return "Bonjour";
      }

      echo strlen();           // Bonjour
      echo \strlen('Bonjour'); // 7
	  echo '</br>' ;
      echo '"', __NAMESPACE__, '"';
	  echo '---------------------------------------------------------</br>';
	 
	 $class=str_replace('zebi\\','', $class);		