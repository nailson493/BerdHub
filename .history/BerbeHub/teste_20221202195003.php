<html>
<head>
<title>Alterando dados</title>
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- <script type="text/javascript">
$(document).ready(function(){
	$('button#btn-salvar').click(function(){		
		// o botão é ocultado
		$('button#btn-salvar').hide();
		// o texto do botão é alterado e o atributo title
		$('button#btn-cancelar').text("Fechar").attr({
			title:"Fechar"
		});
	});
 
	$('button#btn-cancelar').click(function(){
		// o botão é exibido		
		$('button#btn-salvar').show();
		// retorna os valores corretos do botão
		$('button#btn-cancelar').text("Cancelar").attr({
			title:"Cancelar"
		});
	});
});	
</script>	 -->
</head>
<body>
  <script type="text/javascript">
 
var btn = document.getElementById('btn-salvar');
var email = document.querySelector('#btn-cancelar');
btn.addEventListener('click', function() {
    
  if(email.style.display === 'block') {
        email.style.display.hide();
    
  } else {
        email.style.display = 'block';
  }
});

  </script>	



	<button type="button" id="btn-salvar" title="Salvar">Salvar</button>&nbsp;
	<button type="button" id="btn-cancelar" title="Cancelar">Cancelar</button>
</body>
</html>