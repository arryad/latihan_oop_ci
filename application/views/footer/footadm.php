	<script>
		function confirmDialog() {
		 return confirm('Apakah anda yakin akan menghapus data siswa ini?')
		}

		function hanyaAngka(evt) {
			  var charCode = (evt.which) ? evt.which : event.keyCode
			   if (charCode > 31 && (charCode < 48 || charCode > 57))
	 
			    return false;
			  	return true;
		}
		
	    function runPopup(){
		    window.alert('data berhasil di simpan!');
	    }  
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js?<?= time()?>" type="text/javascript" charset="utf-8" async defer></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js?<?= time()?>"></script>

	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/datatables.js?<?= time()?>"></script>
	<script>
		$(document).ready(function () {
	    $('#tableData').DataTable();
		} );
	</script>
</body>
</html>