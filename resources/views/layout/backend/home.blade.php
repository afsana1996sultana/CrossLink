
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CrossLink</title>

		<!-- Favicons -->
		<link rel="shortcut icon" href="{{url('backend/image/crosslink_favicon.png')}}" type="image/x-icon">
  		<link rel="icon" href="{{url('backend/image/crosslink_favicon.png')}}" type="image/x-icon">

		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{url('backend/plugins/fontawesome-free/css/all.min.css')}}">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	
		<!-- Theme style -->
		<link rel="stylesheet" href="{{url('backend/dist/css/adminlte.min.css')}}">
		<!-- overlayScrollbars -->
		<link rel="stylesheet" href="{{url('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

	
		<!-- DataTables -->
		<link rel="stylesheet" href="{{url('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
		<link rel="stylesheet" href="{{url('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
		<link rel="stylesheet" href="{{url('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

		<!-- Theme style -->
		<link rel="stylesheet" href="{{url('backend/dist/css/adminlte.min.css')}}">
		<!-- summernote -->
		<link rel="stylesheet" href="{{url('backend/plugins/summernote/summernote-bs4.min.css')}}">
		<!-- fullCalendar -->
		<link rel="stylesheet" href="{{url('backend/plugins/fullcalendar/main.css')}}">
		<!-- CodeMirror -->
		<link rel="stylesheet" href="{{url('backend/plugins/codemirror/codemirror.css')}}">
		<link rel="stylesheet" href="{{url('backend/plugins/codemirror/theme/monokai.css')}}">
		<!-- SimpleMDE -->
		<!-- <link rel="stylesheet" href="{{url('backend/plugins/simplemde/simplemde.min.css')}}"> -->

		<!-- Jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/af-2.3.7/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/r-2.2.9/datatables.min.js"></script>

	</head>
    <body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
		<!-- Main Wrapper -->
        <div class="main-wrapper">	
			<!-- Navbar -->
			@include("layout.backend.navbar")
			<!-- /.navbar -->

			<!-- Main Sidebar Container -->
			@include("layout.backend.mainsidebar")

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->

				<!-- /.content-header -->

				<!-- Main content -->
				<section class="content">
					@yield('page')
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->

			<!-- Footer -->
            @include("layout.backend.footer")
			<!-- /Footer -->	
        </div>
		<!-- /Main Wrapper -->
		<!-- jQuery -->
		<script src="{{url('backend/plugins/jquery/jquery.min.js')}}"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="{{url('backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
		$.widget.bridge('uibutton', $.ui.button)
		</script>
		<!-- Bootstrap 4 -->
		<script src="{{url('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<!-- Summernote -->
		<script src="{{url('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
		<!-- overlayScrollbars -->
		<script src="{{url('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
		
		<!-- AdminLTE App -->
		<script src="{{url('backend/dist/js/adminlte.js')}}"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="{{url('backend/dist/js/demo.js')}}"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<!-- DataTables  & Plugins -->
		<script src="{{url('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
		<script src="{{url('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
		<script src="{{url('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
		<script src="{{url('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
		<script src="{{url('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{url('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
		<script src="{{url('backend/plugins/jszip/jszip.min.js')}}"></script>
		<script src="{{url('backend/plugins/pdfmake/pdfmake.min.js')}}"></script>
		<script src="{{url('backend/plugins/pdfmake/vfs_fonts.js')}}"></script>
		<script src="{{url('backend/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
		<script src="{{url('backend/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
		<script src="{{url('backend/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

		<!----///////////////////////////////////////////////////!-->
		<!-- CodeMirror -->
		<script src="{{url('backend/plugins/codemirror/codemirror.js')}}"></script>
		<script src="{{url('backend/plugins/codemirror/mode/css/css.js')}}"></script>
		<script src="{{url('backend/plugins/codemirror/mode/xml/xml.js')}}"></script>
		<script src="{{url('backend/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="{{url('backend/dist/js/demo.js')}}"></script>
		<!--jquery -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js" integrity="sha512-cJMgI2OtiquRH4L9u+WQW+mz828vmdp9ljOcm/vKTQ7+ydQUktrPVewlykMgozPP+NUBbHdeifE6iJ6UVjNw5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		@yield('scripts')
<script>
  $(function () { 
		$(document).ready(function() {
			$('.summernote').summernote();
		});
		
		// Summernote
		$('#summernote').summernote()

	})

	$(function () {
		$("#example1").DataTable({
		"responsive": true, "lengthChange": false, "autoWidth": false,
		"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
		}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
		$('#example2').DataTable({
		"paging": true,
		"lengthChange": false,
		"ordering": true,
		"info": true,
		"autoWidth": false,
		"responsive": true,
		});
	});
</script>
</body>
</html>