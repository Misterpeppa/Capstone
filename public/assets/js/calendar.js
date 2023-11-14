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

    // Update the 'date' variable with the selected date
    date = selectedDate;

    const confirmDateElement = document.querySelector('.confirm_date');

    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    selectedDateElement.innerText = date.toLocaleDateString(undefined, options);
    confirmDateElement.innerText = selectedDateElement.innerText; // Update the confirmDateElement with the selected date
    
    updateAppointmentTimeOptionsDisplay(); // Call the function after updating the selectedDayElement
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
  const timeOptionsContainer = document.getElementById('Appointment_time_options');

  if (selectedDateElement && selectedDateElement.classList.contains('selected-date')) {
    timeOptionsContainer.classList.remove('d-none');
    timeOptionsContainer.style.display = 'flex';
  } else {
    timeOptionsContainer.style.display = 'none';
  }
}
