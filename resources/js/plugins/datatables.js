$(document).ready(function () {

    const tableElement = $('#data-table');

    if (!tableElement.length) {
        return;
    }

    const table = tableElement.DataTable({
        scrollX: true,
        paging: true,
        searching: true,
        lengthMenu: [5, 10, 25, 50, 100],
        fixedHeader: true,
        fixedColumns: true,
        autoWidth: true
    });

    $(window).on('resize', function () {
        setTimeout(function () {
            table.columns.adjust();
            table.fixedHeader.adjust();
        }, 100);
    });
});