<!doctype html>
<html lang=“pt-br”>
	<head>
		<title>Curso de Javascript</title>
		<meta charset=“UTF-8”>
		<script>
			function ocultar(idObj){
				var obj=document.getElementById(idObj).hidden=true;
			}
			
			function mostrar(idObj){
				var obj=document.getElementById(idObj).hidden=false;
			}
		</script>
	</head>
	<body>
		<button onclick="mostrar('idH2')">Mostrar</button><button onclick="ocultar('idH2')">Ocultar</button>
		<h2 id="idH2">Canal Fessor Bruno</h2>
		
	</body>
</html>