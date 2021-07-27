<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LUNARIUM - CENTRAL MN</title>
    <meta name="description" content="We are a payment method that remunerates your holders through Stakes and Masternodes!">
    <meta name='og:image' content='images/thumb/thumb.png'>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="images/logo/favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="css/YTPlayer.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="js/revolutionslider/css/settings.css" />
    <link rel="stylesheet" href="js/revolutionslider/css/navigation.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Particle css -->
    <style>
        .count-particles {
            background: #000022;
            position: absolute;
            top: 48px;
            left: 0;
            width: 80px;
            color: #13E8E9;
            font-size: .8em;
            text-align: left;
            text-indent: 4px;
            line-height: 14px;
            padding-bottom: 2px;
            font-family: Helvetica, Arial, sans-serif;
            font-weight: bold;
        }
        
        .js-count-particles {
            font-size: 1.1em;
        }
        
        #stats,
        .count-particles {
            -webkit-user-select: none;
            margin-top: 5px;
            margin-left: 5px;
        }
        
        #stats {
            border-radius: 3px 3px 0 0;
            overflow: hidden;
        }
        
        .count-particles {
            border-radius: 0 0 3px 3px;
        }
    </style>
    <!-- /Particle css -->
    
    <script src="https://widgets.coingecko.com/coingecko-coin-converter-widget.js"></script>
    <script>
        var x = 0;
        var y = 0;
        var z = 0;
        function calc(obj) {
            var e = obj.id.toString();
            if (e == 'valor_moeda') {
                x = Number(obj.value);
                y = Number(document.getElementById('valor_brl').value);
            } else {
                x = Number(document.getElementById('valor_moeda').value);
                y = Number(obj.value);
            }
            z = x / y;
            document.getElementById('valor_total_brl').value = z;
            document.getElementById('update').innerHTML = z;
        }
    </script>

</head>

<body>
    <!-- Pageloader -->
    <div class="page-loader">
        <div class="loader">
            <!-- /Cube panelload -->
            <div class='loader-style-1 panelLoad'>
                <div class='cube-face cube-face-front'><img src="images/logo/logo.png" alt="LUNARIUM" style="width:50px; height:50px"></div>
                <div class='cube-face cube-face-back'><img src="images/logo/logo.png" alt="LUNARIUM" style="width:50px; height:50px"></div>
                <div class='cube-face cube-face-left'><img src="images/logo/logo.png" alt="LUNARIUM" style="width:50px; height:50px"></div>
                <div class='cube-face cube-face-right'><img src="images/logo/logo.png" alt="LUNARIUM" style="width:50px; height:50px"></div>
                <div class='cube-face cube-face-bottom'><img src="images/logo/logo.png" alt="LUNARIUM" style="width:50px; height:50px"></div>
                <div class='cube-face cube-face-top'><img src="images/logo/logo.png" alt="LUNARIUM" style="width:50px; height:50px"></div>
            </div>
            <!-- /Cube panelload -->
            <span class="cube-face font-size-20">LUNARIUM</span>
        </div>
        <!-- /loader -->
    </div>
    <!-- /Page-loader -->

    <!-- Navigation -->
    <nav class="main-nav op-nav menu-dark menu-transparent js-transparent">
        <div class="container">
            <div class="navbar">

                <div class="brand-logo">
                    <a class="navbar-brand" href="#">
                        <img src="images/logo/logo-name.png" alt="LUNARIUM" style="width:165px; height:65px">
                    </a>
                </div>
                <!-- brand-logo -->

                <div class="navbar-header">
                    <div class="inner-nav right-nav">
                        <ul>
                            <li class="navbar-toggle">
                                <button type="button" data-toggle="collapse" data-target=".collapse">
                                    <span class="sr-only"></span>
                                    <i class="ti-menu"></i>
                                </button>
                            </li>
                            <!-- /collapse-menu -->
                        </ul>
                    </div>
                    <!-- /right-nav -->
                </div>
                <!-- navbar-header -->

                <div class="custom-collapse navbar-collapse collapse inner-nav">
                    <ul class="nav navbar-nav">
                        <li><a class="scroll-to" href="#slider">Home</a></li>
                        <li class="dropdown mega-menu"><a href="#about" class="scroll-to dropdown-toggle" data-toggle="dropdown">About <i class="ti-angle-down"></i></a>
                            <ul class="dropdown-menu width-100 mega-dropdown">
                                <li class="mega-menu-content">

                                    <div class="col-md-4 col-sm-12">
                                        <span class="dropdown-header">What is XLN?</span>
                                        <div class="clearfix"></div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <ul>
                                                    <li><a class="scroll-to" href="#about"><i class="fa fa-check-square-o" aria-hidden="true"></i> Lunarium</a></li>
                                                </ul>
                                            </div>
                                            <!-- /row -->
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-4 col-sm-12">
                                        <span class="dropdown-header">How is XLN?</span>
                                        <div class="clearfix"></div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <ul>
                                                    <li><a class="scroll-to" href="#especificacao"><i class="fa fa-check-square-o" aria-hidden="true"></i> Specifications</a></li>
                                                </ul>
                                            </div>
                                            <!-- /row -->
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-4 col-sm-12">
                                        <span class="dropdown-header">What we want?</span>
                                        <div class="clearfix"></div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <ul>
                                                    <li><a class="scroll-to" href="#objetivos"><i class="fa fa-check-square-o" aria-hidden="true"></i> Goals</a></li>
                                                </ul>
                                            </div>
                                            <!-- /row -->
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /column -->
                                </li>
                                <!-- mega-menu-content -->
                            </ul>
                            <!-- /dropdown-menu -->
                        </li>
                        <!-- /dropdown -->
                        <li class="dropdown mega-menu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Downloads <i class="ti-angle-down"></i></a>
                            <ul class="dropdown-menu width-100 mega-dropdown">
                                <li class="mega-menu-content">

                                    <div class="col-md-2 col-sm-6">
                                        <span class="dropdown-header">Windows 64Bits</span>
                                        <div class="clearfix"></div>

                                        <div class="col-md-6">
                                            <div class="row">
                                                <ul>
                                                    <li>
                                                        <a class="scroll-to" href="https://github.com/LunariumCoin/lunarium/releases/download/v1.2.0/lunarium-1.2.0-win64-setup.exe" target="_blank"><img class="img-responsive" src="images/apps/windows_64bits.png" alt="Windows" style="width:75px"></a></li>
                                                </ul>
                                            </div>
                                            <!-- /row -->
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-2 col-sm-6">
                                        <span class="dropdown-header">Windows 32Bits</span>
                                        <div class="clearfix"></div>

                                        <div class="col-md-6">
                                            <div class="row">
                                                <ul>
                                                    <li>
                                                        <a class="scroll-to" href="https://github.com/LunariumCoin/lunarium/releases/download/v1.2.0/lunarium-1.2.0-win32.zip" target="_blank"><img class="img-responsive" src="images/apps/windows_32bits.png" alt="Windows" style="width:75px"></a></li>
                                                </ul>
                                            </div>
                                            <!-- /row -->
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-2 col-sm-6">
                                        <span class="dropdown-header">Ubuntu 18.04</span>
                                        <div class="clearfix"></div>

                                        <div class="col-md-6">
                                            <div class="row">
                                                <ul>
                                                    <li>
                                                        <a class="scroll-to" href="https://github.com/LunariumCoin/lunarium/releases/download/v1.2.0/lunarium-1.2.0-ubuntu-18.04.zip" target="_blank"><img class="img-responsive" src="images/apps/ubuntu_1804.png" alt="Ubuntu" style="width:75px"></a></li>
                                                </ul>
                                            </div>
                                            <!-- /row -->
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-2 col-sm-6">
                                        <span class="dropdown-header">Source</span>
                                        <div class="clearfix"></div>

                                        <div class="col-md-6">
                                            <div class="row">
                                                <ul>
                                                    <li>
                                                        <a class="scroll-to" href="https://github.com/LunariumCoin/lunarium/archive/refs/tags/v1.2.0.zip" target="_blank"><img class="img-responsive" src="images/apps/source.png" alt="Source" style="width:75px"></a></li>
                                                </ul>
                                            </div>
                                            <!-- /row -->
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /column -->
                                </li>
                                <!-- mega-menu-content -->
                            </ul>
                            <!-- /dropdown-menu -->
                        </li>
                        <!-- /dropdown -->
                        
                        <li class="dropdown mega-menu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Listings <i class="ti-angle-down"></i></a>
                            <ul class="dropdown-menu width-100 mega-dropdown">
                                <li><a class="scroll-to" href="#listagens">Go to Listings</a></li>
                                <li class="mega-menu-content">

                                    <div class="col-md-3 col-sm-12">
                                        <center><h4 style="color:#ffffff">Exchanges</h4>
                                        <div class="clearfix"></div>

                                        <div class="col-xs-6">
                                            <a class="scroll-to" href="https://crex24.com/pt/exchange/XLN-BTC" target="_blank"><img class="img-responsive" src="images/portfolio/crex24.png" alt="Crex" style="width:50px"></a>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-xs-6">
                                            <a class="scroll-to" href="https://bololex.com/trading/?symbol=XLN-DOGE" target="_blank"><img class="img-responsive" src="images/portfolio/bololex.png" alt="Bololex" style="width:50px"></a>
                                        </div></center>
                                        <!-- /column -->
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-3 col-sm-12">
                                        <center><h4 style="color:#ffffff">Platforms</h4>
                                        <div class="clearfix"></div>

                                        <div class="col-xs-12">
                                            <a class="scroll-to" href="https://betting.fanaticoscriptos.com/" target="_blank"><img class="img-responsive" src="images/portfolio/fcbetting.png" alt="FCBetting" style="width:50px"></a>
                                        </div></center>
                                        <!-- /column -->
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-3 col-sm-12">
                                        <center><h4 style="color:#ffffff">PoolS</h4>
                                        <div class="clearfix"></div>

                                        <div class="col-xs-4">
                                            <a class="scroll-to" href="https://t.me/Xlnpool_bot" target="_blank"><img class="img-responsive" src="images/portfolio/tkm_pool.png" alt="TKM" style="width:50px"></a>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-xs-4">
                                            <a class="scroll-to" href="https://www.coinstake.in" target="_blank"><img class="img-responsive" src="images/portfolio/cs.png" alt="COINSTAKES" style="width:50px"></a>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-xs-4">
                                            <a class="scroll-to" href="https://masternodes.biz/cryptocurrency/XLN" target="_blank"><img class="img-responsive" src="images/portfolio/mnbiz.png" alt="MNBIZ" style="width:50px"></a>
                                        </div></center>
                                        <!-- /column -->
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-3 col-sm-12">
                                        <center><h4 style="color:#ffffff">Applications</h4>
                                        <div class="clearfix"></div>

                                        <div class="col-xs-12">
                                            <a class="scroll-to" href="https://radio.fanaticoscriptos.com.br/" target="_blank"><img class="img-responsive" src="images/portfolio/fanaticos_criptos_fm.png" alt="Fanáticos Criptos FM" style="width:50px"></a>
                                        </div></center>
                                        <!-- /column -->
                                    </div>
                                    <!-- /column -->
                                </li>
                                <!-- mega-menu-content -->
                            </ul>
                            <!-- /dropdown-menu -->
                        </li>
                        <!-- /dropdown -->
                        <li><a class="scroll-to" href="#road">RoadMap</a></li>
                        <li><a class="scroll-to" href="#team">Team</a></li>
                        <li><a href="https://explorer.xlunarium.org/" target="_blank">Explorer</a></li>
                        <li><a class="scroll-to" href="#contact">Contact</a></li>
                        <li><a class="scroll-to" href="/PT_BR.php"><img src="images/client/br.png" alt="BR" style="width:25px" /></a></li>
                    </ul>
                    <!-- /nav -->
                </div>
                <!-- /collapse -->
            </div>
            <!-- /navbar -->
        </div>
        <!-- /container -->
    </nav>
    <!--/#Navigation-->

<?php
//FUNCTION XLN CURRENT PRICE  
$api = "https://api.coingecko.com/api/v3/coins/lunarium";
$union_api = json_decode(file_get_contents($api), true);
$result_market = $union_api['market_data'];
$result_current = $result_market['current_price'];
$latest_price = $result_current['usd'];
$masternode_price = $latest_price * 10000;

$api_masternode_count = "https://explorer.xlunarium.org/ext/masternodes";
$dados_masternode = json_decode(file_get_contents($api_masternode_count), true);
$dados_line = $dados_masternode['data'];
$masternode_count = count($dados_line);
$masternode = 10000;
$reward_today = 4320 / $masternode_count * 5.6;
$reward_monthly = 4320 * 30 / $masternode_count * 5.6;
$reward_yearly = 4320 * 365 / $masternode_count * 5.6;
$reward_today_price = $latest_price * $reward_today;
$reward_monthly_price = $latest_price * $reward_monthly;
$reward_yearly_price = $latest_price * $reward_yearly;
?>

    <!-- Revolution slider -->
    <section id="slider">
        <div class="tp-banner-container ">
            <div class="tp-banner rev-interactive">
                <div class="hero-caption caption-center caption-height-center container" style="z-index: 100;">
                    <h1 class="hero-heading text-light text-xform-none ls-1 font-weight-bold" style="z-index:100"><img src="images/logo/logo-blue.png" alt="LUNARIUM" style="width:300px; height:auto"></h1>
                    <p class="hero-text-alt text-light"> Decentralized Cryptocurrency
                        <br class="hide-mobile"> Why seek the next one? if we can go to infinity!</p>
                    <a class="btn btn-style-3 btn-lg mrg-top-30" href="#central" >Central MN</a>
                </div>
                <!-- /hero-caption -->

                <div id="particles-js"></div>

                <ul>
                    <!-- SLIDE 1 -->
                    <li data-index="rs-113" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="10" data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="images/background/img-parallax-4.jpg" alt="Parallax1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="repeat" data-kenburns="on" class="rev-slidebg" data-duration="300000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="1000" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="150 150">
                    </li>
                    <!-- /SLIDE 1 -->

                    <!-- SLIDE 2 -->
                    <li data-index="rs-113" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="images/background/img-parallax-4.jpg" alt="Parallax2" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="repeat" data-kenburns="on" class="rev-slidebg" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="120 120">
                    </li>
                    <!-- /SLIDE 2 -->

                    <!-- SLIDE 3 -->
                    <li data-index="rs-113" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="5" data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="images/background/img-parallax-4.jpg" alt="Parallax3" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="repeat" data-kenburns="on" class="rev-slidebg" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="120 120">
                    </li>
                    <!-- /SLIDE 3 -->
                </ul>

            </div>
            <!-- /tp-banner -->
        </div>
        <!-- /tp-banner-container -->
    </section>
    <!-- /#Revolution slider -->

    <!-- About -->
    <section id="central" class="section">
        <div class="container">
                    <div class="col-md-6 col-sm-6">
                        <h1>LUNARIUM: <br><span style="font-size:20px">DECENTRALIZED CRYPTO CURRENCY</span></h1>
                        <em>"Calculate your XLN Investment:"</em><br><br>
                        <div class="col-sm-4 text-center">
                            <label class="my-1 mr-2 text-center" for="inlineFormCustomSelectPref"><b>Dollar value:</b></label>
                            <input type="text" class="form-control text-center" name="valor_moeda" id="valor_moeda" value="" placeholder="dollar amount" onkeyup="calc(this)">
                        </div>
                        <div class="col-sm-4 text-center">
                            <label class="my-1 mr-2 text-center" for="inlineFormCustomSelectPref"><b>Current price:</b></label>
                            <input type="text" class="form-control text-center" name="valor_brl" id="valor_brl" value="<?php echo number_format($latest_price, 8, '.', ','); ?>" readonly='readonly' onkeyup="calc(this)">
                        </div>
                        <div class="col-sm-4 text-center">
                            <label class="my-1 mr-2 text-center" for="inlineFormCustomSelectPref"><b>Total in XLN:</b></label>
                            <input type="text" class="form-control text-center" name="valor_total_brl" id="valor_total_brl" value="0" readonly='readonly'/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h1>MASTERNODE: <br><span style="font-size:20px">SEE THE PRICE AND GAIN OF 1 MN XLN</span></h1>
                        <div class="col-sm-3 text-center">
                            <label class="my-1 mr-2 text-center" for="inlineFormCustomSelectPref"><b>MN:</b></label>
                            <input type="text" class="form-control text-center" name="valor_masternode" id="valor_masternode" value="1" readonly='readonly'/>
                        </div>
                        <div class="col-sm-6 text-center">
                            <label class="my-1 mr-2 text-center" for="inlineFormCustomSelectPref"><b>Lunarium (XLN):</b></label>
                            <input type="text" class="form-control text-center" name="valor_masternode" id="valor_masternode" value="<?php echo number_format($masternode, 8, '.', ','); ?>" readonly='readonly'/>
                        </div>
                        <div class="col-sm-3 text-center">
                            <label class="my-1 mr-2 text-center" for="inlineFormCustomSelectPref"><b>DOLLAR (USD):</b></label>
                            <input type="text" class="form-control text-center" name="valor_masternode" id="valor_masternode" value="<?php echo number_format($masternode_price, 2, '.', ','); ?>" readonly='readonly'/>
                        </div>
                        <h1 style="margin-bottom:10px; margin-top:75px"><span style="font-size:14px">"Calculation of Earnings in XLN with 1 MN"</span></h1>
                        <div class="col-sm-4 text-center">
                            <label class="my-1 mr-2 text-center" for="inlineFormCustomSelectPref"><b>Daily Minimum:</b></label>
                            <input type="text" class="form-control text-center" name="valor_diario" id="valor_diario" value="<?php echo number_format($reward_today, 8, '.', ','); ?>" readonly='readonly'/>
                            <label class="my-1 mr-2 text-center" for="inlineFormCustomSelectPref">$ <?php echo number_format($reward_today_price, 2, '.', ','); ?></label>
                        </div>
                        <div class="col-sm-4 text-center">
                            <label class="my-1 mr-2 text-center" for="inlineFormCustomSelectPref"><b>Monthly Minimum:</b></label>
                            <input type="text" class="form-control text-center" name="valor_masternode" id="valor_masternode" value="<?php echo number_format($reward_monthly, 8, '.', ','); ?>" readonly='readonly'/>
                            <label class="my-1 mr-2 text-center" for="inlineFormCustomSelectPref">$ <?php echo number_format($reward_monthly_price, 2, '.', ','); ?></label>
                        </div>
                        <div class="col-sm-4 text-center">
                            <label class="my-1 mr-2 text-center" for="inlineFormCustomSelectPref"><b>Annual Minimum:</b></label>
                            <input type="text" class="form-control text-center" name="valor_masternode" id="valor_masternode" value="<?php echo number_format($reward_yearly, 8, '.', ','); ?>" readonly='readonly'/>
                            <label class="my-1 mr-2 text-center" for="inlineFormCustomSelectPref">$ <?php echo number_format($reward_yearly_price, 2, '.', ','); ?></label>
                        </div>
                        <h1><span style="font-size:20px">Masternodes Active: <?php echo number_format($masternode_count); ?></span></h1>
                    </div>
                </div>
        <!-- /container -->
    </section>
    <!-- /About -->
    
        <!-- About -->
    <section id="central" class="section">
        <div class="container">
            <h2 class="heading mrg-btm-50">Masternodes Online</h2>
            <table class="table table-bordered table-hover" style="width:100%;">
        <tr>
            <th>RANK</th>
            <th>ADDRESS</th>
            <th>STATUS</th>
            <th>ACTIVE</th>
            <th>LAST PAYMENT</th>
        </tr>
        <?php foreach($dados_line as $key => $value) { ?>
        <tr>
            <td><?php echo $key++; ?></td>
            <td><a href="https://explorer.xlunarium.org/address/<?php echo $value["address"]; ?>" target="_blank"><?php echo $value["address"]; ?></a></td>
            <td><?php echo $value["status"]; ?></td>
            <td>
                <?php if($value["lastseen"] == 0){ ?>UNKNOWN<?php } ?>
                <?php if($value["lastseen"] > 0){ ?><?php echo date("Y-m-d H:i:s", $value["lastseen"]);} ?>
            </td>
            <td>
                <?php if($value["lastpaid"] == 0){ ?>UNKNOWN<?php } ?>
                <?php if($value["lastpaid"] > 0){ ?><?php echo date("Y-m-d H:i:s", $value["lastpaid"]);} ?>
            </td>
        </tr>
<?php } ?>
    </table>
        </div>
        <!-- /container -->
    </section>
    <!-- /About -->

    <!-- Footer -->
    <footer class="bg-dark">
        <div class="container section">
            <div class="col-md-4 col-sm-12">
                <div class="abou-us-widget">
                    <img class="img-responsive" src="images/logo/logo-blue.png" alt="XLN3" style="width:200px">
                    <p class="mrg-vertical-15">Decentralized Cryptocurrency</p>
                    <p class="mrg-vertical-15">We are a payment method that remunerates your holders through Stakes and Masternodes.</p>
                    <p class="mrg-vertical-15">Why seek the next one? if we can go to infinity!</p>
                </div>
                <!-- /about-us -->
            </div>
            <!-- /column -->

            <div class="col-md-2 col-sm-6">
                <div class="widget">
                    <div class="widget-tittle">
                        <h4>Our Links</h4>
                    </div>
                    <!-- widget-tittle -->

                    <div class="link-widget">
                        <ul>
                            <li><a href="#" target="_blank"><span>-</span> Whitepaper</a></li>
                            <li><a href="https://explorer.xlunarium.org/coininfo" target="_blank"><span>-</span> Explorer</a></li>
                            <li><a href="https://github.com/LunariumCoin" target="_blank"><span>-</span> Github</a></li>
                        </ul>
                    </div>
                    <!-- link-widget -->
                </div>
                <!-- /widget -->
            </div>
            <!-- /column -->

            <div class="col-md-2 col-sm-12">
                <div class="widget">
                    <div class="widget-tittle">
                        <h4>Partners</h4>
                    </div>
                    <!-- widget-tittle -->

                    <div class="flickr-widget">
                        <a href="https://t.me/Xlnpool_bot" class="col-xs-6 flickr-content" target="_blank">
                            <div class="row">
                                <div class="flickr-img">
                                    <img class="img-responsive" src="images/portfolio/tkm_pool.png" alt="TKM">
                                </div>
                                <!-- /flickr-img -->
                                <div class="overlay">
                                </div>
                                <!-- /overlay -->
                            </div>
                            <!-- /row -->
                        </a>
                        <!-- /column -->

                        <a href="https://radio.fanaticoscriptos.com.br" class="col-xs-6 flickr-content" target="_blank">
                            <div class="row">
                                <div class="flickr-img">
                                    <img class="img-responsive" src="images/portfolio/fanaticos_criptos_fm.png" alt="FCFM">
                                </div>
                                <!-- /flickr-img -->
                                <div class="overlay">
                                </div>
                                <!-- /overlay -->
                            </div>
                            <!-- /row -->
                        </a>
                        <!-- /column -->
                        
                        <a href="https://masternodes.biz/cryptocurrency/XLN" class="col-xs-6 flickr-content" target="_blank">
                            <div class="row">
                                <div class="flickr-img">
                                    <img class="img-responsive" src="images/portfolio/mnbiz.png" alt="MNBIZ">
                                </div>
                                <!-- /flickr-img -->
                                <div class="overlay">
                                </div>
                                <!-- /overlay -->
                            </div>
                            <!-- /row -->
                        </a>
                        <!-- /column -->
                        
                        <a href="https://www.coinstake.in" class="col-xs-6 flickr-content" target="_blank">
                            <div class="row">
                                <div class="flickr-img">
                                    <img class="img-responsive" src="images/portfolio/cs.png" alt="COINSTAKES">
                                </div>
                                <!-- /flickr-img -->
                                <div class="overlay">
                                </div>
                                <!-- /overlay -->
                            </div>
                            <!-- /row -->
                        </a>
                        <!-- /column -->
                        
                        <a href="https://t.me/Odacir" class="col-xs-12 flickr-content" target="_blank">
                            <div class="row">
                                <div class="flickr-img">
                                    <h4><span style="font-size:35px">ODACIR</span><br>Serviços de VPS</h4>
                                </div>
                                <!-- /flickr-img -->
                                <div class="overlay">
                                </div>
                                <!-- /overlay -->
                            </div>
                            <!-- /row -->
                        </a>
                        <!-- /column -->
                        
                        <div class="clearfix">
                        </div>
                    </div>
                    <!-- /flickr-widget -->
                </div>
                <!-- /widget -->
            </div>
            <!-- /column -->

            <div class="col-md-4 col-sm-12">
                <div class="widget">
                    <div class="widget-tittle">
                        <h4>Indexers</h4>
                    </div>
                    <!-- widget-tittle -->

                    <div class="flickr-widget">
                        <a href="https://www.coingecko.com/pt/moedas/lunarium" class="col-xs-2  flickr-content" target="_blank">
                            <div class="row">
                                <div class="flickr-img">
                                    <img class="img-responsive" src="images/thumb/coingecko.png" alt="COINGECKO">
                                </div>
                                <!-- /flickr-img -->
                                <div class="overlay">
                                </div>
                                <!-- /overlay -->
                            </div>
                            <!-- /row -->
                        </a>
                        <!-- /column -->

                        <a href="https://coincost.net/pt/currency/lunarium" class="col-xs-2 flickr-content" target="_blank">
                            <div class="row">
                                <div class="flickr-img">
                                    <img class="img-responsive" src="images/thumb/coincost.png" alt="CoinCost">
                                </div>
                                <!-- /flickr-img -->
                                <div class="overlay">
                                </div>
                                <!-- /overlay -->
                            </div>
                            <!-- /row -->
                        </a>
                        <!-- /column -->

                        <a href="https://neironix.io/cryptocurrency/lunarium" class="col-xs-2 flickr-content" target="_blank">
                            <div class="row">
                                <div class="flickr-img">
                                    <img class="img-responsive" src="images/thumb/neironix.png" alt="NeiroNix">
                                </div>
                                <!-- /flickr-img -->
                                <div class="overlay">
                                </div>
                                <!-- /overlay -->
                            </div>
                            <!-- /row -->
                        </a>
                        <!-- /column -->

                        <a href="https://coinlib.io/coin/XLN/Lunarium" class="col-xs-2 flickr-content" target="_blank">
                            <div class="row">
                                <div class="flickr-img">
                                    <img class="img-responsive" src="images/thumb/coinlib.png" alt="CoinLib">
                                </div>
                                <!-- /flickr-img -->
                                <div class="overlay">
                                </div>
                                <!-- /overlay -->
                            </div>
                            <!-- /row -->
                        </a>
                        <!-- /column -->

                        <a href="https://www.coinlore.com/pt/coin/lunarium" class="col-xs-2 flickr-content" target="_blank">
                            <div class="row">
                                <div class="flickr-img">
                                    <img class="img-responsive" src="images/thumb/coinlore.png" alt="CoinLore">
                                </div>
                                <!-- /flickr-img -->
                                <div class="overlay">
                                </div>
                                <!-- /overlay -->
                            </div>
                            <!-- /row -->
                        </a>
                        <!-- /column -->

                        <a href="https://www.livecoinwatch.com/price/Lunarium-XLN" class="col-xs-2 flickr-content" target="_blank">
                            <div class="row">
                                <div class="flickr-img">
                                    <img class="img-responsive" src="images/thumb/livecoinwatch.png" alt="Livecoinwatch">
                                </div>
                                <!-- /flickr-img -->
                                <div class="overlay">
                                </div>
                                <!-- /overlay -->
                            </div>
                            <!-- /row -->
                        </a>
                        <!-- /column -->
                        <div class="clearfix">
                        </div>
                    </div>
                    <!-- /flickr-widget -->
                </div>
                <!-- /widget -->
            </div>
            <!-- /column -->

        </div>
        <!-- /container -->

        <div class="footer-bottom">
            <div class="container">
                <small class="copyright pull-left">© 2021 ALL RIGHT RESERVED. DESIGNED BY <a href="#">Lunarium</a>.</small>
                <div class="social-icon pull-right">
                    <a href="https://www.facebook.com/lunarium.coin.1" target="_blank"><i class="fa"><img class="img-responsive" src="images/facebook.png" style="width:40px;height:40px;padding:0" alt="facebook"></i></a>
                    <a href="https://discord.com/invite/4nFZeJr" target="_blank"><i class="fa"><img class="img-responsive" src="images/discord.png" style="width:40px;height:40px;padding:0" alt="discord"></i></a>
                    <a href="https://twitter.com/LunariumCoin" target="_blank"><i class="fa"><img class="img-responsive" src="images/twitter.png" style="width:40px;height:40px;padding:0" alt="twitter"></i></a>
                    <a href="https://bitcointalk.org/index.php?topic=5038045" target="_blank"><i class="fa"><img class="img-responsive" src="images/bitcoin.png" style="width:40px;height:40px;padding:0" alt="bitcoin"></i></a>
                    <a href="https://t.me/Lunarium_Official" target="_blank"><i class="fa"><img class="img-responsive" src="images/telegram.png" style="width:40px;height:40px;padding:0" alt="telegram"></i></a>
                    <a href="https://t.me/lunarium_BR" target="_blank"><i class="fa"><img class="img-responsive" src="images/telegram.png" style="width:40px;height:40px;padding:0" alt="telegram"></i></a>
                </div>
                <!-- /social-icon -->
            </div>
            <!-- /container -->
        </div>
        <!-- footer-bottom -->
    </footer>

    <!-- Back to top -->
    <a href="#" id="back-to-top" title="Back to top"><i class="ti-angle-up"></i></a>
    <!-- /Back to top -->

    <!-- Java Script -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/revolutionslider/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/revolutionslider/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/revolutionslider/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="js/revolutionslider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="js/revolutionslider/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="js/revolutionslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="js/revolutionslider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="js/revolutionslider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="js/revolutionslider/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="js/revolutionslider/js/extensions/revolution.extension.parallax.min.js"></script>

    <!-- revolution slider setup -->
    <script>
        revapi = jQuery('.rev-interactive').revolution({
            sliderType: "standard",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 9000,
            responsiveLevels: [1240, 1024, 778, 480],
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: [1240, 1024, 778, 480],
            gridheight: [600, 600, 500, 400],
            lazyType: "smart",
            shadow: 0,
            spinner: "off",
            stopLoop: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            parallax: {
                type: "on",
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85],
                origo: "enterpoint",
                speed: 400,
                bgparallax: "on",
                disable_onmobile: "off"
            },
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
        });
    </script>
    <!-- /revolution slider setup -->

    <!-- particleground -->
    <script type="text/javascript" src="js/jquery.particleground.js"></script>
    <script>
        particlesJS("particles-js", {
			"particles": {
				"number": {
					"value":223, "density": {
						"enable": true, "value_area": 800
					}
				}
				, "color": {
					"value": "#ffffff"
				}
				, "shape": {
					"type":"circle", "stroke": {
						"width": 0, "color": "#000000"
					}
					, "polygon": {
						"nb_sides": 5
					}
					, "image": {
						"src": "img/github.svg", "width": 100, "height": 100
					}
				}
				, "opacity": {
					"value":1, "random":true, "anim": {
						"enable": true, "speed": 1, "opacity_min": 0, "sync": false
					}
				}
				, "size": {
					"value":2, "random":true, "anim": {
						"enable": false, "speed": 4, "size_min": 0.3, "sync": false
					}
				}
				, "line_linked": {
					"enable": false, "distance": 150, "color": "#ffffff", "opacity": 0.4, "width": 1
				}
				, "move": {
					"enable":true, "speed":2.5, "direction":"top", "random":true, "straight":false, "out_mode":"out", "bounce":false, "attract": {
						"enable": false, "rotateX": 600, "rotateY": 600
					}
				}
			}
			, "interactivity": {
				"detect_on":"canvas", "events": {
					"onhover": {
						"enable": true, "mode": "bubble"
					}
					, "onclick": {
						"enable": true, "mode": "repulse"
					}
					, "resize":true
				}
				, "modes": {
					"grab": {
						"distance":400, "line_linked": {
							"opacity": 1
						}
					}
					, "bubble": {
						"distance": 250, "size": 0, "duration": 2, "opacity": 0, "speed": 3
					}
					, "repulse": {
						"distance": 400, "duration": 0.4
					}
					, "push": {
						"particles_nb": 4
					}
					, "remove": {
						"particles_nb": 2
					}
				}
			}
			, "retina_detect":true
		}
		
		);
    </script>
    <!-- /particleground -->
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/email.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>