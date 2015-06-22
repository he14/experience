        <div class="header">
            <div class="container">
                <div class="inner-container">
                    <div class="pure-hidden-tablet pure-hidden-desktop">
                        <a href="#menu" id="menuLink" class="menu-link">
                            <!-- Hamburger icon -->
                            <span></span>
                        </a>
                    </div>
                    <div class="pure-g">
                        <div class="pure-u-3-5 pure-u-md-1-5">
                            <h1 class="brand-title"><a href="/plattformen/experience-online/teama/"><span>eXperi</span>ence online</a></h1>
                        </div>
                        <div class="pure-u-2-5 pure-u-md-4-5 text-right pure-hidden-phone">
                            <div class="topmenu" id="topmenu">
    <div id="topmenu-inner" class="pure-menu pure-menu-open pure-menu-horizontal">
    <?php if ($primary_nav): print $primary_nav; endif; ?>
    </div>
</div>                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="pure-hidden-phone pure-hidden-tablet pure-hidden-desktop">
    <ul>
                                        <li class="pure-menu-selected pure-menu-selected"><a href="/dokumentation">Dokumentation</a></li>
                                        <li class=" "><a href="/blog">Blog</a></li>
                                        <li class=" "><a href="/downloads">Downloads</a></li>
                                        <li class=" "><a href="/demo">Demo</a></li>
            </ul>
</div>

        <div class="content-container">
    <div class="container">
        <div class="pure-g">
            <div class="pure-u-1 pure-u-md-2-3">
                <div class="content">
					<?php print render($page['content']); ?>
                </div>
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <div class="sidebar">
                    <h4>Sidebar</h4>
                    <div class="menu"><ul><li>Menuitem 1</li><li>Menuitem 2</li><li>Menuitem 3</li></ul></div>
                </div>
            </div>
        </div>
    </div>
</div>

        
        <div class="footer">
            <div class="container">
                <div class="pure-g">
                    <div class="pure-u-1 pure-u-md-1-4 footer-about">
                        <h3>Über eXperience Online</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="pure-u-1 pure-u-md-1-4">
                    </div>
                    <div class="pure-u-1 pure-u-md-1-4 footer-links">
                        <h3>Links</h3>
                        <?php print render($page['footer']); ?>
                    </div>
                    <div class="pure-u-1 pure-u-md-1-4">
                        <h3>Code</h3>
                        <ul>
                            <li>Menuitem 1</li>
                            <li>Menuitem 2</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="pure-g">
                    <div class="pure-u-1 footer-copyright">
                        &copy; 2015 HF-ICT / HE14
                    </div>
                </div>
            </div>
        </div>
        <script src="/plattformen/experience-online/teama/sites/all/themes/purecss/js/scripts.js"></script>