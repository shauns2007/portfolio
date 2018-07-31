<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/portfolio.css') }}" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/favicons/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/favicons/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicons/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicons/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicons/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicons/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/favicons/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicons/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('images/favicons/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicons/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/favicon-16x16.png')}}">
        <link rel="manifest" href="{{ asset('images/favicons/manifest.json')}}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('images/favicons/ms-icon-144x144.png')}}">
        <meta name="theme-color" content="#ffffff">
        <title>{{ config('app.name') }}</title>
    </head>
    <body>
        <header>
            <div class="container-fluid">
                <div class="intro">
                    <h1 class="text-center text-uppercase">Shaun Sparg</h1>
                    <h4 class="text-center">Web Developer</h4>
                    <h6 class="text-center font-italic">Aspiring Mobile Developer</h6>
                </div>
            </div>
            <div class="modal">
            </div>
        </header>
        <main>
            <div class="container">
                <section class="about">
                    <div class="row">
                        <div class="col">
                            <div class="portfolio-img">
                                <img src="{{ asset('images/me_200x200.jpg') }}" class="img-fluid mx-auto d-block" alt="Shaun Sparg">
                            </div>
                        </div>     
                    </div>
                    <div class="row">
                        <div class="social">
                            <ul>
                                <li>
                                    <a style="color: #17a2b8" href="https://www.linkedin.com/in/ssparg/" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
                                </li>
                                <li>
                                    <a style="color: #17a2b8" href="https://github.com/shauns2007" target="_blank"><i class="fab fa-git-square fa-2x"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col blob">
                            <p>I started messing around with code in around 2009 and was instantly intrigued by what one could potentially do. I then did a Internet and Web Design course at Unisa. Straight after that I did another course called Developing Web Applications with PHP. I played around after that for about a year just coding small things, I still remember finishing a little blog in Codeigniter and feeling so awesome, sounds silly I know! I then landed a 3 month job at Regis Management Services which I ended up at for 3 years! I did all their intranet stuff and quite a bit of mobile development, initially using PhoneGap but then I went native so I had more access to Androids API's. After a year and at my first performance review, I was promoted. I did most of my web development in Codeigniter as I was fast in it but then I read about Laravel and I have never looked back since.</p>
                            <p>So after 3 years I left Regis because I needed something fresh and I wanted to learn more. I got a job at Elemental Web Solutions. There I have worked on Wordpress (I won't lie, it's not my favourite) ,Zend, Laravel, Codeigniter and custom frameworks. Adding new and maintaining current client requirements.</p>
                        </div>
                    </div>
                </section>  <!-- End of about -->
                <section class="portfolio">
                    <h4>Projects</h4>
                    <div class="project-list">
                        @include('project-list')
                    </div>
                </section>
                <section class="courses">
                    <h4>Courses</h4>
                        <ul>
                        @if ($courses->count())
                            @for ($i = 0; $i < $courses->count(); $i++)
                                <li><div class="circle"></div><div>{{ $courses[$i]->year }} : {{ $courses[$i]->name }}</div></li>
                            @endfor
                        @else
                            <li class="no-content">No courses have been added yet</li>
                        @endif  
                        </ul>
                </section>
                {{-- <section class="education">
                    <h4>Education</h4>
                </section> --}}
                <section class="skills">
                    <h4>Skills</h4>
                    PHP Web Applications
                    <div class="progress" style="height: 30px;">
                      <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 60%;">6/10</div>
                    </div>
                    MySQL
                    <div class="progress" style="height: 30px;">
                      <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%;">5/10</div>
                    </div>
                    jQuery
                    <div class="progress" style="height: 30px;">
                      <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%;">5/10</div>
                    </div>
                    Android Development
                    <div class="progress" style="height: 30px;">
                      <div class="progress-bar progress-bar-striped progress-bg bg-info" role="progressbar" style="width: 40%;">4/10</div>
                    </div>
                </section>
                <section class="experience">
                    <h4>Experience</h4>
                    <div class="row">
                        <div class="col">
                            <div>Elemental Web Solutions</div><span>Mar 2016 - Current</span>
                            <ul>
                                <li>Development of Web Applications for clients</li>
                                <li>Restful API's</li>
                                <li>Database Design</li>
                                <li>Maintenance of existing solutions</li>
                                <li>Adding features to existing solutions</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div>Regis Management</div><span>Dec 2012 - Feb 2016</span>
                            <ul>
                                <li>Development of Mobile Applications for clients</li>
                                <li>Development of Web Applications for clients</li>
                                <li>Restful API's</li>
                                <li>Research of possible business solutions</li>
                                <li>Weekly stats reporting</li>
                                <li>Database Creation, Queries, Stored Procedures</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div>Cheshire South Africa</div><span>Nov 2011 - Nov 2012</span>
                            <ul>
                                <li>I was put in charge of maintaining and updating their joomla website.</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="contact">
                    <h4>Contact</h4>
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('front.contact') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" class="form-control" name="fullname" placeholder="Enter fullname">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="3" placeholder="Enter Message"></textarea>
                                </div>
                                <button type="button" class="btn float-right send-email bg-info">Send</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <footer>
            <div class="container-fluid">
                <p>&copy; {{ date('Y')}} shaunsparg.com</p>
            </div>
        </footer>
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script>
            function validateEmail(email) {
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
                    return true;
                }
                return false;
            }

            function countChars(a) {
                if (a.val().length == 0) {
                    a.addClass('error');
                } else {
                    if (a.attr('name') == 'email') {
                        if (!validateEmail(a.val())) {
                            a.addClass('error');
                        } else {
                            a.removeClass('error');
                        }
                    }
                    a.removeClass('error');
                }
            }

            function showLoader() {
                $('header .modal').html('<div class="lds-dual-ring"></div>');
                $('header .modal').show();
            }

            function hideLoader() {
                $('header .modal').html('');
                $('header .modal').hide();
            }

            $(document).ready(function(){
                $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                });
                var name = $('input[name="fullname"]');
                var email = $('input[name="email"]');
                var msg = $('textarea[name="message"]');

                name.on('keyup', function(){
                    return countChars($(this));
                });

                email.on('keyup', function(){
                    return countChars($(this));
                });

                msg.on('keyup', function(){
                    return countChars($(this));
                });

                $('.send-email').on('click', function(e){
                    e.preventDefault();
                    var pass = true;
                    if (name.val() == '') {
                        name.addClass('error');
                        pass = false;
                    }
                    if (msg.val() == '') {
                        msg.addClass('error');
                        pass = false;
                    }
                    if (!validateEmail(email.val())) {
                        email.addClass('error');
                        pass = false;
                    }

                    if (pass) {
                        showLoader();
                        var url = $(this).closest('form').attr('action');
                        $.post({
                            url : url,
                            data: {
                                name: name.val(), 
                                email: email.val(),
                                msg: msg.val()
                            }
                        }).done(function(data){
                            if(data.success) {
                                hideLoader();
                                $('header .modal').html(data.html);
                                $('header .modal').show();
                                name.val('');
                                email.val('');
                                msg.val('');
                            }
                        }).fail(function(jqXHR, textStatus, errorThrown){
                            hideLoader();
                        });
                    }
                });

                $('body').on('click', '.pagination a', function(e){
                    e.preventDefault();
                    var url = $(this).attr('href');
                    $.ajax({
                        url : url  
                    }).done(function(data) {
                        $('.project-list').fadeOut(function(){
                            $('.project-list').html(data);
                        });
                        $('.project-list').fadeIn();
                    }).fail(function() {
                        alert('Articles could not be loaded.');
                    });
                });

                $('.project-list').on('click', 'article', function(e){
                    e.stopPropagation();
                    showLoader();
                    var project_id = $(this).attr('data-id');
                    var url = "<?=url('projects')?>" + '/' + project_id;
                    $.ajax({
                        url:url
                    }).done(function(data){
                        hideLoader();
                        $('header .modal').html(data);
                        $('header .modal').show();
                        $('body').addClass('noscroll');
                    }).fail(function () {
                        hideLoader();
                        alert('Project could not be loaded.');
                    });
                });

                $('.modal').on('click', '.modal-close-btn', function(e){
                    e.stopPropagation();
                    $('header .modal').hide();
                    $('header .modal').empty();
                    $('body').removeClass('noscroll');
                });
            });
        </script>
    </body>
</html>
