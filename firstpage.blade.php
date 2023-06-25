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

                            <a class="nav-link" href="#"> <i
                                    class="fa-regular fa-circle-dot fa-beat-fade fa-2xl"></i> Pre installation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/second">Configuration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Finish</a>
                        </li>
                    </ul>
                </div>
                <div class="px-3 mt-5 ">
                    <div class="mx-auto">
                        <h6>1.Please configure your php setting to match following requirement</h6>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover ">

                                <tr>
                                    <th scope="col">PHP SETTING</th>
                                    <th scope="col">CURRENT VERSION</th>
                                    <th scope="col">REQUIRED VERSION</th>
                                    <th scope="col">STATUS</th>
                                </tr>
                                <tr>
                                    <td scope="row">PHP VERSION</td>
                                    <td>8.1.10</td>
                                    <td>8.00</td>
                                    <td><span class="badge text-bg-success rounded-5 px-3">ok</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="my-5">
                        <h6>2.Please make sure the extention/setting listed below are installed/enabled your php setting
                            to match following requirement</h6>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover  ">


                                <th scope="col">EXTENTION/SETTINGS</th>
                                <th scope="col">CURRENT SETTINGS</th>
                                <th scope="col">REQUIRED SETTINGS</th>
                                <th scope="col">STATUS</th>
                                <tr>
                                    <td scope="row">PHP VERSION</td>
                                    <td>On</td>
                                    <td>On</td>
                                    <td><span class="badge text-bg-success rounded-5 px-3">ok</span></td>
                                </tr>
                                <tr>
                                    <td scope="row">PHP VERSION</td>
                                    <td>On</td>
                                    <td>On</td>
                                    <td><span class="badge text-bg-success rounded-5 px-3">ok</span></td>
                                </tr>
                                <tr>
                                    <td scope="row">PHP VERSION</td>
                                    <td>On</td>
                                    <td>On</td>
                                    <td><span class="badge text-bg-success rounded-5 px-3">ok</span></td>
                                </tr>
                                <tr>
                                    <td scope="row">PHP VERSION</td>
                                    <td>On</td>
                                    <td>On</td>
                                    <td><span class="badge text-bg-success rounded-5 px-3">ok</span></td>
                                </tr>
                                <tr>
                                    <td scope="row">PHP VERSION</td>
                                    <td>On</td>
                                    <td>On</td>
                                    <td><span class="badge text-bg-success rounded-5 px-3">ok</span></td>
                                </tr>
                                <tr>
                                    <td scope="row">PHP VERSION</td>
                                    <td>On</td>
                                    <td>On</td>
                                    <td><span class="badge text-bg-success rounded-5 px-3">ok</span></td>
                                </tr>
                                <tr>
                                    <td scope="row">PHP VERSION</td>
                                    <td>On</td>
                                    <td>On</td>
                                    <td><span class="badge text-bg-success rounded-5 px-3">ok</span></td>
                                </tr>
                                <tr>
                                    <td scope="row">PHP VERSION</td>
                                    <td>On</td>
                                    <td>On</td>
                                    <td><span class="badge text-bg-success rounded-5 px-3">ok</span></td>
                                </tr>
                                <tr>
                                    <td scope="row">PHP VERSION</td>
                                    <td>On</td>
                                    <td>On</td>
                                    <td><span class="badge text-bg-success rounded-5 px-3">ok</span></td>
                                </tr>
                                <tr>
                                    <td scope="row">PHP VERSION</td>
                                    <td>On</td>
                                    <td>On</td>
                                    <td><span class="badge text-bg-success rounded-5 px-3">ok</span></td>
                                </tr>
                                <tr>
                                    <td scope="row">PHP VERSION</td>
                                    <td>On</td>
                                    <td>On</td>
                                    <td><span class="badge text-bg-success rounded-5 px-3">ok</span></td>
                                </tr>
                                <tr>
                                    <td scope="row">PHP VERSION</td>
                                    <td>On</td>
                                    <td>On</td>
                                    <td><span class="badge text-bg-success rounded-5 px-3">ok</span></td>
                                </tr>
                                <tr>
                                    <td scope="row">PHP VERSION</td>
                                    <td>On</td>
                                    <td>On</td>
                                    <td><span class="badge text-bg-success rounded-5 px-3">ok</span></td>
                                </tr>
                                <tr>
                                    <td scope="row">PHP VERSION</td>
                                    <td>On</td>
                                    <td>On</td>
                                    <td><span class="badge text-bg-success rounded-5 px-3">ok</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="my-5 ">
                        <h6>3.Please make sure the extention/setting listed below are installed/enabled your php setting
                            to match following requirement</h6>
                        <table class="table  table-hover ">

                            <tbody class="">
                                <tr class="">
                                    <th scope="row">/resources</th>
                                    <td><span class="badge text-bg-success rounded-5 px-3">ok</span></td>
                                </tr>
                                <tr class="">
                                    <th scope="row">/public</th>
                                    <td><span class="badge text-bg-success rounded-5 px-3">ok</span></td>
                                </tr>
                                <tr class="">
                                    <th scope="row">/storage</th>
                                    <td><span class="badge text-bg-success rounded-5 px-3">ok</span></td>
                                </tr>
                                <tr class="">
                                    <th scope="row">.env</th>
                                    <td><span class="badge text-bg-success rounded-5 px-3">ok</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="d-grid gap-2 col mx-auto">
                        <button class="btn btn-outline-warning" type="button">Close</button>
                    </div>
                    <div class="d-grid gap-2 col mx-auto">
                        <a class="btn btn-warning" href="/second" role="button">Next</a>
            
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
