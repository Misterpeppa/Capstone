document.addEventListener('DOMContentLoaded', function () {
    function countDataRows() {
        var upcomingRowCount = $('#appointment_table_body tr').length;
        var historyRowCount = $('#appointment_pending_table_body tr').length;

        // Update the counters with the counts
        $('#upcoming-counter').text(upcomingRowCount);
        $('#history-counter').text(historyRowCount);
    }

    // Call the function when needed, for example, on page load
    $(document).ready(function() {
        countDataRows();
    });
});