<?= $this->extend('Layout/main') ?>

<?= $this->section('content') ?>


<div class="container">

    <div class="row mt-5 pt-5 ">
        <div class="col">

            <div class="d-flex position-relative">
                <h1 class="text-light display-1 ">WELCOME </h1>
            </div>
            <p class="text-warning lead pt-5"> THIS PAGE IS ABOUT ME </p>
        </div>
        <div class="col">
    <img src="<?= base_url('assets/images/ggreen1.png') ?>" alt="" class="img-fluid ">
</div>

    </div>
    <div class="col-md-4">
    </div>


    <!-- the main text -->
    <hr class="mb-5 mt-5 bg-light">
    <div class="mb-5 mt-5"><br></div>
    <div class="m-5" class="text-center">

        <pre></pre>
        <h2 class="text-warning text-center">ABOUT ME</h2>
        <div class="row justify-content-center align-items-center text-center">
            <div class="col m-3">
                <p id="show-more" class="text-light"> a recent graduate in Programming from Imam Mohammed Ibn
                    Saud Islamic University.
                    Additionally, I hold a diploma in Marketing from the General Organization for Technical
                    and Vocational
                    I have strong skills in programming languages such as Java, JavaScript, PHP, HTML, CSS, SQL,
                    and .
                    Furthermoreو I possess diverse marketing skills including digital marketing, customer and
                    competitor
                    analysis, <br><br> a recent graduate in Programming from Imam Mohammed Ibn
                    Saud Islamic University.
                    Additionally, I hold a diploma in Marketing from the General Organization for Technical
                    and Vocational
                    I have strong skills in programming languages such as Java, JavaScript, PHP, HTML, CSS, SQL,
                    and .
                    Furthermoreو I possess diverse marketing skills including digital marketing, customer and
                    competitor
                    analysis,
                </p>
                <button id="show" class="btn btn-warning mt-3">SHOW</button>
            </div>

        </div>

    </div>


    <div class="text-center p-4 mt-4  mb-4">
        <br><br> <br>
        <h2 class="text-warning">Educational
            Background</h2>
        <p id=pargh class="text-light text-center mt-4  mb-4">
            I hold a Diploma in Programming
            Technology from Imam Mohaammed Ibn Saud
            Islamic University, where I developed strong skills <br> in software development and designing technical
            solutions. Additionally,<br> I completed a Diploma in Marketing from the Technical and Vocational Trining
            Corporation College,<br> which equipped me with a comprehensive understanding of marketing strategies and
            tools. </p>
        <pre>
    </div>


    <div class="text-center">
        <h1 class="text-warning"> Projects </h1>
        <p class="lead text-light">
            I have been involved in several key projects that highlight my skills and expertise. One of them
            was my graduation project:
        </p>

        <div class="flex-container">

        <img src="<?= base_url('assets/images/es.png') ?>" class="m-5 container rounded float-center" alt="Image 1" style="max-width:200px;">
      
        <img src="<?= base_url('assets/images/es1.png') ?>" class=" m-5 container rounded float-center  " alt="Image 2" style="max-width:200px;">
        </div>
        <h5 class="text-warning">
            Easy Pick – A Program to Pick Up Children:
        </h5>

        <br><br>
        <p class="text-light">
            As schools grow and the number of students increases, overcrowding at the exits becomes a
            significant issue. <br> Easy Pick aims to solve this problem by offering a simple-to-use app
            with a user-friendly interface. With just a click of a button, <br> parents can notify the
            school of their arrival, prompting the administrator to call out their child’s name via the
            intercom.
        </p>

    </div>
   
    <!-- the main text -->


    <!-- slide -->'

    <br><br>
    <div class="flex-container m-5">

        <!-- text -->
        <div class="text-center">
            <h5 class="text-warning m-5">
                HOME OF BEAUTY - nail bar & spa website: </h5>

            <p class="text-center text-light p-4 m-4">
                “It is a comprehensive salon website that allows you to create a personal account, book services, and
                view the prices for each service. The site includes categories for hair services, nail services,
                and skin services. Each service is organized into its own section, making it easy to access the
                information you need and plan your visits according to your personal needs
            </p>
        </div>

        <!-- slide -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" aria-label="Slide 2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" aria-label="Slide 3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style=border-radius:10px; src="<?= base_url('assets/images/1.jpg') ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img style=border-radius:10px; src="<?= base_url('assets/images/2.jpg') ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img style=border-radius:10px; src="<?= base_url('assets/images/3.jpg') ?>" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>

            </a>
        </div>
    </div>
    <br>
 
<?= $this->endSection('') ?>