// Get references to the input elements and the "Next" button
const petNameInput = document.getElementById("petName");
const breedSelect = document.getElementById("breed");
const surgeryTypeSelect = document.getElementById("surgery-type");
const dogRadio = document.getElementById("dog");
const catRadio = document.getElementById("cat");
const floatingTextarea = document.getElementById("floatingTextarea");
const nextButton = document.getElementById("next_btn");
const appointmentDetailsDiv = document.getElementById("appointment_details");

// Add event listeners to the input elements and radio buttons
petNameInput.addEventListener("input", checkEnableNextButton);
breedSelect.addEventListener("change", checkEnableNextButton);
surgeryTypeSelect.addEventListener("change", checkEnableNextButton);
dogRadio.addEventListener("change", toggleBreedSelect);
catRadio.addEventListener("change", toggleBreedSelect);

// Define dog and cat breeds
const dogBreeds = ["Affenpinscher", "Yorkshire Terrier"];
const catBreeds = ["Abyssinian", "Turkish Van"];

// Function to populate the breed select with options
function populateBreeds(breeds) {
    breedSelect.removeAttribute("disabled");
    breedSelect.innerHTML = "";

    const defaultOption = document.createElement("option");
    defaultOption.value = "none";
    defaultOption.textContent = "Select a breed";
    breedSelect.appendChild(defaultOption);

    breeds.forEach((breed) => {
        const option = document.createElement("option");
        option.value = breed;
        option.textContent = breed;
        breedSelect.appendChild(option);
    });
}

// Function to toggle breed select and populate options based on pet selection
function toggleBreedSelect() {
    if (dogRadio.checked) {
        populateBreeds(dogBreeds);
    } else if (catRadio.checked) {
        populateBreeds(catBreeds);
    } else {
        breedSelect.setAttribute("disabled", "true");
        breedSelect.innerHTML = `<option value="none">Please select type of pet first</option>`;
    }
    checkEnableNextButton();
}

// Initially, call toggleBreedSelect to set the initial state based on radio button selection
toggleBreedSelect();

// Function to enable the "Next" button sa form_fields
function checkEnableNextButton() {
    const isPetNameValid = petNameInput.value.trim() !== "";
    const isBreedSelected = breedSelect.value !== "none";
    const isSurgeryTypeSelected = surgeryTypeSelect.value !== "none";
    const isPetSelected = dogRadio.checked || catRadio.checked;

    if (isPetNameValid && isBreedSelected && isSurgeryTypeSelected && isPetSelected) {
        nextButton.removeAttribute("disabled");
    } else {
        nextButton.setAttribute("disabled", "true");
    }
}

// Function to enable the "Next" button sa form_fields_1
function checkAllFieldsCompleted() {
    const petNameValue = document.getElementById(`petName_${clickCount}`).value.trim();
    const breedValue = document.getElementById(`breed_${clickCount}`).value;
    const surgeryTypeValue = document.getElementById(`surgery-type_${clickCount}`).value;

    if (petNameValue !== "" && breedValue !== "none" && surgeryTypeValue !== "none") {
        nextButton.removeAttribute("disabled");
    } else {
        nextButton.setAttribute("disabled", "true");
    }
}

// Function to capitalize the first letter of a string
function capitalizeFirstLetter(str) {
    // Check if the string is in all uppercase
    if (str === str.toUpperCase()) {
        return str.charAt(0) + str.slice(1).toLowerCase();
    } else {
        return str.replace(/\b\w/g, function (char) {
            return char.toUpperCase();
        });
    }
}

// Add new form dynamically with a limit of two forms
let clickCount = 0;

function addForm() {
    isUpdated = false; // Reset the isUpdated flag to false
    clickCount++;

    if (clickCount <= 2) {
        const formContent = document.getElementById("form-content");
        const addFormButton = document.getElementById("add_form");
        const newForm = document.getElementById("form_fields").cloneNode(true);
        const newFormId = `form_fields_${clickCount}`;
        newForm.setAttribute("id", newFormId);
        
        // Attach event listeners for the new form
        const uniqueIdSuffix = `_${clickCount}`;

        // Clone the petName input
        const petNameInput = newForm.querySelector(".petName");
        const petNameInputClone = petNameInput.cloneNode(true);

        petNameInput.parentNode.replaceChild(petNameInputClone, petNameInput);
        
        const petNameErrorMessage = newForm.querySelector("#petNameError");

        
        const clonedBreedSelect = newForm.querySelector("#breed");
        const breedErrorMessage = newForm.querySelector("#breedError");
        
        const surgeryTypeSelect = newForm.querySelector("#surgery-type");
        const surgeryTypeErrorMessage = newForm.querySelector("#surgeryTypeError");
        
        const dogRadio = newForm.querySelector("#dog");
        const catRadio = newForm.querySelector("#cat");
        
        const floatingTextarea = newForm.querySelector("#floatingTextarea");
        
        
        petNameInputClone.setAttribute("id", `petName${uniqueIdSuffix}`);
        petNameErrorMessage.setAttribute("id", `petNameError${uniqueIdSuffix}`);
        
        clonedBreedSelect.setAttribute("id", `breed${uniqueIdSuffix}`);
        breedErrorMessage.setAttribute("id", `breedError${uniqueIdSuffix}`);
        
        surgeryTypeSelect.setAttribute("id", `surgery-type${uniqueIdSuffix}`);
        surgeryTypeErrorMessage.setAttribute("id", `surgeryTypeError${uniqueIdSuffix}`);
        
        dogRadio.setAttribute("id", `dog${uniqueIdSuffix}`);
        catRadio.setAttribute("id", `cat${uniqueIdSuffix}`);
        floatingTextarea.setAttribute("id", `floatingTextarea${uniqueIdSuffix}`);

        // Reset values for the newly generated form
        petNameInputClone.value = "";
        clonedBreedSelect.value = "none";
        surgeryTypeSelect.value = "none";
        dogRadio.checked = false;
        catRadio.checked = false;
        floatingTextarea.value = "";
    
    
    
        // Add event listeners to the newly generated form elements for petName_1
        petNameInputClone.addEventListener("input", function () {
            checkField(`petName${uniqueIdSuffix}`, `petNameError${uniqueIdSuffix}`);
            checkAllFieldsCompleted();
        });

        
        // Add event listeners to the newly generated form elements for breed_1 and breed_2
        clonedBreedSelect.addEventListener("change", function() {
            checkField(`breed${uniqueIdSuffix}`, `breedError${uniqueIdSuffix}`);
            checkAllFieldsCompleted();
        });

        
        // Add event listeners to the newly generated form elements for surgery-type_1 and surgery-type_2
        surgeryTypeSelect.addEventListener("change", function() {
            checkField(`surgery-type${uniqueIdSuffix}`, `surgeryTypeError${uniqueIdSuffix}`);
            checkAllFieldsCompleted();
        });
        
        dogRadio.addEventListener("change", function () {
            toggleBreedSelectForNewForm(clonedBreedSelect, dogBreeds, catBreeds);
        });
        catRadio.addEventListener("change", function () {
            toggleBreedSelectForNewForm(clonedBreedSelect, dogBreeds, catBreeds);
        });

        // Populate breed select with options for the new form
        function populateBreedsForNewForm(breeds) {
            clonedBreedSelect.removeAttribute("disabled");
            clonedBreedSelect.innerHTML = "";

            const defaultOption = document.createElement("option");
            defaultOption.value = "none";
            defaultOption.textContent = "Select a breed";
            clonedBreedSelect.appendChild(defaultOption);

            breeds.forEach((breed) => {
                const option = document.createElement("option");
                option.value = breed;
                option.textContent = breed;
                clonedBreedSelect.appendChild(option);
            });
        }

        // Toggle breed select for the new form
        function toggleBreedSelectForNewForm(select, dogBreeds, catBreeds) {
            if (dogRadio.checked) {
                populateBreedsForNewForm(dogBreeds);
            } else if (catRadio.checked) {
                populateBreedsForNewForm(catBreeds);
            } else {
                select.setAttribute("disabled", "true");
                select.innerHTML = `<option value="none">Please select type of pet first</option>`;
            }

        }

        // Initially, call toggleBreedSelectForNewForm to set the initial state based on radio button selection for the new form
        toggleBreedSelectForNewForm(clonedBreedSelect, dogBreeds, catBreeds);

        nextButton.setAttribute("disabled", "true");
        
        formContent.insertBefore(newForm, addFormButton);
        
        
    } else {
        const addFormButton = document.getElementById("add_form");
        addFormButton.disabled = true;
    }

    // Attach unique group name for radio buttons in the cloned form
    const uniqueGroupName = `petType_${clickCount}`;
    dogRadio.setAttribute("name", uniqueGroupName);
    catRadio.setAttribute("name", uniqueGroupName);

    // Event listeners for radio buttons within the newly generated form
    function attachRadioEventListeners() {
        dogRadio.addEventListener("change", function () {
            toggleBreedSelectForNewForm(clonedBreedSelect, dogBreeds, catBreeds);
        });
        catRadio.addEventListener("change", function () {
            toggleBreedSelectForNewForm(clonedBreedSelect, dogBreeds, catBreeds);
        });
    }

    attachRadioEventListeners();
}

// Add an event listener to the "Add Form" button
const addButton = document.getElementById("add_form");
addButton.addEventListener("click", addForm);

let isUpdated = false;
// Function to update the appointment details
function updateAppointmentDetails() {

    if (!isUpdated) {
        isUpdated = true;

        const petType = dogRadio.checked ? "Dog" : catRadio.checked ? "Cat" : "";
    const breed = breedSelect.value;
    const surgeryType = surgeryTypeSelect.value;
    const additionalNotes = floatingTextarea.value;
    const clonePetName = clickCount >= 1 ? document.getElementById(`petName_${clickCount}`).value : "";

        
    const clonePetType = clickCount >= 1 ? document.getElementById(`dog_${clickCount}`).checked ? "Dog" : document.getElementById(`cat_${clickCount}`).checked ? "Cat" : "" : "";
        
        
        
    const cloneBreed = clickCount >= 1 ? document.getElementById(`breed_${clickCount}`).value : "";
    const cloneSurgeryType = clickCount >= 1 ? document.getElementById(`surgery-type_${clickCount}`).value : "";
    const cloneAdditionalNotes = clickCount >= 1 ? document.getElementById(`floatingTextarea_${clickCount}`).value : "";
    

    // Update the DOM elements with the appointment details
    const petNameDetail = document.getElementById("petName_Detail").getElementsByTagName("p")[0];
    const confirmPetName = document.getElementById("confirm_Pet_Name");
    const petTypeDetail = document.getElementById("petType_Detail").getElementsByTagName("p")[0];
    const confirmPetType = document.getElementById("confirm_Pet_type");
    const petBreedDetail = document.getElementById("petBreed_Detail").getElementsByTagName("p")[0];
    const confirmBreed = document.getElementById("confirm_breed");
    const surgeryTypeDetail = document.getElementById("surgery_type_Detail").getElementsByTagName("p")[0];
    const confirmSurgeryType = document.getElementById("confirm_surgery_Type");
    const additionalNotesDetail = document.getElementById("additional_Notes_detail").getElementsByTagName("p")[0];
    const confirmAdditionalNotes = document.getElementById("confirm_additional_Notes");

    petNameDetail.innerText = capitalizeFirstLetter(petNameInput.value);
    confirmPetName.innerText = capitalizeFirstLetter(petNameInput.value);
    petTypeDetail.innerText = capitalizeFirstLetter(petType);
    confirmPetType.innerText = capitalizeFirstLetter(petType);
    petBreedDetail.innerText = capitalizeFirstLetter(breed);
    confirmBreed.innerText = capitalizeFirstLetter(breed);
    surgeryTypeDetail.innerText = capitalizeFirstLetter(surgeryType);
    confirmSurgeryType.innerText = capitalizeFirstLetter(surgeryType);
    additionalNotesDetail.innerText = capitalizeFirstLetter(additionalNotes);
    confirmAdditionalNotes.innerText = capitalizeFirstLetter(additionalNotes);
        
        

    if (clickCount >= 1) {
        
        // Create and populate appointment_details element
        const newAppointmentDetails = document.createElement("div");
        newAppointmentDetails.classList.add("d-flex", "flex-column", "align-self-stretch", "appointment_details");
        newAppointmentDetails.style.alignItems = "flex-start";
        newAppointmentDetails.style.gap = "var(--spacing-spacing-m, 24px)";
        newAppointmentDetails.id = `appointment_details_${clickCount}`;

        const petNameTypeBreed = document.createElement("div");
        petNameTypeBreed.classList.add("d-flex", "align-items-center", "align-self-stretch", "petName_type_breed");
        petNameTypeBreed.style.gap = "20px";
        
        

        const petNameDetail_1 = document.createElement("div");
        petNameDetail_1.classList.add("d-flex", "flex-column", "align-items-start", "pet_Detail");
        petNameDetail_1.style.gap = "10px";
        petNameDetail_1.style.flex = "1 0 0";
        petNameDetail_1.innerHTML = `
            <h1>Pet Name</h1>
            <p>${capitalizeFirstLetter(clonePetName)}</p>
        `;
        petNameTypeBreed.appendChild(petNameDetail_1);

        const petTypeDetail_1 = document.createElement("div");
        petTypeDetail_1.classList.add("d-flex", "flex-column", "align-items-start", "pet_Detail");
        petTypeDetail_1.style.gap = "10px";
        petTypeDetail_1.style.flex = "1 0 0";
        petTypeDetail_1.innerHTML = `
            <h1>Pet Type</h1>
            <p>${capitalizeFirstLetter(clonePetType)}</p>
        `;
        petNameTypeBreed.appendChild(petTypeDetail_1);
        
        
        const petBreedDetail_1 = document.createElement("div");
        petBreedDetail_1.classList.add("d-flex", "flex-column", "align-items-start", "pet_Detail");
        petBreedDetail_1.style.gap = "10px";
        petBreedDetail_1.style.flex = "1 0 0";
        petBreedDetail_1.innerHTML = `
            <h1>Breed</h1>
            <p>${capitalizeFirstLetter(cloneBreed)}</p>
        `;
        petNameTypeBreed.appendChild(petBreedDetail_1);

        newAppointmentDetails.appendChild(petNameTypeBreed);

        const surgeryTypeNotes = document.createElement("div");
        surgeryTypeNotes.classList.add("d-flex", "align-self-stretch", "surgery_type_notes");
        surgeryTypeNotes.style.alignItems = "flex-start";
        surgeryTypeNotes.style.gap = "20px";

        const surgeryTypeDetail_1 = document.createElement("div");
        surgeryTypeDetail_1.classList.add("d-flex", "flex-column", "align-items-start", "pet_Detail");
        surgeryTypeDetail_1.style.gap = "10px";
        surgeryTypeDetail_1.style.flex = "1 0 0";
        surgeryTypeDetail_1.innerHTML = `
            <h1>Surgery Type</h1>
            <p>${capitalizeFirstLetter(cloneSurgeryType)}</p>
        `;
        surgeryTypeNotes.appendChild(surgeryTypeDetail_1);

        const additionalNotesDetail_1 = document.createElement("div");
        additionalNotesDetail_1.classList.add("d-flex", "flex-column", "align-items-start", "pet_Detail");
        additionalNotesDetail_1.style.gap = "10px";
        additionalNotesDetail_1.style.flex = "1 0 0";
        additionalNotesDetail_1.innerHTML = `
            <h1>Additional Notes</h1>
            <p>${capitalizeFirstLetter(cloneAdditionalNotes)}</p>
        `;
        surgeryTypeNotes.appendChild(additionalNotesDetail_1);

        const blank_1 = document.createElement("div");
        blank_1.classList.add("d-flex", "flex-column", "align-items-start", "pet_Detail");
        blank_1.style.gap = "10px";
        blank_1.style.flex = "1 0 0";
        blank_1.innerHTML = ``;
        surgeryTypeNotes.appendChild(blank_1);

        newAppointmentDetails.appendChild(surgeryTypeNotes);

        // Append the new appointment details to the appropriate location
       document.getElementById("details_container").appendChild(newAppointmentDetails);

    }
        // Retrieve the selected date and time from their respective elements
        const selectedDateElement = document.getElementById("selected_date");
        const selectedTimeElement = document.querySelector('.selected-time');
        
        const formFieldData1 = [
            { name: 'petName', label: 'Pet Name', value: clonePetName, row: 1 },
            { name: 'petType', label: 'Pet Type', value: clonePetType, row: 1 },
            { name: 'breed', label: 'Breed', value: cloneBreed, row: 1 },
            { name: 'surgeryType', label: 'Surgery Type', value: cloneSurgeryType, row: 2 },
            { name: 'additionalNotes', label: 'Additional Notes', value: cloneAdditionalNotes, row: 2 },
            { name: 'blank', label: '', row: 2 },
            { name: 'selected-date', label: 'Date', value: selectedDateElement.textContent, row: 3 },
            { name: 'selected-time', label: 'Time', value: selectedTimeElement.textContent, row: 3 },
            { name: 'blank', label: '', row: 3 },
            // Add other form field data as needed
        ];

        generateAppointmentDetails(clickCount, formFieldData1); // Generate details_1
    }
}

//function to generate confirm details
function generateAppointmentDetails(clickCount, formFieldData) {
    
    // Create a new appointment details section
    const newDetails = document.createElement('div');
    newDetails.classList.add('d-flex', 'flex-column', 'align-items-start', 'align-self-stretch', 'details');
    newDetails.id = `details_${clickCount}`;

    // Create the first row
    const firstRow = document.createElement('div');
    firstRow.classList.add('d-flex', 'align-items-center', 'align-self-stretch', 'details_confirmation_1strow');

    // Create the second row
    const secondRow = document.createElement('div');
    secondRow.classList.add('d-flex', 'align-items-start', 'align-self-stretch', 'details_confirmation_2ndrow');

    // Create the third row
    const thirdRow = document.createElement('div');
    thirdRow.classList.add('d-flex', 'align-items-start', 'align-self-stretch', 'details_confirmation_3rdrow');

    // Populate each row with the corresponding form data
    formFieldData.forEach((field) => {
        const detailDiv = document.createElement('div');
        detailDiv.classList.add('d-flex', 'flex-column', 'align-items-start', 'detail_confirmation');

        const heading = document.createElement('h1');
        heading.textContent = field.label;

        const text = document.createElement('p');
        text.id = `confirm_${field.name}_${clickCount}`;
        text.textContent = field.value;
        

        detailDiv.appendChild(heading);
        detailDiv.appendChild(text);

        if (field.row === 1) {
            firstRow.appendChild(detailDiv);
        } else if (field.row === 2) {
            secondRow.appendChild(detailDiv);
        } else if (field.row === 3) {
            thirdRow.appendChild(detailDiv);
        }
    });

    // Append the rows to the new appointment details section
    newDetails.appendChild(firstRow);
    newDetails.appendChild(secondRow);
    newDetails.appendChild(thirdRow);

    // Append the new appointment details to the appropriate location
    const detailsContainer = document.getElementById('details');
    if (detailsContainer) {
        detailsContainer.parentNode.insertBefore(newDetails, detailsContainer.nextSibling);
    }
    
}

// Function to format input based on the provided regex
function formatInput(inputId, regex) {
    const inputElement = document.getElementById(inputId);
    inputElement.addEventListener('input', function (e) {
        let inputValue = e.target.value;
        let formattedValue = inputValue.replace(regex, '');
        e.target.value = formattedValue;
    });
}

// Call the function with specific inputs and regex patterns
formatInput('petName', /[^a-zA-Z\s]/g);
formatInput('floatingTextarea', /[^a-zA-Z0-9\s]/g);


// Function to handle the display of the error message
function checkField(inputId, errorId) {
    const input = document.getElementById(inputId);
    const errorMessage = document.getElementById(errorId);
    const container = input.parentElement;

    function handleChange() {
        if (input.tagName === 'SELECT') {
            const value = input.options[input.selectedIndex].value;
            if (value === 'none') {
                container.classList.add('error');
                errorMessage.style.display = 'block';
            } else {
                container.classList.remove('error');
                errorMessage.style.display = 'none';
            }
        } else {
            const value = input.value.trim();
            if (value === '') {
                container.classList.add('error');
                errorMessage.style.display = 'block';
            } else {
                container.classList.remove('error');
                errorMessage.style.display = 'none';
            }
        }
    }

    function handleFocusOut() {
        if (input.tagName === 'SELECT') {
            const value = input.options[input.selectedIndex].value;
            if (value === 'none') {
                container.classList.add('error');
                errorMessage.style.display = 'block';
            } else {
                container.classList.remove('error');
                errorMessage.style.display = 'none';
            }
        } else {
            const value = input.value.trim();
            if (value === '') {
                container.classList.add('error');
                errorMessage.style.display = 'block';
            } else {
                container.classList.remove('error');
                errorMessage.style.display = 'none';
            }
        }
    }

    input.addEventListener('input', handleChange);
    input.addEventListener('focusout', handleFocusOut);
}


// Original form fields
checkField('petName', 'petNameError');
checkField('breed', 'breedError');
checkField('surgery-type', 'surgeryTypeError');


function showModal() {
            $('#consent_modal').modal('show');
        }
