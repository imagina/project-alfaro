<?php
return [

  "filtersSearch" => [
    "cities" =>[
      'title' => 'icustom::common.home.labelFilterCities',
      'name' => 'cities',
      'classes' => 'col-sm-4 col-lg form-group-select',
      'status' => true,
      'isExpanded' => true,
      'type' => 'select',
      'repository' => 'Modules\Ilocations\Repositories\CityRepository',
      'entityClass' => 'Modules\Ilocations\Entities\City',
      'emitTo' => 'filtersGetData',
      'repoAction' => 'filter',
      'repoAttribute' => 'cityId',
      'listener' => null,
      'repoMethod' => 'getItemsBy',
      'isCollapsable' => false,
    ],
    "inmueble" =>  [
      'title' => 'icustom::common.home.labelFilterInmueble',
      'name' => 'inmueble',
      'classes' => 'col-sm-4 col-lg form-group-select',
      'status' => true,
      'isExpanded' => true,
      'type' => 'select',
      'repository' => 'Modules\Iad\Repositories\CategoryRepository',
      'entityClass' => 'Modules\Iad\Entities\Category',
      'params' => ['filter' => ['parentId' => '5']],
      'emitTo' => 'filtersGetData',
      'repoAction' => 'filter',
      'repoAttribute' => 'categories',
      'listener' => null,
      'repoMethod' => 'getItemsBy',
      'isCollapsable' => false,
    ],
    "operation" => [
      'title' => 'icustom::common.home.labelFilterOperation',
      'name' => 'operation',
      'classes' => 'col-sm-4 col-lg form-group-select',
      'status' => true,
      'isExpanded' => true,
      'type' => 'select',
      'repository' => 'Modules\Iad\Repositories\CategoryRepository',
      'entityClass' => 'Modules\Iad\Entities\Category',
      'params' => ['filter' => ['parentId' => '4']],
      'emitTo' => 'filtersGetData',
      'repoAction' => 'filter',
      'repoAttribute' => 'categories',
      'listener' => null,
      'repoMethod' => 'getItemsBy',
      'isCollapsable' => false,
    ],
    "search" => [
      //'title' => "icustom::common.home.labelFilterSearch",
      'title' => "",
      'name' => "search",
      'classes' => 'col-sm-12 col-lg-4 form-group',
      'placeholder' => '¿Qué estás buscando?',
      'status' => true,
      'type' => 'text',
      'emitTo' => 'filtersGetData',
      'repoAction' => 'filter',
      'repoAttribute' => 'search',
      'repoMethod' => 'getItemsBy',
      'isCollapsable' => false,
    ]
  ]
];