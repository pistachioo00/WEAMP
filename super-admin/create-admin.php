<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Worker's Affairs Office</title>
    <link rel="stylesheet" href="">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS Style -->
    <link rel="stylesheet" href="../css/styles.css">
</head>
<style>
    .navbar-nav .nav-item .nav-link {
        color: white;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #C80000;">
        <div class="container">
            <a class="navbar-brand" href="../user/index.php">
                <!--<img src="../assets/Valenzuela-Seal-Outline.svg" alt="Valenzuela-Seal-Outline"
                        style="width: 80px; height: 80px;">-->
                <img src="../assets/WAO-Logo.svg" alt="Header-Title" style="width: 300px; height: 65px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-center" id="navbarSupportedContent">
                <ul class="navbar-nav nav-underline mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../super-admin/sa-home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../super-admin/sa-dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../super-admin/sa-rfa-entries.php">RFA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../super-admin/sa-sena-records.php">Records</a>
                    </li>
                </ul>
            </div>

            <a href="#">
                <a class="nav-link" href="../user/my-account.php" style="color: white">
                    <img src="../assets/User/User.svg" alt="My-Account"
                        style="width: 20px; height: 20px; margin-right: 5px;">
                    My Account

                </a>
                <a class="nav-link" href="logout.php" onclick="showLogoutConfirmation()" style="color: white">
                    <img src="../assets/User/Line1.svg" alt="Line"
                        style="width: 20px; height: 20px; margin-right: 5px;">
                    <img src="../assets/User/Sign_out_squre.svg" alt="Sign-out"
                        style="width: 20px; height: 20px; margin-right: 5px;">
                    Log Out
                </a>
                </ul>
            </a>

        </div>
    </nav>

    <!-- Add the logout confirmation modal markup -->
    <div class="modal fade" id="logoutConfirmationModal" tabindex="-1"
        aria-labelledby="logoutConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title text-center" id="logoutConfirmationModalLabel">Logout Confirmation</h5>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to log out?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="logout()">Logout</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>


    <h2 style="font-family: sub-font-bold; padding-left: 10%; padding-top: 10%; color: #304DA5;">Create New</h2><br>
    <div class="container">
        <div class="accordion" id="accordionPanelsStayOpenExample"
            style="border: 2px solid black; table-layout: fixed;">
            <div class="accordion-item">
                <h2 style="color: #304DA5;"><img src="../assets/register-account.png" alt="Image"
                        style="margin-right: 5px; width: 30px; height: 30px;">IMPORTANT REMINDERS</h2>
                <h2 class="accordion-header"></h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                    <div class="accordion-body" style="font-size: 1.1rem; color: #465DA3;">
                        <strong style="color: #304DA5;">1. Email must be unique.</strong> You
                        cannot use a single email address for multiple user accounts. <br>
                        <strong>2. The registered email address will also be the username for the
                            account.</strong><br>
                        <strong style="color: #304DA5;">3. A confirmation email will be sent to the email address used. </strong> User must
                        be able to confirm
                        his/her account before she can use it. <br>
                        <strong style="color: #304DA5;">4. For National and Central Operations, please follow this example when encoding the
                            MOBILE
                            number (an SMS will be sent to new user): </strong><code
                            style="font-size: 1.1rem">09112545245</code>. No need to include hyphens, spaces,
                        or country code.
                    </div>
                </div>
            </div>
        </div>
    </div><br>

    <div class="container">
        <div class="container text-align-left">
            <div class="container-sm">
                <div class="col">
                    <div class="mb-2">
                        <label for="formGroupExampleInput" class="form-label">UserName</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="mamalinda">
                    </div>
                    <div class="mb-2">
                        <label for="formGroupExampleInput2" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Mhia Rose">
                    </div>
                    <div class="mb-2">
                        <label for="formGroupExampleInput2" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Baguanga">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2"
                            placeholder="mamalinds@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Contact</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2"
                            placeholder="09556644548">
                    </div>
                    <div class="form-group col-md-4 d-flex align-items-start justify-content-between mb-4">
                        <label for="formGroupExampleInput2" class="form-label" style="padding-right: 15%;">Select
                            User Role</label>
                        <select id="category" class="form-control"
                            style="background-color: transparent; border: 1px black solid;">
                            <option value="">Admin</option>
                            <option value="">Super Admin</option>
                        </select>
                    </div>

                    <div class="btn-container"
                        style="border-top: 3px solid #757575; width: 75%; padding-bottom: 8%;  margin-bottom: 15%">
                        <a>
                            <div class="left-btn col-md-65">
                                <div id="liveAlertPlaceholder"></div>
                                <button type="button" class="btn btn-success" id="liveAlertBtn"
                                    style="margin-right: 20%;">Create</button>
                            </div>
                        </a>
                        <a href="sa-user-management.php">
                            <div class="left-btn col-md-85">
                                <button type="button" class="btn btn-secondary"
                                    style="margin-left: 30%;">Close</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer" style="background-color: #26272B;">
        <div class="container-footer" style="color: white;">
            <p>Copyright 2024 © All Rights Reserved</br>
                Worker’s Affairs Office</p>
        </div>
    </footer>
</body>
<script src="super-admin.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script>
    // Initialize popovers
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>

</html>
