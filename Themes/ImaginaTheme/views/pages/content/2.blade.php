<div class="page page-{{$page->id}} page-our">
  <div class="page-banner banner-breadcrumb-category position-relative">
    <div class="position-absolute h-100 w-100 content-title">
      <div class="container d-flex flex-column align-items-center w-100 h-100 justify-content-center">
        <h1 class="title-page text-white">
          {{$page->title}}
        </h1>
        @include('page::frontend.partials.breadcrumb')
      </div>
    </div>
    <div class="content-title-hidden"></div>
    @if (isset($page) && !empty($page->mediafiles()->breadcrumbimage)
        && strpos($page->mediaFiles()->breadcrumbimage->extraLargeThumb, 'default.jpg') == false)
      <x-media::single-image
        :title="$page->title"
        :isMedia="true" width="100%"
        :mediaFiles="$page->mediaFiles()"
        zone="breadcrumbimage"/>
    @else
      <div class="pb-5 pt-5" style="background-color: var(--primary)"></div>
    @endif
  </div>
  <div class="content-page col-12 pt-5 pb-3">
    <div class="container">
      <div class="row justify-content-center">
        @if (isset($page) && !empty($page->mediafiles()->mainimage)
            && strpos($page->mediaFiles()->mainimage->extraLargeThumb, 'default.jpg') == false)
          <div class="col-md-10 page-image m-auto pt-1 pb-3">
            <x-media::single-image
              :title="$page->title"
              :isMedia="true" width="100%"
              :mediaFiles="$page->mediaFiles()"
              zone="mainimage"/>
          </div>
        @endif
        <div class="col-md-10">
          <div class="content-description">
            {!! $page->body !!}
          </div>
          <x-ibuilder::block systemName="blockCarouselDirectivos"/>
          <x-ibuilder::block systemName="blockCarouselCategoryBlog"/>
        </div>
      </div>
    </div>
  </div>
</div>
