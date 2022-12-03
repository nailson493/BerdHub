<html>
<head>
<title>Alterando dados</title>
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script type="text/javascript">

var btn = document.getElementById('btn-lol');
var email = document.querySelector('#email');
var telefone = document.querySelector("#telefone");
btn.addEventListener('click', function() {
    
  if(email.style.display === 'block') {
        email.style.display = 'none';
    
  } else {
        email.style.display = 'block';
  }
  if(telefone.style.display === 'none'){
      telefone.style.display = 'block';
  } else {
      telefone.style.display = 'none';
  }
});
</script>	
</head>
<body>
	<button type="button" id="btn-salvar" title="Salvar">Salvar</button>&nbsp;
	<button type="button" id="btn-cancelar" title="Cancelar">Cancelar</button>
</body>
</html>