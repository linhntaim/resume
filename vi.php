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
    <meta property="og:description" content="Kỹ năng nghề nghiệp, Kinh nghiệm làm việc, Trình độ học vấn, Khả năng ngoại ngữ, Sở thích cá nhân">
    <meta property="og:url" content="<?php echo fullUrl('vi'); ?>">
    <meta property="og:site_name" content="Nguyen Tuan Linh's Resume">
    <meta property="og:image" content="<?php echo fullUrl('images/avatar.jpg'); ?>">
    <meta property="og:locale" content="vi_VN">
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
                        <a class="page-scroll" href="#skills">Kỹ năng</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#experience">Kinh nghiệm</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#education">Học vấn</a>
                    </li> 
                    <li>
                        <a class="page-scroll" href="#languages">Ngoại ngữ</a>
                    </li> 
                    <li>
                        <a class="page-scroll" href="#favorites">Sở thích</a>
                    </li>
                </ul>
            </li>
            <li class="pull-left-xs">
                <a href="<?php echo url('en'); ?>"><i class="flag flag-gb"></i></a>
            </li>
            <li class="pull-left-xs">
                <a href="<?php echo url('vi'); ?>"><i class="flag flag-vn active"></i></a>
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
                <a href="<?php echo url('en'); ?>"><i class="flag flag-gb"></i></a>
                &nbsp;
                <a href="<?php echo url('vi'); ?>"><i class="flag flag-vn active"></i></a>
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
            <h2 class="title">Nguyện vọng việc làm</h2>
            <div class="content">
                Mong muốn làm việc trong một môi trường chuyên nghiệp, đòi hỏi khả năng chuyên môn cao, có nhiều cơ hội tham gia vào các bài toán (ngày càng) lớn.
            </div>
        </section>
        <section id="details">
            <h2 class="title">Thông tin cá nhân</h2>
            <div class="content">
                <ul class="list-unstyled">
                    <li class="clearfix">
                        <div class="text">
                            Ngày sinh:
                        </div>
                        <div class="value">
                            17/10/1988.
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="text">
                            Giới tính:
                        </div>
                        <div class="value">
                            Nam.
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="text">
                            T/trạng hôn nhân:
                        </div>
                        <div class="value">
                            Độc thân.
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="text">
                            Địa chỉ nhà riêng:
                        </div>
                        <div class="value">
                            Số 2, Ngách 96, Ngõ Lan Bá, Phố Chợ Khâm Thiên, Phường Trung Phụng, Quận Đống Đa, Hà Nội, Việt Nam.
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="text">
                            Địa chỉ hiện tại 1:
                        </div>
                        <div class="value">
                            Phòng 3, Lầu 1, Số 122/8, Đường Phổ Quang, Phường 9, Quận Phú Nhuận, Tp. Hồ Chí Minh, Việt Nam.
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="text">
                            Địa chỉ hiện tại 2:
                        </div>
                        <div class="value">
                            Số 207, Đường Võ Thị Sáu, Phường Tân Định, Quận 3, Tp. Hồ Chí Minh, Việt Nam.
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="text">
                            Thư điện tử:
                        </div>
                        <div class="value">
                            linhnt.aim@outlook.com / linhnt.aim@gmail.com.
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="text">
                            Tài khoản Skype:
                        </div>
                        <div class="value">
                            live:linhnt.aim.
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="text">
                            Điện thoại:
                        </div>
                        <div class="value">
                            <em>Di động:</em> (+84) 975 783 771.<br>
                            <em>Nhà riêng:</em> (+84) 43 5182 840.
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="text">
                            Quốc tịch:
                        </div>
                        <div class="value">
                            Việt Nam.
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
            <h2 class="title"><i class="fa fa-lightbulb-o"></i> Kỹ năng nghề nghiệp</h2>
            <hr>
            <div class="content">
                <ul>
                    <li>
                        <h3>Khả năng lập trình:</h3>
                        <ul>
                            <li>Lập trình cơ bản/chuyên sâu với C/C++.</li>
                            <li>Lập trình ứng dụng trên máy tính/di động với C++, C#, Java, Swift, Kotlin.</li>
                            <li>Lập trình phía server với C#/VisualBasic/ASP.NET.</li>
                            <li>Lập trình phía server với PHP, có thể sử dụng các framework: Laravel (+Passport+Echo+Mix), Wordpress, vTiger, Symfony, CodeIgniter, Kohana.</li>
                            <li>Lập trình phía server với Node.js, có thể sử dụng các framework: Express.</li>
                            <li>Lập trình phía client HTML(5), CSS(3), Javascript, có thể sử dụng các framework: Bootstrap, jQuery, Sencha Ext JS, AngularJS, Angular, Vue.js, React và các thư viện Font.</li>
                            <li>Lập trình Flash/AIR với ActionScript3.</li>
                            <li>Lập trình gửi thông điệp thời gian thực/Lập trình gửi thông báo với Socket.IO, Realtime.co, Firebase, APNs.</li>
                            <li>Lập trình mô phỏng với Processing.</li>
                            <li>Lập trình có sử dụng các API mạng xã hội: Facebook, Instagram, Google.</li>
                            <li>Lập trình có sử dụng: OOP, Design Pattern; phân tích &amp thiết kế sử dụng UML.</li>
                            <li>Viết mã kiểm tra tự động sử dụng: Selenium, CasperJS.</li>
                            <li>Xử lý gửi thư điện tử với Mailgun, MailChimp.</li>
                            <li>Xử lý đăng nhâp một lần sử dụng Cookie.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Hệ quản trị Cơ sở dữ liệu:</h3>
                        <ul>
                            <li>Microsoft SQL Server.</li>
                            <li>MySQL/MariaDB.</li>
                            <li>Oracle Database.</li>
                            <li>Redis.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Máy chủ Web:</h3>
                        <ul>
                            <li>Internet Information Services (IIS).</li>
                            <li>Apache.</li>
                            <li>NGINX.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Hệ điều hành:</h3>
                        <ul>
                            <li>Microsoft Windows, Microsoft Windows Server.</li>
                            <li>Ubuntu, CentOS, Fedora.</li>
                            <li>macOS.</li>
                            <li>Microsoft Windows Phone/Mobile, iOS, Android.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Dịch vụ tính toán đám mây:</h3>
                        <ul>
                            <li>Amazon Web Services (AWS).</li>
                            <li>Google Cloud Platforms (GCP).</li>
                            <li>Google Cloud Platforms (GCP).</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Công cụ lập trình:</h3>
                        <ul>
                            <li>Microsoft Visual Studio.</li>
                            <li>JetBrains PhpStorm, Netbeans, Eclipse, Notepad++, console/terminal.</li>
                            <li>Xcode, Android Studio.</li>
                            <li>Adobe Animate (formerly Adobe Flash Professional), Adobe Flash Builder, Brackets.</li>
                            <li>Git(hub/lab), JIRA, Trello, Jenkins.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Khai thác nghiệp vụ:</h3>
                        <ul>
                            <li>Oracle Business Intelligence Enterprise Edition (OBIEE), Oracle Warehouse Builder (OWB).</li>
                            <li>Serena Products.</li>
                            <li>Microsoft SharePoint.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Tin học văn phòng:</h3>
                        <ul>
                            <li>Microsoft Word.</li>
                            <li>Microsoft PowerPoint.</li>
                            <li>Microsoft Excel.</li>
                            <li>Microsoft Visio.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Xử lý đồ họa:</h3>
                        <ul>
                            <li>Adobe Photoshop, Adobe Illustrator.</li>
                            <li>CorelDRAW.</li>
                            <li>Autodesk 3ds Max.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Ngoài ra:</h3>
                        <ul>
                            <li>Có thể làm việc độc lập hoặc theo nhóm.</li>
                            <li>Có thể lãnh đạo một nhóm nhỏ (3-5 thành viên) trong việc phát triển dự án.</li>
                            <li>Có khả năng lập lịch làm việc, tổng hợp nội dung, báo cáo, viết tài liệu và làm thuyết trình.</li>
                            <li>Có thể thích ứng với bất cứ mô hình phát triển phần mềm nào như: Agile/Scrum, Waterfall, Spiral.</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>
        <section id="experience">
            <h2 class="title"><i class="fa fa-file-text-o"></i> Kinh nghiệm làm việc</h2>
            <hr>
            <div class="content">
                <ul>
                    <li>
                        <div class="h3"><em>Với tư cách Nhân viên công ty</em></div>
                        <ul>
                            <li>
                                <h3>Công ty Giáo dục và Đào tạo Antoree International Pte. Ltd. (Singapore) | 02.2017 - 11.2018</h3>
                                <ul>
                                    <li>
                                        <h4>Hệ thống (nền tảng Web và Di động) để quản lý hoạt động của các thành viên cũng như khách hàng của công ty.</h4>
                                        <ul>
                                            <li>Vị trí: Technical Lead, Full-stack developer.</li>
                                            <li>Kinh nghiệm/Kỹ năng: Trello, Amazon Web Services, Ubuntu, Git(hub), Jenkins, nginx, Angular, Vue.js, React, Prerender, PHP/Laravel(+Passport+Echo), Socket.IO, MySql, Redis, Selenium, HTML, CSS, Javascript, Mailgun, MailChimp; Lập trình ứng dụng di động trên nền tảng iOS (Swift) và Android (Kotlin).</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>Công ty Cổ phần Ứng dụng Khoa học và Công nghệ MITEC (Việt Nam) | 10.2012 - 05.2015</h3>
                                <ul>
                                    <li>
                                        <h4>Phát triển Cổng thông tin điện tử (Internet và Intranet) cho Ủy ban Trung ương Mặt trận Tổ quốc Việt Nam.</h4>
                                        <ul>
                                            <li>Vị trí: Sharepoint/C#.NET developer, UI designer.</li>
                                            <li>Kinh nghiệm/Kỹ năng: Microsoft Sharepoint, ASP/C#.NET, Microsoft SQL Server, HTML, CSS, Javascript, Adobe Photoshop.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>Phát triển Hệ thống Phần mềm thu thập thông tin thống kê (SSIC) cho Tổng cục Thống kê (GSO).</h4>
                                        <ul>
                                            <li>Vị trí: C#.NET developer, PHP/Javascript developer, UI designer, Technical leader.</li>
                                            <li>Kinh nghiệm/Kỹ năng: ASP/C#.NET/DevExpress, PHP/Kohana, Sencha Ext JS, Microsoft SQL Server/SQL Server Replication, HTML, CSS, Javascript, jQuery.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>Phát triển, xây dựng quy trình/dịch vụ đăng kiểm cho Land Transport Authority (LTA) - Singapore.</h4>
                                        <ul>
                                            <li>Vị trí: Onsite IT developer (làm việc tại Trụ sở LTA tại Singapore).</li>
                                            <li>Kinh nghiệm/Kỹ năng: Serena Products.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>Phát triển, xây dựng quy trình/dịch vụ Bảo hành cho hãng máy tính Lenovo tại Thái Lan.</h4>
                                        <ul>
                                            <li>Vị trí: IT developer.</li>
                                            <li>Kinh nghiệm/Kỹ năng: Serena Products.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>Dự án Quản trị cơ sở dữ liệu, Kho dữ liệu và Các ứng dụng liên quan cho Ngân hàng Nhà nước (Gói thầu SG4 thuộc Dự án Hệ thống thông tin quản lý và Hiện đại hóa ngân hàng - FSMIMS).</h4>
                                        <ul>
                                            <li>Vị trí: IT developer.</li>
                                            <li>Kinh nghiệm/Kỹ năng: Oracle Database, Oracle Data Warehouse, Oracle Business Intelligence Enterprise Edition.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>Cyber Corp Ltd. (Vietnam) | 2011 - 2012</h3>
                                <ul>
                                    <li>
                                        <h4>Phát triển Phần mềm thương mại trực tuyến (web-based) CRM – Customer Relation Management – hỗ trợ quản lý chăm sóc khách hàng.</h4>
                                        <ul>
                                            <li>Vị trí: PHP developer.</li>
                                            <li>Kinh nghiệm/Kỹ năng: PHP, MySQL, HTML, CSS, Javascript, jQuery.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>Goldsoft Ltd. (Vietnam) | 2009 - 2010</h3>
                                <ul>
                                    <li>
                                        <h4>Thiết kế website giới thiệu game.</h4>
                                        <ul>
                                            <li>Vị trí: Web designer.</li>
                                            <li>Kinh nghiệm/Kỹ năng: HTML, CSS, Javascript, Adobe Photoshop.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>Lập trình game flash.</h4>
                                        <ul>
                                            <li>Vị trí: Flash developer.</li>
                                            <li>Kinh nghiệm/Kỹ năng: ActionScript3, Adobe Flash Professional.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="h3"><em>Với tư cách Người làm việc tự do</em></div>
                        <ul>
                            <li>
                                <h3>Blackcitrus Ops Pty Ltd  (Úc) | 01.2017</h3>
                                <ul>
                                    <li>
                                        <h4>CoinHQ - Trang mua bitcoin trực tuyến nhanh nhất tại Úc.</h4>
                                        <ul>
                                            <li>Vị trí: PHP developer.</li>
                                            <li>Kinh nghiệm/Kỹ năng: PHP/Kohana, MySQL, Bitcoin, Simplex API, Coinmama API.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>WowSkype (Việt Nam) | 01.2017</h3>
                                <ul>
                                    <li>
                                        <h4>Phần mềm trực tuyến (web-based) hỗ trợ quản lý dạy và học tiếng Anh.</h4>
                                        <ul>
                                            <li>Vị trí: PHP developer.</li>
                                            <li>Kinh nghiệm/Kỹ năng: PHP/Laravel, MySQL, HTML5, CSS3, Javascript, jQuery, Bootstrap.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>Blackcitrus Ops Pty Ltd  (Úc) | 10-11.2016</h3>
                                <ul>
                                    <li>
                                        <h4>YouExplore - Mạng xã hội du lịch.</h4>
                                        <ul>
                                            <li>Vị trí: PHP developer.</li>
                                            <li>Kinh nghiệm/Kỹ năng: PHP/CodeIgniter, MySQL, HTML5, CSS3, Javascript, jQuery, Bootstrap.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>MDI ASTEC VN Co., Ltd. &amp; 2NF Software Co., Ltd. &amp; Siten JSC (Việt Nam) | 05-08.2016</h3>
                                <ul>
                                    <li>
                                        <h4>Hệ thống Quản lý hóa đơn điện cho Công ty Điện lực Chuo (Nhật Bản).</h4>
                                        <ul>
                                            <li>Vị trí: PHP developer.</li>
                                            <li>Kinh nghiệm/Kỹ năng: PHP/Laravel, AngularJS, MySQL, HTML5, CSS3, Javascript, jQuery, Bootstrap.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>Công ty Giáo dục và Đào tạo Antoree International Pte. Ltd. (Singapore) | 09-12.2015</h3>
                                <ul>
                                    <li>
                                        <h4>Phần mềm trực tuyến (web-based) LMS – Learning Management System – hỗ trợ quản lý đào tạo.</h4>
                                        <ul>
                                            <li>Vị trí: Team leader, PHP developer.</li>
                                            <li>Kinh nghiệm/Kỹ năng: Google Cloud Platform, PHP/Laravel, MySQL, Real-time messaging, HTML5, CSS3, Javascript, jQuery, Bootstrap.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>Công ty TNHH Starview Vietnam | 2014</h3>
                                <ul>
                                    <li>
                                        <h4>Phần mềm CRM – Customer Relation Management – hỗ trợ quản lý chăm sóc khách hàng.</h4>
                                        <ul>
                                            <li>Vị trí: PHP developer.</li>
                                            <li>Kinh nghiệm/Kỹ năng: PHP/vTiger, MySQL.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>Công ty TNHH Vũ Oanh (Việt Nam) | 2011 - 2012</h3>
                                <ul>
                                    <li>
                                        <h4>Phần mềm trực tuyến (web-based) hỗ trợ quản lý vật tư tại các cửa hàng.</h4>
                                        <ul>
                                            <li>Vị trí: C#.NET developer, UI designer.</li>
                                            <li>Kinh nghiệm/Kỹ năng: ASP/C#.NET/LINQ, Microsoft SQL Server, HTML, CSS, Javascript.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>Cho một cộng đồng kinh doanh nhỏ ở Cộng hòa Séc | 2010 - 2011</h3>
                                <ul>
                                    <li>
                                        <h4>Aukro Mail System – Phần mềm trực tuyến (web-based) hỗ trợ quản lý kinh doanh trên trang thương mại điện tử Aukro.cz.</h4>
                                        <ul>
                                            <li>Vị trí: C#.NET developer, UI designer.</li>
                                            <li>Kinh nghiệm/Kỹ năng: ASP/C#.NET, Microsoft SQL Server, HTML, CSS, Javascript.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>Công ty Emotiv Technology Vietnam | 01.2011</h3>
                                <ul>
                                    <li>
                                        <h4>Trang web chính thức quảng bá và bán vé cho tour diễn “This is us” của ban nhạc Backstreet Boys tại Việt Nam.</h4>
                                        <ul>
                                            <li>Vị trí: Flash developer (module Đặt Chỗ và Mua Vé Trực Tuyến).</li>
                                            <li>Kinh nghiệm/Kỹ năng: ActionScript3, Adobe Flash Professional.</li>
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
            <h2 class="title"><i class="fa fa-graduation-cap"></i> Trình độ học vấn</h2>
            <hr>
            <div class="content">
                <ul>
                    <li>
                        <h3>Đại học Bách khoa Hà Nội (HUST) | 2006 - 2011</h3>
                        <ul>
                            <li>
                                <h3>Kỹ sư Công nghệ Thông tin - Chuyên ngành Khoa học Máy tính</h3>
                                <ul>
                                    <li>
                                        Thuộc Bộ môn Khoa học Máy tính (DCS) - Viện Công nghệ Thông tin và Truyền thông (SOICT).
                                    </li>
                                    <li>
                                        Bảng điểm: 
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
            <h2 class="title"><i class="fa fa-comments-o"></i> Khả năng ngoại ngữ</h2>
            <hr>
            <div class="content">
                <ul>
                    <li>
                        Tiếng Việt <em>(bản địa)</em>
                    </li>
                    <li>
                        Tiếng Anh <em>(mức độ trung bình)</em>
                    </li>
                    <li>
                        Tiếng Pháp, tiếng Nhật <em>(mức độ dành cho người bắt đầu)</em>
                    </li>
                </ul>
            </div>
        </section>
        <section id="favorites">
            <h2 class="title"><i class="fa fa-globe"></i> Sở thích cá nhân</h2>
            <hr>
            <div class="content">
                <ul>
                    <li>
                        Đọc sách, Âm nhạc, Lịch sử, Luật pháp, Con người, Đi bộ, Đạp xe, Chạy bộ, Viết blog, Bóng rổ.
                    </li>
                    <li>
                        Hoạt động Tình nguyện/Du lịch:
                        <ul>
                            <li>
                                Hành trình xe đạp (chặng dài) | 4-5.2018
                                <ul>
                                    <li>Xuyên suốt địa phận 2 tỉnh ở Việt Nam: Khánh Hòa và Phú Yên.</li>
                                    <li>Sống như người dân địa phương lang thang đây đó nhưng vẫn làm việc ở công ty từ xa.</li>
                                </ul>
                            </li>
                            <li>
                                Hành trình xe đạp (chặng dài) | 2-3.2016
                                <ul>
                                    <li>Qua 3 nước Đông Dương: Việt Nam, Lào, Cam-pu-chia.</li>
                                    <li>Hành trình xuất phát từ Hà Nội, điểm kết thúc tại Mũi Cà Mau và Tp. Hồ Chí Minh.</li>
                                </ul>
                            </li>
                            <li>
                                Hành trình xe đạp (chặng dài) | 5-6.2015
                                <ul>
                                    <li>Hành trình đi qua các thành phố: Hà Nội - Ninh Bình - Thanh Hóa - Vinh - Hà Tĩnh - Đồng Hới - Đông Hà - Huế - Đà Nẵng - Hội An.</li>
                                </ul>
                            </li>
                            <li>
                                Chinh phục đỉnh Phan-xi-păng (Việt Nam) - “Nóc nhà Đông Dương” | 11.2011
                                <ul>
                                    <li>Tổ chức bởi Công ty VNG Corp. - Chi nhánh Hà Nội.</li>
                                </ul>
                            </li>
                            <li>
                                Tình nguyện viên trong chương trình “Tiếp sức Mùa thi” | 7.2008
                                <ul>
                                    <li>Tổ chức bởi Hội sinh viên Đại học Bách khoa Hà Nội.</li>
                                    <li>Triển khai tại Bến xe Giáp Bát.</li>
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
                <a href="#download" data-toggle="modal" data-target="#modal-download"><strong>Tải xuống</strong> <i class="fa fa-toggle-down"></i></a>
            </div>
        </section>
        <section id="social">
            <div class="content row">
                <div class="col-xs-12 col-sm-1">
                </div>
                <div class="col-xs-12 col-sm-10">
                    <ul class="list-inline text-center">
                        <li>
                            <a target="_blank" href="https://linhntaim.com/">
                                <i class="fa fa-star"></i> Website
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/linhntaim">
                                <i class="fa fa-facebook-official"></i> Facebook
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://twitter.com/linhntaim">
                                <i class="fa fa-twitter"></i> Twitter
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://tumblr.linhntaim.com/">
                                <i class="fa fa-tumblr"></i> Tumblr
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://instagram.com/linhntaim">
                                <i class="fa fa-instagram"></i> Instagram
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://linhntaim.wordpress.com/">
                                <i class="fa fa-wordpress"></i> Wordpress
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://soundcloud.com/linhntaim">
                                <i class="fa fa-soundcloud"></i> SoundCloud
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://vn.linkedin.com/in/linhntaim">
                                <i class="fa fa-linkedin"></i> LinkedIn
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://github.com/linhntaim">
                                <i class="fa fa-github"></i> Github
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://en.gravatar.com/linhntaim">
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
                <h2 class="modal-title" id="modal-download-label">Tải xuống</h2>
            </div>
            <div class="modal-body text-center">
                <div class="row">
                    <div id="download-resume-pdf" class="col-xs-12 col-sm-4">
                        <a target="_blank" href="<?php echo url('download/RESUME_LINHNT_VI.pdf'); ?>">
                            <span class="image"><i class="fa fa-file-pdf-o"></i></span>
                            <span class="name">Resume (PDF)</span>
                        </a>
                    </div>
                    <div id="download-resume-doc" class="col-xs-12 col-sm-4">
                        <a target="_blank" href="<?php echo url('download/RESUME_LINHNT_VI.doc'); ?>">
                            <span class="image"><i class="fa fa-file-word-o"></i></span>
                            <span class="name">Resume (DOC)</span>
                        </a>
                    </div>
                    <div id="download-passport-jpg" class="col-xs-12 col-sm-4">
                        <a target="_blank" href="<?php echo url('download/PASSPORT_LINHNT.jpg'); ?>">
                            <span class="image"><i class="fa fa-file-image-o"></i></span>
                            <span class="name">Hộ chiếu (JPG)</span>
                        </a>
                    </div>
                    <div id="download-id-card-fron-jpg" class="col-xs-12 col-sm-4">
                        <a target="_blank" href="<?php echo url('download/ID_CARD_FRONT_LINHNT.jpg'); ?>">
                            <span class="image"><i class="fa fa-file-image-o"></i></span>
                            <span class="name">CMTND - Mặt trước (JPG)</span>
                        </a>
                    </div>
                    <div id="download-id-card-back-jpg" class="col-xs-12 col-sm-4">
                        <a target="_blank" href="<?php echo url('download/ID_CARD_BACK_LINHNT.jpg'); ?>">
                            <span class="image"><i class="fa fa-file-image-o"></i></span>
                            <span class="name">CMTND - Mặt sau (JPG)</span>
                        </a>
                    </div>
                    <div id="download-academic-record-jpg" class="col-xs-12 col-sm-4">
                        <a target="_blank" href="<?php echo url('download/ACADEMIC_RECORD_LINHNT.jpg'); ?>">
                            <span class="choose-me"><i class="fa fa-arrow-down"></i></span>
                            <span class="image"><i class="fa fa-file-image-o"></i></span>
                            <span class="name">Bảng điểm đại học (JPG)</span>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="<?php echo url('rythm.js'); ?>"></script>
<script>
    var VARS = {
        MUSIC: '<?php echo url('audio/music.mp3'); ?>',
        URL_VI: '<?php echo url('vi'); ?>',
        URL_EN: '<?php echo url('en'); ?>'
    };
</script>
<script src="<?php echo url('vi.js'); ?>"></script>
<script src="<?php echo url('app.min.js'); ?>"></script>
</body>
</html>
