<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;500;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href={{ asset('css/styles.css') }}>
        <style type="text/css">
            *{
                font-family: 'Roboto', sans-serif;
            }

        </style>
        <script src="https://kit.fontawesome.com/e4ff20d8c9.js" crossorigin="anonymous"></script>
    </head>
    <body>
        @php
            use Illuminate\Support\Facades\Session;
            $theme = '';
            
            if(session('themeBlack')){
                $theme = 'black';
                
            }else{
                $theme = 'white';
            }
        @endphp
        <header class="@php echo 'header_'.$theme @endphp">
            <nav class="grid">
                <div class="logo">
                    CRM
                </div>
                <div class="links">
                    <a class="link" href="#">WHY CRM?</a>
                    <a class="link" href="#">PRICING</a>
                    <a class="link" href="#">ABOUT US</a>
                    <a class="link" href="#">SUPPORT</a>
                    <a class="link" href="#">CONTACT</a>
                </div>
                <div class="change">
                    <form action="{{ route('change') }}" method="POST">
                        @csrf
                        <input type="submit" class="@php echo 'btn-change_'.$theme @endphp" value="CHANGE THEME">    
                    </form>                    
                </div>
                <div class="@php echo 'collapse_'.$theme @endphp">
                    <i class="fas fa-align-justify"></i>
                </div>
            </nav>
        </header>     
        <section class="main @php echo $theme @endphp" >
            <div class="grid">
                <div class="titulo">
                    <div>
                        @php
                        if($theme === 'black'){

                        echo "<p class='titulo_h1_black'>Fully customizable CRM for your business</p>";

                        }else{

                         echo "<p class='titulo_h1_white'>Complete solution for you business</p>";

                        }
                        @endphp
                        
                        <p class="titulo_p">we´re focused changing the way people do work.</p>
                        <p class="titulo_p2">Do you want in the action?</p>
                        <input type="submit" class="btn-start" value="START FREE TRIAL">
                        <input type="submit" class="btn-demo @php echo 'btn-demo_'.$theme @endphp" value="WATCH DEMO">
                    </div>
                </div>
                <div class="computador">
                    @php
                        if($theme === 'black'){

                        echo "<img class='img-pc' src='/pc_negra.PNG'>";

                        }else{

                         echo "<img class='img-pc' src='/pc.PNG'>";

                        }
                    @endphp
                    
                </div>
            </div>
        </section>

        <section class="@php echo 'section_flecha_'.$theme @endphp">
            <div class="grid">
                <div class="@php echo 'flecha_'.$theme @endphp">
                    <i class="fas fa-arrow-down"></i>
                </div>
            </div>
        </section>
        <section class="@php echo 'why_'.$theme @endphp">
            <div class="grid">
                <div class="@php echo 'texto_why_'.$theme @endphp">
                    <p class="@php echo 'parrafo_why_'.$theme @endphp">Why choose CRM?</p>
                    <p class="@php echo 'titulo_why_'.$theme @endphp">
                        CRM commit to productivity 
                    </p>
                    <p class="@php echo 'titulo_why2_'.$theme @endphp">
                        why freedom scheduling.
                    </p>
                </div>
            </div>
            <div class="grid">
                <div class="cuadros">
                    <div class="cuadro_black2" style="margin-bottom: -140px">
                        <div>
                            <img src="{{ asset('rayito.PNG') }}">
                            <h2 class="titulo_cuadro">
                                Efficiency
                            </h2>
                            <p class="parrafo_cuadro_black">
                                Your employees can work much more efficiently if they know what the plan for todays is.
                            </p>
                        </div>
                    </div>
                    <div class="@php echo 'cuadro_'.$theme @endphp" style="margin-top: -40px">
                        <div>
                            @php
                                if($theme === 'black'){
                                echo "<img src='/signo_negro.PNG'>";
                                }else{
                                 echo "<img src='/signo.PNG'>";
                                }
                            @endphp
                            <h2 class="titulo_cuadro">
                                Detail Analytics
                            </h2>
                            <p class="@php echo 'parrafo_cuadro_'.$theme @endphp">
                                Track your sales plan in real time. we build great tecnology in house, and put to work for you.
                            </p>
                        </div>
                    </div>
                    <div class="@php echo 'cuadro_'.$theme @endphp" style="margin-bottom: -140px">
                        <div>
                            @php
                                if($theme === 'black'){
                                echo "<img src='/atomo_nrego.PNG'>";
                                }else{
                                 echo "<img src='/atomo.PNG'>";
                                }
                            @endphp
                            <h2 class="titulo_cuadro">
                                Smart Management
                            </h2>
                            <p class="@php echo 'parrafo_cuadro_'.$theme @endphp">
                                The sysmtem gives you full visibilty and contril of you busineess taht willl help you drive new sales and embance portafoly.
                            </p>
                        </div>
                    </div>
                    <div class="@php echo 'cuadro_'.$theme @endphp" style="margin-top: -40px">
                        <div>
                            @php
                                if($theme === 'black'){
                                echo "<img src='/24_negro.PNG'>";
                                }else{
                                 echo "<img src='/24.PNG'>";
                                }
                            @endphp
                            <h2 style="color: #0058ff; font-weight: 500; padding-left: 10px;">
                                Word-Class
                            </h2>
                            <h2 class="titulo_cuadro2">
                                Customer Service
                            </h2>
                            <p class="@php echo 'parrafo_cuadro_'.$theme @endphp">
                                From now, you can focues your time on solving customer problems. Mekanson automatly creates cases from phone calls email, chat and the customers portal.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="@php echo 'footer_'.$theme @endphp">
            <div class="grid">
                <div class="items">
                    <div class="crm" style="margin-top: -120px; font-size: 1.5em; font-weight: 500;">
                        CRM
                    </div>
                    <div class="contact">
                        <p class="@php echo 'contact-p-m_'.$theme @endphp" >CONTACT</p>
                        <p class="contact-p" >hello@cms.com</p>
                        <p class="contact-p">(972) 3-560336</p>
                        <p class="contact-p">Haim pekeris street 4</p>
                        <p class="contact-p">Rehovon 7670204, USA</p>
                    </div>
                    <div class="products" style="margin-top: -60px">
                        <p class="@php echo 'contact-p-m_'.$theme @endphp" >PRODUCTS</p>
                        <p  class="contact-p">CRM Bee</p>
                        <p  class="contact-p">CRM Cheque</p>
                    </div>
                    <div class="pricing" style="margin-top: -68px">
                        <p class="@php echo 'pricing-p_'.$theme @endphp ">PRICING</p>
                        <p class="@php echo 'pricing-p_'.$theme @endphp">ABOUT US</p>
                        <p class="@php echo 'pricing-p_'.$theme @endphp">SUPPORT</p>
                    </div>
                    <div class="redes" style="margin-top: -90px">
                        <p class="@php echo 'redes-p_'.$theme @endphp">SOCIAL</p>
                        <div class="social">
                            <div class="item">
                            <i class="fab fa-facebook-square"></i>
                            </div>
                            <div class="item">
                                <i class="fab fa-linkedin"></i>
                            </div>
                            <div class="item">
                                <i class="fab fa-skype"></i>
                            </div>
                            <div class="item">
                                <i class="fab fa-youtube"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid">
               <div class="ultimo">
                    <div class="derechos">
                        @2020 CRM All rights reserved
                    </div>
                    <div class="derechos">
                        <a style="margin-right: 10px; cursor: pointer;" >Term of services</a>
                        <a style="cursor: pointer;">Privacy policy</a>
                    </div>
               </div>
            </div>
        </footer>
    </body>
</html>
