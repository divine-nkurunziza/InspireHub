

<?php
 session_start ();

 $_SESSION;

# $user_data = check_login();
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Inspire Hub - Home </title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet">
        <!-- Fonts CSS-->
        <link rel="stylesheet" href="css/heading(1).css">
        <link rel="stylesheet" href="css/body.css">
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
            <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top"><img id="brandImage" src="assets/img/Inspire hub logo final.png" alt=""></a>
                <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Latest write ups</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Signup_form.php">Get ready to write!</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Join the Community</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="signup_form.php">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image--><img class="masthead-avatar mb-5" src="assets/img/iNSPIRE Hub logo.png" alt="">
                <!-- Masthead Heading-->
                <h1 class="masthead-heading mb-0">Welcome to Inspire Hub</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="pre-wrap masthead-subheading font-weight-light mb-0">Put it on paper</p>
            </div>
        </header>
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading text-secondary mb-0 d-inline-block">Latest Write ups</h2>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Items-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal0">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>

                                <?php require_once ('image.php')?>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="assets/img/portfolio/oladimeji-odunsi-3Z3vhLYx-Ec-unsplash-scaled.jpg" alt="Black Woman – Leopold S. Senghor"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="assets/img/portfolio/Agostinho-Neto-1978.jpg" alt="The Grieved Lands of Africa – Agostino Neto"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Modal-->
        <div class="portfolio-modal modal fade" id="portfolioModal0" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal0Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">A Government Driver on His Retirement – Onu Kingsley Chibuike</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>

                                    <?php  require_once ('image2.php')?>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Many years on wheels<br>
In faithful service to his fatherland<br>
Today retires him home<br>
And a celebration he hold<br>
<br>
Many hears has he pummeled his boozy throat<br>
In obedience to duty rules and regulations<br>
Today he’ll go home a Freeman<br>
Eligible for his country’s services<br>
<br>
“Come friends, rejoice with me<br>
I shall booze and zoom myself home<br>
Away from duty rules<br>
Come celebrate my freedom.”<br>
“Early to duty tomorrow holds not.<br>
Thirty-five years of faithful services<br>
I’ll booze to sleep away my sufferings<br>
Today I’ve long waited for<br>
<br>
More joy to send him home<br>
A brand new car in his name<br>
An appreciative symbol<br>
Fo undented thirty-five years of service to<br>
Fatherland<br>
<br>
“Come friends, rejoice more.<br>
Joy till no more joy to joy<br>
Today frees and makes me a king<br>
My patience rewarded.”<br>
<br>
And so he boozed and boozed<br>
Celebrating the celebration of his retirement<br>
From faithful service to fatherland<br>
He battled with his bottle booze<br>
On his way home on wheels<br>
Booze boozed his vision and clear judgment<br>
He boomed his brand new car<br>
And it sent him home<br>
Home to rest in peace.</p>
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">Black Woman – Leopold S. Senghor</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="assets/img/portfolio/oladimeji-odunsi-3Z3vhLYx-Ec-unsplash-scaled.jpg" alt="Black Woman – Leopold S. Senghor"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Naked woman, black woman<br>
 
Clothed with your colour which is life<br>
with your form which is beauty.<br>
<br>
In your shadow I have grown up the<br>
gentleness of your hands was laid over my eyes.<br>
<br>
And now high on the sun-baked<br>
pass, at the heart of summer, at the heart of noon,<br>
I come upon you, my Promised Land.<br>
And your beauty strikes me to the heart<br>
like the flash of an eagle.<br>
<br>
Naked woman, dark woman<br>
<br>
Firm-fleshed ripe fruit, sombre raptures<br>
of black wine, mouth making lyrical my mouth<br>
Savannah stretching to clear horizons<br>
Savannah shuddering beneath the East wind’s<br>
eager caresses<br>
<br>
Carved tom tom, taut tom tom, muttering<br>
under the Conqueror’s fingers<br>
<br>
Your solemn contralto voice is the<br>
spiritual song of the Beloved<br>
<br>
Naked woman, dark woman<br>
<br>
Oil that no breath, ruffles, calm oil on the<br>
athlete’s flanks, on the flanks of the Princes of Mali<br>
Gazelle limbed in Paradise, pearls are stars on the<br>
night of your skin<br>
Delights of the mind, the glinting of red<br>
gold against your watered skin<br>
<br>
Under the shadow of your hair my care<br>
is lightened by the neighbouring suns of your eyes<br>
<br>
Naked woman, black woman<br>
I sing your beauty that passes, the form<br>
that I fix in the Eternal<br>
<br>
Before jealous fate turn you to ashes to<br>
feed the roots of life.</p>
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">The Grieved Lands of Africa – Agostino Neto</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="assets/img/portfolio/Agostinho-Neto-1978.jpg" alt="The Grieved Lands of Africa – Agostino Neto"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">The grieved lands of Africa<br>
In the tearful woes of ancient and modern slave<br>
In the degrading sweat of impure dance<br>
Of other seas<br>
Grieved<br>
<br>
The grieved lands of Africa<br>
In the infamous sensation of the stunning of the<br>
Flower<br>
Crushed in the forest<br>
By the wickedness of iron and fire<br>
The grieved lands<br>
<br>
The grieved lands of Africa<br>
In the dream soon undone in jinglings of gaolers’ keys<br>
And in the stifled laughter and victorious voice of laments<br>
And in the unconscious brilliance of hidden sensations<br>
Of the grieved lands of Africa<br>
<br>
Alive<br>
In themselves and with us alive<br>
They bubble up in dreams<br>
Decked with dances by baobabs over balances<br>
By the antelope<br>
In the perpetual alliance of everything that lives<br>
<br>
They shout out the sound of life<br>
Shout it<br>
Even the corpses thrown up by the Atlantic<br>
In putrid offering of incoherence<br>
And death and in the clearness<br>
Of rivers<br>
<br>
They live<br>
The grieved lands of Africa<br>
In the harmonious sound of conscience<br>
Contained in the honest blood of men<br>
In the strong desire of men<br>
In the sincerity<br>
In the pure and simple rightness of the stars<br>
Existence<br>
<br>
They live<br>
The grieved lands of Africa<br>
Because we are living<br>
And are imperishable particles<br>
Of the grieved lands of Africa.</p>
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">  
                <!-- About Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading d-inline-block text-white">Get ready to write</h2>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ml-auto">
                        <p class="pre-wrap lead">Here at Inspire Hub we promote creativity of all shapes and forms. We want to see your imagination run to the ends of the earth.</p>
                    </div>
                    <div class="col-lg-4 mr-auto">
                        <p class="pre-wrap lead">You can create your own write ups and poems at the spaces provided for you. You can get inspired by other writers or the audience at Inspire Hub</p>
                    </div>   
                </div>
            </div>
            
        </section>
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading text-secondary d-inline-block mb-0">Join the Community</h2>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Content-->
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-3"><i class="fas fa-mobile-alt"></i></div>
                            <div class="text-muted">Phone</div>
                            <div class="lead font-weight-bold">(+233) 559-591-481</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-3"><i class="far fa-envelope"></i></div>
                            <div class="text-muted">Email</div><a class="lead font-weight-bold" href="mailto:name@example.com">inspirehub@info.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="mb-4">LOCATION</h4>
                        <p class="pre-wrap lead mb-0">1 University Avenue, Berekuso
Ashesi University</p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="mb-4">Connect with us!</h4><a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/inspirehub"><i class="fab fa-fw fa-facebook-f"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://www.twitter.com/inspirehub"><i class="fab fa-fw fa-twitter"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/inspirehub"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="mb-4"></h4>
                        <p class="pre-wrap lead mb-0"> </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <section class="copyright py-4 text-center text-white">
            <div class="container"><small class="pre-wrap">Copyright © Inspirehub.com </small></div>
        </section>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed"><a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>