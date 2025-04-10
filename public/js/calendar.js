const daysTag = document.querySelector(".days"),
currentDate = document.querySelector(".current-date"),
prevNextIcon = document.querySelectorAll(".Appointment_icons span");
let selectedDayElement = null;

// getting new date, current year and month
let date = new Date(),
currYear = date.getFullYear(),
currMonth = date.getMonth();

// storing full name of all months in array
const months = ["January", "February", "March", "April", "May", "June", "July",
              "August", "September", "October", "November", "December"];

const renderCalendar = () => {
    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // getting first day of month
    lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // getting last date of month
    lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // getting last day of month
    lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of previous month
    let liTag = "";

    for (let i = firstDayofMonth; i > 0; i--) { // creating li of previous month last days
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }

    for (let i = 1; i <= lastDateofMonth; i++) {// creating li of all days of current month
        let isToday = i === date.getDate() && currMonth === new Date().getMonth()
                     && currYear === new Date().getFullYear() ? "active" : "";
        let isSelected = isToday && i === date.getDate() ? "selected" : "";
        liTag += `<li class="${isToday} ${isSelected}" data-day="${i}">${i}</li>`;
    }



    for (let i = lastDayofMonth; i < 6; i++) { // creating li of next month first days
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`
    }
    currentDate.innerText = `${months[currMonth]} ${currYear}`; // passing current mon and yr as currentDate text


    // Add click event listener to each day element
    daysTag.innerHTML = liTag;
    const dayElements = daysTag.querySelectorAll("li");

    dayElements.forEach(day => {
        day.addEventListener('click', () => {
            // Check if the clicked day is not disabled (i.e., not a previous day)
            if (!day.classList.contains('disabled')) {
                if (selectedDayElement) {
                    selectedDayElement.classList.remove('selected');
                }
                selectedDayElement = day;
                selectedDayElement.classList.add('selected');
                const selectedDate = new Date(currYear, currMonth, parseInt(day.dataset.day));
                date = selectedDate;
                updateDisplay(); // Call the updateDisplay function to show the selected day
                isForm2Complete(); // Call the form completion check function
            }
        });

        // Change the cursor style for previous dates
        const dayDate = new Date(currYear, currMonth, parseInt(day.dataset.day));
        if (dayDate < new Date()) {
            day.classList.add('disabled');
            day.style.cursor = 'not-allowed'; // Change the cursor style
        }
    });
}
renderCalendar();



prevNextIcon.forEach(icon => { // getting prev and next icons
    icon.addEventListener("click", () => { // adding click event on both icons
        // if clicked icon is previous icon then decrement current month by 1 else increment it by 1
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

        if(currMonth < 0 || currMonth > 11) { // if current month is less than 0 or greater than 11
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
