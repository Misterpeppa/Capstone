document.getElementById('edit_profile_personal_info').addEventListener('click', function () {
  // Enable the input fields for editing
  document.getElementById('user_first_name').disabled = false;
  document.getElementById('user_middle_name').disabled = false;
  document.getElementById('user_last_name').disabled = false;
  document.getElementById('user_email').disabled = false;
  document.getElementById('user_phone_number').disabled = false;
    document.getElementById('edit_personal_info_buttons').style.display = 'flex';
});
document.getElementById('cancel_edit_profile').addEventListener('click', function (){
  $('#cancel_change_user_info').modal('show');
})
document.getElementById('discard_btn-2').addEventListener('click', function () {
  // Reset the input values
  // kung ano sana yung initial display rito, babalik doon pagka click ng discard
  document.getElementById('user_first_name').value = '';
  document.getElementById('user_middle_name').value = '';
  document.getElementById('user_last_name').value = '';
  document.getElementById('user_email').value = '';
  document.getElementById('user_phone_number').value = '';
  $('#cancel_change_user_info').modal('hide');

});
document.addEventListener('DOMContentLoaded', function () {
 
    // Get references to the elements
      const passAndSecurityBox = document.getElementById('pass_and_security_box');
      const changePasswordDiv = document.getElementById('change_password');
      const changePasswordBtn = document.getElementById('change_password_btn');
    
      // Add click event listener to the button
      changePasswordBtn.addEventListener('click', function () {
        // Hide pass_and_security_box
        passAndSecurityBox.style.display = 'none';
        // Show change_password
        changePasswordDiv.style.display = 'flex';
      });
    
    document.getElementById('edit_save_changes').addEventListener('click', function () {
        // Show the Bootstrap modal
        $('#save_changes_success').modal('show');
         
         // Hide the modal after 2 seconds
        setTimeout(function () {
          $('#save_changes_success').modal('hide');
        }, 2000);
        
        // Reset the input values
        document.getElementById('old_password').value = '';
        document.getElementById('new_password').value = '';
        document.getElementById('confirm_password').value = '';
      });
        
    // document.getElementById('edit_save_changes-1').addEventListener('click', function () {
    //     // Show the Bootstrap modal
    //     $('#save_changes_success-1').modal('show');
         
    //      // Hide the modal after 2 seconds
    //     setTimeout(function () {
    //       $('#save_changes_success-1').modal('hide');
    //     }, 2000);
    
    //   });  
        
    document.getElementById('edit_save_changes-2').addEventListener('click', function () {
        // Show the Bootstrap modal
        $('#save_changes_success-1').modal('show');
         
         // Hide the modal after 2 seconds
        setTimeout(function () {
          $('#save_changes_success-1').modal('hide');
        }, 2000);
    
      });   
    
    document.getElementById('cancel_pass_btn').addEventListener('click', function () {
        // Show the Bootstrap modal
        $('#cancel_change_pass').modal('show');
         
      });
        
    document.getElementById('cancel_edit_profile').addEventListener('click', function (){
        $('#cancel_change_user_info').modal('show');
    })
        
    // Add click event listener to the "Discard" button
    document.getElementById('discard_btn-2').addEventListener('click', function () {
        // Reset the input values
        // kung ano sana yung initial display rito, babalik doon pagka click ng discard
        document.getElementById('user_first_name').value = '';
        document.getElementById('user_middle_name').value = '';
        document.getElementById('user_last_name').value = '';
        document.getElementById('user_email').value = '';
        document.getElementById('user_phone_number').value = '';
        $('#cancel_change_user_info').modal('hide');
    
      });   
    
    document.getElementById('cancel_edit_profile-2').addEventListener('click', function (){
        $('#cancel_change_user_info-1').modal('show');
    })
        
     // Add click event listener to the "Discard" button
    document.getElementById('discard_btn-3').addEventListener('click', function () {
        // Reset the input values
        // kung ano sana yung initial display rito, babalik doon pagka click ng discard
        document.getElementById('user_house_unit').value = '';
        document.getElementById('user_city').value = '';
        document.getElementById('user_state').value = '';
        document.getElementById('user_zip_code').value = '';
        document.getElementById('user_country').value = 'none';
        $('#cancel_change_user_info-1').modal('hide');
    
      });      
        
    // Add click event listener to the "Discard" button
      document.getElementById('discard_btn').addEventListener('click', function () {
        // Reset the input values
        document.getElementById('old_password').value = '';
        document.getElementById('new_password').value = '';
        document.getElementById('confirm_password').value = '';
          
          $('#cancel_change_pass').modal('hide');
          passAndSecurityBox.style.display = 'flex';
          changePasswordDiv.style.display = 'none';
      });
    
      document.getElementById('delete_acc_btn').addEventListener('click', function () {
          $('#delete_account_modal').modal('show');
      });
    
    
    // Add click event listener to the "Edit Profile" button
      document.getElementById('edit_profile_personal_info').addEventListener('click', function () {
        // Enable the input fields for editing
        document.getElementById('user_first_name').disabled = false;
        document.getElementById('user_middle_name').disabled = false;
        document.getElementById('user_last_name').disabled = false;
        document.getElementById('user_email').disabled = false;
        document.getElementById('user_phone_number').disabled = false;
        document.getElementById('edit_personal_info_buttons').style.display = 'flex';
      });
    
    
     document.getElementById('edit_profile_address').addEventListener('click', function () {
        // Enable the input fields for editing
        document.getElementById('user_house_unit').disabled = false;
        document.getElementById('user_city').disabled = false;
        document.getElementById('user_state').disabled = false;
        document.getElementById('user_zip_code').disabled = false;
        document.getElementById('user_country').disabled = false;
        document.getElementById('edit_address_buttons').style.display = 'flex';
      });
    
    
    
    function togglePasswordVisibility2(inputField, eyeIcon) {
      if (inputField.type === "password") {
        inputField.type = "text";
        // Change the eye-icon to the visible state
        eyeIcon.innerHTML = getVisibleEyeIcon();
      } else {
        inputField.type = "password";
        // Change the eye-icon to the initial state
        eyeIcon.innerHTML = getHiddenEyeIcon();
      }
    }
    
    function getVisibleEyeIcon() {
      return `
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <g clip-path="url(#clip0_1917_11689)">
                  <path d="M10 12C10 12.5304 10.2107 13.0391 10.5858 13.4142C10.9609 13.7893 11.4696 14 12 14C12.5304 14 13.0391 13.7893 13.4142 13.4142C13.7893 13.0391 14 12.5304 14 12C14 11.4696 13.7893 10.9609 13.4142 10.5858C13.0391 10.2107 12.5304 10 12 10C11.4696 10 10.9609 10.2107 10.5858 10.5858C10.2107 10.9609 10 11.4696 10 12Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M21 12C18.6 16 15.6 18 12 18C8.4 18 5.4 16 3 12C5.4 8 8.4 6 12 6C15.6 6 18.6 8 21 12Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                  <clipPath id="clip0_1917_11689">
                    <rect width="24" height="24" fill="white"/>
                  </clipPath>
                </defs>
              </svg>`;
    }
    
    function getHiddenEyeIcon() {
      return `
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <g clip-path="url(#clip0_1917_11666)">
                  <path d="M21 9C18.6 11.667 15.6 13 12 13C8.4 13 5.4 11.667 3 9M3 15L5.5 11.2M20.9998 14.976L18.5078 11.2M9 17L9.5 13M15 17L14.5 13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                  <clipPath id="clip0_1917_11666">
                    <rect width="24" height="24" fill="white"/>
                  </clipPath>
                </defs>
              </svg>`;
    }
    
    // Example usage
    var edit_save_changes = document.getElementById("edit_save_changes");
    var oldPasswordInput = document.getElementById("old_password");
    var oldPasswordEyeIcon = document.getElementById("eye-icon-old-password");
    
    oldPasswordEyeIcon.addEventListener("click", function() {
      togglePasswordVisibility2(oldPasswordInput, oldPasswordEyeIcon);
    });
    
    var newPasswordInput = document.getElementById("new_password");
    var newPasswordEyeIcon = document.getElementById("eye-icon-new-password");
    
    newPasswordEyeIcon.addEventListener("click", function() {
      togglePasswordVisibility2(newPasswordInput, newPasswordEyeIcon);
    });
    

    var confirmPasswordInput = document.getElementById("confirm_password");
    var confirmPasswordEyeIcon = document.getElementById("eye-icon-confirm-password");
    
    confirmPasswordEyeIcon.addEventListener("click", function() {
      togglePasswordVisibility2(confirmPasswordInput, confirmPasswordEyeIcon);
    });
    //validation for change password
    function checkInputs() {
      var newPassword = newPasswordInput.value.trim();  // Trim to remove leading and trailing whitespaces
      var confirmPassword = confirmPasswordInput.value.trim();
  
      if (
          oldPasswordInput.value !== '' &&
          newPassword !== '' &&
          confirmPassword !== '' &&
          newPassword === confirmPassword
      ) {
          edit_save_changes.removeAttribute('disabled');
          edit_save_changes.classList.remove('disabled');
      } else {
          edit_save_changes.setAttribute('disabled', 'true');
          edit_save_changes.classList.add('disabled');
      }
  }
  
  // Call the function whenever the inputs change
  oldPasswordInput.addEventListener('input', checkInputs);
  newPasswordInput.addEventListener('input', checkInputs);
  confirmPasswordInput.addEventListener('input', checkInputs);
  
  // Initial check when the page loads
  checkInputs();
    
     const inputs = ['user_first_name', 'user_middle_name', 'user_last_name'];   
        
    inputs.forEach(inputId => {
        document.getElementById(inputId).addEventListener('input', function () {
            let inputValue = this.value;
            let regex = /^[a-zA-Z\s]*$/;
    
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
    
    
    });