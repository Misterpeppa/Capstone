<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>appointmentformUserSide</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/typicons.min.css">
    <link rel="stylesheet" href="assets/css/bs-theme-overrides.css">
    <link rel="stylesheet" href="assets/css/Multi-step-form.css">
    <link rel="stylesheet" href="assets/css/Navbar-Centered-Links-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Toggle-Switch-toggle-switch.css">
</head>

<body>
    <nav class="navbar navbar-expand-md bg-body d-flex py-3"
        style="max-width: 1920px;background: #EFEFEF;box-shadow: 0px 10px 15px -3px rgba(0, 0, 0, 0.10), 0px 4px 6px -2px rgba(28, 28, 28, 0.05);width: 100%;">
        <div class="container">
            <div class="d-flex align-items-center clinic_logo"><img src="assets/img/dogs&cats.png"
                    style="width: 63.913px;height: 60px;">
                <p class="fw-bold"
                    style="color: #000;font-size: 20px;font-family: Inter;--bs-body-font-weight: 700;width: 200px;margin: 0px;">
                    Tagapo Dogs &amp; Cats Veterinary Clinic</p>
            </div><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-3"
                style="background: #EFEFEF;"><span class="visually-hidden">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-3">
                <ul class="navbar-nav mx-auto" style="font-family: Inter;--bs-body-font-weight: 700;">
                    <li class="nav-item"><a class="nav-link active" href="#" style="color: #1C1C1C;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="appointment_list.html"
                            style="color: #1C1C1C;">Appointments</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color: #1C1C1C;">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color: #1C1C1C;">About Us</a></li>
                </ul>
                <div class="user"><button class="btn notification" id="notification" type="button"><span
                            class="notification_base"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                height="18" viewbox="0 0 15 18" fill="none">
                                <path
                                    d="M2.29482 10.4791L2.93736 10.866L2.93903 10.8632L2.29482 10.4791ZM1.38031 11.998L0.737787 11.6112L0.737673 11.6113L1.38031 11.998ZM2.23916 14.328L1.99871 15.0385L2.00149 15.0394L2.23916 14.328ZM12.7918 14.328L12.5564 13.6159L12.5542 13.6167L12.7918 14.328ZM13.6507 11.998L14.2938 11.6121L14.2932 11.6112L13.6507 11.998ZM12.7362 10.4791L12.0864 10.854L12.0937 10.866L12.7362 10.4791ZM8.99065 2.00199L8.78522 2.7233C9.0594 2.80139 9.35415 2.71728 9.54583 2.50625C9.7375 2.29522 9.79296 1.99376 9.68894 1.72833L8.99065 2.00199ZM6.0483 2.00199L5.35001 1.72833C5.24599 1.99376 5.30145 2.29522 5.49313 2.50625C5.68481 2.71728 5.97955 2.80139 6.25374 2.7233L6.0483 2.00199ZM5.83359 16.3002L5.30286 16.8301L5.30326 16.8305L5.83359 16.3002ZM7.51948 1.02137C4.47306 1.02137 1.99811 3.49632 1.99811 6.54274H3.49811C3.49811 4.32475 5.30148 2.52137 7.51948 2.52137V1.02137ZM1.99811 6.54274V8.84096H3.49811V6.54274H1.99811ZM1.99811 8.84096C1.99811 8.99314 1.96284 9.22832 1.89124 9.48627C1.8197 9.74398 1.72858 9.96429 1.65061 10.0951L2.93903 10.8632C3.10759 10.5804 3.24311 10.2242 3.33658 9.88749C3.42999 9.551 3.49811 9.17386 3.49811 8.84096H1.99811ZM1.6523 10.0923L0.737787 11.6112L2.02284 12.3849L2.93735 10.866L1.6523 10.0923ZM0.737673 11.6113C0.34933 12.2568 0.264391 12.9889 0.507 13.6441C0.749283 14.2984 1.2894 14.7984 1.99871 15.0384L2.47961 13.6176C2.15512 13.5078 1.98351 13.3119 1.91366 13.1233C1.84415 12.9355 1.84668 12.6776 2.02295 12.3847L0.737673 11.6113ZM2.00149 15.0394C5.58318 16.236 9.44782 16.236 13.0295 15.0394L12.5542 13.6167C9.28099 14.7103 5.75001 14.7103 2.47682 13.6167L2.00149 15.0394ZM13.0272 15.0401C14.4485 14.5703 15.0644 12.8965 14.2938 11.6121L13.0076 12.3839C13.2867 12.849 13.0596 13.4496 12.5564 13.6159L13.0272 15.0401ZM14.2932 11.6112L13.3787 10.0923L12.0937 10.866L13.0082 12.3849L14.2932 11.6112ZM13.3858 10.1043C13.3086 9.97054 13.2183 9.7472 13.1473 9.48852C13.0762 9.22901 13.0408 8.99336 13.0408 8.84096H11.5408C11.5408 9.17364 11.6089 9.55031 11.7008 9.88524C11.7928 10.221 11.9252 10.5742 12.0865 10.8539L13.3858 10.1043ZM13.0408 8.84096V6.54274H11.5408V8.84096H13.0408ZM13.0408 6.54274C13.0408 3.50428 10.5579 1.02137 7.51948 1.02137V2.52137C9.72952 2.52137 11.5408 4.3327 11.5408 6.54274H13.0408ZM9.19608 1.28067C8.10014 0.968542 6.93882 0.968542 5.84287 1.28067L6.25374 2.7233C7.08111 2.48766 7.95784 2.48766 8.78522 2.7233L9.19608 1.28067ZM6.7466 2.27564C6.86777 1.96645 7.16863 1.75 7.51948 1.75V0.25C6.53434 0.25 5.69008 0.860583 5.35001 1.72833L6.7466 2.27564ZM7.51948 1.75C7.87033 1.75 8.17119 1.96645 8.29236 2.27564L9.68894 1.72833C9.34888 0.860583 8.50461 0.25 7.51948 0.25V1.75ZM9.15516 14.6143C9.15516 15.5122 8.41739 16.25 7.51948 16.25V17.75C9.24582 17.75 10.6552 16.3407 10.6552 14.6143H9.15516ZM7.51948 16.25C7.07487 16.25 6.65887 16.0648 6.36392 15.7699L5.30326 16.8305C5.86716 17.3944 6.65991 17.75 7.51948 17.75V16.25ZM6.36432 15.7703C6.05752 15.463 5.88477 15.0468 5.88379 14.6126L4.38379 14.616C4.38567 15.4465 4.71607 16.2425 5.30286 16.8301L6.36432 15.7703Z"
                                    fill="#1C1C1C"></path>
                            </svg></span></button>
                    <div class="dropdown admin_btn"><a class="dropdown-toggle" aria-expanded="false"
                            data-bs-toggle="dropdown" href="#"><img src="assets/img/image%2011%20(1).png"></a>
                        <div class="dropdown-menu"><a class="dropdown-item"
                                href="user_settings.html"><span>Settings</span></a>
                            <hr><a class="dropdown-item" href="#"><span>Sign Out</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <div class="container-fluid mb-5">
            <div class="row d-flex flex-column align-content-center flex-wrap">
                <div class="col-9 user_appointment">
                    <div class="d-flex flex-column align-items-center align-self-stretch">
                        <div class="d-flex flex-column align-items-start">
                            <h1 class="text-center align-self-stretch"
                                style="color: #1C1C1C;font-size: 36px;font-family: Inter;">BOOK AN</h1>
                            <h1 class="text-center"
                                style="color: #045B62;font-size: 50px;--bs-body-font-weight: 700;font-family: Inter;">
                                APPOINTMENT</h1>
                        </div>
                        <p class="text-center"
                            style="color: #1c1c1c;font-size: 20px;font-family: Inter;--bs-body-font-weight: 500;">Please
                            input complete and accurate details to secure a slot for your appointment.</p>
                    </div>
                    <section class="multi_step_section">
                        <div class="d-flex multiple-step-form-n overflow-visible" id="multple-step-form-n">
                            <div id="progress-bar-button" class="multisteps-form" style="padding-top: 10px;">
                                <div class="multisteps-form__progress"><a
                                        class="btn link-success multisteps-form__progress-btn js-active"
                                        role="button" title="1"
                                        style="--bs-success:#045B62;--bs-success-rgb:4,91,98;"></a><a
                                        class="btn link-success multisteps-form__progress-btn" role="button"
                                        title="2" style="--bs-success: #045B62;--bs-success-rgb: 4,91,98;"></a><a
                                        class="btn link-success multisteps-form__progress-btn" role="button"
                                        title="User Info"
                                        style="--bs-success: #045B62;--bs-success-rgb: 4,91,98;"></a></div>
                            </div>
                            <div id="multistep-start-row" class="row"
                                style="display: flex;flex-direction: column;justify-content: center;align-items: center;gap: 25px;align-self: stretch;">
                                <div id="multistep-start-column" class="col-12 col-lg-8 m-auto" style="width: 100%;">
                                    <form id="main-form" class="multisteps-form__form">
                                        <div class="d-flex flex-column justify-content-center align-items-center align-self-stretch multisteps-form__panel js-active"
                                            id="single-form-next" data-animation="scaleIn" style="gap: 25px;">
                                            <h3 class="text-start multisteps-form__title"
                                                style="align-self: stretch;color: #1C1C1C;font-family: Inter;font-size: 21px;font-style: normal;font-weight: 700;line-height: normal;">
                                                APPOINTMENT PREFERENCES</h3>
                                            <div id="form-content" class="multisteps-form__content"
                                                style="display: flex;flex-direction: column;justify-content: center;align-items: center;gap: 25px;align-self: stretch;max-height: 1500px;">
                                                <div id="form_fields" class="form_fields">
                                                    <div class="align-self-stretch form-floating"><input
                                                            class="form-control" type="text" id="petName"
                                                            data-id="petName" placeholder="Pet Name"
                                                            maxlength="32"><label class="form-label"
                                                            for="petName">Pet Name<span>&nbsp;*</span></label>
                                                        <div id="error-petName" class="error-message"><span>• Please
                                                                enter pet name.</span></div>
                                                    </div>
                                                    <div class="pet_type_and_breed_container">
                                                        <div class="species_container">
                                                            <div id="dog_cat_btn" class="species"
                                                                style="display: flex;align-items: flex-start;gap: var(--spacing-spacing-xs, 12px);align-self: stretch;">
                                                                <div class="custom-control custom-radio"><label
                                                                        class="form-label custom-control-label"
                                                                        id="Dog" for="dog"
                                                                        style="color: #1C1C1C;text-align: center;font-family: Inter;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;margin-bottom: 0px;">Dog</label><input
                                                                        type="radio" id="dog"
                                                                        class="custom-control-input"
                                                                        style="display: flex;width: 22px;height: 22px;justify-content: center;align-items: center;border-radius: 8px;background: var(--colors-main-neutral-light, #F5F5F5);box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.25) inset;"
                                                                        name="dog"></div>
                                                                <div class="custom-control custom-radio"><label
                                                                        class="form-label custom-control-label"
                                                                        id="Cat" for="cat"
                                                                        style="color: #1C1C1C;text-align: center;font-family: Inter;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;margin-bottom: 0px;">Cat</label><input
                                                                        type="radio" id="cat"
                                                                        class="custom-control-input"
                                                                        style="display: flex;width: 22px;height: 22px;justify-content: center;align-items: center;border-radius: 8px;background: var(--colors-main-neutral-light, #F5F5F5);box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.25) inset;"
                                                                        name="cat"></div>
                                                            </div>
                                                        </div>
                                                        <div class="align-self-stretch form-floating breed_container">
                                                            <select class="form-select" id="breed" required=""
                                                                style="height: 100%;" disabled=""></select><label
                                                                class="form-label" for="breed">Select a
                                                                breed<span>&nbsp;*</span></label>
                                                            <div id="error-breed" class="error-message"><span>• Please
                                                                    select a breed</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="align-self-stretch form-floating"><select
                                                            class="form-select form-select-sm" id="surgery_type"
                                                            data-id="surgery_type">
                                                            <option value="" selected="">Select a surgery
                                                            </option>
                                                            <option value="Neuter">Neuter (𝘐𝘵 𝘪𝘴 𝘵𝘩𝘦
                                                                𝘴𝘶𝘳𝘨𝘪𝘤𝘢𝘭 𝘳𝘦𝘮𝘰𝘷𝘢𝘭 𝘰𝘧 𝘢 𝘮𝘢𝘭𝘦
                                                                𝘥𝘰𝘨'𝘴 𝘵𝘦𝘴𝘵𝘪𝘤𝘭𝘦𝘴)</option>
                                                            <option value="Tooth Extraction">Tooth Extraction
                                                                (𝘳𝘦𝘮𝘰𝘷𝘢𝘭 𝘰𝘧 𝘢 𝘵𝘰𝘰𝘵𝘩)</option>
                                                        </select><label class="form-label" for="surgery_type">Surgery
                                                            Type<span>&nbsp;*</span></label>
                                                        <div id="error-surgery" class="error-message"><span>• Please
                                                                select a surgery type</span></div>
                                                    </div>
                                                    <div class="align-self-stretch form-floating">
                                                        <textarea class="form-control" id="floatingTextarea" data-id="floatingTextarea" placeholder="Additional Notes"
                                                            type="text"></textarea><label class="form-label form-label"
                                                            for="floatingTextarea">Additional Notes</label>
                                                    </div>
                                                </div>
                                                <hr id="lineBreak" class="lineBreak">
                                                <div id="form_fields-1" class="form_fields" style="display: none;">
                                                    <div class="align-self-stretch form-floating"><input
                                                            class="form-control" type="text" id="petName-1"
                                                            data-id="petName" placeholder="Pet Name"
                                                            maxlength="32"><label class="form-label"
                                                            for="petName-1">Pet Name<span>&nbsp;*</span></label>
                                                        <div id="error-petName-1" class="error-message"><span>• Please
                                                                enter pet name.</span></div>
                                                    </div>
                                                    <div class="pet_type_and_breed_container">
                                                        <div class="species_container">
                                                            <div id="dog_cat_btn-1" class="species"
                                                                style="display: flex;align-items: flex-start;gap: var(--spacing-spacing-xs, 12px);align-self: stretch;">
                                                                <div class="custom-control custom-radio"><label
                                                                        class="form-label custom-control-label"
                                                                        id="Dog-1" for="dog-1"
                                                                        style="color: #1C1C1C;text-align: center;font-family: Inter;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;margin-bottom: 0px;">Dog</label><input
                                                                        type="radio" id="dog-1"
                                                                        class="custom-control-input"
                                                                        style="display: flex;width: 22px;height: 22px;justify-content: center;align-items: center;border-radius: 8px;background: var(--colors-main-neutral-light, #F5F5F5);box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.25) inset;"
                                                                        name="dog-1"></div>
                                                                <div class="custom-control custom-radio"><label
                                                                        class="form-label custom-control-label"
                                                                        id="Cat-1" for="cat-1"
                                                                        style="color: #1C1C1C;text-align: center;font-family: Inter;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;margin-bottom: 0px;">Cat</label><input
                                                                        type="radio" id="cat-1"
                                                                        class="custom-control-input"
                                                                        style="display: flex;width: 22px;height: 22px;justify-content: center;align-items: center;border-radius: 8px;background: var(--colors-main-neutral-light, #F5F5F5);box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.25) inset;"
                                                                        name="cat-1"></div>
                                                            </div>
                                                        </div>
                                                        <div class="align-self-stretch form-floating breed_container">
                                                            <select class="form-select" id="breed-1" disabled=""
                                                                required="" style="height: 100%;"></select><label
                                                                class="form-label" for="breed-1">Select a
                                                                breed<span>&nbsp;*</span></label>
                                                            <div id="error-breed-1" class="error-message"><span>•
                                                                    Please select a breed</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="align-self-stretch form-floating"><select
                                                            class="form-select form-select-sm" id="surgery_type-1"
                                                            data-id="surgery_type-1">
                                                            <option value="none" selected="">Select a surgery
                                                            </option>
                                                            <option value="Neuter">Neuter</option>
                                                            <option value="Tooth Extraction">Tooth Extraction</option>
                                                        </select><label class="form-label"
                                                            for="surgery_type-1">Surgery
                                                            Type<span>&nbsp;*</span></label>
                                                        <div id="error-surgery-1" class="error-message"><span>• Please
                                                                select a surgery type</span></div>
                                                    </div>
                                                    <div class="align-self-stretch form-floating">
                                                        <textarea class="form-control" id="floatingTextarea-1" data-id="floatingTextarea-1" placeholder="Additional Notes"
                                                            maxlength="255" minlength="0"></textarea><label class="form-label form-label"
                                                            for="floatingTextarea-1">Additional Notes</label>
                                                    </div>
                                                </div>
                                                <hr id="lineBreak-1" class="lineBreak">
                                                <div id="form_fields-2" class="form_fields" style="display: none;">
                                                    <div class="align-self-stretch form-floating"><input
                                                            class="form-control" type="text" id="petName-2"
                                                            data-id="petName" placeholder="Pet Name"
                                                            maxlength="32"><label class="form-label"
                                                            for="petName-2">Pet Name<span>&nbsp;*</span></label>
                                                        <div id="error-petName-2" class="error-message"><span>• Please
                                                                enter pet name.</span></div>
                                                    </div>
                                                    <div class="pet_type_and_breed_container">
                                                        <div class="species_container">
                                                            <div id="dog_cat_btn-2" class="species"
                                                                style="display: flex;align-items: flex-start;gap: var(--spacing-spacing-xs, 12px);align-self: stretch;">
                                                                <div class="custom-control custom-radio"><label
                                                                        class="form-label custom-control-label"
                                                                        id="Dog-2" for="dog-2"
                                                                        style="color: #1C1C1C;text-align: center;font-family: Inter;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;margin-bottom: 0px;">Dog</label><input
                                                                        type="radio" id="dog-2"
                                                                        class="custom-control-input"
                                                                        style="display: flex;width: 22px;height: 22px;justify-content: center;align-items: center;border-radius: 8px;background: var(--colors-main-neutral-light, #F5F5F5);box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.25) inset;"
                                                                        name="dog-2"></div>
                                                                <div class="custom-control custom-radio"><label
                                                                        class="form-label custom-control-label"
                                                                        id="Cat-2" for="cat-2"
                                                                        style="color: #1C1C1C;text-align: center;font-family: Inter;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;margin-bottom: 0px;">Cat</label><input
                                                                        type="radio" id="cat-2"
                                                                        class="custom-control-input"
                                                                        style="display: flex;width: 22px;height: 22px;justify-content: center;align-items: center;border-radius: 8px;background: var(--colors-main-neutral-light, #F5F5F5);box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.25) inset;"
                                                                        name="cat-2"></div>
                                                            </div>
                                                        </div>
                                                        <div class="align-self-stretch form-floating breed_container">
                                                            <select class="form-select" id="breed-2" disabled=""
                                                                required="" style="height: 100%;"></select><label
                                                                class="form-label" for="breed-2">Select a
                                                                breed<span>&nbsp;*</span></label>
                                                            <div id="error-breed-2" class="error-message"><span>•
                                                                    Please select a breed</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="align-self-stretch form-floating"><select
                                                            class="form-select form-select-sm" id="surgery_type-2"
                                                            data-id="surgery_type-2">
                                                            <option value="none" selected="">Select a surgery
                                                            </option>
                                                            <option value="Neuter">Neuter</option>
                                                            <option value="Tooth Extraction">Tooth Extraction</option>
                                                        </select><label class="form-label"
                                                            for="surgery_type-2">Surgery
                                                            Type<span>&nbsp;*</span></label>
                                                        <div id="error-surgery-2" class="error-message"><span>• Please
                                                                select a surgery type</span></div>
                                                    </div>
                                                    <div class="align-self-stretch form-floating">
                                                        <textarea class="form-control" id="floatingTextarea-2" data-id="floatingTextarea-2" placeholder="Additional Notes"
                                                            maxlength="255" minlength="0"></textarea><label class="form-label"
                                                            for="floatingTextarea-2">Additional Notes</label>
                                                    </div>
                                                </div>
                                                <div class="add_form_btn_container"><button class="btn add_form"
                                                        data-bs-toggle="tooltip" data-bss-tooltip="" id="add_form"
                                                        type="button" title="Add Pet"><span><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <g clip-path="url(#clip0_1917_11656)">
                                                                    <path d="M12 5V19M5 12H19" stroke="black"
                                                                        stroke-width="2" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_1917_11656">
                                                                        <rect width="24" height="24"
                                                                            fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg></span></button><button class="btn remove_form"
                                                        data-bs-toggle="tooltip" data-bss-tooltip="" id="remove_form"
                                                        type="button" title="Remove Pet"><span><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <g clip-path="url(#clip0_2291_11324)">
                                                                    <path d="M5 12H19" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_2291_11324">
                                                                        <rect width="24" height="24"
                                                                            fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg></span></button><button class="btn remove_form"
                                                        data-bs-toggle="tooltip" data-bss-tooltip=""
                                                        id="remove_form-1" type="button"
                                                        title="Remove Pet"><span><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <g clip-path="url(#clip0_2291_11324)">
                                                                    <path d="M5 12H19" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_2291_11324">
                                                                        <rect width="24" height="24"
                                                                            fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg></span></button></div>
                                            </div>
                                            <div class="form_content_buttons mb-4"><button id="next_btn"
                                                    class="btn  border-primary ml-auto js-btn-next" type="button"
                                                    title="Next"
                                                    style="color: var(--colors-main-neutral, #FFF);text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.10);font-family: Inter;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;display: inline-flex;height: 56px;min-width: 100px;padding: var(--spacing-spacing-s, 16px) var(--spacing-spacing-m, 24px);justify-content: center;align-items: center;gap: var(--spacing-spacing-m, 24px);flex-shrink: 0;border-radius: var(--radius-s, 8px);background: var(--colors-actions-action, #045B62);box-shadow: 0px 1px 2px 0px rgba(28, 28, 28, 0.05);--bs-primary: #045B62;--bs-primary-rgb: 4,91,98;"
                                                    disabled>Next</button></div>
                                        </div>
                                        <div id="single-form-next-prev" class="multisteps-form__panel"
                                            data-animation="scaleIn"
                                            style="display: flex;flex-direction: column;justify-content: center;align-items: center;gap: 25px;align-self: stretch;">
                                            <div
                                                style="display: flex;flex-direction: column;align-items: flex-start;gap: 52px;align-self: stretch;">
                                                <div
                                                    style="display: flex;padding: var(--spacing-spacing-m, 24px);align-items: flex-start;gap: var(--spacing-spacing-s, 16px);align-self: stretch;border-radius: var(--radius-s, 8px);border: 1px solid rgba(0, 0, 0, 0.25);">
                                                    <div id="details_container" class="details_container"
                                                        style="display: flex;flex-direction: column;align-items: flex-start;gap: var(--spacing-spacing-s, 16px);flex: 1 0 0;">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center align-self-stretch">
                                                            <h1
                                                                style="flex: 1 0 0;color: #000;font-family: Inter;font-size: 21px;font-style: normal;font-weight: 700;line-height: normal;">
                                                                APPOINTMENT PREFERENCES</h1>
                                                        </div>
                                                        <div id="appointment_details" class="appointment_details">
                                                            <div class="d-flex align-items-center align-self-stretch petName_type_breed"
                                                                id="petName_type_breed" style="gap: 20px;">
                                                                <div class="d-flex flex-column align-items-start pet_Detail"
                                                                    style="gap: 10px;flex: 1 0 0;">
                                                                    <h1>Pet Name</h1>
                                                                    <p id="petName_Detail">Pet Name</p>
                                                                </div>
                                                                <div class="d-flex flex-column align-items-start pet_Detail"
                                                                    style="gap: 10px;flex: 1 0 0;">
                                                                    <h1>Pet Type</h1>
                                                                    <p id="petType_Detail">Pet Type</p>
                                                                </div>
                                                                <div class="d-flex flex-column align-items-start pet_Detail"
                                                                    style="gap: 10px;flex: 1 0 0;">
                                                                    <h1>Breed</h1>
                                                                    <p id="petBreed_Detail">Breed</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-self-stretch surgery_type_notes"
                                                                id="surgery_type_notes"
                                                                style="align-items: flex-start;gap: 20px;">
                                                                <div class="d-flex flex-column align-items-start pet_Detail"
                                                                    style="gap: 10px;flex: 1 0 0;">
                                                                    <h1>Surgery Type</h1>
                                                                    <p id="surgery_type_Detail">Surgery Type</p>
                                                                </div>
                                                                <div class="d-flex flex-column align-items-start pet_Detail"
                                                                    style="gap: 10px;flex: 1 0 0;">
                                                                    <h1>Additional Notes</h1>
                                                                    <p id="additional_Notes_detail">Additional Notes
                                                                    </p>
                                                                </div>
                                                                <div class="d-flex flex-column align-items-start blank"
                                                                    id="blank" style="gap: 10px;flex: 1 0 0;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr id="lineBreak-2" class="lineBreak">
                                                        <div id="appointment_details-1" class="appointment_details">
                                                            <div class="d-flex align-items-center align-self-stretch petName_type_breed"
                                                                id="petName_type_breed-1" style="gap: 20px;">
                                                                <div class="d-flex flex-column align-items-start pet_Detail"
                                                                    style="gap: 10px;flex: 1 0 0;">
                                                                    <h1>Pet Name</h1>
                                                                    <p id="petName_Detail-1">Pet Name</p>
                                                                </div>
                                                                <div class="d-flex flex-column align-items-start pet_Detail"
                                                                    style="gap: 10px;flex: 1 0 0;">
                                                                    <h1>Pet Type</h1>
                                                                    <p id="petType_Detail-1">Pet Type</p>
                                                                </div>
                                                                <div class="d-flex flex-column align-items-start pet_Detail"
                                                                    style="gap: 10px;flex: 1 0 0;">
                                                                    <h1>Breed</h1>
                                                                    <p id="petBreed_Detail-1">Breed</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-self-stretch surgery_type_notes"
                                                                id="surgery_type_notes-1"
                                                                style="align-items: flex-start;gap: 20px;">
                                                                <div class="d-flex flex-column align-items-start pet_Detail"
                                                                    style="gap: 10px;flex: 1 0 0;">
                                                                    <h1>Surgery Type</h1>
                                                                    <p id="surgery_type_Detail-1">Surgery Type</p>
                                                                </div>
                                                                <div class="d-flex flex-column align-items-start pet_Detail"
                                                                    style="gap: 10px;flex: 1 0 0;">
                                                                    <h1>Additional Notes</h1>
                                                                    <p id="additional_Notes_detail-1">Additional Notes
                                                                    </p>
                                                                </div>
                                                                <div class="d-flex flex-column align-items-start blank"
                                                                    id="blank-1" style="gap: 10px;flex: 1 0 0;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr id="lineBreak-3" class="lineBreak">
                                                        <div id="appointment_details-2" class="appointment_details">
                                                            <div class="d-flex align-items-center align-self-stretch petName_type_breed"
                                                                id="petName_type_breed-2" style="gap: 20px;">
                                                                <div class="d-flex flex-column align-items-start pet_Detail"
                                                                    style="gap: 10px;flex: 1 0 0;">
                                                                    <h1>Pet Name</h1>
                                                                    <p id="petName_Detail-2">Pet Name</p>
                                                                </div>
                                                                <div class="d-flex flex-column align-items-start pet_Detail"
                                                                    style="gap: 10px;flex: 1 0 0;">
                                                                    <h1>Pet Type</h1>
                                                                    <p id="petType_Detail-2">Pet Type</p>
                                                                </div>
                                                                <div class="d-flex flex-column align-items-start pet_Detail"
                                                                    style="gap: 10px;flex: 1 0 0;">
                                                                    <h1>Breed</h1>
                                                                    <p id="petBreed_Detail-2">Breed</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-self-stretch surgery_type_notes"
                                                                id="surgery_type_notes-2"
                                                                style="align-items: flex-start;gap: 20px;">
                                                                <div class="d-flex flex-column align-items-start pet_Detail"
                                                                    style="gap: 10px;flex: 1 0 0;">
                                                                    <h1>Surgery Type</h1>
                                                                    <p id="surgery_type_Detail-2">Surgery Type</p>
                                                                </div>
                                                                <div class="d-flex flex-column align-items-start pet_Detail"
                                                                    style="gap: 10px;flex: 1 0 0;">
                                                                    <h1>Additional Notes</h1>
                                                                    <p id="additional_Notes_detail-2">Additional Notes
                                                                    </p>
                                                                </div>
                                                                <div class="d-flex flex-column align-items-start blank"
                                                                    id="blank-2" style="gap: 10px;flex: 1 0 0;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-start align-self-stretch multisteps-form__content"
                                                    id="form-content-1" style="gap: 25px;">
                                                    <div class="d-flex justify-content-between align-items-start align-self-stretch calendar_time_container"
                                                        style="padding: 0px var(--spacing-spacing-xl, 64px);">
                                                        <div class="calendar_container">
                                                            <div class="d-flex flex-column align-items-start align-self-stretch Appointment_wrapper"
                                                                style="gap: var(--spacing-spacing-s, 16px);">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center align-self-stretch Appointment_icons">
                                                                    <span id="prev" class="prev_month"><i
                                                                            class="typcn typcn-chevron-left"></i></span>
                                                                    <p class="text-center current-date"></p><span
                                                                        id="next" class="next_month"><i
                                                                            class="typcn typcn-chevron-right"></i></span>
                                                                </div>
                                                                <div
                                                                    class="d-flex flex-column justify-content-center align-items-center align-self-stretch Appointment_calendar">
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
                                                            <div class="selected_fullyBooked"
                                                                style="display: flex;padding: 10px 30px;align-items: center;gap: 20px;align-self: stretch;">
                                                                <div class="selected_Calendar_date"
                                                                    style="display: flex;padding: 20px;flex-direction: column;justify-content: center;align-items: center;gap: 10px;border-radius: var(--radius-s, 8px);background: rgba(0, 0, 0, 0.10);">
                                                                    <p
                                                                        style="color: #045B62;text-align: center;font-family: Inter;font-size: 16px;font-style: normal;font-weight: 700;line-height: normal;margin: 0;">
                                                                        Selected</p>
                                                                </div>
                                                                <div class="fully_booked"
                                                                    style="display: flex;padding: 20px;flex-direction: column;justify-content: center;align-items: center;gap: 10px;border-radius: var(--radius-s, 8px);background: rgba(218, 83, 79, 0.50);">
                                                                    <p
                                                                        style="color: #B82319;text-align: center;font-family: Inter;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;margin: 0;">
                                                                        Fully Booked</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h1 id="date_required_message" class="date_required_message">
                                                            Select a date to show available slots.</h1>
                                                        <div id="Appointment_time_options"
                                                            class="Appointment_time_options">
                                                            <p id="selected_date" class="selected_date"></p>
                                                            <div id="time_options_container"
                                                                class="time_options_container">
                                                                <ul id="time_options" class="time_options">
                                                                    <li class="Appointment_time-option"><input
                                                                            type="radio" id="time_1"
                                                                            name="time" value="10:00 AM"><label
                                                                            class="form-label" for="time_1">10:00
                                                                            AM</label></li>
                                                                    <li class="Appointment_time-option"><input
                                                                            type="radio" id="time_2"
                                                                            name="time" value="10:30 AM"><label
                                                                            class="form-label" for="time_2">10:30
                                                                            AM</label></li>
                                                                    <li class="Appointment_time-option"><input
                                                                            type="radio" id="time_3"
                                                                            name="time" value="11:00 AM"><label
                                                                            class="form-label" for="time_3">11:00
                                                                            AM</label></li>
                                                                </ul>
                                                                <ul id="time_options-1" class="time_options">
                                                                    <li class="Appointment_time-option"><input
                                                                            type="radio" id="time_-4"
                                                                            name="time" value="01:00 PM"><label
                                                                            class="form-label" for="time_4">01:00
                                                                            PM</label></li>
                                                                    <li class="Appointment_time-option"><input
                                                                            type="radio" id="time_-5"
                                                                            name="time" value="01:30 PM"><label
                                                                            class="form-label" for="time_5">01:30
                                                                            PM</label></li>
                                                                    <li class="Appointment_time-option"><input
                                                                            type="radio" id="time_-6"
                                                                            name="time" value="02:00 PM"><label
                                                                            class="form-label" for="time_6">02:00
                                                                            PM</label></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="next-prev-buttons" class="button-row d-flex mt-4 mb-4"
                                                        style="justify-content: space-between;align-items: center;align-self: stretch;">
                                                        <button class="btn btn btn-primary js-btn-prev"
                                                            id="prev_button" type="button" title="Prev"
                                                            style="display: flex;height: 56px;min-width: 100px;padding: 16px var(--spacing-spacing-m, 24px);justify-content: center;align-items: center;gap: var(--spacing-spacing-m, 24px);background: transparent;border-radius: var(--radius-s, 8px);border: none;color: var(--colors-actions-action, #045B62);font-family: Inter;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;">Previous</button><button
                                                            class="btn btn-primary disabled border-primary disabled ml-auto js-btn-next"
                                                            id="next_button" type="button" title="Next"
                                                            style="color:var(--colors-main-neutral, #FFF);text-shadow:0px 2px 2px rgba(0, 0, 0, 0.10);font-family:Inter;font-size:16px;font-style:normal;font-weight:600;line-height:normal;display:inline-flex;height:56px;min-width:100px;padding:var(--spacing-spacing-s, 16px) var(--spacing-spacing-m, 24px);justify-content:center;align-items:center;gap:var(--spacing-spacing-m, 24px);flex-shrink:0;border-radius:var(--radius-s, 8px);background:var(--colors-actions-action, #045B62);box-shadow:0px 1px 2px 0px rgba(28, 28, 28, 0.05);--bs-primary:#045B62;--bs-primary-rgb:4,91,98;"
                                                            disabled="">Next</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="single-form-next-prev-1" class="multisteps-form__panel"
                                            data-animation="scaleIn"
                                            style="display: flex;flex-direction: column;justify-content: center;align-items: center;gap: 25px;align-self: stretch;">
                                            <div id="form-content-2" class="multisteps-form__content"
                                                style="display: flex;flex-direction: column;align-items: flex-start;gap: 25px;align-self: stretch;">
                                                <div class="d-flex flex-column align-items-start align-self-stretch details_confirmation"
                                                    id="details_confirmation">
                                                    <div class="container_of_details">
                                                        <p class="confirmation_details">APPOINTMENT PREFERENCES</p>
                                                        <div class="d-flex flex-column align-items-start align-self-stretch details"
                                                            id="details">
                                                            <div class="d-flex align-items-center align-self-stretch details_confirmation_1strow"
                                                                id="details_confirmation_1strow">
                                                                <div
                                                                    class="d-flex flex-column align-items-start detail_confirmation">
                                                                    <h1>Pet Name</h1>
                                                                    <p id="confirm_Pet_Name" class="confirm_Pet_Name">
                                                                        Pet Name</p>
                                                                    <input type="hidden" name="petName"
                                                                        id="hidden_petName">
                                                                </div>
                                                                <div
                                                                    class="d-flex flex-column align-items-start detail_confirmation">
                                                                    <h1>Pet Type</h1>
                                                                    <p id="confirm_Pet_type" class="confirm_Pet_type">
                                                                        Pet Type</p>
                                                                    <input type="hidden" name="petType[]"
                                                                        id="hidden_petType" value="">
                                                                </div>
                                                                <div
                                                                    class="d-flex flex-column align-items-start detail_confirmation">
                                                                    <h1>Breed</h1>
                                                                    <p id="confirm_breed" class="confirm_breed">Breed
                                                                    </p>
                                                                    <input type="hidden" name="breed[]"
                                                                        id="hidden_breed">
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-start align-self-stretch details_confirmation_2ndrow"
                                                                id="details_confirmation_2ndrow">
                                                                <div
                                                                    class="d-flex flex-column align-items-start detail_confirmation">
                                                                    <h1>Surgery Type</h1>
                                                                    <p id="confirm_surgery_Type"
                                                                        class="confirm_surgery_Type">Surgery Type</p>
                                                                    <input type="hidden" name="appointmentType[]"
                                                                        id="hidden_appointmentType">
                                                                </div>
                                                                <div
                                                                    class="d-flex flex-column align-items-start detail_confirmation">
                                                                    <h1>Additional Notes</h1>
                                                                    <p id="confirm_additional_Notes"
                                                                        class="confirm_additional_Notes">Additional
                                                                        Notes</p>
                                                                    <input type="hidden" name="notes"
                                                                        id="hidden_notes">
                                                                </div>
                                                                <div
                                                                    class="d-flex flex-column align-items-start detail_confirmation">
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr id="lineBreak-4" class="lineBreak">
                                                        <div id="details-1" class="details">
                                                            <div class="d-flex align-items-center align-self-stretch details_confirmation_1strow"
                                                                id="details_confirmation_1strow-1">
                                                                <div
                                                                    class="d-flex flex-column align-items-start detail_confirmation">
                                                                    <h1>Pet Name</h1>
                                                                    <p id="confirm_Pet_Name-1"
                                                                        class="confirm_Pet_Name">Pet Name</p>
                                                                    <input type="hidden" name="petName1"
                                                                        id="hidden_petName-1">
                                                                </div>
                                                                <div
                                                                    class="d-flex flex-column align-items-start detail_confirmation">
                                                                    <h1>Pet Type</h1>
                                                                    <p id="confirm_Pet_type-1"
                                                                        class="confirm_Pet_type">Pet Type</p>
                                                                    <input type="hidden" name="petType1"
                                                                        id="hidden_petType-1">
                                                                </div>
                                                                <div
                                                                    class="d-flex flex-column align-items-start detail_confirmation">
                                                                    <h1>Breed</h1>
                                                                    <p id="confirm_breed-1" class="confirm_breed">
                                                                        Breed</p>
                                                                    <input type="hidden" name="breed1"
                                                                        id="hidden_breed-1">
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-start align-self-stretch details_confirmation_2ndrow"
                                                                id="details_confirmation_2ndrow-1">
                                                                <div
                                                                    class="d-flex flex-column align-items-start detail_confirmation">
                                                                    <h1>Surgery Type</h1>
                                                                    <p id="confirm_surgery_Type-1"
                                                                        class="confirm_surgery_Type">Surgery Type</p>
                                                                    <input type="hidden" name="appointmentType1"
                                                                        id="hidden_appointmentType-1">
                                                                </div>
                                                                <div
                                                                    class="d-flex flex-column align-items-start detail_confirmation">
                                                                    <h1>Additional Notes</h1>
                                                                    <p id="confirm_additional_Notes-1"
                                                                        class="confirm_additional_Notes">Additional
                                                                        Notes</p>
                                                                    <input type="hidden" name="notes1"
                                                                        id="hidden_notes-1">
                                                                </div>
                                                                <div
                                                                    class="d-flex flex-column align-items-start detail_confirmation">
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr id="lineBreak-5" class="lineBreak">
                                                        <div id="details-2" class="details">
                                                            <div class="d-flex align-items-center align-self-stretch details_confirmation_1strow"
                                                                id="details_confirmation_1strow-2">
                                                                <div
                                                                    class="d-flex flex-column align-items-start detail_confirmation">
                                                                    <h1>Pet Name</h1>
                                                                    <p id="confirm_Pet_Name-2"
                                                                        class="confirm_Pet_Name">Pet Name</p>
                                                                    <input type="hidden" name="petName2"
                                                                        id="hidden_petName-2">
                                                                </div>
                                                                <div
                                                                    class="d-flex flex-column align-items-start detail_confirmation">
                                                                    <h1>Pet Type</h1>
                                                                    <p id="confirm_Pet_type-2"
                                                                        class="confirm_Pet_type">Pet Type</p>
                                                                    <input type="hidden" name="petType2"
                                                                        id="hidden_petType-2">
                                                                </div>
                                                                <div
                                                                    class="d-flex flex-column align-items-start detail_confirmation">
                                                                    <h1>Breed</h1>
                                                                    <p id="confirm_breed-2" class="confirm_breed">
                                                                        Breed</p>
                                                                    <input type="hidden" name="breed2"
                                                                        id="hidden_breed-2">
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-start align-self-stretch details_confirmation_2ndrow"
                                                                id="details_confirmation_2ndrow-2">
                                                                <div
                                                                    class="d-flex flex-column align-items-start detail_confirmation">
                                                                    <h1>Surgery Type</h1>
                                                                    <p id="confirm_surgery_Type-2"
                                                                        class="confirm_surgery_Type">Surgery Type</p>
                                                                    <input type="hidden" name="appointmentType2"
                                                                        id="hidden_appointmentType-2">
                                                                </div>
                                                                <h1>Additional Notes</h1>
                                                                <p id="confirm_additional_Notes-2"
                                                                    class="confirm_additional_Notes">Additional Notes
                                                                </p>
                                                                <input type="hidden" name="notes2"
                                                                    id="hidden_notes-2">
                                                            </div>
                                                            <div
                                                                class="d-flex flex-column align-items-start detail_confirmation">
                                                                <div
                                                                    class="d-flex flex-column align-items-start detail_confirmation">
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="date_and_time">
                                                        <h1>APPOINTMENT SCHEDULE</h1>
                                                        <div class="d-flex align-items-start align-self-stretch details_confirmation_3rdrow"
                                                            id="details_confirmation_3rdrow">
                                                            <div
                                                                class="d-flex flex-column align-items-start detail_confirmation">
                                                                <h1>Date</h1>
                                                                <p id="confirm_date" class="confirm_date">Date</p>
                                                            </div>
                                                            <div
                                                                class="d-flex flex-column align-items-start detail_confirmation">
                                                                <h1>Time</h1>
                                                                <p class="confirm_time">Time</p>
                                                            </div>
                                                            <div
                                                                class="d-flex flex-column align-items-start detail_confirmation">
                                                                <p></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center align-self-stretch button-row d-flex mt-4"
                                                        id="next-prev-buttons-1"><button
                                                            class="btn btn btn-primary js-btn-prev" type="button"
                                                            title="Prev"
                                                            style="display: flex;height: 56px;min-width: 100px;padding: 16px var(--spacing-spacing-m, 24px);justify-content: center;align-items: center;gap: var(--spacing-spacing-m, 24px);background: transparent;border-radius: var(--radius-s, 8px);border: none;color: var(--colors-actions-action, #045B62);font-family: Inter;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;">Previous</button><button
                                                            class="btn book_appointment" id="book_appointment"
                                                            type="button" title="Next"><span
                                                                class="book_appointment_base">Book
                                                                Appointment</span></button></div>
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
        </div>
    </main>
    <footer class="footer" style="position: relative;"><img src="assets/img/dogs&cats.png"
            style="width: 159.783px;height: 150px;flex-shrink: 0;"></footer>
    <div class="modal fade" role="dialog" tabindex="-1" id="consent_modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content add_client_modal">
                <div class="modal-header">
                    <div class="icon-container"><svg xmlns="http://www.w3.org/2000/svg" width="32"
                            height="32" viewBox="0 0 32 32" fill="none">
                            <g clip-path="url(#clip0_5910_18516)">
                                <path
                                    d="M16 10.6667V16M16 21.3333H16.0133M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 12.8174 26.7357 9.76516 24.4853 7.51472C22.2348 5.26428 19.1826 4 16 4C12.8174 4 9.76516 5.26428 7.51472 7.51472C5.26428 9.76516 4 12.8174 4 16Z"
                                    stroke="#045B62" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_5910_18516">
                                    <rect width="32" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg></div>
                </div>
                <div class="modal-body">
                    <div class="consent-title">
                        <h1>Informed Consent and Acknowledgement</h1>
                        <p>Before scheduling your pet's surgery, please carefully read and acknowledge the following:
                        </p>
                    </div>
                    <div class="consent-text">
                        <p><span class="custom-style">1. Understanding the Procedure:</span> I understand that my pet
                            will undergo a surgical procedure as recommended by the veterinarian. I have received
                            information about the procedure, its risks, and its benefits.</p>
                        <p><span class="custom-style">2. Health Status:</span> I confirm that I have provided accurate
                            information about my pet's health, including any known medical conditions, allergies, or
                            medications.</p>
                        <p><span class="custom-style">3. Financial Responsibility:</span> I acknowledge that I am
                            responsible for the cost of the surgical procedure and any related services. I have
                            discussed the estimated costs with the clinic.</p>
                        <p><span class="custom-style">4. Postoperative Care:</span> I understand that postoperative
                            care is essential for my pet's recovery. I will follow the post-surgery care instructions
                            provided by the clinic.</p>
                        <p><span class="custom-style">5. Emergency Contact:</span> I have provided a valid emergency
                            contact person and phone number in case of unforeseen circumstances during or after the
                            surgery.</p>
                        <p>By clicking "I Agree," I confirm that I have read, understood, and agree to the terms and
                            conditions mentioned above. I consent to my pet undergoing the scheduled surgery.</p>
                        <p>Please note that your agreement is required to proceed with scheduling the surgery for your
                            pet.</p>
                    </div>
                </div>
                <div class="modal-footer consent_buttons"><button class="btn disagree" id="disagree"
                        type="button"><span class="disagree_base">I disagree</span></button><button
                        class="btn agree" id="agree" type="submit"><span class="agree_base">I
                            Agree</span></button></div>
            </div>
        </div>
    </div>
    <div class="modal fade show" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content success_modal">
                <div class="modal-header success_header">
                    <div class="success_icon_container"><span class="success_icon"><svg
                                xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                fill="none">
                                <g clip-path="url(#clip0_5910_17688)">
                                    <path
                                        d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z"
                                        stroke="#5BB85A" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_5910_17688">
                                        <rect width="32" height="32" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></span>
                    </div>
                </div>
                <div class="modal-body success_message">
                    <div>
                        <h1>Appointment completed!</h1>
                        <p>Please wait for your appointment to be confirmed.</p>
                    </div>
                </div>
                <div class="modal-footer"><a class="btn view_appointments" role="button"><span
                            class="view_appointments_base">View Appointments</span></a></div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/admin_appointment.js"></script>
    <script src="assets/js/admin_archive.js"></script>
    <script src="assets/js/admin_settings.js"></script>
    <script src="assets/js/admin_signin.js"></script>
    <script src="assets/js/appointment_list.js"></script>
    <script src="assets/js/appointmentforms.js"></script>
    <script src="assets/js/client.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/inventory.js"></script>
    <script src="assets/js/Multi-step-form-script.js"></script>
    <script src="assets/js/pet_information.js"></script>
    <script src="assets/js/pet_records.js"></script>
    <script src="assets/js/sidebar.js"></script>
    <script src="assets/js/signin.js"></script>
    <script src="assets/js/signup.js"></script>
    <script src="assets/js/user_settings.js"></script>
</body>

</html>
