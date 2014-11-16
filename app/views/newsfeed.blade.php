@include('includes.top')
    <body>
        @include('includes.menu')
        @yield('body')
    <h3>Nyhetsfeed</h3>

<a class="twitter-timeline" href="https://twitter.com/NOKIOS2014" data-widget-id="533962516284452864">Tweets by @NOKIOS2014</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>





 @include('includes.bottom')