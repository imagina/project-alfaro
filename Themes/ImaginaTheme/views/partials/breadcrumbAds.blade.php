<x-isite::breadcrumb>
  <li class="breadcrumb-item text-capitalize store-index" aria-current="page">
    @if(isset($item->id))
      <a href="{{tenant_route(request()->getHost(), \LaravelLocalization::getCurrentLocale() . '.iad.ad.index')}}">
        {{ trans('iad::routes.ad.index.index') }}
      </a>
    @else
      {{ trans('iad::routes.ad.index.index') }}
    @endif
  </li>
  @if(isset($item->id))
    <li class="breadcrumb-item active" aria-current="page">{{$item->title}}</li>
  @endif
</x-isite::breadcrumb>

