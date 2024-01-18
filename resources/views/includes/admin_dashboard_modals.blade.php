<div class="modal fade show" role="dialog" tabindex="-1" id="success_reschedule_modal">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content success_modal">
				<div class="modal-header success_header">
					<div class="success_icon_container"><span class="success_icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <g clip-path="url(#clip0_5693_10654)">
    <path d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#5BB85A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5693_10654">
      <rect width="32" height="32" fill="white"/>
    </clipPath>
  </defs>
</svg></span></div>
				</div>
				<div class="modal-body success_message">
					<div>
						<h1>Success!</h1>
						<p>The appointment has been rescheduled.</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade show" role="dialog" tabindex="-1" id="accept_modal">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content discard_modal">
				<div class="modal-header success_header">
					<div class="success_icon_container"><span class="success_icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <g clip-path="url(#clip0_6319_20047)">
    <path d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#5BB85A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6319_20047">
      <rect width="32" height="32" fill="white"/>
    </clipPath>
  </defs>
</svg></span></div>
				</div>
				<div class="modal-body success_message">
					<div>
						<h1>Approve appointment?</h1>
						<p>You are approving a pending appointment. Do you wish to continue?</p>
					</div>
				</div>
				<div class="modal-footer discard_footer">
					<button class="btn return_btn" id="cancel_appointment_btn" data-bs-dismiss="modal" type="button"><span class="return_btn_base">Cancel</span></button>
					<button class="btn approve_appointment_btn" id="confirm_approve_appointment_btn" type="button"><span class="discard_btn_base">Approve</span></button>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade show" role="dialog" tabindex="-1" id="reject_modal">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content discard_modal">
				<div class="modal-header discard_header">
					<div class="discard_icon_container"><span class="discard_icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <g clip-path="url(#clip0_5693_21111)">
    <path d="M13.3333 13.3333L18.6667 18.6667M18.6667 13.3333L13.3333 18.6667M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#DA534F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5693_21111">
      <rect width="32" height="32" fill="white"/>
    </clipPath>
  </defs>
</svg></span></div>
				</div>
				
				<div class="modal-body discard_message">
					<div>
						<h1>Reject appointment</h1>
						<p>You are about to reject a pending appointment. Do you wish to continue?</p>
					</div>
					<div class="form-floating" style="width:100%;">
						<select name="reason" id="rejection_reason" class="form-select" >
							<option value="" selected="">Rejection reason</option>
							<option value="Reason 1">Reason 1</option>
							<option value="Reason 2">Reason 2</option>
							<option value="other">Other reason</option>
						</select>
						<label class="form-label" for="rejection_reason">Rejection reason<span>&nbsp;*</span></label>
					</div>
					<div id="specific_reason" class="form-floating specific_reason" style="width:100%;">
						<textarea id="specify_reason" name="otherReason" class="form-control"></textarea>
						<label class="form-label" for="specific_reason">Other reasons<span>&nbsp;*</span></label>
					</div>
				</div>
				<div class="modal-footer discard_footer">
					<button class="btn return_btn" data-bs-dismiss="modal" id="return_btn" type="button"><span class="return_btn_base">Cancel</span></button>
					<button class="btn reject_btn" id="reject_btn" type="button"><span class="discard_btn_base">Reject</span></button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade show" role="dialog" tabindex="-1" id="resched_modal" style="display:none;">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content resched_modal">
				<div class="modal-header archive_header">
					<div class="archive_icon_container"><span class="success_icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <g clip-path="url(#clip0_6356_1845)">
    <path d="M16 10.6667V16M16 21.3333H16.0133M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 12.8174 26.7357 9.76516 24.4853 7.51472C22.2348 5.26428 19.1826 4 16 4C12.8174 4 9.76516 5.26428 7.51472 7.51472C5.26428 9.76516 4 12.8174 4 16Z" stroke="#045B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6356_1845">
      <rect width="32" height="32" fill="white"/>
    </clipPath>
  </defs>
</svg></span></div>
				</div>
				<div class="modal-body archive_message">
					<div>
						<h1><strong>Reschedule appointment</strong></h1>
						<p>You are about to reschedule an appointment. Please make sure that all information are correct.</p>
					</div>
					<div class="date_time_container">
						<div class="form-floating" style="width:100%;">
							<input class="form-control" data-id="appointment_date-3" id="appointment_date-3" type="date">
							<label class="form-label form-label" for="appointment_date-3">Date<span>&nbsp;*</span></label>
						</div>
						<div class="form-floating" style="width:100%;">
							<input class="form-control" data-id="appointment_time-3" id="appointment_time-3" type="time">
							<label class="form-label form-label" for="appointment_time-3">Time<span>&nbsp;*</span></label>
							<div class="error-message" id="error-appointment_time-3"><span>• Please select a breed</span></div>
						</div>
					</div>
					<div class="form-floating" style="width:100%;">
						<select id="rejection_reason-1" class="form-select" data-id="rejection_reason-1">
							<option value="" selected="">Reschedule reason</option>
							<option value="Reason 1">Reason 1</option>
							<option value="Reason 2">Reason 2</option>
							<option value="other">Other reason</option>
						</select>
						<label class="form-label form-label" for="rejection_reason">Reschedule reason<span>&nbsp;*</span></label>
					</div>
					<div class="form-floating specific_reason" id="specific_reason-1" style="width:100%;">
						<textarea class="form-control" id="specify_reason-1"></textarea>
						<label class="form-label form-label" for="specific_reason">Other reasons<span>&nbsp;*</span></label>
					</div>
				</div>
				<div class="modal-footer d-flex justify-content-end align-items-center align-self-stretch">
					<button class="btn cancel_btn" data-bs-dismiss="modal" id="cancel_reschedule_btn" type="button"><span class="return_btn_base">Cancel</span></button>
					<button id="reschedule_btn" class="btn reschedule_btn" type="button" data-bs-dismiss="modal"><span class="archive_confirm_button_base">Reschedule</span></button>
				</div>
			</div>
		</div>
	</div>