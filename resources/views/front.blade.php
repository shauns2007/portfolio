<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                                    <a style="color: #17a2b8" href="https://www.linkedin.com/in/ssparg/" target="_blank"><i class="fab fa-git-square fa-2x"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col blob">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet, diam vitae ultrices varius, est sapien convallis urna, tristique convallis lorem neque et magna. Donec gravida volutpat nibh, eu pretium massa egestas sed. Praesent sit amet tristique eros. Integer sit amet felis congue, lacinia lectus ac, congue turpis. Praesent in metus a purus malesuada volutpat. Praesent fermentum mauris quam, quis scelerisque tellus congue eu. Vestibulum egestas mattis nisi, nec malesuada lorem laoreet sit amet. Donec mattis enim sed leo maximus mollis. Phasellus ultrices elit ut ultricies rhoncus. Maecenas pellentesque facilisis diam, eget semper velit lacinia in. Aenean ultricies pharetra congue. Aenean semper tortor dictum, laoreet quam rhoncus, sodales odio. Nunc convallis, dolor sed hendrerit cursus, libero tellus lacinia augue, in tristique diam est non nulla..</p>
                            <p>Morbi sollicitudin ullamcorper nulla at euismod. Morbi vel mollis massa, a faucibus tortor. Mauris risus massa, auctor et nunc molestie, porttitor pretium leo. Integer efficitur commodo ipsum a vulputate. Phasellus elementum hendrerit turpis quis pulvinar. Etiam id magna eu purus facilisis pharetra ut sit amet orci. Donec molestie lorem imperdiet urna rutrum.</p>
                        </div>
                    </div>
                </section>  <!-- End of about -->
                <section class="portfolio">
                    <h4>Projects</h4>
                    <p>Etiam id magna eu purus facilisis pharetra ut sit amet orci. Donec molestie lorem imperdiet urna rutrum...</p>
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

                        @endif  
                        </ul>
                </section>
                <section class="education">
                    <h4>Education</h4>
                </section>
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
                                    <input type="text" class="form-control" name="subject" placeholder="Enter subject">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="3"></textarea>
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

            $(document).ready(function(){

                var name = $('input[name="fullname"]');
                var email = $('input[name="email"]');
                var subject = $('input[name="subject"]');
                var msg = $('textarea[name="message"]');

                name.on('keyup', function(){
                    return countChars($(this));
                });

                email.on('keyup', function(){
                    return countChars($(this));
                });

                subject.on('keyup', function(){
                    return countChars($(this));
                });

                msg.on('keyup', function(){
                    return countChars($(this));
                });

                $('.send-email').on('click', function(e){
                    e.preventDefault();

                    if (name.val() == '') {
                        name.addClass('error');
                    }
                    if (subject.val() == '') {
                        subject.addClass('error');
                    }
                    if (msg.val() == '') {
                        msg.addClass('error');
                    }
                    if (!validateEmail(email.val())) {
                        email.addClass('error');
                    }
                });

                $('body').on('click', '.pagination a', function(e){
                    e.preventDefault();
                    var url = $(this).attr('href');
                    $.ajax({
                        url : url  
                    }).done(function (data) {
                        $('.project-list').fadeOut(function(){
                            $('.project-list').html(data);
                        });
                        $('.project-list').fadeIn();
                    }).fail(function () {
                        alert('Articles could not be loaded.');
                    });
                });
            });
        </script>
    </body>
</html>
