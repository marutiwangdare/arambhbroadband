<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Arambh Broadband Enterprises</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Custom -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- favicon Icon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- CSS Plugins -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <style>
    .comparison {
        max-width: 1800px;
        font-family: 'Roboto Slab', serif;
        margin: 0 auto;
        text-align: center;
        padding: 10px;
        align: center;
    }

    .comparison table {
        width: 100%;
        border-spacing: 0;
        table-layout: fixed;
        border-bottom: 1px solid;
        text-align: center !important;
    }

    .comparison td,
    .comparison th {
        font-size: 20px;
        empty-cells: show;
        padding: 15px;
        text-align: center !important;
    }

    .compare-heading {
        font-size: 30px;
        font-weight: bold !important;
        text-align: center !important;
        border-bottom: 0 !important;
        padding-top: 10px !important;
    }

    .comparison tbody tr:nth-child(odd) {
        display: none;
    }

    .comparison .compare-row {
        background: #F5F5F5;
    }

    .comparison .compare-row1 {
        background: white;
    }

    .comparison .tickblue {
        color: #0078C1;
        font-size: 15px;
    }

    .comparison .tickgreen {
        color: #009E2C;
        font-size: 18px;
    }

    .comparison .tickred {
        color: #f51515;
        font-size: 18px;
    }

    .comparison th {
        font-weight: normal;
        padding: 0;
        border-bottom: 1px solid;
    }

    .comparison tr td:first-child {
        text-align: left;
    }

    .comparison .qbse,
    .comparison .qbo,
    .comparison .tl {
        color: #FFF;
        padding: 10px;
        font-size: 13px;
        border-right: 1px solid black;
        border-bottom: 0;
    }

    .comparison .tl2 {
        border-right: 0;
    }

    .comparison .qbse {
        background: #0078C1;
        border-top-left-radius: 3px;
        border-left: 1px;
    }

    .comparison .qbo {
        background: #d7232d;
        border-top-right-radius: 3px;
        border-right: 1px;
    }

    .comparison .price-info {
        padding: 5px 15px 15px 15px;
    }

    .comparison .price-was {
        color: #999;
        text-decoration: line-through;
    }

    .comparison .price-now,
    .comparison .price-now span {
        color: #ff5406;
    }

    .comparison .price-now span {
        font-size: 32px;
    }

    .comparison .price-small {
        font-size: 18px !important;
        position: relative;
        top: -11px;
        left: 2px;
    }

    .comparison .price-buy {
        background: #ff5406;
        padding: 10px 20px;
        font-size: 12px;
        display: inline-block;
        color: #FFF;
        text-decoration: none;
        border-radius: 3px;
        text-transform: uppercase;
        margin: 5px 0 10px 0;
    }

    .comparison .price-try {
        font-size: 12px;
    }

    .comparison .price-try a {
        color: #202020;
    }

    @media (max-width: 767px) {

        .comparison td:first-child,
        .comparison th:first-child {
            display: none;
        }

        .comparison tbody tr:nth-child(odd) {
            display: table-row;
            background: #F7F7F7;
        }

        .comparison .row {
            background: #FFF;
        }

        .comparison td,
        .comparison th {
            border: 1px solid;
        }

        .price-info {
            border-top: 0 !important;
        }
    }

    @media (max-width: 639px) {
        .comparison .price-buy {
            padding: 5px 10px;
        }

        .comparison td,
        .comparison th {
            padding: 10px 5px;
        }

        .comparison .hide-mobile {
            display: none;
        }

        .comparison .price-now span {
            font-size: 16px;
        }

        .comparison .price-small {
            font-size: 16px !important;
            top: 0;
            left: 0;
        }

        .comparison .qbse,
        .comparison .qbo {
            font-size: 12px;
            padding: 10px 5px;
        }

        .comparison .price-buy {
            margin-top: 10px;
        }

        .compare-heading {
            font-size: 13px;
        }
    }

    .compare-row {
        font-size: 20px;
        empty-cells: show;
        padding: 15px;
        text-align: center !important;
    }

    .compare-head {
        background: #d7232d;
    }

    .round1 {
        background: hsl(0, 0%, 100%) none repeat scroll 0 0;
        border: none;
        border-radius: 400px;
        display: table;
        margin: 0 auto;
        padding: 10px;
    }

    .round1>h3 {
        font-size: 26px;
        font-weight: 700;
        line-height: 15px;
        padding: 15px 15px 20px;
        display: inline;
    }

    .round1>h4 {
        font-size: 26px;
        font-weight: 700;
        line-height: 15px;
        padding: 15px 15px 15px;
        display: inline;
    }

    .price_month1 {
        background: #d7232d;
        padding: 10px 0;
    }

    .comp-back {
        background: #F5F5F5;
    }

    @media (max-width: 767px) {
        .comparison .row {
            background: unset;
        }

        .comp-back {
            background: unset;
        }

        .price-col-margin-top {
            margin-top: 10px;
        }
        .testi_detail {
            display: flex;
            flex-direction: column;
        }
        .testi_img {
            width: 100%;
        }
        .testi-text {
            text-align: center;
            float: unset;
            width: 100%;
        }

    }
    .present {
    text-align: "left";
    }
    .section_heading .bottom_head  h2::after {
        content: "";
    }
    
    </style>
</head>

<body>
    <?php include('header.php') ?>
    <section id="home" class="top_banner_bg secondary-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top_banner">
                    </div>
                    <div class="col-md-12">
                        <div class="present">
                            <h1  style="/*font-size:65px;*/"><b>Arambh Broadband </b></h1>
                            <h1 style="margin-top:100px;" align="center">Uninterrupted And Unlimited Internet With
                                Superfast Speed And
                                <span style="font-size:60px;color:#f6b10e"><b>Service</b>.</span>
                            </h1>
                        </div>
                        </br></br></br></br></br></br></br></br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="primary-bg" id="about">
         <div class=" container">
        <div class="row">
            <div class="col-md-12">
                <div class="section_heading">
                    <h2> ABOUT US </h2>
                    <h4> Looking for Broadband Providers in Aundh, Arambh Broadband aims at providing <span
                            style="color:#ab0202;"><b>high speed</b></span>, reliable, uninterrupted, unlimited
                        broadband service at
                        affordable rates to residential and corporate clients.
                        </br></br>We provide <span style="color:#ab0202;"><b>Ultra-High Speed</b></span> broadband
                        service, with the
                        <span style="color:#ab0202;"><b>fiber cable</b></span> reaching your neighborhood. The result,
                        Arambh offers
                        super lightning speed plans starting from 50 Mbps and soaring all the way to 300 Mbps. Choices
                        are available
                        between <span style="color:#ab0202;"><b>50 Mbps, 100 Mbps, 150 Mbps </b></span> and <span
                            style="color:#ab0202;"><b>300 Mbps</b></span> also, which is enough to download a movie in
                        flash. With
                        super high speeds, Arambh gives you the “Bandwidth for More”. Faster Speeds mean More
                        Entertainment, More
                        Work, More Productivity. More Time. More Fun.
                    </h4>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="services" class="padding_bottom_none our_service_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_heading section_heading_2">
                        <h2> Our Services </h2>
                        <h4>We offer multiple options for your Internet requirements. Based on your specific needs,
                            select from
                            Wi-Fi, Broadband, Lease Line options.
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row col-md-12 pull-center">
                <div class="services_detail">
                    <div class="col-md-4 pull-left">
                        <li>
                            <span><i style="font-size:40px;" class="fa fa-wifi" aria-hidden="true"></i></span>
                            <h5 style="margin-top:30px;"><b> Wi-Fi</b> </h5>
                            <p></br>Looking to access multiple devices, You probably have a few Wi-Fi capable smart
                                devices, PC's,
                                Tabs
                                with you and around. A smart TV, Gaming console coming soon to you!!! Will your old,
                                slow, lazy
                                broadband connection able to handle all these? Probably Not!!! Time to Switch
                            </p>
                        </li>
                    </div>
                </div>
                <div class="services_detail">
                    <div class="col-md-4 pull-left">
                        <li>
                            <span><i style="font-size:40px;" class="fa fa-signal" aria-hidden="true"></i></span>
                            <h5 style="margin-top:30px;">Broadband</h5>
                            <p></br>Do you know the trust, Uploading speed of you internet id far lesser than the
                                downloading speed.
                                Do
                                no trust us, do a speed test and check your self. When you switch to Arambh, your upload
                                happens at same
                                speed at download. So no wait while uploading videos to Facebook or Youtube. Happy ahh!!
                            </p>
                        </li>
                    </div>
                </div>
                <div class="services_detail">
                    <div class="col-md-4 pull-left">
                        <li>
                            <span><img src="images/lan1.png" alt="logoimage" style="height:40px; width:45px;"></span>
                            <h5 style="margin-top:30px;">Leased Line</h5>
                            <p></br>Are you a business which requires super fast speed and constant internet
                                connection!!! You need
                                dedicated speed for your organization!!! You search for dedicated Lease Line provider in
                                Aundh ends
                                here. Talk to us for customized offers and plans for any Lease Line internet
                                requirement.
                            </p>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </br>
    <section id="specifications" class="price_table_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_heading section_heading_2">
                        <h2> Technical Specifications </h2>
                    </div>
                </div>
            </div>
            <div class="comparison">
                <div class="row comp-back">
                    <div class="col-md-4">
                        <div class="row" style="background-color:#d7232d; font-size:30px;">
                            <div class="col-md-12">
                                <div class="price_month1">
                                    <span class="round1" style="background:none">
                                        <h3> Broadband Plans </h3>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                Connection Category
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                Guaranteed upload/download speeds
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                Shared Speed
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                Fully Unlimited Use
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                Lowest Latency
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                Personalized Support 24*7*365
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                Network Handling Capacity
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                Connection Security
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                Monitoring system
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                Open Peering </br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 price-col-margin-top">
                        <div class="row" style="background-color:#d7232d; font-size:30px;">
                            <div class="col-md-12 ">
                                <div class="price_month1">
                                    <span class="round1">
                                        <h3>
                                            Commercial
                                        </h3>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <div><span class="tickblue">Copper/CAT5</span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <div class="tickred">✕</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <div><span class="tickgreen">✔</span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <div><span class="tickgreen">✔</span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <div class="tickred">✕</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <div><span class="tickgreen">✔</span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                Upto 100Mbps
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <div class="tickred">✕</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <div class="tickred">✕</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <div><span class="tickgreen">✔</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 price-col-margin-top">
                        <div class="row" style="background-color:#d7232d; font-size:30px;">
                            <div class="col-md-12 ">
                                <div class="price_month1">
                                    <span class="round1">
                                        <h3>
                                            Corporate
                                        </h3>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <div><span class="tickblue">FTTB/CAT6</span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <div class="tickred">✕</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <div class="tickred">✕</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <div><span class="tickgreen">✔</span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <div><span class="tickgreen">✔</span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <div><span class="tickgreen">✔</span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                Upto 100Mbps
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <div><span class="tickgreen">✔</span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <div class="tickred">✕</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <div><span class="tickgreen">✔</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <table border="1px; border-color:black" style="1500px;">
                  <thead align="">
                     <tr>
                        <th class="compare-heading"
                           style="background-color:#d7232d; font-size:30px; border-right:solid 30px white;">
                           Broadband </br>
                           Plans
                           </br></br>
                        </th>
                        <th align="center" class="compare-heading"
                           style="background-color:#d7232d; border-right:solid 30px white;">
                           <div class="price_month">
                              <span class="round">
                                 <h3>
                                    Commercial
                                 </h3>
                              </span>
                           </div>
                        </th>
                        <th class="compare-heading" style="background-color:#d7232d;">
                           <div class="price_month">
                              <span class="round">
                                 <h3>
                                    Corporate
                                 </h3>
                              </span>
                           </div>
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td></td>
                        <td colspan="4">Connection Category</td>
                     </tr>
                     <tr class="compare-row">
                        <td style="border-right:solid 30px white;">Connection Category</td>
                        <td style="border-right:solid 30px white;"><span class="tickblue">Copper/CAT5</span></td>
                        <td>
                           <span class="tickblue">
                              FTTB/CAT6
                        </td>
                     </tr>
                     <tr>
                     <td>&nbsp;</td>
                     <td colspan="4">Guaranteed upload/download speeds</td>
                     </tr>
                     <tr class="compare-row1">
                     <td style="border-right:solid 30px white;">Guaranteed upload/download speeds </td>
                     <td style="border-right:solid 30px white;" class="tickred">✕</td>
                     <td class="tickred">✕</td>
                     </tr>
                     <tr>
                     <td>&nbsp;</td>
                     <td colspan="4">Shared Speed</td>
                     </tr>
                     <tr class="compare-row">
                     <td style="border-right:solid 30px white;">Shared Speed</td>
                     <td style="border-right:solid 30px white;"><span class="tickgreen">✔</span></td>
                     <td class="tickred">✕</td>
                     </tr>
                     <tr>
                     <td>&nbsp;</td>
                     <td colspan="4">Fully Unlimited Use</td>
                     </tr>
                     <tr class="compare-row1">
                     <td style="border-right:solid 30px white;">Fully Unlimited Use</td>
                     <td style="border-right:solid 30px white;"><span class="tickgreen">✔</span></td>
                     <td><span class="tickgreen">✔</span></td>
                     </tr>
                     <tr>
                     <td>&nbsp;</td>
                     <td colspan="4">Lowest Latency</td>
                     </tr>
                     <tr class="compare-row">
                     <td style="border-right:solid 30px white;">Lowest Latency</td>
                     <td style="border-right:solid 30px white;" class="tickred">✕</td>
                     <td><span class="tickgreen">✔</span></td>
                     </tr>
                     <tr>
                     <td>&nbsp;</td>
                     <td colspan="4">Personalized Support 24*7*365 </td>
                     </tr>
                     <tr class="compare-row1">
                     <td style="border-right:solid 30px white;">Personalized Support 24*7*365</td>
                     <td style="border-right:solid 30px white;"><span class="tickgreen">✔</span></td>
                     <td><span class="tickgreen">✔</span></td>
                     </tr>
                     <tr>
                     <td>&nbsp;</td>
                     <td colspan="4">Network Handling Capacity</td>
                     </tr>
                     <tr class="compare-row">
                     <td style="border-right:solid 30px white;">Network Handling Capacity</td>
                     <td style="border-right:solid 30px white;" class="tickblue">Upto 100Mbps</td>
                     <td class="tickblue">Upto 100Mbps</td>
                     </tr>
                     <tr>
                     <td>&nbsp;</td>
                     <td colspan="4">Connection Security</td>
                     </tr>
                     <tr class="compare-row1">
                     <td style="border-right:solid 30px white;">Connection Security</td>
                     <td style="border-right:solid 30px white;" class="tickred">✕</td>
                     <td><span class="tickgreen">✔</span></td>
                     </tr>
                     <tr>
                     <td>&nbsp;</td>
                     <td colspan="4">Monitoring system</td>
                     </tr>
                     <tr class="compare-row">
                     <td style="border-right:solid 30px white;">Monitoring system</td>
                     <td style="border-right:solid 30px white;" class="tickred">✕</td>
                     <td class="tickred">✕</td>
                     </tr>
                     <tr>
                     <td>&nbsp;</td>
                     <td colspan="4">Open Peering</td>
                     </tr>
                     <tr class="compare-row1">
                     <td style="border-right:solid 30px white;">Open Peering</td>
                     <td style="border-right:solid 30px white;"><span class="tickgreen">✔</span></td>
                     <td><span class="tickgreen">✔</span></td>
                     </tr>
                  </tbody>
               </table>
              -->
            </div>
        </div>
    </section>

    </br>
    <section id="specifications" class="price_table_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_heading section_heading_2">
                        <h2> Service Specifications </h2>
                    </div>
                </div>
            </div>
            <div class="comparison">
                <div class="row comp-back">
                    <div class="col-md-4">
                        <div class="row" style="background-color:#d7232d; font-size:30px;">
                            <div class="col-md-12">
                                <div class="price_month1">
                                    <span class="round1" style="background:none">
                                        <h3> Broadband Plans </h3>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                Complaints Response Time
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                Static IP charges/Month
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                Service request
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                Rewiring Charges
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                Location Shifting charges
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 price-col-margin-top">
                        <div class="row" style="background-color:#d7232d; font-size:30px;">
                            <div class="col-md-12 ">
                                <div class="price_month1">
                                    <span class="round1">
                                        <h3>
                                            Commercial
                                        </h3>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <span class="tickblue">24 working hours</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <span class="tickblue">Rs. 1770</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <span class="tickblue">CS</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <span class="tickblue">To be Paid</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <span class="tickblue">To be Paid</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 price-col-margin-top">
                        <div class="row" style="background-color:#d7232d; font-size:30px;">
                            <div class="col-md-12 ">
                                <div class="price_month1">
                                    <span class="round1">
                                        <h3>
                                            Corporate
                                        </h3>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <span class="tickblue">12 working hours</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <span class="tickblue">Rs. 1770</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <span class="tickblue">CS</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <span class="tickblue">To be Paid</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                <span class="tickblue">To be Paid</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
  </br>
  <section id="specifications" class="price_table_bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section_heading section_heading_2">
            <h2> Service Specifications </h2>
          </div>
        </div>
      </div>
      <div class="comparison">
        <table border="1px;" style="1500px;">
          <thead align="">
            <tr>
              <th class="compare-heading"
                style="background-color:#d7232d; font-size:30px; border-right:solid 20px white;">
                Broadband </br>
                Plans
                </br></br>
              </th>
              <th align="center" class="compare-heading"
                style="background-color:#d7232d; border-right:solid 30px white;">
                <div class="price_month">
                  <span class="round">
                    <h3>
                      Commercial
                    </h3>
                  </span>
                </div>
              </th>
              <th class="compare-heading" style="background-color:#d7232d;">
                <div class="price_month">
                  <span class="round">
                    <h3>
                      Corporate
                    </h3>
                  </span>
                </div>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td colspan="4">Complaints Response Time</td>
            </tr>
            <tr class="compare-row">
              <td style="border-right:solid 30px white;">Complaints Response Time</td>
              <td style="border-right:solid 30px white;"><span class="tickblue">24 working hours</span></td>
              <td><span class="tickblue">12 working hours</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="4">Static IP charges/Month</td>
            </tr>
            <tr class="compare-row1">
              <td style="border-right:solid 30px white;">Static IP charges/Month</td>
              <td style="border-right:solid 30px white;" class="tickblue">Rs. 1770</td>
              <td class="tickblue">Rs. 1770</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="4">Service request </td>
            </tr>
            <tr class="compare-row">
              <td style="border-right:solid 30px white;">Service request </td>
              <td style="border-right:solid 30px white;" class="tickblue">CS</td>
              <td class="tickblue">CS</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="4">Rewiring Charges</td>
            </tr>
            <tr class="compare-row1">
              <td style="border-right:solid 30px white;">Rewiring Charges</td>
              <td style="border-right:solid 30px white;" class="tickblue">To be Paid</span></td>
              <td><span class="tickblue">To be Paid</span></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="4">Location Shifting charges</td>
            </tr>
            <tr class="compare-row">
              <td style="border-right:solid 30px white;">Location Shifting charges</td>
              <td style="border-right:solid 30px white;" class="tickblue">To be Paid</span></td>
              <td><span class="tickblue">To be Paid</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>-->
    </br>
    <section id="specifications" class="price_table_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_heading section_heading_2">
                        <h2> Pricing </h2>
                    </div>
                </div>
            </div>
            <div class="comparison">
                <div class="row comp-back">
                    <div class="col-md-3">
                        <div class="row" style="background-color:#d7232d; font-size:30px;">
                            <div class="col-md-12">
                                <div class="price_month1">
                                    <span class="round1" style="background:none">
                                        <h4> Unlimited Plans </h4>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                50 MBPS
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                100 MBPS
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                150 MBPS
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 price-col-margin-top">
                        <div class="row" style="background-color:#d7232d; font-size:30px;">
                            <div class="col-md-12 ">
                                <div class="price_month1">
                                    <span class="round1">
                                        <h4>
                                            30 Days
                                        </h4>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                1200
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                1500
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                1800
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 price-col-margin-top">
                        <div class="row" style="background-color:#d7232d; font-size:30px;">
                            <div class="col-md-12 ">
                                <div class="price_month1">
                                    <span class="round1">
                                        <h4>
                                            180 Days
                                        </h4>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                6000
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                8000
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                9000
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 price-col-margin-top">
                        <div class="row" style="background-color:#d7232d; font-size:30px;">
                            <div class="col-md-12 ">
                                <div class="price_month1">
                                    <span class="round1">
                                        <h4>
                                            365 Days
                                        </h4>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                12000 + Router
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                15000 + Router
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 compare-row">
                                18000 + Router
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            </br></br>
            <div class="section_heading" >
                <h2 style="color: white;border-bottom: unset;">Installation Charges : Rs. 2000</h2>
            </div>

        </div>
    </section>

    </br>
    <!-- 
  <section id="specifications" class="price_table_bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section_heading section_heading_2">
            <h2> Pricing </h2>
          </div>
        </div>
      </div>
      <div class="comparison">
        <table border="1px; border-color:black" style="1500px;">
          <thead align="">
            <tr>
              <th class="compare-heading"
                style="background-color:#d7232d; font-size:30px; border-right:solid 30px white;color:white;">
                Unlimited Plans
                </br></br>
              </th>
              <th align="center" class="compare-heading"
                style="background-color:#d7232d; border-right:solid 30px white;">
                <div class="price_month">
                  <span class="round">
                    <h3>
                      30 Days
                    </h3>
                  </span>
                </div>
              </th>
              <th class="compare-heading" style="background-color:#d7232d;">
                <div class="price_month">
                  <span class="round">
                    <h3>
                      180 Days
                    </h3>
                  </span>
                </div>
              </th>
              <th class="compare-heading" style="background-color:#d7232d;">
                <div class="price_month">
                  <span class="round">
                    <h3>
                      365 Days
                    </h3>
                  </span>
                </div>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td colspan="4">50 MBPS</td>
            </tr>
            <tr class="compare-row">
              <td style="border-right:solid 30px white;">50 MBPS</td>
              <td style="border-right:solid 30px white;">1200</td>
              <td>6000</td>
              <td>12000 + Router</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="4">100 MBPS</td>
            </tr>
            <tr class="compare-row">
              <td style="border-right:solid 30px white;">100 MBPS</td>
              <td style="border-right:solid 30px white;">1500</td>
              <td>8000</td>
              <td>15000 + Router</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="4">150 MBPS</td>
            </tr>
            <tr class="compare-row1">
              <td style="border-right:solid 30px white;">150 MBPS</td>
              <td style="border-right:solid 30px white;">1800</td>
              <td>9000</td>
              <td>18000 + Router</td>
            </tr>
          </tbody>
        </table>
        </br></br>
        <h2 style="color: white;">Installation Charges : Rs. 2000</h2>
  </section> -->
    </br></br>
    <style>
      
    .testimonial_slide {
        width: unset;
        padding: 10px;
    }

    .flex-container {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .flex-item {
        /*flex: 33.33333333%;*/
        flex: 32%;
        max-width: 32%;
        margin-top: 8px;
        
    }
    /* Large devices (laptops/desktops, 992px and up) */
@media (max-width: 1200px) {
      .flex-item {
    flex: 49%;
    max-width: 49%;
  }
    }

    @media (max-width: 800px) {
  .flex-item {
    flex: 100%;
    max-width: 100%;
  }
}
    </style>
    <section id="testimonial" class="testimonial_bg">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_heading section_heading_2">
                        <h2>Testimonial </h2>
                        <h4> We ensure quality & support. People love us & we love them. Here goes some simple dummy
                            text.</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="flex-container">

                        <div class="testimonial_slide flex-item">
                            <div class="testi_detail">
                                <div class="testi_img">
                                    <img src="images/12.jpg" alt="image"
                                        style="border-radius:50%; height:100px; width:100px">
                                    <h5>Learn Well Technocraft</h5>
                                    <p>IT Training Provider</p>
                                </div>
                                <div class="testi-text">
                                    <p>First thing to tell about Arambh Broadband is their excellent support. I can call
                                        directly the
                                        owner and they send a person in a flash to rectify the issue. Speed is awesome
                                        both upload and
                                        download. Recommended.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial_slide flex-item">
                            <div class="testi_detail">
                                <div class="testi_img">
                                    <img src="images/12.jpg" alt="image"
                                        style="border-radius:50%; height:100px; width:100px">
                                    <h5>Learn Well Technocraft</h5>
                                    <p>IT Training Provider</p>
                                </div>
                                <div class="testi-text">
                                    <p>First thing to tell about Arambh Broadband is their excellent support. I can call
                                        directly the
                                        owner and they send a person in a flash to rectify the issue. Speed is awesome
                                        both upload and
                                        download. Recommended.
                                        directly the
                                        owner and they send a person in a flash to rectify the issue. Speed is awesome
                                        both upload and
                                        download. Recommended.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial_slide flex-item">
                            <div class="testi_detail">
                                <div class="testi_img">
                                    <img src="images/12.jpg" alt="image"
                                        style="border-radius:50%; height:100px; width:100px">
                                    <h5>Learn Well Technocraft</h5>
                                    <p>IT Training Provider</p>
                                </div>
                                <div class="testi-text">
                                    <p>First thing to tell about Arambh Broadband is their excellent support. I can call
                                        directly the
                                        owner and they send a person in a flash to rectify the issue. Speed is awesome
                                        both upload and
                                        download. Recommended.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial_slide flex-item">
                            <div class="testi_detail">
                                <div class="testi_img">
                                    <img src="images/12.jpg" alt="image"
                                        style="border-radius:50%; height:100px; width:100px">
                                    <h5>Learn Well Technocraft</h5>
                                    <p>IT Training Provider</p>
                                </div>
                                <div class="testi-text">
                                    <p>First thing to tell about Arambh Broadband is their excellent support. I can call
                                        directly the
                                        owner and they send a person in a flash to rectify the issue. Speed is awesome
                                        both upload and
                                        download. Recommended.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="testimonial_slide flex-item">
                            <div class="testi_detail">
                                <div class="testi_img">
                                    <img src="images/12.jpg" alt="image"
                                        style="border-radius:50%; height:100px; width:100px">
                                    <h5>Learn Well Technocraft</h5>
                                    <p>IT Training Provider</p>
                                </div>
                                <div class="testi-text">
                                    <p>First thing to tell about Arambh Broadband is their excellent support. I can call
                                        directly the
                                        owner and they send a person in a flash to rectify the issue. Speed is awesome
                                        both upload and
                                        download. Recommended.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial_slide flex-item">
                            <div class="testi_detail">
                                <div class="testi_img">
                                    <img src="images/12.jpg" alt="image"
                                        style="border-radius:50%; height:100px; width:100px">
                                    <h5>Learn Well Technocraft</h5>
                                    <p>IT Training Provider</p>
                                </div>
                                <div class="testi-text">
                                    <p>First thing to tell about Arambh Broadband is their excellent support. I can call
                                        directly the
                                        owner and they send a person in a flash to rectify the issue. Speed is awesome
                                        both upload and
                                        download. Recommended.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial_slide flex-item">
                            <div class="testi_detail">
                                <div class="testi_img">
                                    <img src="images/12.jpg" alt="image"
                                        style="border-radius:50%; height:100px; width:100px">
                                    <h5>Learn Well Technocraft</h5>
                                    <p>IT Training Provider</p>
                                </div>
                                <div class="testi-text">
                                    <p>First thing to tell about Arambh Broadband is their excellent support. I can call
                                        directly the
                                        owner and they send a person in a flash to rectify the issue. Speed is awesome
                                        both upload and
                                        download. Recommended.
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section><!--
    </br></br>
    <section id="testimonial" class="testimonial_bg">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_heading section_heading_2">
                        <h2>Testimonial </h2>
                        <h4> We ensure quality & support. People love us & we love them. Here goes some simple dummy
                            text.</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="testimonial_slide">
                            <div class="testi_detail">
                                <div class="testi_img">
                                    <img src="images/12.jpg" alt="image"
                                        style="border-radius:50%; height:100px; width:100px">
                                    <h5>Learn Well Technocraft</h5>
                                    <p>IT Training Provider</p>
                                </div>
                                <div class="testi-text">
                                    <p>First thing to tell about Arambh Broadband is their excellent support. I can call
                                        directly the
                                        owner and they send a person in a flash to rectify the issue. Speed is awesome
                                        both upload and
                                        download. Recommended.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial_slide">
                            <div class="testi_detail">
                                <div class="testi_img">
                                    <img src="images/d-mart.jpg" alt="image"
                                        style="border-radius:50%; height:100px; width:100px">
                                    <h5>D-Mart</h5>
                                    <p></br>Retail Store</p>
                                </div>
                                <div class="testi-text">
                                    <p>We are really happy with the service they provided us. To our business which
                                        required constant
                                        Internet connectivity and a very fast one, they are perfect choice. Nice support
                                        and assistance in
                                        case of issues. Pleased with their service.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial_slide">
                            <div class="testi_detail">
                                <div class="testi_img">
                                    <img src="images/d-mart.jpg" alt="image"
                                        style="border-radius:50%; height:100px; width:100px">
                                    <h5>D-Mart</h5>
                                    <p></br>Retail Store</p>
                                </div>
                                <div class="testi-text">
                                    <p>We are really happy with the service they provided us. To our business which
                                        required constant
                                        Internet connectivity and a very fast one, they are perfect choice. Nice support
                                        and assistance in
                                        case of issues. Pleased with their service.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    </br></br>
    <section id="contact" class="contact_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_heading section_heading_2">
                        <h2> Contact Us </h2>
                        <h4>Drop your details and we will connect with you to provide seamless internet experience.</h4>
                    </div>
                    <div class="col-md-5">
                        <div class="contact_form">
                            <form action="thankyou.php" method="post" name="form1" id="form1"
                                onSubmit="return validate();" target="_parent" class="">
                                <div class="form-group">
                                    <label>Full Name : <span> *</span></label>
                                    <span class="name">
                                        <input class="form-control" type="text" size="40" value="" required="true"
                                            name="txtname" placeholder="Name*">
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label>Contact : <span> *</span></label>
                                    <span class="phone1">
                                        <input type="text" class="form-control" name="phone" placeholder="Mobile No*"
                                            pattern="(?:\+?\d[91]-)?(?:\d{3}-)?\d{10}"
                                            oninvalid="setCustomValidity('Plz enter valid phone number')"
                                            onChange="try{setCustomValidity('')}catch(e){}" required /></span>
                                </div>
                                <div class="form-group">
                                    <label> alternate Contact : </label>
                                    <span class="phone1">
                                        <input type="text" class="form-control" name="phone1" placeholder="Mobile No*"
                                            pattern="(?:\+?\d[91]-)?(?:\d{3}-)?\d{10}"
                                            oninvalid="setCustomValidity('Plz enter valid phone number')"
                                            onChange="try{setCustomValidity('')}catch(e){}" /></span>
                                </div>
                                <div class="form-group">
                                    <label>Email Address : <span> *</span></label>
                                    <span class=" email"><input class="form-control" type="email" required="true"
                                            size="40" name="txtEmail" placeholder="Email*"></span>
                                </div>
                                <div class="form-group">
                                    <label>Message <span> </span></label>
                                    <span class=" comment"><textarea class="form-control" placeholder="Messege"
                                            required="true" rows="10" cols="40" name="comment"></textarea></span>
                                </div>
                                <div class="row " align="center">
                                    <div class="col-sm-3 col-xs-12">
                                        <h3 style="font-size:20px;"><b>Math question:</b></h3>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <h4 style="font-size:20px; margin-top:20px;">45 &#8722;</h4>
                                    </div>
                                    <div class="col-sm-3 col-xs-12" align="center">
                                        <input type="text" style="height:50px; width:90px;" size="" length="2"
                                            id="invalue" class="form-control" name="invalue" value=""
                                            aria-required="true" />
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <h3 style="font-size:20px;">= 39</h3>
                                    </div>
                                </div>
                                <div class="section_sub_btn">
                                    <button class="btn btn-default" type="submit"> Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <script>
                    function validate() {
                        var x = document.forms["form1"]["invalue"].value;
                        if (x != "6") {
                            alert(" Please enter valid Input");
                            return false;


                        }

                    }
                    </script>
                    <div class="col-md-7">
                        <div class="contact_text">
                            <ul>
                                <li>
                                    <span><i class="fa fa-home" aria-hidden="true"></i></span>
                                    <h5> Jagdish Nagar, 2A Building Ground Floor, </br>
                                        Ganeshkhind Road, Aundh, Pune-411007
                                    </h5>
                                </li>
                                <li>
                                    <span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                    <h5 style="font-size:25px"> Arambhbroadband100@gmail.com</h5>
                                </li>
                                <li>
                                    <span><i class="fa fa-whatsapp" aria-hidden="true"></i></span>
                                    <h5> +91 9762486218 </h5>
                                </li>
                                <li>
                                    <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                                    <h5> +91 9881144545 </h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="third-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer_top">
                        <h4>Connect With Us</h4>
                        <ul>
                            <li> <a href="http://facebook.com/"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                            </li>
                            <li> <a href="http://twitter.com/"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
                            </li>
                            <li> <a href="http://linkedin.com/"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                            </li>
                            <li> <a href="http://google.com/"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a>
                            </li>
                            <li> <a href="http://youtu.be/"> <i class="fa fa-youtube-square" aria-hidden="true"></i>
                                </a> </li>
                            <li> <a href="https://www.instagram.com"> <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom fourth-bg">
            <!-- Keep Footer Credit Links Intact -->
            <p> 2023 &copy; All rights Reserved <a href="index.php">Arambh Broadband Enterprises </a> Designed &
                Developed By
                <a href="www.gltechnocraft.com">GLT Pvt, Ltd.</a>
            </p>
            <a href="#" class="backtop"> ^ </a>
        </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/interface.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#menu_slide").click(function() {
            $("#navbar").slideToggle('normal');
        });
    });
    </script>
    <!--Menu Js Right Menu-->
    <script type="text/javascript">
    $(document).ready(function() {
        $('#navbar > ul > li:has(ul)').addClass("has-sub");
        $('#navbar > ul > li > a').click(function() {
            var checkElement = $(this).next();
            $('#navbar li').removeClass('dropdown');
            $(this).closest('li').addClass('dropdown');
            if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                $(this).closest('li').removeClass('dropdown');
                checkElement.slideUp('normal');
            }
            if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                $('#navbar ul ul:visible').slideUp('normal');
                checkElement.slideDown('normal');
            }
            if (checkElement.is('ul')) {
                return false;
            } else {
                return true;
            }
        });
    }); 
    !--end-- >
    </script>
    <script type="text/javascript">
    $("#navbar").on("click", function(event) {
        event.stopPropagation();
    });
    $(".dropdown-menu").on("click", function(event) {
        event.stopPropagation();
    });
    $(document).on("click", function(event) {
        $(".dropdown-menu").slideUp('normal');
    });

    $(".navbar-header").on("click", function(event) {
        event.stopPropagation();
    });
    $(document).on("click", function(event) {
        $("#navbar").slideUp('normal');
    });
    </script>
</body>
<!-- JS Plugins -->

</html>