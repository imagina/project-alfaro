@extends('layouts.master')

@section('meta')
  @if(isset($category->id))
    @include('iblog::frontend.partials.category.metas')
  @endif
@stop
@section('title')
  {{isset($category->title)? $category->title: trans("iblog::routes.blog.index.index")}}  | @parent
@stop
@section('content')
  <div id="content_index_blog"
       class="  {{isset($category->id) ? 'iblog-index-category iblog-index-category-'.$category->id.' blog-category-'.$category->id : ''}} py-5">
    <div class="page-banner banner-breadcrumb-category position-relative">
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
      @else
        <div class="pb-5 pt-5" style="background-color: var(--primary)"></div>
      @endif
    </div>
    <div class="category-content container py-3">
      <div class="row">
        <div class="col-12 title-category-section text-primary text-center py-2">
          <h1 class="category-title">
            {{$category->title}}
          </h1>
        </div>
        <div class="posts-category-list col-12 py-2">
          <livewire:isite::items-list
            moduleName="Iblog"
            itemComponentName="isite::item-list"
            itemComponentNamespace="Modules\Isite\View\Components\ItemList"
            :configLayoutIndex="config('asgard.iblog.config.layoutIndex')"
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
                'titleTextSize'=>18,
                'titleTextWeight'=>'font-weight-bold',
                'titleTextTransform'=>'',
                'titleLetterSpacing'=>0,
                'titleVineta'=>'',
                'titleVinetaColor'=>'text-dark',     ]"
            entityName="Post"
            :showTitle="false"
            :params="['filter' => ['category' => $category->id ?? null, 'tagId' => $tag->id ?? null,'withoutInternal' => true]]"
            :responsiveTopContent="['mobile'=>false,'desktop'=>false]"
            :configOrderBy="config('asgard.iblog.config.orderBy')"
            :pagination="config('asgard.iblog.config.pagination')"
          />
        </div>
      </div>
    </div>
  </div>
@stop
