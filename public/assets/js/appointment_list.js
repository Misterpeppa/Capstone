document.addEventListener('DOMContentLoaded', function () {
    function countDataRows() {
        var upcomingRowCount = $('#appointment_table_body tr').length;
        var recentRowCount = $('#appointment_pending_table_body tr').length;
        var rejectedRowCount = $('#appointment_rejected_table_body tr').length;
        var historyCount = $('#appointment_history_table_body tr').length;

        // Update the counters with the counts
        $('#upcoming-counter').text(upcomingRowCount);
        $('#recent-counter').text(recentRowCount);
        $('#rejected-counter').text(rejectedRowCount);
        $('#history-counter').text(historyCount);
    }

    // Call the function when needed, for example, on page load
    $(document).ready(function() {
        countDataRows();
    });




    // Add an event listener for the buttons inside dropdown-content
    document.querySelectorAll(".button-action button").forEach(function (button) { button.addEventListener("click", function (event) {
          event.preventDefault();
          const action = this.getAttribute("data-action");
          if (action === "reschedule") {
            // const dropdownContent = this.parentElement;
            // dropdownContent.style.display = "none";

            var modal2 = new bootstrap.Modal(
              document.getElementById("resched_modal")
            );

            modal2.show();
          } else if(action === "cancel_appointment"){
            var cancel_appointment = new bootstrap.Modal(document.getElementById("cancel_appointment_modal"));
            cancel_appointment.show();


          }
        });
      });


      function setupDateInputRestrictions() {
        // Get the current date
        var currentDate = new Date();
        var currentDateString = currentDate.toISOString().split('T')[0]; // Format: YYYY-MM-DD
    
        // Get the date input element by its ID
        var dateInput = document.getElementById('appointment_date-1');
    
        // Set the minimum attribute to the current date
        dateInput.setAttribute('min', currentDateString);
    
        // Add an event listener to disable keyboard events
        dateInput.addEventListener('keydown', function (event) {
            event.preventDefault();
        });
    
        // Add an event listener to validate on input change
        dateInput.addEventListener('input', function () {
            // Parse the input date value
            var selectedDate = new Date(dateInput.value);
    
            // Compare the selected date with the current date
            if (selectedDate < currentDate) {
                alert('Please select a date from present to future.');
                dateInput.value = currentDateString; // Reset to the current date
            }
        });
    }

    setupDateInputRestrictions();


    
    
});