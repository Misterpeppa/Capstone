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
    edit_pet_container.style.display = 'none';
});
    
var edit_pet_btn = document.getElementById('edit_pet_btn');

var editPetAction = document.querySelectorAll('.Edit_pet-action');


function onEditPetActionClick() {
var edit_pet_container = document.getElementById('edit_pet_container');
        var client_container = document.getElementById('client_container');
        edit_pet_container.style.display = 'flex';
        client_container.style.display = 'none';
}

 

// Attach the click event listener to all elements with the class 'Edit_pet-action'
editPetAction.forEach(function (element) {
    element.addEventListener('click', onEditPetActionClick);
});
edit_pet_btn.addEventListener('click', function(){
        // Hide the edit_pet_container
    editPetContainer.style.display = 'flex';
    
    // Show the view_pet_container
    viewPetContainer.style.display = 'none';
})


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
    var add_pet_btn1 = document.getElementById('add_pet_btn-1');
    var submit_Pet1 = document.getElementById('submit_Pet-1');
    var add_pet_split_btn = document.getElementById('add_pet_split_btn');
    var clearFormButton = document.getElementById('clear_form');
    var clearFormButton1 = document.getElementById('clear_form-1');
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
    var add_pet_record_modal1 = new bootstrap.Modal(document.getElementById('add_pet_record_modal-1'));
    var add_medical_history_modal = new bootstrap.Modal(document.getElementById('add_medical_history_modal'));
    var add_immunization_history_modal = new bootstrap.Modal(document.getElementById('add_immunization_history_modal'));
    var add_surgery_history_modal = new bootstrap.Modal(document.getElementById('add_surgery_history_modal'));

    
    
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
function handleInputError(input, error, guide) {
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
  

var errorPet = document.getElementById('error-pet_name-1');
var errorPetGender = document.getElementById('error-gender-1');
var errorPetType = document.getElementById('error-pet_type-1');
var errorPetBreed = document.getElementById('error-breed-1');
var errorPetBday = document.getElementById('error-pet_birthdate-1');
var errorPetWeight = document.getElementById('error-weight-1');
var errorPetStatus = document.getElementById('error-sterilization_status-1');


    

    
handleInputError(pet_nameInput, errorPet);
handleInputError(pet_GenderInput, errorPetGender);
handleInputError(pet_TypeInput, errorPetType);
handleInputError(breedInput, errorPetBreed);
handleInputError(pet_birthdateInput, errorPetBday);
handleInputError(pet_weightInput, errorPetWeight);
handleInputError(pet_sterilizationStatusInput, errorPetStatus)

// Function to update the pet card with input values
function updatePetCard() {
    var petName = pet_nameInput.value;
    var petBreed = breedInput.value;
    var sex1 = pet_GenderInput.value;
    var age1 = pet_ageInput.value;
    var weight1 = pet_weightInput.value;
    var sterilizationStatus1 = pet_sterilizationStatusInput.value;

    // Get the pet card elements
    var petNameElement = document.querySelector('.pet_detail_heading_text_container h1');
    var petBreedElement = document.querySelector('.pet_detail_heading_text_container p');
    var sexElement = document.querySelector('.pet_sex_container p');
    var ageElement = document.querySelector('.pet_age_container p');
    var weightElement = document.querySelector('.pet_weight_container p');
    var sterilizationStatusElement = document.querySelector('.pet_sterilization_status_container p');

    // Update the content of the pet card
    petNameElement.textContent = petName;
    petBreedElement.textContent = petBreed;
    sexElement.textContent = sex1;
    ageElement.textContent = age1;
    weightElement.textContent = weight1 + ' kg';
    sterilizationStatusElement.textContent = sterilizationStatus1;
} 
     
    
    

 

// Function to create a new pet card
function createPetCard(name1, breed1, sex1, age1, weight1, sterilizationStatus1) {
    // Create new elements
    var newCard = document.createElement('div');
    newCard.className = 'card pet_card';
    newCard.style.display = 'flex';

    var imageContainer = document.createElement('div');
    imageContainer.className = 'pet_image_container';
    imageContainer.innerHTML = '<img src="koda 1.png" />';  

    var cardBody = document.createElement('div');
    cardBody.className = 'card-body pet_card_body';

    // Set content based on input values
    var headingTextContainer = document.createElement('div');
    headingTextContainer.className = 'pet_detail_heading_text_container';
    headingTextContainer.innerHTML = '<h1>' + name1 + '</h1><p>' + breed1 + '</p>';

    // Create the rest of the card structure
    var moreButton = document.createElement('div');
    moreButton.className = 'dropdown';
    moreButton.innerHTML = '<button class="btn dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><svg fill="none" height="18" viewBox="0 0 18 18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M9 5C7.61929 5 6.5 3.88071 6.5 2.5C6.5 1.11929 7.61929 -6.03528e-08 9 0C10.3807 6.03528e-08 11.5 1.11929 11.5 2.5C11.5 3.88071 10.3807 5 9 5Z" fill="#045B62"></path><path d="M9 11.5C7.61929 11.5 6.5 10.3807 6.5 9C6.5 7.61929 7.61929 6.5 9 6.5C10.3807 6.5 11.5 7.61929 11.5 9C11.5 10.3807 10.3807 11.5 9 11.5Z" fill="#045B62"></path><path d="M9 18C7.61929 18 6.5 16.8807 6.5 15.5C6.5 14.1193 7.61929 13 9 13C10.3807 13 11.5 14.1193 11.5 15.5C11.5 16.8807 10.3807 18 9 18Z" fill="#045B62"></path></svg></button><div class="dropdown-menu more_button" data-bs-popper="none"><a  class="dropdown-item View_pet-action" id="View"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" viewBox="0 0 20 14" fill="none"><path d="M8 7C8 7.53043 8.21071 8.03914 8.58579 8.41421C8.96086 8.78929 9.46957 9 10 9C10.5304 9 11.0391 8.78929 11.4142 8.41421C11.7893 8.03914 12 7.53043 12 7C12 6.46957 11.7893 5.96086 11.4142 5.58579C11.0391 5.21071 10.5304 5 10 5C9.46957 5 8.96086 5.21071 8.58579 5.58579C8.21071 5.96086 8 6.46957 8 7Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M19 7C16.6 11 13.6 13 10 13C6.4 13 3.4 11 1 7C3.4 3 6.4 1 10 1C13.6 1 16.6 3 19 7Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> View</a><a id="Edit" class="dropdown-item Edit_pet-action"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><g clip-path="url(#clip0_6429_22112)"><path d="M13.5 6.5L17.5 10.5M4 20.0001H8L18.5 9.50006C19.0304 8.96963 19.3284 8.2502 19.3284 7.50006C19.3284 6.74991 19.0304 6.03049 18.5 5.50006C17.9696 4.96963 17.2501 4.67163 16.5 4.67163C15.7499 4.67163 15.0304 4.96963 14.5 5.50006L4 16.0001V20.0001Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_6429_22112"><rect width="24" height="24" fill="white"/></clipPath></defs></svg> Edit</a><a id="Archive" class="dropdown-item archive_pet"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><g clip-path="url(#clip0_6429_22117)"><path d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_6429_22117"><rect width="24" height="24" fill="white"/></clipPath></defs></svg> Archive</a><a id="add_appointment" class="dropdown-item add_appointment" href="appointment.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><g clip-path="url(#clip0_6429_22122)"><path d="M12.5 21H6C5.46957 21 4.96086 20.7893 4.58579 20.4142C4.21071 20.0391 4 19.5304 4 19V7C4 6.46957 4.21071 5.96086 4.58579 5.58579C4.96086 5.21071 5.46957 5 6 5H18C18.5304 5 19.0391 5.21071 19.4142 5.58579C19.7893 5.96086 20 6.46957 20 7V12M16 3V7M8 3V7M4 11H20M16 19H22M19 16V22" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_6429_22122"><rect width="24" height="24" fill="white"/></clipPath></defs></svg> Add Appointment</a></div></div>';

    var petDetailHeader = document.createElement('div');
    petDetailHeader.className = 'pet_detail_header';
    petDetailHeader.appendChild(headingTextContainer);
    petDetailHeader.appendChild(moreButton);

    var petDetailBody = document.createElement('div');
    petDetailBody.className = 'pet_detail_body';

    // Create the rest of the card structure
    var petUpperDetail = document.createElement('div');
    petUpperDetail.className = 'pet_upper_detail';

    var petSexContainer = document.createElement('div');
    petSexContainer.className = 'pet_sex_container';
    petSexContainer.innerHTML = '<h1>Sex</h1><p>' + sex1 + '</p>';

    var petAgeContainer = document.createElement('div');
    petAgeContainer.className = 'pet_age_container';
    petAgeContainer.innerHTML = '<h1>Age</h1><p>' + age1 + '</p>';

    petUpperDetail.appendChild(petSexContainer);
    petUpperDetail.appendChild(petAgeContainer);

    var petLowerDetail = document.createElement('div');
    petLowerDetail.className = 'pet_lower_detail';

    var petWeightContainer = document.createElement('div');
    petWeightContainer.className = 'pet_weight_container';
    petWeightContainer.innerHTML = '<h1>Weight</h1><p>' + weight1 + '</p>';

    var petSterilizationStatusContainer = document.createElement('div');
    petSterilizationStatusContainer.className = 'pet_sterilization_status_container';
    petSterilizationStatusContainer.innerHTML = '<h1>Sterilization Status</h1><p>' + sterilizationStatus1 + '</p>';

    petLowerDetail.appendChild(petWeightContainer);
    petLowerDetail.appendChild(petSterilizationStatusContainer);

    petDetailBody.appendChild(petUpperDetail);
    petDetailBody.appendChild(petLowerDetail);

    // Append elements to the new card
    cardBody.appendChild(petDetailHeader);
    cardBody.appendChild(petDetailBody);

    newCard.appendChild(imageContainer);
    newCard.appendChild(cardBody);

    // Assume you have a container for pet cards with the id 'pet_records'
    var petRecordsContainer = document.getElementById('pet_records');
    petRecordsContainer.appendChild(newCard);

    // Add console.log to verify if the card is created
    console.log('Pet Card Created:', newCard);
    


}
submit_Pet1.addEventListener('click', function() {
    console.log('Button clicked!');
        
            add_pet_record_modal1.hide();
            add_pet_success.show();
            // Hide the modal after 2000 milliseconds (2 seconds)
            setTimeout(function () {
                add_pet_success.hide();
            }, 2000); 
            
            
        
        // Get input values for Pet1
        var petName1 = pet_nameInput.value;
        var petBreed1 = breedInput.value;
        var sex1 = pet_GenderInput.value;
        var age1 = pet_ageInput.value;
        var weight1 = pet_weightInput.value;
        var sterilizationStatus1 = pet_sterilizationStatusInput.value;
    
        // Console.log to check if values are correctly retrieved
        console.log('Pet Name:', petName1);
        console.log('Pet Breed:', petBreed1);
        console.log('Pet Sex:', sex1);
        console.log('Pet Age:', age1);
        console.log('Pet Weight:', weight1);
        console.log('Pet Sterilization Status:', sterilizationStatus1);
    
        // Call the createPetCard function with input values for Pet1
        createPetCard(petName1, petBreed1, sex1, age1, weight1, sterilizationStatus1);
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
    'submit_Pet-1',
    'clear_form', 
    'close_pet_modal'
);





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

     
    
function resetDiagnosisFields() {
    var diagnosis = document.getElementById('diagnosis');
    var diagnosis_date = document.getElementById('diagnosis_date');
    var treatment_plan = document.getElementById('treatment_plan');
    var medication = document.getElementById('medication');
    var diagnosis_description = document.getElementById('diagnosis_description');
    
    diagnosis.value = '';
    diagnosis_date.value = '';
    treatment_plan.value = '';  // Corrected variable name
    medication.value = '';      // Corrected variable name
    diagnosis_description.value = '';
}
    
 //reset vaccination fields
function resetVaccinationFields() {
    var vaccination = document.getElementById('vaccination');
    var vaccination_date = document.getElementById('vaccination_date');
    var vaccination_description = document.getElementById('vaccination_description');
    var next_schedule = document.getElementById('next_schedule');
    var status = document.getElementById('status');
    
    vaccination.value = '';
    vaccination_date.value = '';
    vaccination_description.value = '';  // Corrected variable name
    next_schedule.value = '';      // Corrected variable name
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
    severity.value = '';  // Corrected variable name
    medication.value = '';      // Corrected variable name
    notes.value = '';
}   




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


submit_diagnosis.addEventListener('click', function () {
    var add_medical_histo_success = new bootstrap.Modal(document.getElementById('add_medical_histo_success'));
    add_medical_histo_success.show()
    setTimeout(function() {
        $('#add_medical_histo_success').hide();
    }, 2000);
    // Call the resetDiagnosisFields function
    resetDiagnosisFields();
    add_medical_history_modal.hide();
    medical_empty_state.style.display = 'none';
    medical_history_table_container.style.display = 'flex';

    var add_diagnosis = document.getElementById('add_diagnosis');
    add_diagnosis.style.display = 'flex';
});
    
submit_vaccination.addEventListener('click', function(){
    var add_immunization_histo_success = new bootstrap.Modal(document.getElementById('add_immunization_histo_success'));
    add_immunization_histo_success.show()
    setTimeout(function() {
        $('#add_immunization_histo_success').hide();
    }, 2000);
    resetVaccinationFields();
    add_immunization_history_modal.hide();
    immunization_empty_state.style.display = 'none';
    immunization_history_table_container.style.display = 'flex';
    
    var add_immunization = document.getElementById('add_immunization');
    add_immunization.style.display = 'flex';
                                    
});
    
submit_surgery.addEventListener('click', function(){
    var add_surgery_histo_success = new bootstrap.Modal(document.getElementById('add_surgery_histo_success'));
    add_surgery_histo_success.show()
    setTimeout(function() {
        $('#add_surgery_histo_success').hide();
    }, 2000);

    resetSurgeryFields();
    add_surgery_history_modal.hide();
    surgery_empty_state.style.display = 'none';
    surgery_history_table_container.style.display = 'flex';
    
    var add_surgery = document.getElementById('add_surgery');
    add_surgery.style.display = 'flex';
});
    
    

    



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



