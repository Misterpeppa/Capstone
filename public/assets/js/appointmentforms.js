document.addEventListener('DOMContentLoaded', function () {
    
 
  

  
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
      const isSurgeryTypeSelected = (surgeryTypeSelect.value.trim() !== 'none');

      nextButton.disabled = !(isPetNameSelected && isBreedSelected && isSurgeryTypeSelected);
      
      // Call the displayConfirmationDetails function
      if (!nextButton.disabled) {
          displayConfirmationDetails();
      }
  }
  
  function checkEnableNextButton1() {
      // Check conditions and enable/disable the button
      const isPetNameSelected = (petName1.value.trim() !== '');
      const isBreedSelected = (breed1.value.trim() !== 'none');
      const isSurgeryTypeSelected = (surgeryType1.value.trim() !== 'none');

      nextButton.disabled = !(isPetNameSelected && isBreedSelected && isSurgeryTypeSelected);
      
      // Call the displayConfirmationDetails function
      if (!nextButton.disabled) {
          displayConfirmationDetails1();
      }

  }
  
  function checkEnableNextButton2() {
      // Check conditions and enable/disable the button
      const isPetNameSelected = (petName2.value.trim() !== '');
      const isBreedSelected = (breed2.value.trim() !== 'none');
      const isSurgeryTypeSelected = (surgeryType2.value.trim() !== 'none');

      nextButton.disabled = !(isPetNameSelected && isBreedSelected && isSurgeryTypeSelected);
      
      // Call the displayConfirmationDetails function
      if (!nextButton.disabled) {
          displayConfirmationDetails2();
      }
  }


  
  function addBlurListener(input, error) {
      input.addEventListener('blur', function () {
          if (input.value.trim() === 'none') {
              error.style.display = 'block';
              input.classList.add('error-border');
          } else if (input.value.trim() === '') {
              error.style.display = 'block';
              input.classList.add('error-border');
          } else {
              error.style.display = 'none';
              input.classList.remove('error-border');
          }
      });
  }
  
  
  
  
  const add_form = document.getElementById('add_form');
  add_form.addEventListener('click', toggleForm);
  const lineBreak = document.getElementById('lineBreak');
  const lineBreak1 = document.getElementById('lineBreak-1');
  const lineBreak2 = document.getElementById('lineBreak-2');
  const lineBreak3 = document.getElementById('lineBreak-3');
  const lineBreak4 = document.getElementById('lineBreak-4');
  const lineBreak5 = document.getElementById('lineBreak-5');
  const appointment_details1 = document.getElementById('appointment_details-1');
  const appointment_details2 = document.getElementById('appointment_details-2');
  const details1 = document.getElementById('details-1');
  const details2 = document.getElementById('details-2');
  const remove_form = document.getElementById('remove_form');
  





function resetInputFields(formId) {
  // Reset the input fields within the specified form field
  const form = document.getElementById(formId);

  // Example: Assuming petName is the input field to be reset
  const petNameInput = form.querySelector('#petName');
  petNameInput.value = ''; // Reset the value, you can do this for other input fields

  // Reset other input fields as needed
}

  let clickCount = 0;

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
          }
      }
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
          // Add any additional logic you need here
      }

      // Add change event listeners to radio buttons
      dogRadio.addEventListener("change", toggleBreedSelect);
      catRadio.addEventListener("change", toggleBreedSelect);

      // Initially, call toggleBreedSelect to set the initial state based on radio button selection
      toggleBreedSelect();
  }

  // Example usage for the first set of pet elements
  makePetSelectionReusable("breed", "dog", "cat", ["Affenpinscher", "Yorkshire Terrier"], ["Abyssinian", "Turkish Van"]);

  // Example usage for the second set of pet elements
  makePetSelectionReusable("breed-1", "dog-1", "cat-1", ["Bulldog", "Labrador", "Poodle"], ["Siamese", "Persian", "Maine Coon"]);

  // Example usage for the third set of pet elements
  makePetSelectionReusable("breed-2", "dog-2", "cat-2", ["Dachshund", "Golden Retriever", "Beagle"], ["Russian Blue", "Bengal", "Sphynx"]);

  
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
const prevNextIcon = document.querySelectorAll(".Appointment_icons span");
const timeOptionsContainer = document.getElementById("Appointment_time_options");

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
  if (selectedDayElement) {
    selectedDayElement.classList.remove("selected-date");
  }
  day.classList.add("selected-date");
  selectedDayElement = day;
  day.dataset.selectedDate = selectedDate.toISOString(); // Store the selected date in ISO format

  // Update the 'date' variable with the selected date
  date = selectedDate;

  const confirmDateElement = document.getElementById('confirm_date');
  const confirmDateElement1 = document.getElementById('confirm_date-1');
    const confirmDateElement2 = document.getElementById('confirm_date-2');


  const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
  selectedDateElement.innerText = date.toLocaleDateString(undefined, options);
  confirmDateElement.innerText = selectedDateElement.innerText; // Update the confirmDateElement with the selected date
  confirmDateElement1.innerText = selectedDateElement.innerText;
    confirmDateElement2.innerText = selectedDateElement.innerText;
  
  updateAppointmentTimeOptionsDisplay(); // Call the function after updating the selectedDayElement
    displayConfirmationDetails1();
}
});

    

  // Change the cursor style for previous dates
  const dayDate = new Date(currYear, currMonth, parseInt(day.dataset.day));
  if (dayDate < new Date()) {
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
  const confirmTimeElement1 = document.getElementById('confirm_time-1');
  const confirmTimeElement2 = document.getElementById('confirm_time-2');
  confirmTimeElement.innerText = li.innerText;
    confirmTimeElement1.innerText = li.innerText;
    confirmTimeElement2.innerText = li.innerText;
    
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
const timeOptionsContainer = document.getElementById('Appointment_time_options');

if (selectedDateElement && selectedDateElement.classList.contains('selected-date')) {
  timeOptionsContainer.classList.remove('d-none');
  timeOptionsContainer.style.display = 'flex';
} else {
  timeOptionsContainer.style.display = 'none';
}
}

  });

//   <script>
//   // Wait for the document to be ready
//      document.addEventListener("DOMContentLoaded", function () {
//          // Get references to the <span> elements
//          const petNameId = document.getElementById("confirm_Pet_name");
//          const petTypeId = document.getElementById("confirm_Pet_type");
//          const breedId = document.getElementById("confirm_breed");
//          const appointmentTypeId = document.getElementById("confirm_surgery_type");
//          const notesId = document.getElementById("confirm_additional_notes");
//          const appointmentDateId = document.getElementById("confirm_date");
//          const appointmentTimeId = document.getElementById("confirm_time");
//          // 2nd Form IDs
//          const petNameId1 = document.getElementById("confirm_Pet_name-1");
//          const petTypeId1 = document.getElementById("confirm_Pet_type-1");
//          const breedId1 = document.getElementById("confirm_breed-1");
//          const appointmentTypeId1 = document.getElementById("confirm_surgery_type-1");
//          const notesId1 = document.getElementById("confirm_additional_notes-1");
//          const appointmentDateId1 = document.getElementById("confirm_date-1");
//          const appointmentTimeId1 = document.getElementById("confirm_time-1");
//          // 3rd Form IDs
//          const petNameId2 = document.getElementById("confirm_Pet_name-2");
//          const petTypeId2 = document.getElementById("confirm_Pet_type-2");
//          const breedId2 = document.getElementById("confirm_breed-2");
//          const appointmentTypeId2 = document.getElementById("confirm_surgery_type-2");
//          const notesId2 = document.getElementById("confirm_additional_notes-2");
//          const appointmentDateId2 = document.getElementById("confirm_date-2");
//          const appointmentTimeId2 = document.getElementById("confirm_time-2");

//          const petNameInput = document.getElementById("hidden_petName");
//          const petTypeInput = document.getElementById("hidden_petType");
//          const breedInput = document.getElementById("hidden_breed");
//          const appointmentTypeInput = document.getElementById("hidden_appointmentType");
//          const notesInput = document.getElementById("hidden_notes");
//          const appointmentDateInput = document.getElementById("hidden_appointmentDate");
//          const appointmentTimeInput = document.getElementById("hidden_appointmentTime");
//          // 2nd Form Inputs
//          const petNameInput1 = document.getElementById("hidden_petName-1");
//          const petTypeInput1 = document.getElementById("hidden_petType-1");
//          const breedInput1 = document.getElementById("hidden_breed-1");
//          const appointmentTypeInpu1t = document.getElementById("hidden_appointmentType-1");
//          const notesInput1 = document.getElementById("hidden_notes-1");
//          const appointmentDateInput1 = document.getElementById("hidden_appointmentDate-1");
//          const appointmentTimeInput1 = document.getElementById("hidden_appointmentTime-1");
//          // 3rd Form Inputs
//          const petNameInput2 = document.getElementById("hidden_petName-2");
//          const petTypeInput2 = document.getElementById("hidden_petType-2");
//          const breedInput2 = document.getElementById("hidden_breed-2");
//          const appointmentTypeInput2 = document.getElementById("hidden_appointmentType-2");
//          const notesInput2 = document.getElementById("hidden_notes-2");
//          const appointmentDateInput2 = document.getElementById("hidden_appointmentDate-2");
//          const appointmentTimeInput2 = document.getElementById("hidden_appointmentTime-2");

//          // Set the values of the hidden <input> elements to the values from the <span> elements
//          document.getElementById('form3').addEventListener("submit", function () {
//          petNameInput.value = petNameId.innerText;
//          petTypeInput.value = petTypeId.innerText;
//          breedInput.value = breedId.innerText;
//          appointmentTypeInput.value = appointmentTypeId.innerText;
//          notesInput.value = notesId.innerText;
//          appointmentDateInput.value = appointmentDateId.innerText;
//          appointmentTimeInput.value = appointmentTypeId.innerText;

//          petNameInput1.value = petNameId1.innerText;
//          petTypeInput1.value = petTypeId1.innerText;
//          breedInput1.value = breedId1.innerText;
//          appointmentTypeInput1.value = appointmentTypeId1.innerText;
//          notesInput1.value = notesId1.innerText;
//          appointmentDateInput1.value = appointmentDateId1.innerText;
//          appointmentTimeInput1.value = appointmentTypeId1.innerText;

//          petNameInput2.value = petNameId2.innerText;
//          petTypeInput2.value = petTypeId2.innerText;
//          breedInput2.value = breedId2.innerText;
//          appointmentTypeInput2.value = appointmentTypeId2.innerText;
//          notesInput2.value = notesId2.innerText;
//          appointmentDateInput2.value = appointmentDateId2.innerText;
//          appointmentTimeInput2.value = appointmentTypeId2.innerText;
//          });

//          function submitForm() {
//          event.preventDefault(); // Prevent the default form submission
//          console.log('Button clicked');
//          const myForm = document.getElementById("form3");
//          const formData = new FormData(myForm);

//          // Simulate form submission with ajax
//          $.ajax({
//              type: 'POST',
//              url: '/user/appointment', // Replace with your server endpoint
//              data: myForm,
//              processData: false,
//              contentType: false,
//              headers: {
//              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//              },
//              success: function (response) {
//                  console.log(response);
//                  // Handle the success response as needed
//              },
//              error: function (error) {
//                  console.error('Error:', error);
//                  // Handle the error as needed
//              }
//          });
//          }
//      });

//      const agree = document.getElementById('agree');
//      const disagree = document.getElementById('disagree');
//      const consent_modal = new bootstrap.Modal(document.getElementById('consent_modal'));
//      const book_appointment_success = new bootstrap.Modal(document.getElementById('book_appointment_success'));


//  </script>
