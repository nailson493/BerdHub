<script>

var btn = document.getElementById('btn-div');
var email = document.querySelector('.email');
var telefone = document.querySelector(".telefone");
btn.addEventListener('click', function() {
    
  if(email.style.display === 'block') {
        email.style.display = 'none';
  } else {
      container.style.display = 'block';
  }
  if(conta.style.display === 'none'){
      conta.style.display = 'block';
  } else {
      conta.style.display = 'none';
  }
});
</script>

