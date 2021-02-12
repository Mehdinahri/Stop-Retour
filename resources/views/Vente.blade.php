<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">



        <title>Stop-Retour</title>



        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500&display=swap" rel="stylesheet">

        <!-- Styles -->

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">

        <style>

            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}

        </style>

    </head>

    <body class="antialiased welcome">



        <nav class="navbar navbar-expand-lg navbar-light scrolledTheme fixed-top" id="home">

            <div class="container">

                <a class="navbar-brand  main-color" href="{{ route('welcome') }}"><img src="{{ asset('images/logo.png') }}" width="40px" /></a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">

                       <li class="nav-item active">

                           <a class="nav-link" href="{{ route('welcome') }}">Page Accueil</a>

                       </li>

                    </ul>

                    @if (Route::has('login'))

                    @auth

                    <ul class="navbar-nav ml-auto list-unstyled">

                        <li class="nav-item list-unstyled ">

                            <a href="{{ route('utilisateur.index') }}" class="nav-link text-light">Espace Client</a>

                        </li>

                        @else

                        <li class="nav-item list-unstyled " >

                            <a href="{{ route('register') }}" class="nav-link text-light">S'inscrire</a>

                        </li>

                        <li class="nav-item list-unstyled " >

                            <a href="{{ route('login') }}" class="nav-link text-light">Se connecter</a>

                        </li>

                    </ul>

                    @endauth

                    @endif

                    <span style="margin-right: 5px"><a href="https://www.facebook.com/StopRetour"><i class="fab fa-facebook-square"></i></a></span>

                    <span style="margin-right: 5px"><a href="https://www.youtube.com/channel/UCjuBfTNmCpwD0XwFRHs6eFA"><i class="fab fa-youtube-square"></i></a></span>

                    <span style="margin-right: 5px"><a href="https://www.instagram.com/stop_retour_"><i class="fab fa-instagram-square"></i></a></span>

                </div>

            </div>

        </nav>

        <div class="container-fluid col-md-10" style="background-color: #e5e5e5;border-radius: 9px;margin-top: 78px;padding: 20px;">    

            <h3 class="text-center">Conditions Générales De Vente</h3><br>

            <div class="" style=" padding: 15px; ">
                <p><strong>Conditions</strong> <strong>g&eacute;n&eacute;rales</strong> <strong>de</strong> <strong>vente</strong></p>
                <p>Les pr&eacute;sentes conditions g&eacute;n&eacute;rales de vente s'appliquent &agrave; toutes les ventes conclues sur le site Internet stop-retour.com sous r&eacute;serve des conditions particuli&egrave;res indiqu&eacute;es dans la pr&eacute;sentation des produits.</p>
                <p><strong><em>ARTICLE</em></strong> <strong><em>1</em></strong> <strong><em>:</em></strong> <strong><em>Mentions</em></strong> <strong><em>obligatoires</em></strong></p>
                <p>Le site Internet stop-retour.com est un service de :</p>
                <ul>
                <li>Directeur G&eacute;n&eacute;ral&nbsp;du site : M. Mrabeh Mounir</li>
                <li>Identifiant Commun de l'entreprise (ICE)&nbsp;: 002473935000089</li>
                <li>Identifiant fiscal&nbsp;: 45641643</li>
                <li>Taxe professionnelle&nbsp;: 63501521</li>
                <li>E-mail&nbsp;: contact@stop-retour.com</li>
                <li>T&eacute;l&eacute;phone&nbsp;: 0707705979</li>
                </ul>
                <p><strong><em>ARTICLE</em></strong> <strong><em>2&nbsp;: </em></strong><strong><em>Caract&eacute;ristiques</em></strong> <strong><em>essentielles</em></strong> <strong><em>des</em></strong> <strong><em>services</em></strong> <strong><em>vendus</em></strong></p>
                <p>Le site Internet stop-retour.com vend&nbsp;:</p>
                <ul>
                <li>Service d&rsquo;acc&egrave;s &agrave; une centrale de risque</li>
                </ul>
                <p>Le client d&eacute;clare avoir pris connaissance et avoir accept&eacute; les conditions g&eacute;n&eacute;rales de vente ant&eacute;rieurement &agrave; la passation de son achat. La validation de votre achat vaut donc pour acceptation des conditions g&eacute;n&eacute;rales de vente.</p>
                <p><strong><em>ARTICLE</em></strong> <strong><em>3:</em></strong> <strong><em>Prix</em></strong></p>
                <p>Les prix de nos produits sont indiqu&eacute;s en Dirham Marocain toutes taxes comprises (TTC).</p>
                <p><strong><em>ARTICLE</em></strong> <strong><em>4:</em></strong> <strong><em>D&eacute;lai</em></strong> <strong><em>de</em></strong> <strong><em>disponibilit&eacute;</em></strong> <strong><em>des</em></strong> <strong><em>services</em></strong></p>
                <p>Les produits disponibles apparaissent sur notre site accompagn&eacute;s de la mention &laquo; acheter &raquo;. Afin de r&eacute;pondre au mieux aux attentes de notre client&egrave;le, la disponibilit&eacute; de nos services est r&eacute;guli&egrave;rement mise &agrave; jour sur notre site internet.</p>
                <p>Si vous avez achet&eacute; un package indisponible post&eacute;rieurement &agrave; la validation de votre commande, vous en serez imm&eacute;diatement inform&eacute;. Nous proc&eacute;derons &agrave; l'annulation de votre achat. Si la somme avait d&eacute;j&agrave; &eacute;t&eacute; d&eacute;bit&eacute;e, vous serez imm&eacute;diatement rembours&eacute;.</p>
                <p><strong><em>ARTICLE</em></strong> <strong><em>5:</em></strong> <strong><em>Achat</em></strong></p>
                <p>Vous avez la possibilit&eacute; d&rsquo;acheter nos services directement sur notre site internet 7jours/7 et 24 heures/24.</p>
                <p>Pour effectuer un achat sur notre site, choisissez votre package dans la rubrique &ldquo;Nos offres &rdquo;et Validez le.</p>
                <ul>
                <li>Si vous poss&eacute;dez d&eacute;j&agrave; un compte client sur notre site, veuillez vous identifier</li>
                <li>Si vous ne poss&eacute;dez pas de compte client sur notre site, veuillez en cr&eacute;er un</li>
                <li>Cochez la case &laquo; Acheter &raquo; pour validation de celle-ci.</li>
                <li>Cochez la case &laquo; paiement &raquo; pour honorer votre achat en</li>
                <li>Choisissez votre mode de paiement et cochez la case &laquo; acceptation des conditions g&eacute;n&eacute;rales de vente&nbsp;&raquo;</li>
                <li>Validez votre paiement</li>
                </ul>
                <p>Vous recevrez un e-mail de confirmation d&rsquo;achat sur l'adresse mail que vous avez indiqu&eacute;e lors de la cr&eacute;ation de votre compte client.</p>
                <p>V&eacute;rifiez les d&eacute;tails et le montant total de votre commande. Rectifiez au pr&eacute;alable les &eacute;ventuelles erreurs avant toute acceptation.</p>
                <p>Le transfert de propri&eacute;t&eacute; du package n'aura lieu qu'au paiement complet de votre achat.</p>
                <p><strong><em>ARTICLE</em></strong> <strong><em>6:</em></strong> <strong><em>Modalit&eacute;s</em></strong> <strong><em>de</em></strong> <strong><em>paiement</em></strong></p>
                <p>Un seul mode de paiement est accept&eacute; : l&rsquo;utilisateur doit payer par carte bancaire.</p>
                <p>Nous acceptons les paiements par carte : VISA, MASTERCARD, CMI lors de votre paiement en ligne, indiquez le num&eacute;ro de votre carte bancaire, sa date d'expiration et les 3 chiffres inscrits au dos de celle-ci. Le paiement en ligne est s&eacute;curis&eacute;.</p>
                <p><strong><em>ARTICLE</em></strong> <strong><em>7:</em></strong> <strong><em>Droit</em></strong> <strong><em>de</em></strong> <strong><em>r&eacute;tractation</em></strong></p>
                <p>Vous disposez d'un droit de r&eacute;tractation &agrave; exercer dans un d&eacute;lai de sept jours ouvrables &agrave; compter de la date d&rsquo;achat de votre package d&egrave;s que ce dernier n&rsquo;est pas consomm&eacute; partiellement.</p>
                <p><strong><em>ARTICLE</em></strong> <strong><em>8:</em></strong> <strong><em>Conditions</em></strong> <strong><em>et</em></strong> <strong><em>d&eacute;lais</em></strong> <strong><em>de</em></strong> <strong><em>remboursement</em></strong></p>
                <p>Le remboursement du package est int&eacute;gral. Il s'effectue par virement dans les plus brefs d&eacute;lais et au plus tard dans les 30 jours &agrave; compter de la date d'exercice du droit de r&eacute;tractation.</p>
                <p><strong><em>ARTICLE</em></strong> <strong><em>9:</em></strong> <strong><em>R&eacute;clamations</em></strong> <strong><em>du</em></strong> <strong><em>consommateur</em></strong></p>
                <p>Toute r&eacute;clamation du consommateur est &agrave; adresser au service support depuis l&rsquo;espace personnel.</p>
                <p><strong><em>ARTICLE</em></strong> <strong><em>10:</em></strong> <strong><em>Propri&eacute;t&eacute;</em></strong> <strong><em>intellectuelle</em></strong></p>
                <p>Tous les commentaires, images, illustrations de notre site nous sont exclusivement r&eacute;serv&eacute;s. Au titre de la propri&eacute;t&eacute; intellectuelle et du droit d'auteur, toute utilisation est prohib&eacute;e sauf &agrave; usage priv&eacute;.</p>
                <p>Sans autorisation pr&eacute;alable, toute reproduction de notre site, qu'elle soit partielle ou totale, est strictement interdite.</p>
                <p><strong><em>ARTICLE</em></strong> <strong><em>11:</em></strong> <strong><em>Responsabilit&eacute;</em></strong></p>
                <p>Nous engageons notre responsabilit&eacute; contractuelle de plein droit &agrave; votre &eacute;gard en cas d'inex&eacute;cution ou de mauvaise ex&eacute;cution du contrat conclu.</p>
                <p>Toutefois, notre responsabilit&eacute; contractuelle ne peut &ecirc;tre engag&eacute;e dans les situations mentionn&eacute;es ci- dessous&nbsp;:</p>
                <ul>
                <li>cas de la force majeure ;</li>
                <li>fait &eacute;tranger qui ne peut nous &ecirc;tre imputable ;</li>
                </ul>
                <p>&nbsp;</p>
                <p><strong><em>ARTICLE</em></strong> <strong><em>12:</em></strong> <strong><em>Donn&eacute;es</em></strong> <strong><em>&agrave;</em></strong> <strong><em>caract&egrave;re</em></strong> <strong><em>personnel</em></strong></p>
                <ul>
                <li>Les offres commerciales du site seront adress&eacute;es au client par mail si aucune opposition n'a &eacute;t&eacute; &eacute;mise. Le client peut &agrave; tout moment s'opposer sans frais aux offres commerciales en se connectant sur son espace</li>
                <li>Les informations relatives au client pourront &ecirc;tre transmises &agrave; des partenaires commerciaux du site, sauf s'il y fait</li>
                </ul>
                <p>&nbsp;</p>
                <p>Le site assure au client une collecte et un traitement d'informations personnelles dans le respect de la vie priv&eacute;e conform&eacute;ment &agrave; la loi n&deg;09-08 relative &agrave; l'informatique, aux fichiers et aux libert&eacute;s.</p>
                <p>Le client dispose d'un droit d'acc&egrave;s, de rectification, de suppression et d'opposition de ses donn&eacute;es personnelles. Le client exerce ce droit via :</p>
                <ul>
                <li>Son espace personnel</li>
                </ul>
                <p>&nbsp;</p>
                <p><strong><em>ARTICLE 13 : Droit applicable et juridiction comp&eacute;tente&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </em></strong></p>
                <p>Les pr&eacute;sentes conditions g&eacute;n&eacute;rales sont r&eacute;gies et interpr&eacute;t&eacute;es conform&eacute;ment au droit du Territoire.</p>
                <p>Tout litige relatif aux pr&eacute;sentes conditions g&eacute;n&eacute;rales est soumis &agrave; la comp&eacute;tence exclusive des tribunaux comp&eacute;tents du Territoire.</p>
            </div>

          </div>



        <footer class="text-light">

            <div class="container">

                <div class="row d-flex align-items-center">

                    

                    <div class="col-sm-3 pt-3">

                        <h5>Liens rapides</h5>

                        <ul class="">

                           <li class="">

                               <a class="link-footer" href="#home">Home</a>

                           </li>

                           <li class="">

                                <a class="link-footer" href="#apropos">A PROPOS</a>

                            </li>

                            <li class="">

                                <a class="link-footer" href="#tarification">Nos Offres</a>

                            </li>

                            <li class="">

                                <a class="link-footer" href="#contact">Contactez nous</a>

                            </li>

                        </ul>

                    </div>

                    <div class="col-sm-3 pt-4">

                        <h5>Mentions légales</h5>

                        <ul>

                            <li>

                                <a href="{{ route('Conditions-générales') }}" class="link-footer">Conditions générales</a>

                            </li>

                            <li>

                                <a href="{{ route('Conditions-générales') }}" class="link-footer">Mentions légales </a>

                            </li>

                            <li>

                                <a href="{{ route('Conditions-générales') }}" class="link-footer">sécurité et confidentialité</a>

                            </li>

                            <li>

                                <a href="{{ route('Conditions-Vente') }}" class="link-footer">Conditions générales de vente</a>

                            </li>

                        </ul>

                    </div>

                    <div class="col-sm-6 d-flex" style=" margin-top: -55px; ">

                        <div class="col-sm-6 text-center">

                            

                            <h5 class="m-2">Méthode de paiement</h5>

                                <span><img src="http://www.stop-retour.com/images/visa.png" alt height="30px"></span>

                                <span><img src="http://www.stop-retour.com/images/cmi.png" alt height="30px"></i></a></span>

                                <span><img src="http://www.stop-retour.com/images/masterCard.png" alt height="30px"></i></a></span>

                            

                        </div>

                        <div class="col-sm-6 text-center">

                            <h5 class="m-2">Réseaux sociaux</h5>

                                <span style="margin-right: 3px;"><a href="{{ $params->facebook }}"><i class="fab fa-facebook-square"></i></a></span>

                                <span style="margin-right: 3px;"><a href="{{ $params->youtube }}"><i class="fab fa-youtube-square"></i></a></span>

                                <span style="margin-right: 3px;"><a href="{{ $params->instagram }}"><i class="fab fa-instagram-square"></i></a></span>

                        </div>

                        

                    </div>

                </div>

            </div>

        </footer>

        <footer style="background-color: #dabb59; height:57px">

            <div class="container">

                <div class="row d-flex mt-2">

                    <div class="col-sm-4" style="display: flex">

                    </div>

                    <div class="col-sm-4" style="display: flex">

                        <p  style="text-align:center">© Tous droits réservés 2021</p>

                    </div>

                    <div class="col-sm-4">

                    </div>

                </div>

            </div>

        </footer>



        <a href="#" class="to-top"><i class="fas fa-chevron-up"></i></a>

        <script src="{{ asset('js/app.js') }}"></script>

        <script src="{{ asset('js/smooth-scroll.js') }}"></script>

        <script src="{{ asset('js/nice-scroll.js') }}"></script>

        <script>

            /* start use smooth scroll links */

            var scroll = new SmoothScroll('a[href*="#"]');

            /* start use nice scroll */

            $("body").niceScroll({

                cursoropacitymin:0.1,

                cursorcolor:'#debe5b',

                cursorwidth:'12px',

                cursorborder:'none',

                cursorborderradius:4,

                autohidemode:"scroll",

                zindex:"auto" | [9999]

            });





        </script>

    </body>

</html>

