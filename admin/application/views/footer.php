<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

</div>
        <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url()?>resources/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>resources/vendor/tether/tether.min.js"></script>
    <script src="<?=base_url()?>resources/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?=base_url()?>resources/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?=base_url()?>resources/vendor/chart.js/Chart.min.js"></script>
    <script src="<?=base_url()?>resources/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?=base_url()?>resources/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?=base_url()?>resources/js/sb-admin.min.js"></script>
<!---->
<script>
	function setThumbnail(photoId, vehicleId) {
		$.ajax({
			url: "<?=base_url()?>vehicles/setThumbnail/"
			, type: 'POST'
			, data: {photoId: photoId, vehicleId: vehicleId}
			, success: function (result) {
				// console.log(JSON.parse(result));
				if (result) {
					// $('#display_photo_'+photoId).remove();
					setTimeout(function () {
						alert('New Photo set as Thumbnail')
					}, 500);
				} else {
					alert('Something Went Wrong! Contact Administrator')
				}
			}
		});

	}
	function removeVehiclePhoto(photoId) {
		$.ajax({
			url: "<?=base_url()?>vehicles/deletePhoto/"
			, type: 'POST'
			, data: {photoId: photoId}
			, success: function (result) {
				// console.log(JSON.parse(result));
				if (result) {
					$('#display_photo_' + photoId).remove();
					setTimeout(function () {
						alert('Vehicle Photo removed Successfully')
					}, 500);
				} else {
					alert('Something Went Wrong! Contact Administrator')
				}
			}
		});

	}

</script>
</body>

</html>
