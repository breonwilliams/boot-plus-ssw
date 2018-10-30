var table;
jQuery(function($) {
    table = $('#coursesTable').DataTable({
        dom: 'lrtip',
        initComplete: function() {
            this.api().columns([2]).every(function() {
                var column = this;
                console.log(column);
                var select = $("#instructorFltr");
                column.data().unique().sort().each(function(d, j) {
                    select.append('<option value="' + d + '">' + d + '</option>')
                });
            });
            this.api().columns([3]).every(function() {
                var column = this;
                console.log(column);
                var select = $("#courseNumberFltr");
                column.data().unique().sort().each(function(d, j) {
                    select.append('<option value="' + d + '">' + d + '</option>')
                });
            });
            $("#instructorFltr,#courseNumberFltr").material_select();

            $('.dataTables_filter').each(function() {
                $(this).append('<button id="test" class="btn btn-default" type="button">Clear Search</button>');
            });

            var select = $('#dataTablesSelect select');
            $("#test").click(function() {

                select.val(""); //Sets the first option as selected
                select.material_select();
                select.trigger("change");
                table.search('').columns().search('').draw();
            });

        },
        "dom": '<"dt-buttons"Bf><"clear">lirtp',
        "paging": true,
        "autoWidth": true,
        "responsive": true,
        "buttons": [
            'colvis',
            'pdfHtml5',
            'print',
        ]
    });
});
jQuery(document).ready(function($){
$('#instructorFltr').on('change', function() {
    var search = [];

    $.each($('#instructorFltr option:selected'), function() {
        search.push($(this).val());
    });
    if(search.length)
    {
        if(search[0]=="")
            search.splice(0,1);
    }
    search = search.join('|');
    table.column(2).search(search, true, false).draw();
});

$('#courseNumberFltr').on('change', function() {
    var search = [];

    $.each($('#courseNumberFltr option:selected'), function() {
        search.push($(this).val());
    });
    if(search.length)
    {
        if(search[0]=="")
            search.splice(0,1);
    }
    search = search.join('|');
    table.column(3).search(search, true, false).draw();
    console.log("search"+search);
});
});

