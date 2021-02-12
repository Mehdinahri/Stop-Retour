<html>

<head>

<title>Stope Retour</title>

<meta http-equiv="Content-Language" content="tr">

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9">

<meta http-equiv="Pragma" content="no-cache">

<meta http-equiv="Expires" content="now">

</head>



<body onload="javascript:moveWindow()">



	<form method="POST" action="{{ route('paiement.Validpaie') }}"  enctype="multipart/form-data" id='profileForm'>

        @csrf
    
        @method('PUT')

        <input type="hidden" name="user_id" value="{{$paiement->user_id}}" /><br />
        <input type="hidden" name="pack_id" value="{{$paiement->pack_id}}" /><br />

	</form>

	

	  <script type="text/javascript" language="javascript">

        function moveWindow() {

           document.pay_form.submit();

        }

    </script>



</body>



</html>

