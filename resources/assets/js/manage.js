// Utility functions for manage pages.
//====================================
// Import libraries.
const Tabulator = require('tabulator-tables');

// Manage page JS.
// ===============
$(document).ready(function() {
    // Trigger focus whenever modal is shown.
    $('#manageModal').on('shown.bs.modal', function () {
        $('#optionInput').trigger('focus');
    });

    // Update and show option modal.
    $('#addNewMultiOption').on('click', function(e) {
        // Fetch and parse JSON stored in the page markup.
        var jsonData = $(this).closest('.option-dropdown').attr('data-modal-json');
        var modalJSON = JSON.parse(jsonData);

        // Set modal title.
        $('#manageModal .modal-title').text('Add new: ' + modalJSON.option_nice_name);

        // Clear input.
        $('#optionInput').val('');

        // Show modal.
        $('#manageModal').modal('show');
    });

    // Update the associated dropdown with the new value.
    $('#manageModalUpdate').on('click', function(e) {
        // Target div will have an id of the data attribute connected to this button.
        var targetContainer = $(this).attr('data-option-name');

        // Get value of input.
        var optionInput = $('#optionInput').val();

        // Set value index value for new item.
        var optionIndex = $('.dropdown-item').length;

        // Add new item to list.
        $(targetContainer + ' .dropdown-menu-options').append('<span class="dropdown-item"><input type="checkbox" data-dropdownId="'+ optionIndex +'" id="optionDropdownCheck" class="form-check-input" checked>'+ optionInput +'</span>');

        // Close modal.
        $('#manageModal').modal('hide');
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