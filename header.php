<?php include("./header-core.php"); ?>
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 logo-wrapper">
                        <div class="logo">
                            <a href="./"><img src="./images/logo.svg" alt="Villalet" class="svg"></a>
                        </div>
                        <div class="tagline">
                            <p>a curated collection of luxury villas</p>
                            <p>in Bali and beyond</p>
                        </div>
                    </div>
                    <div class="col-md-4 header-form-wrapper">
                        <div class="header-form">
                            <select name="language" id="lang" class="header-form-control">
                                <option value="en">EN</option>
                                <option value="en">ID</option>
                                <option value="en">JP</option>
                            </select>
                            <select name="currency" id="curr" class="header-form-control">
                                <option value="en">USD</option>
                                <option value="en">IDR</option>
                                <option value="en">JPY</option>
                            </select>
                            <button type="submit" class="header-form-control">Login</button>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Destinations <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Seminyak</a></li>
                                    <li><a href="#">Ubud</a></li>
                                    <li><a href="#">Canggu</a></li>
                                    <li><a href="#">Koh Samui</a></li>
                                    <li><a href="#">Phuket</a></li>
                                    <li><a href="#">Fiji</a></li>
                                    <li><a href="#">Sri Langka</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Guide</a></li>
                            <li><a href="./property-detail.html">Deals and Specials</a></li>
                            <li><a href="#">How to book</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#">
                                    <i class="icon icon-bell"></i> 
                                    <span>Help me find a villa</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
