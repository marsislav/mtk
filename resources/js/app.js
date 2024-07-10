import "./bootstrap";
import $ from "jquery";
import "datatables.net";
import "datatables.net-dt/css/jquery.dataTables.css";

$(document).ready(function () {
    // DataTable initialization
    var table = $("#records-table").DataTable({
        pageLength: 20,
        paging: true,
        ordering: true,
        info: true,
        order: [[0, "asc"]],
        dom: "lrtip", // This hides the global search field
    });

    // Setup - add a text input to each footer cell
    $("#records-table tfoot th").each(function () {
        var title = $(this).text();
        $(this).html(
            '<input type="text" placeholder="Search ' + title + '" />'
        );
    });

    // Apply the search
    table.columns().every(function () {
        var that = this;

        $("input", this.footer()).on("keyup change clear", function () {
            if (that.search() !== this.value) {
                that.search(this.value).draw();
            }
        });
    });

    // Re-enable the global search field
    $("#records-table_filter").show();
});
