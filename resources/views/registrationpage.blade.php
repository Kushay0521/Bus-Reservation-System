<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrationpage</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/registrationpage.css') }}">
</head>
<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
    </svg>
    <div class="container mt">
        @if($fill)
            @if($res)
                <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <div>
                    Registered Successfuly !!
                </div>
               </div>
            @else
                <div class="alert alert-warning d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                  Username already exist !!
                </div>
                </div>
            @endif
        @endif
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-xl-10 m-auto">
                <form action="register" method="POST" class="form-group bg-light p-3">
                    @csrf
                    <h3 class="mb-5">Registration</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password" required>
                                <span class="form-text invalid-feedback">Password must contain at least one digit,special character and must start and end with alphanumberic</span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="display: block;">Gender</label>
                                <div class="form-check mt-2" style="display: inline-block;">
                                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check" style="display: inline-block;">
                                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Female">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Female
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="abc@gmail.com" required>
                                <span class="form-text invalid-feedback">Please enter valid email</span> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="uname" class="form-label">User Name</label>
                                <input type="text" class="form-control" name="uname" id="uname" 
                                placeholder="Enter Your Username" required>
                                <span class="form-text invalid-feedback">Username must contain at leat 5 characters</span>
                            </div>
                            <div class="mb-3">
                                <label for="cpassword" class="form-label">Confirm-Password</label>
                                <input type="password" class="form-control" id="cpassword" placeholder="Re-enter Your Password" required>
                                <span class="form-text invalid-feedback">Passwords are not matching</span>
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" class="form-control" name="age" id="age" placeholder="Enter Your Age" required>
                                <span class="form-text invalid-feedback" id="spanmobile">You are too young to register</span>
                            </div>
                            <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Your Mobile Number" required>
                                <span class="form-text invalid-feedback" id="spanmobile">Please enter 10 digits</span>
                            </div>
                        </div>
                        <div class="col-12 mt-4 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required disabled>
                                <label class="form-check-label" for="invalidCheck">
                                I hereby declare the above filled information is right.
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-red" type="reset">Reset</button>
                            <button class="btn btn-red disabled" id="register" type="submit">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('/js/registrationpage.js') }}"></script>
</body>
</html>