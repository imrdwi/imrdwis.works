<header id="site_header" class="header mobile-menu-hide">
  <div class="header-content">
    <div class="header-photo">
      <img src="{{ asset('site/img/imrdwi.jpg') }}" alt="Rizki Dwi Kurniawan">
    </div>
    <div class="header-titles">
      <h2>Rizki Dwi Kurniawan</h2>
      <h4>Backend Engineer</h4>
    </div>
  </div>

  <ul class="main-menu">
    <li class="active">
      <a href="#home" class="nav-anim">
        <span class="menu-icon lnr lnr-home"></span>
        <span class="link-text">Home</span>
      </a>
    </li>

    <li>
      <a href="#about" class="nav-anim">
        <span class="menu-icon lnr lnr-user"></span>
        <span class="link-text">About Me</span>
      </a>
    </li>
    <li>
      <a href="#resume" class="nav-anim">
        <span class="menu-icon lnr lnr-graduation-hat"></span>
        <span class="link-text">Resume</span>
      </a>
    </li>

    <li>
      <a href="#portfolio" class="nav-anim">
        <span class="menu-icon lnr lnr-briefcase"></span>
        <span class="link-text">Portfolio</span>
      </a>
    </li>

    <li>
      <a href="#contact" class="nav-anim">
        <span class="menu-icon lnr lnr-envelope"></span>
        <span class="link-text">Contact</span>
      </a>
    </li>
  </ul>

  <div class="social-links">
    <ul>
      <li>
        <a href="https://linkedin.com/in/imrdwi" target="_blank">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </li>

      <li>
        <a href="https://github.com/imrdwi" target="_blank">
          <i class="fab fa-github"></i>
        </a>
      </li>
    </ul>
  </div>

  <div class="header-buttons">
    <a href="{{ asset('downloads/cv.pdf') }}" target="_blank" class="btn btn-primary">Download CV</a>
  </div>

  <div class="copyrights">©{{ $year }} Made with ❤️ in Indonesia.</div>
</header>

<!-- Mobile Navigation -->
<div class="menu-toggle">
  <span></span>
  <span></span>
  <span></span>
</div>
<!-- End Mobile Navigation -->
