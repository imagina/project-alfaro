<div class="home page page-{{$page->id}}">
  <x-ibuilder::block systemName="blockSliderHome"/>
  <div class="search-home py-3"
       style="background: url({{setting("icustom::imageBackgroundSearch")}}),
                          url({{setting("icustom::imageBackgroundSearch2")}}),
                          #EDEDED">
    <x-isite::edit-link link="/iadmin/#/site/settings?settings=imageBackgroundSearch&module=icustom"/>
    @include('partials.searchSection')
  </div>
  <x-ibuilder::block systemName="blockCarouselServices"/>
  @include('partials.adSection')
  <x-ibuilder::block systemName="blockCarouselInfo"/>
  <x-ibuilder::block systemName="blockCarouselCategoryBlog"/>
</div>
