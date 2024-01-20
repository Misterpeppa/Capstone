document.addEventListener('DOMContentLoaded', function () {
    var add_client = document.getElementById('add_client');
    var add_client_btn = document.getElementById('add_client_btn');
    var add_client_btn_1 = document.getElementById('add_client_btn_1');
    var add_pet_btn = document.getElementById('add_pet_btn');
    var archive_button = document.getElementById('archive_button');

    var add_pet_record_modal = new bootstrap.Modal(document.getElementById('add_pet_record_modal'));
    var add_pet_record_modal1 = new bootstrap.Modal(document.getElementById('add_pet_record_modal-1'));
    var add_pet_record_modal2 = new bootstrap.Modal(document.getElementById('add_pet_record_modal-2'));
    var add_client_modal = new bootstrap.Modal(document.getElementById('add_client_modal'));
    var add_client_modal1 = new bootstrap.Modal(document.getElementById('add_client_modal-1'));
    var archive_modal = new bootstrap.Modal(document.getElementById('archive_modal'));
    var archive_modal1 = new bootstrap.Modal(document.getElementById('archive_modal-1'));
    var archive_modal2 = new bootstrap.Modal(document.getElementById('archive_modal-2'));
                
    
    var add_client_success = new bootstrap.Modal(document.getElementById('add_client_success'));
    
    
    var submit_Client = document.getElementById('submit_Client');
  
    add_client.addEventListener('click', function () {
    add_client_modal.show();
        
        
  });
    
    add_client_btn.addEventListener('click', function () {
    add_client_modal1.show();
  });
    
    add_client_btn_1.addEventListener('click', function () {
    add_client_modal1.show();
  });
    
    add_pet_btn.addEventListener('click', function () {
    add_pet_record_modal.show();
  });
    
    submit_Client.addEventListener('click', function () {
        add_client_modal.hide();
        add_client_success.show();
        // Hide the modal after 2000 milliseconds (2 seconds)
        setTimeout(function () {
            add_client_success.hide();
        }, 2000);
    });
    
    archive_button.addEventListener('click', function () {
    // Assuming you have a function to get the selected data rows (replace it with your actual logic)
    var selectedDataRows = getSelectedDataRows();

    // Check the number of selected data rows
    if (selectedDataRows.length > 1) {
        // Show archive_modal2 if there are more than 1 selected data row
        archive_modal1.show();
    } else if (selectedDataRows.length === 1) {
        // Show archive_modal1 if there is only 1 selected data row
        archive_modal.show();
    } else {
        // Handle the case when no data row is selected, if needed
        console.log('No data row selected.');
    }
});

    // Function to get the selected data rows (replace it with your actual logic)
    function getSelectedDataRows() {
    // Implement the logic to retrieve selected data rows
    // For example, you might use a class or attribute to mark selected rows
    // and query the DOM to get those rows
    // For demonstration purposes, this function returns an array of selected rows
    return document.querySelectorAll('.selected-row');
}

        var empty_state_container = document.getElementById('empty_state_container');
         var client_table_container = document.getElementById('client_table_container');
        
        //hide empty state and show table container
        empty_state_container.style.display = 'none';
        client_table_container.style.display = 'flex';
        //get reference IDs
        showAddClientSplitBtn();

        
    // Get form values
    var firstName = document.getElementById("first_name").value;
    var middleName = document.getElementById("middle_name").value;
    var lastName = document.getElementById("last_name").value;
    var suffix = document.getElementById("suffix").value;
    var birthdate = document.getElementById("client_birthdate").value;
    var address = document.getElementById("client_address").value;
    var email = document.getElementById("client_email").value;
    var phoneNumber = document.getElementById("user_phone").value;
        
        

    // // Construct the client data
    // var clientData = {
    //     name: firstName + ' ' + (middleName ? middleName + ' ' : '') + lastName + (suffix ? ' ' + suffix : ''),
    //     email: email,
    //     phoneNumber: phoneNumber,
    //     address: address,
    //     // Add more properties as needed
    // };

    // // Create a new row in the table
    // var tableBody = document.getElementById("client_table_body");
    // var newRow = tableBody.insertRow(tableBody.rows.length);

    // // Add cells to the new row
    // var checkboxCell = newRow.insertCell(0);
    // var nameCell = newRow.insertCell(1);
    // var emailCell = newRow.insertCell(2);
    // var phoneNumberCell = newRow.insertCell(3);
    // var addressCell = newRow.insertCell(4);
    // var visitsCell = newRow.insertCell(5);
    // var lastVisitCell = newRow.insertCell(6);
    // var actionCell = newRow.insertCell(7);

    // Populate cells with data
   
        
    
    // Optionally, you can add additional logic, such as resetting the form
    document.getElementById("add_client_form").reset();

// Add an event listener for the buttons inside dropdown-content
        document.querySelectorAll('.button-action button').forEach(function (button) {
    button.addEventListener('click', function (event) {
        closeDropdownMenus();
        event.preventDefault();
        const action = this.getAttribute('data-action');
        if (action === 'Add_Pet') {
            // Show the add_pet_record_modal
                            
            add_pet_record_modal.show();

            
        }else if (action === 'View'){
            const client_container = document.getElementById('client_container');
            const view_client = document.getElementById('view_client');
            
            client_container.style.display = 'none';
            view_client.style.display= 'flex';
            
        }else if (action === 'Edit') {
            const edit_client_detail_header = document.getElementById('edit_client_detail_header');
            const edit_client = document.getElementById('edit_client');
            const client_header = document.getElementById('client_header');
            const client_container = document.getElementById('client_container');
                            
            client_header.style.display = 'none';
            client_container.style.display = 'none';
            edit_client_detail_header.style.display = 'flex';
            edit_client.style.display = 'flex';
            
        }else if (action === 'Archive') {
            // Handle the "Archive" action here
            // Add your logic for this action

            // Show the archive_modal
            var archive_modal = document.getElementById('archive_modal');
            if (archive_modal) {
                // Display the modal using Bootstrap's modal methods
                var bootstrapModal = new bootstrap.Modal(archive_modal);
                bootstrapModal.show();

                // Optionally, you can attach an event listener to the modal's confirm button
                var confirmButton = document.getElementById('archive_confirm_button');
                if (confirmButton) {
                    confirmButton.addEventListener('click', function() {
                        // User confirmed the archiving action
                        // Add your logic for this action

                        var row = button.closest('tr');
                        // Optionally, you can add an animation or confirmation dialog before archiving
                        // Perform the archiving logic (e.g., hide the row)
                        row.style.display = 'none';

                        // Close the archive_modal after archiving
                        bootstrapModal.hide();
                    });
                }
            }
        }

    });
});
        


// Function to close all dropdown menus
function closeDropdownMenus() {
    document.querySelectorAll('.dropdown-content').forEach(function (content) {
        content.style.display = 'none';
    });
}

// Event listener to close dropdown menus when clicking outside
document.addEventListener('click', function (event) {
    if (!event.target.matches('.dropbtn')) {
        closeDropdownMenus();
    }
});
       
document.querySelectorAll('.dropbtn').forEach(function (button) {
    button.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent the click event from propagating
        const content = this.nextElementSibling;
        if (content.style.display === 'flex') {
            content.style.display = 'none';
        } else if (content.style.display === 'flex'){
            content.style.display = 'none';
        }else {
            content.style.display = 'flex';
        }
    });
});

        

    
    var cancel_edit = document.getElementById('cancel_edit');
    var edit_discard = new bootstrap.Modal(document.getElementById('edit_discard'));
    cancel_edit.addEventListener('click', function () {
        edit_discard.show();
      });
    
    var return_btn = document.getElementById('return_btn');
    return_btn.addEventListener('click', function () {
        edit_discard.hide();
      });
    
    var discard_btn = document.getElementById('discard_btn');
    discard_btn.addEventListener('click', function () {
        edit_discard.hide();
      });
    
    var edit_save_changes = document.getElementById('edit_save_changes');
    var save_changes_success = new bootstrap.Modal(document.getElementById('save_changes_success'));
    edit_save_changes.addEventListener('click', function () {
        save_changes_success.show();
        // Hide the modal after 2000 milliseconds (2 seconds)
        setTimeout(function () {
            save_changes_success.hide();
        }, 2000);
      });
    
    var add_pet_success = new bootstrap.Modal(document.getElementById('add_pet_success'));
    
    function showAddClientSplitBtn() {
    var addClientSplitBtn = document.getElementById("add_client_split_btn");
    if (addClientSplitBtn) {
        addClientSplitBtn.style.display = "flex";
    }
}
    var view_client_back_btn = document.getElementById('view_client_back_btn');
    view_client_back_btn.addEventListener('click', function() {
        closeViewClientInfo();
    });
    
    var edit_client_back_btn = document.getElementById('edit_client_back_btn');
    edit_client_back_btn.addEventListener('click', function() {
        closeEditClientInfo();
    });
    
    function closeViewClientInfo(){
        const view_client = document.getElementById('view_client');
        const client_container = document.getElementById('client_container');

        client_container.style.display = 'flex';
        view_client.style.display = 'none';
    }
    
    function closeEditClientInfo(){
        const client_header = document.getElementById('client_header');
        const view_client = document.getElementById('view_client');
        const edit_client_detail_header = document.getElementById('edit_client_detail_header');
        const edit_client = document.getElementById('edit_client');

        client_header.style.display = 'flex';
        view_client.style.display = 'flex';
        edit_client_detail_header.style.display = 'none';
        edit_client.style.display = 'none';
    }

 
        

function setupBreedOptions(petTypeId, breedId, breedOptions) {
    // Get references to the pet type and breed select elements
    var petTypeSelect = document.getElementById(petTypeId);
    var breedSelect = document.getElementById(breedId);

    // Event listener for the pet type select change event
    petTypeSelect.addEventListener('change', function () {
        // Enable the breed select and clear its options
        breedSelect.disabled = false;
        breedSelect.innerHTML = '<option value="" selected>Select a Breed</option>';

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
setupAgeCalculation('pet_birthdate', 'age', 'pet_type');

// Example usage for the second set of IDs
setupAgeCalculation('pet_birthdate-1', 'age-1', 'pet_type-1');

// Example usage for the third set of IDs
setupAgeCalculation('pet_birthdate-2', 'age-2', 'pet_type-2');


       
    
    //show prod details clickign view
 function handleEditClientDetailClick() {

        var view_client = document.getElementById('view_client');
        var client_header = document.getElementById('client_header');
        var edit_client_detail_header = document.getElementById('edit_client_detail_header');
        var edit_client = document.getElementById('edit_client');
     

        // Show prod_detail
        edit_client_detail_header.style.display = 'flex';
       edit_client.style.display ='flex';

        // Hide view_product and InventoryContainer
        view_client.style.display = 'none';
        client_header.style.display = 'none';
    }

    // Get the edit_prod_detail button element
    var edit_client_detail = document.getElementById('edit_client_detail');

    // Add event listener to the edit_prod_detail button
    edit_client_detail.addEventListener('click', handleEditClientDetailClick);
    
    

    var submit_pet = document.getElementById('submit_pet');
    var pet_empty_state_container = document.getElementById('pet_empty_state_container');
    var pet_card_container = document.getElementById('pet_card_container');
    var add_pet_button = document.getElementById('add_pet_button');

    submit_pet.addEventListener('click', function () {

        pet_empty_state_container.style.display = 'none';
        pet_card_container.style.display = 'flex';
        add_pet_button.style.display = 'flex';
        add_pet_record_modal.hide();
        add_pet_success.show();
        // Hide the modal after 2000 milliseconds (2 seconds)
        setTimeout(function () {
            add_pet_success.hide();
        }, 2000);
    });
    
    var submit_pet1 = document.getElementById('submit_pet-1');

    submit_pet1.addEventListener('click', function () {

        pet_empty_state_container.style.display = 'none';
        pet_card_container.style.display = 'flex';
        add_pet_button.style.display = 'flex';
        add_pet_record_modal1.hide();
        add_pet_success.show();
        // Hide the modal after 2000 milliseconds (2 seconds)
        setTimeout(function () {
            add_pet_success.hide();
        }, 2000);
    });

    add_pet_button.addEventListener('click', function () {
        add_pet_record_modal1.show();
    });

    var submit_pet2 = document.getElementById('submit_pet-2');

    var petCounter = 1; // Counter to keep track of the number of pet cards

submit_pet2.addEventListener('click', function() {
    
    add_pet_success.show();
    // Hide the modal after 2000 milliseconds (2 seconds)
        setTimeout(function () {
            add_pet_success.hide();
        }, 2000);
    // Clone the original pet_card
    var newPetCard = pet_card.cloneNode(true);

    // Modify the ID of the new pet_card
    newPetCard.id = 'pet_card_' + petCounter;

    // Set a unique data-pet-id attribute for the new pet_card
    newPetCard.dataset.petId = 'pet_card_' + petCounter;

    // Append the new pet_card to the container
    pet_card_container.appendChild(newPetCard);

    // update other attributes or content of the new pet_card if needed

    // Increment the counter for the next iteration
    petCounter++;
    
    pet_empty_state_container.style.display = 'none';
        pet_card_container.style.display = 'flex';
        add_pet_button.style.display = 'flex'
    
    add_pet_record_modal1.hide();
});

// Add a click event listener to each "Archive" menu inside a pet_card
document.querySelectorAll('.pet_card .dropdown-menu.more_button .dropdown-item#Archive').forEach(function (archiveMenu) {
    archiveMenu.addEventListener('click', function (event) {
        // Stop the event from propagating to the parent dropdown, which might hide the dropdown prematurely
        event.stopPropagation();

        // Find the closest parent with the class 'pet_card'
        var petCard = this.closest('.pet_card');

        // Check if a pet_card was found
        if (petCard) {
            // Get the unique ID from the pet_card's data-pet-id attribute
            var petCardId = petCard.dataset.petId;

            // Call the archivePetCard function with the specific petCardId
            archivePetCard(petCardId);
        }
    });
});

    

function archivePetCard(petCardId) {
    var archive_modal2 = document.getElementById('archive_modal-2');

    if (archive_modal2) {
        // Display the modal using Bootstrap's modal methods
        var bootstrapModal = new bootstrap.Modal(archive_modal2);
        bootstrapModal.show();

        // Optionally, you can attach an event listener to the modal's confirm button
        var confirmButton = document.getElementById('archive_confirm_button-2');

        if (confirmButton) {
            confirmButton.addEventListener('click', function () {
                // User confirmed the archiving action
                // Add your logic for this action

                var pet_card = document.getElementById(petCardId);

                if (pet_card) {
                    // Hide or remove the pet_card based on your requirements
                    pet_card.style.display = 'none';

                    // Optionally, you can add an animation or confirmation dialog before archiving
                }

                // Close the archive_modal after archiving
                bootstrapModal.hide();
            });
        }
    }

    // You can add additional logic here to perform any other actions related to archiving
    // For example, you might want to make an API request to update the server that the pet is archived.
}
    
 const inputs = ['first_name', 'middle_name', 'last_name', 'first_name-1', 'middle_name-1', 'last_name-1', 'pet_name', 'pet_name-1', 'first_name-2', 'middle_name-2', 'last_name-2'];

inputs.forEach(inputId => {
    document.getElementById(inputId).addEventListener('input', function () {
        let inputValue = this.value;
        let regex = /^[a-zA-Z0-9\s]*$/;  // Allow letters, numbers, and spaces

        // Check if the input matches the regex
        if (regex.test(inputValue)) {
            // Capitalize the first letter of each word
            inputValue = inputValue.replace(/\b\w/g, firstLetter => firstLetter.toUpperCase());
        } else {
            // If the input doesn't match the regex, remove the last character
            inputValue = inputValue.substring(0, inputValue.length - 1);
        }

        // Set the updated value to the input
        this.value = inputValue;

        // Perform any additional checks or actions
        checkInputs();
    });
});   
    
    
    
function setupFormValidation(inputIds, buttonId, clearButtonId, close_client_modalId) {
    var inputs = inputIds.map(id => document.getElementById(id));
    var submitButton = document.getElementById(buttonId);
    var clearButton = document.getElementById(clearButtonId);
    var close_client_btn = document.getElementById(close_client_modalId);

    // Function to check if all required input fields have values
    function areAllInputsFilled() {
        return inputs.every(input => {
            if (input.tagName === 'SELECT') {
                // For select elements, check if a valid option is selected
                return input.options[input.selectedIndex].value.trim() !== '';
            } else {
                // For other input types, check if the value is present
                return input.value.trim() !== '';
            }
        });
    }

    // Disable the submit button by default
    submitButton.disabled = true;

    // Add an event listener to each input field for the 'input' event
    inputs.forEach(input => input.addEventListener('input', enableSubmitButton));

    function enableSubmitButton() {
        // Enable or disable the submit button based on the condition
        submitButton.disabled = !areAllInputsFilled();
    }

    // Add an event listener to the submit button for the 'click' event
    submitButton.addEventListener('click', function () {
        console.log("Submit button clicked!");
        // Add your logic for handling the form submission
        // For example, you can call a function to process the form data

        // Reset all input fields
        inputs.forEach(input => {
            if (input.tagName === 'SELECT') {
                // For select elements, set the selectedIndex to the default one
                input.selectedIndex = 0;
            } else {
                // For other input types, set the value to an empty string
                input.value = '';
            }
        });

        // Disable the submit button after submission
        submitButton.disabled = true;
    });

    // Add an event listener to the clear button for the 'click' event
    clearButton.addEventListener('click', function () {
        // Clear all input fields
        inputs.forEach(input => {
            if (input.tagName === 'SELECT') {
                // For select elements, set the selectedIndex to the default one
                input.selectedIndex = 0;
            } else {
                // For other input types, set the value to an empty string
                input.value = '';
            }
        });

        // Disable the submit button after clearing
        submitButton.disabled = true;
    });
    // Disable or enable the submit button based on the initial state of the form
    submitButton.disabled = !areAllInputsFilled();
    
    close_client_btn.addEventListener('click', function () {
        // Clear all input fields
        inputs.forEach(input => {
            if (input.tagName === 'SELECT') {
                // For select elements, set the selectedIndex to the default one
                input.selectedIndex = 0;
            } else {
                // For other input types, set the value to an empty string
                input.value = '';
            }
        });

        // Disable the submit button after clearing
        submitButton.disabled = true;
    });
}


   
 
     





// Example usage for the first set of inputs, submit button, and clear button
setupFormValidation(
    ['first_name', 'middle_name', 'last_name', 'client_birthdate', 'client_address', 'client_email', 'user_phone'],
    'submit_Client',
    'clear_form', 
    'close_client_modal'
);
    

    

// Example usage for the second set of inputs, submit button, and clear button
setupFormValidation(
    ['first_name-1', 'middle_name-1', 'last_name-1', 'client_birthdate-1', 'client_address-1', 'client_email-1', 'user_phone-1'],
    'submit_Client-1',
    'clear_form-1',
    'close_client_modal-1'
);
    
    

// Example usage for the third set of inputs, submit button, and clear button
setupFormValidation(
    ['pet_name', 'pet_type', 'breed', 'gender', 'pet_birthdate', 'age', 'weight', 'sterilization_status'],
    'submit_pet',
    'clear_form-2'
);

// Example usage for the fourth set of inputs, submit button, and clear button
setupFormValidation(
    ['pet_name-1', 'pet_type-1', 'breed-1', 'gender-1', 'pet_birthdate-1', 'age-1', 'weight-1', 'sterilization_status-1'],
    'submit_pet-1',
    'clear_form-3'
);

// Example usage for the fifth set of inputs, submit button, and clear button
setupFormValidation(
    ['pet_name-2', 'pet_type-2', 'breed-2', 'gender-2', 'pet_birthdate-2', 'age-2', 'weight-2', 'sterilization_status-2'],
    'submit_pet-2',
    'clear_form-4'
);



    function handleSuffixChange() {
        var suffix = document.getElementById('suffix');
        var specific_suffix = document.getElementById('specific_suffix');

        if (suffix.value === 'Other') {
            specific_suffix.style.display = 'flex';
        } else {
            specific_suffix.style.display = 'none';
        }
    }



    

 
});

var firstName = document.getElementById("first_name");
var middleName = document.getElementById("middle_name");
var lastName = document.getElementById("last_name");
var suffix = document.getElementById("suffix");
var birthdate = document.getElementById("client_birthdate");
var address = document.getElementById("client_address");
var email = document.getElementById("client_email");
var user_phone = document.getElementById('user_phone');

var firstName1 = document.getElementById("first_name-1");
var middleName1 = document.getElementById("middle_name-1");
var lastName1 = document.getElementById("last_name-1");
var suffix1 = document.getElementById("suffix-1");
var birthdate1 = document.getElementById("client_birthdate-1");
var address1 = document.getElementById("client_address-1");
var email1 = document.getElementById("client_email-1");
var user_phone1 = document.getElementById('user_phone-1');

var firstName2 = document.getElementById("first_name-2");
var middleName2 = document.getElementById("middle_name-2");
var lastName2 = document.getElementById("last_name-2");
var suffix2 = document.getElementById("suffix-2");
var birthdate2 = document.getElementById("client_birthdate-2");
var address2 = document.getElementById("client_address-2");
var email2 = document.getElementById("client_email-2");
var user_phone2 = document.getElementById('user_phone-2');

//error messages IDs
var errorFname = document.getElementById('error-first_name');
var errormiddleName = document.getElementById('error-middle_name');
var errorlastName = document.getElementById('error-last_name');
var errorbirthdate = document.getElementById('error-client_birthdate');
var erroraddress = document.getElementById('error-client_address');
var erroremail = document.getElementById('error-client_email');
var erroruser_phone = document.getElementById('error-user_phone');

var errorFname1 = document.getElementById('error-first_name-1');
var errormiddleName1 = document.getElementById('error-middle_name-1');
var errorlastName1 = document.getElementById('error-last_name-1');
var errorbirthdate1 = document.getElementById('error-client_birthdate-1');
var erroraddress1 = document.getElementById('error-client_address-1');
var erroremail1 = document.getElementById('error-client_email-1');
var erroruser_phone1 = document.getElementById('error-user_phone-1');

// Copy error elements for the second set of inputs
var errorFname2 = document.getElementById('error-first_name-2');
var errormiddleName2 = document.getElementById('error-middle_name-2');
var errorlastName2 = document.getElementById('error-last_name-2');
var errorbirthdate2 = document.getElementById('error-client_birthdate-2');
var erroraddress2 = document.getElementById('error-client_address-2');
var erroremail2 = document.getElementById('error-client_email-2');
var erroruser_phone2 = document.getElementById('error-user_phone-2');


//guide messages IDs
var guideFname = document.getElementById('guide-first_name');
var guidemiddleName = document.getElementById('guide-middle_name');
var guidelastName = document.getElementById('guide-last_name');
var guidebirthdate = document.getElementById('guide-client_birthdate');
var guideaddress = document.getElementById('guide-client_address');
var guideemail = document.getElementById('guide-client_email');
var guideuser_phone = document.getElementById('guide-user_phone');

var guideFname1 = document.getElementById('guide-first_name-1');
var guidemiddleName1 = document.getElementById('guide-middle_name-1');
var guidelastName1 = document.getElementById('guide-last_name-1');
var guidebirthdate1 = document.getElementById('guide-client_birthdate-1');
var guideaddress1 = document.getElementById('guide-client_address-1');
var guideemail1 = document.getElementById('guide-client_email-1');
var guideuser_phone1 = document.getElementById('guide-user_phone-1');

// Copy guide elements for the second set of inputs
var guideFname2 = document.getElementById('guide-first_name-2');
var guidemiddleName2 = document.getElementById('guide-middle_name-2');
var guidelastName2 = document.getElementById('guide-last_name-2');
var guidebirthdate2 = document.getElementById('guide-client_birthdate-2');
var guideaddress2 = document.getElementById('guide-client_address-2');
var guideemail2 = document.getElementById('guide-client_email-2');
var guideuser_phone2 = document.getElementById('guide-user_phone-2');


handleInputError(firstName, errorFname, guideFname)  
handleInputError(middleName, errormiddleName, guidemiddleName)  
handleInputError(lastName, errorlastName, guidelastName)  
handleInputError(birthdate, errorbirthdate, guidebirthdate)  
handleInputError(address, erroraddress, guideaddress)  
handleInputError(email, erroremail, guideemail)
handleInputError(user_phone, erroruser_phone, guideuser_phone)

handleInputError(firstName1, errorFname1, guideFname1)  
handleInputError(middleName1, errormiddleName1, guidemiddleName1)  
handleInputError(lastName1, errorlastName1, guidelastName1)  
handleInputError(birthdate1, errorbirthdate1, guidebirthdate1)  
handleInputError(address1, erroraddress1, guideaddress1)  
handleInputError(email1, erroremail1, guideemail1)
handleInputError(user_phone1, erroruser_phone1, guideuser_phone1) 

handleInputError(firstName2, errorFname2, guideFname2);
handleInputError(middleName2, errormiddleName2, guidemiddleName2);
handleInputError(lastName2, errorlastName2, guidelastName2);
handleInputError(birthdate2, errorbirthdate2, guidebirthdate2);
handleInputError(address2, erroraddress2, guideaddress2);
handleInputError(email2, erroremail2, guideemail2);
handleInputError(user_phone2, erroruser_phone2, guideuser_phone2);


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



function handleInputError(input, error, guide) {
    function onBlur() {
    if (input.value.trim() === '' || input.value.trim() === '0') {
        error.style.display = 'flex'; // Show the error message
        input.classList.add('is-invalid');
        input.classList.add('error-border');
    } else if (input.value.trim() === 'none') {
        error.style.display = 'flex'; // Show the error message
        input.classList.add('is-invalid');
        input.classList.add('error-border');
    } else if (input.type === 'email' && !isValidEmail(input.value.trim())) {
        error.style.display = 'flex'; // Show the error message
        input.classList.add('is-invalid');
        input.classList.add('error-border');
    } else {
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
// Function to check if the value is a valid email format
function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/;
    return emailRegex.test(email);
}

var user_phone1 = document.getElementById('user_phone-1');
    
function PhoneNumberInputLimit(inputElement) {
    inputElement.addEventListener('input', function () {
        if (this.value.length > 11) {
        this.value = this.value.slice(0, 11);
    }

    // Ensure the first two characters are '09'
    if (this.value.length >= 2 && this.value.slice(0, 2) !== '09') {
        // Adjust the input to start with '09'
        this.value = '09' + this.value.slice(2);
    }
    });
}
    
    
PhoneNumberInputLimit(user_phone); 
PhoneNumberInputLimit(user_phone1); 
    
 function weightInputLimit(inputElement) {
    inputElement.addEventListener('input', function () {
        if (inputElement.value.length > 10) {
            inputElement.value = inputElement.value.slice(0, 10);
        }
    });
}
    
weightInputLimit(pet_weightInput);
weightInputLimit(pet_weightInput1);       
        

// Function to check if the value is a valid email format
function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/;
    return emailRegex.test(email);
}
 

function setupDateValidation(inputId) {
    const today = new Date();
    const maxDate = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate()).toISOString().split('T')[0];
    const minDate = new Date(today.getFullYear() - 100, today.getMonth(), today.getDate()).toISOString().split('T')[0];

    const dateInput = document.getElementById(inputId);
    dateInput.setAttribute('max', maxDate);
    dateInput.setAttribute('min', minDate);

    dateInput.addEventListener('change', function () {
        let selectedDate = new Date(this.value);
        if (selectedDate > today || selectedDate < new Date(today.getFullYear() - 100, today.getMonth(), today.getDate())) {
            this.value = '';
            alert('Please select a date between 18 and 100 years ago.');
        }
        // Additional validation or action can be added here if needed
    });

    dateInput.addEventListener('keydown', function (e) {
        e.preventDefault();
    });
}

// Example usage for client_birthdate
setupDateValidation('client_birthdate');

// Example usage for client_birthdate-1
setupDateValidation('client_birthdate-1');
setupDateValidation('client_birthdate-2');



