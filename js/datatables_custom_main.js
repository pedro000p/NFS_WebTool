$(document).ready(function() {
	
    
    myTable = $('#myTable').DataTable({
    	responsive: true,

        buttons: [
                {
                extend:    'copy',
                text:      '<i class="fa fa-files-o"></i> Copy',
                titleAttr: 'Copy Table',
                className: 'btn btn-default btn-sm',
                header: false,
                title: null,
                exportOptions: {
                    columns: ':visible:not(:first-child)'
                }
                },	
                {
                extend:    'copy',
                text: '<i class="fa fa-files-o"></i> Json',
                titleAttr: 'Export Table to Json',
                className: 'btn btn-default btn-sm',
                title: null,
                action: function ( e, dt, button, config ) {
                    var data = dt.buttons.exportData({
    						columns: ':visible:not(:first-child)'
    					})
                    var d = new Date();
					var n = d.toISOString();
 
                    $.fn.dataTable.fileSave(
                        new Blob( [ JSON.stringify( data ) ] ),
                        'Export_ISILON-'+ n + '.json'
                    );
                }
            	},
                {
                extend:    'csv',
                text:      '<i class="fa fa-files-o"></i> CSV',
                titleAttr: 'Export Table to CSV',
                className: 'btn btn-default btn-sm',
                header: false,
                title: null,
                exportOptions: {
                    columns: ':visible:not(:first-child)'
                }
                },
                {
                extend:    'excel',
                text:      '<i class="fa fa-files-o"></i> Excel',
                titleAttr: 'Export Table to Excel',
                className: 'btn btn-default btn-sm',
                header: false,
                title: null,
                exportOptions: {
                    columns: ':visible:not(:first-child)'
                }
                },
                {
                extend:    'pdf',
                text:      '<i class="fa fa-file-pdf-o"></i> PDF',
                titleAttr: 'Export Table to PDF',
                className: 'btn btn-default btn-sm',
                exportOptions: {
                    columns: ':visible:not(:first-child)'
                }
                },               
                {
                extend:    'print',
                text:      '<i class="fa fa-print"></i> Print',
                titleAttr: 'Print Table',
                className: 'btn btn-default btn-sm',
                exportOptions: {
                    columns: ':visible:not(:first-child)'
                }
                },
                {
                extend:    'colvis',
                text:      '<i class="fa fa-columns"></i> Columns visibility',
                titleAttr: 'Columns visibility',
                className: 'btn btn-default btn-sm',
                }
                 
            ],
            oSearch: {"bSmart": false},
            lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],


        columnDefs: [{
            orderable: false,
            className: 'select-checkbox',
            targets: 0,
            checkboxes: {
               'selectRow': true
            }
        }],
        select: {
            style: 'os', // 'single', 'multi', 'os', 'multi+shift'
        },
        order: [
            [1, 'asc'],
        ],
        scrollY: "40em",
        scrollCollapse: true,
		bPaginate:true,
		bProcessing: true,
		pageLength: 10,
		aoColumns: [
		{ defaultContent: "" } ,
		{ mData: 'EXPORT' } ,
		{ mData: 'DNS' },
		{ mData: 'OUTBOUND' },
		{ mData: 'ISILON' }
		],
		stateSave: true                  
	

    });


    $('#myTable_btn').click(function() {
        if (myTable.rows({
                selected: true
            }).count() > 0) {
            myTable.rows({ search: 'applied' }).deselect();
            return;
        }

        myTable.rows({ search: 'applied' }).select();
    });

    myTable.on('select deselect', function(e, dt, type, indexes) {
        if (type === 'row') {
            // We may use dt instead of myTable to have the freshest data.
            if (dt.rows().count() === dt.rows({
                    selected: true
                }).count()) {
                // Deselect all items button.
                $('#myTable_btn i').attr('class', 'fa fa-check-square');
                return;
            }

            if (dt.rows({
                    selected: true
                }).count() === 0) {
                // Select all items button.
                $('#myTable_btn i').attr('class', 'fa fa-square');
                return;
            }

            // Deselect some items button.
            $('#myTable_btn i').attr('class', 'fa fa-minus-square');
        }
    });



   /*Append buttons out of datatables*/ 
    myTable.buttons().container("#myTable_wrapper > .dt-buttons").appendTo("div.datatable_btns");
   /* myTable.search( "^" + $(this).val() + "$", true, false, true).draw();*/




});



