<div id="searchSection">
  <div class="content-section container">
    @if(isset($page) && $page->id == 1)
      <div class="title-section col-12 py-5">
        <div class="title-section-search py-2 text-center">
          {{trans('icustom::common.home.titleSectionSearch')}}
        </div>
      </div>
    @endif
    <div class="search-section col-12">
      @php
        $goToUrl = route(locale() . '.iad.ad.index');
        if(isset($notReedirect)){
          $goToUrl = null;
        }
      @endphp
      <livewire:isite::filters
        btnFilterLabel="Buscar"
        :goToUrl="$goToUrl"
        :filters="config('asgard.icustom.config.filtersSearch')"
        :showBtnFilter="true"
        :showBtnClear="false"
        :showResponsiveModal="false"
        layout="filter-layout-2"
      />
    </div>
  </div>
</div>
