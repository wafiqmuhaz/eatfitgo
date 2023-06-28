<!-- resources/views/components/product.blade.php -->
<div class="col-lg-2 col-md-2 portfolio-item filter-{{ $filter }}">
  <div class="portfolio-wrap">
    <img src="{{ $image }}" class="img-fluid" alt="">
    <div class="portfolio-links">
      <a href="{{ $image }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $title }}"><i class="bx bx-area"></i></a>
      <a href="/portfolio" title="More Details"><i class="bx bx-link"></i></a>
    </div>
  </div>
</div>
