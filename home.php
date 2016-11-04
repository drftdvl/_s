<?php
	get_header();
?>

<h1>Home</h1>
<a href="<?php get_home_url(); ?> /box/tracker">Tracker</a>
<a href="<?php get_home_url(); ?> /box/about">About Us</a>

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo right">Logo</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>

<?php
get_footer();
?>
<a href="<?php get_home_url(); ?> /box/wp-admin">WordPress Login</a>