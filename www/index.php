<?php

$mps = json_decode(file_get_contents("mps.json"));

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>#ReformAct</title>

        <meta name="viewport" content="initial-scale=1.0">

        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="/style.css">
    </head>
    <body>

        <div id="frontpage" class="jumbotron page current">
            <h1>#ReformAct</h1>
            <p>
                By all accounts, the soon-to-be-tabled Reform Act will go a long way to fixing the Canadian Parliament.
            </p>

            <div class="row nav-primary">
                <div class="col-sm-4">
                    <a href="#about" class="btn btn-block btn-primary">
                        <i class="fa fa-question-circle"></i>
                        Learn more about the act
                    </a>
                </div>

                <div class="col-sm-4">
                    <a href="#action" class="btn btn-block btn-primary">
                        <i class="fa fa-question-circle"></i>
                        Contact a Member of Parliament
                    </a>
                </div>

                <div class="col-sm-4">
                    <a href="#conversation" class="btn btn-block btn-primary">
                        <i class="fa fa-comments-o"></i>
                        Join the conversation
                    </a>
                </div>

                <div class="col-sm-4">
                    <a href="#spread" class="btn btn-block btn-primary">
                        <i class="fa fa-bullhorn"></i>
                        Spread the word
                    </a>
                </div>
            </div>
        </div>

        <section id="about" class="container page">
            <div class="page-header">
                <span class="to-top"><a href="#">Back to top</a></span>
                <h1>What is The Reform Act?</h1>
            </div>

            <p>
                An excellent overview of the act is
                <a href="http://fullcomment.nationalpost.com/2013/11/29/andrew-coyne-reform-act-bill-would-change-canadas-parliament-forever/" target="_blank">
                    Andrew Coyne's article
                </a>
                about The Reform Act. The bill will be tabled on Thursday December 5th.
            </p>
        </section>

        <section id="action" class="container page">
            <div class="page-header">
                <span class="to-top"><a href="#">Back to top</a></span>
                <h1>Contact an MP</h1>
            </div>
            <p class="lead">
            Every Member of Parliament needs to hear about how important this bill is. Please email, call and tweet at the below MPs (chosen
            randomly) and let them know your thoughts. Refresh the page as many times as you'd like to keep going.
            </p>

            <div class="row">
            <?php
            for ($x = 0; $x < 3; $x++) {
              shuffle($mps);
              $rand_mp = $mps[0];
              $tel = $rand_mp->telephone;
              $matches = array();
              if (preg_match('/^(\d\d\d)(\d\d\d)(\d\d\d\d)/',$tel,$matches)) {
                $tel = "{$matches[1]}-{$matches[2]}-{$matches[3]}";
              }
              ?>
              <div class="col-md-4">
              <p>
              <b><?php print $rand_mp->name; ?></b> (<?php print $rand_mp->province; ?>)</br>
              <?php print $rand_mp->riding; ?><br/>
              <?php print $tel; ?></b></br>
              <a target="_blank" href="mailto:<?php print $rand_mp->email; ?>?Subject=Reform Act&Body=What are your thoughts on the proposed Reform Act?"><?php print $rand_mp->email; ?></a><br/>
              <?php
              if ($rand_mp->twitter != '') {
                $default_text = "I like what I've heard about @TheReformAct so far. What are your thoughts?";
                $default_text = urlencode($default_text);
                ?>
                <a href="https://twitter.com/intent/tweet?screen_name=<?php print $rand_mp->twitter; ?>&text=<?php print $default_text; ?>" class="twitter-mention-button" data-related="@TheReformAct"
                >Tweet to <?php print $rand_mp->twitter; ?></a>
                <?php
              }
              ?>
              </p>
              </div>
              <?php
            }
            ?>
            </div>
        </section>

        <section id="conversation" class="container page">
            <div class="page-header">
                <span class="to-top"><a href="#">Back to top</a></span>
                <h1>Join the conversation</h1>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <p class="lead">
                        Join the discussion on Twitter with the hashtag <b>#ReformAct</b>.
                    </p>

                    <p>
                        For news related to The Reform Act, you can find us on Twitter:
                        <a href="https://twitter.com/TheReformAct" class="twitter-follow-button"
                          data-show-count="false"
                          data-lang="en">@TheReformAct</a>
                    </p>
                    <p>
                        <a href="https://www.facebook.com/TheReformAct">and on Facebook</a>:
                        <div class="fb-like"
                            data-href="https://www.facebook.com/TheReformAct"
                            data-layout="box_count"
                            data-action="like"
                            data-show-faces="false"
                            data-share="false"></div>
                    </p>
                </div>

                <div class="col-md-6">
                    <a class="twitter-timeline" href="https://twitter.com/search?q=%23ReformAct"
                        data-widget-id="406849771685416960"
                        data-related="TheReformAct"
                        data-chrome="transparent"></a>
                </div>
            </div>
        </section>

        <section id="spread" class="container page">
            <div class="page-header">
                <span class="to-top"><a href="#">Back to top</a></span>
                <h1>Spread the word</h1>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <h4 class="text-center">Share this page!</h4>

                    <div class="text-center">
                        <div class="share-buttons">
                            <div class="fb-like"
                                data-href="http://ReformAct.ca"
                                data-layout="box_count"
                                data-action="like"
                                data-show-faces="false"
                                data-share="false"></div>

                            <a class="twitter-share-button" href="https://twitter.com/share"
                                data-hashtags="ReformAct,cdnpoli"
                                data-via="TheReformAct"
                                data-related="TheReformAct"
                                data-count="vertical"
                                data-text="I'm liking what I've heard about the Reform Act so far."
                                data-url="http://ReformAct.ca"
                                data-lang="en"></a>

                            <div class="g-plusone"
                                data-size="tall"
                                data-href="http://ReformAct.ca"
                                data-annotation="bubble"></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <h4 class="text-center">Tweet at the party leaders</h4>
                    <p class="text-center">
                        <a class="twitter-share-button" href="https://twitter.com/share"
                            data-text=".@pmharper @JustinTrudeau @ElizabethMay @ThomasMulcair @claude_patry: please support the #ReformAct"
                            data-url="http://ReformAct.ca"
                            data-related="TheReformAct"
                            data-counturl="http://ReformAct.ca/?tweetleaders"
                            data-size="large"
                            data-lang="en">Tweet</a>
                    </p>
                </div>

                <div class="col-sm-4">
                    <h4 class="text-center">Email your MP</h4>
                    <p class="text-center">
                        <i>(coming soon)</i>
                    </p>
                </div>
            </div>
        </section>

        <footer class="container">
            <p class="text-center">
                <a href="#">Back to top</a>
                <br>
                Contribute to this site <a href="https://github.com/kevinodotnet/reformactwww">on GitHub</a>.
                <br>
                <a href="http://twitter.com/odonnell_k">@odonnell_k</a> setup this website, 
                <a href="https://twitter.com/dpogue">@dpogue</a> has contributed to it. 
                <br>
                We hope you will to.
            </p>
        </footer>

        <script>
            var current_page = document.getElementById('frontpage');
            function handleRouting() {
                var el = null;
                if (location.hash && location.hash.length > 1) {
                    el = document.querySelector(location.hash);
                } else {
                    el = document.getElementById('frontpage');
                }

                if (el) {
                    el.className += ' current';

                    if (current_page != el) {
                        current_page.className = current_page.className.replace(/ current/g,'');
                    }

                    current_page = el;
                }
            }
            window.onhashchange = handleRouting;
            handleRouting();
        </script>

        <!-- Social Media stuff that gets initialized after onload -->
        <div id="fb-root"></div><!-- fb needs this -->
        <script>
            function initMedia(d, w, s) {
                var js, fjs = d.getElementsByTagName(s)[0], g = 'ga', load = function(url, id) {
                    if (d.getElementById(id)) {return;}
                    js = d.createElement(s); js.src = url; js.id = id;
                    fjs.parentNode.insertBefore(js, fjs);
                };

                load('//connect.facebook.net/en_US/all.js#xfbml=1&appId=743342905682343', 'fbjssdk');
                load('https://apis.google.com/js/plusone.js', 'gplus1js');
                load('//platform.twitter.com/widgets.js', 'tweetjs');

                w['GoogleAnalyticsObject'] = g;
                w[g] = w[g] || function() { (w[g].q = w[g].q || []).push(arguments)};
                load('//www.google-analytics.com/analytics.js', 'ganalytics');
            }

            function load_handler() {
                initMedia(document, window, 'script');

                ga('create', 'UA-6324294-27', 'ReformAct.ca');
                ga('send', 'pageview');
            }

            if (!window.addEventListener) {
                window.attachEvent('onload', load_handler);
            } else {
                window.addEventListener('load', load_handler, false);
            }
        </script>
    </body>
</html>
