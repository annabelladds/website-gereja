<link rel="icon" href="{{ asset('img/church (2).png') }}">
<div id="carouselHero" class="carousel slide carousel-hero">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/Hero I.jpg" class="d-block w-100 img-hero" alt="Parhalado">
    </div>
    <div class="carousel-item">
      <img src="/img/Hero II.jpg" class="d-block w-100 img-hero" alt="Altar">
    </div>
    <div class="carousel-item">
      <img src="/img/Hero III.jpeg" class="d-block w-100 img-hero" alt="Ibadah">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselHero" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselHero" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<style>
.img-hero {
    width: 100%;
    height: auto !important;
  }

  .carousel-item {
    height: 100% !important;
    max-width: 100%;
    overflow: hidden !important;
  }

  @media (min-width: 576px) and (max-width: 991.98px) {
    .carousel-hero {
      padding-top:6% !important;
    }

    .img-hero {
    width: 100% !important;
    height: auto !important;
  }

  .carousel-item {
    height: 34% !important;
    max-width: 100% !important;
    overflow: hidden !important;
  }
  }

  @media (min-width: 992px) {
    .carousel-hero {
      padding-top: 4% !important;
    }

    .img-hero {
    width: 100% !important;
    height: auto !important;
  }

  .carousel-item {
    height: 90% !important;
    max-width: 100% !important;
    overflow: hidden !important;
  }
  }

  @media (max-width: 575.98px) {
    .carousel-hero {
      padding-top: 10% !important;
    }

    .img-hero {
    width: 100% !important;
    height: auto !important;
  }

  .carousel-item {
    height: 30% !important;
    max-width: 100% !important;
    overflow: hidden !important;
  }

    .carousel-control-prev-icon, .carousel-control-next-icon {
      width: 16px !important;
      height: 16px !important;
    }
  }
</style>
