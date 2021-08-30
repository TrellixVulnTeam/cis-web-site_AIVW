<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/cis-web-site/themes/cis/pages/accueil.htm */
class __TwigTemplate_3447924db49f75b63183d7749e973d125cc2f35af53853186f12b758c9dc2335 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section>
    <div class=\"body\">
        <!--====== BANNER PART START ======-->
        <div class=\"banner-active\">
            <div class=\"single-banner bg_cover\" style=\"background-image: url(themes/cis/assets/images-cis/slides/slide1.jpg);\">
                <div class=\"banner-overlay\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-9\">
                                <div class=\"banner-content\">
                                    <span data-animation=\"fadeInLeft\" data-delay=\"0.5s\">En attente slide 1</span>
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\"0.9s\" class=\"title\">En attente slide 1<br>En attente suite slide 1</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\"1.3s\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremda tium totam rem aperiam eaque ipsa quae ab illo inventore veritatis </p>
                                    <a data-animation=\"fadeInUp\" data-delay=\"1.6s\" class=\"main-btn text-muted\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("nos-services");
        echo "\">Nos Services <i class=\"fal fa-long-arrow-right\"></i></a>
                                </div> <!-- banner content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div>
            </div>

            <div class=\"single-banner bg_cover\" style=\"background-image: url(themes/cis/assets/images-cis/slides/slide2.jpg);\">
                <div class=\"banner-overlay\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-9\">
                                <div class=\"banner-content\">
                                    <span data-animation=\"fadeInLeft\" data-delay=\"0.5s\">En attente slide 2</span>
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\"0.9s\" class=\"title\">En attente slide 2<br>En attente suite slide 2</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\"1.3s\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremda tium totam rem aperiam eaque ipsa quae ab illo inventore veritatis </p>
                                    <a data-animation=\"fadeInUp\" data-delay=\"1.6s\" class=\"main-btn text-muted\" href=\"#\">Nos Services <i class=\"fal fa-long-arrow-right\"></i></a>
                                </div> <!-- banner content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div>
            </div>
            <div class=\"single-banner bg_cover\" style=\"background-image: url(themes/cis/assets/images-cis/slides/slide3.jpg);\">
                <div class=\"banner-overlay\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-9\">
                                <div class=\"banner-content\">
                                    <span data-animation=\"fadeInLeft\" data-delay=\"0.5s\">En attente slide 3</span>
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\"0.9s\" class=\"title\">En attente slide 3<br>En attente suite slide 3</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\"1.3s\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremda tium totam rem aperiam eaque ipsa quae ab illo inventore veritatis </p>
                                    <a data-animation=\"fadeInUp\" data-delay=\"1.6s\" class=\"main-btn text-muted\" href=\"#\">Nos Services <i class=\"fal fa-long-arrow-right\"></i></a>
                                </div> <!-- banner content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div>
            </div>
        </div>
        <!--====== BANNER PART ENDS ======-->

        <!--====== FEATURES PART START ======-->
        <div class=\"features-area pt-120 pb-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"features-item\">
<!--                            <strong>CIS</strong>-->
<!--                            <h2 class=\"title\">POURQUOI NOUS CHOISIR</h2>-->
<!--                            <span>Notre connaissance de l'informatique vous aidera</span>-->
                            <p>
                                CIS (Computer Information Systems) est un acteur
                                majeur de la technologie de l’information et de la communication en Europe, en Afrique et au Proche-Orient.
                                CIS possède une expertise de plus de 30 ans dans la distribution et l’intégration de solutions, produits
                                et services technologiques.
                                La société est organisée en unités opérationnelles qui sont bien compétentes au sein de leurs segments de
                                Marchés respectifs. La compétence commerciale et technique de nos équipes, ainsi que leur faculté d’adaptation
                                Aux besoins et aux attentes des différents marchés ont profondément contribué au développement du Groupe
                            </p>
                            <ul>
                                <li><a class=\"main-btn wow fadeInUp\" href=\"#\" data-wow-duration=\".5s\" data-wow-delay=\".4s\">En savoir plus sur nous</a></li>
<!--                                <li><a class=\"main-btn main-btn-2 wow fadeInUp\" href=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("presentation");
        echo "\" data-wow-duration=\"1s\" data-wow-delay=\".6s\"> <i class=\"fal fa-video\"></i>Learn More</a></li>-->
                            </ul>
                            <img class=\"d-none d-lg-block\" src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/choisir/images480.jpg");
        echo "\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30\">
                            <img src=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services-1.png");
        echo "\">
                            <h4 class=\"title\">UI/UX Design</h4>
                            <p>Many aspects of computing and technology and the term is more recognizable than before.</p>
                            <a href=\"services-details.html\"><i class=\"fal fa-angle-right\"></i> Read More</a>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30\">
                            <img src=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services-2.png");
        echo "\">
                            <h4 class=\"title\">Digital Product</h4>
                            <p>Many aspects of computing and technology and the term is more recognizable than before.</p>
                            <a href=\"services-details.html\"><i class=\"fal fa-angle-right\"></i> Read More</a>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"features-sub mt-30\">
                            <h5 class=\"title\">Subscribe Now</h5>
                            <p>Many aspects of computing and technology and the term is more recognizable than before.</p>
                            <form action=\"#\">
                                <div class=\"input-box\">
                                    <input type=\"text\" placeholder=\"Enter your email....\">
                                    <button class=\"main-btn\">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== FEATURES PART ENDS ======-->


        <!--====== CHOOSE PART START ======-->
        <div class=\"choose-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"section-title\">
                            <span>Qui sommes nous </span>
                            <h3 class=\"title\">POURQUOI NOUS CHOISIR</h3>
                        </div>
                        <div class=\"choose-cat\">
                            <div class=\"choose-cat-item mt-40 wow fadeInLeft\" data-wow-duration=\".5s\" data-wow-delay=\".4s\">
                                <h4 class=\"title\">L’Intégration de projets </h4>
                                <p>
                                    d’information et de communication à travers deux
                                    Hubs, CIS Liban et SMS/RT2i et à travers
                                    ses filiales locales (V.A.R), rassemblées
                                    au niveau du canal « valeur ».
                                </p>
                                <i class=\"fal fa-check\"></i>
                            </div>
                            <div class=\"choose-cat-item mt-40 wow fadeInLeft\" data-wow-duration=\"1s\" data-wow-delay=\".6s\">
                                <h4 class=\"title\">Distribution  </h4>
                                <p>
                                    Nous distribuons en volume du matériels et logiciels informatiques à travers
                                    Unidist, des plates-formes régionales,
                                </p>
                                <i class=\"fal fa-check\"></i>
                            </div>
                            <div class=\"choose-cat-item mt-40 wow fadeInLeft\" data-wow-duration=\"1.5s\" data-wow-delay=\".8s\">
                                <h4 class=\"title\">Information Technology</h4>
                                <p>Many aspects of computing and technology and the term is more recognizable than before.</p>
                                <i class=\"fal fa-check\"></i>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"choose-thumb-area mt-30\">
                            <div class=\"choose-thumb-1\">
                                <img width=\"370\"  height=\"344\"  class=\"img-thumbnail item-1\" src=\"";
        // line 156
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/choisir/pk_nous_choisir1.jpg");
        echo "\">
                            </div>
                            <div class=\"choose-thumb-2\">
                                <img width=\"416\"  height=\"372\" class=\"img-thumbnail item-2\" src=\"";
        // line 159
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/choisir/pk_nous_choisir2.jpg");
        echo "\">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"choose-video-thumb mt-115\">
                            <img src=\"";
        // line 167
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/choose-video-thumb.jpg");
        echo "\">
                            <a href=\"#\"><i class=\"fal fa-play\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== CHOOSE PART ENDS ======-->


        <!--====== PORTFOLIO 3 PART START ======-->
        <div class=\"portfolio-3-area pt-115 pb-120\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section-title text-center\">
<!--                            <span>Portfolio</span>-->
                            <h2 class=\"title\">Nous avons faire tellement de choses</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"";
        // line 192
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio-thumb-1.jpg");
        echo "\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>Digital Computing</span>
                                <a href=\"#\"><h4 class=\"title\">Aspects of computing and technology and the term</h4></a>
                                <p>
                                    Nous proposons à nos clients une large gamme de services
                                    de sécurité pour les aider à contrôler l’infrastructure, identifier
                                    les risques et se conformer aux différentes réglementations.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.2s\" data-wow-delay=\".4s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"";
        // line 208
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/nous_avons_faires_des_choses/nous_avons_faire_des_choses2.jpg");
        echo "\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>it consultant</span>
                                <a href=\"#\"><h4 class=\"title\">Today, the term Information Technology (IT)</h4></a>
                                <p>
                                    Le Groupe CIS présente à tous ses clients des approches
                                    cohérentes dans le domaine des technologies de
                                    L’Information et de la communication (TIC).
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.4s\" data-wow-delay=\".6s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"";
        // line 224
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/nous_avons_faires_des_choses/nous_avons_faire_des_choses3.jpg");
        echo "\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>design & development</span>
                                <a href=\"#\"><h4 class=\"title\">Has ballooned to encomp ass many aspects</h4></a>
                                <p>
                                    Chaque entreprise a des processus et des besoins
                                    uniques, quels qu’en soient le secteur d’activité
                                    et la taille. Néanmoins, chaque entreprise devra aussi se
                                    doter d’outils technologiques ...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.6s\" data-wow-delay=\".8s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"";
        // line 241
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/nous_avons_faires_des_choses/nous_avons_faire_des_choses4.jpg");
        echo "\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>ui/ux</span>
                                <a href=\"#\"><h4 class=\"title\">Aspects of computing and technology and the term</h4></a>
                                <p>
                                    Notre équipe hautement qualifiée est experte
                                    en matière de:
                                    <strong>gestion des services informatiques,  des entreprises, de la performance des applications et du cycle de vie des actifs ...</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.8s\" data-wow-delay=\"1s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"";
        // line 257
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/nous_avons_faires_des_choses/nous_avons_faire_des_choses5.jpg");
        echo "\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>game design</span>
                                <a href=\"case-details.html\"><h4 class=\"title\">Today, the term Informati on Technology (IT)</h4></a>
                                <p>
                                    CIS fournit des solutions soutenant les départements
                                    d’informatique gouvernementaux en vue de fournir des
                                    services multiplateformes destinés aux utilisateurs internes et
                                    aux citoyens externes ...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\"1.2s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"";
        // line 274
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/nous_avons_faires_des_choses/nous_avons_faire_des_choses6.jpg");
        echo "\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>interior design</span>
                                <a href=\"case-details.html\"><h4 class=\"title\">Has ballooned to encomp ass many aspects</h4></a>
                                <p>
                                    Services avant et après-vente : Outre la gamme complète des
                                    solutions clés et des produits, le Groupe CIS offre des services professionnels,
                                    y compris le déploiement et  l’interconnexion de réseaux multifournisseurs ...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== PORTFOLIO 3 PART ENDS ======-->


        <!--====== COUNTER PART START ======-->
        <div class=\"why-choose-area\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section-title text-center\">
                            <span>why choose us</span>
                            <h2 class=\"title\">We Are Very Different Form Others IT Solutions</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow slideInUp\" data-wow-duration=\".5s\" data-wow-delay=\"0s\">
                        <div class=\"single-choose text-center mt-30\">
                            <div class=\"icon-box\">
                                <span></span>
                                <i class=\"fal fa-laptop-code\"></i>
                            </div>
                            <h4 class=\"title\">Modify Whole System</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudan-tium totam rem aperiam eaque ipsa</p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow slideInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0s\">
                        <div class=\"single-choose text-center mt-30\">
                            <div class=\"icon-box\">
                                <span></span>
                                <i class=\"fal fa-server\"></i>
                            </div>
                            <h4 class=\"title\">Beneficial Strategies</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudan-tium totam rem aperiam eaque ipsa</p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow slideInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\">
                        <div class=\"single-choose text-center mt-30\">
                            <div class=\"icon-box\">
                                <span></span>
                                <i class=\"fal fa-tools\"></i>
                            </div>
                            <h4 class=\"title\">Automated Software</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudan-tium totam rem aperiam eaque ipsa</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"choose-dot\">
                <img src=\"";
        // line 338
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/choose-dot.png");
        echo "\" alt=\"\">
            </div>
            <div class=\"choose-shape\">
                <img src=\"";
        // line 341
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/choose-shape.png");
        echo "\" alt=\"\">
            </div>
        </div>
        <!--====== COUNTER PART ENDS ======-->


        <!--====== FAQ PART START ======-->
        <div class=\"faq-area faq-area-3 pt-115\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 order-2 order-lg-1 d-none d-sm-block\">
                        <div class=\"faq-thumb\">
                            <div class=\"faq-thumb-1 text-right\">
                                <img src=\"";
        // line 354
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/faq-thumb-1.jpg");
        echo "\">
                            </div>
                            <div class=\"faq-thumb-2\">
                                <img src=\"";
        // line 357
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/faq-thumb-2.jpg");
        echo "\">
                            </div>
                        </div> <!-- faq thumb -->
                    </div>
                    <div class=\"col-lg-6 order-1 order-lg-2\">
                        <div class=\"section-title text-left\">
                            <span>faq</span>
                            <h2 class=\"title\">Get Every Single Answers Here.</h2>
                        </div> <!-- section title -->
                        <div class=\"faq-accordion\">
                            <div class=\"accordion\" id=\"accordionExample\">
                                <div class=\"card\">
                                    <div class=\"card-header\" id=\"headingOne\">
                                        <a class=\"\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                            Today, the term Information Technology
                                        </a>
                                    </div>

                                    <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card\">
                                    <div class=\"card-header\" id=\"headingTwo\">
                                        <a class=\"collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                            Over the years, a wide range of developments
                                        </a>
                                    </div>
                                    <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card\">
                                    <div class=\"card-header\" id=\"headingThree\">
                                        <a class=\"collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                            As a result, most of us need to know
                                        </a>
                                    </div>
                                    <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card\">
                                    <div class=\"card-header\" id=\"headingFour\">
                                        <a class=\"collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
                                            Our knowledge of computers will help us
                                        </a>
                                    </div>
                                    <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingFour\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- faq accordion -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        <!--====== FAQ PART ENDS ======-->


        <!--====== GET IN TOUCH PART START ======-->
        <div class=\"get-in-touch-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"section-title text-left\">
                            <span>Get In Touch</span>
                            <h2 class=\"title\">Estimate For Your Projects.</h2>
                        </div> <!-- section title -->
                        <div class=\"form-area\">
                            <form action=\"#\">
                                <div class=\"input-box pt-45 wow fadeInLeft\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
                                    <input type=\"text\" placeholder=\"Enter your name\">
                                </div>
                                <div class=\"input-box mt-20 wow fadeInLeft\" data-wow-duration=\"1.2s\" data-wow-delay=\".4s\">
                                    <input type=\"email\" placeholder=\"Enter your email\">
                                </div>
                                <div class=\"input-box mt-20 wow fadeInLeft\" data-wow-duration=\"1.4s\" data-wow-delay=\".6s\">
                                    <textarea name=\"#\" id=\"#\" cols=\"30\" rows=\"10\" placeholder=\"Enter your message\"></textarea>
                                </div>
                                <div class=\"input-box mt-20\">
                                    <button class=\"main-btn wow fadeInUp\" data-wow-duration=\"1.6s\" data-wow-delay=\".2s\" type=\"submit\">Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"get-map d-none d-lg-block\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993207.564767118!2d-77.9807899414373!3d42.92219345357043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1569310771254!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== GET IN TOUCH PART ENDS ======-->
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/cis-web-site/themes/cis/pages/accueil.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 357,  442 => 354,  426 => 341,  420 => 338,  353 => 274,  333 => 257,  314 => 241,  294 => 224,  275 => 208,  256 => 192,  228 => 167,  217 => 159,  211 => 156,  146 => 94,  135 => 86,  125 => 79,  120 => 77,  54 => 14,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>
    <div class=\"body\">
        <!--====== BANNER PART START ======-->
        <div class=\"banner-active\">
            <div class=\"single-banner bg_cover\" style=\"background-image: url(themes/cis/assets/images-cis/slides/slide1.jpg);\">
                <div class=\"banner-overlay\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-9\">
                                <div class=\"banner-content\">
                                    <span data-animation=\"fadeInLeft\" data-delay=\"0.5s\">En attente slide 1</span>
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\"0.9s\" class=\"title\">En attente slide 1<br>En attente suite slide 1</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\"1.3s\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremda tium totam rem aperiam eaque ipsa quae ab illo inventore veritatis </p>
                                    <a data-animation=\"fadeInUp\" data-delay=\"1.6s\" class=\"main-btn text-muted\" href=\"{{ 'nos-services'|page }}\">Nos Services <i class=\"fal fa-long-arrow-right\"></i></a>
                                </div> <!-- banner content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div>
            </div>

            <div class=\"single-banner bg_cover\" style=\"background-image: url(themes/cis/assets/images-cis/slides/slide2.jpg);\">
                <div class=\"banner-overlay\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-9\">
                                <div class=\"banner-content\">
                                    <span data-animation=\"fadeInLeft\" data-delay=\"0.5s\">En attente slide 2</span>
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\"0.9s\" class=\"title\">En attente slide 2<br>En attente suite slide 2</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\"1.3s\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremda tium totam rem aperiam eaque ipsa quae ab illo inventore veritatis </p>
                                    <a data-animation=\"fadeInUp\" data-delay=\"1.6s\" class=\"main-btn text-muted\" href=\"#\">Nos Services <i class=\"fal fa-long-arrow-right\"></i></a>
                                </div> <!-- banner content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div>
            </div>
            <div class=\"single-banner bg_cover\" style=\"background-image: url(themes/cis/assets/images-cis/slides/slide3.jpg);\">
                <div class=\"banner-overlay\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-9\">
                                <div class=\"banner-content\">
                                    <span data-animation=\"fadeInLeft\" data-delay=\"0.5s\">En attente slide 3</span>
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\"0.9s\" class=\"title\">En attente slide 3<br>En attente suite slide 3</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\"1.3s\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremda tium totam rem aperiam eaque ipsa quae ab illo inventore veritatis </p>
                                    <a data-animation=\"fadeInUp\" data-delay=\"1.6s\" class=\"main-btn text-muted\" href=\"#\">Nos Services <i class=\"fal fa-long-arrow-right\"></i></a>
                                </div> <!-- banner content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div>
            </div>
        </div>
        <!--====== BANNER PART ENDS ======-->

        <!--====== FEATURES PART START ======-->
        <div class=\"features-area pt-120 pb-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"features-item\">
<!--                            <strong>CIS</strong>-->
<!--                            <h2 class=\"title\">POURQUOI NOUS CHOISIR</h2>-->
<!--                            <span>Notre connaissance de l'informatique vous aidera</span>-->
                            <p>
                                CIS (Computer Information Systems) est un acteur
                                majeur de la technologie de l’information et de la communication en Europe, en Afrique et au Proche-Orient.
                                CIS possède une expertise de plus de 30 ans dans la distribution et l’intégration de solutions, produits
                                et services technologiques.
                                La société est organisée en unités opérationnelles qui sont bien compétentes au sein de leurs segments de
                                Marchés respectifs. La compétence commerciale et technique de nos équipes, ainsi que leur faculté d’adaptation
                                Aux besoins et aux attentes des différents marchés ont profondément contribué au développement du Groupe
                            </p>
                            <ul>
                                <li><a class=\"main-btn wow fadeInUp\" href=\"#\" data-wow-duration=\".5s\" data-wow-delay=\".4s\">En savoir plus sur nous</a></li>
<!--                                <li><a class=\"main-btn main-btn-2 wow fadeInUp\" href=\"{{ 'presentation'|page }}\" data-wow-duration=\"1s\" data-wow-delay=\".6s\"> <i class=\"fal fa-video\"></i>Learn More</a></li>-->
                            </ul>
                            <img class=\"d-none d-lg-block\" src=\"{{ 'assets/images-cis/choisir/images480.jpg' |theme }}\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30\">
                            <img src=\"{{ 'assets/images/services-1.png' |theme }}\">
                            <h4 class=\"title\">UI/UX Design</h4>
                            <p>Many aspects of computing and technology and the term is more recognizable than before.</p>
                            <a href=\"services-details.html\"><i class=\"fal fa-angle-right\"></i> Read More</a>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30\">
                            <img src=\"{{ 'assets/images/services-2.png' |theme }}\">
                            <h4 class=\"title\">Digital Product</h4>
                            <p>Many aspects of computing and technology and the term is more recognizable than before.</p>
                            <a href=\"services-details.html\"><i class=\"fal fa-angle-right\"></i> Read More</a>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"features-sub mt-30\">
                            <h5 class=\"title\">Subscribe Now</h5>
                            <p>Many aspects of computing and technology and the term is more recognizable than before.</p>
                            <form action=\"#\">
                                <div class=\"input-box\">
                                    <input type=\"text\" placeholder=\"Enter your email....\">
                                    <button class=\"main-btn\">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== FEATURES PART ENDS ======-->


        <!--====== CHOOSE PART START ======-->
        <div class=\"choose-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"section-title\">
                            <span>Qui sommes nous </span>
                            <h3 class=\"title\">POURQUOI NOUS CHOISIR</h3>
                        </div>
                        <div class=\"choose-cat\">
                            <div class=\"choose-cat-item mt-40 wow fadeInLeft\" data-wow-duration=\".5s\" data-wow-delay=\".4s\">
                                <h4 class=\"title\">L’Intégration de projets </h4>
                                <p>
                                    d’information et de communication à travers deux
                                    Hubs, CIS Liban et SMS/RT2i et à travers
                                    ses filiales locales (V.A.R), rassemblées
                                    au niveau du canal « valeur ».
                                </p>
                                <i class=\"fal fa-check\"></i>
                            </div>
                            <div class=\"choose-cat-item mt-40 wow fadeInLeft\" data-wow-duration=\"1s\" data-wow-delay=\".6s\">
                                <h4 class=\"title\">Distribution  </h4>
                                <p>
                                    Nous distribuons en volume du matériels et logiciels informatiques à travers
                                    Unidist, des plates-formes régionales,
                                </p>
                                <i class=\"fal fa-check\"></i>
                            </div>
                            <div class=\"choose-cat-item mt-40 wow fadeInLeft\" data-wow-duration=\"1.5s\" data-wow-delay=\".8s\">
                                <h4 class=\"title\">Information Technology</h4>
                                <p>Many aspects of computing and technology and the term is more recognizable than before.</p>
                                <i class=\"fal fa-check\"></i>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"choose-thumb-area mt-30\">
                            <div class=\"choose-thumb-1\">
                                <img width=\"370\"  height=\"344\"  class=\"img-thumbnail item-1\" src=\"{{ 'assets/images-cis/choisir/pk_nous_choisir1.jpg' |theme }}\">
                            </div>
                            <div class=\"choose-thumb-2\">
                                <img width=\"416\"  height=\"372\" class=\"img-thumbnail item-2\" src=\"{{ 'assets/images-cis/choisir/pk_nous_choisir2.jpg' |theme }}\">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"choose-video-thumb mt-115\">
                            <img src=\"{{ 'assets/images/choose-video-thumb.jpg' |theme }}\">
                            <a href=\"#\"><i class=\"fal fa-play\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== CHOOSE PART ENDS ======-->


        <!--====== PORTFOLIO 3 PART START ======-->
        <div class=\"portfolio-3-area pt-115 pb-120\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section-title text-center\">
<!--                            <span>Portfolio</span>-->
                            <h2 class=\"title\">Nous avons faire tellement de choses</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"{{ 'assets/images/portfolio-thumb-1.jpg' |theme }}\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>Digital Computing</span>
                                <a href=\"#\"><h4 class=\"title\">Aspects of computing and technology and the term</h4></a>
                                <p>
                                    Nous proposons à nos clients une large gamme de services
                                    de sécurité pour les aider à contrôler l’infrastructure, identifier
                                    les risques et se conformer aux différentes réglementations.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.2s\" data-wow-delay=\".4s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"{{ 'assets/images-cis/nous_avons_faires_des_choses/nous_avons_faire_des_choses2.jpg' |theme }}\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>it consultant</span>
                                <a href=\"#\"><h4 class=\"title\">Today, the term Information Technology (IT)</h4></a>
                                <p>
                                    Le Groupe CIS présente à tous ses clients des approches
                                    cohérentes dans le domaine des technologies de
                                    L’Information et de la communication (TIC).
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.4s\" data-wow-delay=\".6s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"{{ 'assets/images-cis/nous_avons_faires_des_choses/nous_avons_faire_des_choses3.jpg' |theme }}\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>design & development</span>
                                <a href=\"#\"><h4 class=\"title\">Has ballooned to encomp ass many aspects</h4></a>
                                <p>
                                    Chaque entreprise a des processus et des besoins
                                    uniques, quels qu’en soient le secteur d’activité
                                    et la taille. Néanmoins, chaque entreprise devra aussi se
                                    doter d’outils technologiques ...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.6s\" data-wow-delay=\".8s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"{{ 'assets/images-cis/nous_avons_faires_des_choses/nous_avons_faire_des_choses4.jpg' |theme }}\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>ui/ux</span>
                                <a href=\"#\"><h4 class=\"title\">Aspects of computing and technology and the term</h4></a>
                                <p>
                                    Notre équipe hautement qualifiée est experte
                                    en matière de:
                                    <strong>gestion des services informatiques,  des entreprises, de la performance des applications et du cycle de vie des actifs ...</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.8s\" data-wow-delay=\"1s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"{{ 'assets/images-cis/nous_avons_faires_des_choses/nous_avons_faire_des_choses5.jpg' |theme }}\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>game design</span>
                                <a href=\"case-details.html\"><h4 class=\"title\">Today, the term Informati on Technology (IT)</h4></a>
                                <p>
                                    CIS fournit des solutions soutenant les départements
                                    d’informatique gouvernementaux en vue de fournir des
                                    services multiplateformes destinés aux utilisateurs internes et
                                    aux citoyens externes ...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\"1.2s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"{{ 'assets/images-cis/nous_avons_faires_des_choses/nous_avons_faire_des_choses6.jpg' |theme }}\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>interior design</span>
                                <a href=\"case-details.html\"><h4 class=\"title\">Has ballooned to encomp ass many aspects</h4></a>
                                <p>
                                    Services avant et après-vente : Outre la gamme complète des
                                    solutions clés et des produits, le Groupe CIS offre des services professionnels,
                                    y compris le déploiement et  l’interconnexion de réseaux multifournisseurs ...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== PORTFOLIO 3 PART ENDS ======-->


        <!--====== COUNTER PART START ======-->
        <div class=\"why-choose-area\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section-title text-center\">
                            <span>why choose us</span>
                            <h2 class=\"title\">We Are Very Different Form Others IT Solutions</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow slideInUp\" data-wow-duration=\".5s\" data-wow-delay=\"0s\">
                        <div class=\"single-choose text-center mt-30\">
                            <div class=\"icon-box\">
                                <span></span>
                                <i class=\"fal fa-laptop-code\"></i>
                            </div>
                            <h4 class=\"title\">Modify Whole System</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudan-tium totam rem aperiam eaque ipsa</p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow slideInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0s\">
                        <div class=\"single-choose text-center mt-30\">
                            <div class=\"icon-box\">
                                <span></span>
                                <i class=\"fal fa-server\"></i>
                            </div>
                            <h4 class=\"title\">Beneficial Strategies</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudan-tium totam rem aperiam eaque ipsa</p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow slideInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\">
                        <div class=\"single-choose text-center mt-30\">
                            <div class=\"icon-box\">
                                <span></span>
                                <i class=\"fal fa-tools\"></i>
                            </div>
                            <h4 class=\"title\">Automated Software</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudan-tium totam rem aperiam eaque ipsa</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"choose-dot\">
                <img src=\"{{ 'assets/images/choose-dot.png'|theme }}\" alt=\"\">
            </div>
            <div class=\"choose-shape\">
                <img src=\"{{ 'assets/images/choose-shape.png'|theme }}\" alt=\"\">
            </div>
        </div>
        <!--====== COUNTER PART ENDS ======-->


        <!--====== FAQ PART START ======-->
        <div class=\"faq-area faq-area-3 pt-115\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 order-2 order-lg-1 d-none d-sm-block\">
                        <div class=\"faq-thumb\">
                            <div class=\"faq-thumb-1 text-right\">
                                <img src=\"{{ 'assets/images/faq-thumb-1.jpg' |theme }}\">
                            </div>
                            <div class=\"faq-thumb-2\">
                                <img src=\"{{ 'assets/images/faq-thumb-2.jpg' |theme }}\">
                            </div>
                        </div> <!-- faq thumb -->
                    </div>
                    <div class=\"col-lg-6 order-1 order-lg-2\">
                        <div class=\"section-title text-left\">
                            <span>faq</span>
                            <h2 class=\"title\">Get Every Single Answers Here.</h2>
                        </div> <!-- section title -->
                        <div class=\"faq-accordion\">
                            <div class=\"accordion\" id=\"accordionExample\">
                                <div class=\"card\">
                                    <div class=\"card-header\" id=\"headingOne\">
                                        <a class=\"\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                            Today, the term Information Technology
                                        </a>
                                    </div>

                                    <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card\">
                                    <div class=\"card-header\" id=\"headingTwo\">
                                        <a class=\"collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                            Over the years, a wide range of developments
                                        </a>
                                    </div>
                                    <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card\">
                                    <div class=\"card-header\" id=\"headingThree\">
                                        <a class=\"collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                            As a result, most of us need to know
                                        </a>
                                    </div>
                                    <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card\">
                                    <div class=\"card-header\" id=\"headingFour\">
                                        <a class=\"collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
                                            Our knowledge of computers will help us
                                        </a>
                                    </div>
                                    <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingFour\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- faq accordion -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        <!--====== FAQ PART ENDS ======-->


        <!--====== GET IN TOUCH PART START ======-->
        <div class=\"get-in-touch-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"section-title text-left\">
                            <span>Get In Touch</span>
                            <h2 class=\"title\">Estimate For Your Projects.</h2>
                        </div> <!-- section title -->
                        <div class=\"form-area\">
                            <form action=\"#\">
                                <div class=\"input-box pt-45 wow fadeInLeft\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
                                    <input type=\"text\" placeholder=\"Enter your name\">
                                </div>
                                <div class=\"input-box mt-20 wow fadeInLeft\" data-wow-duration=\"1.2s\" data-wow-delay=\".4s\">
                                    <input type=\"email\" placeholder=\"Enter your email\">
                                </div>
                                <div class=\"input-box mt-20 wow fadeInLeft\" data-wow-duration=\"1.4s\" data-wow-delay=\".6s\">
                                    <textarea name=\"#\" id=\"#\" cols=\"30\" rows=\"10\" placeholder=\"Enter your message\"></textarea>
                                </div>
                                <div class=\"input-box mt-20\">
                                    <button class=\"main-btn wow fadeInUp\" data-wow-duration=\"1.6s\" data-wow-delay=\".2s\" type=\"submit\">Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"get-map d-none d-lg-block\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993207.564767118!2d-77.9807899414373!3d42.92219345357043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1569310771254!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== GET IN TOUCH PART ENDS ======-->
    </div>
</section>", "/var/www/cis-web-site/themes/cis/pages/accueil.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 14, "theme" => 79);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page', 'theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
