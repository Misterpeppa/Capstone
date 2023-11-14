<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Appointment</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/typicons.min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bs-theme-overrides.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Bootstrap-4-Custom-Radio.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Multi-step-form.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Navbar-Centered-Links-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body class="d-flex flex-column align-items-center" style="max-width: 1920px;background: #EFEFEF;">
    <nav class="navbar navbar-expand-md bg-body d-flex py-3" style="max-width: 1920px;background: #EFEFEF;box-shadow: 0px 10px 15px -3px rgba(0, 0, 0, 0.10), 0px 4px 6px -2px rgba(28, 28, 28, 0.05);width: 100%;">
        <div class="container">
            <div class="d-flex align-items-center clinic_logo"><img src="{{ asset('assets/img/dogs_cats.png') }}" style="width: 63.913px;height: 60px;">
                <p class="fw-bold" style="color: #000;font-size: 20px;font-family: Inter;--bs-body-font-weight: 700;width: 200px;margin: 0px;">Tagapo Dogs &amp; Cats Veterinary Clinic</p>
            </div><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-3" style="background: #EFEFEF;"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-3">
                <ul class="navbar-nav mx-auto" style="font-family: Inter;--bs-body-font-weight: 700;">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('landing') }}" style="color: #1C1C1C;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('appointment.list') }}" style="color: #1C1C1C;">Appointments</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color: #1C1C1C;">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color: #1C1C1C;">About Us</a></li>
                </ul>
                <div id="user" class="user">
                    <div class="notif_container" style="display: flex;padding: 5px;justify-content: center;align-items: center;gap: 10px;"><i class="icon ion-android-notifications-none"></i></div>
                    <div class="d-flex justify-content-end align-items-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M256 112c-48.6 0-88 39.4-88 88C168 248.6 207.4 288 256 288s88-39.4 88-88C344 151.4 304.6 112 256 112zM256 240c-22.06 0-40-17.95-40-40C216 177.9 233.9 160 256 160s40 17.94 40 40C296 222.1 278.1 240 256 240zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-46.73 0-89.76-15.68-124.5-41.79C148.8 389 182.4 368 220.2 368h71.69c37.75 0 71.31 21.01 88.68 54.21C345.8 448.3 302.7 464 256 464zM416.2 388.5C389.2 346.3 343.2 320 291.8 320H220.2c-51.36 0-97.35 26.25-124.4 68.48C65.96 352.5 48 306.3 48 256c0-114.7 93.31-208 208-208s208 93.31 208 208C464 306.3 446 352.5 416.2 388.5z"></path>
                        </svg>
                        <div class="dropdown"><a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="#">&nbsp;Username</a>
                            <div class="dropdown-menu flex-column"><a class="dropdown-item d-xl-flex justify-content-xl-center" href="#">My Profile</a><a class="dropdown-item d-xl-flex justify-content-xl-center" href="#">My Pets</a><a class="dropdown-item d-xl-flex justify-content-xl-center" href="#">Settings</a><br class="break"><a class="dropdown-item d-xl-flex justify-content-xl-center" href="#">Logout</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid d-flex flex-column" style="margin-bottom: 30px;height: 100%;">
        <div class="row d-flex flex-column align-self-center" style="width: 100%;height: 100%;">
            <div class="col-10 d-flex flex-column align-items-center align-self-center" style="padding: var(--spacing-spacing-l, 32px);gap: var(--spacing-spacing-m, 24px);border-radius: 0px 0px 8px 8px;border: 0.5px solid rgba(28, 28, 28, 0.50);background: #F9F9F9;border-top: none;box-shadow: 0px 2px 4px -1px rgba(28, 28, 28, 0.06), 0px 4px 6px -1px rgba(0, 0, 0, 0.08);">
                <div class="d-flex flex-column align-items-center">
                    <div class="d-flex flex-column align-items-start">
                        <h1 class="text-center align-self-stretch" style="color: #1C1C1C;font-size: 36px;font-family: Inter;">BOOK AN</h1>
                        <h1 class="text-center" style="color: #045B62;font-size: 50px;--bs-body-font-weight: 700;font-family: Inter;">APPOINTMENT</h1>
                    </div>
                    <p class="text-center" style="color: #1c1c1c;font-size: 20px;font-family: Inter;--bs-body-font-weight: 500;">Please input complete and accurate details to secure a slot for your appointment.</p>
                </div>
                <section class="multi_step_section">
                    <div id="multple-step-form-n" class="multiple-step-form-n overflow-visible">
                        <div id="progress-bar-button" class="multisteps-form" style="padding-top: 10px;">
                            <div class="multisteps-form__progress"><a class="btn link-success multisteps-form__progress-btn js-active" role="button" title="1" style="--bs-success:#045B62;--bs-success-rgb:4,91,98;"></a><a class="btn link-success multisteps-form__progress-btn" role="button" title="2" style="--bs-success: #045B62;--bs-success-rgb: 4,91,98;"></a><a class="btn link-success multisteps-form__progress-btn" role="button" title="User Info" style="--bs-success: #045B62;--bs-success-rgb: 4,91,98;"></a></div>
                        </div>
                        <div id="multistep-start-row" class="row" style="display: flex;flex-direction: column;justify-content: center;align-items: center;gap: 25px;align-self: stretch;">
                            <div id="multistep-start-column" class="col-12 col-lg-8 m-auto" style="width: 100%;">
                                <form id="main-form" class="multisteps-form__form">
                                    <div class="d-flex flex-column justify-content-center align-items-center align-self-stretch multisteps-form__panel js-active" id="single-form-next" data-animation="scaleIn" style="gap: 25px;">
                                        <h3 class="text-start multisteps-form__title" style="align-self: stretch;color: #1C1C1C;font-family: Inter;font-size: 21px;font-style: normal;font-weight: 700;line-height: normal;">APPOINTMENT PREFERENCES</h3>
                                        <div id="form-content" class="multisteps-form__content" style="display: flex;flex-direction: column;justify-content: center;align-items: center;gap: 25px;align-self: stretch;max-height: 1500px;">
                                            <div id="form_fields" class="form_fields">
                                                <div style="margin-bottom: 10px;width: 100%;">
                                                    <div class="form-floating col-12 col-sm-6" style="display: flex;height: 64px;padding: 20px;justify-content: space-between;align-items: center;align-self: stretch;border-radius: var(--radius-s, 8px);border: 0.5px solid rgba(0, 0, 0, 0.30);background: #FFF;box-shadow: 0px 1px 2px 0px rgba(28, 28, 28, 0.05);width: 100%;"><input class="focus-ring focus-ring-light form-control petName" type="text" id="petName" maxlength="30" minlength="1" placeholder="Pet name " required="" style="display:flex;align-items:center;gap:var(--spacing-spacing-xs, 12px);flex:1 0 0;border:none;"><label class="form-label" for="petName" style="color: rgba(28, 28, 28, 0.50);font-family: Inter;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Pet Name</label><div id="petNameError" class="error-message">Please enter a pet name</div></div>
                                                </div>
                                                <div class="d-flex" style="width: 100%;">
                                                    <div style="display: flex;align-items: flex-start;align-content: flex-start;gap: 12px var(--spacing-spacing-xs, 12px);align-self: stretch;flex-wrap: wrap;width: 100%; margin-bottom: 10px;">
                                                        <div style="display: flex;flex-direction: column;align-items: flex-start;gap: var(--spacing-spacing-xs, 12px);flex: 1 0 0;">
                                                            <div id="dog_cat_btn" style="display: flex;align-items: flex-start;gap: var(--spacing-spacing-xs, 12px);align-self: stretch;">
                                                                <div class="custom-control custom-radio" style="display: flex;height: 64px;padding: 0px var(--spacing-spacing-s, 16px) 0px var(--spacing-spacing-m, 24px);justify-content: space-between;align-items: center;flex: 1 0 0;box-shadow: 0px 1px 2px 0px rgba(28, 28, 28, 0.05);border-radius: var(--radius-s, 8px);border: 0.5px solid rgba(0, 0, 0, 0.30);background: #FFF;"><label class="form-label custom-control-label" id="Dog" for="dog" style="color: #1C1C1C;text-align: center;font-family: Inter;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;margin-bottom: 0px;">Dog</label><input type="radio" id="dog" class="custom-control-input" style="display: flex;width: 22px;height: 22px;justify-content: center;align-items: center;border-radius: 8px;background: var(--colors-main-neutral-light, #F5F5F5);box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.25) inset;" name="pet"></div>
                                                                <div class="custom-control custom-radio" style="display: flex;height: 64px;padding: 0px var(--spacing-spacing-s, 16px) 0px var(--spacing-spacing-m, 24px);justify-content: space-between;align-items: center;flex: 1 0 0;box-shadow: 0px 1px 2px 0px rgba(28, 28, 28, 0.05);border-radius: var(--radius-s, 8px);border: 0.5px solid rgba(0, 0, 0, 0.30);background: #FFF;"><label class="form-label custom-control-label" id="Cat" for="cat" style="color: #1C1C1C;text-align: center;font-family: Inter;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;margin-bottom: 0px;">Cat</label><input type="radio" id="cat" class="custom-control-input" style="display: flex;width: 22px;height: 22px;justify-content: center;align-items: center;border-radius: 8px;background: var(--colors-main-neutral-light, #F5F5F5);box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.25) inset;" name="pet"></div>
                                                            </div>
                                                        </div>
                                                        <div id="input-grp-single" style="display: flex;align-items: flex-start;gap: var(--spacing-spacing-xs, 12px);flex: 1 0 0;position: relative;"><select class="focus-ring focus-ring-light form-select" disabled="" id="breed" required="" style="display:flex;height:64px;padding:20px;justify-content:space-between;align-items:center;flex:1 0 0;border-radius:var(--radius-s, 8px);border:0.5px solid rgba(0, 0, 0, 0.30);"></select><div id="breedError" class="error-message" style="display: none;">Please select a breed</div></div>
                                                    </div>
                                                </div>
                                                <div style="margin-bottom: 10px;width: 100%;">
                                                    <div class="focus-ring" id="input-grp-single" style="display: flex;height: 64px;padding: 20px;justify-content: space-between;align-items: center;align-self: stretch;display: flex;height: 64px;padding: 20px;justify-content: space-between;align-items: center;align-self: stretch;border-radius: var(--radius-s, 8px);border: 0.5px solid rgba(0, 0, 0, 0.30);background: #FFF;box-shadow: 0px 1px 2px 0px rgba(28, 28, 28, 0.05);position: relative;"><select id="surgery-type" class="focus-ring focus-ring-light form-select" style="display: flex;align-items: center;gap: var(--spacing-spacing-xs, 12px);flex: 1 0 0;border: none;color: rgba(28, 28, 28, 0.50);font-family: 'Inter';font-size: 16px;line-height: normal;--bs-body-font-weight: 500;" name="surgery-type" required >
                                                    <option value="none" selected>Select Surgery</option>
                                                    <option value="Neuter">Neuter</option>
                                                    <option value="Tooth Extraction">Tooth Extraction</option>
                                                </select><div id="surgeryTypeError" class="error-message" style="display: none;">Please select a surgery</div></div>
                                                </div>
                                                <div id="input-grp-single" class="form-floating" style="display: flex;height: 100px;min-height: 100px;padding: 20px 20px 12px 20px;flex-direction: column;justify-content: space-between;align-items: flex-start;align-self: stretch;border-radius: var(--radius-s, 8px);border: 0.5px solid rgba(0, 0, 0, 0.30);background: #FFF;box-shadow: 0px 1px 2px 0px rgba(28, 28, 28, 0.05);"><textarea class="focus-ring focus-ring-light form-control" id="floatingTextarea" style="display: flex;align-items: flex-start;gap: var(--spacing-spacing-xs, 12px);flex: 1 0 0;align-self: stretch;border: none;" maxlength="50" minlength="1" required="" placeholder="Leave a comment here"></textarea><label class="form-label" for="floatingTextarea" style="color: rgba(28, 28, 28, 0.50);font-family: Inter;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Additional Notes</label></div>
                                            </div><button class="btn add_form" id="add_form" type="button" style="display:flex;width:56px;height:56px;padding:10px;justify-content:center;align-items:center;gap:10px;border-radius:30px;border:0.5px solid rgba(0, 0, 0, 0.15);background:var(--colors-actions-action-neut, #F9F9F9);box-shadow:0px 1px 2px 0px rgba(28, 28, 28, 0.05);"><i class="typcn typcn-plus"></i></button>
                                        </div><div id="next-button" class="d-flex button-row mt-4" style="display: flex;justify-content: flex-end;align-items: center;gap: 813px;align-self: stretch;"><button id="next_btn" class="btn btn-primary border-primary ml-auto js-btn-next" onClick="updateAppointmentDetails()" type="button" title="Next" style="color: var(--colors-main-neutral, #FFF);text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.10);font-family: Inter;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;display: inline-flex;height: 56px;min-width: 100px;padding: var(--spacing-spacing-s, 16px) var(--spacing-spacing-m, 24px);justify-content: center;align-items: center;gap: var(--spacing-spacing-m, 24px);flex-shrink: 0;border-radius: var(--radius-s, 8px);background: var(--colors-actions-action, #045B62);box-shadow: 0px 1px 2px 0px rgba(28, 28, 28, 0.05);--bs-primary: #045B62;--bs-primary-rgb: 4,91,98;" disabled>Next</button></div>
                                    </div>
                                    <div id="single-form-next-prev" class="multisteps-form__panel" data-animation="scaleIn" style="display: flex;flex-direction: column;justify-content: center;align-items: center;gap: 25px;align-self: stretch;">
                                        <div style="display: flex;flex-direction: column;align-items: flex-start;gap: 52px;align-self: stretch;">
                                            <div style="display: flex;padding: var(--spacing-spacing-m, 24px);align-items: flex-start;gap: var(--spacing-spacing-s, 16px);align-self: stretch;border-radius: var(--radius-s, 8px);border: 1px solid rgba(0, 0, 0, 0.25);">
                                                <div id="details_container" class="details_container" style="display: flex;flex-direction: column;align-items: flex-start;gap: var(--spacing-spacing-s, 16px);flex: 1 0 0;">
                                                    <div class="d-flex justify-content-between align-items-center align-self-stretch">
                                                        <h1 style="flex: 1 0 0;color: #000;font-family: Inter;font-size: 21px;font-style: normal;font-weight: 700;line-height: normal;">APPOINTMENT PREFERENCES</h1>
                                                    </div>
                                                    <div class="d-flex flex-column align-self-stretch appointment_details" id="appointment_details" style="align-items: flex-start;gap: var(--spacing-spacing-m, 24px);">
                                                        <div class="d-flex align-items-center align-self-stretch petName_type_breed" id="petName_type_breed" style="gap: 20px;">
                                                            <div class="d-flex flex-column align-items-start pet_Detail" id="petName_Detail" style="gap: 10px;flex: 1 0 0;">
                                                                <h1>Pet Name</h1>
                                                                <p>Pet Name</p>
                                                            </div>
                                                            <div class="d-flex flex-column align-items-start pet_Detail" id="petType_Detail" style="gap: 10px;flex: 1 0 0;">
                                                                <h1>Pet Type</h1>
                                                                <p>Pet Type</p>
                                                            </div>
                                                            <div class="d-flex flex-column align-items-start pet_Detail" id="petBreed_Detail" style="gap: 10px;flex: 1 0 0;">
                                                                <h1>Breed</h1>
                                                                <p>Breed</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-self-stretch surgery_type_notes" id="surgery_type_notes" style="align-items: flex-start;gap: 20px;">
                                                            <div class="d-flex flex-column align-items-start pet_Detail" id="surgery_type_Detail" style="gap: 10px;flex: 1 0 0;">
                                                                <h1>Surgery Type</h1>
                                                                <p>Surgery Type</p>
                                                            </div>
                                                            <div class="d-flex flex-column align-items-start pet_Detail" id="additional_Notes_detail" style="gap: 10px;flex: 1 0 0;">
                                                                <h1>Additional Notes</h1>
                                                                <p>Additional Notes</p>
                                                            </div>
                                                            <div class="d-flex flex-column align-items-start blank" id="blank" style="gap: 10px;flex: 1 0 0;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-start align-self-stretch multisteps-form__content" id="form-content-1" style="gap: 25px;">
                                                <div class="d-flex justify-content-between align-items-start align-self-stretch calendar_time_container">
                                                    <div class="d-flex flex-column align-self-stretch calendar_container" style="width: 546.5px;align-items: flex-start;gap: 25px;">
                                                        <div class="d-flex flex-column align-items-start align-self-stretch Appointment_wrapper" style="gap: var(--spacing-spacing-s, 16px);">
                                                            <div class="d-flex justify-content-between align-items-center align-self-stretch Appointment_icons"><span id="prev" class="prev_month"><i class="typcn typcn-chevron-left"></i></span>
                                                                <p class="text-center current-date"></p><span id="next" class="next_month"><i class="typcn typcn-chevron-right"></i></span>
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-center align-items-center align-self-stretch Appointment_calendar">
                                                                <ul class="text-start Appointment_weeks">
                                                                    <li style="height: 10px;">Sun</li>
                                                                    <li style="height: 10px;">Mon</li>
                                                                    <li style="height: 10px;">Tue</li>
                                                                    <li style="height: 10px;">Wed</li>
                                                                    <li style="height: 10px;">Thu</li>
                                                                    <li style="height: 10px;">Fri</li>
                                                                    <li style="height: 10px;">Sat</li>
                                                                </ul>
                                                                <ul class="days"></ul>
                                                            </div>
                                                        </div>
                                                        <div class="selected_fullyBooked" style="display: flex;padding: 10px 30px;align-items: center;gap: 20px;align-self: stretch;">
                                                            <div class="selected_Calendar_date" style="display: flex;padding: 20px;flex-direction: column;justify-content: center;align-items: center;gap: 10px;border-radius: var(--radius-s, 8px);background: rgba(0, 0, 0, 0.10);">
                                                                <p style="color: #045B62;text-align: center;font-family: Inter;font-size: 16px;font-style: normal;font-weight: 700;line-height: normal;margin: 0;">Selected</p>
                                                            </div>
                                                            <div class="fully_booked" style="display: flex;padding: 20px;flex-direction: column;justify-content: center;align-items: center;gap: 10px;border-radius: var(--radius-s, 8px);background: rgba(218, 83, 79, 0.50);">
                                                                <p style="color: #B82319;text-align: center;font-family: Inter;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;margin: 0;">Fully Booked</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-none flex-column align-items-center Appointment_time_options" id="Appointment_time_options">
                                                        <p id="selected_date" class="selected_date"></p>
                                                        <div class="d-flex justify-content-center align-items-start time_options_container" id="time_options_container">
                                                            <ul class="d-flex flex-column justify-content-center align-items-center time_options" id="time_options">
                                                                <li class="Appointment_time-option"><input type="radio" id="time_1" name="time" value="10:00 AM"><label class="form-label" for="time_1">10:00 AM</label></li>
                                                                <li class="Appointment_time-option"><input type="radio" id="time_2" name="time" value="10:30 AM"><label class="form-label" for="time_2">10:30 AM</label></li>
                                                                <li class="Appointment_time-option"><input type="radio" id="time_3" name="time" value="11:00 AM"><label class="form-label" for="time_3">11:00 AM</label></li>
                                                            </ul>
                                                            <ul class="d-flex flex-column justify-content-center align-items-center time_options" id="time_options-1">
                                                                <li class="Appointment_time-option"><input type="radio" id="time_-4" name="time" value="01:00 PM"><label class="form-label" for="time_4">01:00 PM</label></li>
                                                                <li class="Appointment_time-option"><input type="radio" id="time_-5" name="time" value="01:30 PM"><label class="form-label" for="time_5">01:30 PM</label></li>
                                                                <li class="Appointment_time-option"><input type="radio" id="time_-6" name="time" value="02:00 PM"><label class="form-label" for="time_6">02:00 PM</label></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="next-prev-buttons" class="button-row d-flex mt-4" style="justify-content: space-between;align-items: center;align-self: stretch;"><button class="btn btn btn-primary js-btn-prev" id="prev_button" type="button" title="Prev" style="display: flex;height: 56px;min-width: 100px;padding: 16px var(--spacing-spacing-m, 24px);justify-content: center;align-items: center;gap: var(--spacing-spacing-m, 24px);background: transparent;border-radius: var(--radius-s, 8px);border: none;color: var(--colors-actions-action, #045B62);font-family: Inter;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;">Previous</button><button class="btn btn-primary disabled border-primary disabled ml-auto js-btn-next" id="next_button" type="button" title="Next" style="color:var(--colors-main-neutral, #FFF);text-shadow:0px 2px 2px rgba(0, 0, 0, 0.10);font-family:Inter;font-size:16px;font-style:normal;font-weight:600;line-height:normal;display:inline-flex;height:56px;min-width:100px;padding:var(--spacing-spacing-s, 16px) var(--spacing-spacing-m, 24px);justify-content:center;align-items:center;gap:var(--spacing-spacing-m, 24px);flex-shrink:0;border-radius:var(--radius-s, 8px);background:var(--colors-actions-action, #045B62);box-shadow:0px 1px 2px 0px rgba(28, 28, 28, 0.05);--bs-primary:#045B62;--bs-primary-rgb:4,91,98;" disabled="">Next</button></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="single-form-next-prev-1" class="multisteps-form__panel" data-animation="scaleIn" style="display: flex;flex-direction: column;justify-content: center;align-items: center;gap: 25px;align-self: stretch;">
                                        <div id="form-content-2" class="multisteps-form__content" style="display: flex;flex-direction: column;align-items: flex-start;gap: 25px;align-self: stretch;">
                                            <div class="d-flex flex-column align-items-start align-self-stretch details_confirmation" id="details_confirmation">
                                                <p class="confirmation_details">APPOINTMENT DETAILS CONFIRMATION</p>
                                                <div class="d-flex flex-column align-items-start align-self-stretch details" id="details">
                                                    <div class="d-flex align-items-center align-self-stretch details_confirmation_1strow" id="details_confirmation_1strow">
                                                        <div class="d-flex flex-column align-items-start detail_confirmation">
                                                            <h1>Pet Name</h1>
                                                            <p id="confirm_Pet_Name" class="confirm_Pet_Name">Pet Name</p>
                                                        </div>
                                                        <div class="d-flex flex-column align-items-start detail_confirmation">
                                                            <h1>Pet Type</h1>
                                                            <p id="confirm_Pet_type" class="confirm_Pet_type">Pet Type</p>
                                                        </div>
                                                        <div class="d-flex flex-column align-items-start detail_confirmation">
                                                            <h1>Breed</h1>
                                                            <p id="confirm_breed" class="confirm_breed">Breed</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-start align-self-stretch details_confirmation_2ndrow" id="details_confirmation_2ndrow">
                                                        <div class="d-flex flex-column align-items-start detail_confirmation">
                                                            <h1>Surgery Type</h1>
                                                            <p id="confirm_surgery_Type" class="confirm_surgery_Type">Surgery Type</p>
                                                        </div>
                                                        <div class="d-flex flex-column align-items-start detail_confirmation">
                                                            <h1>Additional Notes</h1>
                                                            <p id="confirm_additional_Notes" class="confirm_additional_Notes">Additional Notes</p>
                                                        </div>
                                                        <div class="d-flex flex-column align-items-start detail_confirmation">
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-start align-self-stretch details_confirmation_3rdrow" id="details_confirmation_3rdrow">
                                                        <div class="d-flex flex-column align-items-start detail_confirmation">
                                                            <h1>Date</h1>
                                                            <p class="confirm_date">Date</p>
                                                        </div>
                                                        <div class="d-flex flex-column align-items-start detail_confirmation">
                                                            <h1>Time</h1>
                                                            <p class="confirm_time">Time</p>
                                                        </div>
                                                        <div class="d-flex flex-column align-items-start detail_confirmation">
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center align-self-stretch button-row d-flex mt-4" id="next-prev-buttons-1"><button class="btn btn btn-primary js-btn-prev" type="button" title="Prev" style="display: flex;height: 56px;min-width: 100px;padding: 16px var(--spacing-spacing-m, 24px);justify-content: center;align-items: center;gap: var(--spacing-spacing-m, 24px);background: transparent;border-radius: var(--radius-s, 8px);border: none;color: var(--colors-actions-action, #045B62);font-family: Inter;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;">Previous</button><button id="book_appointment" class="btn border-primary btn btn-primary ml-auto js-btn-book" onclick="showModal()" type="button" title="Next" style="color: var(--colors-main-neutral, #FFF);text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.10);font-family: Inter;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;display: inline-flex;height: 56px;min-width: 100px;padding: var(--spacing-spacing-s, 16px) var(--spacing-spacing-m, 24px);justify-content: center;align-items: center;gap: var(--spacing-spacing-m, 24px);flex-shrink: 0;border-radius: var(--radius-s, 8px);background: var(--colors-actions-action, #045B62);box-shadow: 0px 1px 2px 0px rgba(28, 28, 28, 0.05);--bs-primary: #045B62;--bs-primary-rgb: 4,91,98;">Book Appointment</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div><div class="modal fade" id="consent_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="consent-content">
            <div class="consent-icon-header">
                <div class="icon-container"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                  <g clip-path="url(#clip0_5136_18516)">
                    <path d="M16 10.6667V16M16 21.3333H16.0133M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 12.8174 26.7357 9.76516 24.4853 7.51472C22.2348 5.26428 19.1826 4 16 4C12.8174 4 9.76516 5.26428 7.51472 7.51472C5.26428 9.76516 4 12.8174 4 16Z" stroke="#045B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </g>
                  <defs>
                    <clipPath id="clip0_5136_18516">
                      <rect width="32" height="32" fill="white"/>
                    </clipPath>
                  </defs>
                </svg></div>
                </div>
                <div class="consent-title"><h1>Informed Consent and Acknowledgement</h1><p>Before scheduling your pet's surgery, please carefully read and acknowledge the following:</p></div>
                <div class="consent-text"><p><span class="custom-style">1. Understanding the Procedure:</span> I understand that my pet will undergo a surgical procedure as recommended by the veterinarian. I have received information about the procedure, its risks, and its benefits.</p>

                    <p><span class="custom-style">2. Health Status:</span> I confirm that I have provided accurate information about my pet's health, including any known medical conditions, allergies, or medications.</p>

                    <p><span class="custom-style">3. Financial Responsibility:</span> I acknowledge that I am responsible for the cost of the surgical procedure and any related services. I have discussed the estimated costs with the clinic.</p>

                    <p><span class="custom-style">4. Postoperative Care:</span> I understand that postoperative care is essential for my pet's recovery. I will follow the post-surgery care instructions provided by the clinic.</p>

                    <p><span class="custom-style">5. Emergency Contact:</span> I have provided a valid emergency contact person and phone number in case of unforeseen circumstances during or after the surgery.</p>

                    <p>By clicking "I Agree," I confirm that I have read, understood, and agree to the terms and conditions mentioned above. I consent to my pet undergoing the scheduled surgery.</p>

                    <p>Please note that your agreement is required to proceed with scheduling the surgery for your pet.</p></div>

                <div class="modal-footer">
                    <button type="button" class="btn disagree" data-dismiss="modal"><div class="disagree_base">I Disagree</div></button>
                    <button type="button" class="btn agree"><div class="agree_base">I Agree</div></button>
                </div>
            </div>
        </div>
    </div>
    <footer style="display: flex;padding: 48px 100px;align-items: center;gap: 108px;background: rgba(4, 91, 98, 0.10);width: 100%;"><img src="{{ asset('assets/img/dogs_cats.png') }}" style="width: 159.783px;height: 150px;flex-shrink: 0;"></footer>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/appointmentforms.js"></script>
    <script src="/assets/js/calendar.js"></script>
    <script src="/assets/js/Multi-step-form-script.js"></script>
</body>

</html>
