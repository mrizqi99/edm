<script src="<?php echo base_url() ?>assets/js/script.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery-ui.min.js"></script>
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
<script type="text/javascript">
  function opsi(value){
    var diesName = $("#diesName").val();
    if (diesName == "off") {
      document.getElementById("diesNo").disabled = true;
      $("#diesNo").val('');
    }
    else {
      document.getElementById("diesNo").disabled = false;
      $.ajax({
        url : '<?php echo site_url('maintainMenu/autofill') ?>',
        data : 'diesName='+diesName,
        success: function(data){
          var json = data,
          obj = JSON.parse(json);
          $("#diesNo").val(obj.diesNo);
        }
      });
    }
  }
</script>
<!-- <script type="text/javascript">
  function autofill(){
    var nim = $('#nim').val();
    $.ajax({
      url : 'autofill-ajax.php',
      data : 'nim='+nim,
      success: function(data){
        var json = data,
        obj = JSON.parse(json);
        $("#nama").val(obj.nama_siswa);
        $("#jurusan").val(obj.tempat_lahir);
      }
    });
  }
</script> -->
<!-- <script type="text/javascript">
  $(document).ready(function(){
    $("#diesName").autocomplete({
      source : "<?php echo site_url('maintainMenu/buSearch/?') ?>"
    });
  });
</script> -->
<!-- <script>
  $(document).ready(function()
  {
    $("#diesName").autocomplete({
      source : "<?php echo site_url('maintainMenu/get_autocomplete') ?>",

      select: function(event, ui){
        $('[name="diesName"]').val(ui.item.diesName);
        $('[name="diesNo"]').val(ui.item.diesNo);

      }
    });
});
</script> -->
</body>
</html>
