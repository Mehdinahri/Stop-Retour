<html>

<head>

<title>Stope Retour</title>

<meta http-equiv="Content-Language" content="tr">

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9">

<meta http-equiv="Pragma" content="no-cache">

<meta http-equiv="Expires" content="now">

</head>



<body onload="javascript:moveWindow()">



	<form name="pay_form" method="post" action="https://payment.cmi.co.ma/fim/est3Dgate">

		<?php
			function replaceSpecialChar($str) {
			$ch0 = array( 
				'/[áàâãªä]/u'   =>   'a',
				'/[ÁÀÂÃÄ]/u'    =>   'A',
				'/[ÍÌÎÏ]/u'     =>   'I',
				'/[íìîï]/u'     =>   'i',
				'/[éèêë]/u'     =>   'e',
				'/[ÉÈÊË]/u'     =>   'E',
				'/[óòôõºö]/u'   =>   'o',
				'/[ÓÒÔÕÖ]/u'    =>   'O',
				'/[úùûü]/u'     =>   'u',
				'/[ÚÙÛÜ]/u'     =>   'U',
				'/ç/'           =>   'c',
				'/Ç/'           =>   'C',
				'/ñ/'           =>   'n',
				'/Ñ/'           =>   'N',
				'/–/'           =>   '-', // UTF-8 hyphen to "normal" hyphen
				'/[’‘‹›‚¨*$^µ%£§.*%µ<!:;,^&]_)(²/u'    =>   ' ', // Literally a single quote
				'/[“”«»„]/u'    =>   ' ', // Double quote
				'/ /'           =>   ' ', // nonbreaking space (equiv. to 0x160)
					);
				$str = strtr($str,$ch0);
				return $str;
			}
					

			$storeKey = "YM0dNsxX";

			
			

			$postParams = array();

			foreach ($_POST as $key => $value){

				array_push($postParams, $key);

				echo "<input type=\"hidden\" name=\"" .$key ."\" value=\"" .trim(replaceSpecialChar($value))."\" /><br />";

			}

			

			natcasesort($postParams);		

			

			$hashval = "";					

			foreach ($postParams as $param){				

				$paramValue = trim($_POST[$param]);

				$escapedParamValue = str_replace("|", "\\|", str_replace("\\", "\\\\", $paramValue));	

					

				$lowerParam = strtolower($param);

				if($lowerParam != "hash" && $lowerParam != "encoding" )	{

					$hashval = $hashval . $escapedParamValue . "|";

				}

			}

			

			

			$escapedStoreKey = str_replace("|", "\\|", str_replace("\\", "\\\\", $storeKey));	

			$hashval = $hashval . $escapedStoreKey;

			

			$calculatedHashValue = hash('sha512', $hashval);  

			$hash = base64_encode (pack('H*',$calculatedHashValue));

			

			echo "<input type=\"hidden\" name=\"HASH\" value=\"" .$hash."\" /><br />";			

		

		?>

	</form>

	

	  <script type="text/javascript" language="javascript">

        function moveWindow() {

           document.pay_form.submit();

        }

    </script>



</body>



</html>

