document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".tab");
  const tabContents = document.querySelectorAll(".tab-content");

  function showTab(tabIndex) {
    for (let i = 0; i < tabContents.length; i++) {
      tabContents[i].classList.remove("active");
      tabs[i].classList.remove("active");
    }
    tabContents[tabIndex].classList.add("active");
    tabs[tabIndex].classList.add("active");
  }

  tabs.forEach((tab, index) => {
    tab.addEventListener("click", function () {
      showTab(index);
    });
  });

  showTab(0); // Show the Approved appointments tab initially

  const sidebarNavItems = document.querySelectorAll(".sidebar a");
  sidebarNavItems.forEach((navItem) => {
    navItem.addEventListener("click", function () {
      sidebarNavItems.forEach((item) => {
        item.classList.remove("active");
      });
      navItem.classList.add("active");

      const tabContentId = navItem.getAttribute("data-tab");
      const tabContent = document.getElementById(tabContentId);
      showTab(parseInt(tabContent.dataset.index));
    });
  });

  // Update the data count for each tab
  function updateTabCounts() {
    const tabLinks = document.querySelectorAll(".tab");
    const tabCounts = {
      approved: 0,
      pending: 0,
      rejected: 0,
    };

    // Count the number of rows in each tab
    const approvedRows = document.querySelectorAll("#approved tbody tr");
    const pendingRows = document.querySelectorAll("#pending tbody tr");
    const rejectedRows = document.querySelectorAll("#rejected tbody tr");

    tabCounts.approved = approvedRows.length;
    tabCounts.pending = pendingRows.length;
    tabCounts.rejected = rejectedRows.length;

    // Update the count numbers in the tab links
    tabLinks.forEach((tab) => {
      const dataTab = tab.getAttribute("data-tab");
      const count = tabCounts[dataTab];

      const countElement = tab.querySelector(".tab-count");
      countElement.textContent = count.toString();
    });
  }

  // Function to toggle checkboxes in the table rows
  function toggleCheckboxes(checkbox) {
    const checkboxes = document.querySelectorAll("#pending tbody input[type='checkbox']");
    checkboxes.forEach((rowCheckbox) => {
      const row = rowCheckbox.closest("tr");
      if (rowCheckbox.checked) {
        row.classList.add("selected-row");
      } else {
        row.classList.remove("selected-row");
      }
    });
  }

  // Function to toggle row styles when clicked or checkbox is clicked
  function toggleRowStyles(row) {
    row.classList.toggle("active-row");
  }

  // Function to handle row click event
  function handleRowClick(event) {
    const target = event.target;
    const row = target.closest("tr");
    if (target.tagName === "INPUT") {
      // If the checkbox was clicked, just toggle the styles
      toggleRowStyles(row);
    } else {
      // If any other part of the row was clicked, simulate the checkbox click and toggle the styles
      const checkbox = row.querySelector("input[type='checkbox']");
      if (checkbox) {
        checkbox.checked = !checkbox.checked;
        toggleRowStyles(row);
      }
    }
  }

  // Fetch data from the database and dynamically generate table rows
  const tableBodyApproved = document.querySelector("#approved tbody");
  const tableBodyPending = document.querySelector("#pending tbody");
  const tableBodyRejected = document.querySelector("#rejected tbody");

  // Sample data to simulate fetching from the database
  const appointments = [
    
    // Add more appointment objects here...
  ];

  // Create a reference to the checkbox in the table header
  const selectAllCheckboxes = document.querySelectorAll("th input[type='checkbox']");

  // Add event listener to the checkboxes in the table header
  selectAllCheckboxes.forEach((checkbox) => {
    checkbox.addEventListener("change", function () {
      // Select all the checkboxes in the table rows
      const checkboxes = document.querySelectorAll("#pending tbody input[type='checkbox']");
      checkboxes.forEach((rowCheckbox) => {
        rowCheckbox.checked = checkbox.checked;
      });
    });
  });

  // Loop through the appointments and generate table rows
  appointments.forEach((appointment) => {
    const row = generateTableRow(appointment);

    // Append the row to the appropriate table body based on the appointment status
    if (appointment.status === "Pending") {
      tableBodyPending.appendChild(row);
    } else if (appointment.status === "Approved") {
      tableBodyApproved.appendChild(row);
    } else if (appointment.status === "Rejected") {
      tableBodyRejected.appendChild(row);
    }
  });

  function showMenu(event) {
    const menu = event.target.nextElementSibling;
    menu.style.visibility = "visible";
    document.addEventListener("click", hideMenus);
    event.stopPropagation();
  }
  
  // Function to hide all menus
  function hideMenus() {
    const menus = document.querySelectorAll(".menu");
    menus.forEach((menu) => {
      menu.style.visibility = "hidden";
    });
    document.removeEventListener("click", hideMenus);
  }
  
  // Function to show the accept modal
  function showAcceptModal() {
    const modal = document.getElementById("acceptModal");
    modal.style.display = "block";
  }
              
  // Function to hide the modals
  function hideAcceptModal() {
    const modal = document.getElementById("acceptModal");
    modal.style.display = "none";
  }
  // Function to show the accept modal
  function showRejectModal() {
    const modal = document.getElementById("rejectModal");
    modal.style.display = "block";
  }
              
  // Function to hide the modals
  function hideRejectModal() {
    const modal = document.getElementById("rejectModal");
    modal.style.display = "none";
  }

  function showDeleteModal() {
    const modal = document.getElementById("deleteModal");
    modal.style.display = "block";
  }
      
          // Function to hide the modals
  function hideDeleteModal() {
      const modal = document.getElementById("deleteModal");
      modal.style.display = "none";
  } 

  function showEraseModal() {
    const modal = document.getElementById("eraseModal");
    modal.style.display = "block";
  }
      
          // Function to hide the modals
  function hideEraseModal() {
      const modal = document.getElementById("eraseModal");
      modal.style.display = "none";
  } 
  
        // Function to show the Compete modal
  function showCompleteModal() {
    const modal = document.getElementById("ApproveModal");
    modal.style.display = "block";
  }

   // Function to hide the Compete modal
  function hideCompleteModal() {
    const modal = document.getElementById("ApproveModal");
    modal.style.display = "none";
  }
  // Function to show the Revert modal
  function showRevertModal() {
    const modal = document.getElementById("rejectedModal");
    modal.style.display = "block";
  }

  // Function to hide the Revert modal
  function hideRevertModal() {
    const modal = document.getElementById("rejectedModal");
    modal.style.display = "none";
  }
                    
  

  // Function to generate a table row based on appointment data
  function generateTableRow(appointment) {
    const row = document.createElement("tr");
  
    const checkboxCell = document.createElement("td");
    const checkbox = document.createElement("input");
    checkbox.type = "checkbox";
    checkboxCell.appendChild(checkbox);
  
    const noCell = document.createElement("td");
    noCell.textContent = appointment.no;
    noCell.classList.add("text-style"); // Add the CSS class for text (excluding time)
  
    const clientCell = document.createElement("td");
    clientCell.textContent = appointment.client;
    clientCell.classList.add("text-style"); // Add the CSS class for text (excluding time)
  
    const statusCell = document.createElement("td");
    statusCell.classList.add("text-style"); // Add the CSS class for text (excluding time)
  
    const patientInfoCell = document.createElement("td");
    patientInfoCell.textContent = appointment.patient_info;
    patientInfoCell.classList.add("text-style"); // Add the CSS class for text (excluding time)
  
    const appointmentCell = document.createElement("td");
  
    const appointmentTime = document.createElement("div");
    appointmentTime.textContent = appointment.appointment.split(",")[0].trim(); // Extract the time part
    appointmentTime.classList.add("appointment-time"); // Add the CSS class for time
    appointmentCell.appendChild(appointmentTime);
  
    const appointmentDate = document.createElement("div");
    appointmentDate.textContent = appointment.appointment.split(",")[1]; // Extract the date part
    appointmentDate.classList.add("appointment-date"); // Add the CSS class for date
    appointmentCell.appendChild(appointmentDate);
  
    const serviceCell = document.createElement("td");
    serviceCell.textContent = appointment.service;
    serviceCell.classList.add("text-style"); // Add the CSS class for text (excluding time)
  
    const actionsCell = document.createElement("td");
    actionsCell.classList.add("actions"); // Add the CSS class for text (excluding time)

    actionsCell.style.display = "flex";
    actionsCell.style.justifyContent = "end";
    actionsCell.style.alignItems = "end";

    // Create button to toggle the menu
    const menuButton = document.createElement("button");
    menuButton.textContent = "Actions";
    menuButton.classList.add("menu-button");
    menuButton.addEventListener("click", showMenu);
    actionsCell.appendChild(menuButton);
  
  
    // Create menu for the table
    const menu = document.createElement("div");
    menu.classList.add("menu");
    menu.style.visibility = "hidden"; // Hide the menu by default
    


    // Check the status and update the status cell accordingly
    if (appointment.status === "Pending") {
      const pendingStatusDiv = document.createElement("div");
      pendingStatusDiv.textContent = "Pending";
      pendingStatusDiv.classList.add("pending-status");
      statusCell.appendChild(pendingStatusDiv);

      // Attach event listener to the "Accept" option
      const acceptItem = document.createElement("div");
      acceptItem.textContent = "Accept";
      acceptItem.addEventListener("click", function(event){
        event.stopPropagation();
        showAcceptModal()
          // Attach event listener to the "Cancel" button in the accept modal
        document.getElementById("cancelAcceptBtn").addEventListener("click", hideAcceptModal);
          // Attach event listener to the "Continue" buttons for accept modal
        document.getElementById("continueAcceptBtn").addEventListener("click", handleAcceptClick);

      });

      // Create a separate function to handle accepting appointments
      function handleAcceptClick() {
        
        const checkboxes = document.querySelectorAll("#pending tbody input[type='checkbox']:checked");
        checkboxes.forEach((checkbox) => {
          const row = checkbox.closest("tr");
          const appointment = {
            no: row.children[1].textContent,
            client: row.children[2].textContent,
            status: "Approved",
            patient_info: row.children[4].textContent,
            appointment: row.children[5].querySelector(".appointment-time").textContent + ", " + row.children[5].querySelector(".appointment-date").textContent,
            service: row.children[6].textContent,
          };
          const newRow = generateTableRow(appointment);
          tableBodyApproved.appendChild(newRow);
          row.remove();
        });
        hideAcceptModal();// Hide the modal after performing the action

        updateTabCounts();
      }

    
      //menu item pagka click sa action button - REJECT OPTION
      const rejectItem = document.createElement("div");
      rejectItem.textContent = "Reject";
      rejectItem.addEventListener("click", function (event) {
        event.stopPropagation();
        showRejectModal();
        document.getElementById("continueRejectBtn").addEventListener("click", handleRejectClick);
        document.getElementById("cancelRejectBtn").addEventListener("click", hideRejectModal);
      });

      // Create a separate function to handle rejeceting appointments
      function handleRejectClick() {
        const checkboxes = document.querySelectorAll("#pending tbody input[type='checkbox']:checked");
        checkboxes.forEach((checkbox) => {
          const row = checkbox.closest("tr");
            const appointment = {
              no: row.children[1].textContent,
              client: row.children[2].textContent,
              status: "Rejected",
              patient_info: row.children[4].textContent,
              appointment: row.children[5].querySelector(".appointment-time").textContent + ", " + row.children[5].querySelector(".appointment-date").textContent,
              service: row.children[6].textContent,
            };
            const newRow = generateTableRow(appointment);
            tableBodyRejected.appendChild(newRow);
            row.remove();
            updateTabCounts();
            hideMenus();
            
            
          });hideRejectModal();// Hide the modal after performing the action

        updateTabCounts();
      }


      const deleteItem = document.createElement("div");
      deleteItem.textContent = "delete";
      deleteItem.addEventListener("click", function (event) {
        event.stopPropagation();
        showDeleteModal()
        document.getElementById("continueDeleteBtn").addEventListener("click", handleDeleteClick);
        document.getElementById("cancelDeleteBtn").addEventListener("click", hideDeleteModal);

      });
      // Create a separate function to handle deleting appointments
      function handleDeleteClick() {
        const checkboxes = document.querySelectorAll("#pending tbody input[type='checkbox']:checked");
        checkboxes.forEach((checkbox) => {
          const row = checkbox.closest("tr");
            row.remove();
            updateTabCounts();
            hideMenus();
            
            
          });hideDeleteModal();// Hide the modal after performing the action

        updateTabCounts();
      }

      

    // Append the menu to the main container for the table
    actionsCell.appendChild(menu);

    // Append menu items to the menu for the Pending table
    menu.appendChild(acceptItem);
    menu.appendChild(rejectItem);
    //menu.appendChild(deleteItem);

    } else if (appointment.status === "Approved") {
      const upcomingStatusDiv = document.createElement("div");
      upcomingStatusDiv.textContent = "Upcoming"; // Set the status to "Upcoming" for approved appointments
      upcomingStatusDiv.classList.add("upcoming-status"); // Add the CSS class for "Upcoming" status div
      statusCell.appendChild(upcomingStatusDiv);

      // Create a separate function to handle accepting appointments

      function handleContinueButton() {
        const checkboxes = document.querySelectorAll("#approved tbody input[type='checkbox']:checked");
        checkboxes.forEach((checkbox) => {
          const row = checkbox.closest("tr");
          // Update the status of the row to "Completed"
          const statusElement = row.querySelector(".upcoming-status");
          statusElement.textContent = "Completed"; // Change "Upcoming" to "Completed"
          statusElement.style.backgroundColor = "#5CA500"; // Set the background color to #5CA500
          row.dataset.status = "Completed";
          
        });
        hideMenus();
        // Hide the modal after performing the action
        hideCompleteModal();
        
      }
      // Create menu items for the Approved table
      const MarkAsDoneItem = document.createElement("div");
      MarkAsDoneItem.textContent = "Mark as Done";
      MarkAsDoneItem.addEventListener("click", function () {
        showCompleteModal();
        document.getElementById("continueBtn").addEventListener("click",handleContinueButton);
  
        document.getElementById("cancelBtn").addEventListener("click", hideCompleteModal);
      });
    

    // Append the menu to the main container for the table
    actionsCell.appendChild(menu);

    // Append menu items to the menu for the Approve table
    menu.appendChild(MarkAsDoneItem);

    } 
      else if (appointment.status === "Rejected") {
        const rejectedStatusDiv = document.createElement("div");
        rejectedStatusDiv.textContent = "Rejected";
        rejectedStatusDiv.classList.add("rejected-status"); // Add the CSS class for "Rejected" status div
        statusCell.appendChild(rejectedStatusDiv);
    
        // Create menu items for the Rejected table
        const revertItem = document.createElement("div");
        revertItem.textContent = "Revert";
        revertItem.addEventListener("click", function (event) {
          event.stopPropagation();
          showRevertModal();
          document.getElementById("continueRevertBtn").addEventListener("click", handleRevertOption);

          document.getElementById("cancelRevertBtn").addEventListener("click", hideRevertModal);
        });
    
        function handleRevertOption() {
          const checkboxes = document.querySelectorAll("#rejected tbody input[type='checkbox']:checked");
          checkboxes.forEach((checkbox) => {
            const row = checkbox.closest("tr");
            const appointment = {
              no: row.children[1].textContent,
              client: row.children[2].textContent,
              status: "Pending", // Change the status back to "Pending"
              patient_info: row.children[4].textContent, // Assuming the patient info is in the 4th cell
              appointment: row.children[5].textContent, // Assuming the appointment is in the 5th cell
              service: row.children[6].textContent, // Assuming the service is in the 6th cell
            };
            const newRow = generateTableRow(appointment);
            tableBodyPending.appendChild(newRow);
            row.remove();
            updateTabCounts();
          });
          hideMenus();
          hideRevertModal();
        }

        const eraseItem = document.createElement("div");
        eraseItem.textContent = "Delete";
        eraseItem.addEventListener("click", function (event) {
        event.stopPropagation();
        showEraseModal()
        document.getElementById("continueEraseBtn").addEventListener("click", handleEraseClick);
        document.getElementById("cancelEraseBtn").addEventListener("click", hideEraseModal);

      });
      // Create a separate function to handle accepting appointments
      function handleEraseClick() {
        const checkboxes = document.querySelectorAll("#rejected tbody input[type='checkbox']:checked");
        checkboxes.forEach((checkbox) => {
          const row = checkbox.closest("tr");
            const appointment = {
              no: row.children[1].textContent,
              client: row.children[2].textContent,
              status: "Rejected",
              patient_info: row.children[4].textContent,
              appointment: row.children[5].querySelector(".appointment-time").textContent + ", " + row.children[5].querySelector(".appointment-date").textContent,
              service: row.children[6].textContent,
            };
            row.remove();
            updateTabCounts();
            hideMenus();
            
          });hideEraseModal();// Hide the modal after performing the action
          

        updateTabCounts();
      }
        
        // Append the menu to the main container for the table
        actionsCell.appendChild(menu);
        // Append the "Delete" menu item to the menu for the Rejected table
        menu.appendChild(revertItem);
        menu.appendChild(eraseItem);
  
      }  
    
  
  
    // Append cells to the row
    row.appendChild(checkboxCell);
    row.appendChild(noCell);
    row.appendChild(clientCell);
    row.appendChild(statusCell);
    row.appendChild(patientInfoCell);
    row.appendChild(appointmentCell);
    row.appendChild(serviceCell);
    row.appendChild(actionsCell);
  
    return row;
  }
  

  // Attach event listeners to each row for click events
  const tableRows = document.querySelectorAll("tbody tr");
  tableRows.forEach((row) => {
    row.addEventListener("click", handleRowClick);
  });

  // Attach event listeners to the action buttons in the header
  const acceptButtonHeader = document.querySelector(".accept-button");
  const rejectButtonHeader = document.querySelector(".reject-button");

  acceptButtonHeader.addEventListener("click", acceptSelectedAppointments);
  rejectButtonHeader.addEventListener("click", rejectSelectedAppointments);

  function acceptSelectedAppointments() {
    const checkboxes = document.querySelectorAll("#pending tbody input[type='checkbox']:checked");
    checkboxes.forEach((checkbox) => {
      const row = checkbox.closest("tr");
      const appointment = {
        no: row.children[1].textContent,
        client: row.children[2].textContent,
        status: "Approved",
        patient_info: row.children[4].textContent,
        appointment: row.children[5].querySelector(".appointment-time").textContent + ", " + row.children[5].querySelector(".appointment-date").textContent,
        service: row.children[6].textContent,
      };
      const newRow = generateTableRow(appointment);
      tableBodyApproved.appendChild(newRow);
      row.remove();
    });

    updateTabCounts();
  }
  

  // Function to handle rejecting selected appointments
  function rejectSelectedAppointments() {
    const checkboxes = document.querySelectorAll("#pending tbody input[type='checkbox']:checked");
    checkboxes.forEach((checkbox) => {
      const row = checkbox.closest("tr");
      const appointment = {
        no: row.children[1].textContent,
        client: row.children[2].textContent,
        status: "Rejected",
        patient_info: row.children[4].textContent,
        appointment: row.children[5].querySelector(".appointment-time").textContent + ", " + row.children[5].querySelector(".appointment-date").textContent,
        service: row.children[6].textContent,
      };
      const newRow = generateTableRow(appointment);
      tableBodyRejected.appendChild(newRow);
      row.remove();
    });

    updateTabCounts();
  }

  // Call the updateTabCounts function initially
  updateTabCounts();
});