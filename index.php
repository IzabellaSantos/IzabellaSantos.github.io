<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#00D4FF">
    <title> Izabella Santos | Desenvolvedora </title>

    <?php include 'resources/imports/imports.php' ?>

</head>

<<<<<<< HEAD

=======
    
>>>>>>> 391c2e8e3c0cc47fa32ed267663184c70bb34e98
<body>
    <!-- Menu -->
    <nav class="navbar fixed-top navbar-expand-lg justify-content-between">

        <img src="resources/images/logo.png" class="imgNavbar">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fa fa-bars"></i>
            </span>
        </button>

        <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#" onclick="$('html,body').scrollTop(0)">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#soft-skills">soft skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#hard-skills">hard skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">projects</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Inicio -->
    <div class="container">
        <div class="row">

            <div class="col-md-6 align-self-center d-flex justify-content-center">
                <img class="imgCod" src="resources/images/first_programming.png" alt="">
            </div>

            <div class="col-md-6 align-self-center text-center">
                <span class="introductionTitle">Welcome!</span>
                <br>
                <br>
                <p class="align-middle">
                    I am Izabella Júlia dos Santos, a web fullstack dev.
                    This is my place for you to know a little bit more about me and my kind of work.
                    I love creating my projects due to the satisfying feeling I get.
                    You can get in touch with me in my social medias and my email below.
                </p>
                <br>
                <p class="align-middle">
                    <a href="https://www.instagram.com/bellantos/" target=”_blank”>
                        <i class="fa fa-instagram" id="instagramIntroducion"></i>
                    </a>

                    <a href="https://www.linkedin.com/in/izabella-j%C3%BAlia-santos-3474721a3/" target=”_blank”>
                        <i class="fa fa-linkedin-square" id="linkedinIntroducion"></i>
                    </a>

                    <a href="https://github.com/IzabellaSantos" target=”_blank”>
                        <i class="fa fa-github" id="githubIntroducion"></i>
                    </a>
                </p>
            </div>
        </div>
    </div>


    <!-- Soft skills -->
    <hr>
    <div class="container">
        <h1 class="soft-skills-title" id="soft-skills">Soft skills</h1>
        <br class="divide-line"><br class="divide-line">
        <div class="row">
            <div class="col-sm-4 align-self-center d-flex justify-content-center">
                <div class="card">
                    <img class="card-img-top" src="resources/images/workGroup.png" alt="Card image cap">
                    <h5 class="card-title">Team Work</h5>
                    <div class="card-body">
                        <p class="card-text">The key to learn more and share solutions. People have always something different to teach us, and I love hearing everything. </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 d-flex justify-content-center">
                <div class="card">
                    <img class="card-img-top" src="resources/images/communication.png" alt="Card image cap">
                    <h5 class="card-title">Communication</h5>
                    <div class="card-body">
                        <p class="card-text">Communication is one of my best qualities, I have always love to be in touch with people and try to understand them more.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 align-self-center d-flex justify-content-center">
                <div class="card">
                    <img class="card-img-top" src="resources/images/organization.png" alt="Card image cap">
                    <h5 class="card-title">Organization</h5>
                    <div class="card-body">
                        <p class="card-text">The method which provides you a complete notion about your tasks. I alwyas try to give the right importance for each task I have to do.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Habilidades -->
    <hr id="hard-skills">
    <div class="container">
        <h1 class="hard-skills-title">Hard skills</h1>
        <br>
        <br>
        <div class="skills-container">
            <div class="skills-box">
                <p class="skills-title">Database</p>
                <i class="devicon-mysql-plain color_skill"></i>
                <i class="devicon-oracle-plain color_skill"></i>
            </div>

            <div class="skills-box">
                <p class="skills-title">Back-end</p>
                <i class="devicon-php-plain color_skill"></i>
                <i class="devicon-c-plain color_skill"></i>
                <i class="devicon-csharp-plain color_skill"></i>
            </div>

            <div class="skills-box">
                <p class="skills-title">Tools</p>
                <i class="devicon-visualstudio-plain color_skill"></i>
                <i class="devicon-github-original color_skill"></i>
                <i class="devicon-unity-original color_skill"></i>
                <i class="devicon-git-plain color_skill"></i>
            </div>

            <div class="skills-box">
                <p class="skills-title">Front-end</p>
                <i class="devicon-html5-plain color_skill"></i>
                <i class="devicon-css3-plain color_skill"></i>
                <i class="devicon-javascript-plain color_skill"></i>
                <i class="devicon-bootstrap-plain color_skill"></i>
            </div>
        </div>
    </div>


    <!-- Projects -->
    <hr id="projects">
    <div class="project-div">
        <h1 class="projects-title">Projects</h1>
        <br class="divide-line"><br class="divide-line"><br class="divide-line">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container container-projects">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                                <iframe src="https://www.youtube.com/embed/szNB1q9bo7g">
                                </iframe>
                            </div>
                            <div class="col-12 col-md-6 div-projects">
                                <p class="project-title">SEPHIROT</p>
                                <p>CEFET-MG final assignment. It is a 2D game project where you can learn about a lot of different high schools subjects, such as physics and chemistry.
                                </p>
                                <p>It has been developed in Unity Engine, with C# and free assets found in the Unity store.
                                </p>

                                <p>repository link: <a href="https://github.com/IzabellaSantos/JogoSephiroth">sephirot project</a></p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container container-projects">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                                <img class="imageProject" src="resources/images/form.png" alt="">
                            </div>
                            <div class="col-12 col-md-6 div-projects">
                                <p class="project-title">Formulário API ViaCEP</p>
                                <p>Projeto voltado para o aprendizado do manuseio de API's.
                                    É um formulário com design em Bootstrap e Backend PHP com ligação ao banco MySQL,
                                    o qual salva todas as informações preenchidas.
                                </p>
                                <p>repository link: <a href="https://github.com/IzabellaSantos/formulario_bootstrap" target="_blank">form project</a>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center">
                        <div class="container container-projects d-flex align-items-center">
                            <div class="col-3"></div>
                            <div class="col-6">
                                <img src="resources/images/calendar.png" alt="soon" class="project-soon">
                                <br>
                                <div style="text-align: center;">Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
                            </div>
                            <div class="col-3"></div>

                        </div>
                    </div>

                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="contact text-center text-lg-start bg-light text-muted" id="contact">
        <div class="text-center p-4">
            <a class='email align-middle' href="mailto:izabellajuliasantos@gmail.com">izabellajuliasantos@gmail.com</a>

            <a class='align-middle' href="https://www.instagram.com/bellantos/" target=”_blank”>
                <i class="fa fa-instagram"></i>
            </a>

            <a class='align-middle' href="https://www.linkedin.com/in/izabella-j%C3%BAlia-santos-3474721a3/" target=”_blank”>
                <i class="fa fa-linkedin-square"></i>
            </a>

            <a class='align-middle' href="https://github.com/IzabellaSantos" target=”_blank”>
                <i class="fa fa-github"></i>
            </a>
        </div>
    </footer>


</body>

</html>
