<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginpage</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/loginpage.css') }}">
</head>
<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
    </svg>
    <div class="container d-block">
        @if($err)
            <div class="row passalert">    
                <div class="alert alert-warning d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        Check username or passsword !!
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="container mt21">
        <div class="row">
            <div class="col-md-4 m-auto">
                <form action="/login" method="POST" class="form-group border shadow bg-light p-3">
                    @csrf
                    <h3 class="mb-5">Login</h3>        
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">User Name</label>
                        <input type="text" class="form-control" name="uname" id="formGroupExampleInput" placeholder="Enter Your Username" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="formGroupExampleInput2" placeholder="Enter Your Password" required>
                    </div>
                    <div class="mt-4">
                        <button class="form-control btn btn-red" type="submit">Login</button>
                    </div>
                    <div class="mt-3 text-center">
                        <a class="text-decoration-none" href="/registrationpage">New User? Register now</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>