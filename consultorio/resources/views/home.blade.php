@extends('layout.base')

@section('content')
    <section id="intro" class="intro-section">
        <!-- intro start -->
        <div class="container">
            <div class="row">
                <div class="col-md-5 intro-caption">
                    <h1 class="intro-title">Expert health advice <br>
                        for <span>wealth life</span> </h1>
                    <p>Nullam id commodo augueat cursus arcu tempaus acnteger porta massa sed lectus auctorsit amet suscipit tortor hendreriusce laoreet dui eu.</p>
                    <div class="page-scroll"> <a class="btn btn-default btn-orange" href="#about">MAKE AN APPOINTMENT</a> </div>
                    <br>
                    <p> OR </p>
                    <h1 class="call-num"> 1-800-643-4500 </h1>
                </div>
                <div class="col-md-7"> <img src="{{ asset('image/pic-1.png')}}" class="img-responsive" alt="doctor"> </div>
            </div>
        </div>
    </section>
    <!-- intro close -->
    <section id="about" class="about-section">
        <!-- about start -->
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>We offer a no obligation a free initial consultation</h1>
                    <p class="lead"> Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Various versions have evolved over the years, sometimes on purpose </p>
                    <div class="row block">
                        <div class="col-md-6">
                            <h3>Cardio Monitoring</h3>
                            <p>Nullam mo arcu ac molestie scelerisqu vulputate molestie mpus ipsum.</p>
                        </div>
                        <div class="col-md-6">
                            <h3>Medical Treatment</h3>
                            <p>Various versions have evolved over the years, sometimes by accident .</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Qualified Doctors</h3>
                            <p>Nullam mo arcu ac molestie scelerisqu vulputate molestie mpus ipsum.</p>
                        </div>
                        <div class="col-md-6">
                            <h3>Emergency Help</h3>
                            <p><strong>1-800-700-6200 - </strong> Plestie scelerisqu vulputate molestie ligula gravida .</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-offset-1 col-md-4">
                    <div class="appoinment-form">
                        <h3> Make an appointment today </h3>
                        <form role="form" onSubmit="return send_email();" action="{{ route('site.obrigado') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName">Name</label>
                                <input type="text" class="form-control" id="app_name" placeholder="Name" name="app_name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="text" class="form-control" id="app_email" placeholder="E-mail" name="app_email" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Phone</label>
                                <input type="text" class="form-control" id="app_phone" placeholder="Phone" name="app_phone">
                            </div>
                            <button type="submit" class="btn btn-block btn-orange btn-Submit" id="enviar" onclick="enviar()"> SUBMIT</button>
                            <small id="mail_msg"></small>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about close -->
    <section id="services" class="services-section">
        <!-- service start -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 block-title">
                    <h1> Awesome landing page for Medical and Health</h1>
                    <p>wealth.life was created to offer a perfect solution for medical landing page.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6  block">
                    <div class="row">
                        <div class="col-md-4 box-icon"> <i class="fa fa-building-o fa-4x"> </i> </div>
                        <div class="col-md-8 box-ct">
                            <h3> Great Infrastructure </h3>
                            <p> Lorem ipsum dolor sit ametconsectetur adipiscing elit. Suspendisse orci quam. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 block">
                    <div class="row">
                        <div class="col-md-4 box-icon"> <i class="fa fa-heart fa-4x"> </i> </div>
                        <div class="col-md-8 box-ct">
                            <h3> No Extra Fees </h3>
                            <p> Nullam mo arcu ac molestie scelerisqu vulputate, molestie ligula gravida, tempus ipsum.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 block">
                    <div class="row">
                        <div class="col-md-4 box-icon"> <i class="fa  fa-user-md  fa-4x"> </i> </div>
                        <div class="col-md-8 box-ct">
                            <h3> Health care solutions </h3>
                            <p> Donec vitae enim nec augue eleifend tempor eget non ligula. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 block">
                    <div class="row">
                        <div class="col-md-4 box-icon"> <i class="fa fa-ambulance fa-4x"> </i> </div>
                        <div class="col-md-8 box-ct">
                            <h3> 24/7 Ambulance Services </h3>
                            <p> <strong>1-800-700-6200 -</strong> Plestie scelerisqu vulputate, molestie ligula gravida, </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service close -->
    <section id="doctor" class="doctor-section">
        <!-- doctor section start -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 block-title">
                    <h1>Meet the Wealth.life Specialists Doctors </h1>
                    <p> Lorem ipsum dolor sit amet consectetur adipiscing elit uisquein.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 doctor-profile">
                    
                    <div class="bg-profile"> <a href="medicos"><img src="{{ asset('image/team-3.png')}}" alt="" ></a></div>
                    <h3>  </h3>
                    
                    <strong> |  </strong>
                    <p>  </p>
                    
                    <div class="social"> 
                        <a href="https://facebook.com" target="_blank">
                            <i class="fa fa-facebook-square fa-size"> </i>
                        </a> 
                        <a href="#" target="_blank">
                            <i class="fa fa-linkedin-square fa-size" target="_blank"> </i> 
                        </a> 
                        <a href="https://twitter.com/" target="_blank">
                            <i class="fa  fa-twitter-square fa-size"> </i> 
                        </a> 
                    </div>
                </div>
                <div class="col-md-4 doctor-profile">
                    <div class="bg-profile"> <a href="medico"><img src="{{ asset('image/team-1.png')}}" alt=""></a></div>
                    <h3> Robert Brown, Prof. </h3>
                    <strong>Anesthesiologist | (985) 231-1234</strong>
                    <p> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat </p>
                    <div class="social"> <a href="https://facebook.com"><i class="fa fa-facebook-square fa-size"> </i></a> <a href="#"><i class="fa fa-linkedin-square fa-size"> </i> </a> <a href="https://twitter.com/" target="_blank"><i class="fa  fa-twitter-square fa-size"> </i> </a> </div>
                </div>
                <div class="col-md-4 doctor-profile">
                    <div class="bg-profile"> <a href="medico"><img src="{{ asset('image/team-2.png')}}" alt=""></a></div>
                    <h3> Dr. Lita White </h3>
                    <strong> Neurosurgeon | (985) 231-1234</strong>
                    <p> Maecenas commodo turpis adipiscing, malesuada ipsum in, molestie magna. </p>
                    <div class="social"> <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook-square fa-size"> </i></a> <a href="#" target="_blank"><i class="fa fa-linkedin-square fa-size"> </i> </a> <a href="https://twitter.com/" target="_blank"><i class="fa  fa-twitter-square fa-size"> </i> </a> </div>
                </div>

            </div>
        </div>
        <div class="testimonials">
            <!-- Testimonials start -->
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 block-title">
                        <h1> What Customers are Saying about wealth.life </h1>
                        <p> Lorem ipsum dolor sit amet consectetur adipiscing elit </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"> <img src="{{ asset('image/men.jpg')}}" class="img-circle client-circle" alt="pic-4"> </div>
                    <div class="col-md-4">
                        <p> “As a caretaker, I was unfamiliar with how Medicare works. The agent I spoke with helped me determine which plan would be best.” </p>
                        <span> - Brandon Feil <a href="#"> ( Patient ) </a> </span>
                    </div>
                    <div class="col-md-2"> <img src="{{ asset('image/grl.jpg')}}" class="img-circle client-circle" alt="pic-4"> </div>
                    <div class="col-md-4">
                        <p> “As a caretaker, I was unfamiliar with how Medicare works. The agent I spoke with helped me determine which plan would be best.”</p>
                        <span> - Kiley Ellis <a href="#"> ( Patient ) </a> </span>
                    </div>
                </div>
            </div>
        </div><!-- Testimonials close -->
        <div class="container client">
            <!-- Client start -->
            <div class="row text-center">
                <div class="col-md-offset-2 col-md-8">
                    <h1> We trusted by thousand of client </h1>
                    <p> Lorem ipsum dolor sit amet consectetur adipiscing elit </p>
                </div>
            </div>
            <div class="row">
                <div id="owl-demo" class="client-logo">
                    <div class="item col-md-3"><img src="{{ asset('image/logo-3.png')}}" alt="client logo"></div>
                    <div class="item col-md-3"><img src="{{ asset('image/logo-2.png')}}" alt="client logo"></div>
                    <div class="item col-md-3"><img src="{{ asset('image/logo-3.png')}}" alt="client logo"></div>
                    <div class="item col-md-3"><img src="{{ asset('image/logo-2.png')}}" alt="client logo"></div>
                    <div class="item col-md-3"><img src="{{ asset('image/logo-3.png')}}" alt="client logo"></div>
                    <div class="item col-md-3"><img src="{{ asset('image/logo-2.png')}}" alt="client logo"></div>
                </div>
            </div>
        </div><!-- Client close -->
    </section><!-- doctor section close -->
    <section id="contact" class="contact-section">
        <!-- contact section start -->
        <div class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 text-center">
                        <h1> We offer a no obligation a free initial consultation </h1>
                        <p> Lorem ipsum dolor sit amet consectetur adipiscing elit uisque interdum ante eget faucibus mattistortor felis euismod nisl. </p>
                        <div class="page-scroll"><a href="#about" class="btn btn-default btn-orange"> MAKE AN APPOINTMENT</a></div>
                    </div>
                </div>
            </div>
            <div class="container ct-block text-center">
                <div class="row">
                    <div class="col-md-4 green-icon"> <i class="fa fa-ambulance fa-4x"> </i>
                        <h3> Fast Consultation &amp; Service </h3>
                        <p> Lorem ipsum doloonsectetur adipiscing elit uisttistortor felis euismod nisl. </p>
                    </div>
                    <div class="col-md-4 green-icon"> <i class="fa fa-headphones fa-4x"> </i>
                        <h3> Fast Consultation &amp; Service </h3>
                        <p> Nulla rutrum nibh eu libero vestibulum, suscipit posuere ipsum cursus. </p>
                    </div>
                    <div class="col-md-4 green-icon"> <i class="fa fa-comments fa-4x"> </i>
                        <h3> Fast Consultation &amp; Service </h3>
                        <p> Quisque sit amet augue tincidunt, volutpat nulla in, dapibus diam volutpat nulla in. </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row ct-info">
                    <div class="col-md-4">
                        <h3> 1-800-643-4500 </h3>
                    </div>
                    <div class="col-md-8">
                        <h3> Opening Hours : Monday to Saturday - 8am to 9pm </h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- contact section close -->
@stop