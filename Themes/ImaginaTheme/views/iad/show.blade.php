@extends('layouts.master')

{{-- Meta --}}
@section('meta')
  <meta name="title" content="{{$item->meta_title??$item->title}}">
  <meta name="keywords" content="{{$item->meta_keyword ?? ''}}">
  <meta name="description" content="{{$item->meta_description??$item->description}}">

  <!-- Schema.org para Google+ -->
  <meta itemprop="name"
        content="{{$item->meta_title??$item->title}}">
  <meta itemprop="description"
        content="{{$item->meta_description??$item->description}}">
  <meta itemprop="image"
        content=" {{url($item->mediaFiles()->mainimage->path ?? 'modules/icommerce/img/product/default.jpg') }}">
  <!-- Open Graph para Facebook-->

  <meta property="og:title"
        content="{{$item->meta_title??$item->title}}"/>
  <meta property="og:type" content="article"/>
  <meta property="og:url" content="{{$item->url}}"/>
  <meta property="og:image"
        content="{{url($item->mediaFiles()->mainimage->path ?? 'modules/icommerce/img/product/default.jpg') }}"/>
  <meta property="og:description"
        content="{{$item->meta_description??$item->description}}"/>
  <meta property="og:site_name" content="{{Setting::get('core::site-name') }}"/>
  <meta property="og:locale" content="{{config('asgard.iblog.config.oglocal')}}">
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="{{ Setting::get('core::site-name') }}">
  <meta name="twitter:title"
        content="{{$item->meta_title??$item->title}}">
  <meta name="twitter:description"
        content="{{$item->meta_description??$item->description}}">
  <meta name="twitter:creator" content="">
  <meta name="twitter:image:src"
        content="{{url($item->mediaFiles()->mainimage->path ?? 'modules/icommerce/img/product/default.jpg') }}">

@stop
@section('content')
  <div class="ads-view">
    <div class="col-lg-12 sidebar banner-search"
         style="background-image: url({{setting("icustom::imageBackgroundSearchAds")}})">
      @include('partials.searchSection')
    </div>
    <div class="col-12">
      @include('partials.breadcrumbAds')
    </div>
    <div class="content-section pb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 px-0 gallery-section">
            <x-media::gallery :mediaFiles="$item->mediaFiles()" :zones="['mainimage','gallery']"
                              layout="gallery-layout-4"/>
            <div
              class="social-share d-flex justify-content-start position-relative zindex-tooltip align-items-center py-3">
              <div class="mr-2">{{trans('iblog::common.social.share')}}:</div>
              <div class="sharethis-inline-share-buttons"></div>
            </div>
          </div>
          <div class="col-md-6 info-section">
            <h1 class="title-ads text-primary">
              {{$item->title}}
            </h1>
            <hr>
            @if(isset($item->city->name))
              <div class="city-ads">
                <i class="fa fa-map-marker"></i>
                {{$item->city->name}}
              </div>
            @endif
            @if(!empty($item->defaultPrice))
              <div class="price-section text-primary py-3">
                ${{iSiteFormatMoney($item->defaultPrice)}} COP
              </div>
            @endif
            <div class="summary-section pb-3">
              {{$item->description}}
            </div>
            <div class="group-btn group-btn-social-ad">
              @if(isset($item->options->whatsapp))
                <a class="btn btn-whatsapp"
                   href="https://wa.me/{{ $item->options->whatsapp }}?text={!! setting('iad::whatsappTextAnuncio') !!}"
                   target="_blank">
                  <i class="fa fa-whatsapp"> </i> {{trans('icustom::common.ads.optionContactWhatsapp')}}
                </a>
              @endif
              @if(isset($item->options->facebook))
                <a class="btn btn-facebook"
                   href="https://www.facebook.com/{{ $item->options->facebook }}"
                   target="_blank">
                  <i class="fa fa-facebook"> </i> {{trans('icustom::common.ads.optionContactFacebook')}}
                </a>
              @endif
              @if(isset($item->options->instagram))
                <a class="btn btn-instagram" href="https://instagram.com/{{$item->options->instagram}}"
                   target="_blank">
                  <i class="fa fa-instagram"> </i> {{trans('icustom::common.ads.optionContactInstagram')}}
                </a>
              @endif
              @if(isset($item->options->twitter))
                <a class="btn btn-twitter"
                   href="https://twitter.com/{{$item->options->twitter}}" target="_blank">
                  <i class="fa fa-twitter"> </i> {{trans('icustom::common.ads.optionContactTwitter')}}
                </a>
              @endif
              @if(isset($item->options->youtube))
                <a class="btn btn-youtube"
                   href="https://youtube.com/{{$item->options->youtube}}" target="_blank">
                  <i class="fa fa-youtube"></i> {{trans('icustom::common.ads.optionContactYoutube')}}
                </a>
              @endif
              @if(isset($item->options->phone))
                <a class="btn btn-phone" href="tel:{{$item->options->phone}}"
                   target="_blank">
                  <i class="fa fa-mobile"></i> {{$item->options->phone}}
                </a>
              @endif
            </div>
          </div>
          <div class="col-12 py-2 details-section">
            <h2 class="title-details text-primary">
              {{trans('icustom::common.ads.titleDetails')}}
            </h2>
            <hr>
            <div class="ad-details row py-3">
              <div class="col-6">
                <div class="row">
                  <div class="col-lg-6">
                    @if(isset($item->options->bedrooms))
                      <b>{{trans('icustom::common.ads.detailsBedrooms')}}</b>
                      <span class="badge info-badge">
                        {{$item->options->bedrooms}}</span>
                      <br>
                    @endif
                    @if(isset($item->options->toilets))
                      <b>{{trans('icustom::common.ads.detailsToilets')}}</b>
                      <span class="badge info-badge">
                        {{$item->options->toilets}}</span>
                      <br>
                    @endif
                    @if(isset($item->options->antiquity))
                      <b>{{trans('icustom::common.ads.detailsAntiquity')}}</b>
                      <span class="badge info-badge">
                        @if($item->options->antiquity == 0)
                          {{trans('icustom::common.ads.detailsAntiquityOptionNew')}}
                        @else
                          {{$item->options->antiquity, ' Años'}}
                        @endif
                      </span>
                      <br>
                    @endif
                    @if(isset($item->options->parking))
                      <b>{{trans('icustom::common.ads.detailsParking')}}</b>
                      <span class="badge info-badge">
                        {{$item->options->parking}}</span>
                    @endif
                  </div>
                  <div class="col-lg-6">
                    @if(isset($item->options->stratus))
                      <b>{{trans('icustom::common.ads.detailsStratus')}}</b>
                      <span class="badge info-badge">
                        {{$item->options->stratus}}</span>
                      <br>
                    @endif
                    @if(isset($item->options->subsidy))
                      <b>{{trans('icustom::common.ads.detailsSubsidy')}}</b>
                      <span class="badge info-badge">
                        {{$item->options->subsidy}}</span>
                      <br>
                    @endif
                    @if(isset($item->options->squareMeter))
                      <b>{{trans('icustom::common.ads.detailsSquareMeter')}}</b>
                      <span class="badge info-badge">
                        {{$item->options->squareMeter}}m²</span>
                        <br>
                    @endif
                    @if(isset($item->options->lotAreaMeter))
                      <b>{{trans('icustom::common.crudFields.lotAreaMeter')}}</b>
                      <span class="badge info-badge">
                        {{$item->options->lotAreaMeter}}m²</span>
                        <br>
                    @endif
                    @if(isset($item->options->builtAreaMeter))
                      <b>{{trans('icustom::common.crudFields.builtAreaMeter')}}</b>
                      <span class="badge info-badge">
                        {{$item->options->builtAreaMeter}}m²</span>
                        <br>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
          @if(isset($item->options->secondaryDescription) && !is_null($item->options->secondaryDescription))
            <div class="col-12 py-2 description-section">
              <h2 class="title-details text-primary">
                {{trans('icustom::common.ads.titleDescription')}}
              </h2>
              <hr>
              {!! $item->options->secondaryDescription !!}
            </div>
          @endif
          @if(!empty($item->lat) && !empty($item->lng))
            <div class="col-12 map-section py-3">
              <h2 class="title-details text-primary">
                {{trans('icustom::common.ads.titleMap')}}
              </h2>
              <hr>
              <x-isite::Maps lat="{{$item->lat}}" lng="{{$item->lng}}" locationName="{{$item->title}}"
                             zoom="16"/>
            </div>
          @endif
          {{--          <div id="reportSection" class="col-12  py-3">--}}
          {{--            <div class="row justify-content-center">--}}
          {{--              <div class="col-auto">--}}
          {{--                <a class="btn btn-danger"--}}
          {{--                   {{isset($inModal) && $inModal ? 'onclick=Iad__goToReport(event,\''.$item->url."#report".'\')' : 'data-toggle=collapse aria-expanded=false aria-controls=collapsePin'.$item->id}} href="{{isset($inModal) && $inModal ? $item->url."#report" : "#collapsePin".$item->id}}"--}}
          {{--                   role="button">--}}
          {{--                  <i class="fa fa-exclamation-circle" aria-hidden="true"></i>--}}
          {{--                  {{trans('iad::common.report')}}--}}
          {{--                </a>--}}
          {{--              </div>--}}
          {{--              <div class="col-12">--}}
          {{--                <div class="collapse mt-4" id="collapsePin{{$item->id}}">--}}
          {{--                  <div class="card card-body pt-4">--}}

          {{--                    <x-iforms::form :id="setting('iad::complaintForm')"--}}
          {{--                                    :fieldsParams="['adName' => ['readonly' => 'readonly' , 'value' => $item->title]]"/>--}}
          {{--                    --}}{{--          {!! Forms::render(,'iforms::frontend.form.bt-nolabel.form') !!}--}}

          {{--                    {!! setting('icustom::noteReportAd') !!}--}}
          {{--                  </div>--}}
          {{--                </div>--}}
          {{--              </div>--}}
          {{--            </div>--}}
          {{--          </div>--}}
          <div class="related-ads col-12">
            <x-isite::carousel.owl-carousel
              title="{{trans('icustom::common.ads.adsRelated')}}"
              id="adsRelated"
              owlTitleMarginT="mt-4"
              owlTitleMarginB="mb-0"
              owlTitleColor="text-primary"
              owlTitleVineta=""
              owlTitleVinetaColor=""
              owlTitleSize="29"
              owlTitleWeight="font-weight-bold"
              owlTitleTransform=""
              owlTitleLetterSpacing="0"
              :params="[
                        'filter' => ['category' => $item->categories->pluck('id'),'exclude'=>$item->id],
                        'take' => 10
                        ]"
              :responsive="[0 => ['items' =>  2],640 => ['items' => 2],992 => ['items' => 4]]"
              repository="Modules\Iad\Repositories\AdRepository"
              moduleName="Iad"
              itemComponentName="iad::list-item"
              itemComponentNamespace="Modules\Iad\View\Components\ListItem"
              :itemComponentAttributes="['layout' => 'iad-list-item-2']"
              entityName="Ad"
              :showTitle="false"
              :responsiveTopContent="['mobile'=>true,'desktop'=>true]"
              :configLayoutIndex="config('asgard.iad.config.layoutIndex')"
              {{--                :pagination="['type' => 'infiniteScroll']"--}}
              {{--                :key="'itemListsMain'.$category->id"--}}
              :uniqueItemListRendered="true"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
@stop

@section("scripts")
  @parent
  <script defer type="text/javascript"
          src="https://platform-api.sharethis.com/js/sharethis.js#property=5fd9384eb64d610011fa8357&product=inline-share-buttons"
          async="async"></script>
@stop
