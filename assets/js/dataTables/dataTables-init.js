jQuery(function ($) {
  //Only needed for the filename of export files.
  //Normally set in the title tag of your page.
  //document.title='Simple DataTable';
  // DataTable initialisation
  $('#coursesTable').DataTable(
      {
        "dom": '<"dt-buttons"Bf><"clear">lirtp',
        "paging": true,
        "autoWidth": true,
        "responsive": true,
        "buttons": [
          'colvis',
          'pdfHtml5',
          'print',
        ]

      }
  );
});