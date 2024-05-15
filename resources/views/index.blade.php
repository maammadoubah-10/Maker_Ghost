
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Vente de betails</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white pr-3" href="">FAQ</a>
                    <span class="text-white">|</span>
                    <a class="text-white px-3" href="">Aide</a>
                    <span class="text-white">|</span>
                    <a class="text-white pl-3" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Khar-</span>Bi</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="d-inline-flex flex-column text-center pr-3 border-right">
                        <h6>Heure d'ouverture</h6>
                        <p class="m-0">08h - 21h</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center px-3 border-right">
                        <h6>Envoyez-nous un email</h6>
                        <p class="m-0">kharbivente@gmail.com</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center pl-3">
                        <h6>appelez-nous</h6>
                        <p class="m-0">+221 77523 82 01</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Safety</span>First</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Accueil</a>
                    <a href="about.html" class="nav-item nav-link">A propos</a>
                    <a href="price.html" class="nav-item nav-link">Page de moutons</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>

                </div>
                <ul class="navbar-nav">
                <li class="nav-item">
    <a href="{{ route('cart.show') }}" class="nav-link">
        <i class="fas fa-shopping-cart" style="color: green;"></i>
        @if(session('cart'))
            <span class="badge badge-pill badge-success">{{ count(session('cart')) }}</span>
        @endif
    </a>
</li>

</ul>
         <a href="{{ route('login') }}" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Se connecter</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/mou.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 d-none d-sm-block">Meilleurs services pour achat de moutons</h3>
                            <h1 class="display-3 text-white mb-3">Khar-Bi</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">une solution intuitive pour gerer votre temps</h5>
                            <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Reserver maintenant</a>
                            <a href="" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/mou1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 d-none d-sm-block">Votre bien-etre, Notre bien-etre</h3>
                            <h1 class="display-3 text-white mb-3"></h1>
                            <h1 class="text-white mb-3 d-none d-sm-block">Bienvenu Sur</h1>
                            <h2 class="text-white mb-3 d-none d-sm-block">Khar-Bi</h2>
                            <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Reserver maintenant</a>
                            <a href="" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Booking Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5">
                        <form class="py-5">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Votre Nom" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4" placeholder="Votre Email" required="required" />
                            </div>
                            <div class="form-group">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Date de reservation" data-target="#date" data-toggle="datetimepicker"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Heure de reservation" data-target="#time" data-toggle="datetimepicker"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;">
                                    <option selected>Select A Service</option>
                                    <option value="1">Service 1</option>
                                    <option value="2">Service 1</option>
                                    <option value="3">Service 1</option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                    <h4 class="text-secondary mb-3">Pour le  bien-etre de la famille pendant la Tabaski?</h4>
                    <h2 class="display-4 mb-4">Chacun ,un mouton <span class="text-primary">Selon votre Kalpet</span></h2>
                    <p>Khar-Bi, Une solution existante </p>
                    <div class="row py-2">
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="flaticon-house font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <h5 class="text-truncate m-0">Élevage de moutons pour la fête de Tabaski</h5>
                                </div>
                                <p>Besoin d'un mouton pour la Tabaski ? Découvrez notre sélection d'élevage de moutons de qualité pour célébrer cette fête en toute tradition.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="flaticon-food font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <h5 class="text-truncate m-0">Nourriture adaptée aux moutons de compagnie</h5>
                                </div>
                                <p>Assurez-vous que votre mouton soit bien nourri pour la Tabaski. Explorez notre gamme de nourriture spécialement conçue pour les moutons pour les garder en pleine forme pendant cette période festive.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="flaticon-grooming font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <h5 class="text-truncate m-0">Toilettage et soins des moutons pour la Tabask</h5>
                                </div>
                                <p class="m-0">Préparez votre mouton pour la Tabaski avec nos services de toilettage et de soins spécialisés. Offrez-lui une apparence impeccable pour cette fête importante.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="flaticon-toy font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <h5 class="text-truncate m-0">Livraison de moutons à domicile pour la Tabaski </h5>
                                </div>
                                <p class="m-0">Besoin de faire livrer votre mouton juste à temps pour la Tabaski ? Profitez de notre service de livraison de moutons à domicile et recevez votre compagnon festif où que vous soyez.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Start -->


    <!-- About Start -->
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">A propos de nous</h4>
                <h1 class="display-4 mb-4"><span class="text-primary">Notre</span>  <span class="text-secondary">Engagement</span></h1>
                <h5 class="text-muted mb-3">Chez Khar-Bi, nous nous engageons à vous fournir des moutons de la plus haute qualité pour célébrer la fête de Tabaski avec authenticité et tradition. Notre équipe dévouée, composée d'experts en élevage de moutons, veille à ce que chaque animal soit élevé dans des conditions optimales, garantissant ainsi une viande de qualité supérieure pour votre célébration.</h5>
                <a href="" class="btn btn-lg btn-primary mt-3 px-4">Plus d'informations</a>
            </div>
            <div class="col-lg-5">
                <div class="row px-3">
                <div class="col-8 p-0">
                     <img class="img-fluid" src="img/mou5.jpg" alt="">
                </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="img/mou2.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="img/mou7.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
   
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid w-100" src="img/mou8.jpg" alt="">
            </div>
            <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                <h1 class="text-secondary mb-3">Nos Services</h1>
                <p class="mb-4">En plus de notre sélection soigneusement choisie de moutons, nous offrons une gamme de services complémentaires pour répondre à tous vos besoins. De la livraison à domicile à des conseils personnalisés en alimentation et en soins, en passant par des options de toilettage, nous sommes là pour rendre votre expérience de magasinage et de préparation de la Tabaski aussi fluide et agréable que possible.</p>
                <div class="row py-2">
                </div>
            </div>
        </div>
    </div>
    

     

    <!-- Pricing Plan Start -->
   
    <!-- Pricing Plan End -->


    <!-- Team Start -->
    <div class="container mt-5 pt-5 pb-3">
    <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid w-100" src="img/mou3.jpg" alt="">
            </div>
            <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                <h1 class="text-secondary mb-3">Notre Vision</h1>
                <p class="mb-4">Découvrez notre vision à long terme pour l'industrie de l'élevage de moutons et comment nous travaillons pour l'améliorer. Nous aspirons à promouvoir des pratiques durables, à soutenir les éleveurs locaux et à offrir des produits de qualité à nos clients, tout en respectant les normes les plus élevées en matière de bien-être animal.</p>
                <div class="row py-2">
                </div>
            </div>
        </div>
       
    </div>

    <!-- Team End -->


    <!-- Testimonial Start -->

    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-secondary mb-3">Khar-bi</h4>
            <h1 class="display-4 m-0"><span class="text-primary">Nos </span> Réalisations </h1>
        </div>
        <div class="row pb-3">
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="img/mou11.jpg" alt="">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Diam amet eos at no eos</h4>
                        <div class="d-flex mb-3">
                            <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                            <small class="mr-2"><i class="fa fa-folder text-muted"></i> Web Design</small>
                            <small class="mr-2"><i class="fa fa-comments text-muted"></i> 15</small>
                        </div>
                        <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos, rebum sit vero stet justo</p>
                        <a class="font-weight-bold" href="">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="img/mou12.jpg" alt="">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Diam amet eos at no eos</h4>
                        <div class="d-flex mb-3">
                            <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                            <small class="mr-2"><i class="fa fa-folder text-muted"></i> Web Design</small>
                            <small class="mr-2"><i class="fa fa-comments text-muted"></i> 15</small>
                        </div>
                        <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos, rebum sit vero stet justo</p>
                        <a class="font-weight-bold" href="">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="img/mou13.jpg" alt="">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Diam amet eos at no eos</h4>
                        <div class="d-flex mb-3">
                            <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                            <small class="mr-2"><i class="fa fa-folder text-muted"></i> Web Design</small>
                            <small class="mr-2"><i class="fa fa-comments text-muted"></i> 15</small>
                        </div>
                        <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos, rebum sit vero stet justo</p>
                        <a class="font-weight-bold" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Khar-</span>Bi</h1>
                <p class="m-0">Ipsum amet sed vero et lorem stet eos ut, labore sed sed stet sea est ipsum ut. Volup amet ea sanct ipsum, dolore vero lorem no duo eirmod. Eirmod amet ipsum no ipsum lorem clita ut. Ut sed sit lorem ea lorem sed, amet stet sit sea ea diam tempor kasd kasd. Diam nonumy etsit tempor ut sed diam sed et ea</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Coordonnées</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Dieupeul derkhele, Dakar, SENEGAL</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+221 77523 82 01</p>
                        <p><i class="fa fa-envelope mr-2"></i>kharbivente@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Liens Populaires</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Acceuil</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>A propos de nous</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>nos Services</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Notre Equipe</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contactez-nous</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Bulletin</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0" placeholder="Votre Nom" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0" placeholder="Votre Email" required="required" />
                            </div>
                            <div>
                                <button class="btn btn-lg btn-primary btn-block border-0" type="submit">Soumettre maintenant</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">Khar-bi</a>. Tous Droits Réservés. Designed by
                    <a class="text-white font-weight-bold" href="https://htmlcodex.com">FediobeDev</a>
                </p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Confidentialité</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Termes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Aide</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>