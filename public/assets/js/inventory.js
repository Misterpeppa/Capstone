document.addEventListener("DOMContentLoaded", function () {
  

  var addButton = document.getElementById("add_product");
  var split_btn = document.getElementById("split_btn");
  var addProduct_btn = document.getElementById("add_Product_btn");
  var modal = new bootstrap.Modal(document.getElementById("add_product_modal"));
  var modal1 = new bootstrap.Modal(
    document.getElementById("add_product_modal-1")
  );

  addButton.addEventListener("click", function () {
    modal.show();
  });

  addProduct_btn.addEventListener("click", function () {
    modal1.show();
  });

  $("#submit_product").click(function () {
    // Hide the add_product_modal
    modal.hide();

    // Get the input values
    const productName = document.getElementById("product_name").value;
    const productCategory = document.getElementById("product-categ").value;
    const quantity = document.getElementById("quantity").value;
    const dateStocked = document.getElementById("datestocked").value;
    const expirationDate = document.getElementById("expiration_date").value;



  }); 
    // Add an event listener for the buttons inside dropdown-content
    document
      .querySelectorAll(".button-action button")
      .forEach(function (button) {
        button.addEventListener("click", function (event) {
          event.preventDefault();
          const action = this.getAttribute("data-action");
          if (action === "AddStock") {
            // const dropdownContent = this.parentElement;
            // dropdownContent.style.display = "none";

            var modal2 = new bootstrap.Modal(
              document.getElementById("add_stock_modal")
            );
            closeDropdownMenus();

            modal2.show();
          } else if(action ==="DeductStock"){
            var deduct_stock_modal = new bootstrap.Modal(
              document.getElementById("deduct_stock_modal")
            );
            closeDropdownMenus();
            deduct_stock_modal.show();

          } else if (action === "View") {
            const view_product = document.getElementById("view_product");
            var product_table_container = document.getElementById("product_table_container");
            var inventory_header = document.getElementById("inventory_header");
            var prod_info_header = document.getElementById("prod_info_header");
            var batch_product = document.getElementById("batch_product");
            var pagination = document.getElementById("pagination");
            var left_part_product_header = document.querySelector(".left_part_product_header");
            
            left_part_product_header.style.display = "none";
            view_product.style.display = "flex";
            pagination.style.display = "none";
            product_table_container.style.display = "none";
            batch_product.style.display = "flex";

            inventory_header.style.display = "none";
            prod_info_header.style.display = "flex";

            // const dropdownContent = this.parentElement;
            // dropdownContent.style.display = "none";
          } else if (action === "Edit") {
            //dapat dito, yung info na lilitaw ay yung kung saang data row niclick ang edit.

            const prod_detail_header = document.getElementById(
              "prod_detail_header"
            );
            const prod_detail = document.getElementById("prod_detail");
            const inventory_header = document.getElementById(
              "inventory_header"
            );
            const InventoryContainer = document.getElementById(
              "InventoryContainer"
            );

            inventory_header.style.display = "none";
            InventoryContainer.style.display = "none";
            prod_detail_header.style.display = "flex";
            prod_detail.style.display = "flex";

            // const dropdownContent = this.parentElement;
            // dropdownContent.style.display = "none";
          } else if (action === "Archive") {
            var archive_modal = new bootstrap.Modal(document.getElementById('archive_modal'));
            archive_modal.show();
            var archive_confirm_button = document.getElementById('archive_confirm_button');
            archive_confirm_button.addEventListener('click', function(){
                          // Handle the "Archive" action here
            // Add your logic for this action
            var row = button.closest("tr");
            // Perform the archiving logic (e.g., hide the row)
            row.style.display = "none";
            });

          }
        });
      });

      const backButton = document.querySelector(".view_back_btn");

      // Add a click event listener to the "Back" button
      backButton.addEventListener("click", function () {
        // Hide the view_product
        var view_product = document.querySelector(".view_product");
        var inventory_header = document.getElementById("inventory_header");
        var prod_info_header = document.getElementById("prod_info_header");
        var product_table_container = document.getElementById("product_table_container");
        var batch_product = document.getElementById("batch_product");
        var pagination = document.getElementById("pagination");
        var left_part_product_header = document.querySelector(".left_part_product_header");
              
        left_part_product_header.style.display = "flex";
        pagination.style.display = "flex";
        batch_product.style.display = "none";
        view_product.style.display = "none";
        inventory_header.style.display = "flex";
        prod_info_header.style.display = "none";
        product_table_container.style.display = "flex";
      });
  
      // Get the "Back" button sa prod_detail element
      const prodBackButton = document.querySelector(".product_back_btn");
  
      // Add a click event listener to the "Back" button
      prodBackButton.addEventListener("click", function () {
        // Hide the view_product 
        const prod_detail = document.querySelector(".prod_detail");
        const prod_detail_header = document.getElementById("prod_detail_header");
        const prod_info_header = document.getElementById("prod_info_header");
        const view_product = document.getElementById("view_product");
        const InventoryContainer = document.getElementById("InventoryContainer");
        var product_table_container = document.getElementById("product_table_container");
        var batch_product = document.getElementById("batch_product");
        
        batch_product.style.display = "flex";
        prod_detail.style.display = "none";
        product_table_container.style.display = "none";
        prod_detail_header.style.display = "none";
        prod_info_header.style.display = "flex";
        view_product.style.display = "flex";
        InventoryContainer.style.display = "flex";
        
      });

    // Show the split_btn
    split_btn.style.display = "flex";

    // Toggle the visibility of dropdown-content when the Actions button is clicked
    document.querySelectorAll(".dropbtn").forEach(function (button) {
      button.addEventListener("click", function (event) {
        closeDropdownMenus();
        event.stopPropagation(); // Prevent the click event from propagating
        const content = this.nextElementSibling;
        if (content.style.display === "block") {
          content.style.display = "none";
        } else if (content.style.display === "flex") {
          content.style.display = "none";
        } else {
          content.style.display = "flex";
        }
      });
    });
    closeDropdownMenus();

    function closeDropdownMenus() {
      document.querySelectorAll('.dropdown-content').forEach(function (content) {
          content.style.display = 'none';
      });
    }


    

    // Event listener to close dropdown menus when clicking outside
    document.addEventListener('click', function (event) {
      if (!event.target.matches('.dropbtn')) {
          closeDropdownMenus();
      }
    });

  

  function addBlurListener(input, error) {
    input.addEventListener("blur", function () {
      if (input.value.trim() === "none") {
        error.style.display = "block";
        input.classList.add("error-border");
      } else if (input.value.trim() === "") {
        error.style.display = "block";
        input.classList.add("error-border");
      } else {
        error.style.display = "none";
        input.classList.remove("error-border");
      }
    });
  }

  const product_categInput = document.getElementById("product-categ");
  const errorProduct_categ = document.getElementById("error-product_categ");
  addBlurListener(product_categInput, errorProduct_categ);

  const product_categInput1 = document.getElementById("product-categ-1");
  const errorProduct_categ1 = document.getElementById("error-product_categ-1");
  addBlurListener(product_categInput1, errorProduct_categ1);

  const product_nameInput = document.getElementById("product_name");
  const errorProduct_name = document.getElementById("error-product_name");
  addBlurListener(product_nameInput, errorProduct_name);

  const product_nameInput1 = document.getElementById("product_name-1");
  const errorProduct_name1 = document.getElementById("error-product_name-1");
  addBlurListener(product_nameInput1, errorProduct_name1);

  const product_codeInput = document.getElementById("product_code");
  const errorProduct_code = document.getElementById("error-product_code");
  addBlurListener(product_codeInput, errorProduct_code);

  const product_codeInput1 = document.getElementById("product_code-1");
  const errorProduct_code1 = document.getElementById("error-product_code-1");
  addBlurListener(product_codeInput1, errorProduct_code1);

  const batch_numberInput = document.getElementById("batch_number");
  const errorBatch_number = document.getElementById("error-batch_number");
  addBlurListener(batch_numberInput, errorBatch_number);

  const batch_numberInput1 = document.getElementById("batch_number-1");
  const errorBatch_number1 = document.getElementById("error-batch_number-1");
  addBlurListener(batch_numberInput1, errorBatch_number1);

  const manufactured_dateInput = document.getElementById("manufactured_date");
  const errorManufactured_date = document.getElementById("error-manufactured_date");
  addBlurListener(manufactured_dateInput, errorManufactured_date);

  const manufactured_dateInput1 = document.getElementById("manufactured_date-1");
  const errorManufactured_date1 = document.getElementById("error-manufactured_date-1");
  addBlurListener(manufactured_dateInput1, errorManufactured_date1);

  const expiration_dateInput = document.getElementById("expiration_date");
  const errorExpiration_date = document.getElementById("error-expiration_date");
  addBlurListener(expiration_dateInput, errorExpiration_date);

  const expiration_dateInput1 = document.getElementById("expiration_date-1");
  const errorExpiration_date1 = document.getElementById(
    "error-expiration_date-1"
  );
  addBlurListener(expiration_dateInput1, errorExpiration_date1);

  const datestockedInput = document.getElementById("datestocked");
  const errorDatestocked = document.getElementById("error-datestocked");
  addBlurListener(datestockedInput, errorDatestocked);

  const datestockedInput1 = document.getElementById("datestocked-1");
  const errorDatestocked1 = document.getElementById("error-datestocked-1");
  addBlurListener(datestockedInput1, errorDatestocked1);

  const product_descInput = document.getElementById("prod_description");
  const errorProduct_desc = document.getElementById("error-prod_description");
  addBlurListener(product_descInput, errorProduct_desc);

  const product_descInput1 = document.getElementById("prod_description-1");
  const errorProduct_desc1 = document.getElementById(
    "error-prod_description-1"
  );
  addBlurListener(product_descInput1, errorProduct_desc1);

  const quantityInput = document.getElementById("quantity");
  const errorQuantity = document.getElementById("error-quantity");
  addBlurListener(quantityInput, errorQuantity);

  const quantityInput1 = document.getElementById("quantity-1");
  const errorQuantity1 = document.getElementById("error-quantity-1");
  addBlurListener(quantityInput1, errorQuantity1);


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

  $(document).ready(function () {
    // Make an AJAX request to get data from the controller
    $.ajax({
      url: '/admin/inventory', 
      method: 'GET', 
      success: function (dataExists) {
          if (dataExists) {
              // If there is data, hide the empty state container
              $("#empty_state_container").hide();

              // Show the product table and apply the display: flex property
              $("#product_table_container").show();
              split_btn.style.display = "flex";
          }

          // Other logic to handle and display the data as needed
      },
      error: function () {
          console.error('Error in AJAX request.');
      }
  });
    //divs will appear after hitting submit_product button
    $("#submit_product").click(function () {
        var formData = $("#add_product_form").serialize();

        // Make an AJAX request
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
      // Hide the empty state container
      $("#empty_state_container").hide();

      // Show the product table and apply the display: flex property
      $("#product_table_container").show();

      // Show the add_product_success and hide it after 3 seconds
      $("#add_product_success").show();
      setTimeout(function () {
        $("#add_product_success").hide();
      }, 2000);
    });
    
    //discard pop up
    $("#cancel_edit").click(function () {
      $("#add_product_discard").show();
    });

    //close discard pop up
    $("#return_btn").click(function () {
      $("#add_product_discard").hide();
    });

    //close discard pop up
    $("#discard_btn").click(function () {
      $("#add_product_discard").hide();
    });

    // When the "Add Product" menu item is clicked, show the modal
    $("#add_Product_btn_1").click(function () {
      // Trigger the modal manually
      $("#add_product_modal-1").modal("show");
    });

    $("#edit_save_changes").click(function () {
      $("#save_changes_success").show();
      setTimeout(function () {
        $("#save_changes_success").hide();
      }, 2000);
    });

    $("#add_stock").click(function () {
      $("#add_stock_modal").modal("hide");
    });
  });

  function initializeDependentSelect(categorySelectId, nameSelectId, options) {
    const categorySelect = document.getElementById(categorySelectId);
    const nameSelect = document.getElementById(nameSelectId);

    // Initially disable the "Product Name" select element
    nameSelect.disabled = true;

    // Listen for changes in the product category selection
    categorySelect.addEventListener("change", function () {
      const selectedCategory = this.value;
      updateProductNameOptions(nameSelect, selectedCategory, options);

      // Enable the "Product Name" select element when a category is selected
      nameSelect.disabled = false;
    });

    // Function to update the product name select options based on the selected category
    function updateProductNameOptions(select, category, options) {
      // Clear existing options
      select.innerHTML =
        '<option value="" disabled selected>Select a Product Name</option>';

      let categoryOptions = options[category] || [];

      categoryOptions.forEach((option) => {
        const optionElement = document.createElement("option");
        optionElement.value = option;
        optionElement.textContent = option;
        select.appendChild(optionElement);
      });
    }

    // Listen for changes in the product category selection (initial call)
    categorySelect.addEventListener("change", function () {
      const selectedCategory = this.value;
      updateProductNameOptions(nameSelect, selectedCategory, options);
    });
  }

  // Define the options for each category
  const categoryOptions = {
    Medicine: ["Medicine 1", "Medicine 2", "Medicine 3"],
    Vaccine: ["Vaccine 1", "Vaccine 2", "Vaccine 3"],
    Vitamin: ["Vitamin 1", "Vitamin 2", "Vitamin 3"],
  };

  // Initialize the first set of dependent selects
  initializeDependentSelect("product-categ", "product_name", categoryOptions);

  // Initialize the second set of dependent selects
  initializeDependentSelect(
    "product-categ-1",
    "product_name-1",
    categoryOptions
  );

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


  var manufacturing_date = document.getElementById('manufacturing_date-1');
  var expired_date = document.getElementById('expired_date');
  var date_stocked = document.getElementById('date_stocked1');
  var expiry_date = document.getElementById('expiry_date');


  // Set the maximum allowed date to today
  const today = new Date();
  const todayString = today.toISOString().split("T")[0];
  manufactured_dateInput.max = todayString;
  manufacturing_date.max = todayString;
  manufactured_dateInput1.max = todayString;
  expiration_dateInput.min = todayString;
  expiration_dateInput1.min = todayString;
  expiry_date.min = todayString;
  expired_date.min = todayString;
  datestockedInput.max = todayString;
  datestockedInput1.max = todayString;
  date_stocked.max = todayString;

  // Function to handle date selection for manufactured_date
  function handleManufacturedDateSelection() {
    const selectedDate = manufactured_dateInput.value;
    const selectedDate1 = manufactured_dateInput1.value;
    const selectDate2 = manufacturing_date.value;
    if (isFutureDate(selectedDate && selectedDate1 && selectDate2)) {
      alert("Please select a previous date for Manufactured Date.");
      manufactured_dateInput.value = ""; // Clear the input value
      manufactured_dateInput.focus(); // Set focus back to the input
      manufactured_dateInput1.value = "";
      manufactured_dateInput1.focus();
      manufacturing_date.value ="";
      manufacturing_date.focus();
      
      return false;
    }
    // Set the default minimum date for datestocked to the manufactured_date
    datestockedInput.min = selectedDate;
    return true;
  }

  // Function to handle date selection for expiration_date
  function handleExpirationDateSelection() {
    const selectedDate = expiration_dateInput.value;
    const selectedDate1 = expiration_dateInput1.value;
    if (isPastOrToday(selectedDate && selectedDate1)) {
      alert("Invalid! Product has already expired.");
      expiration_dateInput.value = ""; // Clear the input value
      expiration_dateInput.focus(); // Set focus back to the input
      expiration_dateInput1.value = "";
      expiration_dateInput1.focus();
      expired_date.value = "";
      expired_date.focus(); 

      expiry_date.value = "";
      expiry_date.focus();
     
      return false;
    }
    return true;
  }

  // Function to handle date selection for datestocked
  function handleDateStockedSelection() {
    const selectedDate = dateStockedInput.value;
    const selectedDate1 = datestockedInput1.value;
    const selectedDate2 = date_stocked.value;
    if (
      (isFutureDate(selectedDate) ||selectedDate < manufactured_dateInput.value) ||
      (isFutureDate(selectedDate1) || selectedDate1 <manufactured_dateInput1.value) ||
      (isFutureDate(selectedDate2) || selectedDate2 <manufacturing_date.value)
    ) {
      alert(
        "Please select a date after Manufactured Date and up to the current date for Date Stocked."
      );
      datestockedInput.value = ""; // Clear the input value
      datestockedInput.focus(); // Set focus back to the input
      datestockedInput1.value = "";
      datestockedInput1.focus();
      date_stocked.value = "";
      date_stocked.focus();
      return false;
    }
    return true;
  }

  // Disable keyboard events for all date inputs
  const dateInputs = [
    manufactured_dateInput,
    manufactured_dateInput1,
    expiration_dateInput,
    datestockedInput,
    date_stocked,
    manufacturing_date,
    expired_date,
    date_stocked,
    expiry_date,
  ];


  dateInputs.addEventListener('keydown', function (e) {
    e.preventDefault();
});
  
// Function to restrict "batch_number" input to numbers 1 to 3
function restrictBatchNumberInput(inputElement) {
  inputElement.addEventListener('input', function () {
    const inputValue = this.value.trim(); // Remove leading and trailing whitespaces
    const numericValue = parseInt(inputValue, 10);

    // Check if the input value is a valid number
    if (!isNaN(numericValue) && inputValue !== '' && numericValue >= 1 && numericValue <= 10) {
        this.value = numericValue; // Keep the numeric value
      } else {
        this.value = ''; // Clear the input value
      }
    });
  }
  // Get the "batch_number" input element by its ID
  const batchNumberInput = document.getElementById('batch_number');
  const batchNumberInput1 = document.getElementById('batch_number-1');
  // Call the function to restrict input to numbers 1 to 3
  restrictBatchNumberInput(batchNumberInput);
  restrictBatchNumberInput(batchNumberInput1);

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
const productCodeInput1 = document.getElementById('product_code-1');

validationProductCode(productCodeInput);
validationProductCode(productCodeInput1);

  // Add event listeners to the manufactured_date input
  manufactured_dateInput.addEventListener("blur", function () {
    if (!handleManufacturedDateSelection()) {
      this.focus();
    }
  });

  expiration_dateInput.addEventListener("blur", function () {
    if (!handleExpirationDateSelection()) {
      this.focus();
    }
  });

  datestockedInput.addEventListener("blur", function () {
    if (!handleDateStockedSelection()) {
      this.focus();
    }
  });

  // Assuming a parent element that contains both dropbtn and dropdown-content
  var parentElement = document.getElementById("parent-element");

  // Add event listener to the parent element using event delegation
  parentElement.addEventListener("click", function (event) {
    // Check if the clicked element is the dropbtn
    if (event.target.matches("#dropbtn")) {
      // Select the dropdown-content
      var dropdownContent = document.getElementById("dropdown-content");

      // Toggle the visibility of dropdown-content
      if (
        dropdownContent.style.display === "none" ||
        dropdownContent.style.display === ""
      ) {
        dropdownContent.style.display = "flex";
      } else {
        dropdownContent.style.display = "none";
      }
    }
  });
});



function clearForm() {
  // Clear product-categ, product_name, and quantity
  var productCategSelect = document.getElementById("product-categ");
  var productNameSelect = document.getElementById("product_name");
  var quantityInput = document.getElementById("quantity");

  productCategSelect.selectedIndex = 0;
  productNameSelect.innerHTML =
    '<option value="" disabled selected>Select a Product Name</option>';
  quantityInput.value = 0;

  // Disable product_name if product-categ is none
  if (productCategSelect.value === "none") {
    productNameSelect.disabled = true;
  } else {
    productNameSelect.disabled = false;
  }

  // Clear other input and textarea elements
  document.getElementById("product_code").value = "";
  document.getElementById("batch_number").value = "";
  document.getElementById("manufactured_date").value = "";
  document.getElementById("expiration_date").value = "";
  document.getElementById("datestocked").value = "";
  document.getElementById("prod_description").value = "";

  // Reset other select elements to their initial state
  document
    .querySelectorAll("select:not(#product-categ):not(#product-categ-1)")
    .forEach((select) => {
      select.selectedIndex = 0;
      select.disabled = true;
    });

  // Enable submit button if the form is cleared
  enableSubmitButton();
}

// Function to decrement quantity
function decrementQuantity() {
  var quantityInput = document.getElementById("quantity");
  var currentQuantity = parseInt(quantityInput.value);

  // Ensure the quantity is not less than 1
  if (currentQuantity > 0) {
    quantityInput.value = currentQuantity - 1;
    updateQuantityErrorMessage();
  }
  enableSubmitButton();
}

// Function to increment quantity
function incrementQuantity() {
  var quantityInput = document.getElementById("quantity");
  var currentQuantity = parseInt(quantityInput.value);

  // Increment the quantity
  quantityInput.value = currentQuantity + 1;
  updateQuantityErrorMessage();
  enableSubmitButton();
}

// Function to update quantity error message visibility
function updateQuantityErrorMessage() {
  var quantityInput = document.getElementById("quantity");
  var errorQuantity = document.getElementById("error-quantity");

  // Check if the quantity is 0
  if (parseInt(quantityInput.value) === 0) {
    errorQuantity.style.display = "block";
  } else {
    errorQuantity.style.display = "none";
  }
}




function enableSubmitButton() {
  var productCateg = document.getElementById("product-categ").value;
  var productName = document.getElementById("product_name").value;
  var productCode = document.getElementById("product_code").value;
  var batchNumber = document.getElementById("batch_number").value;
  var manufacturedDate = document.getElementById("manufactured_date").value;
  var expirationDate = document.getElementById("expiration_date").value;
  var dateStocked = document.getElementById("datestocked").value;
  var prodDescription = document.getElementById("prod_description").value;
  var quantity = document.getElementById("quantity").value;
  var submitButton = document.getElementById("submit_product");

  // Add additional validation conditions as needed
  if (
    productCateg !== "none" &&
    productName !== "none" &&
    productCode.trim() !== "" &&
    batchNumber.trim() !== "" &&
    manufacturedDate.trim() !== "" &&
    expirationDate.trim() !== "" &&
    dateStocked.trim() !== "" &&
    prodDescription.trim() !== "" &&
    quantity >= 1
  ) {
    submitButton.removeAttribute("disabled");
    submitButton.classList.remove("disabled");
  } else {
    submitButton.setAttribute("disabled", true);
    submitButton.classList.add("disabled");
  }
}

// Example: Call enableSubmitButton() on input change events
document
  .getElementById("product-categ")
  .addEventListener("change", enableSubmitButton);
document
  .getElementById("product_name")
  .addEventListener("change", enableSubmitButton);
document
  .getElementById("product_code")
  .addEventListener("input", enableSubmitButton);
document
  .getElementById("batch_number")
  .addEventListener("input", enableSubmitButton);
document
  .getElementById("manufactured_date")
  .addEventListener("input", enableSubmitButton);
document
  .getElementById("expiration_date")
  .addEventListener("input", enableSubmitButton);
document
  .getElementById("datestocked")
  .addEventListener("input", enableSubmitButton);
document
  .getElementById("prod_description")
  .addEventListener("input", enableSubmitButton);
document
  .getElementById("quantity")
  .addEventListener("input", enableSubmitButton);

//cloned function for quantity
// Function to decrement quantity
function decrementQuantity1() {
  var quantityInput = document.getElementById("quantity-1");
  var currentQuantity = parseInt(quantityInput.value);

  // Ensure the quantity is not less than 1
  if (currentQuantity > 0) {
    quantityInput.value = currentQuantity - 1;
    updateQuantityErrorMessage1();
  }
  enableSubmitButton1();
}

// Function to increment quantity
function incrementQuantity1() {
  var quantityInput = document.getElementById("quantity-1");
  var currentQuantity = parseInt(quantityInput.value);

  // Increment the quantity
  quantityInput.value = currentQuantity + 1;
  updateQuantityErrorMessage1();
  enableSubmitButton1();
}





// Function to update quantity error message visibility
function updateQuantityErrorMessage1() {
  var quantityInput = document.getElementById("quantity-1");
  var errorQuantity = document.getElementById("error-quantity-1");

  // Check if the quantity is 0
  if (parseInt(quantityInput.value) === 0) {
    errorQuantity.style.display = "block";
  } else {
    errorQuantity.style.display = "none";
  }
}



//cloned function for submit product button sa modal sa add product
function enableSubmitButton1() {
  var productCateg1 = document.getElementById("product-categ-1").value;
  var productName1 = document.getElementById("product_name-1").value;
  var productCode1 = document.getElementById("product_code-1").value;
  var batchNumber1 = document.getElementById("batch_number-1").value;
  var manufacturedDate1 = document.getElementById("manufactured_date-1").value;
  var expirationDate1 = document.getElementById("expiration_date-1").value;
  var dateStocked1 = document.getElementById("datestocked-1").value;
  var prodDescription1 = document.getElementById("prod_description-1").value;
  var quantity1 = document.getElementById("quantity-1").value;
  var submitButton1 = document.getElementById("submit_product-1");

  // Add additional validation conditions as needed
  if (
    productCateg1 !== "none" &&
    productName1 !== "none" &&
    productCode1.trim() !== "" &&
    batchNumber1.trim() !== "" &&
    manufacturedDate1.trim() !== "" &&
    expirationDate1.trim() !== "" &&
    dateStocked1.trim() !== "" &&
    prodDescription1.trim() !== "" &&
    quantity1 >= 1
  ) {
    submitButton1.removeAttribute("disabled");
    submitButton1.classList.remove("disabled");
  } else {
    submitButton1.setAttribute("disabled", true);
    submitButton1.classList.add("disabled");
  }
}

// Example: Call enableSubmitButton() on input change events
document
  .getElementById("product-categ-1")
  .addEventListener("change", enableSubmitButton1);
document
  .getElementById("product_name-1")
  .addEventListener("change", enableSubmitButton1);
document
  .getElementById("product_code-1")
  .addEventListener("input", enableSubmitButton1);
document
  .getElementById("batch_number-1")
  .addEventListener("input", enableSubmitButton1);
document
  .getElementById("manufactured_date-1")
  .addEventListener("input", enableSubmitButton1);
document
  .getElementById("expiration_date-1")
  .addEventListener("input", enableSubmitButton1);
document
  .getElementById("datestocked-1")
  .addEventListener("input", enableSubmitButton1);
document
  .getElementById("prod_description-1")
  .addEventListener("input", enableSubmitButton1);
document
  .getElementById("quantity-1")
  .addEventListener("input", enableSubmitButton1);

function clearForm1() {
  // Clear product-categ, product_name, and quantity
  var productCategSelect = document.getElementById("product-categ-1");
  var productNameSelect = document.getElementById("product_name-1");
  var quantityInput = document.getElementById("quantity-1");

  productCategSelect.selectedIndex = 0;
  productNameSelect.innerHTML =
    '<option value="" disabled selected>Select a Product Name</option>';
  quantityInput.value = 0;

  // Disable product_name if product-categ is none
  if (productCategSelect.value === "none") {
    productNameSelect.disabled = true;
  } else {
    productNameSelect.disabled = false;
  }

  // Clear other input and textarea elements
  document.getElementById("product_code-1").value = "";
  document.getElementById("batch_number-1").value = "";
  document.getElementById("manufactured_date-1").value = "";
  document.getElementById("expiration_date-1").value = "";
  document.getElementById("datestocked-1").value = "";
  document.getElementById("prod_description-1").value = "";

  // Enable submit button if the form is cleared
  enableSubmitButton1();
}

function cancelStock() {

  var batch_number = document.getElementById("batch_no");
  var manufactured_date1 = document.getElementById("manufacturing_date");
  var expiration_date = document.getElementById("expired_date");
  var datestocked = document.getElementById("date_stocked");
  var quantityInput = document.getElementById("quantity-2");

  var add_stock = document.getElementById("add_stock");

  add_stock.disabled = true;

  batch_number.value = "";
  manufactured_date1.value = "";
  expiration_date.value = "";
  datestocked.value = "";
  quantityInput.value = 0;
}


function enableAddStock() {
  var batch_number = document.getElementById("batch_no_1").value;
  var manufactured_date1 = document.getElementById("manufacturing_date-1").value;
  var expiration_date = document.getElementById("expired_date").value;
  var datestocked = document.getElementById("date_stocked1").value;
  var quantity = document.getElementById("quantity-2").value;
  var add_stock = document.getElementById("add_stock");

  // Add additional validation conditions as needed
  if (
      batch_number.trim() !== "" &&
      manufactured_date1.trim() !== "" &&
      expiration_date.trim() !== "" &&
      datestocked.trim() !== "" &&
      quantity >= 1
  ) {
      add_stock.disabled = false;
  } else {
      add_stock.disabled = true;
  }

  // Logging values for debugging
  console.log('batch_number:', batch_number);
  console.log('manufactured_date1:', manufactured_date1);
  console.log('expired_date:', expiration_date);
  console.log('datestocked:', datestocked);
  console.log('quantity:', quantity);
  console.log('add_stock.disabled:', add_stock.disabled);
}

document.getElementById("batch_no_1").addEventListener("input", enableAddStock);
document.getElementById("manufacturing_date-1").addEventListener("input", enableAddStock);
document.getElementById("expired_date").addEventListener("input", enableAddStock);
document.getElementById("date_stocked1").addEventListener("input", enableAddStock);
document.getElementById("quantity-2").addEventListener("input", enableAddStock);



// Triggering the function initially
enableAddStock();


function decrementQuantity2() {
  enableAddStock();
  var quantityInput = document.getElementById("quantity-2");
  var currentQuantity = parseInt(quantityInput.value);

  // Ensure the quantity is not less than 1
  if (currentQuantity > 0) {
    quantityInput.value = currentQuantity - 1;
    updateQuantityErrorMessage1();
  }

  // Trigger the input event manually
  var inputEvent = new Event('input', { bubbles: true });
  quantityInput.dispatchEvent(inputEvent);

  

  // Logging for debugging
  console.log('Decrement - currentQuantity:', quantityInput.value);
}

function incrementQuantity2() {
  enableAddStock();
  var quantityInput = document.getElementById("quantity-2");
  var currentQuantity = parseInt(quantityInput.value);

  // Increment the quantity
  quantityInput.value = currentQuantity + 1;
  quantityInput.setAttribute('value', quantityInput.value); // Update the attribute as well
  updateQuantityErrorMessage1();

  // Trigger the input event manually
  var inputEvent = new Event('input', { bubbles: true });
  quantityInput.dispatchEvent(inputEvent);

  

  // Logging for debugging
  console.log('Increment - currentQuantity:', quantityInput.value);
}


//show prod details clickign view
function handleEditProdDetailClick() {
  var prodDetail = document.getElementById("prod_detail");
  var viewProduct = document.getElementById("view_product");
  var inventoryContainer = document.getElementById("InventoryContainer");
  var prod_info_header = document.getElementById("prod_info_header");
  var prod_detail_header = document.getElementById("prod_detail_header");

  // Show prod_detail
  prodDetail.style.display = "flex";
  prod_detail_header.style.display = "flex";

  // Hide view_product and InventoryContainer
  viewProduct.style.display = "none";
  inventoryContainer.style.display = "none";
  prod_info_header.style.display = "none";
}

// Get the edit_prod_detail button element
var editProdDetailButton = document.getElementById("edit_prod_detail");

// Add event listener to the edit_prod_detail button
editProdDetailButton.addEventListener("click", handleEditProdDetailClick);

// Get a reference to the "SelectAll" checkbox
const selectAllCheckbox = document.getElementById('SelectAll');

// Get a reference to the table body
const tableBody = document.getElementById('inventoryTableBody');

// Function to handle the "SelectAll" checkbox
function handleSelectAll() {
  const checkboxes = tableBody.querySelectorAll('input[type="checkbox"]');
  checkboxes.forEach((checkbox) => {
    checkbox.checked = selectAllCheckbox.checked;
  });
}