@extends('layouts.master')

@section('meta')
  @include('iblog::frontend.partials.post.metas')
@stop

@section('title')
  {{ $post->title }} | @parent
@stop
@section('content')
  <div class="post blog single single-{{$category->slug}} single-{{$category->id}} post-{{$post->id}}">
    <div class="post-banner banner-breadcrumb-category position-relative">
      <div class="position-absolute h-100 w-100 content-title">
        <div class="container d-flex flex-column align-items-center w-100 h-100 justify-content-center">
          <h2 class="title-page text-white">
            {{$category->parent->title ?? $category->title}}
          </h2>
          @include('iblog::frontend.partials.breadcrumb')
        </div>
      </div>
      <div class="content-title-hidden"></div>
      @if (isset($category->parent) && !empty($category->parent->mediafiles()->breadcrumbimage) && strpos($category->parent->mediaFiles()->breadcrumbimage->extraLargeThumb, 'default.jpg') == false)
        <x-media::single-image :title="$category->parent->title" :isMedia="true" width="100%"
                               :mediaFiles="$category->parent->mediaFiles()"
                               zone="breadcrumbimage"/>
      @elseif (isset($category) && !empty($category->mediafiles()->breadcrumbimage) && strpos($category->mediaFiles()->breadcrumbimage->extraLargeThumb, 'default.jpg') == false)
        <x-media::single-image :title="$category->title" :isMedia="true" width="100%"
                               :mediaFiles="$category->mediaFiles()"
                               zone="breadcrumbimage"/>
      @elseif (isset($post) && !empty($post->mediafiles()->breadcrumbimage) && strpos($post->mediaFiles()->breadcrumbimage->extraLargeThumb, 'default.jpg') == false)
        <x-media::single-image :title="$post->title" :isMedia="true" width="100%"
                               :mediaFiles="$post->mediaFiles()"
                               zone="breadcrumbimage"/>
      @else
        <div class="pb-5 pt-5" style="background-color: var(--primary)"></div>
      @endif
    </div>
    
    <div class="content-page col-12 pt-5 pb-3">
      <div class="container">
        <div class="row justify-content-center">
          @if (isset($post) && !empty($post->mediafiles()->mainimage)
          && strpos($post->mediaFiles()->mainimage->extraLargeThumb, 'default.jpg') == false)
            <div class="col-md-10 page-image m-auto pt-1 pb-3">
              <x-media::single-image :title="$post->title"
                                     :isMedia="true"
                                     width="100%"
                                     :mediaFiles="$post->mediaFiles()"
                                     zone="mainimage"/>
            </div>
          @endif
          <div class="col-md-10">
            <div class="col-12 title-post-section text-primary text-center pt-4 pb-2">
              <h1 class="post-title">
                {{$post->title}}
              </h1>
            </div>
            <div class="content-description">
              {!! $post->description !!}
            </div>
            <div class="form">
              @if(isset($post) && $post->id == 32)
                <x-iforms::form id="4"/>
              @endif
              @if(isset($post) && $post->id == 5)
                <x-iforms::form id="5"/>
              @endif
            </div>
            <div
              class="social-share d-flex justify-content-start position-relative zindex-tooltip align-items-center py-3">
              <div class="mr-2">{{trans('iblog::common.social.share')}}:</div>
              <div class="sharethis-inline-share-buttons"></div>
            </div>
            @if(isset($category) && $category->id == 2 || isset($category->parent) && $category->parent->id == 2)
              <div class="blog-related col-12 py-3">
                <h5 class="mb-3 text-center font-weight-bold">{{trans('icustom::common.blog.titleRelatedPosts')}}</h5>
                <x-isite::carousel.owl-carousel
                  id="Articles"
                  repository="Modules\Iblog\Repositories\PostRepository"
                  :params="['take' => 20,'filter' => ['category' => $category->id,'exclude'=>$post->id]]"
                  :margin="25"
                  :loops="false"
                  :dots="false"
                  mediaImage="mainimage"
                  :responsive="[300 => ['items' =>  1],700 => ['items' =>  2], 1024 => ['items' => 4]]"
                  :itemComponentAttributes="[
                'layout'=>'item-list-layout-6',
                'withImage'=>true,
                'withTitle'=>true,
                'withSummary'=>false,
                'withCategory'=>false,
                'withCreatedDate'=>false,
                'withViewMoreButton'=>false,
                'orderClasses'=>[
                    'photo'=>'order-0',
                    'title'=>'order-1',
                    'date'=>'order-4',
                    'categoryTitle'=>'order-3',
                    'summary'=>'order-2',
                    'viewMoreButton'=>'order-5'
                ],
                'contentPositionVertical'=>'align-self-center',
                'contentPadding'=>0,
                'contentBorder'=>0,
                'contentBorderColor'=>'#dddddd',
                'contentBorderRounded'=>0,
                'contentMarginInsideX'=>'mx-0',
                'contentBorderShadows'=>'none',
                'contentBorderShadowsHover'=>'',
                'itemBackgroundColor'=>'#ffffff',
                'itemBackgroundColorHover'=>'#ffffff',
                'columnLeft'=>'col-lg-6',
                'columnRight'=>'col-lg-6',
                'itemMarginB'=>'',
                'contentPaddingLeft'=>15,
                'contentPaddingRight'=>15,
                'contentBorderRoundedType'=>'1',
                'imageAspect'=>'3/2',
                'imageObject'=>'cover',
                'imageBorderRadio'=>30,
                'imageBorderStyle'=>'solid',
                'imageBorderWidth'=>0,
                'imageBorderColor'=>'#000000',
                'imagePadding'=>0,
                'imagePicturePadding'=>0,
                'withImageOpacity'=>false,
                'imageOpacityColor'=>'opacity-dark',
                'imageOpacityDirection'=>'opacity-top',
                'imagePosition'=>1,
                'imagePositionVertical'=>'align-self-center',
                'imageBorderRadioType'=>'1',
                'imageWidth'=>100,
                'imageAlign'=>'left',
                'titleAlignVertical'=>'align-items-center',
                'numberCharactersTitle'=>200,
                'titleTextDecoration'=>'none',
                'titleHeight'=> 'auto',
                'titleMarginT'=>'mt-3',
                'titleMarginB'=>'mb-2',
                'titleAlign'=>'justify-content-center text-center',
                'titleColor'=>'text-primary',
                'titleTextSize'=>20,
                'titleTextWeight'=>'font-weight-bold',
                'titleTextTransform'=>'',
                'titleLetterSpacing'=>0,
                'titleVineta'=>'',
                'titleVinetaColor'=>'text-dark',     ]"
                  :nav="true"
                  :navText="['<i class=\'fa fa-chevron-left\'></i>', '<i class=\'fa fa-chevron-right\'></i>']"
                />
              </div>
            @endif
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
