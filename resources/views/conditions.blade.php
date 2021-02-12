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

            <h3 class="text-center">Conditions Générales D'utilisation</h3><br>

            <ul>

                <li><a href="#Mentions" style=" color: coral; ">Mentions légales</a></li>

                <li><a href="#Sécurité" style=" color: coral; ">Sécurité et confidentialité</a></li>

            </ul>

            <div class="" style=" padding: 15px; ">

                <p>

                    <strong>ARTICLE 1 : Objet</strong>

                    <strong></strong>

                </p>

                <p>

                    Les présentes « conditions générales d’utilisation » ont pour objet

                    l’encadrement juridique des modalités de mise à disposition des services du

                    site <a href="http://www.stop-retour.com/">stop-retour.com</a> et leur

                    utilisation par « l’Utilisateur ».

                </p>

                <p>

                    Les conditions générales d’utilisation doivent être acceptées par tout

                    utilisateur souhaitant accéder au site. Elles constituent le contrat entre

                    le site et l’Utilisateur. L’accès au site par l’Utilisateur signifie son

                    acceptation des présentes conditions générales d’utilisation.

                </p>

                <p>

                    Eventuellement,

                </p>

                <ul>

                <li>

                    · En cas de non-acceptation des conditions générales d’utilisation

                    stipulées dans le présent contrat, l’Utilisateur se doit de renoncer à

                    l’accès des services proposés par le site.

                </li>

                <li>

                    · Vous ne pouvez pas vous inscrire sur notre site si vous avez moins de 18

                    ans (en utilisant notre site ou en acceptant les présentes conditions

                    générales, vous nous garantissez et déclarez que vous avez au moins 18

                    ans).

                </li>

                <li>

                    · Vous déclarez et garantissez que toutes les informations fournies dans le

                    formulaire d'inscription sont complètes et exactes.

                </li>

                <li>

                    · Votre espace client doit être utilisé exclusivement par vous et vous ne

                    devez en aucun cas transférer votre compte à un tiers. Si vous autorisez un

                    tiers à gérer votre compte en votre nom, cela se fera à vos propres risques

                    et périls.

                </li>

                <li>

                    · Nous pouvons suspendre ou annuler votre compte, et / ou modifier les

                    détails de votre compte, à tout moment, à notre seule discrétion et sans

                    préavis ni explication, à condition que si nous annulons des produits ou

                    des services que vous avez déjà payés mais que vous n’avez pas encore

                    reçus, et qu’à condition que vous n'ayez pas enfreint les présentes

                    conditions générales, nous nous engageons à vous rembourser le montant que

                    vous avez payé.

                </li>

                <li>

                    · Vous pouvez, à tout moment, vous désinscrire et supprimer votre compte

                    sur notre site, en nous contactant aux coordonnées indiquées à la section 6

                    ci-dessous.

                </li>

                <li>

                    · Vous pouvez vous inscrire à un compte sur notre site en remplissant et en

                    soumettant le formulaire d’inscription disponible sur notre site.

                </li>

                    <li>

                        <a href="http://www.stop-retour.com/">stop-retour.com</a>

                        se réserve le droit de modifier unilatéralement et à tout moment le

                        contenu des présentes conditions générales d’utilisation.

                    </li>

                </ul>

                <p id='Mentions'>

                    <strong>ARTICLE 2 : Mentions légales </strong>

                </p>

                <p>

                    Le Directeur de la publication est Monsieur Mrabeh Mounir.

                </p>

                <ul>

                    <li>

                        Auto entrepreneur

                    </li>

                <li>

                    Directeur Général du site : M. Mrabeh Mounir

                </li>

                <li>

                    Identifiant Commun de l'entreprise (ICE) : 002473935000089

                </li>

                <li>

                    Identifiant fiscal : 45641643

                </li>

                <li>

                    Taxe professionnelle : 63501521

                </li>

                    <li>

                        E-mail : contact@stop-retour.com

                    </li>

                    <li>

                        Téléphone : 0707705979

                    </li>

                </ul>

                <p>

                L’Hébergeur du site    <a href="http://www.stop-retour.com/">stop-retour.com</a> est la société

                    NINDO SARL au capital de 100.000 Dhs dont le siège social est situé au

                    Adresse du siège : 66, Av. Mohamed V, 4ème étage, n°25, Tanger – Maroc

                </p>

                <p>

                    <strong>ARTICLE 3 : Définitions</strong>

                </p>

                <p>

                    La présente clause a pour objet de définir les différents termes essentiels

                    du contrat :

                </p>

                <ul>

                    <li>

                        <strong>Utilisateur : </strong>

                        ce terme désigne toute personne qui utilise le site ou l’un des

                        services proposés par le site.

                    </li>

                    <li>

                        <strong>Contenu Utilisateur :</strong>

                        ce sont les données transmises par l’Utilisateur au sein du site.

                    </li>

                    <li>

                        <strong>Membre : </strong>

                        l’Utilisateur devient membre lorsqu’il est identifié sur le site.

                    </li>

                    <li>

                        <strong>Identifiant et mot de passe :</strong>

                        c’est l’ensemble des informations nécessaires à l’identification d’un

                        utilisateur sur le site. Le mot de passe est confidentiel.

                    </li>

                    <li>

                        <strong>Espace client</strong>

                        <strong> :</strong>

                        Une interface de gestion de compte pour gérer et suivre les

                        informations transmise au sein du site, ou des services supplémentaires

                        achetés, y compris : l’historique, les coordonnées.

                    </li>

                    <li>

                        <strong>Tiers</strong>

                        <strong> : </strong>

                        toute personne ayant fait l’objet d’une déclaration par l’Utilisateur.

                    </li>

                    <li>

                        <strong>Contenu : </strong>

                        toutes les communications sur notre site, y compris les avis sur les

                        déclarations, les remarques et les commentaires.

                    </li>

                </ul>

                <p>

                    <strong>ARTICLE 4 : Accès aux services</strong>

                </p>

                <p>

                    Le site permet à l'Utilisateur un accès gratuit aux services suivants :

                </p>

                <ul>

                    <li>

                        Articles d’informations sur le site.

                    </li>

                    <li>

                        Inscription et création espace client lié au pack de démarrage gratuit.

                    </li>

                </ul>

                <p>

                    Le site est accessible gratuitement en tout lieu à tout Utilisateur ayant

                    un accès à Internet. Tous les frais supportés par l'Utilisateur pour

                    accéder au service (matériel informatique, logiciels, connexion Internet,

                    etc.) sont à sa charge.

                </p>

                <p>

                    Selon le cas :

                </p>

                <p>

                    L'Utilisateur non membre n'a pas accès aux services réservés aux membres.

                    Pour cela, il doit s'identifier à l'aide de son identifiant et de son mot

                    de passe.

                </p>

                <p>

                    Le site met en œuvre tous les moyens mis à sa disposition pour assurer un

                    accès de qualité à ses services. L'obligation étant de moyens, le site ne

                    s'engage pas à atteindre ce résultat.

                </p>

                <p>

                    Tout événement dû à un cas de force majeure ayant pour conséquence un

                dysfonctionnement du réseau ou du serveur n'engage pas la responsabilité de    <a href="http://www.stop-retour.com/">stop-retour.com</a>

                </p>

                <p>

                    L'accès aux services du site peut à tout moment faire l'objet d'une

                    interruption, d'une suspension, d'une modification sans préavis pour une

                    maintenance ou pour tout autre cas. L'Utilisateur s'oblige à ne réclamer

                    aucune indemnisation suite à l'interruption, à la suspension ou à la

                    modification du présent contrat.

                </p>

                <p>

                    L'Utilisateur a la possibilité de contacter le site par messagerie

                électronique à l'adresse :    <a href="mailto:contact@stop-retour.com">contact@stop-retour.com</a>

                </p>

                <p>

                    <strong>ARTICLE 5 : Propriété intellectuelle</strong>

                </p>

                <p>

                    Les marques, logos, signes et tout autre contenu du site font l'objet d'une

                    protection par le Code de la propriété intellectuelle et plus

                    particulièrement par le droit d'auteur.

                </p>

                <p>

                    L'Utilisateur sollicite l'autorisation préalable du site pour toute

                    reproduction, publication, copie des différents contenus.

                </p>

                <p>

                    L'Utilisateur s'engage à une utilisation des contenus du site dans un cadre

                    strictement privé. Une utilisation des contenus à des fins commerciales est

                    strictement interdite.

                </p>

                <p>

                    Tout contenu mis en ligne par l'Utilisateur est de sa seule responsabilité.

                    L'Utilisateur s'engage à ne pas mettre en ligne de contenus pouvant porter

                    atteinte aux intérêts de tierces personnes. Tout recours en justice engagé

                    par un tiers lésé contre le site sera pris en charge par l'Utilisateur.

                </p>

                <p>

                    Le contenu de l'Utilisateur peut être à tout moment et pour n'importe

                    quelle raison supprimé ou modifié par le site. L'Utilisateur ne reçoit

                    aucune justification et notification préalablement à la suppression ou à la

                    modification du contenu Utilisateur.

                </p>

                <p>

                    <strong>ARTICLE 6 : Données personnelles</strong>

                </p>

                <p>

                    Les informations demandées à l'inscription au site sont nécessaires et

                    obligatoires pour la création du compte de l'Utilisateur. En particulier,

                    l'adresse électronique pourra être utilisée par le site pour

                    l'administration, la gestion et l'animation du service. L’Utilisateur donne

                    consentement à <a href="http://www.stop-retour.com/">stop-retour.com</a> à

                    l’effet de traiter ses données personnelles pour la gestion de la tenue de

                    comptes clientèle.<u></u>

                </p>

                <p>

                    Le site assure à l'Utilisateur une collecte et un traitement d'informations

                    personnelles dans le respect de la vie privée conformément à la loi n°

                    09-08 relative à la protection des personnes physiques à l'égard du

                    traitement des données à caractère personnel, et conformément aux

                    directives en vigueur de la Commission Nationale de Contrôle de la

                    Protection des Données à Caractère Personnel (CNDP).

                </p>

                <p>

                    l'Utilisateur, justifiant de son identité et conformément à la loi 09-08,

                    dispose d'un droit d'accès, à ses données personnelles, d’un droit de

                    rectification de celles-ci ainsi que d'un droit d'opposition, pour des

                    motifs légitimes, au traitement de ses données.

                </p>

                <p>

                    Pour exercer ses droits l'Utilisateur peut s’adresser à :

                </p>

                <ul>

                    <li>

                        Son espace client.

                    </li>

                    <li>

                        Ticket de contact support.

                    </li>

                    <li>

                        Par mail à :    <a href="mailto:contact@stop-retour.com">contact@stop-retour.com</a>

                    </li>

                </ul>

                <p>

                    Toute personne physique ou morale justifiant de son identité et

                    conformément à la loi 09-08, non consentante se sentant lésée suite à la

                    collecte de ses données à caractère personnel dispose du même droit

                    d'accès, à ses données personnelles, d’un droit de rectification de

                    celles-ci ainsi que d'un droit d'opposition ou de suppression, pour des

                    motifs légitimes, au traitement de ses données.

                </p>

                <p>

                    Pour exercer ses droits la personne physique ou morale peut s’adresser à :

                </p>

                <ul><li>

                    Par mail à :    <a href="mailto:contact@stop-retour.com">contact@stop-retour.com</a>

                </li></ul>

                <p id="Sécurité">

                    <strong>ARTICLE 7 : Obligations de sécurité et de confidentialité </strong>

                </p>

                <p>

                    <a href="http://www.stop-retour.com/">stop-retour.com</a>

                    doit mettre en œuvre les mesures de sécurité des locaux et des systèmes

                    d’information pour empêcher tous les risques inhérents au traitement et à

                    la nature des données à caractère personnel du l'Utilisateur ou du tiers,

                    afin:

                </p>

                <ul type="disc">

                    <li>

                        d’empêcher toute personne non autorisée d’avoir accès aux systèmes

                        informatiques de traitement des données à caractère personnel ;

                    </li>

                    <li>

                        d’empêcher que des supports de stockage puissent être lus, copiés,

                        modifiés ou déplacés sans autorisation ;

                    </li>

                    <li>

                        d’empêcher toute introduction non autorisée de données dans la mémoire

                        ainsi que toute divulgation, toute modification ou tout effacement non

                        autorisés de données à caractère personnel mémorisées ;

                    </li>

                    <li>

                        d’empêcher des personnes non autorisées d’utiliser des systèmes de

                        traitement de données au moyen d’installations de transmission de

                        données ;

                    </li>

                    <li>

                        de garantir que les utilisateurs autorisés d’un système de traitement

                        des données ne puissent accéder qu’aux données à caractère personnel

                        que leur droit d’accès leur permet de consulter ;

                    </li>

                    <li>

                        de garder une trace des données à caractère personnel qui ont été

                        communiquées, du moment où elles ont été communiquées et de leur

                        destinataire ;

                    </li>

                    <li>

                        de garantir qu’il sera possible de vérifier a posteriori quelles

                        données à caractère personnel ont été traitées, à quel moment et par

                        quelles personnes ;

                    </li>

                    <li>

                        de garantir que des données personnelles qui sont traitées pour le

                        compte de tiers ne peuvent l’être que de la façon prévue par

                        l’institution ou l’organe contractant ;

                    </li>

                    <li>

                        de garantir que, lors de la communication de données à caractère

                        personnel et du transport de supports de stockage, les données ne

                        puissent être lues, copiées ou effacées sans autorisation ;

                    </li>

                    <li>

                        de concevoir sa structure organisationnelle de manière à ce qu’elle

                        réponde aux exigences de la protection des données.

                    </li>

                </ul>

                <p>

                    <strong>ARTICLE 8 : Responsabilité et force majeure</strong>

                </p>

                <p>

                    Les sources des informations diffusées sur le site sont réputées fiables.

                    Toutefois, le site se réserve la faculté d'une non-garantie de la fiabilité

                    des sources. Les informations données sur le site le sont à titre purement

                    informatif. Ainsi, l'Utilisateur assume seul l'entière responsabilité de

                    l'utilisation des informations et contenus du présent site.

                </p>

                <p>

                    L'Utilisateur est directement responsable envers le Tiers de toute

                utilisation abusive de ses données personnelles et    <a href="http://www.stop-retour.com/">stop-retour.com</a> n'assume aucune

                    responsabilité envers les Tiers en ce qui concerne toute utilisation

                    abusive de leurs données personnelles par les Utilisateurs.

                </p>

                <p>

                    L'Utilisateur s'assure de garder son mot de passe secret. Toute divulgation

                    du mot de passe, quelle que soit sa forme, est interdite.

                </p>

                <p>

                    L'Utilisateur assume les risques liés à l'utilisation de son identifiant et

                    mot de passe. Le site décline toute responsabilité.

                </p>

                <p>

                    Tout usage du service par l'Utilisateur ayant directement ou indirectement

                    pour conséquence des dommages doit faire l'objet d'une indemnisation au

                    profit du site.

                </p>

                <p>

                    Une garantie optimale de la sécurité et de la confidentialité des données

                    transmises n'est pas assurée par le site. Toutefois, le site s'engage à

                    mettre en œuvre tous les moyens nécessaires afin de garantir au mieux la

                    sécurité et la confidentialité des données.

                </p>

                <p>

                    La responsabilité du site ne peut être engagée en cas de force majeure ou

                    du fait imprévisible et insurmontable d'un tiers.

                </p>

                <p>

                    <strong>ARTICLE 9 : Liens hypertextes</strong>

                </p>

                <p>

                    De nombreux liens hypertextes sortants sont présents sur le site, cependant

                les pages web où mènent ces liens n'engagent en rien la responsabilité de    <a href="http://www.stop-retour.com/">stop-retour.com</a> qui n'a pas le

                    contrôle de ces liens.

                </p>

                <p>

                    L'Utilisateur s'interdit donc à engager la responsabilité du site

                    concernant le contenu et les ressources relatives à ces liens hypertextes

                    sortants.

                </p>

                <p>

                    <strong>ARTICLE 10 : Évolution du contrat</strong>

                </p>

                <p>

                    Le site se réserve à tout moment le droit de modifier les clauses stipulées

                    dans le présent contrat.

                </p>

                <p>

                    <strong>ARTICLE 11 : Durée</strong>

                </p>

                <p>

                    La durée du présent contrat est indéterminée. Le contrat produit ses effets

                    à l'égard de l'Utilisateur à compter de l'utilisation du service.

                </p>

                <p>

                    La reconduction du solde de consultations lié à chacun de nos services n’est

                    pas tacite, L'Utilisateur est amené à régler le montant dû à nos différents

                    services proposés pour que son solde de consultations soit rechargé.

                </p>

                <p>

                    <strong>ARTICLE 12 : Droit applicable et juridiction compétente</strong>

                </p>

                <p>

                    Les présentes conditions générales sont régies et interprétées conformément

                    au droit du Territoire.

                </p>

                <p>

                    Tout litige relatif aux présentes conditions générales est soumis à la

                    compétence exclusive des tribunaux compétents du Territoire.

                </p>

                <p>

                    <strong>

                        ARTICLE 13 : Règles concernant votre contenu et publications

                    </strong>

                </p>

                <p>

                    Le site permet aux membres de publier des commentaires.

                </p>

                <p>

                    Votre contenu doit être approprié, civil et de bon goût, et être conforme

                    aux normes d'éthique et de comportement généralement acceptés sur Internet,

                    et ne doit pas :

                </p>

                <ul type="disc">

                    <li>

                        être offensant, obscène, indécent, pornographique, suggestif ou

                        sexuellement explicite ;

                    </li>

                    <li>

                        dépeindre la violence de manière explicite, graphique ou gratuite ; ou

                    </li>

                    <li>

                        être blasphématoire, en violation de la législation sur la haine

                        raciale ou religieuse ou la discrimination ;

                    </li>

                    <li>

                        être trompeur, frauduleux, menaçant, abusif, harcelant, antisocial,

                        haineux, discriminatoire ou incendiaire ;

                    </li>

                    <li>

                        causer de la gêne, des désagréments ou une anxiété inutile à quiconque

                        ; ou

                    </li>

                    <li>

                        constitue un spam.

                    </li>

                </ul>

                <p>

                    Votre contenu ne doit pas être illégal ou illicite, porter atteinte aux

                    droits légaux de toute personne ou être susceptible de donner lieu à des

                    poursuites judiciaires.

                </p>

                <p>

                    La fonction qui permet aux utilisateurs sur notre site de donner leur avis

                    et commentaires peut être utilisée pour faciliter les évaluations et

                    prévenir d’éventuels risques de retours marchandises. Vous ne devez pas

                    utiliser ladite fonction ou toute autre forme de communication pour fournir

                    des critiques et/ou des avis inexacts, inauthentiques ou faux.

                </p>

                <p>

                    Vous ne devez pas interférer avec une transaction en contactant un autre

                    utilisateur pour acheter ou vendre un article listé sur notre site en

                    dehors de notre site ; ou contacter un autre utilisateur avec l'intention

                    de collecter des paiements.

                </p>

                <p>

                    Vous reconnaissez que tous les utilisateurs de notre site sont seuls

                    responsables des interactions avec les autres utilisateurs et vous devez

                    faire preuve de prudence et de bon jugement dans votre communication avec

                    les utilisateurs. Vous ne devez pas leur envoyer des informations

                    personnelles, y compris les détails de votre carte de crédit et tout moyen

                    de paiement.

                </p>

                <p>

                    Nous pouvons examiner périodiquement votre contenu et nous nous réservons

                    le droit de supprimer tout contenu à notre discrétion pour quelque raison

                    que ce soit.

                </p>

                <p>

                    <strong></strong>

                </p>

                <p>

                    <strong></strong>

                </p>

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

