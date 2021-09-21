<script src="<?php echo base_url() ?>js/script.js"></script>
<script>
  const pass_field = document.querySelector('.pass-key');
  const showBtn = document.querySelector('.show');
  showBtn.addEventListener('click', function(){
   if(pass_field.type === "password"){
     pass_field.type = "text";
     showBtn.textContent = "HIDE";
     showBtn.style.color = "#3498db";
   }else{
     pass_field.type = "password";
     showBtn.textContent = "SHOW";
     showBtn.style.color = "#222";
   }
  });
</script>
</body>
</html>
