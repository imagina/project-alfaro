<section id="adsSection" class="">
  @php
    $customNewsCategoriesHome = json_decode(setting('icustom::categoriesAdsInHome',null,"[]"));
    $adRepository = app('Modules\Iad\Repositories\CategoryRepository');
    $params = ['filter' => ['ids' => $customNewsCategoriesHome]];
    $categories = $adRepository->getItemsBy(json_decode(json_encode($params)));
  @endphp
  <div class="container">
    <h3 class="content-title text-primary">
      <span class="d-block pb-5 mt-3 title text-center">
        {{trans('icustom::common.home.titleAdsFeatured')}}
      </span>
    </h3>
    <ul class="nav nav-tabs pins-tabs d-flex justify-content-center" role="tablist">
      @php($counter = 0)
      @foreach($categories as $category)
        
        @php($counter++)
        @php($counter == 1 ? $state = 'active' : $state = ' ')
        <li class="nav-item">
          <a class="nav-link {{$state}}" id="pin-tab-{{$category->id}}"
             data-toggle="tab" href="#tab-{{$category->id}}" role="tab" aria-controls="home" aria-selected="true">
            {{$category->title}}
          </a>
        </li>
      @endforeach
    </ul>
    <div class="tab-content border-top border-bottom border-white">
      @php($counter = 0)
      @foreach($categories as $category)
        @php($counter++)
        @php($counter == 1 ? $state = 'show active' : $state = ' ')
        <div class="tab-pane fade {{$state}}" id="tab-{{$category->id}}"
             role="tabpanel" aria-labelledby="pin-tab-{{$category->id}}">
          <livewire:isite::items-list
            moduleName="Iad"
            itemComponentName="iad::list-item"
            itemComponentNamespace="Modules\Iad\View\Components\ListItem"
            :itemComponentAttributes="['layout' => 'iad-list-item-2']"
            entityName="Ad"
            :showTitle="false"
            :params="[
                   'include' => ['city','schedule','fields','categories','translations','files'],
                   'filter' =>['categories'=> [$category->id], 'status' => [2,3], 'order' => ['field' => 'uploaded_at', 'way' => 'desc'] ],
                   'take' => 8]"
            :responsiveTopContent="['mobile'=>false,'desktop'=>false]"
            :configLayoutIndex="config('asgard.iad.config.layoutIndex')"
            :pagination="['type' => 'infiniteScroll']"
            :key="'itemListsMain'.$category->id"
            :uniqueItemListRendered="true"
          />
        </div>
      @endforeach
    </div>
  </div>
</section>

