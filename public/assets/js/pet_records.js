document.addEventListener('DOMContentLoaded', function () {


    //buttons
    const add_pet_btn1 = document.getElementById('add_pet_btn');
    const add_medical_history = document.getElementById('add_medical_history');
    const add_vaccine_history = document.getElementById('add_vaccine_history');
    const add_surgery_history = document.getElementById('add_surgery_history');
    const submit_Pet1 = document.getElementById('submit_Pet-1');

    //containers
    const medical_empty_state = document.getElementById('medical_empty_state');
    const immunization_empty_state = document.getElementById('immunization_empty_state');
    const surgery_empty_state = document.getElementById('surgery_empty_state');
    const medical_history_table_container = document.getElementById('medical_history_table_container');
    const immunization_history_table_container = document.getElementById('immunization_history_table_container');
    const surgery_history_table_container = document.getElementById('surgery_history_table_container');


    
 
    
    //modals
    const add_pet_success = new bootstrap.Modal(document.getElementById('add_pet_success'));
    const add_pet_record_modal1 = new bootstrap.Modal(document.getElementById('add_pet_record_modal-1'));
    const add_medical_history_modal = new bootstrap.Modal(document.getElementById('add_medical_history_modal'));
    const add_immunization_history_modal = new bootstrap.Modal(document.getElementById('add_immunization_history_modal'));
    const add_surgery_history_modal = new bootstrap.Modal(document.getElementById('add_surgery_history_modal'));

    submit_Pet1.addEventListener('click', function() {
        console.log('Button clicked!');
            
                add_pet_record_modal1.hide();
                add_pet_success.show();
                // Hide the modal after 2000 milliseconds (2 seconds)
                setTimeout(function () {
                    add_pet_success.hide();
                }, 2000); 
    
        }); 
    
    
    add_pet_btn1.addEventListener('click', function () {
        add_pet_record_modal1.show();
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

    

    

    //history rec modals start
    const addDiagnosisActions = document.querySelectorAll('.add_diagnosis-action');
    const addVaccinesActions = document.querySelectorAll('.add_immunization_action');
    const addSurgeryActions = document.querySelectorAll('.add_surgery_action');

    

    addDiagnosisActions.forEach(function(button) {
        button.addEventListener('click', function () {
            add_medical_history_modal.show();
        });
    });

    addVaccinesActions.forEach(function(button) {
        button.addEventListener('click', function () {
            add_immunization_history_modal.show();
        });
    });

    addSurgeryActions.forEach(function(button) {
        button.addEventListener('click', function () {
            add_surgery_history_modal.show();
        });
    });
    //history rec modals end

// Get all elements with the class 'View_pet-action'
const viewPetActions = document.querySelectorAll('.View_pet-action');


// Define the click event listener function
function onViewPetActionClick() {
    const view_pet_container = document.getElementById('view_pet_container');
    const client_container = document.getElementById('client_container');
    view_pet_container.style.display = 'flex';
    client_container.style.display = 'none';
}

// Attach the click event listener to all elements with the class 'View_pet-action'
viewPetActions.forEach(function (element) {
    element.addEventListener('click', onViewPetActionClick);
});



const editPetAction = document.querySelectorAll('.Edit_pet-action');
    
function onEditPetActionClick() {
        const edit_pet_container = document.getElementById('edit_pet_container');
        const client_container = document.getElementById('client_container');
        edit_pet_container.style.display = 'flex';
        client_container.style.display = 'none';
    };
// Attach the click event listener to all elements with the class 'Edit_pet-action'
editPetAction.forEach(function (element) {
        element.addEventListener('click', onEditPetActionClick);
});

const archivePetActions = document.querySelectorAll('.archive_pet-action');
    
archivePetActions.forEach(function (element) {
    element.addEventListener('click', function(){
        const archive_pet_modal = new bootstrap.Modal(document.getElementById('archive_pet_modal'));
        archive_pet_modal.show();
    });
});  

const view_pet_back_btn = document.getElementById('view_pet_back_btn');   
   
view_pet_back_btn.addEventListener('click', function () {
        const view_pet_container = document.getElementById('view_pet_container');
        const client_container = document.getElementById('client_container');
        view_pet_container.style.display = 'none';
        client_container.style.display = 'flex';
        
 
    }); 

const editPetBackBtn = document.getElementById('edit_pet_back_btn');
const editPetContainer = document.getElementById('edit_pet_container');
const viewPetContainer = document.getElementById('view_pet_container');

// Add click event listener to the edit_pet_back_btn
editPetBackBtn.addEventListener('click', function () {
    const client_container = document.getElementById('client_container');
    client_container.style.display = 'flex';
    editPetContainer.style.display = 'none';
});
    
const edit_pet_btn = document.getElementById('edit_pet_btn');



edit_pet_btn.addEventListener('click', function(){
        // Hide the edit_pet_container
    editPetContainer.style.display = 'flex';
    
    // Show the view_pet_container
    viewPetContainer.style.display = 'none';
})


    const cancelEditBtn = document.getElementById('cancel_edit');
    const discardEditModal = new bootstrap.Modal(document.getElementById('edit_discard'));

    // Attach the function to the button click event
    // editSaveChangesButton.addEventListener('click', function(){
    //     saveChangesSuccessModal.show();
    //     setTimeout(function () {
    //         saveChangesSuccessModal.hide();
    //     }, 2000);
    // });

    cancelEditBtn.addEventListener('click', function(){
        discardEditModal.show();
    });
    
    
    
    
    //buttons
    const add_diagnosis = document.getElementById('add_diagnosis');
    add_diagnosis.addEventListener('click', function () {
        add_medical_history_modal.show();
    });

    const add_immunization = document.getElementById('add_immunization');
    add_immunization.addEventListener('click', function () {
        add_immunization_history_modal.show();
    });

    const add_surgery = document.getElementById('add_surgery');
    add_surgery.addEventListener('click', function () {
        add_surgery_history_modal.show();
    });


    
    // Get the tab links
    const informationTabLink = document.querySelector('[href="#tab-1"]');
    const medicalHistoryTabLink = document.querySelector('[href="#tab-2"]');
    const immunizationTabLink = document.querySelector('[href="#tab-3"]');
    const surgeryTabLink = document.querySelector('[href="#tab-4"]');
    
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


submit_diagnosis.addEventListener('click', function () {
    const add_medical_histo_success = new bootstrap.Modal(document.getElementById('add_medical_histo_success'));
    add_medical_histo_success.show()
    setTimeout(function() {
        add_medical_histo_success.hide();
    }, 2000);
    // Call the resetDiagnosisFields function
    resetDiagnosisFields();
    add_medical_history_modal.hide();
    medical_empty_state.style.display = 'none';
    medical_history_table_container.style.display = 'flex';

    const add_diagnosis = document.getElementById('add_diagnosis');
    add_diagnosis.style.display = 'flex';
});


    
submit_vaccination.addEventListener('click', function(){
    const add_immunization_histo_success = new bootstrap.Modal(document.getElementById('add_immunization_histo_success'));
    add_immunization_histo_success.show()
    setTimeout(function() {
        add_immunization_histo_success.hide();
    }, 2000);
    resetVaccinationFields();
    add_immunization_history_modal.hide();
    immunization_empty_state.style.display = 'none';
    immunization_history_table_container.style.display = 'flex';
    
    const add_immunization = document.getElementById('add_immunization');
    add_immunization.style.display = 'flex';
                                    
});
    
var edit_save_changes = document.getElementById("edit_save_changes");


edit_save_changes.addEventListener('click', function(){
    const save_changes_success = new bootstrap.Modal(document.getElementById('save_changes_success'));
    save_changes_success.show()
    setTimeout(function() {
        $('#save_changes_success').hide();
    }, 2000);
});

submit_surgery.addEventListener('click', function(){
    const add_surgery_histo_success = new bootstrap.Modal(document.getElementById('add_surgery_histo_success'));
    add_surgery_histo_success.show()
    setTimeout(function() {
        $('#add_surgery_histo_success').hide();
    }, 2000);

    resetSurgeryFields();
    add_surgery_history_modal.hide();
    surgery_empty_state.style.display = 'none';
    surgery_history_table_container.style.display = 'flex';
    
    const add_surgery = document.getElementById('add_surgery');
    add_surgery.style.display = 'flex';
});
    
    

    



const petBreedInput = document.getElementById('pet_breed1');
const petBreedSpecifyContainer = document.getElementById('pet_breed_specify');

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


// Example usage for the second set of IDs and breed options
setupBreedOptions('pet_Type-1', 'Breed-1', {
    'Dog': ["Affenpinscher","Afghan Hound","Airedale Terrier","Akita","Alaskan Malamute","American Bulldog","American Eskimo Dog","American Foxhound","American Pit Bull Terrier","American Staffordshire Terrier","Anatolian Shepherd Dog", "Aspin/Asnoy","Australian Cattle Dog","Australian Shepherd","Australian Terrier","Basenji","Basset Hound","Beagle","Bearded Collie","Bedlington Terrier","Belgian Malinois","Belgian Sheepdog","Belgian Tervuren","Bernese Mountain Dog","Bichon Frise","Black and Tan Coonhound","Bloodhound","Border Collie","Border Terrier","Borzoi","Boston Terrier","Bouvier des Flandres","Boxer","Boykin Spaniel","Briard","Brittany","Brussels Griffon","Bull Terrier","Bulldog","Bullmastiff","Cairn Terrier","Canaan Dog","Cane Corso","Cardigan Welsh Corgi","Cavalier King Charles Spaniel","Chesapeake Bay Retriever","Chihuahua","Chinese Crested","Chinese Shar-Pei","Chow Chow","Clumber Spaniel","Cockapoo","Collie","Coonhound","Corgi","Coton de Tulear","Curly-Coated Retriever","Dachshund","Dalmatian","Dandie Dinmont Terrier","Doberman Pinscher","Dogue de Bordeaux","Dutch Shepherd","English Bulldog","English Cocker Spaniel","English Foxhound","English Setter","English Springer Spaniel","English Toy Spaniel","Entlebucher Mountain Dog","Eskimo Dog","Finnish Lapphund","Finnish Spitz","Flat-Coated Retriever","French Bulldog","German Pinscher","German Shepherd Dog","German Shorthaired Pointer","German Wirehaired Pointer","Giant Schnauzer","Glen of Imaal Terrier","Goldador","Golden Retriever","Goldendoodle","Gordon Setter","Great Dane","Great Pyrenees","Greater Swiss Mountain Dog","Greyhound","Harrier","Havanese","Hound","Hovawart","Hungarian Puli","Hungarian Shepherd","Hungarian Vizsla","Husky","Ibizan Hound","Icelandic Sheepdog","Irish Setter","Irish Terrier","Irish Water Spaniel","Irish Wolfhound","Italian Greyhound","Jack Russell Terrier","Japanese Chin","Japanese Spitz","Japanese Terrier","Keeshond","Kerry Blue Terrier","King Charles Spaniel","Klee Kai","Kuvasz","Labradoodle","Labrador Retriever","Lakeland Terrier","Lancashire Heeler","Leonberger","Lhasa Apso","Lowchen","Maltese","Manchester Terrier","Maremma Sheepdog","Mastiff","Miniature Bull Terrier","Miniature Pinscher","Miniature Schnauzer","Mixed Breed","Mountain Cur","Mountain Dog","Neapolitan Mastiff","Newfoundland","Norfolk Terrier","Norwegian Buhund","Norwegian Elkhound","Norwegian Lundehund","Norwich Terrier","Nova Scotia Duck Tolling Retriever","Old English Sheepdog","Otterhound","Papillon","Pekingese","Pembroke Welsh Corgi","Pharaoh Hound","Pinscher","Pit Bull Terrier","Plott Hound","Podenco Canario","Pointer","Polish Lowland Sheepdog","Pomeranian","Poodle","Portuguese Water Dog","Presacanario","Pug","Puggle","Puli","Pumi","Pyrenees","Redbone Coonhound","Retriever","Rhodesian Ridgeback","Rottweiler","Saint Bernard","Saluki","Samoyed","Schipperke","Scottish Deerhound","Scottish Terrier","Sealyham Terrier","Setter","Shar-Pei","Sheltie","Shiba Inu","Shih Tzu","Siberian Husky","Silky Terrier","Skye Terrier","Sloughi","Small Munsterlander Pointer","Spaniel","Spanish Water Dog","Spitz","Springer Spaniel","Staffordshire Bull Terrier","Standard Schnauzer","Sussex Spaniel","Swedish Vallhund","Terrier","Thai Ridgeback","Tibetan Mastiff","Tibetan Spaniel","Tibetan Terrier","Tosa Inu","Toy Fox Terrier","Treeing Walker Coonhound","Vizsla","Weimaraner","Welsh Corgi","Welsh Terrier","West Highland White Terrier","Whippet","White Shepherd","Wirehaired Pointing Griffon","Xoloitzcuintli","Yorkshire Terrier"],
    'Cat': ["Abyssinian","American Bobtail","American Curl","American Shorthair","American Wirehair","Balinese","Bengal","Birman","Bombay","British Shorthair","Burmese","Chartreux","Chausie","Cornish Rex","Cymric","Devon Rex","Egyptian Mau","European Burmese","Exotic Shorthair","Havana Brown","Himalayan","Japanese Bobtail","Javanese","Korat","LaPerm","Maine Coon","Manx","Munchkin","Nebelung","Norwegian Forest","Ocicat","Oriental","Persian","Pixie-Bob","Ragamuffin","Ragdoll","Russian Blue","Savannah","Scottish Fold","Selkirk Rex","Siamese","Siberian","Singapura","Snowshoe","Somali","Sphynx","Tonkinese","Turkish Angora","Turkish Van"]
});




//age of pet  
function setupAgeCalculation(birthdateId, ageId) {
    const today = new Date();
    const minDate = new Date(today.getFullYear() - 100, today.getMonth(), today.getDate()).toISOString().split('T')[0];

    const dateInput = document.getElementById(birthdateId);
    dateInput.setAttribute('max', today.toISOString().split('T')[0]);  // Set max date to today
    dateInput.setAttribute('min', minDate);

    // Disable keyboard input for date and age fields
    dateInput.addEventListener('keydown', function (e) {
        e.preventDefault();
    });

    const ageInput = document.getElementById(ageId);
    ageInput.addEventListener('keydown', function (e) {
        e.preventDefault();
    });

    const birthdateInput = document.getElementById(birthdateId);

    birthdateInput.addEventListener('change', function () {
        const selectedBirthdate = new Date(birthdateInput.value);

        if (!selectedBirthdate) {
            ageInput.value = '';
            ageInput.placeholder = 'Please enter the birthdate first.';
        } else {
            const age = calculateAge(selectedBirthdate);
            ageInput.value = age.years + ' year(s) and ' + age.months + ' month(s)';
        }
    });

    // Enable age input initially
    ageInput.disabled = false;

    function calculateAge(birthdate) {
        const today = new Date();
        const ageInMilliseconds = today - birthdate;
        const years = Math.floor(ageInMilliseconds / (365 * 24 * 60 * 60 * 1000));
        const months = Math.floor(((ageInMilliseconds / (365 * 24 * 60 * 60 * 1000)) - years) * 12);
        return { years: years, months: months };
    }
}


// Example usage for the second set of IDs
setupAgeCalculation('Pet_birthdate-1', 'Age-1', 'pet_Type-1');

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





});




function setupDateInputRestrictions() {
    // Get the current date
    const currentDate = new Date();
    const currentDateString = currentDate.toISOString().split('T')[0]; // Format: YYYY-MM-DD

    // Get the date input elements by their IDs
    const dateInputs = [
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
            const selectedDate = new Date(dateInput.value);

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
    const currentDate = new Date();
    const currentDateString = currentDate.toISOString().split('T')[0]; // Format: YYYY-MM-DD

    // Get the date input elements by their IDs
    const dateInputs = [
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
            const selectedDate = new Date(dateInput.value);

            // Compare the selected date with the current date
            if (selectedDate < currentDate) {
                alert('Please select a date from present to future.');
                dateInput.value = currentDateString; // Reset to the current date
            }
        });
    });
}

setupFutureDateInputRestriction();


const ownerName = document.getElementById('name');
    const pet_nameInput = document.getElementById('Pet_name-1');
    const pet_TypeInput = document.getElementById('pet_Type-1');
    const breedInput = document.getElementById('Breed-1');
    const pet_GenderInput = document.getElementById('Gender-1');
    const pet_birthdateInput = document.getElementById('Pet_birthdate-1');
    const pet_ageInput = document.getElementById('Age-1');
    const pet_weightInput = document.getElementById('Weight-1');
    const pet_sterilizationStatusInput = document.getElementById('Sterilization_status-1');


    const errorownerName = document.getElementById('error-owner');
    const errorPet = document.getElementById('error-pet_name-1');
    const errorPetGender = document.getElementById('error-gender-1');
    const errorPetType = document.getElementById('error-pet_type-1');
    const errorPetBreed = document.getElementById('error-breed-1');
    const errorPetBday = document.getElementById('error-pet_birthdate-1');
    const errorPetAge = document.getElementById('error-age-1');
    const errorPetWeight = document.getElementById('error-weight-1');
    const errorPetStatus = document.getElementById('error-sterilization_status-1');

    const pet_name_edit = document.getElementById('editPetName');
    const pet_sex = document.getElementById('editGender');
    const pet_birthdate_edit = document.getElementById('editBirthdate');
    const pet_type_edit = document.getElementById('editSpecies');
    const pet_breed = document.getElementById('editBreed');


    const errorPet1 = document.getElementById('edit_pet_error');
    const error_sex1 = document.getElementById('error_sex');
    const edit_birthdate_error1 = document.getElementById('edit_birthdate_error');
    const edit_pet_type_error1 = document.getElementById('edit_pet_type_error');
    const edit_breed_error1 = document.getElementById('edit_breed_error');

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

    addBlurListener(ownerName, errorownerName)
    addBlurListener(pet_nameInput, errorPet);
    addBlurListener(pet_GenderInput, errorPetGender);
    addBlurListener(pet_TypeInput, errorPetType);
    addBlurListener(breedInput, errorPetBreed);
    addBlurListener(pet_ageInput, errorPetAge)
    addBlurListener(pet_birthdateInput, errorPetBday);
    addBlurListener(pet_weightInput, errorPetWeight);
    addBlurListener(pet_sterilizationStatusInput, errorPetStatus);


    addBlurListener(pet_name_edit, errorPet1);
    addBlurListener(pet_sex, error_sex1);
    addBlurListener(pet_birthdate_edit, edit_birthdate_error1);
    addBlurListener(pet_type_edit, edit_pet_type_error1);
    addBlurListener(pet_breed, edit_breed_error1);