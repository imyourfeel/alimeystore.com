<?php $categories = \App\Models\Category::with('subCategories')->get(); ?>
<header class="navigation">
    <div class="hide-for-medium">
        <div class="title-bar toggle" data-responsive-toggle="main-menu" data-hide-for="medium">
            <button class="menu-icon float-right" type="button" data-toggle="main-menu"></button>
            <a href="/" class="float-left small-logo"></a>
        </div>

        <div class="top-bar" id="main-menu">
            <div class="menu medium-horizontal expanded medium-text-center" data-dropdown-menu
                 data-responsive-menu="drilldown medium-dropdown" data-click-open="true"
                 data-disable-hover="true" data-close-on-click-inside="false">

                <div class="top-bar-title show-for-medium">
                    <a href="/" class="logo"></a>
                </div>

                <div class="top-bar-right">
                    <ul class="dropdown menu vertical medium-horizontal">
                        @if(isAuthenticated())
                            <li><a href="/about">About Us</a> </li>
                            <li><a href="#">{{ user()->username }}</a> </li>
                            <li>
                                <a href="/cart">Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="/logout">Logout</a> </li>
                        @else
                            <li><a href="/about">About Us</a> </li>
                            <li><a href="/login">Sign In</a> </li>
                            <li><a href="/register">Register</a> </li>
                            <li>
                                <a href="/cart">
                                    Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="show-for-medium">
        <div class="top-bar" id="main-menu">
            <div class="menu medium-horizontal expanded medium-text-center" data-dropdown-menu
                 data-responsive-menu="drilldown medium-dropdown" data-click-open="true"
                 data-disable-hover="true" data-close-on-click-inside="false">

                <div class="top-bar-title show-for-medium">
                    <a href="/" class="logo"></a>
                </div>
                <div class="top-bar-left">
                    <ul class="dropdown menu vertical medium-horizontal">
                        <li><a href="/">Alimey Store</a> </li>
                        @if(count($categories))
                            <li>
                                <a href="#">Categories</a>
                                <ul class="menu vertical sub dropdown">
                                    @foreach($categories as $category)
                                        <li>
                                            <a href="#">{{ $category->name }}</a>
                                            @if(count($category->subCategories))
                                                <ul class="menu sub vertical">
                                                    @foreach($category->subCategories as $subCategory)
                                                        <li>
                                                            <a href="#">
                                                                {{ $subCategory->name }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>

                <div class="top-bar-right">
                    <ul class="dropdown menu vertical medium-horizontal">
                        <li><!-- GTranslate: https://gtranslate.io/ -->
                            <a href="#" onclick="doGTranslate('en|en');return false;" title="English" class="gflag nturl"><img src="/images/en.png" alt="English" /></a>
                        </li>
                        <li><!-- GTranslate: https://gtranslate.io/ -->
                            <a href="#" onclick="doGTranslate('en|km');return false;" title="Khmer" class="gflag nturl"><img src="/images/kh.png" alt="Khmer" /></a>
                        </li>



                            <style type="text/css">
                            a.gflag img {border:0;}
                            #goog-gt-tt {display:none !important;}
                            .goog-te-banner-frame {display:none !important;}
                            .goog-te-menu-value:hover {text-decoration:none !important;}
                            body {top:0 !important;}
                            #google_translate_element2 {display:none!important;}
                            -->
                            </style>

                            <div id="google_translate_element2"></div>
                                <script type="text/javascript">
                                function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
                                </script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


                                <script type="text/javascript">
                                /* <![CDATA[ */
                                eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
                                /* ]]> */
                                </script>
                             <li><a href="/about">About Us</a> </li>
                        @if(isAuthenticated())

                            <li>{{ user()->username }}</li>
                            <li><a href="/logout">Logout</a> </li>
                            <li>
                                <a href="/cart">Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </a>
                            </li>
                        @else
                            <li><a href="/login">Sign In</a> </li>
                            <li><a href="/register">Register</a> </li>
                            <li>
                                <a href="/cart">Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
