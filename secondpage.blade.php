<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coaching Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/firstpage.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body class="">
    {{-- header --}}
    <div class="">

        <div class=" bg-warning py-5 text-start">
            <div class="container main py-5">
                <a class="navbar-brand" href="#">
                    <h1>CoachMent</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h3>Coachingh Management System</h3>
            </div>
        </div>

        {{-- main --}}
        <main class=" shadow  mx-auto rounded-3 py-5 bg-light main container-fluid">

            <div class="">
                {{-- top navigation --}}
                <div class="px-5 ">
                    <ul class="nav justify-content-between nav-underline ">

                        <li class="nav-item">


                            <div class="d-flex justify-content-center align-items-center ">
                                <div class="me-3"> <i class="fa-solid fa-circle-check fa-beat fa-2xl"></i></div>
                                <div>
                                    <a class="nav-link" href="/first"> Pre installation</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="d-flex justify-content-center align-items-center ">
                                <div class="me-3"> <i class="fa-regular fa-circle-dot fa-beat-fade fa-2xl"></i></div>
                                <div>
                                    <a class="nav-link" href="#">Configuration</a>
                                </div>
                            </div>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Installation Finish</a>
                        </li>
                    </ul>
                </div>
                <div class="px-3 mt-5 ">
                    <div class="mx-auto">
                        <h6>1.Please enter your application details</h6>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="formGroupExampleInput" class="form-label">App name</label>
                              <input type="text" class="form-control" placeholder="enter app name" aria-label="First name">
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput" class="form-label">App URL</label>
                              <input type="text" class="form-control" placeholder="enter url" aria-label="Last name">
                            </div>
                          </div>
                    </div>
                    <div class="my-5">
                        <h6>2.Please enter your item purchase code and customer email</h6>
                        <div class="row mt-3">
                            <div class="col-md">
                                <label for="formGroupExampleInput" class="form-label">Customer E-mail</label>
                              <input type="email" class="form-control" placeholder="example@example.com" aria-label="First name">
                            </div>
                            <div class="col-md">
                                <label for="formGroupExampleInput" class="form-label">Item Purchase Code</label>
                              <input type="text" class="form-control" placeholder="enter code" aria-label="Last name">
                            </div>
                          </div>
                    </div>
                    <div class="my-5 ">
                        <h6>3.Please enter your database connection details</h6>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="formGroupExampleInput" class="form-label">Database Host</label>
                              <input type="email" class="form-control" placeholder="enter database host name" aria-label="First name">
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput" class="form-label">Database User</label>
                              <input type="text" class="form-control" placeholder="enter database user name" aria-label="Last name">
                            </div>
                          </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="formGroupExampleInput" class="form-label">Database Name</label>
                              <input type="email" class="form-control" placeholder="enter database name" aria-label="First name">
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput" class="form-label">Password</label>
                              <input type="text" class="form-control" placeholder="enter password" aria-label="Last name">
                            </div>
                          </div>
                    </div>
                    <div class="my-5 ">
                        <h6>4.Please enter your SMTP details</h6>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="formGroupExampleInput" class="form-label">Mail Host</label>
                              <input type="email" class="form-control" placeholder="enter Mail Host" aria-label="First name">
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput" class="form-label">Port</label>
                              <input type="text" class="form-control" placeholder="enter port" aria-label="Last name">
                            </div>
                          </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="formGroupExampleInput" class="form-label">User Name</label>
                              <input type="text" class="form-control" placeholder="enter user name" aria-label="First name">
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput" class="form-label">Password</label>
                              <input type="password" class="form-control" placeholder="enter password" aria-label="Last name">
                            </div>
                          </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="d-grid gap-2 col mx-auto">

                        <a class="btn btn-outline-warning" href="/first" role="button">Back</a>
                    </div>
                    <div class="d-grid gap-2 col mx-auto">
                        <a class="btn btn-warning" href="/third" role="button">Next</a>
                    </div>
                </div>
            </div>
        </main>
        {{-- footer --}}
        <footer class="px-2 mt-5">
            <div class="bg-warning text-center py-2 rounded-4 ">
                <p> &#169 Z-eight Tech All rights reserved</p>
            </div>
        </footer>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
