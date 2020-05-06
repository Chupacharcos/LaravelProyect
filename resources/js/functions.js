$(document).ready(function () {
    $('#datatable').dataTable({
        "bPaginate": false,
        "bFilter": false,
        order: [
            [0, "desc"],
            [1, "desc"]
        ],
    });
});
