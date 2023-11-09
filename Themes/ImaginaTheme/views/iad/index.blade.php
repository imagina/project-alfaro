@extends('layouts.master')

{{-- Meta --}}
@include('iad::frontend.partials.index.meta')


@section('content')

  <div id="content_index_commerce"
       class="page icommerce icommerce-index {{isset($category->id) ? 'iad-index-category iad-index-category-'.$category->id : ''}} pb-5">
    <div class="container py-3">
      <div class="row">
        <div class="col-12">
          @include('partials.breadcrumbAds')
        </div>
        <div class="content-sidebar-float col-3 sidebar">
          <livewire:isite::filters :filters="config('asgard.iad.config.filtersIndex')" :showBtnFilter="true"/>
        </div>
        <div class="col-lg-9">
          <livewire:isite::items-list
            moduleName="Iad"
            itemComponentName="iad::list-item"
            itemComponentNamespace="Modules\Iad\View\Components\ListItem"
            :itemComponentAttributes="['embedded' => true, 'layout' => 'iad-list-item-2']"
            entityName="Ad"
            :params="[
            'filter' => ['category' => $category->id ?? null],
            'include' => ['categories'],
            'take' => 12]"
            :showTitle="false"
            :configOrderBy="config('asgard.iad.config.orderBy')"
            :pagination="config('asgard.iad.config.pagination')"
            :configLayoutIndex="config('asgard.iad.config.layoutIndex')"/>
          <hr>
        </div>
      </div>
    </div>
  </div>
@stop
