  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>       
        <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2019 SKKM (Satuan Kredit Kegiatan Mahasiswa). design by ade riska</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo site_url('assets/adm/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo site_url('assets/adm/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo site_url('assets/adm/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo site_url('assets/adm/js/sb-admin-2.min.js')?>"></script>


  <!-- Page level plugins -->
  <script src="<?php echo site_url('assets/adm/vendor/datatables/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo site_url('assets/adm/vendor/datatables/dataTables.bootstrap4.min.js')?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo site_url('assets/adm/js/demo/datatables-demo.js')?>"></script>

  <script type="text/javascript">
    function verifyAll()
    {
      var all = document.getElementsByName("id_user");
      var param = "all?";
      
      for(var i = 0; i < all.length; i++)
      {
        param += ('id_list[]='+(all[i].innerText) + '&'); // id_list=10,40
      }

      document.location=('<?php echo site_url('point/verif_all/')?>' + param);
    }

    //$_GET['id_list'] = array(10, 40);

  </script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#kategori').change(function(){
      var id=$(this).val();
      $.ajax({
        url : "<?php echo base_url();?>mhs/get_kategori",
        method : "POST",
        data : {id: id},
        async : false,
            dataType : 'json',
        success: function(data){
          var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<option value='+data[i].kode_kategori+'>'+data[i].tingkat_kegiatan+' '+ data[i].jabatan+'</option>';
                }
                $('.subkategori').html(html);
          
        }
      });
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function () {
    $("#submitBtn").click(function () {

        var form = $(".needs-validation")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');
    })
})
</script>

</body>

</html>
