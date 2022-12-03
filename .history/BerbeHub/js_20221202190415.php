

<!-- <script>
function myFunction() {
  document.getElementById("btn-email").innerHTML = "YOU CLICKED ME!";
}
</script> -->

<script>

var btn = document.getElementById('btn-telefone');
var email = document.querySelector('#email');
var telefone = document.querySelector("#telefone");
btn.addEventListener('click', function() {
    
  if(email.style.display === 'block') {
        email.style.display = 'none';
          // email.innerHTML ="EMail";
          document.getElementById("btn-telefone").innerHTML = "YOU CLICKED ME!";
  } else {
        email.style.display = 'block';
  }
  if(telefone.style.display === 'none'){
      telefone.style.display = 'block';
      // telefone.innerHTML ="dasd";
      document.getElementById("btn-telefone").innerHTML = "nailson!";
  } else {
      telefone.style.display = 'none';
  }
});
</script>










<script>

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

