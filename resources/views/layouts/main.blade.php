<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAF | </title>
    <link rel="stylesheet" href="{{url('/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @yield('style')
    
</head>

<body>
    <header class="saf">
        <a href="/"><img src="/img/logo.png" alt="logo" id="logo"></a>
        <p>Student Administration Framework</p>
    </header>
    <nav>
        <ul class="site">
            <li class="">
                <a href="/students">STUDENTS</a>
                <p>{{$allregistered}} students registered</p>
            </li>
            <li class="">
                <a href="/studygroups">STUDY GROUPS</a>
                <p>{{$allstudygroup}} studygroups with {{$studentgroup}} students</p>
            </li>
        </ul>
    </nav>
    <main id='main'>
    @yield('content')
    </main>
    <footer>
        <p>&copy; New-Western High School, 2021.</p>
        <address itemscope itemtype="https://schema.org/PostalAddress">
            Address: <span itemprop="streetAddress">20341 Whitworth Institute 405 N. Whitworth</span><br>
            <span itemprop="addressLocality">Seattle</span>,
            <span itemprop="addressRegion">WA</span>
            <span itemprop="postalCode">98052</span><br>
            Mail: <a href="mailto:office@new-western.edu" itemprop="email">office@new-western.edu</a><br>
            Phone: <a href="tel:+14251234567" itemprop="telephone">(425) 123-4567</a>
        </address>
    </footer>
    <script>
        
    </script>
    </body>

</html>
