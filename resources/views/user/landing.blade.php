<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <title>TAGAPO CATS & DOGS</title>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" href="/img/dogs&cats.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/bs-theme-overrides.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Bootstrap-4-Custom-Radio.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Multi-step-form.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Navbar-Centered-Links-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/client.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/landing.css') }}">  

</head>

<style>
.customized-row {
    margin: 0;
    padding: 0;
    min-height: 100vh;
    width: 100%;
    background: linear-gradient(90deg, rgba(0, 0, 0, 0.00) 0%, #1C1C1C 100%), url('{{ asset('img/clientclinic.jpg') }}') no-repeat center/cover;
}
</style>


<body style="padding: 0;margin: 0;">
    @include('includes.user_header')
    <main>
    @if(session('verified'))
    <div class="alert alert-success">
        Your email has been successfully verified!
    </div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
        @if(Auth::guard('clients')->user() && !Auth::guard('clients')->user()->hasVerifiedEmail())
            <form method="POST" action="{{ route('resend', ['clientId' => $clientInfo->id]) }}">
                @csrf
                <button type="submit" class="btn btn-link">Resend Email Verification</button>
            </form>
        @endif
    </div>
    @endif
        <div class="container-fluid">
            <div class="floating-div">
                <!-- Two cards inside the floating div -->
                <div class="card mb-4">
                    <div class="frame520">
                        <div class="services">
                            <div class="frame504">
                                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                                <g clip-path="url(#clip0_2346_12242)">
                                    <path d="M19.8333 19.8334L36.1667 36.1667M10.499 29.1668L29.1656 10.5001C31.3316 8.33418 34.2692 7.11737 37.3323 7.11737C40.3954 7.11737 43.333 8.33418 45.499 10.5001C47.6649 12.666 48.8817 15.6037 48.8817 18.6668C48.8817 21.7299 47.6649 24.6675 45.499 26.8334L26.8323 45.5001C24.6664 47.666 21.7287 48.8829 18.6656 48.8829C15.6025 48.8829 12.6649 47.666 10.499 45.5001C8.33302 43.3342 7.11621 40.3965 7.11621 37.3334C7.11621 34.2704 8.33302 31.3327 10.499 29.1668Z" stroke="#045B62" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_2346_12242">
                                    <rect width="56" height="56" fill="white"/>
                                    </clipPath>
                                </defs>
                                </svg>
                            </div>
                            <p>DEWORMING</p>
                        </div>

                        <div class="services">
                            <div class="frame504">
                            <svg xmlns="http://www.w3.org/2000/svg" width="57" height="56" viewBox="0 0 57 56" fill="none">
                            <g clip-path="url(#clip0_2346_12237)">
                                <path d="M40.4167 7L49.75 16.3333M45.0833 11.6667L34.5833 22.1667M27.5833 15.1667L41.5833 29.1667M39.25 26.8333L24.0833 42H14.75M14.75 42V32.6667L29.9167 17.5M14.75 42L7.75 49M18.25 29.1667L21.75 32.6667M25.25 22.1667L28.75 25.6667" stroke="#045B62" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2346_12237">
                                <rect width="56" height="56" fill="white" transform="translate(0.75)"/>
                                </clipPath>
                            </defs>
                            </svg>
                            </div>
                            <p>VACCINATION</p>
                        </div>
                            
                        <div class="services">
                            <div class="frame504">
                            <svg xmlns="http://www.w3.org/2000/svg" width="57" height="56" viewBox="0 0 57 56" fill="none">
                            <g clip-path="url(#clip0_2346_12232)">
                                <path d="M14.5 9.33333H12.1667C10.929 9.33333 9.742 9.825 8.86683 10.7002C7.99167 11.5753 7.5 12.7623 7.5 14V22.1667C7.5 25.5703 8.85208 28.8345 11.2588 31.2412C13.6655 33.6479 16.9297 35 20.3333 35C23.7369 35 27.0012 33.6479 29.4079 31.2412C31.8146 28.8345 33.1667 25.5703 33.1667 22.1667V14C33.1667 12.7623 32.675 11.5753 31.7998 10.7002C30.9247 9.825 29.7377 9.33333 28.5 9.33333H26.1667M19.1667 35C19.1667 36.8385 19.5288 38.659 20.2324 40.3576C20.9359 42.0561 21.9672 43.5995 23.2672 44.8995C24.5672 46.1995 26.1105 47.2307 27.8091 47.9343C29.5077 48.6379 31.3282 49 33.1667 49C35.0052 49 36.8257 48.6379 38.5242 47.9343C40.2228 47.2307 41.7661 46.1995 43.0662 44.8995C44.3662 43.5995 45.3974 42.0561 46.101 40.3576C46.8045 38.659 47.1667 36.8385 47.1667 35V28M47.1667 28C45.929 28 44.742 27.5083 43.8668 26.6332C42.9917 25.758 42.5 24.571 42.5 23.3333C42.5 22.0957 42.9917 20.9087 43.8668 20.0335C44.742 19.1583 45.929 18.6667 47.1667 18.6667C48.4043 18.6667 49.5913 19.1583 50.4665 20.0335C51.3417 20.9087 51.8333 22.0957 51.8333 23.3333C51.8333 24.571 51.3417 25.758 50.4665 26.6332C49.5913 27.5083 48.4043 28 47.1667 28ZM26.1667 7V11.6667M14.5 7V11.6667" stroke="#045B62" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2346_12232">
                                <rect width="56" height="56" fill="white" transform="translate(0.5)"/>
                                </clipPath>
                            </defs>
                            </svg>
                            </div>
                            <p>CHECKUP</p>
                        </div>

                        <div class="services">
                            <div class="frame504">
                            <svg xmlns="http://www.w3.org/2000/svg" width="57" height="56" viewBox="0 0 57 56" fill="none">
                            <g clip-path="url(#clip0_2346_12227)">
                                <path d="M21.25 11.6667H16.5833C15.3456 11.6667 14.1586 12.1583 13.2835 13.0335C12.4083 13.9087 11.9166 15.0957 11.9166 16.3333V44.3333C11.9166 45.571 12.4083 46.758 13.2835 47.6332C14.1586 48.5083 15.3456 49 16.5833 49H39.9166C41.1543 49 42.3413 48.5083 43.2165 47.6332C44.0916 46.758 44.5833 45.571 44.5833 44.3333V16.3333C44.5833 15.0957 44.0916 13.9087 43.2165 13.0335C42.3413 12.1583 41.1543 11.6667 39.9166 11.6667H35.25M21.25 11.6667C21.25 10.429 21.7416 9.242 22.6168 8.36683C23.492 7.49167 24.6789 7 25.9166 7H30.5833C31.821 7 33.008 7.49167 33.8831 8.36683C34.7583 9.242 35.25 10.429 35.25 11.6667M21.25 11.6667C21.25 12.9043 21.7416 14.0913 22.6168 14.9665C23.492 15.8417 24.6789 16.3333 25.9166 16.3333H30.5833C31.821 16.3333 33.008 15.8417 33.8831 14.9665C34.7583 14.0913 35.25 12.9043 35.25 11.6667M28.2326 39.0833L34.6423 32.515C35.4351 31.6893 35.8779 30.589 35.8779 29.4443C35.8779 28.2996 35.4351 27.1993 34.6423 26.3736C34.2558 25.9714 33.792 25.6513 33.2788 25.4327C32.7656 25.214 32.2135 25.1013 31.6556 25.1013C31.0978 25.1013 30.5457 25.214 30.0324 25.4327C29.5192 25.6513 29.0554 25.9714 28.6689 26.3736L28.2419 26.8123L27.8149 26.3713C27.4285 25.969 26.9647 25.649 26.4515 25.4303C25.9382 25.2117 25.3861 25.099 24.8283 25.099C24.2704 25.099 23.7183 25.2117 23.2051 25.4303C22.6919 25.649 22.2281 25.969 21.8416 26.3713C21.0482 27.1967 20.6051 28.2971 20.6051 29.442C20.6051 30.5868 21.0482 31.6873 21.8416 32.5126L28.2303 39.1043L28.2326 39.0833Z" stroke="#045B62" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2346_12227">
                                <rect width="56" height="56" fill="white" transform="translate(0.25)"/>
                                </clipPath>
                            </defs>
                            </svg>
                            </div>
                            <p>LAB. EXAM</p>
                        </div>

                        <div class="services">
                            <div class="frame504">
                            <svg xmlns="http://www.w3.org/2000/svg" width="57" height="56" viewBox="0 0 57 56" fill="none">
                            <g clip-path="url(#clip0_2346_12222)">
                                <path d="M7.5 44.3333L42.5 9.33331L49.5 16.3333L35.5 30.3333L40.1667 35C36.1014 39.4021 30.9036 42.6013 25.1421 44.2474C19.3806 45.8936 13.2773 45.9233 7.5 44.3333Z" stroke="#045B62" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2346_12222">
                                <rect width="56" height="56" fill="white" transform="translate(0.5)"/>
                                </clipPath>
                            </defs>
                            </svg>
                            </div>
                            <p>SURGERY</p>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="frame517">
                                <div class="frame516">
                                    <div class="frame480">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                                        <g clip-path="url(#clip0_2358_21426)">
                                            <path d="M28 43.1667L21 39.6667M21 39.6667L7 46.6667V16.3333L21 9.33334M21 39.6667V9.33334M21 9.33334L35 16.3333M35 16.3333L49 9.33334V25.6667M35 16.3333V28M44.3333 42V42.0233M49.2823 46.949C50.2615 45.9701 50.9284 44.7228 51.1987 43.3649C51.4689 42.007 51.3304 40.5994 50.8007 39.3202C50.2709 38.041 49.3737 36.9476 48.2225 36.1784C47.0714 35.4091 45.7179 34.9985 44.3333 34.9985C42.9488 34.9985 41.5953 35.4091 40.4441 36.1784C39.2929 36.9476 38.3957 38.041 37.866 39.3202C37.3362 40.5994 37.1977 42.007 37.468 43.3649C37.7383 44.7228 38.4052 45.9701 39.3843 46.949C40.3597 47.9267 42.0093 49.3873 44.3333 51.3333C46.7857 49.2567 48.4377 47.796 49.2823 46.949Z" stroke="#045B62" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2358_21426">
                                            <rect width="56" height="56" fill="white"/>
                                            </clipPath>
                                        </defs>
                                        </svg>
                                    </div>
                                    <h1>LOCATION</h1>
                                </div>
                                <p>#170 J.P. Rizal Boulevard, Barangay Tagapo, Santa Rosa, Laguna, 4026</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="frame518">
                                <div class="frame515">
                                    <div class="frame480">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                                        <g clip-path="url(#clip0_2358_21432)">
                                            <path d="M36.1667 28H28V16.3333M7 28C7 30.7578 7.54318 33.4885 8.59853 36.0364C9.65388 38.5842 11.2007 40.8992 13.1508 42.8492C15.1008 44.7993 17.4158 46.3461 19.9636 47.4015C22.5115 48.4568 25.2422 49 28 49C30.7578 49 33.4885 48.4568 36.0364 47.4015C38.5842 46.3461 40.8992 44.7993 42.8492 42.8492C44.7993 40.8992 46.3461 38.5842 47.4015 36.0364C48.4568 33.4885 49 30.7578 49 28C49 25.2422 48.4568 22.5115 47.4015 19.9636C46.3461 17.4158 44.7993 15.1008 42.8492 13.1508C40.8992 11.2007 38.5842 9.65388 36.0364 8.59853C33.4885 7.54318 30.7578 7 28 7C25.2422 7 22.5115 7.54318 19.9636 8.59853C17.4158 9.65388 15.1008 11.2007 13.1508 13.1508C11.2007 15.1008 9.65388 17.4158 8.59853 19.9636C7.54318 22.5115 7 25.2422 7 28Z" stroke="#045B62" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2358_21432">
                                            <rect width="56" height="56" fill="white"/>
                                            </clipPath>
                                        </defs>
                                        </svg>
                                        </div>
                                        <h1>WORKING HOURS</h1>
                                    </div>
                                    <p>09:00 AM - 04:00 PM<br>Tuesday - Saturday</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row customized-row d-flex align-items-center justify-content-end">
                <div class="customized-col col-8 col-md-6 mt-4 mt-md-0 d-flex flex-column justify-content-center align-items-start">
                    <h1>Welcome to</h1>
                    <h2 class="custom-h2">Tagapo Dogs &amp; Cats</h2>
                    <h3 class="custom-h3">Veterinary Clinic</h3>
                    <div class="mt-5">
                        <a class="btn custom-book-appointment-btn" role="button" href="{{ route('appointment.form') }}">
                            BOOK AN APPOINTMENT
                        </a>
                        <a class="btn custom-btn-check-schedule" role="button" href="{{ route('appointment.list') }}">
                            CHECK SCHEDULE
                        </a>
                    </div>
                </div>
            </div>
        


            <div class="whiteSpace" style="height: 90vh"></div>
        </div>
        
    </main>


    <footer class="d-flex align-items-center" style="background: rgba(4,91,98,0.1);height: 200px;">
        <div class="container d-flex" style="height: 200px;">
            <div class="col d-lg-flex d-xl-flex d-xxl-flex justify-content-xl-start align-items-xl-center"><img class="flex-md-shrink-0 flex-lg-shrink-0 flex-xl-shrink-0 flex-xxl-shrink-0" src="{{ asset('img/dogs&cats.png') }}" width="167" height="149"></div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
    </footer>
</body>
<script>
    window.onload = function () {
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>