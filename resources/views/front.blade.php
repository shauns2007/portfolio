<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
         <link href="{{ asset('css/portfolio.css') }}" rel="stylesheet">
         <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
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
                            <a href="https://www.linkedin.com/in/ssparg/" target="_blank"><span class="linkedin"><i class="fab fa-linkedin fa-2x"></i></span></a>
                        </div>
                        <div class="col blob">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet, diam vitae ultrices varius, est sapien convallis urna, tristique convallis lorem neque et magna. Donec gravida volutpat nibh, eu pretium massa egestas sed. Praesent sit amet tristique eros. Integer sit amet felis congue, lacinia lectus ac, congue turpis. Praesent in metus a purus malesuada volutpat. Praesent fermentum mauris quam, quis scelerisque tellus congue eu. Vestibulum egestas mattis nisi, nec malesuada lorem laoreet sit amet. Donec mattis enim sed leo maximus mollis. Phasellus ultrices elit ut ultricies rhoncus. Maecenas pellentesque facilisis diam, eget semper velit lacinia in. Aenean ultricies pharetra congue. Aenean semper tortor dictum, laoreet quam rhoncus, sodales odio. Nunc convallis, dolor sed hendrerit cursus, libero tellus lacinia augue, in tristique diam est non nulla..</p>
                            <p>Morbi sollicitudin ullamcorper nulla at euismod. Morbi vel mollis massa, a faucibus tortor. Mauris risus massa, auctor et nunc molestie, porttitor pretium leo. Integer efficitur commodo ipsum a vulputate. Phasellus elementum hendrerit turpis quis pulvinar. Etiam id magna eu purus facilisis pharetra ut sit amet orci. Donec molestie lorem imperdiet urna rutrum.</p>
                        </div>
                    </div>
                </section>  <!-- End of about -->
                <section class="portfolio">
                    <h4>Portfolio</h4>
                    <p>Etiam id magna eu purus facilisis pharetra ut sit amet orci. Donec molestie lorem imperdiet urna rutrum...</p>
                    <ul class="clearfix">
                        <li>
                            <article>
                                <img src="{{ asset('images/twisht.jpg') }}" class="img-fluid" alt="Shaun Sparg">
                                <p>twisht</p>
                            </article>
                        </li>
                        <li>
                            <article>
                                <img src="{{ asset('images/twisht.jpg') }}" class="img-fluid" alt="Shaun Sparg">
                                <p>twisht</p>
                            </article>
                        </li>
                        <li>
                            <article>
                                <img src="{{ asset('images/twisht.jpg') }}" class="img-fluid" alt="Shaun Sparg">
                                <p>twisht</p>
                            </article>
                        </li>
                        <li>
                            <article>
                                <img src="{{ asset('images/twisht.jpg') }}" class="img-fluid" alt="Shaun Sparg">
                                <p>twisht</p>
                            </article>
                        </li>
                    </ul>
                </section>
                <section class="skills">
                    <h4>Skills</h4>
                    PHP Web Applications
                    <div class="progress" style="height: 30px;">
                      <div class="progress-bar progress-bar-striped progress-bg" role="progressbar" style="width: 60%;">6/10</div>
                    </div>
                    jQuery
                    <div class="progress" style="height: 30px;">
                      <div class="progress-bar progress-bar-striped progress-bg" role="progressbar" style="width: 50%;">5/10</div>
                    </div>
                    Android Development
                    <div class="progress" style="height: 30px;">
                      <div class="progress-bar progress-bar-striped progress-bg" role="progressbar" style="width: 40%;">4/10</div>
                    </div>
                </section>
                <section class="experience">
                    <h4>Experience</h4>
                </section>
                <section class="contact">
                    <h4>Contact</h4>
                    <div class="row">
                        <div class="col">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="fullname" placeholder="Enter fullname">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Enter subject">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn float-right">Send</button>
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
    </body>
</html>
