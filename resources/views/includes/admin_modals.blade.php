<div class="modal fade" role="dialog" tabindex="-1" id="add_appointment_modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content add_appointment_modal">
                <div class="modal-header">
                    <h1 class="modal-title">Add Appointment</h1><button class="btn-close" id="close_client_modal-1" aria-label="Close" data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body" style="width:100%;">
                    <form id="add_appointment_form-1" class="add_client">
                        <div class="mb-3 input_container">
                            <div class="form-floating" style="width:100%;"><select class="form-select" id="owner_name" data-id="owner_name">
                                    <option value="" selected="">Select an owner</option>
                                </select><label class="form-label" for="owner_name">Owner Name<span>&nbsp;*</span></label>
                                <div id="error-owner_name-2" class="error-message"><span>• Please enter client first name.</span></div>
                                <div id="guide-owner_name-2" class="guide-message"><span>• Please enter client first name.</span></div>
                            </div>
                            <div class="form-floating" style="width:100%;"><input class="form-control" type="text" id="email" data-id="email" placeholder="Email"><label class="form-label" for="email">Email<span>&nbsp;*</span></label></div>
                            <div class="form-floating" style="width:100%;"><select class="form-select" id="pet_name" data-id="pet_name">
                                    <option value="" selected="">Select a pet</option>
                                </select><label class="form-label" for="pet_name">Pet Name<span>&nbsp;*</span></label>
                                <div id="error-pet_name-1" class="error-message"><span>• Please enter client first name.</span></div>
                                <div id="guide-pet_name-1" class="guide-message"><span>• Please enter client first name.</span></div>
                            </div>
                            <div class="pet_type_and_breed_container">
                                <div class="species_container">
                                    <div id="dog_cat_btn-1" class="species" style="display: flex;align-items: flex-start;gap: var(--spacing-spacing-xs, 12px);align-self: stretch;"><button id="dog" data-id="dog" class="btn custom-radio" type="button" onclick="checkRadio('dog');  selectBreed('dog');">
  <label class="form-label custom-control-label">Dog</label>
  <input name="species" id="dog-radio" class="checkbox" type="radio" />
</button><button id="cat" data-id="cat" class="btn custom-radio" type="button" onclick="checkRadio('cat');  selectBreed('cat');">
  <label class="form-label custom-control-label">Cat</label>
  <input name="species" id="cat-radio" class="checkbox" type="radio" />
</button></div>
                                </div>
                                <div class="align-self-stretch form-floating breed_container"><select class="form-select" id="breed" data-id="breed" disabled="" required="" style="height:100%;"></select><label class="form-label" for="breed">Select a breed<span>&nbsp;*</span></label>
                                    <div id="error-breed-1" class="error-message"><span>• Please select a breed</span></div>
                                </div>
                            </div>
                            <div class="form-floating" style="width:100%;"><select class="form-select" id="surgery_type" data-id="surgery_type">
                                    <option value="" selected="">Surgery Type</option>
                                    <option value="Neuter">Neuter</option>
                                    <option value="Tooth Extraction">Tooth Extraction</option>
                                </select><label class="form-label" for="surgery_type">Surgery Type<span>&nbsp;*</span></label>
                                <div id="error-surgery_type-1" class="error-message"><span>• Please select a surgery.</span></div>
                            </div>
                            <div class="form-floating" style="width:100%;"><textarea class="form-control" id="additional_notes" data-id="additional_notes" placeholder="Additional Notes"></textarea><label class="form-label" for="additional_notes-1">Additional Notes</label>
                                <div id="guide-additional_notes-1" class="guide-message"><span>• Please enter client last name.</span></div>
                            </div>
                            <div class="date_time_container">
                                <div class="form-floating" style="width: 100%;"><input class="form-control" id="appointment_date" type="date" data-id="appointment_date"><label class="form-label" for="appointment_date">Date<span>&nbsp;*</span></label></div>
                                <div class="form-floating" style="width: 100%;"><input class="form-control" id="appointment_time" type="time" data-id="appointment_time"><label class="form-label" for="appointment_time">Time<span>&nbsp;*</span></label>
                                    <div id="error-appointment_time-1" class="error-message"><span>• Please select a breed</span></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer add_product_button"><button class="btn clear_form" id="clear_form" aria-label="Clear Form" role="button" type="button"><span class="clear_form_base">Clear Form</span></button><button class="btn submit_product" id="submit_pending_appointment" type="submit" data-bs-dismiss="modal"><span class="submit_product_base">Submit</span></button></div>
            </div>
        </div>
    </div>




    <div class="modal fade" role="dialog" tabindex="-1" id="add_pet_record_modal-1">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content add_pet_record_modal">
				<div class="modal-header">
					<h1 class="modal-title">Add Pet Record</h1>
					<button class="btn-close" id="close_pet_modal" aria-label="Close" data-bs-dismiss="modal" type="button"></button>
				</div>
				<div class="modal-body" style="width:100%;">
					<form action="{{ route('emr.pet') }}" method="POST" id="add_pet_form-1" class="add_client">
                        @csrf
						<div class="mb-3 input_container">
                            <div class="form-floating align-self-stretch">
                                    <select class="admin_petInfo_select form-control w-100" id="name" name="owner_id" placeholder="Owner Name">
                                        <option value=""disabled selected>Select Owner: </option>
                                        <!--  -->
                                    </select>
                                </div>
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<input class="form-control" type="text" name="pet_name" id="pet_name-1" data-id="pet_name-1" placeholder="Pet Name" maxlength="255">
									<label class="form-label" for="pet_name-1">Pet Name<span>&nbsp;*</span></label>
									<div id="error-pet_name-1" class="error-message"><span>• Please enter pet name.</span></div>
									<div id="guide-pet_name-1" class="guide-message"><span>• Please enter pet name.</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<select class="form-select" name="gender" id="gender-1" data-id="gender-1" placeholder="Gender">
										<option value="" selected="">Select Sex</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
									<label class="form-label" for="gender-1">Sex<span>&nbsp;*</span></label>
									<div id="error-gender-1" class="error-message"><span>• Please select gender of pet.</span></div>
									<div id="guide-gender-1" class="guide-message"><span>• Please select gender of pet.</span></div>
								</div>
							</div>
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<select class="form-select" name="species" id="pet_type-1" data-id="pet_type-1" placeholder="Pet Type">
										<option value="" selected="">Select Pet Type</option>
										<option value="Dog">Dog</option>
										<option value="Cat">Cat</option>
									</select>
									<label class="form-label" for="pet_type-1">Pet Type<span>&nbsp;*</span></label>
									<div id="error-pet_type-1" class="error-message"><span>• Please select pet type</span></div>
									<div id="guide-pet_type-1" class="guide-message"><span>• Please select pet type</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<select class="form-select" name="breed" id="breed-1" data-id="breed-1" disabled="" placeholder="Breed">
										<option value="none" selected="">Select a Pet Type first.</option>
									</select>
									<label class="form-label" for="breed-1">Breed<span>&nbsp;*</span></label>
									<div id="error-breed-1" class="error-message"><span>• Please select a breed.</span></div>
									<div id="guide-breed-1" class="guide-message"><span>• Please select a breed.</span></div>
								</div>
							</div>
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<input class="form-control" name="pet_birthday" id="pet_birthdate-1" data-id="pet_birthdate-1" placeholder="Birthdate" type="date">
									<label class="form-label" for="pet_birthdate-1">Birthdate<span>&nbsp;*</span></label>
									<div id="error-pet_birthdate-1" class="error-message"><span>• Please click the calendar icon on the right part, and select your pet birthdate.</span></div>
									<div id="guide_pet_birthdate-1" class="guide-message"><span>• Please click the calendar icon on the right part, and select your pet birthdate.</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<input class="form-control" type="text" name="pet_age" data-bs-toggle="tooltip" data-bss-tooltip="" id="age-1" data-id="age-1" title="Please select pet type and enter the birthdate first." maxlength="3" disabled="" placeholder="Please select pet type, breed, and enter the birthdate first.">
									<label class="form-label" for="age-1">Age</label>
									<div id="error-age-1" class="error-message" style="color:red;"></div>
								</div>
							</div>
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<input class="form-control" type="number" name="weight" id="weight-1" data-id="weight-1" maxlength="10" placeholder="Weight">
									<label class="form-label" for="weight">Weight<span>&nbsp;*</span></label>
									<div id="error-weight-1" class="error-message"><span>• Please enter weight of pet.</span><span>• Only numerical inputs will be accepted</span></div>
									<div id="guide_pet_weight-1" class="guide-message"><span>• Please enter weight of pet.</span><span>• Only numerical inputs will be accepted</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<select class="form-select" name="sterilization" id="sterilization_status-1" data-id="sterilization_status-1" placeholder="Sterilization Status">
										<option value="" selected="">Select Status</option>
										<option value="None">None</option>
										<option value="Spayed">Spayed</option>
										<option value="Neutered">Neutered</option>
									</select>
									<label class="form-label" for="sterilization_status-1">Sterilization Status<span>&nbsp;*</span></label>
									<div id="error-sterilization_status-1" class="error-message"><span>• Please select a sterilization status.</span></div>
									<div id="guide-sterilization_status-1" class="guide-message"><span>• Please select a sterilization status.</span></div>
								</div>
							</div>
						</div>
				</div>
				<div class="modal-footer add_product_button">
					<button class="btn clear_form" id="clear_form-1" aria-label="Clear Form" role="button" type="button"><span class="clear_form_base">Clear Form</span></button>
					<button class="btn submit_pet" id="submit_Pet-1" type="submit" value="submit" title="Complete the fields first to make this clickable."><span class="submit_product_base">Submit</span></button>
				</div>
                </form>
			</div>
		</div>
	</div>



    <div class="modal fade" role="dialog" tabindex="-1" id="add_client_modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content add_client_modal">
                <div class="modal-header">
                    <h1 class="modal-title">Add Client</h1><button class="btn-close" aria-label="Close"
                        data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body" style="width:100%;">
                    <form action="{{ route('client.store') }}" method="POST" class="add_client" id="add_client_form"><img src="assets/img/image%2011%20(1).png">
                    @csrf
                    <div class="mb-3 input_container">
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;"><input class="form-control"
                                        type="text" id="first_name" data-id="first_name"
                                        placeholder="First Name"><label class="form-label" for="first_name">First
                                        Name</label>
                                    <div class="error-message" id="error-first_name"><span>Please enter client first
                                            name.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><input class="form-control"
                                        type="text" id="middle_name" data-id="middle_name"
                                        placeholder="Middle Name"><label class="form-label" for="middle_name">Middle
                                        Name</label>
                                    <div class="error-message" id="error-middle_name"><span>Please enter client middle
                                            name.</span></div>
                                </div>
                            </div>
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;"><input class="form-control"
                                        type="text" id="last_name" data-id="last_name"
                                        placeholder="Last Name"><label class="form-label" for="last_name">Last
                                        Name</label>
                                    <div id="error-last_name" class="error-message"><span>Please enter client last
                                            name.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><select id="suffix"
                                        class="form-select" data-id="suffix" onchange="handleSuffixChange()">
                                        <option value="none" selected>Select a Suffix</option>
                                        <option value="Jr">Jr</option>
                                        <option value="Sr">Sr</option>
                                        <option value="II">II</option>
                                        <option value="Other">Other</option>
                                    </select><label class="form-label" for="suffix">Suffix</label>
                                    <div id="error-suffix" class="error-message"><span>Please select a suffix.</span>
                                    </div>
                                </div>
                                <div id="specific_suffix" class="form-floating" style="width: 100%;display: none;">
                                    <input class="form-control" type="text" id="specify_suffix"
                                        data-id="specify_suffix" placeholder="Specify Suffix"><label
                                        class="form-label" for="specify_suffix">Specify suffix</label>
                                    <div id="error-specify_suffix" class="error-message"><span>Please specify
                                            suffix.</span></div>
                                </div>
                            </div>
                            <div class="form-floating" style="width:100%;"><input class="form-control"
                                    id="client_birthdate" data-id="client_birthdate" placeholder="Birthdate"
                                    type="date"><label class="form-label" for="client_birthdate">Birthdate</label>
                                <div class="error-message" id="error-client_birthdate"><span>Please enter the client
                                        birthdate.</span></div>
                            </div>
                            <div class="form-floating" style="width:100%;">
                                <textarea class="form-control" id="client_address" data-id="client_address" placeholder="Address"></textarea><label class="form-label"
                                    for="client_address">Address</label>
                                <div class="error-message" id="error-client_address"><span>Please enter client
                                        address.</span></div>
                            </div>
                            <div class="form-floating" style="width:100%;"><input class="form-control"
                                    type="email" id="client_email" data-id="client_email"
                                    placeholder="Email"><label class="form-label" for="client_email">Email
                                    Address</label>
                                <div class="error-message" id="error-client_email"><span>Please enter a valid email
                                        address.</span></div>
                            </div>
                            <div class="form-floating" style="width:100%;"><input class="form-control"
                                    type="tel" id="user_phone" data-id="user_phone"
                                    placeholder="Phone Number"><label class="form-label" for="user_phone">Phone
                                    Number</label>
                                <div class="error-message" id="error-user_phone"><span>Please enter a valid phone
                                        number.</span></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer add_product_button"><button class="btn clear_form" id="clear_form"
                        aria-label="Clear Form" role="button" type="button"><span class="clear_form_base">Clear
                            Form</span></button><button class="btn submit_product" id="submit_Client"
                        type="submit"><span class="submit_product_base">Submit</span></button></div>
            </div>
        </div>
    </div>