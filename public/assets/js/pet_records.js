var editSaveChangesButton = document.getElementById('edit_save_changes');
var cancelEditBtn = document.getElementById('cancel_edit');
var saveChangesSuccessModal = new bootstrap.Modal(document.getElementById('save_changes_success'));
var discardEditModal = new bootstrap.Modal(document.getElementById('edit_discard'));

// Attach the function to the button click event
editSaveChangesButton.addEventListener('click', function(){
    saveChangesSuccessModal.show();
    setTimeout(function () {
        saveChangesSuccessModal.hide();
    }, 2000);
});

cancelEditBtn.addEventListener('click', function(){
    discardEditModal.show();
});



    

    
    
    //buttons
    var add_pet_btn = document.getElementById('add_pet_btn');
    var add_pet_btn1 = document.getElementById('add_pet_btn-1');
    var submit_Pet = document.getElementById('submit_Pet');
    var add_pet_split_btn = document.getElementById('add_pet_split_btn');
    var clearFormButton = document.getElementById('clear_form');
    var add_medical_history = document.getElementById('add_medical_history');
    var add_vaccine_history = document.getElementById('add_vaccine_history');
    var add_surgery_history = document.getElementById('add_surgery_history');
    
    //containers
    var empty_state_container = document.getElementById('empty_state_container');
    var medical_empty_state = document.getElementById('medical_empty_state');
    var immunization_empty_state = document.getElementById('immunization_empty_state');
    var surgery_empty_state = document.getElementById('surgery_empty_state');
    var medical_history_table_container = document.getElementById('medical_history_table_container');
    var immunization_history_table_container = document.getElementById('immunization_history_table_container');
    var surgery_history_table_container = document.getElementById('surgery_history_table_container');
    var pet_records = document.getElementById('pet_records');
    
    //modals
    var add_pet_success = new bootstrap.Modal(document.getElementById('add_pet_success'));
    var add_pet_record_modal = new bootstrap.Modal(document.getElementById('add_pet_record_modal-1'));
    var add_medical_history_modal = new bootstrap.Modal(document.getElementById('add_medical_history_modal'));
    var add_immunization_history_modal = new bootstrap.Modal(document.getElementById('add_immunization_history_modal'));
    var add_surgery_history_modal = new bootstrap.Modal(document.getElementById('add_surgery_history_modal'));

    
    //show modals
    add_pet_btn.addEventListener('click', function () {
        add_pet_record_modal.show();
      });
    
    add_pet_btn1.addEventListener('click', function () {
        add_pet_record_modal.show();
      });
    
    add_medical_history.addEventListener('click', function () {
        add_medical_history_modal.show();
      });
    
    add_vaccine_history.addEventListener('click', function () {
        add_immunization_history_modal.show();
      });
    
    add_surgery_history.addEventListener('click', function () {
        add_surgery_history_modal.show();
      });
    
    
    //buttons
    var add_diagnosis = document.getElementById('add_diagnosis');
    add_diagnosis.addEventListener('click', function () {
        add_medical_history_modal.show();
    });

    var add_immunization = document.getElementById('add_immunization');
    add_immunization.addEventListener('click', function () {
        add_immunization_history_modal.show();
    });

    var add_surgery = document.getElementById('add_surgery');
    add_surgery.addEventListener('click', function () {
        add_surgery_history_modal.show();
    });


    submit_diagnosis.addEventListener('click', function () {
        var add_medical_histo_success = new bootstrap.Modal(document.getElementById('add_medical_histo_success'));
        add_medical_histo_success.show();
    
        setTimeout(function () {
            add_medical_histo_success.hide();
        }, 2000);
    
        // Call the resetDiagnosisFields function
        resetDiagnosisFields();
        add_medical_history_modal.hide();
        medical_empty_state.style.display = 'none';
        //medical_history_table_container.style.display = 'flex';
    
        var add_diagnosis = document.getElementById('add_diagnosis');
        add_diagnosis.style.display = 'flex';
    });
    
        
    submit_vaccination.addEventListener('click', function(){
        var add_immunization_histo_success = new bootstrap.Modal(document.getElementById('add_immunization_histo_success'));
        add_immunization_histo_success.show()
        setTimeout(function() {
            add_immunization_histo_success.hide();
        }, 2000);
        resetVaccinationFields();
        add_immunization_history_modal.hide();
        immunization_empty_state.style.display = 'none';
        immunization_history_table_container.style.display = 'flex';
        
        var add_immunization = document.getElementById('add_immunization');
        add_immunization.style.display = 'flex';
    
                                        
    })
        
    submit_surgery.addEventListener('click', function(){
        var add_surgery_histo_success = new bootstrap.Modal(document.getElementById('add_surgery_histo_success'));
        add_surgery_histo_success.show()
        setTimeout(function() {
            add_surgery_histo_success.hide();
        }, 2000);
    
        resetSurgeryFields();
        add_surgery_history_modal.hide();
        surgery_empty_state.style.display = 'none';
        surgery_history_table_container.style.display = 'flex';
        
        var add_surgery = document.getElementById('add_surgery');
        add_surgery.style.display = 'flex';
    })



    var medical_empty_state = document.getElementById('medical_empty_state');
    var immunization_empty_state = document.getElementById('immunization_empty_state');
    var surgery_empty_state = document.getElementById('surgery_empty_state');
    
    // Get the tab links
    var informationTabLink = document.querySelector('[href="#tab-1"]');
    var medicalHistoryTabLink = document.querySelector('[href="#tab-2"]');
    var immunizationTabLink = document.querySelector('[href="#tab-3"]');
    var surgeryTabLink = document.querySelector('[href="#tab-4"]');
    
    // Add a click event listener to the Medical History tab link
    informationTabLink.addEventListener('click', function () {

 
        // Hide add_diagnosis
           add_diagnosis.style.display = 'none';
                   // Hide add_immunization
       add_immunization.style.display = 'none';
       add_surgery.style.display = 'none';

   });

   informationTabLink.click();
    
    // Add a click event listener to the Medical History tab link
    medicalHistoryTabLink.addEventListener('click', function () {

         // Check if medical_empty_state is visible
         if (!medical_empty_state || medical_empty_state.style.display !== 'none') {
            // Hide add_diagnosis
            add_diagnosis.style.display = 'none';
                    // Hide add_immunization
        add_immunization.style.display = 'none';
        add_surgery.style.display = 'none';
        } else {
            // Show add_diagnosis
            add_diagnosis.style.display = 'flex';
                    // Hide add_immunization
        add_immunization.style.display = 'none';
        add_surgery.style.display = 'none';
        }
    });
    
    // Add a click event listener to the Immunization tab link
    immunizationTabLink.addEventListener('click', function () {
        // Check if medical_empty_state is visible
        if (!immunization_empty_state || immunization_empty_state.style.display !== 'none') {
            // Hide add_immunization
            add_immunization.style.display = 'none';
                    // Hide add_diagnosis
        add_diagnosis.style.display = 'none';
        add_surgery.style.display = 'none';
        } else {
            // Show add_immunization
            add_immunization.style.display = 'flex';
                    // Hide add_diagnosis
        add_diagnosis.style.display = 'none';
        add_surgery.style.display = 'none';
        }
    });
    
    // Add a click event listener to the Surgery tab link
    surgeryTabLink.addEventListener('click', function () {
          // Check if medical_empty_state is visible
          if (!surgery_empty_state || surgery_empty_state.style.display !== 'none') {
            // Hide add_immunization
            add_surgery.style.display = 'none';
                    // Hide add_diagnosis
        add_diagnosis.style.display = 'none';
        add_immunization.style.display = 'none';
        } else {
            // Show add_immunization
            add_surgery.style.display = 'flex';
                    // Hide add_diagnosis
        add_diagnosis.style.display = 'none';
        add_immunization.style.display = 'none';
        }
    });


      
    // Function to show error message if clicked and left without a value
function handleInputError(input, error) {
    function onBlur() {
        if (input.value.trim() === '') {
            error.style.display = 'flex'; // Show the error message
            input.classList.add('is-invalid');
            input.classList.add('error-border');
        } else if (input.value.trim() === 'none') {
            error.style.display = 'flex'; // Show the error message
            input.classList.add('is-invalid');
            input.classList.add('error-border');
        }else {
            error.style.display = 'none'; // Hide the error message
            input.classList.remove('is-invalid');
            input.classList.remove('error-border');
        }
    }

    function onFocus() {
        error.style.display = 'none'; // Hide the error message
        guide.style.display = 'flex'; // Show the guide message
        input.classList.remove('is-invalid');
        input.classList.remove('error-border');
    }


    // Add event listeners to inputs
    input.addEventListener('blur', onBlur);
    input.addEventListener('focus', onFocus);
}


var pet_nameInput = document.getElementById('pet_name-1');
var pet_TypeInput = document.getElementById('pet_type-1');
var breedInput = document.getElementById('breed-1');
var pet_GenderInput = document.getElementById('gender-1');
var pet_birthdateInput = document.getElementById('pet_birthdate-1');
var pet_ageInput = document.getElementById('age-1');
var pet_weightInput = document.getElementById('weight-1');
var pet_sterilizationStatusInput = document.getElementById('sterilization_status-1');
    


var errorPet = document.getElementById('error-pet_name');
var errorPetGender = document.getElementById('error-gender');
var errorPetType = document.getElementById('error-pet_type');
var errorPetBreed = document.getElementById('error-breed');
var errorPetBday = document.getElementById('error-pet_birthdate');
var errorPetWeight = document.getElementById('error-weight');
var errorPetStatus = document.getElementById('error-sterilization_status');
    
  
handleInputError(pet_nameInput, errorPet);
handleInputError(pet_GenderInput, errorPetGender);
handleInputError(pet_TypeInput, errorPetType);
handleInputError(breedInput, errorPetBreed)
handleInputError(pet_birthdateInput, errorPetBday);
handleInputError(pet_weightInput, errorPetWeight);
handleInputError(pet_sterilizationStatusInput, errorPetStatus)


 


   
submit_Pet.addEventListener('click', function() {
console.log('Button clicked!');
    
    resetPetInputFields();
        add_pet_record_modal.hide();
        add_pet_success.show();
        // Hide the modal after 2000 milliseconds (2 seconds)
        setTimeout(function () {
            add_pet_success.hide();
        }, 2000);     
    
    var name1 = pet_nameInput.value;
    var breed1 = breedInput.value;
    var sex1 = pet_GenderInput.value;
    var age1 = pet_ageInput.value;
    var weight1 = pet_weightInput.value;
    var sterilizationStatus1 = pet_sterilizationStatusInput.value;

    // Console.log to check if values are correctly retrieved
    console.log('Pet Name:', name1);
    console.log('Pet Breed:', breed1);
    console.log('Pet Sex:', sex1);
    console.log('Pet Age:', age1);
    console.log('Pet Weight:', weight1);
    console.log('Pet Sterilization Status:', sterilizationStatus1);



    // Log a message to indicate that the pet card is generated
    console.log('Pet Card Generated!');
});


    
function capitalizeFirstLetterOfWords(inputElement) {
    inputElement.addEventListener('input', function () {
        let inputValue = this.value;

        // Capitalize the first letter of each word
        let formattedValue = inputValue.replace(/\b\w/g, match => match.toUpperCase());

        // Update the input value
        this.value = formattedValue;
    });
}
    
capitalizeFirstLetterOfWords(pet_nameInput);

    
//for breed
//for breed
function setupBreedOptions(petTypeId, breedId, breedOptions) {
    // Get references to the pet type and breed select elements
    var petTypeSelect = document.getElementById(petTypeId);
    var breedSelect = document.getElementById(breedId);

    // Event listener for the pet type select change event
    petTypeSelect.addEventListener('change', function () {
        // Enable the breed select and clear its options
        breedSelect.disabled = false;
        breedSelect.innerHTML = '<option value="none" selected>Select a Breed</option>';

        // Get the selected pet type
        const selectedPetType = petTypeSelect.value;

        // Add breed options based on the selected pet type
        if (breedOptions.hasOwnProperty(selectedPetType)) {
            addBreedOptions(breedOptions[selectedPetType]);
        }
    });

    // Function to add breed options to the breed select element
    function addBreedOptions(breeds) {
        breeds.forEach(function (breed) {
            var option = document.createElement('option');
            option.value = breed;
            option.text = breed;
            breedSelect.appendChild(option);
        });
    }
}

// Example usage for the first set of IDs and breed options
setupBreedOptions('pet_type-1', 'breed-1', {
    'Dog': ["Affenpinscher","Afghan Hound","Airedale Terrier","Akita","Alaskan Malamute","American Bulldog","American Eskimo Dog","American Foxhound","American Pit Bull Terrier","American Staffordshire Terrier","Anatolian Shepherd Dog","Australian Cattle Dog","Australian Shepherd","Australian Terrier","Basenji","Basset Hound","Beagle","Bearded Collie","Bedlington Terrier","Belgian Malinois","Belgian Sheepdog","Belgian Tervuren","Bernese Mountain Dog","Bichon Frise","Black and Tan Coonhound","Bloodhound","Border Collie","Border Terrier","Borzoi","Boston Terrier","Bouvier des Flandres","Boxer","Boykin Spaniel","Briard","Brittany","Brussels Griffon","Bull Terrier","Bulldog","Bullmastiff","Cairn Terrier","Canaan Dog","Cane Corso","Cardigan Welsh Corgi","Cavalier King Charles Spaniel","Chesapeake Bay Retriever","Chihuahua","Chinese Crested","Chinese Shar-Pei","Chow Chow","Clumber Spaniel","Cockapoo","Collie","Coonhound","Corgi","Coton de Tulear","Curly-Coated Retriever","Dachshund","Dalmatian","Dandie Dinmont Terrier","Doberman Pinscher","Dogue de Bordeaux","Dutch Shepherd","English Bulldog","English Cocker Spaniel","English Foxhound","English Setter","English Springer Spaniel","English Toy Spaniel","Entlebucher Mountain Dog","Eskimo Dog","Finnish Lapphund","Finnish Spitz","Flat-Coated Retriever","French Bulldog","German Pinscher","German Shepherd Dog","German Shorthaired Pointer","German Wirehaired Pointer","Giant Schnauzer","Glen of Imaal Terrier","Goldador","Golden Retriever","Goldendoodle","Gordon Setter","Great Dane","Great Pyrenees","Greater Swiss Mountain Dog","Greyhound","Harrier","Havanese","Hound","Hovawart","Hungarian Puli","Hungarian Shepherd","Hungarian Vizsla","Husky","Ibizan Hound","Icelandic Sheepdog","Irish Setter","Irish Terrier","Irish Water Spaniel","Irish Wolfhound","Italian Greyhound","Jack Russell Terrier","Japanese Chin","Japanese Spitz","Japanese Terrier","Keeshond","Kerry Blue Terrier","King Charles Spaniel","Klee Kai","Kuvasz","Labradoodle","Labrador Retriever","Lakeland Terrier","Lancashire Heeler","Leonberger","Lhasa Apso","Lowchen","Maltese","Manchester Terrier","Maremma Sheepdog","Mastiff","Miniature Bull Terrier","Miniature Pinscher","Miniature Schnauzer","Mixed Breed","Mountain Cur","Mountain Dog","Neapolitan Mastiff","Newfoundland","Norfolk Terrier","Norwegian Buhund","Norwegian Elkhound","Norwegian Lundehund","Norwich Terrier","Nova Scotia Duck Tolling Retriever","Old English Sheepdog","Otterhound","Papillon","Pekingese","Pembroke Welsh Corgi","Pharaoh Hound","Pinscher","Pit Bull Terrier","Plott Hound","Podenco Canario","Pointer","Polish Lowland Sheepdog","Pomeranian","Poodle","Portuguese Water Dog","Presacanario","Pug","Puggle","Puli","Pumi","Pyrenees","Redbone Coonhound","Retriever","Rhodesian Ridgeback","Rottweiler","Saint Bernard","Saluki","Samoyed","Schipperke","Scottish Deerhound","Scottish Terrier","Sealyham Terrier","Setter","Shar-Pei","Sheltie","Shiba Inu","Shih Tzu","Siberian Husky","Silky Terrier","Skye Terrier","Sloughi","Small Munsterlander Pointer","Spaniel","Spanish Water Dog","Spitz","Springer Spaniel","Staffordshire Bull Terrier","Standard Schnauzer","Sussex Spaniel","Swedish Vallhund","Terrier","Thai Ridgeback","Tibetan Mastiff","Tibetan Spaniel","Tibetan Terrier","Tosa Inu","Toy Fox Terrier","Treeing Walker Coonhound","Vizsla","Weimaraner","Welsh Corgi","Welsh Terrier","West Highland White Terrier","Whippet","White Shepherd","Wirehaired Pointing Griffon","Xoloitzcuintli","Yorkshire Terrier"], 'Cat': ["Abyssinian","American Bobtail","American Curl","American Shorthair","American Wirehair","Balinese","Bengal","Birman","Bombay","British Shorthair","Burmese","Chartreux","Chausie","Cornish Rex","Cymric","Devon Rex","Egyptian Mau","European Burmese","Exotic Shorthair","Havana Brown","Himalayan","Japanese Bobtail","Javanese","Korat","LaPerm","Maine Coon","Manx","Munchkin","Nebelung","Norwegian Forest","Ocicat","Oriental","Persian","Pixie-Bob","Ragamuffin","Ragdoll","Russian Blue","Savannah","Scottish Fold","Selkirk Rex","Siamese","Siberian","Singapura","Snowshoe","Somali","Sphynx","Tonkinese","Turkish Angora","Turkish Van"]
});


//age of pet  
function setupAgeCalculation(birthdateId, ageId, petTypeId) {
const today = new Date();
const minDate = new Date(today.getFullYear() - 100, today.getMonth(), today.getDate()).toISOString().split('T')[0];

const dateInput = document.getElementById(birthdateId);
dateInput.setAttribute('max', today.toISOString().split('T')[0]);  // Set max date to today
dateInput.setAttribute('min', minDate);

dateInput.addEventListener('keydown', function (e) {
    e.preventDefault();
});

var birthdateInput = document.getElementById(birthdateId);
var ageInput = document.getElementById(ageId);
var petTypeSelect = document.getElementById(petTypeId);

birthdateInput.addEventListener('change', function () {
    var selectedBirthdate = new Date(birthdateInput.value);
    var petType = petTypeSelect.value;

    if (petType === 'none' || !selectedBirthdate) {
        ageInput.value = '';
        ageInput.placeholder = 'Please select pet type, breed, and enter the birthdate first.';
    } else {
        var age = calculateAge(selectedBirthdate, petType);
        ageInput.value = age;
        ageInput.placeholder = ''; // Clear the placeholder
        document.getElementById('error-' + ageInput.id).innerText = ''; // Clear the error message
    }
});

ageInput.disabled = true; // Disable the input initially

function calculateAge(birthdate, petType) {
    var today = new Date();
    var age;

    if (petType === 'Dog') {
        age = calculateDogAge(birthdate, today);
    } else if (petType === 'Cat') {
        age = calculateCatAge(birthdate, today);
    } else {
        age = calculateDefaultAge(birthdate, today);
    }

    return age;
}

function calculateDogAge(birthdate, today) {
    var ageInMilliseconds = today - birthdate;
    var ageInDogYears;

    if (ageInMilliseconds < 2 * 365 * 24 * 60 * 60 * 1000) {
        ageInDogYears = ageInMilliseconds / (365 * 24 * 60 * 60 * 1000) * 10.5;
    } else {
        ageInDogYears = 2 * 10.5 + (ageInMilliseconds - 2 * 365 * 24 * 60 * 60 * 1000) / (365 * 24 * 60 * 60 * 1000) * 4;
    }

    return Math.floor(ageInDogYears);
}

function calculateCatAge(birthdate, today) {
    var ageInMilliseconds = today - birthdate;
    var ageInCatYears;

    if (ageInMilliseconds < 2 * 365 * 24 * 60 * 60 * 1000) {
        ageInCatYears = ageInMilliseconds / (365 * 24 * 60 * 60 * 1000) * 12;
    } else {
        ageInCatYears = 2 * 12 + (ageInMilliseconds - 2 * 365 * 24 * 60 * 60 * 1000) / (365 * 24 * 60 * 60 * 1000) * 4;
    }

    return Math.floor(ageInCatYears);
}

function calculateDefaultAge(birthdate, today) {
    var ageInMilliseconds = today - birthdate;
    return Math.floor(ageInMilliseconds / (365 * 24 * 60 * 60 * 1000));
}
}
// Example usage for the first set of IDs
setupAgeCalculation('pet_birthdate-1', 'age-1', 'pet_type-1');     
    

function weightInputLimit(inputElement) {
    inputElement.addEventListener('input', function () {
        if (inputElement.value.length > 10) {
            inputElement.value = inputElement.value.slice(0, 10);
        }
    });
}
    
weightInputLimit(pet_weightInput);

    
function setupFormValidation(inputIds, buttonId, clearButtonId, close_client_modalId) {
    var inputs = inputIds.map(id => document.getElementById(id));
    var submitButton = document.getElementById(buttonId);
    var clearButton = document.getElementById(clearButtonId);
    var closeClientBtn = document.getElementById(close_client_modalId);

    function areAllInputsFilled() {
        return inputs.every(input => {
            if (input.tagName === 'SELECT') {
                return input.options[input.selectedIndex].value.trim() !== '';
            } else {
                return input.value.trim() !== '';
            }
        });
    }

    submitButton.disabled = true;

    inputs.forEach(input => input.addEventListener('input', enableSubmitButton));

    function enableSubmitButton() {
        submitButton.disabled = !areAllInputsFilled();
    }

    submitButton.addEventListener('click', function () {
        console.log("Submit button clicked!");
        // Your logic for handling the form submission

        inputs.forEach(input => {
            if (input.tagName === 'SELECT') {
                input.selectedIndex = 0;
            } else {
                input.value = '';
            }
        });

        submitButton.disabled = true;
    });

    clearButton.addEventListener('click', function () {
        console.log("Clear button clicked!");
        inputs.forEach(input => {
            if (input.tagName === 'SELECT') {
                input.selectedIndex = 0;
            } else {
                input.value = '';
            }
        });

        // After clearing, also disable the submit button
        submitButton.disabled = true;
    });

    // Disable or enable the submit button based on the initial state of the form
    console.log("Initial form state:", areAllInputsFilled());
    submitButton.disabled = !areAllInputsFilled();

    closeClientBtn.addEventListener('click', function () {
        console.log("Close button clicked!");
        inputs.forEach(input => {
            if (input.tagName === 'SELECT') {
                input.selectedIndex = 0;
            } else {
                input.value = '';
            }
        });

        submitButton.disabled = true;
    });
}

// Example usage for the first set of inputs, submit button, and clear button
setupFormValidation(
    ['name','pet_name-1', 'gender-1', 'pet_type-1', 'breed-1', 'pet_birthdate-1', 'age-1', 'weight-1', 'sterilization_status-1'],
    'submit_Pet',
    'clear_form', 
    'close_pet_modal'
);

setupFormValidation(
    ['diagnosis', 'diagnosis_date', 'treatment_plan', 'medication', 'diagnosis_description'],
    'submit_diagnosis',
    'clear_diagnosis', 
    'close_diagnosis'
);

setupFormValidation(
    ['vaccination', 'vaccination_date', 'vaccination_description', 'next_schedule', 'status'],
    'submit_vaccination',
    'clear_vaccination', 
    'close_vaccination'
);

setupFormValidation(
    ['surgery_type', 'surgery_date', 'severity', 'med_id', 'notes'],
    'submit_surgery',
    'clear_surgery', 
    'close_surgery'
);



function resetDiagnosisFields() {
    var diagnosis = document.getElementById('diagnosis');
    var diagnosis_date = document.getElementById('diagnosis_date');
    var treatment_plan = document.getElementById('treatment_plan');
    var medication = document.getElementById('medication');
    var diagnosis_description = document.getElementById('diagnosis_description');
    
    diagnosis.value = '';
    diagnosis_date.value = '';
    treatment_plan.value = ''; 
    medication.value = '';      
    diagnosis_description.value = '';

    
}
    
function resetVaccinationFields() {
    var vaccination = document.getElementById('vaccination');
    var vaccination_date = document.getElementById('vaccination_date');
    var vaccination_description = document.getElementById('vaccination_description');
    var next_schedule = document.getElementById('next_schedule');
    var status = document.getElementById('status');


    vaccination.value = '';
    vaccination_date.value = '';
    vaccination_description.value = ''; 
    next_schedule.value = '';     
    status.value = '';
}   
    
 //reset surgery fields
function resetSurgeryFields() {
    var surgery = document.getElementById('surgery_type');
    var surgery_date = document.getElementById('surgery_date');
    var severity = document.getElementById('severity');
    var medication = document.getElementById('med_id');
    var notes = document.getElementById('notes');
    
    surgery.value = '';
    surgery_date.value = '';
    severity.value = '';
    medication.value = '';
    notes.value = '';
}


// Attach the resetForm function to both clear form buttons
clearFormButton.addEventListener('click', function () {
    resetPetInputFields();
});

function resetPetInputFields() {
    var ownerInput = document.getElementById('name');
    var pet_nameInput = document.getElementById('pet_name-1');
    var pet_TypeInput = document.getElementById('pet_type-1');
    var breedInput = document.getElementById('breed-1');
    var pet_GenderInput = document.getElementById('gender-1');
    var pet_birthdateInput = document.getElementById('pet_birthdate-1');
    var pet_ageInput = document.getElementById('age-1');
    var pet_weightInput = document.getElementById('weight-1');
    var pet_sterilizationStatusInput = document.getElementById('sterilization_status-1');

    ownerInput.value = '';
    pet_nameInput.value = '';
    pet_TypeInput.value = '';
    breedInput.innerHTML = '<option value="" selected>Select a pet type first.</option>';
    breedInput.disabled = true;
    pet_GenderInput.value = '';
    pet_birthdateInput.value = '';
    pet_ageInput.value = '';
    pet_weightInput.value = '';
    pet_sterilizationStatusInput.value = '';

}


var view_pet_back_btn = document.getElementById('view_pet_back_btn');   
   
view_pet_back_btn.addEventListener('click', function () {
        var view_pet_container = document.getElementById('view_pet_container');
        var client_container = document.getElementById('client_container');
        view_pet_container.style.display = 'none';
        client_container.style.display = 'flex';
        
 
    });   
    
// EDIT INFO PET BACK BUTTON
var editPetBackBtn = document.getElementById('edit_pet_back_btn');
var editPetContainer = document.getElementById('edit_pet_container');
var viewPetContainer = document.getElementById('view_pet_container');

// Add click event listener to the edit_pet_back_btn
editPetBackBtn.addEventListener('click', function () {
    // Hide the edit_pet_container
    editPetContainer.style.display = 'none';
    
    // Show the view_pet_container
    viewPetContainer.style.display = 'flex';
});
    
var edit_pet_btn = document.getElementById('edit_pet_btn');

edit_pet_btn.addEventListener('click', function(){
        // Hide the edit_pet_container
    editPetContainer.style.display = 'flex';
    
    // Show the view_pet_container
    viewPetContainer.style.display = 'none';
})


var petBreedInput = document.getElementById('pet_breed');
var petBreedSpecifyContainer = document.getElementById('pet_breed_specify');

// Attach the function to the input change event
petBreedInput.addEventListener('change', function() {
    // Check if the value is "other"
    if (petBreedInput.value.toLowerCase() === 'other') {
        // If yes, display the specified container
        petBreedSpecifyContainer.style.display = 'flex';
        petBreedInput.disabled = true;
    } else {
        // If not, hide the specified container
        petBreedSpecifyContainer.style.display = 'none';
    }
});
    


function setupBreedOptions(petTypeId, breedId, breedOptions) {
    // Get references to the pet type and breed select elements
    var petTypeSelect = document.getElementById(petTypeId);
    var breedSelect = document.getElementById(breedId);

    // Event listener for the pet type select change event
    petTypeSelect.addEventListener('change', function () {
        // Enable the breed select and clear its options
        breedSelect.disabled = false;
        breedSelect.innerHTML = '<option value="none" selected>Select a Breed</option>';

        // Get the selected pet type
        const selectedPetType = petTypeSelect.value;

        // Add breed options based on the selected pet type
        if (breedOptions.hasOwnProperty(selectedPetType)) {
            addBreedOptions(breedOptions[selectedPetType]);
        }
    });

    // Function to add breed options to the breed select element
    function addBreedOptions(breeds) {
        breeds.forEach(function (breed) {
            var option = document.createElement('option');
            option.value = breed;
            option.text = breed;
            breedSelect.appendChild(option);
        });
    }
}

// Example usage for the first set of IDs and breed options
setupBreedOptions('pet_type-1', 'breed-1', {
    'Dog': ["Affenpinscher","Afghan Hound","Airedale Terrier","Akita","Alaskan Malamute","American Bulldog","American Eskimo Dog","American Foxhound","American Pit Bull Terrier","American Staffordshire Terrier","Anatolian Shepherd Dog","Australian Cattle Dog","Australian Shepherd","Australian Terrier","Basenji","Basset Hound","Beagle","Bearded Collie","Bedlington Terrier","Belgian Malinois","Belgian Sheepdog","Belgian Tervuren","Bernese Mountain Dog","Bichon Frise","Black and Tan Coonhound","Bloodhound","Border Collie","Border Terrier","Borzoi","Boston Terrier","Bouvier des Flandres","Boxer","Boykin Spaniel","Briard","Brittany","Brussels Griffon","Bull Terrier","Bulldog","Bullmastiff","Cairn Terrier","Canaan Dog","Cane Corso","Cardigan Welsh Corgi","Cavalier King Charles Spaniel","Chesapeake Bay Retriever","Chihuahua","Chinese Crested","Chinese Shar-Pei","Chow Chow","Clumber Spaniel","Cockapoo","Collie","Coonhound","Corgi","Coton de Tulear","Curly-Coated Retriever","Dachshund","Dalmatian","Dandie Dinmont Terrier","Doberman Pinscher","Dogue de Bordeaux","Dutch Shepherd","English Bulldog","English Cocker Spaniel","English Foxhound","English Setter","English Springer Spaniel","English Toy Spaniel","Entlebucher Mountain Dog","Eskimo Dog","Finnish Lapphund","Finnish Spitz","Flat-Coated Retriever","French Bulldog","German Pinscher","German Shepherd Dog","German Shorthaired Pointer","German Wirehaired Pointer","Giant Schnauzer","Glen of Imaal Terrier","Goldador","Golden Retriever","Goldendoodle","Gordon Setter","Great Dane","Great Pyrenees","Greater Swiss Mountain Dog","Greyhound","Harrier","Havanese","Hound","Hovawart","Hungarian Puli","Hungarian Shepherd","Hungarian Vizsla","Husky","Ibizan Hound","Icelandic Sheepdog","Irish Setter","Irish Terrier","Irish Water Spaniel","Irish Wolfhound","Italian Greyhound","Jack Russell Terrier","Japanese Chin","Japanese Spitz","Japanese Terrier","Keeshond","Kerry Blue Terrier","King Charles Spaniel","Klee Kai","Kuvasz","Labradoodle","Labrador Retriever","Lakeland Terrier","Lancashire Heeler","Leonberger","Lhasa Apso","Lowchen","Maltese","Manchester Terrier","Maremma Sheepdog","Mastiff","Miniature Bull Terrier","Miniature Pinscher","Miniature Schnauzer","Mixed Breed","Mountain Cur","Mountain Dog","Neapolitan Mastiff","Newfoundland","Norfolk Terrier","Norwegian Buhund","Norwegian Elkhound","Norwegian Lundehund","Norwich Terrier","Nova Scotia Duck Tolling Retriever","Old English Sheepdog","Otterhound","Papillon","Pekingese","Pembroke Welsh Corgi","Pharaoh Hound","Pinscher","Pit Bull Terrier","Plott Hound","Podenco Canario","Pointer","Polish Lowland Sheepdog","Pomeranian","Poodle","Portuguese Water Dog","Presacanario","Pug","Puggle","Puli","Pumi","Pyrenees","Redbone Coonhound","Retriever","Rhodesian Ridgeback","Rottweiler","Saint Bernard","Saluki","Samoyed","Schipperke","Scottish Deerhound","Scottish Terrier","Sealyham Terrier","Setter","Shar-Pei","Sheltie","Shiba Inu","Shih Tzu","Siberian Husky","Silky Terrier","Skye Terrier","Sloughi","Small Munsterlander Pointer","Spaniel","Spanish Water Dog","Spitz","Springer Spaniel","Staffordshire Bull Terrier","Standard Schnauzer","Sussex Spaniel","Swedish Vallhund","Terrier","Thai Ridgeback","Tibetan Mastiff","Tibetan Spaniel","Tibetan Terrier","Tosa Inu","Toy Fox Terrier","Treeing Walker Coonhound","Vizsla","Weimaraner","Welsh Corgi","Welsh Terrier","West Highland White Terrier","Whippet","White Shepherd","Wirehaired Pointing Griffon","Xoloitzcuintli","Yorkshire Terrier"],
    'Cat': ["Abyssinian","American Bobtail","American Curl","American Shorthair","American Wirehair","Balinese","Bengal","Birman","Bombay","British Shorthair","Burmese","Chartreux","Chausie","Cornish Rex","Cymric","Devon Rex","Egyptian Mau","European Burmese","Exotic Shorthair","Havana Brown","Himalayan","Japanese Bobtail","Javanese","Korat","LaPerm","Maine Coon","Manx","Munchkin","Nebelung","Norwegian Forest","Ocicat","Oriental","Persian","Pixie-Bob","Ragamuffin","Ragdoll","Russian Blue","Savannah","Scottish Fold","Selkirk Rex","Siamese","Siberian","Singapura","Snowshoe","Somali","Sphynx","Tonkinese","Turkish Angora","Turkish Van"]
});




// Get all elements with the class 'View_pet-action'
var viewPetActions = document.querySelectorAll('.View_pet-action');


// Define the click event listener function
function onViewPetActionClick() {
    var view_pet_container = document.getElementById('view_pet_container');
    var client_container = document.getElementById('client_container');
    view_pet_container.style.display = 'flex';
    client_container.style.display = 'none';
}

// Attach the click event listener to all elements with the class 'View_pet-action'
viewPetActions.forEach(function (element) {
    element.addEventListener('click', onViewPetActionClick);
});

var editPetAction = document.querySelectorAll('.Edit_pet-action');
    
function onEditPetActionClick() {
        var edit_pet_container = document.getElementById('edit_pet_container');
        var client_container = document.getElementById('client_container');
        edit_pet_container.style.display = 'flex';
        client_container.style.display = 'none';
    };

editPetAction.forEach(function (element) {
        element.addEventListener('click', onEditPetActionClick);
});

var archivePetActions = document.querySelectorAll('.archive_pet-action');
    
archivePetActions.forEach(function (element) {
    element.addEventListener('click', function(){
        var archive_pet_modal = new bootstrap.Modal(document.getElementById('archive_pet_modal'));
        archive_pet_modal.show();
    });
});  

var view_pet_back_btn = document.getElementById('view_pet_back_btn');   
   
view_pet_back_btn.addEventListener('click', function () {
        var view_pet_container = document.getElementById('view_pet_container');
        var client_container = document.getElementById('client_container');
        view_pet_container.style.display = 'none';
        client_container.style.display = 'flex';
        
 
    }); 

var editPetBackBtn = document.getElementById('edit_pet_back_btn');
var editPetContainer = document.getElementById('edit_pet_container');
var viewPetContainer = document.getElementById('view_pet_container');

// Add click event listener to the edit_pet_back_btn
editPetBackBtn.addEventListener('click', function () {
    var client_container = document.getElementById('client_container');
    client_container.style.display = 'flex';
    editPetContainer.style.display = 'none';
});
    
var edit_pet_btn = document.getElementById('edit_pet_btn');

edit_pet_btn.addEventListener('click', function(){
        // Hide the edit_pet_container
    editPetContainer.style.display = 'flex';
    
    // Show the view_pet_container
    viewPetContainer.style.display = 'none';
})

function setupDateInputRestrictions() {
    // Get the current date
    var currentDate = new Date();
    var currentDateString = currentDate.toISOString().split('T')[0]; // Format: YYYY-MM-DD

    // Get the date input elements by their IDs
    var dateInputs = [
        document.getElementById('diagnosis_date'),
        document.getElementById('vaccination_date'),
        document.getElementById('surgery_date')
    ];

    // Add event listeners to each date input
    dateInputs.forEach(function (dateInput) {
        // Set the maximum attribute to the current date
        dateInput.setAttribute('max', currentDateString);

        // Add an event listener to disable keyboard events
        dateInput.addEventListener('keydown', function (event) {
            event.preventDefault();
        });

        // Add an event listener to validate on input change
        dateInput.addEventListener('input', function () {
            // Parse the input date value
            var selectedDate = new Date(dateInput.value);

            // Compare the selected date with the current date
            if (selectedDate > currentDate) {
                alert('Please select a date from present to past.');
                dateInput.value = currentDateString; // Reset to the current date
            }
        });
    });
}

// Call the function to set up date input restrictions
setupDateInputRestrictions();

function setupFutureDateInputRestriction() {
    // Get the current date
    var currentDate = new Date();
    var currentDateString = currentDate.toISOString().split('T')[0]; // Format: YYYY-MM-DD

    // Get the date input elements by their IDs
    var dateInputs = [
        document.getElementById('next_schedule')
    ];

    // Add event listeners to each date input
    dateInputs.forEach(function (dateInput) {
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
    });
}

setupFutureDateInputRestriction();


$(document).ready(function(){
    // Initially hide tab_header_right
    $("#tab_header_right").hide();

    // Show/hide tab_header_right based on active tab
    $('.nav-tabs a').on('shown.bs.tab', function (e) {
    if ($(e.target).attr('href') === "#tab-1") {
        $("#tab_header_right").hide();
    } else {
        $("#tab_header_right").show();
    }
    });
});

