<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<?php
require_once("lib/helper.php");
require_once("lib/library_functions.php");
$base_dir = constant('base_dir');
$page_title = title('page_title');
$base_name = title('');
$meta_title = '';
$meta_description = '';
$meta_keywords = '';

if($base_name == '' || $base_name == 'index' || $base_name =='Elpee Co'){
	$meta_title = 'Elpee Co.- Your Legal Advisors';
	$meta_description = '';
	$meta_keywords = 'elpeeco, elpee, corporate, legal, solutions, compliance, regulatory, advisory, litigation management, investigation, forensic, partnering in business strategy, opinion and advisory, management of legal risk, management of reputational risk, structural advisory and documentation, communication management, compliance implementation, management of routine compliance, compliance risk evaluation and advisory, product development and structuring, special regulatory approvals, management of enforcement procedures, designing processes for compliance to aml, education training, industry policy and innovation, retail insurance disputes, special insurance disputes, management of liability claims, litigation reporting, fraud risk management, investigation and forensic, asset tracking and identification';
}
else if($base_name == 'about'){
	$meta_title = 'About- Elpee Co.- Your Legal Advisors';
	$meta_description = '';
	$meta_keywords = 'elpeeco, elpee, corporate, legal, solutions, compliance, regulatory, advisory, litigation management, investigation, forensic, partnering in business strategy, opinion and advisory, management of legal risk, management of reputational risk, structural advisory and documentation, communication management, compliance implementation, management of routine compliance, compliance risk evaluation and advisory, product development and structuring, special regulatory approvals, management of enforcement procedures, designing processes for compliance to aml, education training, industry policy and innovation, retail insurance disputes, special insurance disputes, management of liability claims, litigation reporting, fraud risk management, investigation and forensic, asset tracking and identification';
}
else if($base_name == 'compliance-and-regulatory'){
	$meta_title = 'Compliance & Regulatory- Elpee Co.- Your Legal Advisors';
	$meta_description = '';
	$meta_keywords = 'elpeeco, elpee, corporate, legal, solutions, compliance, regulatory, advisory, litigation management, investigation, forensic, partnering in business strategy, opinion and advisory, management of legal risk, management of reputational risk, structural advisory and documentation, communication management, compliance implementation, management of routine compliance, compliance risk evaluation and advisory, product development and structuring, special regulatory approvals, management of enforcement procedures, designing processes for compliance to aml, education training, industry policy and innovation, retail insurance disputes, special insurance disputes, management of liability claims, litigation reporting, fraud risk management, investigation and forensic, asset tracking and identification';
}
else if($base_name == 'contact'){
	$meta_title = 'Contact- Elpee Co.- Your Legal Advisors';
	$meta_description = '';
	$meta_keywords = 'elpeeco, elpee, corporate, legal, solutions, compliance, regulatory, advisory, litigation management, investigation, forensic, partnering in business strategy, opinion and advisory, management of legal risk, management of reputational risk, structural advisory and documentation, communication management, compliance implementation, management of routine compliance, compliance risk evaluation and advisory, product development and structuring, special regulatory approvals, management of enforcement procedures, designing processes for compliance to aml, education training, industry policy and innovation, retail insurance disputes, special insurance disputes, management of liability claims, litigation reporting, fraud risk management, investigation and forensic, asset tracking and identification';
}
else if($base_name == 'corporate-legal-solutions'){
	$meta_title = 'Corporate Legal Solutions- Elpee Co.- Your Legal Advisors';
	$meta_description = '';
	$meta_keywords = 'elpeeco, elpee, corporate, legal, solutions, compliance, regulatory, advisory, litigation management, investigation, forensic, partnering in business strategy, opinion and advisory, management of legal risk, management of reputational risk, structural advisory and documentation, communication management, compliance implementation, management of routine compliance, compliance risk evaluation and advisory, product development and structuring, special regulatory approvals, management of enforcement procedures, designing processes for compliance to aml, education training, industry policy and innovation, retail insurance disputes, special insurance disputes, management of liability claims, litigation reporting, fraud risk management, investigation and forensic, asset tracking and identification';
}
else if($base_name == 'investigation-and-forensic'){
	$meta_title = 'Investigation and Forensic- Elpee Co.- Your Legal Advisors';
	$meta_description = '';
	$meta_keywords = 'elpeeco, elpee, corporate, legal, solutions, compliance, regulatory, advisory, litigation management, investigation, forensic, partnering in business strategy, opinion and advisory, management of legal risk, management of reputational risk, structural advisory and documentation, communication management, compliance implementation, management of routine compliance, compliance risk evaluation and advisory, product development and structuring, special regulatory approvals, management of enforcement procedures, designing processes for compliance to aml, education training, industry policy and innovation, retail insurance disputes, special insurance disputes, management of liability claims, litigation reporting, fraud risk management, investigation and forensic, asset tracking and identification';
}
else if($base_name == 'litigation-management'){
	$meta_title = 'Litigation Management- Elpee Co.- Your Legal Advisors';
	$meta_description = '';
	$meta_keywords = 'elpeeco, elpee, corporate, legal, solutions, compliance, regulatory, advisory, litigation management, investigation, forensic, partnering in business strategy, opinion and advisory, management of legal risk, management of reputational risk, structural advisory and documentation, communication management, compliance implementation, management of routine compliance, compliance risk evaluation and advisory, product development and structuring, special regulatory approvals, management of enforcement procedures, designing processes for compliance to aml, education training, industry policy and innovation, retail insurance disputes, special insurance disputes, management of liability claims, litigation reporting, fraud risk management, investigation and forensic, asset tracking and identification';
}
else if($base_name == 'news-updates'){
	$meta_title = 'News Updates- Elpee Co.- Your Legal Advisors';
	$meta_description = '';
	$meta_keywords = 'elpeeco, elpee, corporate, legal, solutions, compliance, regulatory, advisory, litigation management, investigation, forensic, partnering in business strategy, opinion and advisory, management of legal risk, management of reputational risk, structural advisory and documentation, communication management, compliance implementation, management of routine compliance, compliance risk evaluation and advisory, product development and structuring, special regulatory approvals, management of enforcement procedures, designing processes for compliance to aml, education training, industry policy and innovation, retail insurance disputes, special insurance disputes, management of liability claims, litigation reporting, fraud risk management, investigation and forensic, asset tracking and identification';
}
else if($base_name == 'notices'){
	$meta_title = 'Notices- Elpee Co.- Your Legal Advisors';
	$meta_description = '';
	$meta_keywords = 'elpeeco, elpee, corporate, legal, solutions, compliance, regulatory, advisory, litigation management, investigation, forensic, partnering in business strategy, opinion and advisory, management of legal risk, management of reputational risk, structural advisory and documentation, communication management, compliance implementation, management of routine compliance, compliance risk evaluation and advisory, product development and structuring, special regulatory approvals, management of enforcement procedures, designing processes for compliance to aml, education training, industry policy and innovation, retail insurance disputes, special insurance disputes, management of liability claims, litigation reporting, fraud risk management, investigation and forensic, asset tracking and identification';
}
else if($base_name == 'offices'){
	$meta_title = 'Offices- Elpee Co.- Your Legal Advisors';
	$meta_description = '';
	$meta_keywords = 'elpeeco, elpee, corporate, legal, solutions, compliance, regulatory, advisory, litigation management, investigation, forensic, partnering in business strategy, opinion and advisory, management of legal risk, management of reputational risk, structural advisory and documentation, communication management, compliance implementation, management of routine compliance, compliance risk evaluation and advisory, product development and structuring, special regulatory approvals, management of enforcement procedures, designing processes for compliance to aml, education training, industry policy and innovation, retail insurance disputes, special insurance disputes, management of liability claims, litigation reporting, fraud risk management, investigation and forensic, asset tracking and identification';
}
else if($base_name == 'services'){
	$meta_title = 'Services- Elpee Co.- Your Legal Advisors';
	$meta_description = '';
	$meta_keywords = 'elpeeco, elpee, corporate, legal, solutions, compliance, regulatory, advisory, litigation management, investigation, forensic, partnering in business strategy, opinion and advisory, management of legal risk, management of reputational risk, structural advisory and documentation, communication management, compliance implementation, management of routine compliance, compliance risk evaluation and advisory, product development and structuring, special regulatory approvals, management of enforcement procedures, designing processes for compliance to aml, education training, industry policy and innovation, retail insurance disputes, special insurance disputes, management of liability claims, litigation reporting, fraud risk management, investigation and forensic, asset tracking and identification';
}
else if($base_name == 'single-news'){
	$meta_title = 'Single News- Elpee Co.- Your Legal Advisors';
	$meta_description = '';
	$meta_keywords = 'elpeeco, elpee, corporate, legal, solutions, compliance, regulatory, advisory, litigation management, investigation, forensic, partnering in business strategy, opinion and advisory, management of legal risk, management of reputational risk, structural advisory and documentation, communication management, compliance implementation, management of routine compliance, compliance risk evaluation and advisory, product development and structuring, special regulatory approvals, management of enforcement procedures, designing processes for compliance to aml, education training, industry policy and innovation, retail insurance disputes, special insurance disputes, management of liability claims, litigation reporting, fraud risk management, investigation and forensic, asset tracking and identification';
}
else if($base_name == 'single-notice'){
	$meta_title = 'Single Notice- Elpee Co.- Your Legal Advisors';
	$meta_description = '';
	$meta_keywords = 'elpeeco, elpee, corporate, legal, solutions, compliance, regulatory, advisory, litigation management, investigation, forensic, partnering in business strategy, opinion and advisory, management of legal risk, management of reputational risk, structural advisory and documentation, communication management, compliance implementation, management of routine compliance, compliance risk evaluation and advisory, product development and structuring, special regulatory approvals, management of enforcement procedures, designing processes for compliance to aml, education training, industry policy and innovation, retail insurance disputes, special insurance disputes, management of liability claims, litigation reporting, fraud risk management, investigation and forensic, asset tracking and identification';
}
else if($base_name == 'team'){
	$meta_title = 'Team- Elpee Co.- Your Legal Advisors';
	$meta_description = '';
	$meta_keywords = 'elpeeco, elpee, corporate, legal, solutions, compliance, regulatory, advisory, litigation management, investigation, forensic, partnering in business strategy, opinion and advisory, management of legal risk, management of reputational risk, structural advisory and documentation, communication management, compliance implementation, management of routine compliance, compliance risk evaluation and advisory, product development and structuring, special regulatory approvals, management of enforcement procedures, designing processes for compliance to aml, education training, industry policy and innovation, retail insurance disputes, special insurance disputes, management of liability claims, litigation reporting, fraud risk management, investigation and forensic, asset tracking and identification';
}
else{
	$meta_title = 'Elpee Co.- Your Legal Advisors';
	$meta_description = '';
	$meta_keywords = 'elpeeco, elpee, corporate, legal, solutions, compliance, regulatory, advisory, litigation management, investigation, forensic, partnering in business strategy, opinion and advisory, management of legal risk, management of reputational risk, structural advisory and documentation, communication management, compliance implementation, management of routine compliance, compliance risk evaluation and advisory, product development and structuring, special regulatory approvals, management of enforcement procedures, designing processes for compliance to aml, education training, industry policy and innovation, retail insurance disputes, special insurance disputes, management of liability claims, litigation reporting, fraud risk management, investigation and forensic, asset tracking and identification';
}
?>

<head>
    <meta charset="utf-8">
    <title><?php echo $meta_title != '' ? ''.$meta_title : ''; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>" />
    <meta name="author" content="themesflat.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/dist/style.css">
    <link rel="stylesheet" type="text/css" href="assets/dist/custom.css">
    <link rel="stylesheet" type="text/css" href="assets/dist/responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/dist/tab-responsive.css">
    <link rel="shortcut icon" href="assets/img/logo/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/img/logo/favicon.png">
<!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="<?php echo $meta_description; ?>">
    <meta property="og:site_name" content="Elpee Co.- Your Legal Advisors">
    <meta property="og:title" content="Elpee Co.- Your Legal Advisors">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://smitlalai.com/demo/elpeeco/">
    <meta property="og:image" content="https://smitlalai.com/demo/elpeeco/assets/img/logo/elpeecologoclr.png" />
    <meta property="og:image:secure_url" content="https://smitlalai.com/demo/elpeeco/assets/img/logo/elpeecologoclr.png" />
    <meta property="og:image:width" content="1800" />
    <meta property="og:image:height" content="945" />
    <meta property="og:image:alt" content="Elpee Co" />
    <meta property="og:image:type" content="image/png" />
    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="Elpee Co.- Your Legal Advisors">
    <meta name="twitter:creator" content="Elpee Co.- Your Legal Advisors">
    <meta name="twitter:title" content="Elpee Co.- Your Legal Advisors">
    <meta name="twitter:description" content="">
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M9TZHXX');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-179148496-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-179148496-1');
    </script>

    <!-- Facebook Pixel Code -->
    <!-- Meta Pixel Code -->
    <script>
        ! function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '420989926550304');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=420989926550304&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- End Facebook Pixel Code -->

</head>

<body class="body header-fixed counter-scroll">

    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>

    <div id="wrapper">
        <div id="page" class="clearfix">
            <header id="header_main" class="header_1 js-header style2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="site-header-inner" class="home2">
                                <div class="wrap-box relative">
                                    <div id="site-logo" class="clearfix">
                                        <div>
                                            <a href="index.php" rel="home" class="main-logo">
                                                <img class="logo_header_clr" src="assets/img/logo/elpeecologoclr.png"
                                                    alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mobile-button"><span></span></div>
                                    <nav id="main-nav" class="main-nav home2">
                                        <ul id="menu-primary-menu" class="menu">
                                            <li class="menu-item <?php if (($base_name=="index")||($base_name=="")){echo ' current-menu-item';}?>">
                                                <a href="<?php echo $base_dir; ?>index.php">Home</a>
                                            </li>
                                            <li class="menu-item <?php if (($base_name=="about")){echo ' current-menu-item';}?>">
                                                <a href="<?php echo $base_dir; ?>about.php">About</a>
                                            </li>
                                            <li class="menu-item <?php if (($base_name=="team")){echo ' current-menu-item';}?>">
                                                <a href="<?php echo $base_dir; ?>team.php">Team</a>
                                            </li>
                                            <li class="menu-item menu-item-has-children <?php if (($base_name=="corporate-legal-solutions")||($base_name=="compliance-and-regulatory")||($base_name=="litigation-management")||($base_name=="investigation-and-forensic")){echo ' current-menu-item';}?>">
                                                <a href="<?php echo $base_dir; ?>services.php">Services</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item <?php if (($base_name=="corporate-legal-solutions")){echo ' current-item';}?>"><a
                                                            href="<?php echo $base_dir; ?>corporate-legal-solutions.php">Corporate Legal
                                                            Solutions</a></li>
                                                    <li class="menu-item <?php if (($base_name=="compliance-and-regulatory")){echo ' current-item';}?>"><a
                                                            href="<?php echo $base_dir; ?>compliance-and-regulatory.php">Compliance & Regulatory
                                                            Advisory</a></li>
                                                    <li class="menu-item <?php if (($base_name=="litigation-management")){echo ' current-item';}?>"><a href="<?php echo $base_dir; ?>litigation-management.php">Litigation
                                                            Management</a></li>
                                                    <li class="menu-item <?php if (($base_name=="investigation-and-forensic")){echo ' current-item';}?>"><a
                                                            href="<?php echo $base_dir; ?>investigation-and-forensic.php">Investigation and
                                                            Forensic</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children <?php if (($base_name=="news-updates")||($base_name=="notices")||($base_name=="single-news")||($base_name=="single-notice")){echo ' current-menu-item';}?>">
                                                <a href="javascript:void(0)">Media</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item <?php if (($base_name=="news-updates")){echo ' current-item';}?>"><a href="<?php echo $base_dir; ?>news-updates.php">News Updates</a>
                                                    </li>
                                                    <li class="menu-item <?php if (($base_name=="notices")){echo ' current-item';}?>"><a href="<?php echo $base_dir; ?>notices.php">Notices</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item <?php if (($base_name=="offices")){echo ' current-menu-item';}?>">
                                                <a href="<?php echo $base_dir; ?>offices.php">Offices</a>
                                            </li>
                                            <li class="menu-item <?php if (($base_name=="contact")){echo ' current-menu-item';}?>">
                                                <a href="<?php echo $base_dir; ?>contact.php" class="pr-0">Contact</a>
                                            </li>
                                        </ul>
                                    </nav><!-- /#main-nav -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </header>

            <!-- title page -->