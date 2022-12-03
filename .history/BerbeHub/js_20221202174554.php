<script>

var btn = document.getElementById('btn-div');
var email = document.querySelector('#email');
var telefone = document.querySelector("#telefone");
btn.addEventListener('click', function() {
    
  
  if(telefone.style.display === 'none'){
      telefone.style.display = 'block';
  } else {
      telefone.style.display = 'none';
  }
});
</script>


<script>

var btn = document.getElementById('btn-lo');
var email = document.querySelector('#email');

btn.addEventListener('click', function() {
    
  if(email.style.display === 'block') {
        email.style.display = 'none';
  } else {
        email.style.display = 'block';
  }
});




</script>

