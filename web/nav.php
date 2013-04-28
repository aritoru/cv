<!-- mobile-nav -->
<div id="mobile-nav-holder">
    <div class="wrapper">
        <ul id="mobile-nav">
            <li <?php if ($_REQUEST['section'] == 'home') echo 'class="current-menu-item"'; ?>><a href="index.php">home</a></li>
            <li <?php if ($_REQUEST['section'] == 'cv') echo 'class="current-menu-item"'; ?>><a href="index.php?section=cv">curriculum vitae</a></li>
            <?php /* <li <?php if ($_REQUEST['section'] == 'projects') echo 'class="current-menu-item"'; ?>><a href="index.php?section=projects">projects</a></li>*/ ?>
            <li <?php if ($_REQUEST['section'] == 'contact') echo 'class="current-menu-item"'; ?>><a href="index.php?section=contact">contact</a></li>
        </ul>
        <div id="nav-open"><a href="#">Menu</a></div>
    </div>
</div>
<!-- ENDS mobile-nav -->

<header>


    <div class="wrapper">

        <?php /* ?><a href="index.php" id="logo"><img  src="img/logo.png" alt="home"></a><?php */ ?>
        <a href="index.php" id="logo"><h1 id="logoText"><span class="orangized">A</span>ritoru.com</h1></a>

        <nav>
            <ul id="nav" class="sf-menu">
                <li <?php if ($_REQUEST['section'] == 'home') echo 'class="current-menu-item"'; ?>><a href="index.php?section=home">home<span class="subheader">welcome</span></a></li>
                <li <?php if ($_REQUEST['section'] == 'cv') echo 'class="current-menu-item"'; ?>><a href="index.php?section=cv">curriculum<span class="subheader">vitae</span></a></li>
                <?php /* <li <?php if ($_REQUEST['section'] == 'projects') echo 'class="current-menu-item"'; ?>><a href="index.php?section=projects">projects<span class="subheader">recent work</span></a></li> */ ?>
                <li <?php if ($_REQUEST['section'] == 'contact') echo 'class="current-menu-item"'; ?>><a href="index.php?section=contact">contact<span class="subheader">get in touch</span></a></li>                
            </ul>
        </nav>

        <div class="clearfix"></div>

    </div>
</header>
