<?php 

    $conexion=mysqli_connect('localhost','root','1234','startowl');
    $sql="SELECT id_catego,des_categoria from categorias";
    $result=mysqli_query($conexion,$sql);

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <script src="resources/js/jquery.js"></script>

    <script src="resources/js/select2.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Page Title -->
    <title>StartOwl</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/indexcss/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <!-- Simple line Icon    -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/indexcss/simple-line-icons.css">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/indexcss/themify-icons.css">
    <!-- Hover Effects -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/indexcss/set1.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/indexcss/style.css">

    <link  rel="stylesheet" href="<?php echo base_url(); ?>/resources/custom/custom.css">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>resources/img/ico/favicon.png">

    <link  rel="stylesheet" href="<?php echo base_url(); ?>/resources/css/select2.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.1/css/flag-icon.css">
    
     <style>
        .flag-text { margin-left: 10px; }
    </style>

</head>

<body>
<!--============================= NAV MENU =============================-->
    <div class="nav-menu">
        <div class="bg transition">
            <div class="container-fluid fixed">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.html"><img src="img/ico/favicon.png" alt="">StartOwl</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-menu"></span>
              </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Ayuda
                     <span class="icon-arrow-down"></span>
                   </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Como Funciona</a>
                                            <a class="dropdown-item" href="#">Beneficios</a>
                                            <a class="dropdown-item" href="#">Responsabilidades</a>
                                            <a class="dropdown-item" href="#">Acuerdos</a>
                                            <a class="dropdown-item" href="#">Marco Legal</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Crecimiento
                    <span class="icon-arrow-down"></span>
                  </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Mentores</a>
                                            <a class="dropdown-item" href="#">Tutoriales</a>
                                            <a class="dropdown-item" href="#">Proveedores</a>
                                            <a class="dropdown-item" href="#">Inversionistas</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Contáctanos
                    <span class="icon-arrow-down"></span>
                  </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">
                                                <a href="#"><span class="ti-facebook"></span>  Facebook</a>
                                            </a>
                                            
                                            <a class="dropdown-item" href="#">
                                                <a href="#"><span class="ti-twitter-alt"></span>  Twiter</a>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <a href="#"><span class="ti-instagram"></span>  instagram</a>
                                            </a>
                                            
                                            <a class="dropdown-item" href="#">Soporte 24/7</a>
                                            <a class="dropdown-item" href="#">contacto@startowl.net</a>
                                        </div>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Quienes Somos</a>
                                    </li>
                                   
                                    <li><a href="<?php echo base_url(); ?>cloreg/login" class="btn btn-outline-light top-btn" ><span class=""></span> Inicia Sesión o Registrate </a></li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="<?php echo base_url(); ?>cloreg/profile">Perfil</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER -->
    <section class="slider d-flex align-items-center">
        <!-- <img src="images/slider.jpg" class="img-fluid" alt="#"> -->
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                    <h1>Quieres emprender tu idea de negocio en otro país?</h1>
                                    <h5>Cuentanos de que se trata y te contactaremos con personas del pais de tu interes.</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-12">
                                <form action="<?php echo base_url(); ?>cloreg/ideaspublicadas" class="form-wrap mt-4">
                                    <div class="btn-group row" role="group" aria-label="Basic example">
                                        
                                        <select class="form-control col-md-6" name="" id="control-categorias" multiple="multiple">
                                        <?php while ($ver=mysqli_fetch_row($result)) {?>
                                        <option value="<?php echo $ver[0] ?>">
                                            <?php echo $ver[1] ?>
                                        </option>   
                                        <?php } ?>
                                        </select> 
                                        <select class="btn-group2 col-md-3" name="country" ></select>
                                        <!-- <input type="text" placeholder="País que quieres Emprender?" class="btn-group2 col-md-4"> -->
                                        <button type="submit" style="height: 37px;padding-top: 6px;border-radius: 5px;" class="btn-form col-md-2"><span class="icon-magnifier search-icon"></span>BUSCAR<i class="pe-7s-angle-right"></i></button>
                                    </div>
                                </form>
                                <div class="slider-link">
                                    <a href="#">Negocios Populares</a><span></span> <a href="#">Agregados Recientemente</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// SLIDER -->
    <!--//END HEADER -->
    <!--============================= FOOTER =============================-->
    <footer class="main-block dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        
                        <p>Copyright &copy; 2018 StartOwl. All rights reserved | This site is developed with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://DevOneA.com" target="_blank">developerOneAsociations</a></p>
                        
                        <ul>
                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                            <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                            <li><a href="#"><span class="ti-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//END FOOTER -->




    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    


    <script src="resources/custom/custom.js"></script>
    <!-- <script src="resources/indexjs/jquery-3.2.1.min.js"></script> -->
    <script src="resources/indexjs/popper.min.js"></script>
    <script src="resources/indexjs/bootstrap.min.js"></script>


    <script>
        $(window).scroll(function() {
            // 100 = The point you would like to fade the nav in.

            if ($(window).scrollTop() > 100) {

                $('.fixed').addClass('is-sticky');

            } else {

                $('.fixed').removeClass('is-sticky');

            };
        });
    </script>
</body>

</html>
    
    <script type="text/javascript">
       

        $('#control-categorias').select2();

    $('#control-categorias').on('select2:opening select2:closing', function( event ) {
    var $searchfield = $(this).parent().find('.select2-search__field');
    $searchfield.prop('disabled', true);
    });

    $('#control-categorias').select2({
       placeholder: "Selecciona las categorias de tu negocio"
    });

    </script>

<script>
        (function($) {
        $(function() {
            var isoCountries = [
                { id: 'AF', text: 'Afghanistan'},
                { id: 'AX', text: 'Aland Islands'},
                { id: 'AL', text: 'Albania'},
                { id: 'DZ', text: 'Algeria'},
                { id: 'AS', text: 'American Samoa'},
                { id: 'AD', text: 'Andorra'},
                { id: 'AO', text: 'Angola'},
                { id: 'AI', text: 'Anguilla'},
                { id: 'AQ', text: 'Antarctica'},
                { id: 'AG', text: 'Antigua And Barbuda'},
                { id: 'AR', text: 'Argentina'},
                { id: 'AM', text: 'Armenia'},
                { id: 'AW', text: 'Aruba'},
                { id: 'AU', text: 'Australia'},
                { id: 'AT', text: 'Austria'},
                { id: 'AZ', text: 'Azerbaijan'},
                { id: 'BS', text: 'Bahamas'},
                { id: 'BH', text: 'Bahrain'},
                { id: 'BD', text: 'Bangladesh'},
                { id: 'BB', text: 'Barbados'},
                { id: 'BY', text: 'Belarus'},
                { id: 'BE', text: 'Belgium'},
                { id: 'BZ', text: 'Belize'},
                { id: 'BJ', text: 'Benin'},
                { id: 'BM', text: 'Bermuda'},
                { id: 'BT', text: 'Bhutan'},
                { id: 'BO', text: 'Bolivia'},
                { id: 'BA', text: 'Bosnia And Herzegovina'},
                { id: 'BW', text: 'Botswana'},
                { id: 'BV', text: 'Bouvet Island'},
                { id: 'BR', text: 'Brazil'},
                { id: 'IO', text: 'British Indian Ocean Territory'},
                { id: 'BN', text: 'Brunei Darussalam'},
                { id: 'BG', text: 'Bulgaria'},
                { id: 'BF', text: 'Burkina Faso'},
                { id: 'BI', text: 'Burundi'},
                { id: 'KH', text: 'Cambodia'},
                { id: 'CM', text: 'Cameroon'},
                { id: 'CA', text: 'Canada'},
                { id: 'CV', text: 'Cape Verde'},
                { id: 'KY', text: 'Cayman Islands'},
                { id: 'CF', text: 'Central African Republic'},
                { id: 'TD', text: 'Chad'},
                { id: 'CL', text: 'Chile'},
                { id: 'CN', text: 'China'},
                { id: 'CX', text: 'Christmas Island'},
                { id: 'CC', text: 'Cocos (Keeling) Islands'},
                { id: 'CO', text: 'Colombia'},
                { id: 'KM', text: 'Comoros'},
                { id: 'CG', text: 'Congo'},
                { id: 'CD', text: 'Congo}, Democratic Republic'},
                { id: 'CK', text: 'Cook Islands'},
                { id: 'CR', text: 'Costa Rica'},
                { id: 'CI', text: 'Cote D\'Ivoire'},
                { id: 'HR', text: 'Croatia'},
                { id: 'CU', text: 'Cuba'},
                { id: 'CY', text: 'Cyprus'},
                { id: 'CZ', text: 'Czech Republic'},
                { id: 'DK', text: 'Denmark'},
                { id: 'DJ', text: 'Djibouti'},
                { id: 'DM', text: 'Dominica'},
                { id: 'DO', text: 'Dominican Republic'},
                { id: 'EC', text: 'Ecuador'},
                { id: 'EG', text: 'Egypt'},
                { id: 'SV', text: 'El Salvador'},
                { id: 'GQ', text: 'Equatorial Guinea'},
                { id: 'ER', text: 'Eritrea'},
                { id: 'EE', text: 'Estonia'},
                { id: 'ET', text: 'Ethiopia'},
                { id: 'FK', text: 'Falkland Islands (Malvinas)'},
                { id: 'FO', text: 'Faroe Islands'},
                { id: 'FJ', text: 'Fiji'},
                { id: 'FI', text: 'Finland'},
                { id: 'FR', text: 'France'},
                { id: 'GF', text: 'French Guiana'},
                { id: 'PF', text: 'French Polynesia'},
                { id: 'TF', text: 'French Southern Territories'},
                { id: 'GA', text: 'Gabon'},
                { id: 'GM', text: 'Gambia'},
                { id: 'GE', text: 'Georgia'},
                { id: 'DE', text: 'Germany'},
                { id: 'GH', text: 'Ghana'},
                { id: 'GI', text: 'Gibraltar'},
                { id: 'GR', text: 'Greece'},
                { id: 'GL', text: 'Greenland'},
                { id: 'GD', text: 'Grenada'},
                { id: 'GP', text: 'Guadeloupe'},
                { id: 'GU', text: 'Guam'},
                { id: 'GT', text: 'Guatemala'},
                { id: 'GG', text: 'Guernsey'},
                { id: 'GN', text: 'Guinea'},
                { id: 'GW', text: 'Guinea-Bissau'},
                { id: 'GY', text: 'Guyana'},
                { id: 'HT', text: 'Haiti'},
                { id: 'HM', text: 'Heard Island & Mcdonald Islands'},
                { id: 'VA', text: 'Holy See (Vatican City State)'},
                { id: 'HN', text: 'Honduras'},
                { id: 'HK', text: 'Hong Kong'},
                { id: 'HU', text: 'Hungary'},
                { id: 'IS', text: 'Iceland'},
                { id: 'IN', text: 'India'},
                { id: 'ID', text: 'Indonesia'},
                { id: 'IR', text: 'Iran}, Islamic Republic Of'},
                { id: 'IQ', text: 'Iraq'},
                { id: 'IE', text: 'Ireland'},
                { id: 'IM', text: 'Isle Of Man'},
                { id: 'IL', text: 'Israel'},
                { id: 'IT', text: 'Italy'},
                { id: 'JM', text: 'Jamaica'},
                { id: 'JP', text: 'Japan'},
                { id: 'JE', text: 'Jersey'},
                { id: 'JO', text: 'Jordan'},
                { id: 'KZ', text: 'Kazakhstan'},
                { id: 'KE', text: 'Kenya'},
                { id: 'KI', text: 'Kiribati'},
                { id: 'KR', text: 'Korea'},
                { id: 'KW', text: 'Kuwait'},
                { id: 'KG', text: 'Kyrgyzstan'},
                { id: 'LA', text: 'Lao People\'s Democratic Republic'},
                { id: 'LV', text: 'Latvia'},
                { id: 'LB', text: 'Lebanon'},
                { id: 'LS', text: 'Lesotho'},
                { id: 'LR', text: 'Liberia'},
                { id: 'LY', text: 'Libyan Arab Jamahiriya'},
                { id: 'LI', text: 'Liechtenstein'},
                { id: 'LT', text: 'Lithuania'},
                { id: 'LU', text: 'Luxembourg'},
                { id: 'MO', text: 'Macao'},
                { id: 'MK', text: 'Macedonia'},
                { id: 'MG', text: 'Madagascar'},
                { id: 'MW', text: 'Malawi'},
                { id: 'MY', text: 'Malaysia'},
                { id: 'MV', text: 'Maldives'},
                { id: 'ML', text: 'Mali'},
                { id: 'MT', text: 'Malta'},
                { id: 'MH', text: 'Marshall Islands'},
                { id: 'MQ', text: 'Martinique'},
                { id: 'MR', text: 'Mauritania'},
                { id: 'MU', text: 'Mauritius'},
                { id: 'YT', text: 'Mayotte'},
                { id: 'MX', text: 'Mexico'},
                { id: 'FM', text: 'Micronesia}, Federated States Of'},
                { id: 'MD', text: 'Moldova'},
                { id: 'MC', text: 'Monaco'},
                { id: 'MN', text: 'Mongolia'},
                { id: 'ME', text: 'Montenegro'},
                { id: 'MS', text: 'Montserrat'},
                { id: 'MA', text: 'Morocco'},
                { id: 'MZ', text: 'Mozambique'},
                { id: 'MM', text: 'Myanmar'},
                { id: 'NA', text: 'Namibia'},
                { id: 'NR', text: 'Nauru'},
                { id: 'NP', text: 'Nepal'},
                { id: 'NL', text: 'Netherlands'},
                { id: 'AN', text: 'Netherlands Antilles'},
                { id: 'NC', text: 'New Caledonia'},
                { id: 'NZ', text: 'New Zealand'},
                { id: 'NI', text: 'Nicaragua'},
                { id: 'NE', text: 'Niger'},
                { id: 'NG', text: 'Nigeria'},
                { id: 'NU', text: 'Niue'},
                { id: 'NF', text: 'Norfolk Island'},
                { id: 'MP', text: 'Northern Mariana Islands'},
                { id: 'NO', text: 'Norway'},
                { id: 'OM', text: 'Oman'},
                { id: 'PK', text: 'Pakistan'},
                { id: 'PW', text: 'Palau'},
                { id: 'PS', text: 'Palestinian Territory}, Occupied'},
                { id: 'PA', text: 'Panama'},
                { id: 'PG', text: 'Papua New Guinea'},
                { id: 'PY', text: 'Paraguay'},
                { id: 'PE', text: 'Peru'},
                { id: 'PH', text: 'Philippines'},
                { id: 'PN', text: 'Pitcairn'},
                { id: 'PL', text: 'Poland'},
                { id: 'PT', text: 'Portugal'},
                { id: 'PR', text: 'Puerto Rico'},
                { id: 'QA', text: 'Qatar'},
                { id: 'RE', text: 'Reunion'},
                { id: 'RO', text: 'Romania'},
                { id: 'RU', text: 'Russian Federation'},
                { id: 'RW', text: 'Rwanda'},
                { id: 'BL', text: 'Saint Barthelemy'},
                { id: 'SH', text: 'Saint Helena'},
                { id: 'KN', text: 'Saint Kitts And Nevis'},
                { id: 'LC', text: 'Saint Lucia'},
                { id: 'MF', text: 'Saint Martin'},
                { id: 'PM', text: 'Saint Pierre And Miquelon'},
                { id: 'VC', text: 'Saint Vincent And Grenadines'},
                { id: 'WS', text: 'Samoa'},
                { id: 'SM', text: 'San Marino'},
                { id: 'ST', text: 'Sao Tome And Principe'},
                { id: 'SA', text: 'Saudi Arabia'},
                { id: 'SN', text: 'Senegal'},
                { id: 'RS', text: 'Serbia'},
                { id: 'SC', text: 'Seychelles'},
                { id: 'SL', text: 'Sierra Leone'},
                { id: 'SG', text: 'Singapore'},
                { id: 'SK', text: 'Slovakia'},
                { id: 'SI', text: 'Slovenia'},
                { id: 'SB', text: 'Solomon Islands'},
                { id: 'SO', text: 'Somalia'},
                { id: 'ZA', text: 'South Africa'},
                { id: 'GS', text: 'South Georgia And Sandwich Isl.'},
                { id: 'ES', text: 'Spain'},
                { id: 'LK', text: 'Sri Lanka'},
                { id: 'SD', text: 'Sudan'},
                { id: 'SR', text: 'Suriname'},
                { id: 'SJ', text: 'Svalbard And Jan Mayen'},
                { id: 'SZ', text: 'Swaziland'},
                { id: 'SE', text: 'Sweden'},
                { id: 'CH', text: 'Switzerland'},
                { id: 'SY', text: 'Syrian Arab Republic'},
                { id: 'TW', text: 'Taiwan'},
                { id: 'TJ', text: 'Tajikistan'},
                { id: 'TZ', text: 'Tanzania'},
                { id: 'TH', text: 'Thailand'},
                { id: 'TL', text: 'Timor-Leste'},
                { id: 'TG', text: 'Togo'},
                { id: 'TK', text: 'Tokelau'},
                { id: 'TO', text: 'Tonga'},
                { id: 'TT', text: 'Trinidad And Tobago'},
                { id: 'TN', text: 'Tunisia'},
                { id: 'TR', text: 'Turkey'},
                { id: 'TM', text: 'Turkmenistan'},
                { id: 'TC', text: 'Turks And Caicos Islands'},
                { id: 'TV', text: 'Tuvalu'},
                { id: 'UG', text: 'Uganda'},
                { id: 'UA', text: 'Ukraine'},
                { id: 'AE', text: 'United Arab Emirates'},
                { id: 'GB', text: 'United Kingdom'},
                { id: 'US', text: 'United States'},
                { id: 'UM', text: 'United States Outlying Islands'},
                { id: 'UY', text: 'Uruguay'},
                { id: 'UZ', text: 'Uzbekistan'},
                { id: 'VU', text: 'Vanuatu'},
                { id: 'VE', text: 'Venezuela'},
                { id: 'VN', text: 'Viet Nam'},
                { id: 'VG', text: 'Virgin Islands}, British'},
                { id: 'VI', text: 'Virgin Islands}, U.S.'},
                { id: 'WF', text: 'Wallis And Futuna'},
                { id: 'EH', text: 'Western Sahara'},
                { id: 'YE', text: 'Yemen'},
                { id: 'ZM', text: 'Zambia'},
                { id: 'ZW', text: 'Zimbabwe'}
            ];
            
            function formatCountry (country) {
              if (!country.id) { return country.text; }
              var $country = $(
                '<span class="flag-icon flag-icon-'+ country.id.toLowerCase() +' flag-icon-squared"></span>' +
                '<span class="flag-text">'+ country.text+"</span>"
              );
              return $country;
            };
            
            //Assuming you have a select element with name country
            // e.g. <select name="name"></select>
            
            $("[name='country']").select2({
                placeholder: "Selecciona tu país",
                templateResult: formatCountry,
                data: isoCountries
            });
            
            
        });
})(jQuery);   
    </script>
