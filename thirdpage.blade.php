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
                                    <a class="nav-link" href="#"> Pre installation</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="d-flex justify-content-center align-items-center ">
                                <div class="me-3"> <i class="fa-solid fa-circle-check fa-beat fa-2xl"></i></div>
                                <div>
                                    <a class="nav-link" href="#">Configuration</a>
                                </div>
                            </div>

                        </li>
                        <li class="nav-item">
                            <div class="d-flex justify-content-center align-items-center ">
                                <div class="me-3"> <i class="fa-regular fa-circle-dot fa-beat-fade fa-2xl"></i></div>
                                <div>
                                    <a class="nav-link" aria-current="page" href="#">Installation Finish</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="px-3 mt-5 ">
                    <div class="mx-auto border p-5  bg-dark text-white sm-overflow-scroll ">
                        <h5>

                            SQLSTATEI[HY000] [1045]
                            <br>
                            access denied for user "test"@'localhost'
                            <br>
                            (using password: YES) (SOL: select *
                            <br>
                            from
                            <br>
                            information_schema.tables
                            <br>
                            where table_schema = test
                            <br>
                            and
                            <br>
                            table_name = migrations
                            <br>
                            and
                            <br>
                            table_type = "BASE TABLE")
                        </h5>
                    </div>
                    <div class="my-5 text-danger overflow-sm-scroll">
                        <div class="sm-">
                            <div>
                                <h4 class="sm-display-1">Default super admin created : superadmin@example.com/1234</h4>
                            </div>
                            <div>
                                <h4>Default company created : company@example.com/1234</h4>
                            </div>
                            <div>
                                <h4>Default user created : accountant@example.com/1234</h4>
                            </div>

                        </div>
                    </div>
                    <div class="my-5 ">
                        <h5>
                            <label for="formGroupExampleInput" class="form-label">Application console output: </label>
                        </h5>
                        <div class="mt-3 bg-dark text-warning p-4">
                            <h6> Info Application Key Set Successfully</h6>
                        </div>

                    </div>
                    <div class="my-5 ">
                        <h5>
                            <label for="formGroupExampleInput" class="form-label">Installation log entry: </label>
                        </h5>
                        <div class="mt-3 bg-dark text-warning p-4">
                            <h6> Installer Successfully installed on 2023/06/21 04:11 pm</h6>
                        </div>
                    </div>
                    <div class="my-5 ">
                        <h5>
                            <label for="formGroupExampleInput" class="form-label">Final .env file: </label>
                        </h5>
                        <div class="mt-3 bg-dark text-warning p-4">
                            <h6> Installer Successfully installed on 2023/06/21 04:11 pm</h6>
                            <h6> Installer Successfully installed on 2023/06/21 04:11 pm</h6>
                            <h6> Installer Successfully installed on 2023/06/21 04:11 pm</h6>
                            <h6> Installer Successfully installed on 2023/06/21 04:11 pm</h6>
                            <h6> Installer Successfully installed on 2023/06/21 04:11 pm</h6>
                            <h6> Installer Successfully installed on 2023/06/21 04:11 pm</h6>
                            <h6> Installer Successfully installed on 2023/06/21 04:11 pm</h6>
                            <h6> Installer Successfully installed on 2023/06/21 04:11 pm</h6>
                            <h6> Installer Successfully installed on 2023/06/21 04:11 pm</h6>
                            <h6> Installer Successfully installed on 2023/06/21 04:11 pm</h6>
                            <h6> Installer Successfully installed on 2023/06/21 04:11 pm</h6>
                            <h6> Installer Successfully installed on 2023/06/21 04:11 pm</h6>
                            <h6> Installer Successfully installed on 2023/06/21 04:11 pm</h6>
                            <h6> Installer Successfully installed on 2023/06/21 04:11 pm</h6>
                            <h6> Installer Successfully installed on 2023/06/21 04:11 pm</h6>
                            <h6> Installer Successfully installed on 2023/06/21 04:11 pm</h6>
                            <h6> Installer Successfully installed on 2023/06/21 04:11 pm</h6>
                        </div>
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
