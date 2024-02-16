document.addEventListener('DOMContentLoaded', function () {
    
    //buttons
    var add_pet = document.getElementById('add_pet');
    var submit_Pet = document.getElementById('submit_Pet');
    var submit_pet1 = document.getElementById('submit_Pet-1');
    var clearFormButton = document.getElementById('clear_form-2');
    var clearFormButton1 = document.getElementById('clear_form-1');
    var user_new_pet_btn = document.getElementById('user_new_pet_btn');
    var close_pet_modal1 = document.getElementById('close_pet_modal-1');
    
    //containers
    const empty_state_container = document.getElementById('empty_state_container');
    
    //modals
    var add_pet_modal = new bootstrap.Modal(document.getElementById('add_pet_modal'));
    var add_pet_modal1 = new bootstrap.Modal(document.getElementById('add_pet_modal-1'));
    var add_pet_success = new bootstrap.Modal(document.getElementById('add_pet_success'));
    var add_pet_success = new bootstrap.Modal(document.getElementById('add_pet_success'));
    
    var archive_pet_modal = new bootstrap.Modal(document.getElementById('archive_pet_modal'));
    
      // Function to show error message if email is clicked and left without a value
    add_pet.addEventListener('click', function () {
        add_pet_modal1.show();
      });  
    
    user_new_pet_btn.addEventListener('click', function () {
        add_pet_modal1.show();
      });


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

    function onBlurGuide() {
        guide.style.display = 'none'; // Hide the guide message
    }

    // Add event listeners to inputs
    input.addEventListener('blur', onBlur);
    input.addEventListener('focus', onFocus);
    input.addEventListener('blur', onBlurGuide);
}

// Usage example
var pet_nameInput = document.getElementById('pet_name');
var pet_TypeInput = document.getElementById('pet_type');
var breedInput = document.getElementById('breed');
var pet_GenderInput = document.getElementById('gender');
var pet_birthdateInput = document.getElementById('pet_birthdate');
var pet_ageInput = document.getElementById('age');
var pet_weightInput = document.getElementById('weight');
var pet_sterilizationStatusInput = document.getElementById('sterilization_status');
    
var pet_nameInput1 = document.getElementById('pet_name-1');
var pet_TypeInput1 = document.getElementById('pet_type-1');
var breedInput1 = document.getElementById('breed-1');
var pet_GenderInput1 = document.getElementById('gender-1');
var pet_birthdateInput1 = document.getElementById('pet_birthdate-1');
var pet_ageInput1 = document.getElementById('age-1');
var pet_weightInput1 = document.getElementById('weight-1');
var pet_sterilizationStatusInput1 = document.getElementById('sterilization_status-1');


var errorPet = document.getElementById('error-pet_name');
var errorPetGender = document.getElementById('error-gender');
var errorPetType = document.getElementById('error-pet_type');
var errorPetBreed = document.getElementById('error-breed');
var errorPetBday = document.getElementById('error-pet_birthdate');
var errorPetWeight = document.getElementById('error-weight');
var errorPetStatus = document.getElementById('error-sterilization_status');
var errorPet1 = document.getElementById('error-pet_name-1');
var errorPetGender1 = document.getElementById('error-breed-1');
var errorPetType1 = document.getElementById('error-pet_type-1');
var errorPetBreed1 = document.getElementById('error-pet_type-1');
var errorPetBday1 = document.getElementById('error-pet_birthdate-1');
var errorPetWeight1 = document.getElementById('error-weight-1');
var errorPetStatus1 = document.getElementById('error-sterilization_status-1');
    
var guidePetMessage = document.getElementById('guide-pet_name');
var guidePetGenderMessage = document.getElementById('guide-gender');
var guidePetTypeMessage = document.getElementById('guide-pet_type');
var guidePetBreedMessage = document.getElementById('guide-breed');
var guidePetBdayMessage = document.getElementById('guide_pet_birthdate');
var guidePetWeightMessage = document.getElementById('guide_pet_weight');
var guidePetStatusMessage = document.getElementById('guide-sterilization_status');  
    
var guidePetMessage1 = document.getElementById('guide-pet_name-1');
var guidePetGenderMessage1 = document.getElementById('guide-gender-1');
var guidePetTypeMessage1 = document.getElementById('guide-pet_type-1');
var guidePetBreedMessage1 = document.getElementById('guide-breed-1');
var guidePetBdayMessage1 = document.getElementById('guide_pet_birthdate-1');
var guidePetWeightMessage1 = document.getElementById('guide_pet_weight-1');
var guidePetStatusMessage1 = document.getElementById('guide-sterilization_status-1');  
    
handleInputError(pet_nameInput, errorPet, guidePetMessage);
handleInputError(pet_GenderInput, errorPetGender, guidePetGenderMessage);
handleInputError(pet_TypeInput, errorPetType, guidePetTypeMessage);
handleInputError(breedInput, errorPetBreed, guidePetBreedMessage)
handleInputError(pet_birthdateInput, errorPetBday, guidePetBdayMessage);
handleInputError(pet_weightInput, errorPetWeight, guidePetWeightMessage);
handleInputError(pet_sterilizationStatusInput, errorPetStatus, guidePetStatusMessage)
handleInputError(pet_nameInput1, errorPet1, guidePetMessage1);
handleInputError(pet_GenderInput1, errorPetGender1, guidePetGenderMessage1);
handleInputError(pet_TypeInput1, errorPetType1, guidePetTypeMessage1);
handleInputError(breedInput1, errorPetBreed1, guidePetBreedMessage1)
handleInputError(pet_birthdateInput1, errorPetBday1, guidePetBdayMessage1);
handleInputError(pet_weightInput1, errorPetWeight1, guidePetWeightMessage1);
handleInputError(pet_sterilizationStatusInput1, errorPetStatus1, guidePetStatusMessage1)
    
 
    
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
capitalizeFirstLetterOfWords(pet_nameInput1);

function weightInputLimit(inputElement) {
    inputElement.addEventListener('input', function () {
        if (inputElement.value.length > 10) {
            inputElement.value = inputElement.value.slice(0, 10);
        }
    });
}
    
weightInputLimit(pet_weightInput);
weightInputLimit(pet_weightInput1);

    
//validation para sa submit_pet buttons sa modal ng add pet record
function initializeForm(submitButton, ...inputs) {
    function checkInputs() {
        return inputs.every(input => input.value.trim() !== '' && input.value.trim() !== 'none');
    }

    function updateSubmitButton() {
        submitButton.disabled = !checkInputs();
    }

    inputs.forEach(input => {
        input.addEventListener('input', updateSubmitButton);
    });

    updateSubmitButton(); // Set initial state of the submit button
}
initializeForm(submit_Pet, pet_nameInput, pet_TypeInput, breedInput, pet_GenderInput, pet_birthdateInput, pet_ageInput, pet_weightInput, pet_sterilizationStatusInput);
    
initializeForm(submit_pet1, pet_nameInput1, pet_TypeInput1, breedInput1, pet_GenderInput1, pet_birthdateInput1, pet_ageInput1, pet_weightInput1, pet_sterilizationStatusInput1);
    


// reset input and select fields
function resetPetForm(nameInput, genderInput, typeInput, breedInput, pet_weightInput, sterilizationStatusInput, birthdateInput, ageInput) {
    nameInput.value = '';
    genderInput.value = 'none';
    typeInput.value = '';
    breedInput.value = 'none';
    breedInput.disabled = true;
    pet_weightInput.value = '';
    sterilizationStatusInput.value = 'none';
    birthdateInput.value = '';
    ageInput.value = '';
}

    // usage for the first set of IDs
    resetPetForm(pet_nameInput, pet_GenderInput, pet_TypeInput, breedInput, pet_weightInput, pet_sterilizationStatusInput, pet_birthdateInput, pet_ageInput);

    // usage for the second set of IDs
    resetPetForm(pet_nameInput1, pet_GenderInput1, pet_TypeInput1, breedInput1, pet_weightInput1, pet_sterilizationStatusInput1, pet_birthdateInput1, pet_ageInput1);
    
    // Attach the resetForm function to both clear form buttons
    clearFormButton.addEventListener('click', resetPetForm.bind(null, pet_nameInput, pet_GenderInput, pet_TypeInput, breedInput, pet_weightInput, pet_sterilizationStatusInput, pet_birthdateInput, pet_ageInput));
    clearFormButton1.addEventListener('click', resetPetForm.bind(null, pet_nameInput1, pet_GenderInput1, pet_TypeInput1, breedInput1, pet_weightInput1, pet_sterilizationStatusInput1, pet_birthdateInput1, pet_ageInput1));
    
    //close button sa pet record modal, when clicked, reset ang form
    close_pet_modal.addEventListener('click', resetPetForm.bind(null, pet_nameInput, pet_GenderInput, pet_TypeInput, breedInput, pet_weightInput, pet_sterilizationStatusInput, pet_birthdateInput, pet_ageInput));
    
    close_pet_modal1.addEventListener('click', resetPetForm.bind(null, pet_nameInput1, pet_GenderInput1, pet_TypeInput1, breedInput1, pet_weightInput1, pet_sterilizationStatusInput1, pet_birthdateInput1, pet_ageInput1));
   
    
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
    setupBreedOptions('pet_type', 'breed', {
        'Dog': ["Affenpinscher","Afghan Hound","Airedale Terrier","Akita","Alaskan Malamute","American Bulldog","American Eskimo Dog","American Foxhound","American Pit Bull Terrier","American Staffordshire Terrier","Anatolian Shepherd Dog","Australian Cattle Dog","Australian Shepherd","Australian Terrier","Basenji","Basset Hound","Beagle","Bearded Collie","Bedlington Terrier","Belgian Malinois","Belgian Sheepdog","Belgian Tervuren","Bernese Mountain Dog","Bichon Frise","Black and Tan Coonhound","Bloodhound","Border Collie","Border Terrier","Borzoi","Boston Terrier","Bouvier des Flandres","Boxer","Boykin Spaniel","Briard","Brittany","Brussels Griffon","Bull Terrier","Bulldog","Bullmastiff","Cairn Terrier","Canaan Dog","Cane Corso","Cardigan Welsh Corgi","Cavalier King Charles Spaniel","Chesapeake Bay Retriever","Chihuahua","Chinese Crested","Chinese Shar-Pei","Chow Chow","Clumber Spaniel","Cockapoo","Collie","Coonhound","Corgi","Coton de Tulear","Curly-Coated Retriever","Dachshund","Dalmatian","Dandie Dinmont Terrier","Doberman Pinscher","Dogue de Bordeaux","Dutch Shepherd","English Bulldog","English Cocker Spaniel","English Foxhound","English Setter","English Springer Spaniel","English Toy Spaniel","Entlebucher Mountain Dog","Eskimo Dog","Finnish Lapphund","Finnish Spitz","Flat-Coated Retriever","French Bulldog","German Pinscher","German Shepherd Dog","German Shorthaired Pointer","German Wirehaired Pointer","Giant Schnauzer","Glen of Imaal Terrier","Goldador","Golden Retriever","Goldendoodle","Gordon Setter","Great Dane","Great Pyrenees","Greater Swiss Mountain Dog","Greyhound","Harrier","Havanese","Hound","Hovawart","Hungarian Puli","Hungarian Shepherd","Hungarian Vizsla","Husky","Ibizan Hound","Icelandic Sheepdog","Irish Setter","Irish Terrier","Irish Water Spaniel","Irish Wolfhound","Italian Greyhound","Jack Russell Terrier","Japanese Chin","Japanese Spitz","Japanese Terrier","Keeshond","Kerry Blue Terrier","King Charles Spaniel","Klee Kai","Kuvasz","Labradoodle","Labrador Retriever","Lakeland Terrier","Lancashire Heeler","Leonberger","Lhasa Apso","Lowchen","Maltese","Manchester Terrier","Maremma Sheepdog","Mastiff","Miniature Bull Terrier","Miniature Pinscher","Miniature Schnauzer","Mixed Breed","Mountain Cur","Mountain Dog","Neapolitan Mastiff","Newfoundland","Norfolk Terrier","Norwegian Buhund","Norwegian Elkhound","Norwegian Lundehund","Norwich Terrier","Nova Scotia Duck Tolling Retriever","Old English Sheepdog","Otterhound","Papillon","Pekingese","Pembroke Welsh Corgi","Pharaoh Hound","Pinscher","Pit Bull Terrier","Plott Hound","Podenco Canario","Pointer","Polish Lowland Sheepdog","Pomeranian","Poodle","Portuguese Water Dog","Presacanario","Pug","Puggle","Puli","Pumi","Pyrenees","Redbone Coonhound","Retriever","Rhodesian Ridgeback","Rottweiler","Saint Bernard","Saluki","Samoyed","Schipperke","Scottish Deerhound","Scottish Terrier","Sealyham Terrier","Setter","Shar-Pei","Sheltie","Shiba Inu","Shih Tzu","Siberian Husky","Silky Terrier","Skye Terrier","Sloughi","Small Munsterlander Pointer","Spaniel","Spanish Water Dog","Spitz","Springer Spaniel","Staffordshire Bull Terrier","Standard Schnauzer","Sussex Spaniel","Swedish Vallhund","Terrier","Thai Ridgeback","Tibetan Mastiff","Tibetan Spaniel","Tibetan Terrier","Tosa Inu","Toy Fox Terrier","Treeing Walker Coonhound","Vizsla","Weimaraner","Welsh Corgi","Welsh Terrier","West Highland White Terrier","Whippet","White Shepherd","Wirehaired Pointing Griffon","Xoloitzcuintli","Yorkshire Terrier"],
        'Cat': ["Abyssinian","American Bobtail","American Curl","American Shorthair","American Wirehair","Balinese","Bengal","Birman","Bombay","British Shorthair","Burmese","Chartreux","Chausie","Cornish Rex","Cymric","Devon Rex","Egyptian Mau","European Burmese","Exotic Shorthair","Havana Brown","Himalayan","Japanese Bobtail","Javanese","Korat","LaPerm","Maine Coon","Manx","Munchkin","Nebelung","Norwegian Forest","Ocicat","Oriental","Persian","Pixie-Bob","Ragamuffin","Ragdoll","Russian Blue","Savannah","Scottish Fold","Selkirk Rex","Siamese","Siberian","Singapura","Snowshoe","Somali","Sphynx","Tonkinese","Turkish Angora","Turkish Van"]
    });

    // Example usage for the second set of IDs and breed options
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

  // Disable keyboard input for date and age fields
  dateInput.addEventListener('keydown', function (e) {
      e.preventDefault();
  });

  const ageInput = document.getElementById(ageId);
  ageInput.addEventListener('keydown', function (e) {
      e.preventDefault();
  });

  const birthdateInput = document.getElementById(birthdateId);
  const petTypeSelect = document.getElementById(petTypeId);

  birthdateInput.addEventListener('change', function () {
      const selectedBirthdate = new Date(birthdateInput.value);
      const petType = petTypeSelect.value;

      if (petType === 'none' || !selectedBirthdate) {
          ageInput.value = '';
          ageInput.placeholder = 'Please select pet type, breed, and enter the birthdate first.';
      } else {
          const age = calculateAge(selectedBirthdate, petType);
          ageInput.value = age.years + ' years and ' + age.months + ' months';
          ageInput.placeholder = ''; // Clear the placeholder
          document.getElementById('error-' + ageInput.id).innerText = ''; // Clear the error message
      }
  });

  // Enable age input initially
  ageInput.disabled = false;

  function calculateAge(birthdate, petType) {
      const today = new Date();
      let age;

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
      const ageInMilliseconds = today - birthdate;
      let ageInDogYears;

      if (ageInMilliseconds < 2 * 365 * 24 * 60 * 60 * 1000) {
          ageInDogYears = ageInMilliseconds / (365 * 24 * 60 * 60 * 1000) * 10.5;
      } else {
          ageInDogYears = 2 * 10.5 + (ageInMilliseconds - 2 * 365 * 24 * 60 * 60 * 1000) / (365 * 24 * 60 * 60 * 1000) * 4;
      }

      const years = Math.floor(ageInDogYears);
      const months = Math.floor((ageInDogYears - years) * 12);
      return { years: years, months: months };
  }

  function calculateCatAge(birthdate, today) {
      const ageInMilliseconds = today - birthdate;
      let ageInCatYears;

      if (ageInMilliseconds < 2 * 365 * 24 * 60 * 60 * 1000) {
          ageInCatYears = ageInMilliseconds / (365 * 24 * 60 * 60 * 1000) * 12;
      } else {
          ageInCatYears = 2 * 12 + (ageInMilliseconds - 2 * 365 * 24 * 60 * 60 * 1000) / (365 * 24 * 60 * 60 * 1000) * 4;
      }

      const years = Math.floor(ageInCatYears);
      const months = Math.floor((ageInCatYears - years) * 12);
      return { years: years, months: months };
  }

  function calculateDefaultAge(birthdate, today) {
      const ageInMilliseconds = today - birthdate;
      const years = Math.floor(ageInMilliseconds / (365 * 24 * 60 * 60 * 1000));
      const months = Math.floor(((ageInMilliseconds / (365 * 24 * 60 * 60 * 1000)) - years) * 12);
      return { years: years, months: months };
  }
}


// Example usage for the first set of IDs
setupAgeCalculation('pet_birthdate', 'pet_age', 'pet_type');

// Example usage for the second set of IDs
setupAgeCalculation('pet_birthdate-1', 'age-1', 'pet_type-1');

submit_Pet.addEventListener('click', function (event) {
    //paalis nalang nito if needed
    // Prevent the default form submission behavior
    event.preventDefault();


    var petName = pet_nameInput.value;
    var petBreed = breedInput.value;
    var sex = pet_GenderInput.value;
    var age = pet_ageInput.value;
    var weight = pet_weightInput.value;
    var sterilizationStatus = pet_sterilizationStatusInput.value;
    var pet_card_container = document.getElementById('pet_card_container');

    // Create the pet card container
    const petCard = createPetCard(petName, petBreed, sex, age, weight, sterilizationStatus);

    // Append the pet card to the pet_card_container
    pet_card_container.appendChild(petCard);

    // Code to hide elements and show success message
    user_new_pet_btn.style.display = 'flex';
    empty_state_container.style.display = 'none';
    add_pet_modal.hide();
    add_pet_success.show();
    pet_card_container.style.display = 'flex';

    // Hide the modal after 2000 milliseconds (2 seconds)
    setTimeout(function () {
        add_pet_success.hide();
    }, 2000);
});

function createPetCard(petName, petBreed, sex, age, weight, sterilizationStatus) {
    // Create the pet card container
    const petCard = document.createElement('div');
    petCard.className = 'card pet_card';

    // Create the pet card content
    petCard.innerHTML = `
        <div class="pet_image_container"><img src="koda 1.png" /></div>
        <div class="card-body pet_card_body">
            <div class="pet_detail_header">
                <div class="pet_detail_heading_text_container">
                    <h1>${petName}</h1>
                    <p>${petBreed}</p>
                </div>
                <div class="dropdown more_button">
                    <button class="btn dropdown-toggle more_btn" aria-expanded="false" data-bs-toggle="dropdown" type="button"><span class="more_btn_base"><svg fill="none" height="18" viewBox="0 0 18 18" width="18" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 5C7.61929 5 6.5 3.88071 6.5 2.5C6.5 1.11929 7.61929 -6.03528e-08 9 0C10.3807 6.03528e-08 11.5 1.11929 11.5 2.5C11.5 3.88071 10.3807 5 9 5Z" fill="#045B62"></path>
            <path d="M9 11.5C7.61929 11.5 6.5 10.3807 6.5 9C6.5 7.61929 7.61929 6.5 9 6.5C10.3807 6.5 11.5 7.61929 11.5 9C11.5 10.3807 10.3807 11.5 9 11.5Z" fill="#045B62"></path>
            <path d="M9 18C7.61929 18 6.5 16.8807 6.5 15.5C6.5 14.1193 7.61929 13 9 13C10.3807 13 11.5 14.1193 11.5 15.5C11.5 16.8807 10.3807 18 9 18Z" fill="#045B62"></path>
        </svg></span></button>
                    <div class="dropdown-menu more_button" data-bs-popper="none"><a  class="dropdown-item View_pet" id="View"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" viewBox="0 0 20 14" fill="none">
  <path d="M8 7C8 7.53043 8.21071 8.03914 8.58579 8.41421C8.96086 8.78929 9.46957 9 10 9C10.5304 9 11.0391 8.78929 11.4142 8.41421C11.7893 8.03914 12 7.53043 12 7C12 6.46957 11.7893 5.96086 11.4142 5.58579C11.0391 5.21071 10.5304 5 10 5C9.46957 5 8.96086 5.21071 8.58579 5.58579C8.21071 5.96086 8 6.46957 8 7Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M19 7C16.6 11 13.6 13 10 13C6.4 13 3.4 11 1 7C3.4 3 6.4 1 10 1C13.6 1 16.6 3 19 7Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg> View</a><a id="Edit" class="dropdown-item Edit_pet"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_6149_21988)">
    <path d="M13.5 6.5L17.5 10.5M4 20.0001H8L18.5 9.50006C19.0304 8.96963 19.3284 8.2502 19.3284 7.50006C19.3284 6.74991 19.0304 6.03049 18.5 5.50006C17.9696 4.96963 17.2501 4.67163 16.5 4.67163C15.7499 4.67163 15.0304 4.96963 14.5 5.50006L4 16.0001V20.0001Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6149_21988">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Edit</a><a id="Archive" class="dropdown-item archive_pet"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_6149_22015)">
    <path d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6149_22015">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Archive</a><a id="add_appointment" class="dropdown-item add_appointment" href="appointment.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_6149_21795)">
    <path d="M9 12H15M12 9V15M3 12C3 13.1819 3.23279 14.3522 3.68508 15.4442C4.13738 16.5361 4.80031 17.5282 5.63604 18.364C6.47177 19.1997 7.46392 19.8626 8.55585 20.3149C9.64778 20.7672 10.8181 21 12 21C13.1819 21 14.3522 20.7672 15.4442 20.3149C16.5361 19.8626 17.5282 19.1997 18.364 18.364C19.1997 17.5282 19.8626 16.5361 20.3149 15.4442C20.7672 14.3522 21 13.1819 21 12C21 10.8181 20.7672 9.64778 20.3149 8.55585C19.8626 7.46392 19.1997 6.47177 18.364 5.63604C17.5282 4.80031 16.5361 4.13738 15.4442 3.68508C14.3522 3.23279 13.1819 3 12 3C10.8181 3 9.64778 3.23279 8.55585 3.68508C7.46392 4.13738 6.47177 4.80031 5.63604 5.63604C4.80031 6.47177 4.13738 7.46392 3.68508 8.55585C3.23279 9.64778 3 10.8181 3 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6149_21795">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Add Appointment</a></div>
                </div>
            </div>
            <div class="pet_detail_body">
                <div class="pet_upper_detail">
                    <div class="pet_sex_container">
                        <h1>Sex</h1>
                        <p>${sex}</p>
                    </div>
                    <div class="pet_age_container">
                        <h1>Age</h1>
                        <p>${age}</p>
                    </div>
                </div>
                <div class="pet_lower_detail">
                    <div class="pet_weight_container">
                        <h1>Weight</h1>
                        <p>${weight}</p>
                    </div>
                    <div class="pet_sterilization_status_container">
                        <h1>Sterilization Status</h1>
                        <p>${sterilizationStatus}</p>
                    </div>
                </div>
            </div>
        </div>`;

    return petCard;
}
    
submit_pet1.addEventListener('click', function() {
    
    var petName1 = pet_nameInput1.value;
    var petBreed1 = breedInput1.value;
    var sex1 = pet_GenderInput1.value;
    var age1 = pet_ageInput1.value;
    var weight1 = pet_weightInput1.value;
    var sterilizationStatus1 = pet_sterilizationStatusInput1.value;

    // Create the pet card container
    const petCard = createPetCard1(petName1, petBreed1, sex1, age1, weight1, sterilizationStatus1);

    // Append the pet card to the pet_card_container
    pet_card_container.appendChild(petCard);
    
        add_pet_success.show();
        // Hide the modal after 2000 milliseconds (2 seconds)
            setTimeout(function () {
                add_pet_success.hide();
            }, 2000);
        
        add_pet_modal1.hide();
        // Clear input values using the resetPetForm function
    
        
    });

    function createPetCard1(petName1, petBreed1, sex1, age1, weight1, sterilizationStatus1) {
    // Create the pet card container
    const petCard = document.createElement('div');
    petCard.className = 'card pet_card';
    petCard.setAttribute('data-pet-id', 'pet_card_1');

    // Create the pet card content
    petCard.innerHTML = `
        <div class="pet_image_container"><img src="koda 1.png" /></div>
        <div class="card-body pet_card_body">
            <div class="pet_detail_header">
                <div class="pet_detail_heading_text_container">
                    <h1>${petName1}</h1>
                    <p>${petBreed1}</p>
                </div>
                <div class="dropdown more_button">
                    <button class="btn dropdown-toggle more_btn" aria-expanded="false" data-bs-toggle="dropdown" type="button"><span class="more_btn_base"><svg fill="none" height="18" viewBox="0 0 18 18" width="18" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 5C7.61929 5 6.5 3.88071 6.5 2.5C6.5 1.11929 7.61929 -6.03528e-08 9 0C10.3807 6.03528e-08 11.5 1.11929 11.5 2.5C11.5 3.88071 10.3807 5 9 5Z" fill="#045B62"></path>
            <path d="M9 11.5C7.61929 11.5 6.5 10.3807 6.5 9C6.5 7.61929 7.61929 6.5 9 6.5C10.3807 6.5 11.5 7.61929 11.5 9C11.5 10.3807 10.3807 11.5 9 11.5Z" fill="#045B62"></path>
            <path d="M9 18C7.61929 18 6.5 16.8807 6.5 15.5C6.5 14.1193 7.61929 13 9 13C10.3807 13 11.5 14.1193 11.5 15.5C11.5 16.8807 10.3807 18 9 18Z" fill="#045B62"></path>
        </svg></span></button>
                    <div class="dropdown-menu more_button" data-bs-popper="none"><a id="View" class="dropdown-item View_pet"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_6149_21809)">
    <path d="M10 12C10 12.5304 10.2107 13.0391 10.5858 13.4142C10.9609 13.7893 11.4696 14 12 14C12.5304 14 13.0391 13.7893 13.4142 13.4142C13.7893 13.0391 14 12.5304 14 12C14 11.4696 13.7893 10.9609 13.4142 10.5858C13.0391 10.2107 12.5304 10 12 10C11.4696 10 10.9609 10.2107 10.5858 10.5858C10.2107 10.9609 10 11.4696 10 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M21 12C18.6 16 15.6 18 12 18C8.4 18 5.4 16 3 12C5.4 8 8.4 6 12 6C15.6 6 18.6 8 21 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6149_21809">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> View</a><a id="Edit" class="dropdown-item Edit_pet"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_6149_21490)">
    <path d="M13.5 6.5L17.5 10.5M4 20.0001H8L18.5 9.50006C19.0304 8.96963 19.3284 8.2502 19.3284 7.50006C19.3284 6.74991 19.0304 6.03049 18.5 5.50006C17.9696 4.96963 17.2501 4.67163 16.5 4.67163C15.7499 4.67163 15.0304 4.96963 14.5 5.50006L4 16.0001V20.0001Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6149_21490">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Edit</a><a id="Archive" class="dropdown-item archive_pet"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_6149_21817)">
    <path d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6149_21817">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Archive</a><a id="add_appointment" class="dropdown-item add_appointment" href="appointment.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_6149_21795)">
    <path d="M9 12H15M12 9V15M3 12C3 13.1819 3.23279 14.3522 3.68508 15.4442C4.13738 16.5361 4.80031 17.5282 5.63604 18.364C6.47177 19.1997 7.46392 19.8626 8.55585 20.3149C9.64778 20.7672 10.8181 21 12 21C13.1819 21 14.3522 20.7672 15.4442 20.3149C16.5361 19.8626 17.5282 19.1997 18.364 18.364C19.1997 17.5282 19.8626 16.5361 20.3149 15.4442C20.7672 14.3522 21 13.1819 21 12C21 10.8181 20.7672 9.64778 20.3149 8.55585C19.8626 7.46392 19.1997 6.47177 18.364 5.63604C17.5282 4.80031 16.5361 4.13738 15.4442 3.68508C14.3522 3.23279 13.1819 3 12 3C10.8181 3 9.64778 3.23279 8.55585 3.68508C7.46392 4.13738 6.47177 4.80031 5.63604 5.63604C4.80031 6.47177 4.13738 7.46392 3.68508 8.55585C3.23279 9.64778 3 10.8181 3 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6149_21795">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Add Appointment</a></div>
                </div>
            </div>
            <div class="pet_detail_body">
                <div class="pet_upper_detail">
                    <div class="pet_sex_container">
                        <h1>Sex</h1>
                        <p>${sex1}</p>
                    </div>
                    <div class="pet_age_container">
                        <h1>Age</h1>
                        <p>${age1}</p>
                    </div>
                </div>
                <div class="pet_lower_detail">
                    <div class="pet_weight_container">
                        <h1>Weight</h1>
                        <p>${weight1}</p>
                    </div>
                    <div class="pet_sterilization_status_container">
                        <h1>Sterilization Status</h1>
                        <p>${sterilizationStatus1}</p>
                    </div>
                </div>
            </div>
        </div>`;

    return petCard;
}
    





    
});




var editPetBackButton = document.getElementById("edit_pet_back_btn");
var editPetSection = document.getElementById("edit_pet");
var view_pet_back_btn = document.getElementById("view_pet_back_btn");
var viewPetSection = document.getElementById("view_pet");
var appointmentListContainer = document.getElementById("appointment_list_heading_button_container");
var petContainer = document.getElementById("pet_container");

var currentSection = petContainer; // Set initial current section to petContainer
var previousSection; // Variable to keep track of the previous section

view_pet_back_btn.addEventListener("click", function () {
    // Show the view_pet section
    viewPetSection.style.display = 'none';
    appointmentListContainer.style.display = 'flex';
    petContainer.style.display = 'flex';
    currentSection = viewPetSection;
});

editPetBackButton.addEventListener("click", function () {
    // Show the previous section
    if (previousSection) {
        previousSection.style.display = 'flex';
        appointmentListContainer.style.display = 'none';
        currentSection.style.display = 'none';
        currentSection = previousSection;
        previousSection = null; // Reset previousSection after using it
    }
});

function showArchiveModal() {
    // Assuming you have a function to show the modal (e.g., showArchiveModalFunction)
    // Replace this with the actual function you use to show your modal
    showArchiveModalFunction();
}

// Assuming you have a list of pet cards with the class 'pet-card' and 'archiveButton' for the Archive button
var petCards = document.querySelectorAll('.pet_card');
var view_pets = document.querySelectorAll('.view_pet');




document.querySelectorAll('.more_button button').forEach(function (button) {
    button.addEventListener('click', function (event) {
        event.preventDefault();
        const action = this.getAttribute('data-action');
        if (action === 'View_pet'){
          pet_card = document.getElementById('card pet_card');
            // Show the view_pet section
            viewPetSection.style.display = 'flex';
            appointmentListContainer.style.display = 'none';
            petContainer.style.display = 'none';
            previousSection = currentSection;
            currentSection = viewPetSection;
            
        }else if (action === 'Edit_pet') {
        // Show the edit_pet section
            editPetSection.style.display = 'flex';
            appointmentListContainer.style.display = 'none';
            petContainer.style.display = 'none';
            previousSection = currentSection;
            currentSection = editPetSection;
            
        }else if (action === 'Archive_pet') {

            showArchiveModalFunction();
        } else if (action === 'Create_appointment') {
            var create_appointment_modal = new bootstrap.Modal(document.getElementById('create_appointment_modal'));
            create_appointment_modal.show();
            
        }

    });
});

view_pets.forEach(view_pet => {
    var edit_pet_btn = view_pet.querySelector('.edit_pet_btn');

    edit_pet_btn.addEventListener('click', function() {
        // Show the editPetSection section
        editPetSection.style.display = 'flex';
        appointmentListContainer.style.display = 'none';
        viewPetSection.style.display = 'none';
        previousSection = currentSection;
        currentSection = editPetSection;
    });
});


// Get the select element
var breedSelect = document.getElementById('Breed');

// Get the specific breed element
var specificBreed = document.getElementById('specific_breed');

// Add an event listener to the select element
breedSelect.addEventListener('change', function () {
    // Check if the selected value is 'other'
    if (breedSelect.value === 'Other') {
        // Show the specific breed element
        specificBreed.style.display = 'flex';
    } else {
        // Hide the specific breed element
        specificBreed.style.display = 'none';
    }
});

// Retrieve all the li elements
const timeOptionsList = document.querySelectorAll('.Appointment_time-option');

// Add a click event listener to each li element
timeOptionsList.forEach(li => {
  li.addEventListener('click', function() {
      // Remove the 'selected-time' class from all time options
      timeOptionsList.forEach(option => {
          option.classList.remove('selected-time');
      });

      // Add the 'selected-time' class to the clicked li
      li.classList.add('selected-time');
      console.log('Selected time:', li.innerText);

      // Find the input element inside the clicked li and trigger a click event on it
      const inputElement = li.querySelector('input[type="radio"]');
      if (inputElement) {
          inputElement.click();
      }

      // Update the selected time in the confirm_time element
      const confirmTimeElement = document.querySelector('.confirm_time');
      confirmTimeElement.innerText = li.innerText;

      checkSelectionAndEnableButton();

      // Check if there is a selected time and log a message
      if (li.classList.contains('selected-time')) {
          console.log('A time has been selected.');
      }
  });
});

function checkSelectionAndEnableButton() {
  const selectedDate = document.querySelector('.selected_date');
  const selectedTime = document.querySelector('.selected-time');
  const nextButton = document.getElementById('next_button');

  if (selectedDate !== null && selectedTime !== null) {
      nextButton.disabled = false;
      nextButton.classList.remove('disabled');
  } else {
      nextButton.disabled = true;
      nextButton.classList.add('disabled');
  }
}

// Call this function at the end of the event listeners for selecting date and time
function updateAppointmentTimeOptionsDisplay() {
const selectedDateElement = document.querySelector('.selected_date');
var timeOptionsContainer = document.getElementById('Appointment_time_options');
  var date_required_message = document.getElementById('date_required_message');

if (selectedDateElement && selectedDateElement.classList.contains('selected-date')) {
  timeOptionsContainer.classList.remove('d-none');
  timeOptionsContainer.style.display = 'flex';
    date_required_message.style.display = 'none';
} else {
  timeOptionsContainer.style.display = 'none';
}
}