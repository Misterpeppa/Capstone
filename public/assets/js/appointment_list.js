document.addEventListener('DOMContentLoaded', function () {

function countDataRows() {
        var upcomingRowCount = $('#upcomingTable tbody tr').length;
        var historyRowCount = $('#historyTable tbody tr').length;

        // Update the counters with the counts
        $('#upcoming-counter').text(upcomingRowCount);
        $('#history-counter').text(historyRowCount);
    }

    // Call the function when needed, for example, on page load
    $(document).ready(function() {
        countDataRows();
    });
    
});