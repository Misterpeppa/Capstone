document.addEventListener('DOMContentLoaded', function () {
    
  const book_appointment = document.getElementById('book_appointment');
  const agree = document.getElementById('agree');
  const disagree = document.getElementById('disagree');
  const consent_modal = new bootstrap.Modal(document.getElementById('consent_modal'));
  
  book_appointment.addEventListener('click', function () {
      consent_modal.show();
  });
  
  //hide consent modal
  disagree.addEventListener('click', function () {
      consent_modal.hide();
  });
  
  agree.addEventListener('click', function () {
      consent_modal.hide();
  });
  
  // Function to capitalize the first letter of each word
  function capitalizeFirstLetter(input) {
      return input.replace(/\b\w/g, char => char.toUpperCase());
  }
  
  const nextButton = document.getElementById('next_btn');
  const petNameInput = document.getElementById('petName');
  const breedSelect = document.getElementById('breed');
  const surgeryTypeSelect = document.getElementById('surgery_type');

  const errorpetName = document.getElementById('error-petName');
  addBlurListener(petName, errorpetName);
  
  const petName1 = document.getElementById('petName-1');
  const errorpetName1 = document.getElementById('error-petName-1');
  addBlurListener(petName1, errorpetName1);
  
  const petName2 = document.getElementById('petName-2');
  const errorpetName2 = document.getElementById('error-petName-2');
  addBlurListener(petName2, errorpetName2);
  
  const breed = document.getElementById('breed');
  const errorBreed = document.getElementById('error-breed');
  addBlurListener(breed, errorBreed);
  
  const breed1 = document.getElementById('breed-1');
  const errorBreed1 = document.getElementById('error-breed-1');
  addBlurListener(breed1, errorBreed1);
  
  const breed2 = document.getElementById('breed-2');
  const errorBreed2 = document.getElementById('error-breed-2');
  addBlurListener(breed2, errorBreed2);
  
  const surgeryType = document.getElementById('surgery_type');
  const errorSurgery = document.getElementById('error-surgery');
  addBlurListener(surgeryType, errorSurgery);
  
  const surgeryType1 = document.getElementById('surgery_type-1');
  const errorSurgery1 = document.getElementById('error-surgery-1');
  addBlurListener(surgeryType1, errorSurgery1);
  
  const surgeryType2 = document.getElementById('surgery_type-2');
  const errorSurgery2 = document.getElementById('error-surgery-2');
  addBlurListener(surgeryType2, errorSurgery2);


  // Add input event listeners to relevant elements
  // Event listener for petNameInput
  petNameInput.addEventListener('input', function() {
      petNameInput.value = capitalizeFirstLetter(petNameInput.value);
      checkEnableNextButton();
  });
  breedSelect.addEventListener('change', checkEnableNextButton);
  surgeryTypeSelect.addEventListener('input', checkEnableNextButton);
  
  petName1.addEventListener('input', function() {
      petName1.value = capitalizeFirstLetter(petName1.value);
      checkEnableNextButton1();
  });
  breed1.addEventListener('change', checkEnableNextButton1);
  surgeryType1.addEventListener('input', checkEnableNextButton1);
  
  petName2.addEventListener('input', function() {
      petName2.value = capitalizeFirstLetter(petName2.value);
      checkEnableNextButton2();
  });
  breed2.addEventListener('change', checkEnableNextButton2);
  surgeryType2.addEventListener('input', checkEnableNextButton2);

  
  function checkEnableNextButton() {
      // Check conditions and enable/disable the button
      const isPetNameSelected = (petNameInput.value.trim() !== '');
      const isBreedSelected = (breedSelect.value.trim() !== 'none');
      const isSurgeryTypeSelected = (surgeryTypeSelect.value.trim() !== '');

      nextButton.disabled = !(isPetNameSelected && isBreedSelected && isSurgeryTypeSelected);
      
      // Call the displayConfirmationDetails function
      if (!nextButton.disabled) {
          displayConfirmationDetails();
      }
      
      var addFormButton = document.getElementById('add_form');
      addFormButton.disabled = false;
  }
  
  function checkEnableNextButton1() {
      // Check conditions and enable/disable the button
      const isPetNameSelected = (petName1.value.trim() !== '');
      const isBreedSelected = (breed1.value.trim() !== 'none');
      const isSurgeryTypeSelected = (surgeryType1.value.trim() !== '');

      nextButton.disabled = !(isPetNameSelected && isBreedSelected && isSurgeryTypeSelected);
      
      // Call the displayConfirmationDetails function
      if (!nextButton.disabled) {
          displayConfirmationDetails1();
      }
      
      var addFormButton = document.getElementById('add_form');
  addFormButton.disabled = false;

  }
  
  function checkEnableNextButton2() {
      // Check conditions and enable/disable the button
      const isPetNameSelected = (petName2.value.trim() !== '');
      const isBreedSelected = (breed2.value.trim() !== 'none');
      const isSurgeryTypeSelected = (surgeryType2.value.trim() !== '');

      nextButton.disabled = !(isPetNameSelected && isBreedSelected && isSurgeryTypeSelected);
      
      // Call the displayConfirmationDetails function
      if (!nextButton.disabled) {
          displayConfirmationDetails2();
      }
      var addFormButton = document.getElementById('add_form');
  addFormButton.disabled = false;
  }


  
  function addBlurListener(input, error) {
      input.addEventListener('blur', function () {
          if (input.value.trim() === 'none') {
              error.style.display = 'block';
              input.classList.add('error-border');
              input.classList.add('is-invalid');
          } else if (input.value.trim() === '') {
              error.style.display = 'block';
              input.classList.add('error-border');
              input.classList.add('is-invalid');
          } else {
              error.style.display = 'none';
              input.classList.remove('error-border');
              input.classList.remove('is-invalid');
          }
      });
  }
  
  
  
  
  var add_form = document.getElementById('add_form');
  add_form.addEventListener('click', toggleForm);
  var lineBreak = document.getElementById('lineBreak');
  var lineBreak1 = document.getElementById('lineBreak-1');
  var lineBreak2 = document.getElementById('lineBreak-2');
  var lineBreak3 = document.getElementById('lineBreak-3');
  var lineBreak4 = document.getElementById('lineBreak-4');
  var lineBreak5 = document.getElementById('lineBreak-5');
  var appointment_details1 = document.getElementById('appointment_details-1');
  var appointment_details2 = document.getElementById('appointment_details-2');
  var details1 = document.getElementById('details-1');
  var details2 = document.getElementById('details-2');
  var remove_form = document.getElementById('remove_form');
  var remove_form1 = document.getElementById('remove_form-1');
  var form_fields1 = document.getElementById('form_fields-1');
  var form_fields2 = document.getElementById('form_fields-2');
  
let clickCount = 0;
// Initialize click count to 1
let petCount = 1;

// Update hidden input value on page load
$('#click_count').val(petCount);



function toggleForm() {
      clickCount++;

      if (clickCount <= 2) {
          // Show the next form field
          // Disable the Next button
          nextButton.disabled = true;
          document.getElementById(`form_fields-${clickCount}`).style.display = 'flex';
          
          // Adjust the form height
          setFormHeight();
          
          // Display lineBreak after the first click
          if (clickCount === 1) {
              lineBreak.style.display = 'flex';
              appointment_details1.style.display = 'flex';
              lineBreak2.style.display = 'flex';
              lineBreak4.style.display = 'flex';
              details1.style.display = 'flex';
              remove_form.style.display = 'flex';
              remove_form1.style.display = 'none';

              // Increment click count up to a maximum of 3
              petCount = Math.min(3, petCount + 1);
              // Update hidden input value
              $('#click_count').val(petCount);
              // Log the current value to the console
              console.log('clickCount:', clickCount);
              console.log('petCount:', petCount);
          }
          
          // Disable the add_form button after the second click
          if (clickCount === 2) {
              lineBreak1.style.display = 'flex';
              lineBreak3.style.display = 'flex';
              lineBreak5.style.display = 'flex';
              appointment_details2.style.display = 'flex';
              details2.style.display = 'flex';
              document.getElementById('add_form').disabled = true;
              add_form.style.display = 'none';
              remove_form.style.display = 'none';
              remove_form1.style.display = 'flex';

              // Increment click count up to a maximum of 3
              petCount = Math.min(3, petCount + 1);
              // Update hidden input value
              $('#click_count').val(petCount);
              // Log the current value to the console
              console.log('clickCount:', clickCount);
              console.log('petCount:', petCount);
          }
      }
  }

remove_form.addEventListener('click', function(){
   if (clickCount > 0) {
       clickCount--;
       resetPetDetails();
       form_fields1.style.display = 'none';
       lineBreak.style.display = 'none';
       remove_form.style.display = 'none';
       lineBreak2.style.display = 'none';
       lineBreak4.style.display = 'none';
       appointment_details1.style.display = 'none';
       details1.style.display = 'none';
       
               // Check if clickCount was 2, then re-enable the add_form button
      if (clickCount === 2) {
          document.getElementById('add_form').disabled = false;
      }
      setFormHeight();
          // Decrement click count with a minimum value of 1
      petCount = Math.max(1, petCount - 1);
      // Update hidden input value
      $('#click_count').val(petCount);
      // Log the current value to the console
      console.log('clickCount:', clickCount);
      console.log('petCount:', petCount);
   }

})
  
remove_form1.addEventListener('click', function(){
  
if (clickCount > 0) {
  checkEnableNextButton1();
  clickCount--;
  resetPetDetails1();
  form_fields2.style.display = 'none';   
  lineBreak1.style.display = 'none';
  remove_form1.style.display = 'none';
  remove_form.style.display = 'flex';
  add_form.style.display = 'flex';
  lineBreak3.style.display = 'none';
  lineBreak5.style.display = 'none';
  appointment_details2.style.display = 'none';
  details2.style.display = 'none';
      
  // Check if clickCount was 2, then re-enable the add_form button
  if (clickCount !== 2) {
      document.getElementById('add_form').disabled = false;
  }
  setFormHeight();
      // Decrement click count with a minimum value of 1
      petCount = Math.max(1, petCount - 1);
      // Update hidden input value
      $('#click_count').val(petCount);
      // Log the current value to the console
      console.log('clickCount:', clickCount);
      console.log('petCount:', petCount);
}
  
})


function resetPetDetails() {
  
  checkEnableNextButton();
  
  // Reset petName-1
  document.getElementById('petName-1').value = '';

  // Unselect dog-1 and cat-1 inside dog_cat_btn-1
  document.getElementById('dog-1').checked = false;
  document.getElementById('cat-1').checked = false;

  // Disable breed-1
  document.getElementById('breed-1').disabled = true;
  document.getElementById('surgery_type-1').value = '';
  document.getElementById('floatingTextarea-1').value = '';
  
  
}
  
function resetPetDetails1() {
  
  checkEnableNextButton1();
  
  // Reset petName-1
  document.getElementById('petName-2').value = '';

  // Unselect dog-1 and cat-1 inside dog_cat_btn-1
  document.getElementById('dog-2').checked = false;
  document.getElementById('cat-2').checked = false;

  // Disable breed-1
  document.getElementById('breed-2').disabled = true;
  document.getElementById('surgery_type-2').value = '';
  document.getElementById('floatingTextarea-2').value = '';
}


  

  // Other functions remain the same...

  // Adjust the form height based on the active panel
  function setFormHeight() {
      const activePanel = getActivePanel();
      if (activePanel) {
          const activePanelHeight = activePanel.offsetHeight;
          DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;
      }
  }
  

function makePetSelectionReusable(breedSelectId, dogRadioId, catRadioId, dogBreeds, catBreeds) {
const breedSelect = document.getElementById(breedSelectId);
const dogRadio = document.getElementById(dogRadioId);
const catRadio = document.getElementById(catRadioId);

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

// Function to handle radio button click
function handleRadioClick(selectedRadio, breeds) {
  if (selectedRadio.checked) {
    populateBreeds(breeds);
  } else {
    breedSelect.setAttribute("disabled", "true");
    breedSelect.innerHTML = `<option value="none">Please select type of pet first</option>`;
  }
  // Add any additional logic you need here
}

// Add click event listeners to radio buttons
dogRadio.addEventListener("click", function () {
  handleRadioClick(dogRadio, dogBreeds);
  catRadio.checked = false; // Uncheck the cat radio button
});

catRadio.addEventListener("click", function () {
  handleRadioClick(catRadio, catBreeds);
  dogRadio.checked = false; // Uncheck the dog radio button
});

// Initially, call handleRadioClick to set the initial state based on radio button selection
handleRadioClick(dogRadio, dogBreeds);
}



  // Example usage for the first set of pet elements
  makePetSelectionReusable("breed", "dog", "cat", ["Affenpinscher","Afghan Hound","Airedale Terrier","Akita","Alaskan Malamute","American Bulldog","American Eskimo Dog","American Foxhound","American Pit Bull Terrier","American Staffordshire Terrier","Anatolian Shepherd Dog","Australian Cattle Dog","Australian Shepherd","Australian Terrier","Basenji","Basset Hound","Beagle","Bearded Collie","Bedlington Terrier","Belgian Malinois","Belgian Sheepdog","Belgian Tervuren","Bernese Mountain Dog","Bichon Frise","Black and Tan Coonhound","Bloodhound","Border Collie","Border Terrier","Borzoi","Boston Terrier","Bouvier des Flandres","Boxer","Boykin Spaniel","Briard","Brittany","Brussels Griffon","Bull Terrier","Bulldog","Bullmastiff","Cairn Terrier","Canaan Dog","Cane Corso","Cardigan Welsh Corgi","Cavalier King Charles Spaniel","Chesapeake Bay Retriever","Chihuahua","Chinese Crested","Chinese Shar-Pei","Chow Chow","Clumber Spaniel","Cockapoo","Collie","Coonhound","Corgi","Coton de Tulear","Curly-Coated Retriever","Dachshund","Dalmatian","Dandie Dinmont Terrier","Doberman Pinscher","Dogue de Bordeaux","Dutch Shepherd","English Bulldog","English Cocker Spaniel","English Foxhound","English Setter","English Springer Spaniel","English Toy Spaniel","Entlebucher Mountain Dog","Eskimo Dog","Finnish Lapphund","Finnish Spitz","Flat-Coated Retriever","French Bulldog","German Pinscher","German Shepherd Dog","German Shorthaired Pointer","German Wirehaired Pointer","Giant Schnauzer","Glen of Imaal Terrier","Goldador","Golden Retriever","Goldendoodle","Gordon Setter","Great Dane","Great Pyrenees","Greater Swiss Mountain Dog","Greyhound","Harrier","Havanese","Hound","Hovawart","Hungarian Puli","Hungarian Shepherd","Hungarian Vizsla","Husky","Ibizan Hound","Icelandic Sheepdog","Irish Setter","Irish Terrier","Irish Water Spaniel","Irish Wolfhound","Italian Greyhound","Jack Russell Terrier","Japanese Chin","Japanese Spitz","Japanese Terrier","Keeshond","Kerry Blue Terrier","King Charles Spaniel","Klee Kai","Kuvasz","Labradoodle","Labrador Retriever","Lakeland Terrier","Lancashire Heeler","Leonberger","Lhasa Apso","Lowchen","Maltese","Manchester Terrier","Maremma Sheepdog","Mastiff","Miniature Bull Terrier","Miniature Pinscher","Miniature Schnauzer","Mixed Breed","Mountain Cur","Mountain Dog","Neapolitan Mastiff","Newfoundland","Norfolk Terrier","Norwegian Buhund","Norwegian Elkhound","Norwegian Lundehund","Norwich Terrier","Nova Scotia Duck Tolling Retriever","Old English Sheepdog","Otterhound","Papillon","Pekingese","Pembroke Welsh Corgi","Pharaoh Hound","Pinscher","Pit Bull Terrier","Plott Hound","Podenco Canario","Pointer","Polish Lowland Sheepdog","Pomeranian","Poodle","Portuguese Water Dog","Presacanario","Pug","Puggle","Puli","Pumi","Pyrenees","Redbone Coonhound","Retriever","Rhodesian Ridgeback","Rottweiler","Saint Bernard","Saluki","Samoyed","Schipperke","Scottish Deerhound","Scottish Terrier","Sealyham Terrier","Setter","Shar-Pei","Sheltie","Shiba Inu","Shih Tzu","Siberian Husky","Silky Terrier","Skye Terrier","Sloughi","Small Munsterlander Pointer","Spaniel","Spanish Water Dog","Spitz","Springer Spaniel","Staffordshire Bull Terrier","Standard Schnauzer","Sussex Spaniel","Swedish Vallhund","Terrier","Thai Ridgeback","Tibetan Mastiff","Tibetan Spaniel","Tibetan Terrier","Tosa Inu","Toy Fox Terrier","Treeing Walker Coonhound","Vizsla","Weimaraner","Welsh Corgi","Welsh Terrier","West Highland White Terrier","Whippet","White Shepherd","Wirehaired Pointing Griffon","Xoloitzcuintli","Yorkshire Terrier"]

, ["Abyssinian","American Bobtail","American Curl","American Shorthair","American Wirehair","Balinese","Bengal","Birman","Bombay","British Shorthair","Burmese","Chartreux","Chausie","Cornish Rex","Cymric","Devon Rex","Egyptian Mau","European Burmese","Exotic Shorthair","Havana Brown","Himalayan","Japanese Bobtail","Javanese","Korat","LaPerm","Maine Coon","Manx","Munchkin","Nebelung","Norwegian Forest","Ocicat","Oriental","Persian","Pixie-Bob","Ragamuffin","Ragdoll","Russian Blue","Savannah","Scottish Fold","Selkirk Rex","Siamese","Siberian","Singapura","Snowshoe","Somali","Sphynx","Tonkinese","Turkish Angora","Turkish Van"]
);

  // Example usage for the second set of pet elements
  makePetSelectionReusable("breed-1", "dog-1", "cat-1", ["Affenpinscher","Afghan Hound","Airedale Terrier","Akita","Alaskan Malamute","American Bulldog","American Eskimo Dog","American Foxhound","American Pit Bull Terrier","American Staffordshire Terrier","Anatolian Shepherd Dog","Australian Cattle Dog","Australian Shepherd","Australian Terrier","Basenji","Basset Hound","Beagle","Bearded Collie","Bedlington Terrier","Belgian Malinois","Belgian Sheepdog","Belgian Tervuren","Bernese Mountain Dog","Bichon Frise","Black and Tan Coonhound","Bloodhound","Border Collie","Border Terrier","Borzoi","Boston Terrier","Bouvier des Flandres","Boxer","Boykin Spaniel","Briard","Brittany","Brussels Griffon","Bull Terrier","Bulldog","Bullmastiff","Cairn Terrier","Canaan Dog","Cane Corso","Cardigan Welsh Corgi","Cavalier King Charles Spaniel","Chesapeake Bay Retriever","Chihuahua","Chinese Crested","Chinese Shar-Pei","Chow Chow","Clumber Spaniel","Cockapoo","Collie","Coonhound","Corgi","Coton de Tulear","Curly-Coated Retriever","Dachshund","Dalmatian","Dandie Dinmont Terrier","Doberman Pinscher","Dogue de Bordeaux","Dutch Shepherd","English Bulldog","English Cocker Spaniel","English Foxhound","English Setter","English Springer Spaniel","English Toy Spaniel","Entlebucher Mountain Dog","Eskimo Dog","Finnish Lapphund","Finnish Spitz","Flat-Coated Retriever","French Bulldog","German Pinscher","German Shepherd Dog","German Shorthaired Pointer","German Wirehaired Pointer","Giant Schnauzer","Glen of Imaal Terrier","Goldador","Golden Retriever","Goldendoodle","Gordon Setter","Great Dane","Great Pyrenees","Greater Swiss Mountain Dog","Greyhound","Harrier","Havanese","Hound","Hovawart","Hungarian Puli","Hungarian Shepherd","Hungarian Vizsla","Husky","Ibizan Hound","Icelandic Sheepdog","Irish Setter","Irish Terrier","Irish Water Spaniel","Irish Wolfhound","Italian Greyhound","Jack Russell Terrier","Japanese Chin","Japanese Spitz","Japanese Terrier","Keeshond","Kerry Blue Terrier","King Charles Spaniel","Klee Kai","Kuvasz","Labradoodle","Labrador Retriever","Lakeland Terrier","Lancashire Heeler","Leonberger","Lhasa Apso","Lowchen","Maltese","Manchester Terrier","Maremma Sheepdog","Mastiff","Miniature Bull Terrier","Miniature Pinscher","Miniature Schnauzer","Mixed Breed","Mountain Cur","Mountain Dog","Neapolitan Mastiff","Newfoundland","Norfolk Terrier","Norwegian Buhund","Norwegian Elkhound","Norwegian Lundehund","Norwich Terrier","Nova Scotia Duck Tolling Retriever","Old English Sheepdog","Otterhound","Papillon","Pekingese","Pembroke Welsh Corgi","Pharaoh Hound","Pinscher","Pit Bull Terrier","Plott Hound","Podenco Canario","Pointer","Polish Lowland Sheepdog","Pomeranian","Poodle","Portuguese Water Dog","Presacanario","Pug","Puggle","Puli","Pumi","Pyrenees","Redbone Coonhound","Retriever","Rhodesian Ridgeback","Rottweiler","Saint Bernard","Saluki","Samoyed","Schipperke","Scottish Deerhound","Scottish Terrier","Sealyham Terrier","Setter","Shar-Pei","Sheltie","Shiba Inu","Shih Tzu","Siberian Husky","Silky Terrier","Skye Terrier","Sloughi","Small Munsterlander Pointer","Spaniel","Spanish Water Dog","Spitz","Springer Spaniel","Staffordshire Bull Terrier","Standard Schnauzer","Sussex Spaniel","Swedish Vallhund","Terrier","Thai Ridgeback","Tibetan Mastiff","Tibetan Spaniel","Tibetan Terrier","Tosa Inu","Toy Fox Terrier","Treeing Walker Coonhound","Vizsla","Weimaraner","Welsh Corgi","Welsh Terrier","West Highland White Terrier","Whippet","White Shepherd","Wirehaired Pointing Griffon","Xoloitzcuintli","Yorkshire Terrier"]
, ["Abyssinian","American Bobtail","American Curl","American Shorthair","American Wirehair","Balinese","Bengal","Birman","Bombay","British Shorthair","Burmese","Chartreux","Chausie","Cornish Rex","Cymric","Devon Rex","Egyptian Mau","European Burmese","Exotic Shorthair","Havana Brown","Himalayan","Japanese Bobtail","Javanese","Korat","LaPerm","Maine Coon","Manx","Munchkin","Nebelung","Norwegian Forest","Ocicat","Oriental","Persian","Pixie-Bob","Ragamuffin","Ragdoll","Russian Blue","Savannah","Scottish Fold","Selkirk Rex","Siamese","Siberian","Singapura","Snowshoe","Somali","Sphynx","Tonkinese","Turkish Angora","Turkish Van"]
);

  // Example usage for the third set of pet elements
  makePetSelectionReusable("breed-2", "dog-2", "cat-2", ["Affenpinscher","Afghan Hound","Airedale Terrier","Akita","Alaskan Malamute","American Bulldog","American Eskimo Dog","American Foxhound","American Pit Bull Terrier","American Staffordshire Terrier","Anatolian Shepherd Dog","Australian Cattle Dog","Australian Shepherd","Australian Terrier","Basenji","Basset Hound","Beagle","Bearded Collie","Bedlington Terrier","Belgian Malinois","Belgian Sheepdog","Belgian Tervuren","Bernese Mountain Dog","Bichon Frise","Black and Tan Coonhound","Bloodhound","Border Collie","Border Terrier","Borzoi","Boston Terrier","Bouvier des Flandres","Boxer","Boykin Spaniel","Briard","Brittany","Brussels Griffon","Bull Terrier","Bulldog","Bullmastiff","Cairn Terrier","Canaan Dog","Cane Corso","Cardigan Welsh Corgi","Cavalier King Charles Spaniel","Chesapeake Bay Retriever","Chihuahua","Chinese Crested","Chinese Shar-Pei","Chow Chow","Clumber Spaniel","Cockapoo","Collie","Coonhound","Corgi","Coton de Tulear","Curly-Coated Retriever","Dachshund","Dalmatian","Dandie Dinmont Terrier","Doberman Pinscher","Dogue de Bordeaux","Dutch Shepherd","English Bulldog","English Cocker Spaniel","English Foxhound","English Setter","English Springer Spaniel","English Toy Spaniel","Entlebucher Mountain Dog","Eskimo Dog","Finnish Lapphund","Finnish Spitz","Flat-Coated Retriever","French Bulldog","German Pinscher","German Shepherd Dog","German Shorthaired Pointer","German Wirehaired Pointer","Giant Schnauzer","Glen of Imaal Terrier","Goldador","Golden Retriever","Goldendoodle","Gordon Setter","Great Dane","Great Pyrenees","Greater Swiss Mountain Dog","Greyhound","Harrier","Havanese","Hound","Hovawart","Hungarian Puli","Hungarian Shepherd","Hungarian Vizsla","Husky","Ibizan Hound","Icelandic Sheepdog","Irish Setter","Irish Terrier","Irish Water Spaniel","Irish Wolfhound","Italian Greyhound","Jack Russell Terrier","Japanese Chin","Japanese Spitz","Japanese Terrier","Keeshond","Kerry Blue Terrier","King Charles Spaniel","Klee Kai","Kuvasz","Labradoodle","Labrador Retriever","Lakeland Terrier","Lancashire Heeler","Leonberger","Lhasa Apso","Lowchen","Maltese","Manchester Terrier","Maremma Sheepdog","Mastiff","Miniature Bull Terrier","Miniature Pinscher","Miniature Schnauzer","Mixed Breed","Mountain Cur","Mountain Dog","Neapolitan Mastiff","Newfoundland","Norfolk Terrier","Norwegian Buhund","Norwegian Elkhound","Norwegian Lundehund","Norwich Terrier","Nova Scotia Duck Tolling Retriever","Old English Sheepdog","Otterhound","Papillon","Pekingese","Pembroke Welsh Corgi","Pharaoh Hound","Pinscher","Pit Bull Terrier","Plott Hound","Podenco Canario","Pointer","Polish Lowland Sheepdog","Pomeranian","Poodle","Portuguese Water Dog","Presacanario","Pug","Puggle","Puli","Pumi","Pyrenees","Redbone Coonhound","Retriever","Rhodesian Ridgeback","Rottweiler","Saint Bernard","Saluki","Samoyed","Schipperke","Scottish Deerhound","Scottish Terrier","Sealyham Terrier","Setter","Shar-Pei","Sheltie","Shiba Inu","Shih Tzu","Siberian Husky","Silky Terrier","Skye Terrier","Sloughi","Small Munsterlander Pointer","Spaniel","Spanish Water Dog","Spitz","Springer Spaniel","Staffordshire Bull Terrier","Standard Schnauzer","Sussex Spaniel","Swedish Vallhund","Terrier","Thai Ridgeback","Tibetan Mastiff","Tibetan Spaniel","Tibetan Terrier","Tosa Inu","Toy Fox Terrier","Treeing Walker Coonhound","Vizsla","Weimaraner","Welsh Corgi","Welsh Terrier","West Highland White Terrier","Whippet","White Shepherd","Wirehaired Pointing Griffon","Xoloitzcuintli","Yorkshire Terrier"]
, ["Abyssinian","American Bobtail","American Curl","American Shorthair","American Wirehair","Balinese","Bengal","Birman","Bombay","British Shorthair","Burmese","Chartreux","Chausie","Cornish Rex","Cymric","Devon Rex","Egyptian Mau","European Burmese","Exotic Shorthair","Havana Brown","Himalayan","Japanese Bobtail","Javanese","Korat","LaPerm","Maine Coon","Manx","Munchkin","Nebelung","Norwegian Forest","Ocicat","Oriental","Persian","Pixie-Bob","Ragamuffin","Ragdoll","Russian Blue","Savannah","Scottish Fold","Selkirk Rex","Siamese","Siberian","Singapura","Snowshoe","Somali","Sphynx","Tonkinese","Turkish Angora","Turkish Van"]
);

  
function displayConfirmationDetails() {
  var petNameInput = document.getElementById('petName');
  var dogRadio = document.getElementById('dog');
  var catRadio = document.getElementById('cat');
  var petType = dogRadio.checked ? "Dog" : catRadio.checked ? "Cat" : "";
  var breedSelect = document.getElementById('breed');
  var surgeryTypeSelect = document.getElementById('surgery_type');
  var floatingTextareaInput = document.getElementById('floatingTextarea');

  // Get the detail elements
  var petNameDetail = document.getElementById('petName_Detail');
  var petTypeDetail = document.getElementById('petType_Detail');
  var breedDetail = document.getElementById('petBreed_Detail');
  var surgeryTypeDetail = document.getElementById('surgery_type_Detail');
  var additionalNotesDetail = document.getElementById('additional_Notes_detail');
  
  var confirmPetName = document.getElementById('confirm_Pet_Name');
  var confirmPetType = document.getElementById('confirm_Pet_type');
  var confirmBreed = document.getElementById('confirm_breed');
  var confirmSurgeryType = document.getElementById('confirm_surgery_Type');
  var confirmAdditionalNotes = document.getElementById('confirm_additional_Notes');

  // Set text content of detail elements
  petNameDetail.textContent = petNameInput.value;
  petTypeDetail.textContent = petType;
  breedDetail.textContent = breedSelect.value;
  surgeryTypeDetail.textContent = surgeryTypeSelect.value;
  additionalNotesDetail.textContent = floatingTextareaInput.value;

  // Set text content of confirmation elements
  confirmPetName.textContent = petNameInput.value;
  confirmPetType.textContent = petType;
  confirmBreed.textContent = breedSelect.value;
  confirmSurgeryType.textContent = surgeryTypeSelect.value;
  confirmAdditionalNotes.textContent = floatingTextareaInput.value;
}
  
function displayConfirmationDetails1() {
  var petNameInput1 = document.getElementById('petName-1');
  var dogRadio1 = document.getElementById('dog-1');
  var catRadio1 = document.getElementById('cat-1');
  var petType1 = dogRadio1.checked ? "Dog" : catRadio1.checked ? "Cat" : "";
  var breedSelect1 = document.getElementById('breed-1');
  var surgeryTypeSelect1 = document.getElementById('surgery_type-1');
  var floatingTextareaInput1 = document.getElementById('floatingTextarea-1');

  // Get the detail elements
  const petNameDetail1 = document.getElementById('petName_Detail-1');
  const petTypeDetail1 = document.getElementById('petType_Detail-1');
  const breedDetail1 = document.getElementById('petBreed_Detail-1');
  const surgeryTypeDetail1 = document.getElementById('surgery_type_Detail-1');
  var additionalNotesDetail1 = document.getElementById('additional_Notes_detail-1');
      
  var confirmPetName1 = document.getElementById('confirm_Pet_Name-1');
  var confirmPetType1 = document.getElementById('confirm_Pet_type-1');
  var confirmBreed1 = document.getElementById('confirm_breed-1');
  var confirmSurgeryType1 = document.getElementById('confirm_surgery_Type-1');
  var confirmAdditionalNotes1 = document.getElementById('confirm_additional_Notes-1');
  


  // Set text content of detail elements
  petNameDetail1.textContent = petNameInput1.value;
  petTypeDetail1.textContent = petType1;
  breedDetail1.textContent = breedSelect1.value;
  surgeryTypeDetail1.textContent = surgeryTypeSelect1.value;
  additionalNotesDetail1.textContent = floatingTextareaInput1.value;

  // Set text content of confirmation elements
  confirmPetName1.textContent = petNameInput1.value;
  confirmPetType1.textContent = petType1;
  confirmBreed1.textContent = breedSelect1.value;
  confirmSurgeryType1.textContent = surgeryTypeSelect1.value;
  confirmAdditionalNotes1.textContent = floatingTextareaInput1.value;

      
}
  
function displayConfirmationDetails2() {
  var petNameInput2 = document.getElementById('petName-2');
  var dogRadio2 = document.getElementById('dog-2');
  var catRadio2 = document.getElementById('cat-2');
  var petType2 = dogRadio2.checked ? "Dog" : catRadio2.checked ? "Cat" : "";
  var breedSelect2 = document.getElementById('breed-2');
  var surgeryTypeSelect2 = document.getElementById('surgery_type-2');
  var floatingTextareaInput2 = document.getElementById('floatingTextarea-2');

  // Get the detail elements
  var petNameDetail2 = document.getElementById('petName_Detail-2');
  var petTypeDetail2 = document.getElementById('petType_Detail-2');
  var breedDetail2 = document.getElementById('petBreed_Detail-2');
  var surgeryTypeDetail2 = document.getElementById('surgery_type_Detail-2');
  var additionalNotesDetail2 = document.getElementById('additional_Notes_detail-2');
      
  var confirmPetName2 = document.getElementById('confirm_Pet_Name-2');
  var confirmPetType2 = document.getElementById('confirm_Pet_type-2');
  var confirmBreed2 = document.getElementById('confirm_breed-2');
  var confirmSurgeryType2 = document.getElementById('confirm_surgery_Type-2');
  var confirmAdditionalNotes2 = document.getElementById('confirm_additional_Notes-2');


  // Set text content of detail elements
  petNameDetail2.textContent = petNameInput2.value;
  petTypeDetail2.textContent = petType2;
  breedDetail2.textContent = breedSelect2.value;
  surgeryTypeDetail2.textContent = surgeryTypeSelect2.value;
  additionalNotesDetail2.textContent = floatingTextareaInput2.value;

  // Set text content of confirmation elements
  confirmPetName2.textContent = petNameInput2.value;
  confirmPetType2.textContent = petType2;
  confirmBreed2.textContent = breedSelect2.value;
  confirmSurgeryType2.textContent = surgeryTypeSelect2.value;
  confirmAdditionalNotes2.textContent = floatingTextareaInput2.value;
}





const daysTag = document.querySelector(".days");
const currentDate = document.querySelector(".current-date");
const selectedDateElement = document.getElementById("selected_date");
var prevNextIcon = document.querySelectorAll(".Appointment_icons span");

let selectedDayElement = null;

// getting new date, current year and month
let date = new Date(),
currYear = date.getFullYear(),
currMonth = date.getMonth();

// storing full name of all months in array
const months = [ "January","February","March","April","May","June","July","August","September","October","November","December"
];

function checkSelectionAndEnableButton() {
  const selectedDate = document.querySelector('.selected-date');
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


const renderCalendar = () => {
let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(); // getting first day of month
let lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(); // getting last date of month
let lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(); // getting last day of month
let lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of previous month
let liTag = "";

for (let i = firstDayofMonth; i > 0; i--) {
  // creating li of previous month last days
  liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
}

for (let i = 1; i <= lastDateofMonth; i++) {
  // creating li of all days of current month
  let isToday =
    i === date.getDate() &&
    currMonth === new Date().getMonth() &&
    currYear === new Date().getFullYear()
      ? ""
      : "";
  let isSelected = isToday && i === date.getDate() ? "selected-date" : "";
  liTag += `<li class="${isToday} ${isSelected}" data-day="${i}">${i}</li>`;
  
  
}

for (let i = lastDayofMonth; i < 6; i++) {
  // creating li of next month first days
  liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`;
}
currentDate.innerText = `${months[currMonth]} ${currYear}`; // passing current mon and yr as currentDate text

// Add click event listener to each day element
daysTag.innerHTML = liTag;
const dayElements = daysTag.querySelectorAll("li");

dayElements.forEach(day => {
  day.addEventListener("click", () => {
// Parse the clicked day's dataset to get the day value
const clickedDay = parseInt(day.dataset.day);

// Calculate the date of the clicked day
const selectedDate = new Date(currYear, currMonth, clickedDay);

// Get the current date
const currentDate = new Date();
currentDate.setHours(0, 0, 0, 0); // Remove time portion for comparison

// Check if the clicked day is not in the past
if (selectedDate >= currentDate) {
  const dayOfWeek = selectedDate.getDay(); // Get the day of the week (0 for Sunday, 1 for Monday, ..., 6 for Saturday)

  if (dayOfWeek !== 0 && dayOfWeek !== 6) { // Check if it's not Sunday (0) or Saturday (6)
    if (selectedDayElement) {
      selectedDayElement.classList.remove("selected-date");
    }
    day.classList.add("selected-date");
    selectedDayElement = day;
    day.dataset.selectedDate = selectedDate.toISOString(); // Store the selected date in ISO format

    // Update the 'date' variable with the selected date
    date = selectedDate;

    const confirmDateElement = document.getElementById('confirm_date');

    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    selectedDateElement.innerText = date.toLocaleDateString(undefined, options);
    confirmDateElement.innerText = selectedDateElement.innerText; // Update the confirmDateElement with the selected date
    
    updateAppointmentTimeOptionsDisplay(); // Call the function after updating the selectedDayElement
    displayConfirmationDetails1();

    setFormHeight();
  }
  
}

});


  // Change the cursor style for previous dates and Sundays/Saturdays
const dayDate = new Date(currYear, currMonth, parseInt(day.dataset.day));

if (dayDate < new Date() ) {
  day.classList.add("disabled");
  day.style.cursor = "not-allowed"; // Change the cursor style
}

    checkSelectionAndEnableButton();
    
});

};
renderCalendar();

prevNextIcon.forEach(icon => {
// getting prev and next icons
icon.addEventListener("click", () => {
  // adding click event on both icons
  // if clicked icon is previous icon then decrement current month by 1 else increment it by 1
  currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

  if (currMonth < 0 || currMonth > 11) {
    // if current month is less than 0 or greater than 11
    // creating a new date of current year & month and pass it as date value
    date = new Date(currYear, currMonth, new Date().getDate());
    currYear = date.getFullYear(); // updating current year with new date year
    currMonth = date.getMonth(); // updating current month with new date month
  } else {
    date = new Date(); // pass the current date as date value
  }
  renderCalendar(); // calling renderCalendar function
});
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

  // Find the input element inside the clicked li and trigger a click event on it
  const inputElement = li.querySelector('input[type="radio"]');
  if (inputElement) {
    inputElement.click();
  }
    
  // Update the selected time in the confirm_time element
  const confirmTimeElement = document.querySelector('.confirm_time');
  confirmTimeElement.innerText = li.innerText;
    
    checkSelectionAndEnableButton();
});

});

function checkSelectionAndEnableButton() {
  const selectedDate = document.querySelector('.selected-date');
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
const selectedDateElement = document.querySelector('.selected-date');
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


  });