// Utility functions for manage pages.
//====================================

// Tabulator setup.
const Tabulator = require('tabulator-tables');

console.log(tableData.data);

var table = new Tabulator('#page-table', {
    data: tableData.data,
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
        {title: "Name", field: "name", editor: "input"},
        {title: "Author", field: "author", editor: "input"},
        {title: "Link", field: "uri" },
        {title: "Image", field: "image_path"},
        {title: "Created", field: "created_date"},
        {title: "Last Updated", field: "updated_date" }
    ]
});