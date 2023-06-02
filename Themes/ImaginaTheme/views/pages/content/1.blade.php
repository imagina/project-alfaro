<div class="home page page-{{$page->id}}">
  <x-ibuilder::block systemName="blockSliderHome"/>
  <div class="search-home py-3" style="background-image: url({{setting("icustom::imageBackgroundSearch")}})">
    <x-isite::edit-link link="/iadmin/#/site/settings?settings=imageBackgroundSearch&module=icustom"/>
    @include('partials.searchSection')
  </div>
  <x-ibuilder::block systemName="blockCarouselServices"/>
  @include('partials.adSection')
  <x-ibuilder::block systemName="blockCarouselInfo"/>
  <x-ibuilder::block systemName="blockCarouselCategoryBlog"/>
</div>

