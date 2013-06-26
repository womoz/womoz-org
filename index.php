<?php header('Content-Type:text/html; charset=UTF-8'); ?>
<!DOCTYPE HTML>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Women &amp; Mozilla</title>

        <meta name="description" content="Gender Equality in Mozilla and FLOSS">
        <meta name="keywords" content="mozilla, women, womoz, parity, equity, gender, FLOSS, free, software, opensource">

        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <link rel="icon" href="images/favicon.ico" type="image/ico">

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
        <script type="text/javascript" src="lib/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="lib/jquery.CarouSlide.min.js"></script>
        <link href="//www.mozilla.org/tabzilla/media/css/tabzilla.css" rel="stylesheet" />
        <script type="text/javascript">
            $(document).ready(function(){
                $(".s1").CarouSlide({
                animType:"fade",
                autoAnim:true,
                slideTime:5000,
                animTime:900,
                });
            });
        </script>
  
    </head>
    <body>

        <div id="wrap">
            <a href="http://www.mozilla.org/" id="tabzilla">mozilla</a>
            <div id="header">
                <div id="logo">
                    <a href="http://www.womoz.org"><img src="images/logo.png" alt="Women and Mozilla" width="160"></a>
                </div>
                <h1><a href="http://www.womoz.org">Women &amp; Mozilla</a></h1>
            </div>
            <div id="content">
    
                <div id="main">
                    <div class="slogan">
                        <h1>Join the Women & Mozilla community</h1>
                        <h2>Diversity is an important part of every team</h2>
                    </div>

                    <div class="CarouSlide s1">

                        <ul class="slider-holder">

                            <li id="no1">
                                <a href="http://www.womoz.org/blog/" alt="Women and Mozilla Blogs">
                                    <ul id="slide1-small">

                                        <li><span>latest news</span></li>

                                        <li><span>contributors' stories</span></li>

                                        <li><span>community events</span></li>

                                        <li><span>surveys and analysis</span></li>

                                    </ul>

                                    <span class="slide1-big">Women and Mozilla blogs</span>

                                </a>
                            </li>

                            <li id="no2">
                                <a href="http://womoz.mirocommunity.org/" alt="Women and Mozilla Video">
                                    <span>Explore our<br>video section</span>
                                </a>
                            </li>

                            <li id="no3">
                                <a href="http://womoz.org/wiki" alt="Women and Mozilla Wiki">
                                    <span>Visit our<br>WIKI<br>for projects<br>documentation</span>
                                </a>
                            </li>

                            <li id="no4">
                                <a href="http://lists.womoz.org/mailman/listinfo/womoz" alt="Women and Mozilla Newsletter">

                                    <ul id="slide1-small">

                                        <li><span>Join our mailing list<br />to keep up with our news</span></li>

                                    </ul>

                                    <span class="slide1-big">Women and Mozilla newsletter</span>
                                </a>
                            </li>

                        </ul>

                        <ul class="slider-nav">

                            <li id="item1"><a href="#no1">Blog</a></li>

                            <li id="item2"><a href="#no2">Video</a></li>

                            <li id="item3"><a href="#no3">Wiki</a></li>

                            <li id="item4"><a href="#no4">Mailing List</a></li>

                        </ul>

                    </div>
      
                    <div class="womanifesto">
                        <p>We are a community composed of members from different Open Source 
                            projects. We are mainly dedicated to improving women's visibility 
                            and involvement in Free/Open Source and Mozilla, and to increase 
                            the number of women contributors.</p>
                        
                        <p>Anyone can participate in this project, regardless of sex, age, 
                            job, etc. We are united by the common goal of promoting women's 
                            visibility and involvement in open source communities.</p>


                        <p>In fact, we believe that the Internet, FLOSS projects and computing 
                            must remain open and participatory. This also means accessible in the
                             same way to all - women and men alike.</p>

                        <p>As the Mozilla Manifesto underlines, we believe that all individuals 
                            must have the ability to shape their own experiences on the Internet. 
                            So let's give everyone the same opportunity to do so.</p>

                        <p>We believe solutions should continuously be proposed in order to improve
                         the visibility of all minorities, who for various reasons might not have
                          equal access to computers or the Internet. This project is an example of
                           this, as it aims at ameliorating women's presence and participation in
                            Mozilla and open source.</p>

                        <p><strong>We believe Open Source needs more women! :)</strong></p>

                    </div>
                </div>
    
                <div id="sidebar">
                    <div id="donate-box">
                        <p>Donate and get the 2010 Mozilla shirt 
                            <a href="http://www.mozilla.org/foundation/openwebfund/?WT.ac=adopt_h">Donate&nbsp;now&nbsp;</a>
                        </p>
                    </div>
                    <?php        
                    require_once('simplepie/php/simplepie.inc');
                    // Process feed with defaults
                    $feed = new SimplePie();
                    $feed->set_feed_url('http://www.womoz.org/blog/feed/');
                    $feed->set_cache_location('simplepie/cache');
             
                    # Start and send text/html in UTF-8
                    $feed->set_output_encoding('UTF-8');
                    $feed->init();
                    $feed->handle_content_type();
                  
                    function shorten_string($text, $char) {
                      $text = substr($text, 0, $char);
                      if(substr($text, 0, strrpos($text, ' '))!='') $text = substr($text, 0, strrpos($text, ' '));
                      $text = $text.'...';
                      return $text;
                    }

                    # Loop through the items, set $item to current item      
                    foreach ($feed->get_items(0, 4) as $item):
                  ?>
             
                    <div class="item">
                        <h4><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h4>
                        <p><?php echo shorten_string($item->get_description(), 100); ?></p>
                        <p><small>Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small></p>
                        <hr>
                    </div>
             
                    <?php endforeach; ?>
                </div>
    
                <hr class="clear">
    
            </div>
  
            <div id="footer">
                <div class="copyright">
                    <a href="http://www.mozilla.org/" id="logo-footer"><img width="60" alt="WoMoz" src="images/logo.png"></a>
                    <p id="copyright">Portions of this content are &copy;1998&ndash;2012 by individual mozilla.org contributors. Content available under a Creative Commons <a href="http://www.mozilla.org/foundation/licensing/website-content.html">license</a>.</p>
                    <p id="copyright-links">
                        <a class="first" href="http://www.mozilla.org/contact/">Contact Us</a><br>
                        <a href="http://www.mozilla.org/about/policies/privacy-policy.html">Privacy Policy</a><br>
                        <a href="http://www.mozilla.com/en-US/legal/fraud-report/index.html">Report Trademark Abuse</a>
                    </p>
                </div>
                <div class="fotterul">
                    <h5><strong>About Mozilla</strong></h5>
                    <ul>
                        <li><a href="http://www.mozilla.org/about/mission.html">Mission</a></li>
                        <li><a href="http://www.mozilla.org/community/forums/">Forums</a></li>
                        <li><a href="http://www.mozilla.org/about/governance.html">Governance</a></li>
                        <li><a href="http://www.mozilla.org/about/organizations.html">Organizations</a></li>
                        <li><a href="http://www.mozilla.org/grants/">Grants</a></li>
                        <li><a href="http://www.mozilla.org/about/history.html">History</a></li>
                        <li><a href="http://www.mozilla.org/about/">More...</a></li>
                    </ul>
                </div>
                <div class="fotterul">
                    <h5><strong>Community Map</strong></h5>
                    <ul>
                        <li><a href="http://www.mozilla.org/community/index.html#applications">Applications</a></li>
                        <li><a href="http://www.mozilla.org/community/index.html#code">Code</a></li>
                        <li><a href="http://www.mozilla.org/community/index.html#incubators">Incubators</a></li>
                        <li><a href="http://www.mozilla.org/community/index.html#community-sites">Community Sites</a></li>
                        <li><a href="http://www.mozilla.org/community/directory.html">Directory</a></li>
                        <li><a href="http://www.mozilla.org/community/">More...</a></li>
                    </ul>
                </div>
                <div class="fotterul">
                    <h5><strong>Our Projects</strong></h5>
                    <ul>
                        <li><a href="http://www.firefox.com">Firefox</a></li>
                        <li><a href="http://www.getthunderbird.com">Thunderbird</a></li>
                        <li><a href="http://www.drumbeat.org/projects">Drumbeat</a></li>
                        <li><a href="http://www.mozillalabs.com/projects">Mozilla Labs</a></li>
                        <li><a href="http://www.mozilla.org/support">Support</a></li>
                        <li><a href="https://addons.mozilla.org">Add-ons</a></li>
                        <li><a href="http://www.mozilla.org/security/announce">Security Advisories</a></li>
                        <li><a href="http://www.mozilla.org/projects/">More...</a></li>
                    </ul>
                </div>
                <div class="fotterul">
                    <h5><strong>Get Involved</strong></h5>
                    <ul>
                        <li><a href="https://developer.mozilla.org/En/Developer_Guide">Developing</a></li>
                        <li><a href="https://developer.mozilla.org/Project:en/How_to_Help">Documentation</a></li>
                        <li><a href="http://www.mozilla.org/foundation/donate.html">Donate</a></li>
                        <li><a href="https://wiki.mozilla.org/L10n">Localization</a></li>
                        <li><a href="http://contribute.mozilla.org/Marketing">Marketing</a></li>
                        <li><a href="http://quality.mozilla.org/">Testing</a></li>
                        <li><a href="http://blog.mozilla.com/webdev/get-involved/">Webdev</a></li>
                        <li><a href="http://www.mozilla.org/contribute">More...</a></li>
                    </ul>
                </div>
            
                <hr class="clear">
                <script src="//www.mozilla.org/tabzilla/media/js/tabzilla.js"></script>
            </div>
        </div>
    </body>
 </html>