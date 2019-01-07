// Utility functions for manage pages.
//====================================
// Import libraries.
const Tabulator = require('tabulator-tables');

// Manage page JS.
// ===============
$(document).ready(function() {
    $('#addNewMultiOption').on('click', function(e) {
        // Fetch and parse JSON stored in the page markup.
        var jsonData = $(this).closest('.option-dropdown').attr('data-modal-json');
        var modalJSON = JSON.parse(jsonData);

        // Set modal title.
        $('#manage-modal .modal-title').text('Add new ' + modalJSON.option_nice_name);

        // Show modal.
        $('#manage-modal').modal('show');
    });
});

// Tabulator setup.
// ================
// Page Management.
if ($('body').hasClass('page')) {
    var pageTable = new Tabulator('#page-table', {
        data: tableData,
        layout: "fitColumns",
        responsiveLayout: "hide",
        tooltips: false,
        history: true,
        pagination: "local",
        paginationSize: 10,
        moveableColumns: true,
        resizeableRows: false,
        initialSort: [
            {column: "name", dir: "asc"}
        ],
        columns: [
            {title: "Title", field: "title"},
            {title: "Author", field: "author"},
            {title: "Link", field: "uri",
            formatter:"link", 
                formatterParams:{
                    labelField:"uri",
                    urlPrefix:"/page/",
                    target:"_blank",
                }
            },
            {title: "Image", field: "image_path", formatter:"image", 
                formatterParams:{
                    height:"50px",
                    width:"50px"
                }
            },
            {title: "Created", field: "created_at",
            formatter:"datetime", formatterParams:{
                inputFormat:"YYYY-MM-DD",
                outputFormat:"DD/MM/YY"
            }
        },
            {title: "Last Updated", field: "updated_at"},
            {title: "Status", field: "status", editor: "select"}
        ]
    });
}