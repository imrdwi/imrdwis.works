<!-- Portfolio Subpage -->
<section data-id="portfolio" class="animated-section">
  <div class="page-title">
    <h2>Portfolio</h2>
  </div>

  <div class="section-content">
    <div class="row">
      <div class="col-xs-12 col-sm-12">
        <!-- Portfolio Content -->
        <div class="portfolio-content">
          <ul class="portfolio-filters">
            <li class="active">
              <a class="filter btn btn-sm btn-link" data-group="category_all">All</a>
            </li>

            <li>
              <a class="filter btn btn-sm btn-link" data-group="category_backend">Backend</a>
            </li>

            <li>
              <a class="filter btn btn-sm btn-link" data-group="category_mobile">Mobile App</a>
            </li>

            <li>
              <a class="filter btn btn-sm btn-link" data-group="category_web">Web App</a>
            </li>
          </ul>

          <!-- Portfolio Grid -->
          <div class="portfolio-grid three-columns">
            <figure class="item standard" data-groups='["category_all", "category_backend"]'>
              <div class="portfolio-item-img">
                <img src="{{ asset('site/img/portfolio/4.jpg') }}" alt="Media Project 1" title="" />
                <a href="portfolios/site1" class="ajax-page-load"></a>
              </div>

              <i class="far fa-file-alt"></i>
              <h4 class="name">Detailed Project 1</h4>
              <span class="category">Detailed</span>
            </figure>
          </div>
        </div>
        <!-- End of Portfolio Content -->
      </div>
    </div>
  </div>
</section>
<!-- End of Portfolio Subpage -->
