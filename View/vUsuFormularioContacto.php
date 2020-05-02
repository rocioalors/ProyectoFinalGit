<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Enviar E-mail AJAX+PHP</title>
<script language="JavaScript" type="text/javascript" src="ajax.js"></script>
</head>
<body>
<form onsubmit="enviarMail(); return false" name="enviar_email" action="">
<p>E-mail de tu amigo</p>
<p>
<input  type="hidden" name="email_destino" value="alexa_net89@hotmail.com" />
</p>
<p>Tu nombre </p>
<p>
<input size="30" type="text" name="emisor" />
</p>
<p>Mensaje a enviar</p>
<p>
<textarea name="mensaje" cols="45%" rows="2" ></textarea>
</p>
<p>
<input type="submit" value="Enviar" />
</p>
</form>
<div id="resultado_mensaje" style="width:300px; height:30px; border:1px solid gray;">Resultado aqui.</div>
</body>
</html>