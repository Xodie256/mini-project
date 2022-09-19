import '../assests/datatables/jquery.dataTables.min';
import '../assests/datatables-bs4/js/dataTables.bootstrap4.min';
import '../assests/datatables-responsive/js/dataTables.responsive.min';
import '../assests/datatables-responsive/js/responsive.bootstrap4.min';
import '../assests/datatables-buttons/js/dataTables.buttons.min';
import '../assests/datatables-buttons/js/buttons.bootstrap4.min';
import '../assests/jszip/jszip.min';
import '../assests/pdfmake/pdfmake.min';
//import '../assests/pdfmake/vfs_fonts';
//import '../assests/pdfmake/vfs_fonts.min';
import '../assests/datatables-buttons/js/buttons.html5.min';
import '../assests/datatables-buttons/js/buttons.print.min';
import '../assests/datatables-buttons/js/buttons.colVis.min';

$(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });