<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Nguyen Tuan Linh's Resume</title>
	<link rel="shortcut icon" href="<?php echo url('favicon.ico'); ?>" type="image/x-icon">
	<link rel="icon" href="<?php echo url('favicon.ico'); ?>" type="image/x-icon">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Nguyen Tuan Linh's Resume">
    <meta property="og:description" content="Technical skills, Experience, Education, Languages, Favorites">
    <meta property="og:url" content="<?php echo fullUrl('en'); ?>">
    <meta property="og:site_name" content="Nguyen Tuan Linh's Resume">
    <meta property="og:image" content="<?php echo fullUrl('images/avatar.jpg'); ?>">
    <meta property="og:locale" content="en_GB">
    <meta property="og:locale:alternate" content="en_GB">
    <meta property="og:locale:alternate" content="vi_VN">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&amp;subset=vietnamese">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo url('style.css'); ?>">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="top"></div>
<nav class="navbar navbar-fixed-top hidden">
    <div class="wrapper">
        <div class="navbar-header">
            <a class="navbar-brand page-scroll" href="#resume">R<span class="hidden-xss">esume</span></a>
        </div>
        <ul class="nav navbar-nav dropdown-nav">
            <li>
                <a class="dropdown-bars" href="#" data-toggle="dropdown"><i class="fa fa-bars"></i></a>
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" href="#skills">Skills</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#experience">Experience</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#education">Education</a>
                    </li> 
                    <li>
                        <a class="page-scroll" href="#languages">Languages</a>
                    </li> 
                    <li>
                        <a class="page-scroll" href="#favorites">Favorites</a>
                    </li>
                </ul>
            </li>
            <li class="pull-left-xs">
                <a href="<?php echo url('en'); ?>"><i class="flag flag-gb active"></i></a>
            </li>
            <li class="pull-left-xs">
                <a href="<?php echo url('vi'); ?>"><i class="flag flag-vn"></i></a>
            </li>
            <li class="pull-left-xs">
                <a href="#" class="command-open"><i class="fa fa-terminal"></i></a>
            </li>
            <li class="pull-left-xs">
                <a href="#" class="help"><i class="fa fa-question-circle"></i></a>
            </li>
            <li class="pull-left-xs">
                <a class="page-scroll" href="#bottom"><i class="fa fa-arrow-down"></i></a>
            </li>
            <li class="pull-left-xs">
                <a class="page-scroll" href="#top"><i class="fa fa-arrow-up"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
</nav>
<header class="rythm-bass">
    <div class="wrapper">
        <ul class="list-inline pull-right">
            <li>
                [ &nbsp; Language: &nbsp;
                <a href="<?php echo url('en'); ?>"><i class="flag flag-gb active"></i></a>
                &nbsp;
                <a href="<?php echo url('vi'); ?>"><i class="flag flag-vn"></i></a>
                &nbsp; ]
            </li>
            <li>
                [ &nbsp;
                <a href="#" class="help"><i class="fa fa-question-circle"></i></a>
                &nbsp; ]
            </li>
        </ul>
        <h1 id="resume" class="page-title">Resume</h1>
        <section id="me">
            <div class="me-avatar">
                <img class="full-box img-circle" src="<?php echo url('images/avatar.jpg'); ?>">
            </div>
            <h2 class="me-name">Nguyen Tuan Linh</h2>
            <div class="me-tag-line">Software Developer</div>
        </section>
        <section id="goal">
            <h2 class="title">Career goal</h2>
            <div class="content">
                I am seeking an opportunity to be part of a big team or a big company, where everyone can challenge me to solve big (and much bigger) problems.
            </div>
        </section>
        <section id="details">
            <h2 class="title">Personal information</h2>
            <div class="content">
                <ul class="list-unstyled">
                    <li class="clearfix">
                        <div class="text">
                            Date of birth:
                        </div>
                        <div class="value">
                            17 October 1988.
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="text">
                            Gender:
                        </div>
                        <div class="value">
                            Male.
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="text">
                            Marital Status:
                        </div>
                        <div class="value">
                            Single.
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="text">
                            Home Address:
                        </div>
                        <div class="value">
                            No. 2/96, Lan Ba Alley, Kham Thien Market Street, Trung Phung Ward, Dong Da District, Hanoi, Vietnam.
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="text">
                            Current Address 1:
                        </div>
                        <div class="value">
                            Room 3, 1st Floor, No. 122/8,  Pho Quang Street, Ward 9, Phu Nhuan District, Ho Chi Minh City, Vietnam.
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="text">
                            Current Address 2:
                        </div>
                        <div class="value">
                            No. 207, Vo Thi Sau Street, Tan Dinh Ward, District 3, Ho Chi Minh City, Vietnam.
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="text">
                            Email:
                        </div>
                        <div class="value">
                            linhnt.aim@outlook.com / linhnt.aim@gmail.com.
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="text">
                            Skype ID:
                        </div>
                        <div class="value">
                            live:linhnt.aim.
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="text">
                            Phone:
                        </div>
                        <div class="value">
                            <em>Mobile:</em> (+84) 975 783 771.<br>
                            <em>Home:</em> (+84) 43 5182 840.
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="text">
                            Nationality:
                        </div>
                        <div class="value">
                            Vietnamese.
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <div class="clearfix"></div>
    </div>
</header>
<main class="rythm-medium">
    <div class="wrapper">
        <section id="skills">
            <h2 class="title"><i class="fa fa-lightbulb-o"></i> Technical Skills</h2>
            <hr>
            <div class="content">
                <ul>
                    <li>
                        <h3>Programming:</h3>
                        <ul>
                            <li>Basic/advanced with C/C++.</li>
                            <li>Desktop/mobile with C++, C#, Java, Swift, Kotlin.</li>
                            <li>Server-side with C#/VisualBasic/ASP.NET.</li>
                            <li>Server-side with PHP, using frameworks: Laravel (+Passport+Echo+Mix), Wordpress, vTiger, Symfony, CodeIgniter, Kohana.</li>
                            <li>Client-side with HTML(5), CSS(3), Javascript, using frameworks: Bootstrap, jQuery, Sencha Ext JS, AngularJS, Angular, Vue.js, React, Prerender and Font libraries.</li>
                            <li>Flash/AIR with ActionScript3.</li>
                            <li>Real-time messaging/Notification with Socket.IO, Realtime.co, Firebase, APNs.</li>
                            <li>Prototyping/Visualizing with Processing.</li>
                            <li>Social APIs: Facebook, Instagram, Google.</li>
                            <li>Analysis &amp; design: OOP, Design Pattern, UML.</li>
                            <li>Scripting tools for automation testing: Selenium, CasperJS.</li>
                            <li>Mailing APIs with Mailgun, Mailchimp.</li>
                            <li>Single Sign-on using Cookie.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Database Management Systems:</h3>
                        <ul>
                            <li>Microsoft SQL Server.</li>
                            <li>MySQL/MariaDB.</li>
                            <li>Oracle Database.</li>
                            <li>Redis.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Web Servers:</h3>
                        <ul>
                            <li>Internet Information Services (IIS).</li>
                            <li>Apache.</li>
                            <li>NGINX.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Operating Systems:</h3>
                        <ul>
                            <li>Microsoft Windows, Microsoft Windows Server.</li>
                            <li>Ubuntu, CentOS, Fedora.</li>
                            <li>macOS.</li>
                            <li>Microsoft Windows Phone/Mobile, iOS, Android.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Cloud Computing Services:</h3>
                        <ul>
                            <li>Amazon Web Services (AWS).</li>
                            <li>Google Cloud Platforms (GCP).</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Tools for Programming:</h3>
                        <ul>
                            <li>Microsoft Visual Studio/Microsoft Visual Code.</li>
                            <li>JetBrains PhpStorm, Netbeans, Eclipse, Notepad++, console/terminal.</li>
                            <li>Xcode, Android Studio.</li>
                            <li>Adobe Animate (formerly Adobe Flash Professional), Adobe Flash Builder, Brackets.</li>
                            <li>Git(hub/lab), JIRA, Trello, Jenkins.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Tools for Business Process:</h3>
                        <ul>
                            <li>Oracle Business Intelligence Enterprise Edition (OBIEE), Oracle Warehouse Builder (OWB).</li>
                            <li>Serena Products.</li>
                            <li>Microsoft SharePoint.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Tools for Offices:</h3>
                        <ul>
                            <li>Microsoft Word.</li>
                            <li>Microsoft PowerPoint.</li>
                            <li>Microsoft Excel.</li>
                            <li>Microsoft Visio.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Tools for Computer Graphics:</h3>
                        <ul>
                            <li>Adobe Photoshop, Adobe Illustrator.</li>
                            <li>CorelDRAW.</li>
                            <li>Autodesk 3ds Max.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Others:</h3>
                        <ul>
                            <li>I can work independently or co-operate with team.</li>
                            <li>I can lead a small team (3-5 members) in developing projects.</li>
                            <li>I can make schedules, summaries, reports, documents and presentations.</li>
                            <li>I can easily adapt to any software development process: Agile/Scrum, Waterfall, Spiral.</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>
        <section id="experience">
            <h2 class="title"><i class="fa fa-file-text-o"></i> Experience</h2>
            <hr>
            <div class="content">
                <ul>
                    <li>
                        <div class="h3"><em>As an Employee</em></div>
                        <ul>
                            <li>
                                <h3>Antoree International Pte. Ltd. (Singapore) | 02.2017 - 10.2018</h3>
                                <ul>
                                    <li>
                                        <h4>System (Web & Mobile Platform) for managing company's end-users and customers' operations.</h4>
                                        <ul>
                                            <li>Position: Technical Lead.</li>
                                            <li>Experience/Skills: Trello, Amazon Web Services, Ubuntu, Git(hub), Jenkins, nginx, Angular, Vue.js, React, Prerender, PHP/Laravel(+Passport+Echo), Socket.IO, MySql, Selenium, HTML, CSS, Javascript, Mailgun, Mailchimp; Mobile application development on iOS platform (Swift) and Android platform (Kotlin).</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>MITEC Joint Stock Company (Vietnam) | 2012 - 2015</h3>
                                <ul>
                                    <li>
                                        <h4>e-Portal (both Internet &amp; Intranet) for the Vietnam Fatherland Front.</h4>
                                        <ul>
                                            <li>Position: Sharepoint/C#.NET developer, UI designer.</li>
                                            <li>Experience/Skills: Microsoft Sharepoint, ASP/C#.NET, Microsoft SQL Server, HTML, CSS, Javascript, Adobe Photoshop.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>System for Statistical Information Collection (SSIC) for General Statistics Office (GSO) of Vietnam.</h4>
                                        <ul>
                                            <li>Position: C#.NET developer, PHP/Javascript developer, UI designer, Technical leader.</li>
                                            <li>Experience/Skills: ASP/C#.NET/DevExpress, PHP/Kohana, Sencha Ext JS, Microsoft SQL Server/SQL Server Replication, HTML, CSS, Javascript, jQuery.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>Business services/processes for Land Transport Authority (LTA) in Singapore.</h4>
                                        <ul>
                                            <li>Position: Onsite IT developer (work at Head office of LTA in Singapore).</li>
                                            <li>Experience/Skills: Serena Products.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>Business services/processes for Lenovo’s Warranty Service in Thailand.</h4>
                                        <ul>
                                            <li>Position: IT developer.</li>
                                            <li>Experience/Skills: Serena Products.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>Data Management, Data Warehouse and Related Application for the State Bank of Vietnam (SG4 Package from Financial Sector Modernization and Information Management System Project - FSMIMS).</h4>
                                        <ul>
                                            <li>Position: IT developer.</li>
                                            <li>Experience/Skills: Oracle Database, Oracle Data Warehouse, Oracle Business Intelligence Enterprise Edition.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>Cyber Corp Ltd. (Vietnam) | 2011 - 2012</h3>
                                <ul>
                                    <li>
                                        <h4>Customer Relation Management (CRM) web application.</h4>
                                        <ul>
                                            <li>Position: PHP developer.</li>
                                            <li>Experience/Skills: PHP, MySQL, HTML, CSS, Javascript, jQuery.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>Goldsoft Ltd. (Vietnam) | 2009 - 2010</h3>
                                <ul>
                                    <li>
                                        <h4>Websites for introducing games.</h4>
                                        <ul>
                                            <li>Position: Web designer.</li>
                                            <li>Experience/Skills: HTML, CSS, Javascript, Adobe Photoshop.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>Flash games.</h4>
                                        <ul>
                                            <li>Position: Flash developer.</li>
                                            <li>Experience/Skills: ActionScript3, Adobe Flash Professional.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="h3"><em>As a Freelancer</em></div>
                        <ul>
                            <li>
                                <h3>Blackcitrus Ops Pty Ltd  (Australia) | 01.2017</h3>
                                <ul>
                                    <li>
                                        <h4>CoinHQ - The Australia's fastest way to purchase bitcoins.</h4>
                                        <ul>
                                            <li>Position: PHP developer.</li>
                                            <li>Experience/Skills: PHP/Kohana, MySQL, Bitcoin, Simplex API, Coinmama API.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>WowSkype (Vietnam) | 01.2017</h3>
                                <ul>
                                    <li>
                                        <h4>Learning Management System (LMS) web application.</h4>
                                        <ul>
                                            <li>Position: PHP developer.</li>
                                            <li>Experience/Skills: PHP/Laravel, MySQL, HTML5, CSS3, Javascript, jQuery, Bootstrap.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>Blackcitrus Ops Pty Ltd  (Australia) | 10-11.2016</h3>
                                <ul>
                                    <li>
                                        <h4>YouExplore - The world's first social travel search engine.</h4>
                                        <ul>
                                            <li>Position: PHP developer.</li>
                                            <li>Experience/Skills: PHP/CodeIgniter, MySQL, HTML5, CSS3, Javascript, jQuery, Bootstrap.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>MDI ASTEC VN Co., Ltd. &amp; 2NF Software Co., Ltd. &amp; Siten JSC (Vietnam) | 05-08.2016</h3>
                                <ul>
                                    <li>
                                        <h4>Billing System web application for Chuo Electric Power Co. (Japanese).</h4>
                                        <ul>
                                            <li>Position: PHP developer.</li>
                                            <li>Experience/Skills: PHP/Laravel, AngularJS, MySQL, HTML5, CSS3, Javascript, jQuery, Bootstrap.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>Antoree International Pte. Ltd. (Singapore) | 09-11.2015</h3>
                                <ul>
                                    <li>
                                        <h4>Learning Management System (LMS) web application.</h4>
                                        <ul>
                                            <li>Position: Team leader, PHP developer.</li>
                                            <li>Experience/Skills: Google Cloud Platform, PHP/Laravel, MySQL, Real-time messaging, HTML5, CSS3, Javascript, jQuery, Bootstrap.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>Starview Vietnam Ltd. | 2014</h3>
                                <ul>
                                    <li>
                                        <h4>Customer Relation Management (CRM) web application.</h4>
                                        <ul>
                                            <li>Position: PHP developer.</li>
                                            <li>Experience/Skills: PHP/vTiger, MySQL.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>Vu Oanh Ltd. (Vietnam) | 2011 - 2012</h3>
                                <ul>
                                    <li>
                                        <h4>Inventory Management web application.</h4>
                                        <ul>
                                            <li>Position: C#.NET developer, UI designer.</li>
                                            <li>Experience/Skills: ASP/C#.NET/LINQ, Microsoft SQL Server, HTML, CSS, Javascript.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>For a small community of Vietnamese businessmen in Czech Republic | 2010 - 2011</h3>
                                <ul>
                                    <li>
                                        <h4>Aukro Mail System – A web application for managing business on Aukro.cz.</h4>
                                        <ul>
                                            <li>Position: C#.NET developer, UI designer.</li>
                                            <li>Experience/Skills: ASP/C#.NET, Microsoft SQL Server, HTML, CSS, Javascript.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>Emotiv Technology Vietnam | 01.2011</h3>
                                <ul>
                                    <li>
                                        <h4>Official website for promoting/selling tickets for the Tour “This is us” of Backstreet Boys in Vietnam.</h4>
                                        <ul>
                                            <li>Position: Flash developer (Select Seats &amp; Buy Tickets Online module).</li>
                                            <li>Experience/Skills: ActionScript3, Adobe Flash Professional.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>
        <section id="education">
            <h2 class="title"><i class="fa fa-graduation-cap"></i> Education</h2>
            <hr>
            <div class="content">
                <ul>
                    <li>
                        <h3>Hanoi University of Science and Technology (HUST) | 2006 - 2011</h3>
                        <ul>
                            <li>
                                <h3>IT Engineer - Field of Computer Science</h3>
                                <ul>
                                    <li>
                                        Course by Department of Computer Science (DCS) - School of Information and Communication Technology (SOICT).
                                    </li>
                                    <li>
                                        Academic record: 
                                        <a href="#" data-toggle="modal" data-target="#modal-download" data-download="#download-academic-record-jpg">
                                            <span class="glyphicon glyphicon-share-alt"></span>
                                        </a>.
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>
        <section id="languages">
            <h2 class="title"><i class="fa fa-comments-o"></i> Languages</h2>
            <hr>
            <div class="content">
                <ul>
                    <li>
                        Vietnamese <em>(native)</em>
                    </li>
                    <li>
                        English <em>(intermediate)</em>
                    </li>
                    <li>
                        French, Japanese <em>(beginner)</em>
                    </li>
                </ul>
            </div>
        </section>
        <section id="favorites">
            <h2 class="title"><i class="fa fa-globe"></i> Favorites</h2>
            <hr>
            <div class="content">
                <ul>
                    <li>
                        Books, music, history, law, human, jogging, cycling, running, blog, basketball.
                    </li>
                    <li>
                        Volunteer/Travel:
                        <ul>
                            <li>
                                Long trip by bicycle | 4-5.2017
                                <ul>
                                    <li>Through two provinces in Vietnam: Khanh Hoa and Phu Yen.</li>
                                    <li>Lived as a local civilian wandering anywhere and still work remotely for the job at company.</li>
                                </ul>
                            </li>
                            <li>
                                Long trip by bicycle | 2-3.2016
                                <ul>
                                    <li>Through three coutries in Indochina: Vietnam, Laos, Cambodia.</li>
                                    <li>The route started from Hanoi City, ended at Mũi Cà Mau and Ho Chi Minh City.</li>
                                </ul>
                            </li>
                            <li>
                                Long trip by bicycle | 5-6.2015
                                <ul>
                                    <li>Cities that were visited on the route: Hà Nội City - Ninh Bình City - Thanh Hóa City - Vinh City - Hà Tĩnh City - Đồng Hới City - Đông Hà City - Huế City - Đà Nẵng City - Hội An City.</li>
                                </ul>
                            </li>
                            <li>
                                Trip to top of Fansipan (Vietnam) - “the Roof of Indochina” | 11.2011
                                <ul>
                                    <li>Held by VNG Corp. - Branch office in Hanoi.</li>
                                </ul>
                            </li>
                            <li>
                                Volunteer in program “Exam Season Support” | 7.2008
                                <ul>
                                    <li>Held by Students’ Association of Hanoi University of Science and Technology.</li>
                                    <li>Deployed at Giap Bat Coach Station.</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</main>
<footer class="rythm-high">
    <div class="wrapper">
        <section id="download">
            <div class="content text-center">
                <a href="#download" data-toggle="modal" data-target="#modal-download"><strong>Download</strong> <i class="fa fa-toggle-down"></i></a>
            </div>
        </section>
        <section id="social">
            <div class="content row">
                <div class="col-xs-12 col-sm-1">
                </div>
                <div class="col-xs-12 col-sm-10">
                    <ul class="list-inline text-center">
                        <li>
                            <a target="_blank" href="http://linhntaim.com/">
                                <i class="fa fa-star"></i> Website
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://www.facebook.com/linhntaim">
                                <i class="fa fa-facebook-official"></i> Facebook
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://twitter.com/linhntaim">
                                <i class="fa fa-twitter"></i> Twitter
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://tumblr.linhntaim.com/">
                                <i class="fa fa-tumblr"></i> Tumblr
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://instagram.com/linhntaim">
                                <i class="fa fa-instagram"></i> Instagram
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://linhntaim.wordpress.com/">
                                <i class="fa fa-wordpress"></i> Wordpress
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://soundcloud.com/linhntaim">
                                <i class="fa fa-soundcloud"></i> SoundCloud
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://www.flickr.com/photos/linhntaim">
                                <i class="fa fa-flickr"></i> Flickr
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://vn.linkedin.com/in/linhntaim">
                                <i class="fa fa-linkedin"></i> LinkedIn
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://plus.google.com/+NguyenTuanLinh1710/about">
                                <i class="fa fa-google-plus"></i> Google+
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://github.com/linhntaim">
                                <i class="fa fa-github"></i> Github
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://en.gravatar.com/linhntaim">
                                <i class="fa fa-vcard-o"></i> Gravatar
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</footer>
<div id="bottom"></div>
<div class="modal fade" id="modal-download" tabindex="-1" role="dialog" aria-labelledby="modal-download-label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title" id="modal-download-label">Download</h2>
            </div>
            <div class="modal-body text-center">
                <div class="row">
                    <div id="download-resume-pdf" class="col-xs-12 col-sm-4">
                        <a target="_blank" href="<?php echo url('download/RESUME_LINHNT_EN.pdf'); ?>">
                            <span class="image"><i class="fa fa-file-pdf-o"></i></span>
                            <span class="name">Resume (PDF)</span>
                        </a>
                    </div>
                    <div id="download-resume-doc" class="col-xs-12 col-sm-4">
                        <a target="_blank" href="<?php echo url('download/RESUME_LINHNT_EN.doc'); ?>">
                            <span class="image"><i class="fa fa-file-word-o"></i></span>
                            <span class="name">Resume (DOC)</span>
                        </a>
                    </div>
                    <div id="download-passport-jpg" class="col-xs-12 col-sm-4">
                        <a target="_blank" href="<?php echo url('download/PASSPORT_LINHNT.jpg'); ?>">
                            <span class="image"><i class="fa fa-file-image-o"></i></span>
                            <span class="name">Passport (JPG)</span>
                        </a>
                    </div>
                    <div id="download-id-card-fron-jpg" class="col-xs-12 col-sm-4">
                        <a target="_blank" href="<?php echo url('download/ID_CARD_FRONT_LINHNT.jpg'); ?>">
                            <span class="image"><i class="fa fa-file-image-o"></i></span>
                            <span class="name">ID Card - Front (JPG)</span>
                        </a>
                    </div>
                    <div id="download-id-card-back-jpg" class="col-xs-12 col-sm-4">
                        <a target="_blank" href="<?php echo url('download/ID_CARD_BACK_LINHNT.jpg'); ?>">
                            <span class="image"><i class="fa fa-file-image-o"></i></span>
                            <span class="name">ID Card - Back (JPG)</span>
                        </a>
                    </div>
                    <div id="download-academic-record-jpg" class="col-xs-12 col-sm-4">
                        <a target="_blank" href="<?php echo url('download/ACADEMIC_RECORD_LINHNT.jpg'); ?>">
                            <span class="choose-me"><i class="fa fa-arrow-down"></i></span>
                            <span class="image"><i class="fa fa-file-image-o"></i></span>
                            <span class="name">Academic Record (JPG)</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-empty" tabindex="-1" role="dialog" aria-labelledby="modal-empty-label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title" id="modal-empty-label"></h2>
            </div>
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="<?php echo url('rythm.js'); ?>"></script>
<script>
    var VARS = {
        MUSIC: '<?php echo url('audio/music.mp3'); ?>',
        URL_VI: '<?php echo url('vi'); ?>',
        URL_EN: '<?php echo url('en'); ?>'
    };
</script>
<script src="<?php echo url('en.js'); ?>"></script>
<script src="<?php echo url('app.min.js'); ?>"></script>
</body>
</html>
