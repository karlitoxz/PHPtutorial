Tutorial PHP:
https://www.youtube.com/watch?v=Oh3KNU7vTwU
Create
Read
Update
Delete

#Borrar cache añadiendo un javaScript
				echo "<script>if(window.history.replaceState){window.history.replaceState(null, null, window.location.href);} </script>";

#conexion a la BD mediante clase PDO

Recursos:
	Stylo:
		https://bootswatch.com/
		https://getbootstrap.com/
		Tutorial ejemplos:
		https://www.w3schools.com/bootstrap4/
	BD:
		https://www.w3schools.com/sql/
	Iconos:
		https://fontawesome.com/


Segurida informatica:
https://www.youtube.com/watch?v=-KafvnlaU08
	XSS:
		<script>alert("hacked")</script>
		<script>setInterval(function(){alert("hacked")},1000)</script>

		para evitar: PHP preg_match

	CSRF:
		alterar un link que contenga un enlace y cambiar datos como el ID.
		Solucion TOKEN:elementos encriptados. (MD5)

	SQL injection:
		para evitar: PHP preg_match()
					 bindParam()

