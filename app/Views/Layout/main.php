<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .nav {
            position: sticky;
            top: 0px;
        }
    </style>
</head>


<body class="bg-dark">
    <div class="nav coustom-background d-flex flex-column justify-content-end text-center">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand text-warning" href="<?= base_url('/home') ?>">MI</a>
                <ul class="navbar-nav d-flex flex-row">
                    <li class="nav-item me-3">
                        <a class="nav-link text-light" href="<?= base_url('/home') ?>">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link text-light" href="<?= base_url('/contact') ?>">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url('/signup') ?>">Sign Up</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <?= $this->renderSection('content') ?>
    <!-- footer -->

    <footer class="text-center ">

        <!--  Social  -->
        <section class="mb-4 ">
            <!-- whatsapp -->
            <p class="lead text-light"> FOLLOW US </p>

            <a data-mdb-ripple-init id=test class="btn p-0 m-1" style="background-color: #26bb3a;"
                href="https://iwtsp.com/966567400212" role="button">
                <img src="<?= base_url('assets/images/whats.png') ?>" alt="WhatsApp logo" style="width:30px; height:30px;">
            </a>

            <!-- Linkedin -->
            <a class="btn p-0 m-1 btn-info"
                href="https://www.linkedin.com/in/rawan-albaqami-740538224/" role="button">
                <img src="<?= base_url('assets/images/link.png') ?>" alt="linkedin logo" style="width:30px; height:30px;">
            </a>
        </section>
        </div>
        <!-- Copyright -->
        <div class="text-center p-3 bg-warning">
            © 2024 Copyright
        </div>

    </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>

</html>