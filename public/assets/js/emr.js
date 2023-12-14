  // Function to generate pet-record-items dynamically
  function generatePetRecordItems(petRecords) {
    const petRecordsContainer = $('.admin_petInfo_pet_records_container');
    petRecordsContainer.empty();
    
    petRecords.forEach((record) => {
      const petRecordItem = `
        <div class="pet-record-item">
          <!-- Your content for each pet record item goes here -->
        </div>
      `;
      petRecordsContainer.append(petRecordItem);
    });
  }

  // Function to fetch pet records from the backend
  function fetchPetRecords() {
    $.ajax({
      url: '#', // Replace with the actual route name to fetch pet records
      method: 'GET',
      dataType: 'json',
      success: function (response) {
        generatePetRecordItems(response);
      },
      error: function (error) {
        console.error(error);
      }
    });
  }

  // Call the fetchPetRecords function on page load or whenever you want to refresh the pet records
  $(document).ready(function () {
    fetchPetRecords();
  });

    $(document).ready(function () {
        // Function to show the menu options
        function showMenuOptions() {
            $('.admin_petInfo_menu_options').show();
        }

        // Function to hide the menu options
        function hideMenuOptions() {
            $('.admin_petInfo_menu_options').hide();
        }

        // Event listener for button click to toggle menu visibility
        $('.admin_petInfo_frame426').on('click', function (e) {
            e.stopPropagation(); // Prevent the click event from bubbling up to the document

            var menuOptions = $(this).siblings('.admin_petInfo_menu_options');

            // Toggle the menu visibility
            if (menuOptions.is(':visible')) {
                hideMenuOptions(menuOptions);
            } else {
                showMenuOptions(menuOptions);
            }
        });
        // Function to hide the menu options
        function hideMenuOptions(menuOptions) {
            menuOptions.hide();
        }

        // Function to show the menu options
        function showMenuOptions(menuOptions) {
            // Hide any other open menu options before showing the current one
            $('.admin_petInfo_menu_options').not(menuOptions).hide();

            // Show the current menu options
            menuOptions.show();
        }


        // Event listener to hide the menu when clicking anywhere on the document
        $(document).on('click', function () {
            hideMenuOptions();
        });

        // Event listener to prevent the menu from hiding when clicking inside the menu
        $('.admin_petInfo_menu_options').on('click', function (e) {
            e.stopPropagation(); // Prevent the click event from bubbling up to the document
        });

        // Add event listeners for the "Edit" and "Delete" options (you can customize these URLs accordingly)
        $('#addRecordButton').on('click', function () {
            // Handle the edit logic here (e.g., redirect to the edit page)
            // Example: window.location.href = '/edit/' + petId;
            $('.admin_petInfo_addPetmodal').show();
        });

        $('.admin_petInfo_cancel-button').on('click', function () {
            $('.admin_petInfo_addPetmodal').hide();
        });

        // Add event listener to handle the save logic when the "Save" button is clicked
        $('.save-button').on('click', function () {
            // Handle the save logic here (e.g., update the pet record)
            // Example: window.location.href = '/save/' + petId;
            // After saving, you can close the modal
            $('.admin_petInfo_addPetmodal').hide();
        });
        function clearForm() {
            $('#name').val('');
            $('#species').val('');
            $('#age').val('');
            $('#species_input').val('');
            $('#breed_input').val('');
            $('#birthdate_input').val('');
            $('#age_input').val('');
            $('#weight_input').val('');
            $('#color_input').val('');
        }

        // Event listener for the "Clear Form" button click
        $('.clear-button').on('click', function () {
            clearForm();
        });

    });

        // Function to validate input and allow only alphabet characters
        function validateAlphabetInput(event) {
            // Get the user's input value from the input field
            const input = event.target;
            const inputValue = input.value;

            // Regular expression to match only alphabet characters
            const regex = /^[A-Za-z]+$/;

            // Check if the input value matches the regex (only alphabet characters)
            if (!regex.test(inputValue)) {
                // If the input contains non-alphabet characters, prevent the input and remove the invalid characters
                input.value = inputValue.replace(/[^A-Za-z]/g, '');
            }
        }

        // Get the input element by its ID
        const petNameInput = document.getElementById('species');
        // Add an event listener to the input element to handle input changes
        petNameInput.addEventListener('input', validateAlphabetInput);


        // Function to validate input and allow only numbers
        function validateNumberInput(event) {
            // Get the user's input value from the input field
            const input = event.target;
            const inputValue = input.value;

            // Regular expression to match only numbers, including scientific notation (e.g., 2e5)
            const regex = /^[0-9]*(?:[eE][-+]?[0-9]+)?$/;

            // Check if the input value matches the regex (only numbers)
            if (!regex.test(inputValue)) {
                // If the input contains non-numeric characters, prevent the input and remove the invalid characters
                input.value = inputValue.replace(/[^\d.eE+-]/g, '');
            }
        }
        // Get the input element by its ID
        const microchipInput = document.getElementById('age');
        // Add an event listener to the input element to handle input changes
        microchipInput.addEventListener('input', validateNumberInput);


        // Predefined breed data for dog and cat
        const breedsData = {
            dog: ['Afghan Hound', 'Akita', 'Alaskan Malamute', 'American Bulldog', 'American Eskimo Dog','American Foxhound', 'American Pit Bull Terrier', 'American Staffordshire Terrier', 'Aspin','Australian Cattle Dog', 'Australian Shepherd', 'Basset Hound', 'Beagle', 'Bearded Collie',
      'Bernese Mountain Dog', 'Bichon Frise', 'Bloodhound', 'Border Collie', 'Boston Terrier','Boxer', 'Brittany', 'Bulldog', 'Bullmastiff', 'Cairn Terrier', 'Cavalier King Charles Spaniel','Chesapeake Bay Retriever', 'Chihuahua', 'Chinese Crested', 'Chow Chow', 'Cocker Spaniel',
      'Collie', 'Dachshund', 'Dalmatian', 'Doberman Pinscher', 'English Bulldog', 'English Cocker Spaniel','English Setter', 'French Bulldog', 'German Shepherd', 'Golden Retriever', 'Great Dane', 'Greyhound','Havanese', 'Irish Setter', 'Italian Greyhound', 'Jack Russell Terrier', 'Labrador Retriever',
      'Lhasa Apso', 'Maltese', 'Mastiff', 'Miniature Pinscher', 'Newfoundland', 'Old English Sheepdog','Papillon', 'Pekingese', 'Pomeranian', 'Poodle', 'Portuguese Water Dog', 'Pug', 'Rottweiler','Saint Bernard', 'Samoyed', 'Schnauzer', 'Scottish Terrier', 'Shetland Sheepdog', 'Shih Tzu',
      'Siberian Husky', 'Staffordshire Bull Terrier', 'Weimaraner', 'West Highland White Terrier',
      'Yorkshire Terrier'],
            cat: ['Abyssinian', 'American Bobtail', 'American Curl', 'American Shorthair', 'American Wirehair','Balinese', 'Bengal', 'Birman', 'Bombay', 'British Shorthair', 'Burmese', 'Chartreux', 'Chausie','Cornish Rex', 'Cymric', 'Devon Rex', 'Egyptian Mau', 'Exotic Shorthair', 'Havana Brown', 'Himalayan','Japanese Bobtail', 'Javanese', 'Korat', 'LaPerm', 'Maine Coon', 'Manx', 'Munchkin', 'Nebelung',
      'Norwegian Forest', 'Ocicat', 'Oriental', 'Persian', 'Pixiebob', 'Ragamuffin', 'Ragdoll','Russian Blue', 'Savannah', 'Scottish Fold', 'Selkirk Rex', 'Siamese', 'Siberian', 'Singapura','Snowshoe', 'Somali', 'Sphynx', 'Tonkinese', 'Turkish Angora', 'Turkish Van']
        };

        // Get the dropdown element by its ID
        const petTypeDropdown = document.getElementById('pet-type');

        // Get the datalist and breed input element by their IDs
        const breedDatalist = document.getElementById('breed_datalist');
        const breedInput = document.getElementsByName('breed_input')[0];

        // Function to populate the datalist based on the selected species (dog or cat)
        function populateBreedDatalist(selectedSpecies) {
            // Get the list of breeds based on the selected species from the breedsData object
            const breeds = breedsData[selectedSpecies];

            // Clear existing options in the datalist
            breedDatalist.innerHTML = '';

            // Create and append option elements for each breed to the datalist
            breeds.forEach(breed => {
                const option = document.createElement('option');
                option.value = breed;
                breedDatalist.appendChild(option);
            });
        }

        // Add event listener to the dropdown to handle breed options
        petTypeDropdown.addEventListener('change', function () {
            const selectedSpecies = petTypeDropdown.value;
            populateBreedDatalist(selectedSpecies);
        });

        function togglePetRecord() {
            const petRecordModal = document.querySelector('.admin_petInfo_pet_record_modal');
            const petRecordsContainer = document.querySelector('.admin_petInfo_pet_records_container');
            const addRecordButton = document.getElementById('addRecordButton');
            
            // Hide the addRecordButton
            addRecordButton.style.display = 'none';
            
            // Toggle the visibility of pet-record-modal
            if (petRecordModal.style.display === 'none') {
                petRecordModal.style.display = 'block';
                petRecordsContainer.style.display = 'none';
            } else {
                petRecordModal.style.display = 'none';
                petRecordsContainer.style.display = 'block';
            }
        }
        
        function togglePetRecordItem() {
            const petRecordModal = document.querySelector('.admin_petInfo_pet_record_modal');
            const petRecordsContainer = document.querySelector('.admin_petInfo_pet_records_container');
            const addRecordButton = document.getElementById('addRecordButton');
            
            // Show the addRecordButton
            addRecordButton.style.display = 'flex';
            
            // Toggle the visibility of pet-record-modal
            petRecordModal.style.display = 'none';
            petRecordsContainer.style.display = 'block';
        }
        
        // Event listener for back button click inside the pet-record-modal
document.querySelector('.admin_petInfo_backButton').addEventListener('click', function (e) {
    e.preventDefault(); // Prevent the default behavior of the button (e.g., form submission)
  
    // Hide the pet-record-modal
    document.querySelector('.admin_petInfo_pet_record_modal').style.display = 'none';
  
    // Show the pet-records-container
    document.querySelector('.admin_petInfo_pet_records_container').style.display = 'flex';
  
    // Hide the menu-options
    hideMenuOptions();
  });
  
  // Function to hide the menu options
  function hideMenuOptions() {
    document.querySelectorAll('.admin_petInfo_menu_options').forEach(function (menuOptions) {
      menuOptions.style.display = 'none';
    });
  }
  
//function to display modal for add health info
const addButton = document.getElementById("add_health_information");
const modal = document.getElementById("add_health_information_Modal");

addButton.addEventListener("click", () => {
    modal.style.display = "flex";
});

//to display modal for add condition
const addCondiButton = document.getElementById("add_existing_condition");
const condimodal = document.getElementById("add_condition_Modal");
    
addCondiButton.addEventListener("click", () => {
    condimodal.style.display = "flex";
});

//to display modal for add vax
const addVaxxButton = document.getElementById("add_vaccination");
const vaxxmodal = document.getElementById("add_vaccination_Modal");
    
addVaxxButton.addEventListener("click", () => {
    vaxxmodal.style.display = "flex";
});


//function sa clear button sa modal ng add health info
const clearFormButton = document.querySelector(".add_health_info_clearForm");
const selectField = document.querySelector(".add_health_information_input_fields select");
const inputFields = document.querySelectorAll(".add_health_information_input_fields input");


clearFormButton.addEventListener("click", function () {
    inputFields.forEach(input => {
        input.value = "";
    });
    selectField.selectedIndex = 0;
});



//function on close/x button in modal
const closeButton = document.querySelector(".add_health_information_close_btn");
const healthInfomodal = document.getElementById("add_health_information_Modal");

closeButton.addEventListener("click", function () {
    healthInfomodal.style.display = "none";
});

// Close the modal if the user clicks outside the modal content
window.addEventListener("click", function (event) {
    if (event.target === healthInfomodal) {
        healthInfomodal.style.display = "none";
    }    
});


//function sa clear button sa modal ng add condition 
const clearConditionFormButton = document.querySelector(".add_condition_clearForm");
const selectConditionField = document.querySelector(".add_condition_input_fields input");
const inputConditionFields = document.querySelectorAll(".add_condition_input_fields select");

clearConditionFormButton.addEventListener("click", function () {
    inputConditionFields.forEach(input => {
        input.value = "";
    });
    selectConditionField.selectedIndex = 0;
});


//function on close/x button in modal
const closeConditionButton = document.querySelector(".add_condition_close_btn");
const conditionmodal = document.getElementById("add_condition_Modal");

closeConditionButton.addEventListener("click", function () {
    conditionmodal.style.display = "none";
});

// Close the modal if the user clicks outside the modal content
window.addEventListener("click", function (event) {
    if (event.target === conditionmodal) {
        conditionmodal.style.display = "none";
    }    
});


//function sa clear button sa modal ng add vaccine 
const clearVaccineFormButton = document.querySelector(".add_vaccine_clearForm");
const selectVaccineField = document.querySelector(".add_vaccine_input_fields input");
const inputVaccineFields = document.querySelectorAll(".add_vaccine_input_fields select");

clearVaccineFormButton.addEventListener("click", function () {
    inputVaccineFields.forEach(input => {
        input.value = "";
    });
    selectVaccineField.selectedIndex = 0;
});


//function on close/x button in modal
const closeVaccineButton = document.querySelector(".add_vaccine_close_btn");
const vaccinemodal = document.getElementById("add_vaccination_Modal");

closeVaccineButton.addEventListener("click", function () {
    vaccinemodal.style.display = "none";
});

// Close the modal if the user clicks outside the modal content
window.addEventListener("click", function (event) {
    if (event.target === vaccinemodal) {
        vaccinemodal.style.display = "none";
    }    
});




    