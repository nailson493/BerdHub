<script>

var btn = document.getElementById('btn-div');
var email = document.querySelector('#email');
var telefone = document.querySelector("#telefone");
btn.addEventListener('click', function() {
    
  if(email.style.display === 'block') {
        email.style.display = 'none';
  } else {
        email.style.display = 'block';
  }
  if(telefone.style.display === 'block'){
      telefone.style.display = 'none';
  } else {
      telefone.style.display = 'block';
  }
});
</script>

