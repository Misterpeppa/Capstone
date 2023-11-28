const modalButton = document.querySelector('.inventory_new_product');
const addProductModal = document.getElementById('add_product_modal');
const closeModalButton = document.getElementById('close_add_product');

// Function to open the modal
function openModal() {
addProductModal.style.display = 'block';
}

// Function to close the modal
function closeModal() {
addProductModal.style.display = 'none';
}

// Event listener for opening the modal
modalButton.addEventListener('click', openModal);

// Event listener for closing the modal
closeModalButton.addEventListener('click', closeModal);

const clearButton = document.querySelector(".addProduct_clear_btn");
const manufacturedDateInput = document.getElementById('manufactured_date');
const expirationDateInput = document.getElementById('expiration_date');
const dateStockedInput = document.getElementById('datestocked');
const form = document.querySelector(".add_product_form");


// Add a click event listener to the clear button
clearButton.addEventListener("click", function () {
// Loop through all form elements and reset their values
const formElements = form.elements;
for (let i = 0; i < formElements.length; i++) {
    const element = formElements[i];
    const elementType = element.type.toLowerCase();

    // Check if the element is an input, select, or textarea
    if (
    elementType === "text" ||
    elementType === "select-one" ||
    elementType === "textarea" ||
    elementType === "date"
    ) {
    element.value = ""; // Reset the value
    }
}
});

const productCategorySelect = document.getElementById('product-categ');
const productNameSelect = document.getElementById('product_name');

// Define the options for medicine, vaccine, and vitamin
const medicineOptions = ['Medicine 1', 'Medicine 2', 'Medicine 3'];
const vaccineOptions = ['Vaccine 1', 'Vaccine 2', 'Vaccine 3'];
const vitaminOptions = ['Vitamin 1', 'Vitamin 2', 'Vitamin 3'];

// Initially disable the "Product Name" select element
productNameSelect.disabled = true;

// Listen for changes in the product category selection
productCategorySelect.addEventListener('change', function () {
const selectedCategory = this.value;
updateProductNameOptions(selectedCategory);

// Enable the "Product Name" select element when a category is selected
productNameSelect.disabled = false;
});

// Function to update the product name select options based on the selected category
function updateProductNameOptions(category) {
// Clear existing options
productNameSelect.innerHTML = '<option value="" disabled selected>Select a Product Name</option>';

let options = [];
if (category === 'Medicine') {
    options = medicineOptions;
} else if (category === 'Vaccine') {
    options = vaccineOptions;
} else if (category === 'Vitamin') {
    options = vitaminOptions;
}

options.forEach(option => {
    const optionElement = document.createElement('option');
    optionElement.value = option;
    optionElement.textContent = option;
    productNameSelect.appendChild(optionElement);
});
}

// Listen for changes in the product category selection
productCategorySelect.addEventListener('change', function () {
const selectedCategory = this.value;
updateProductNameOptions(selectedCategory);
});

// Function to restrict "batch_number" input to numbers 1 to 3
function restrictBatchNumberInput(inputElement) {
inputElement.addEventListener('input', function () {
    const inputValue = parseInt(this.value, 10);

    // Check if the input value is not a number or is outside the range 1 to 3
    if (isNaN(inputValue) || inputValue < 1 || inputValue > 3) {
    this.value = ''; // Clear the input value
    }
});
}
// Get the "batch_number" input element by its ID
const batchNumberInput = document.getElementById('batch_number');
// Call the function to restrict input to numbers 1 to 3
restrictBatchNumberInput(batchNumberInput);

function validationProductCode(inputElement) {
    inputElement.addEventListener('input', function () {
        const inputValue = this.value;

        // Remove non-numeric characters
        const numericValue = inputValue.replace(/\D/g, '');

        // Limit the input to 12 digits
        const truncatedValue = numericValue.substring(0, 12);

        // Update the input value
        this.value = truncatedValue;
    })
}
const productCodeInput = document.getElementById('product_code');
validationProductCode(productCodeInput);

// Function to check if a date is in the future
function isFutureDate(date) {
const today = new Date();
const selectedDate = new Date(date);
return selectedDate > today;
}

// Function to check if a date is in the past or today
function isPastOrToday(date) {
const today = new Date();
const selectedDate = new Date(date);
return selectedDate <= today;
}


// Set the maximum allowed date to today
const today = new Date();
const todayString = today.toISOString().split('T')[0];
manufacturedDateInput.max = todayString;
expirationDateInput.min = todayString;
dateStockedInput.max = todayString;

// Function to handle date selection for manufactured_date
function handleManufacturedDateSelection() {
const selectedDate = manufacturedDateInput.value;
if (isFutureDate(selectedDate)) {
    alert("Please select a previous date for Manufactured Date.");
    manufacturedDateInput.value = ""; // Clear the input value
    manufacturedDateInput.focus(); // Set focus back to the input
    return false;
}
// Set the default minimum date for datestocked to the manufactured_date
dateStockedInput.min = selectedDate;
return true;
}

// Function to handle date selection for expiration_date
function handleExpirationDateSelection() {
const selectedDate = expirationDateInput.value;
if (isPastOrToday(selectedDate)) {
    alert("Invalid! Product has already expired.");
    expirationDateInput.value = ""; // Clear the input value
    expirationDateInput.focus(); // Set focus back to the input
    return false;
}
return true;
}

// Function to handle date selection for datestocked
function handleDateStockedSelection() {
const selectedDate = dateStockedInput.value;
if (isFutureDate(selectedDate) || selectedDate < manufacturedDateInput.value) {
    alert("Please select a date after Manufactured Date and up to the current date for Date Stocked.");
    dateStockedInput.value = ""; // Clear the input value
    dateStockedInput.focus(); // Set focus back to the input
    return false;
}
return true;
}

// Disable keyboard events for all date inputs
const dateInputs = [manufacturedDateInput, expirationDateInput, dateStockedInput];
dateInputs.forEach(input => {
input.addEventListener('keydown', function (e) {
    e.preventDefault();
});
});

// Add event listeners to the manufactured_date input
manufacturedDateInput.addEventListener('blur', function () {
if (!handleManufacturedDateSelection()) {
    this.focus();
}
});


expirationDateInput.addEventListener('blur', function () {
if (!handleExpirationDateSelection()) {
    this.focus();
}
});

dateStockedInput.addEventListener('blur', function () {
if (!handleDateStockedSelection()) {
    this.focus();
}
});

const prodDescriptionInput = document.getElementById('prod_description');
// Function to handle input validation for prod_description
function handleProdDescriptionInput() {
const inputValue = prodDescriptionInput.value;
// Use a regular expression to check if the input contains only alphabets, numerals, and spaces
if (/^[A-Za-z0-9\s]*$/.test(inputValue)) {
    // Check if the input length exceeds the maximum allowed (253)
    if (inputValue.length > 253) {
    alert("Maximum length exceeded. Please limit your input to 253 characters.");
    prodDescriptionInput.value = inputValue.slice(0, 253); // Truncate the input to the maximum length
    }
} else {
    alert("Special characters are not allowed. Please use only alphabets and numerals.");
    prodDescriptionInput.value = ''; // Clear the input value
}
}
// Add an input event listener to the prod_description textarea
prodDescriptionInput.addEventListener('input', handleProdDescriptionInput);

const quantityInput = document.getElementById('quantity');
const minusButton = document.querySelector('.quantity_minus');
const addButton = document.querySelector('.quantity_add');

// Function to handle input validation for quantity
function handleQuantityInput() {
const inputValue = quantityInput.value;
// Use a regular expression to check if the input contains only positive numbers
if (/^[1-9]\d*$/.test(inputValue)) {
    // The input is a positive number, no action needed
} else {
    alert("Please enter a valid positive number (1 and above).");
    quantityInput.value = '1'; // Reset the input value to 1
}
}

// Add an input event listener to the quantity input
quantityInput.addEventListener('input', handleQuantityInput);

// Function to decrease quantity
minusButton.addEventListener('click', function () {
const currentValue = parseInt(quantityInput.value, 10);
if (currentValue > 1) {
    quantityInput.value = (currentValue - 1).toString();
}
});

// Function to increase quantity
addButton.addEventListener('click', function () {
const currentValue = parseInt(quantityInput.value, 10);
quantityInput.value = (currentValue + 1).toString();
});


function showSuccessModal() {
const successModal = document.getElementById('successModal');
successModal.style.display = 'block';

setTimeout(() => {
    successModal.classList.add('fade-out');
    setTimeout(() => {
        successModal.style.display = 'none';
        successModal.classList.remove('fade-out');
    }, 1000); // 3000 milliseconds (3 seconds) for the fade-out animation
}, 0); // Delay showing the modal for one animation frame
}

function submitForm() {
    // Create FormData object from the form
    var formData = new FormData($('#add_product_form')[0]);
    // Call the submitFormData function to handle the AJAX request
    submitFormData(formData);
}

function submitFormData(formData) {
    $.ajax({
        url: '/admin/inventory', // Replace with your actual route URL
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.success) {
                console.log('Form data submitted successfully.');
            } else {
                console.error('Data submission failed.');
            }
        },
        error: function () {
            console.error('Error in AJAX request.');
        }
    });
}


function displayTable(dataExists) {
    const inventoryTable = document.getElementById('data-table');
    const emptyState = document.getElementById('inventory_empty_state');

    if (dataExists) {
      // Data exists, show the table container
      inventoryTable.style.display = 'table';
      // Hide the empty state
      emptyState.style.display = 'none';
  } else {
      // Data is empty, hide the table container
      inventoryTable.style.display = 'none';
      // Show the empty state
      emptyState.style.display = 'block';  // Or 'flex', 'grid', etc., depending on the empty state container's styling
  }
}
const inventoryTable = document.getElementById('data-table');
const emptyState = document.getElementById('inventory_empty_state');

// Hide the empty state
emptyState.style.display = 'none';
// Show the table container
inventoryTable.style.display = 'table';

function toggleAddProductButtonVisibility() {
  const inventoryEmptyState = document.getElementById('inventory_empty_state');
  const dataTable = document.getElementById('data-table');
  const addProductButton = document.getElementById('addProductButton');

  if (inventoryEmptyState.style.display === 'block' || inventoryEmptyState.style.display === '') {
    // If inventory_empty_state is visible or not set, hide addProductButton
    addProductButton.style.display = 'none';
  } else if (dataTable.style.display === 'table') {
    // If data-table is visible, show addProductButton
    addProductButton.style.display = 'flex';
  }
}
const addProductButton = document.getElementById('addProductButton');
addProductButton.style.display = 'flex';
// Prevent form submission if dates are not valid
document.getElementById("add_product_form").addEventListener("submit", function (e) {
    e.preventDefault(); // Prevent the form from actually submitting

    // Validate the product description input
    handleProdDescriptionInput();

    const manufacturedDate = manufacturedDateInput.value;
    const expirationDate = expirationDateInput.value;
    const dateStocked = dateStockedInput.value;

    if (isFutureDate(manufacturedDate)) {
      alert("Please select a previous date for Manufactured Date.");
      e.preventDefault(); // Prevent form submission
    }

    if (isPastOrToday(expirationDate)) {
      alert("Please select a future date for product expiration.");
      e.preventDefault(); // Prevent form submission
    }

    if (isFutureDate(dateStocked)) {
      alert("Please select a current or previous date for Date Stocked.");
      e.preventDefault(); // Prevent form submission
    }
    // If all validations pass, show the table
    showTable();
    // show success modal after submit
    showSuccessModal();
    // show the add product button
    toggleAddProductButtonVisibility();
    submitForm();
  });

  function showTable() {
    // Reference to the table container and empty state elements
    const inventoryTable = document.getElementById('data-table');
    const emptyState = document.getElementById('inventory_empty_state');

    // Hide the empty state
    emptyState.style.display = 'none';
    // Show the table container
    inventoryTable.style.display = 'table';
  }
    // Toggle the visibility of dropdown-content when the Actions button is clicked
    document.querySelectorAll('.dropbtn').forEach(function (button) {
      button.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent the click event from propagating
        const content = this.nextElementSibling;
        if (content.style.display === 'block') {
          content.style.display = 'none';
        } else if (content.style.display === 'flex'){
          content.style.display = 'none';
        }
        else {
          content.style.display = 'block';
        }
      });
    });
  
    // Function to handle clicking the "edit_prod_back_container" button
    function handleEditProdBackClick() {
      const editProdContainer = document.getElementById('edit_prod_container');
      const inventoryContainer = document.getElementById('inventory_container');

      // Hide the edit_prod_container
      editProdContainer.style.display = 'none';

      // Show the inventory_container
      inventoryContainer.style.display = 'inline-flex';
    }

    // Add an event listener to the "edit_prod_back_container" button
    const editProdBackContainer = document.getElementById('edit_prod_back_container');
    editProdBackContainer.addEventListener('click', handleEditProdBackClick);

    function view_Product_back(){
      const view_product_container = document.getElementById('view_product_container');
      const inventory_container= document.getElementById('inventory_container');

      view_product_container.style.display = 'none';
      inventory_container.style.display = 'inline-flex'
    }

    // Add an event listener to the "edit_prod_back_container" button
    const view_prodcuct_back = document.getElementById('view_prodcuct_back');
    view_prodcuct_back.addEventListener('click', view_Product_back);


    // Add an event listener to the document to close the dropdown-content when clicking anywhere
    document.addEventListener('click', function (event) {
      const dropdownContents = document.querySelectorAll('.dropdown-content');
      dropdownContents.forEach(function (dropdownContent) {
        if (!dropdownContent.contains(event.target)) {
          dropdownContent.style.display = 'none';
        }
      });
    });

    // Get the edit_save_changes button by its ID
    const editSaveChangesButton = document.getElementById('edit_save_changes');

    // Function to show the modal
    function showModal() {
      // Get the modal element by its ID
      const modal = document.getElementById('save_edit_changes'); // Replace 'your_modal_id' with the actual ID of your modal element

      // Display the modal
      modal.style.display = 'block';

      // Set a timeout to hide the modal after 1000 milliseconds (1 second)
      setTimeout(function () {
        modal.style.display = 'none';
      }, 1000);
    }


    // Attach the showModal function to the button's click event
    editSaveChangesButton.addEventListener('click', showModal);


    // Get the edit_cancel_changes button by its ID
    const cancelChangesButton = document.getElementById('edit_cancel_changes');
    const returnBtn = document.getElementById('return_btn');
    const discardBtn = document.getElementById('discard_btn');
    // Function to show the modal
    function showDiscardModal() {
      // Get the modal element by its ID
      const discardmodal = document.getElementById('discardModal');

      // Display the modal
      discardmodal.style.display = 'block';

    }

    // Function to show the modal
    function hideDiscardModal() {
      // Get the modal element by its ID
      const discardmodal = document.getElementById('discardModal');

      // Display the modal
      discardmodal.style.display = 'none';

    }


    // Attach the showModal function to the button's click event
    cancelChangesButton.addEventListener('click', showDiscardModal);
    // close ng discard pop up
    returnBtn.addEventListener('click', hideDiscardModal);
    discardBtn.addEventListener('click', hideDiscardModal);


    // Add an event listener for the buttons inside dropdown-content
    document.querySelectorAll('.dropdown-content button').forEach(function (button) {
      button.addEventListener('click', function (event) {
        event.preventDefault();
        const action = this.getAttribute('data-action');
        if (action === 'AddStock') {
          // Handle the "Add Product" action here
          // Add your logic for this action
          // Hide the dropdown-content when the "Add Product" button is clicked
          const dropdownContent = this.parentElement;
          dropdownContent.style.display = 'none';

          // Show the "Review Product" modal
          const addProductModal = document.getElementById('Add_Product');
          addProductModal.style.display = 'block';

          // Add an event listener to close the modal when the close button is clicked
          const closeButton = addProductModal.querySelector('.close_addproduct');
          closeButton.addEventListener('click', function () {
            addProductModal.style.display = 'none';
          });
        }
        else if (action === 'View'){
          const add_inventory_header = document.getElementById('inventory_container');
          add_inventory_header.style.display = 'none';

          const view_product_container = document.getElementById('view_product_container');
          view_product_container.style.display = 'inline-flex';


          const dropdownContent = this.parentElement;
          dropdownContent.style.display = 'none';
        }
        else if (action === 'Edit') {
          const edit_prod_container = document.getElementById('edit_prod_container');
          const inventory_container = document.getElementById('inventory_container');
          inventory_container.style.display = 'none';
          edit_prod_container.style.display = 'inline-flex';

          const dropdownContent = this.parentElement;
          dropdownContent.style.display = 'none';
        }
        else if (action === 'Archive') {
          // Handle the "Archive" action here
          // Add your logic for this action
        }
      });
    });


// Add product modal


document.addEventListener("DOMContentLoaded", function () {
  // Get a reference to the addProductButton
  const addProductButton = document.getElementById('add_Product_btn');
  const addNewProductModal = document.getElementById('add_Product_Modal');
  const closeNewModalButton = document.getElementById('close_add_new_product');



  // Function to show the add product modal
  function openAddProductModal() {
    addNewProductModal.style.display = 'block';
  }

  // Function to close the modal
  function closeAddProductModal() {
    addNewProductModal.style.display = 'none';
    resetModalInputs(); // Reset modal inputs when closing
  }

  // Event listener for opening the modal
  addProductButton.addEventListener('click', openAddProductModal);

  // Event listener for closing the modal
  closeNewModalButton.addEventListener('click', closeAddProductModal);

  const clear_add_product_btn = document.getElementById("clear_add_product_btn");

  const newManufacturedDateInput = document.getElementById('new_manufactured_date');
  const newExpirationDateInput = document.getElementById('new_expiration_date');
  const newDateStockedInput = document.getElementById('new_datestocked');
  const add_Product_Modal_form = document.querySelector(".add_Product_Modal_form");

  // Add a click event listener to the clear button
  clear_add_product_btn.addEventListener("click", function () {
    // Loop through all form elements and reset their values
    const newformElements = add_Product_Modal_form.elements;
    for (let i = 0; i < newformElements.length; i++) {
      const element = newformElements[i];
      const elementType = element.type.toLowerCase();

      // Check if the element is an input, select, or textarea
      if (
        elementType === "text" ||
        elementType === "select-one" ||
        elementType === "textarea" ||
        elementType === "date"
      ) {
        element.value = ""; // Reset the value
      }
    }
  });

  // Get references to the relevant elements
  const product_categorySelect = document.getElementById('product_category');
  const new_product_nameSelect = document.getElementById('new_product_name');

  // Define the options for medicine, vaccine, and vitamin
  const newMedicineOptions = ['Medicine 1', 'Medicine 2', 'Medicine 3'];
  const newVaccineOptions = ['Vaccine 1', 'Vaccine 2', 'Vaccine 3'];
  const newVitaminOptions = ['Vitamin 1', 'Vitamin 2', 'Vitamin 3'];


  // Initially disable the "Product Name" select element
  new_product_nameSelect.disabled = true;


  // Listen for changes in the product category selection
  product_categorySelect.addEventListener('change', function () {
    const newSelectedCategory = this.value;
    updateNewProductNameOptions(newSelectedCategory);

    // Enable the "Product Name" select element when a category is selected
    new_product_nameSelect.disabled = false;
  });


  // Function to update the product name select options based on the selected category
  function updateNewProductNameOptions(category) {
    // Clear existing options
    new_product_nameSelect.innerHTML = '<option value="" disabled selected>Select a Product Name</option>';

    let options = [];
    if (category === 'Medicine') {
      options = newMedicineOptions;
    } else if (category === 'Vaccine') {
      options = newVaccineOptions;
    } else if (category === 'Vitamin') {
      options = newVitaminOptions;
    }

    options.forEach(option => {
      const optionElement = document.createElement('option');
      optionElement.value = option;
      optionElement.textContent = option;
      new_product_nameSelect.appendChild(optionElement);
    });
  }

  // Listen for changes in the product category selection
  product_categorySelect.addEventListener('change', function () {
    const selectedCategory = this.value;
    updateNewProductNameOptions(selectedCategory);
  });

  function resetModalInputs() {
    const modalInputs = document.querySelectorAll(".add_Product_Modal_form input");
    modalInputs.forEach((input) => {
      input.value = "";
    });

    // Reset select elements
    const selectElements = document.querySelectorAll(".add_Product_Modal_form select");
    selectElements.forEach((select) => {
      select.selectedIndex = 0; // Reset to the first option (assuming the first option is the placeholder)
    });
  }

  const newproductCodeInput = document.getElementById('new_product_code');
  validationProductCode(newproductCodeInput);

  // Function to restrict "batch_number" input to numbers 1 to 3
  function restrictNewBatchNumberInput(inputElement) {
    inputElement.addEventListener('input', function () {
      const inputValue = parseInt(this.value, 10);

      // Check if the input value is not a number or is outside the range 1 to 3
      if (isNaN(inputValue) || inputValue < 1 || inputValue > 3) {
        this.value = ''; // Clear the input value
      }
    });
  }

  // Get the "batch_number" input element by its ID
  const newbatchNumberInput = document.getElementById('new_batch_number');

  // Call the function to restrict input to numbers 1 to 3
  restrictNewBatchNumberInput(newbatchNumberInput);



  // Function to check if a date is in the future
  function isFutureDateNew(date) {
    const today = new Date();
    const newSelectedDate = new Date(date);
    return newSelectedDate > today;
  }

  // Function to check if a date is in the past or today
  function isPastOrTodayNew(date) {
    const today = new Date();
    const newSelectedDate = new Date(date);
    return newSelectedDate <= today;
  }


  // Set the maximum allowed date to today
  const newtoday = new Date();
  const newtodayString = newtoday.toISOString().split('T')[0];
  newManufacturedDateInput.max = newtodayString;
  newExpirationDateInput.min = newtodayString;
  newDateStockedInput.max = newtodayString;

  // Function to handle date selection for new_manufactured_date
  function handleNewManufacturedDateSelection() {
    const selectedDate = newManufacturedDateInput.value;
    if (isFutureDate(selectedDate)) {
      alert("Please select a previous date for Manufactured Date.");
      newManufacturedDateInput.value = ""; // Clear the input value
      newManufacturedDateInput.focus(); // Set focus back to the input
      return false;
    }
    // Set the default minimum date for datestocked to the new_manufactured_date
    newDateStockedInput.min = selectedDate;
    return true;
  }

  // Function to handle date selection for expiration_date
  function handleNewExpirationDateSelection() {
    const selectedDate = newExpirationDateInput.value;
    if (isPastOrToday(selectedDate)) {
      alert("Invalid! Product has already expired.");
      newExpirationDateInput.value = ""; // Clear the input value
      newExpirationDateInput.focus(); // Set focus back to the input
      return false;
    }
    return true;
  }

  // Function to handle date selection for datestocked
  function handleNewDateStockedSelection() {
    const selectedDate = newDateStockedInput.value;
    if (isFutureDate(selectedDate) || selectedDate < newManufacturedDateInput.value) {
      alert("Please select a date after Manufactured Date and up to the current date for Date Stocked.");
      newDateStockedInput.value = ""; // Clear the input value
      newDateStockedInput.focus(); // Set focus back to the input
      return false;
    }
    return true;
  }

  // Disable keyboard events for all date inputs
  const newdateInputs = [newManufacturedDateInput, newExpirationDateInput, newDateStockedInput];
  newdateInputs.forEach(input => {
    input.addEventListener('keydown', function (e) {
      e.preventDefault();
    });
  });

  // Add event listeners to the manufactured_date input
  newManufacturedDateInput.addEventListener('blur', function () {
    if (!handleNewManufacturedDateSelection()) {
      this.focus();
    }
  });


  newExpirationDateInput.addEventListener('blur', function () {
    if (!handleNewExpirationDateSelection()) {
      this.focus();
    }
  });

  dateStockedInput.addEventListener('blur', function () {
    if (!handleNewDateStockedSelection()) {
      this.focus();
    }
  });




  const newQuantityInput = document.getElementById('new_quantity');
  const newMinusButton = document.getElementById('quantity_minus');
  const newAddButton = document.getElementById('quantity_add');

  // Function to handle input validation for new_quantity
  function handleNewQuantityInput() {
    const inputValue = newQuantityInput.value;
    // Use a regular expression to check if the input contains only positive numbers
    if (/^[1-9]\d*$/.test(inputValue)) {
      // The input is a positive number, no action needed
    } else {
      alert("Please enter a valid positive number (1 and above).");
      newQuantityInput.value = '1'; // Reset the input value to 1
    }
  }

  // Add an input event listener to the new_quantity input
  newQuantityInput.addEventListener('input', handleNewQuantityInput);

  // Function to decrease quantity
  newMinusButton.addEventListener('click', function () {
    const currentValue = parseInt(newQuantityInput.value, 10);
    if (currentValue > 1) {
      newQuantityInput.value = (currentValue - 1).toString();
    }
  });

  // Function to increase quantity
  newAddButton.addEventListener('click', function () {
    const currentValue = parseInt(newQuantityInput.value, 10);
    newQuantityInput.value = (currentValue + 1).toString();
  });



  const newProdDescriptionInput = document.getElementById('new_prod_description');

  // Function to handle input validation for new_prod_description
  function handleNewProdDescriptionInput() {
    const inputValue = newProdDescriptionInput.value;
    // Use a regular expression to check if the input contains only alphabets, numerals, and spaces
    if (/^[A-Za-z0-9\s]*$/.test(inputValue)) {
      // Check if the input length exceeds the maximum allowed (253)
      if (inputValue.length > 253) {
        alert("Maximum length exceeded. Please limit your input to 253 characters.");
        newProdDescriptionInput.value = inputValue.slice(0, 253); // Truncate the input to the maximum length
      }
    } else {
      alert("Special characters are not allowed. Please use only alphabets and numerals.");
      newProdDescriptionInput.value = ''; // Clear the input value
    }
  }

  // Add an input event listener to the new_prod_description textarea
  newProdDescriptionInput.addEventListener('input', handleNewProdDescriptionInput);

});


function submitForm() {
  // Create FormData object from the form
  var formData = new FormData($('#add_Product_Modal_form')[0]);
  // Call the submitFormData function to handle the AJAX request
  submitFormData(formData);
}

function submitFormData(formData) {
  $.ajax({
      url: '/admin/inventory', // Replace with your actual route URL
      method: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
          if (response.success) {
              console.log('Form data submitted successfully.');
              showSuccessModal();
          } else {
              console.error('Data submission failed.');
          }
      },
      error: function () {
          console.error('Error in AJAX request.');
      }
  });
}
