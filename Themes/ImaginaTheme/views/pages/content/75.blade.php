<div class="post blog single single-{{$page->slug}} single-{{$page->id}} post-{{$page->id}}">
  <div class="post-banner banner-breadcrumb-category position-relative">
    <div class="position-absolute h-100 w-100 content-title">
      <div class="container d-flex flex-column align-items-center w-100 h-100 justify-content-center">
        <h2 class="title-page text-white">
          {{ $page->title}}
        </h2>
        @include('page::frontend.partials.breadcrumb')
      </div>
    </div>
    <div class="content-title-hidden"></div>
    @if (isset($page) && !empty($page->mediafiles()->breadcrumbimage) &&
      strpos($page->mediaFiles()->breadcrumbimage->extraLargeThumb, 'default.jpg') == false)
      <x-media::single-image :title="$page->title" :isMedia="true" width="100%"
                             :mediaFiles="$page->mediaFiles()"
                             zone="breadcrumbimage"/>

    @else
      <div class="pb-5 pt-5" style="background-color: var(--primary)"></div>
    @endif
  </div>

  <div class="content-page col-12 pt-5 pb-3">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="col-12 title-post-section text-primary text-center pt-4 pb-2">
            <h1 class="post-title">
              {{$page->title}}
            </h1>
          </div>
          <div class="content-description">
            {!! $page->body !!}
          </div>
          <div class="form pb-5">
            <x-iforms::form id="4"/>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
