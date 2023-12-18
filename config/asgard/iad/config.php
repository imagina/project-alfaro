<?php

return [
  'name' => 'Iad',
  'fields' => [
    "name",
    "age",
    "twitter",
    "whatsapp",
    "independent_escort",
    "note",
    "phone",
    "customer_feedback",
    "address",
    "mainImage",
  ],

  "featuredProductId" => null,


  "everyUp" => 1,

  //add: product relations like users relations style
  'relations' => [
//    'ad' => [
//      'rates' => function () {
//        return $this->belongsToMany(Rate::class, 'icustom__rate_ad')->withPivot('price');
//      },
//    ]
  ],
  'imagesize' => ['width' => 800, 'height' => 800],
  'mediumthumbsize' => ['width' => 400, 'height' => 400],
  'smallthumbsize' => ['width' => 100, 'height' => 100],


  /*Layout Products - Index */
  'layoutIndex' => [
    'default' => 'four',
    'options' => [
      'four' => [
        'name' => 'four',
        'class' => 'col-6 col-md-3 col-lg-3',
        'icon' => 'fa fa-th-large',
        'status' => true
      ],
      'three' => [
        'name' => 'three',
        'class' => 'col-6 col-md-4 col-lg-4',
        'icon' => 'fa fa-square-o',
        'status' => true
      ],
      'one' => [
        'name' => 'one',
        'class' => 'col-12',
        'icon' => 'fa fa-align-justify',
        'status' => true
      ],
      'masonry' => [
        'name' => 'masonry',
        'class' => 'item', //testing bricklayer
        //'class' => 'card', // testing boostrap
        //'class' => 'grid-item', // testing desandro
        'icon' => 'fa fa-align-justify',
        'status' => true,
        'wrapperClass' => 'bricklayer' //testing bricklayer
        //'wrapperClass' => 'card-columns position-relative' //testing boostrap
        //'wrapperClass' => 'grid-masonry' //testing desandro
      ]
    ]
  ],

  /*Layout Test - Test*/
  'layoutTest' => [
    'default' => 'carousel',
    'options' => [
      'carousel' => [
        'name' => 'carousel',
        'class' => 'item',
        'icon' => 'fa fa-th-large',
        'status' => true,
        'wrapperClass' => 'carousel-items'
      ]
    ]
  ],

  /*
  |--------------------------------------------------------------------------
  | Filter location range
  |--------------------------------------------------------------------------
  */
  'location-range' => [
    'title' => 'Location Rango',
    'name' => 'location-range',
    'status' => true,
    'isExpanded' => true,
    'type' => 'location',
    'repository' => 'Modules\Iad\Repositories\AdRepository',
    'emitTo' => 'filtersGetData',//Emit data selected (Parent Component to this case)
    'repoAction' => 'filter', //Action in repo ('filter' in Ad Repository)
    'repoAttribute' => 'nearby',
    'listener' => null, // Listen to another component
    'repoMethod' => null,
    'layout' => 'location-layout-1', // geolocalization and range
    'classes' => 'col-xs-12 col-md-6', // Main Class Filter (Columns and others classes)
    'radio' => [
      'measure' => 'km',
      'values' => [1, 3, 5, 10, 25, 50],
      'defaultValue' => 'all'
    ]
  ],
  /*
  |--------------------------------------------------------------------------
  | Pagination to the index page
  |--------------------------------------------------------------------------
  */
  'pagination' => [
    "show" => true,
    /*
  * Types of pagination:
  *  normal
  *  loadMore
  *  infiniteScroll
  */
    "type" => "normal"
  ],
  /*
  |--------------------------------------------------------------------------
  | Filters to the index page
  |--------------------------------------------------------------------------
  */
  'filters' => [
    "cities" => [
      'title' => 'icustom::common.home.labelFilterCities',
      'name' => 'cities',
      'status' => true,
      'isExpanded' => true,
      'type' => 'select',
      'repository' => 'Modules\Ilocations\Repositories\CityRepository',
      'emitTo' => 'filtersGetData',
      'repoAction' => 'filter',
      'repoAttribute' => 'cityId',
      'listener' => null,
      'repoMethod' => 'getItemsBy',
      'isCollapsable' => false,
      'classes' => 'col-md-7'
    ],
  ],
  'filtersIndex' => [
    "operation" => [
      'title' => 'icustom::common.home.labelFilterOperation',
      'name' => 'operation',
      'classes' => 'col-sm-4 col-lg form-group-select',
      'status' => true,
      'isExpanded' => false,
      'type' => 'checkbox',
      'repository' => 'Modules\Iad\Repositories\CategoryRepository',
      'entityClass' => 'Modules\Iad\Entities\Category',
      'params' => ['filter' => ['parentId' => '4']],
      'emitTo' => 'filtersGetData',
      //'emitTo' => 'itemsListGetData',
      'repoAction' => 'filter',
      'repoAttribute' => 'categories',
      'listener' => null,
      //'listener' => 'itemListRendered',
      'repoMethod' => 'getItemsBy',
      'isCollapsable' => false,
    ],
    "cities" => [
      'title' => 'icustom::common.home.labelFilterCities',
      'name' => 'cities',
      'status' => true,
      'isExpanded' => false,
      'type' => 'checkbox',
      'repository' => 'Modules\Ilocations\Repositories\CityRepository',
      'emitTo' => 'filtersGetData',
      'repoAction' => 'filter',
      'repoAttribute' => 'cityId',
      'listener' => null,
      'repoMethod' => 'getItemsBy',
      'isCollapsable' => false,
      'classes' => 'col-12'
    ],

    "inmueble" => [
      'title' => 'icustom::common.home.labelFilterInmueble',
      'name' => 'inmueble',
      'status' => true,
      'isExpanded' => true,
      'type' => 'checkbox',
      'repository' => 'Modules\Iad\Repositories\CategoryRepository',
      'params' => ['filter' => ['parentId' => '5']],
      'emitTo' => 'filtersGetData',
      'repoAction' => 'filter',
      'repoAttribute' => 'categories',
      'listener' => null,
      'repoMethod' => 'getItemsBy',
      'isCollapsable' => false,
      'classes' => 'col-12'
    ],

//        'ads-categories' => [
//            'title' => 'Categorias',
//            'name' => 'ads-categories',
//            'status' => true,
//            'isExpanded' => true,
//            'type' => 'checkbox',
//            'repository' => 'Modules\Iad\Repositories\CategoryRepository',
//            'emitTo' => 'filtersGetData', //Emit data selected (Parent Component to this case)
//            'repoAction' => 'filter',
//            'repoAttribute' => 'categories',
//            'listener' => null,  // Listen to another component
//            'repoMethod' => null, // Method to get data - getItemsBy (default)
//            'layout' => 'checkbox-layout-1', //Layout with components childrens
//            'classes' => 'col-12', // Main Class Filter (Not column to this case)
//        ],

    "area" => [
      'title' => 'icustom::common.home.labelFilterArea',
      'name' => 'inmueble',
      'status' => true,
      'isExpanded' => true,
      'type' => 'checkbox',
      'repository' => 'Modules\Iad\Repositories\CategoryRepository',
      'params' => ['filter' => ['parentId' => '8']],
      'emitTo' => 'itemsListGetData',
      'repoAction' => 'filter',
      'repoAttribute' => 'categories',
      'listener' => null,
      'repoMethod' => 'getItemsBy',
      'isCollapsable' => false,
      'classes' => 'col-12'
    ],
    'range-prices' => [
      'title' => 'icustom::common.home.labelRangePrices',
      'name' => 'range-prices',
      'status' => true,
      'isExpanded' => true,
      'type' => 'range',
      'repository' => 'Modules\Iad\Repositories\AdRepository',
      'emitTo' => 'itemsListGetData',
      'repoAction' => 'filter',
      'repoAttribute' => 'priceRange',
      'listener' => 'itemListRendered',
      'repoMethod' => 'getPriceRange',
      'layout' => 'range-layout-1',
      'classes' => 'col-12',
      'step' => 10000,
      'stepSetting' => 'icustom::filterRangePricesStep'
    ],
    "bedrooms" => [
      'title' => 'icustom::common.home.labelFilterBedrooms',
      'name' => 'bedrooms',
      'status' => true,
      'isExpanded' => false,
      'type' => 'checkbox',
      'repository' => 'Modules\Iad\Repositories\CategoryRepository',
      'params' => ['filter' => ['parentId' => '16']],
      'emitTo' => 'filtersGetData',
      'repoAction' => 'filter',
      'repoAttribute' => 'categories',
      'listener' => null,
      'repoMethod' => 'getItemsBy',
      'isCollapsable' => false,
      'classes' => 'col-12'
    ],
    "bathroom" => [
      'title' => 'icustom::common.home.labelFilterBathroom',
      'name' => 'bathroom',
      'status' => true,
      'isExpanded' => false,
      'type' => 'checkbox',
      'repository' => 'Modules\Iad\Repositories\CategoryRepository',
      'params' => ['filter' => ['parentId' => '16']],
      'emitTo' => 'filtersGetData',
      'repoAction' => 'filter',
      'repoAttribute' => 'categories',
      'listener' => null,
      'repoMethod' => 'getItemsBy',
      'isCollapsable' => false,
      'classes' => 'col-12'
    ],
    "characteristics" => [
      'title' => 'icustom::common.home.labelFilterCharacteristics',
      'name' => 'characteristics',
      'status' => true,
      'isExpanded' => false,
      'type' => 'checkbox',
      'repository' => 'Modules\Iad\Repositories\CategoryRepository',
      'params' => ['filter' => ['parentId' => '27']],
      'emitTo' => 'filtersGetData',
      'repoAction' => 'filter',
      'repoAttribute' => 'categories',
      'listener' => null,
      'repoMethod' => 'getItemsBy',
      'isCollapsable' => false,
      'classes' => 'col-12'
    ],
    "sectors" => [
      'title' => 'icustom::common.home.labelFilterSectors',
      'name' => 'sectors',
      'status' => true,
      'isExpanded' => false,
      'type' => 'checkbox',
      'repository' => 'Modules\Iad\Repositories\CategoryRepository',
      'params' => ['filter' => ['parentId' => '35']],
      'emitTo' => 'filtersGetData',
      'repoAction' => 'filter',
      'repoAttribute' => 'categories',
      'listener' => null,
      'repoMethod' => 'getItemsBy',
      'isCollapsable' => false,
      'classes' => 'col-12'
    ],
    "antiquity" => [
      'title' => 'icustom::common.home.labelFilterAntiquity',
      'name' => 'antiquity',
      'status' => true,
      'isExpanded' => false,
      'type' => 'checkbox',
      'repository' => 'Modules\Iad\Repositories\CategoryRepository',
      'params' => ['filter' => ['parentId' => '38']],
      'emitTo' => 'filtersGetData',
      'repoAction' => 'filter',
      'repoAttribute' => 'categories',
      'listener' => null,
      'repoMethod' => 'getItemsBy',
      'isCollapsable' => false,
      'classes' => 'col-12'
    ],
  ],

  /*
 |--------------------------------------------------------------------------
 | Define config to the orderBy in the index page
 |--------------------------------------------------------------------------
 */
  'orderBy' => [
    'default' => 'recently',
    'options' => [
      'nameaz' => [
        'title' => 'iad::common.sort.name_a_z',
        'name' => 'nameaz',
        'order' => [
          'field' => "title",
          'way' => "asc",
        ]
      ],
      'nameza' => [
        'title' => 'iad::common.sort.name_z_a',
        'name' => 'nameza',
        'order' => [
          'field' => "title",
          'way' => "desc",
        ]
      ],
      'recently' => [
        'title' => 'iad::common.sort.recently',
        'name' => 'recently',
        'order' => [
          'field' => "created_at",
          'way' => "desc",
        ]
      ]
    ],
  ],

  //Media Fillables
  'mediaFillable' => [
    'ad' => [
      'mainimage' => 'single',
      'secondaryimage' => 'single',
      'gallery' => 'multiple',
      'videos' => 'multiple',
    ],
    'category' => [
      'mainimage' => 'single',
      'secondaryimage' => 'single'
    ]
  ],

  //DEfine entities allowed to limit with Iplan Module
  'limitableEntities' => [
    [
      'entity' => 'Modules\Iad\Entities\Ad',
      'name' => 'Anuncio',
      'status' => false,
      'attributes' => [
        [
          'label' => 'Servicio',
          'value' => 'category_id',
          'options' => [
            ['label' => 'No tiene', 'value' => '0'],
            ['label' => 'Escorts2', 'value' => '1'],
          ]
        ],
        [
          'label' => 'Ciudad',
          'value' => 'city_id',
          'options' => [
            ['label' => 'Ibagué', 'value' => '956'],
            ['label' => 'Medellín', 'value' => '1'],
            ['label' => 'Bogotá', 'value' => '149']
          ]
        ],
        [
          'label' => 'Estado',
          'value' => 'status',
          'options' => [
            ['label' => 'Activo', 'value' => '1'],
            ['label' => 'Inactivo', 'value' => '0']
          ]
        ]
      ]
    ],
  ],

  /*
|--------------------------------------------------------------------------
| Define the options to the user menu component
|
| @note routeName param must be set without locale. Ex: (icommerce orders: 'icommerce.store.order.index')
| use **onlyShowInTheDropdownHeader** (boolean) if you want the link only appear in the dropdown in the header
| use **onlyShowInTheMenuOfTheIndexProfilePage** (boolean) if you want the link only appear in the dropdown in the header
| use **showInMenuWithoutSession** (boolean) if you want the link only appear in the dropdown when don't exist session
| use **dispatchModal** (string - modalAlias) if you want the link only appear in the dropdown when don't exist session
| use **url** (string) if you want customize the link
|--------------------------------------------------------------------------
*/
  "userMenuLinks" => [
    [
      "title" => "iad::ads.title.ads",
      "routeName" => "iad.ad.index",
      "quasarUrl" => '/ipanel/#/ads/',
      "icon" => "fa fa-bullhorn",

    ]
  ],

  /*
|--------------------------------------------------------------------------
| Requestable config
|--------------------------------------------------------------------------
*/
  "requestable" => [
    1 => [
      //Required: this is the identificator of the request, must be unique with respect to other requestable types
      "type" => "requestCheckAd",
      // Title can be trantaled or not, the language take the config app.locale
      "title" => "iad::iad.requestable.requestCheckAd",
      /*
       Optional: Path of the Entity related to the requestable
       The requestable Id can be saved in the requestable
       if the requestableType is  Modules\\User\\Entities\\Sentinel\\User the id can be taked automatically of the Auth User if the id it's not specified
       */
      "requestableType" => "Modules\\Iad\\Entities\\Ad",
      //requestable events to dispatch
      "events" => [
        "create" => "Modules\\Iad\\Events\\CheckAdRequestWasCreated",
        "update" => "Modules\\Iad\\Events\\CheckAdRequestWasUpdated"
      ],
      // Optional: this form is used to get the fields data of the requestable, need to be a setting name previously charged with the formId
      "formId" => null,
      /*
      The module has four statuses by default with the following structure:
          const PENDING = 1; (default)
          const INPROGRESS = 2;
          const COMPLETED = 3; (final)
          const CANCELLED = 4; (final)
      */
      "useDefaultStatuses" => true,
      //if you don't use the statuses configuration but you need to configure the delete request by status you can use this extra config:
      'deleteRequestWhenStatus' => [1 => false, 2 => true, 3 => true, 4 => true],
      //if you don't use the statuses configuration but you need to configure the events by status you can use this extra config:
      "eventsWhenStatus" => [],
      /*
      Optional: If you don't use this config and the useDefaultStatuses is true the default status used is 1
      if you use the statuses and defined some one by default that's would be the status applied.
      */
      'defaultStatus' => 1,
      // Time elapsed to cancel in days
      "timeElapsedToCancel" => 30,
      //Optional: if you don't use the statuses configuration but you need to configure the cancelled when elapsed time status you can use this extra config:
      "statusToSetWhenElapsedTime" => 4,
    ]
  ],
  /*Translate keys of each entity. Based on the permission string*/
  'documentation' => [
    'ads' => "iad::cms.documentation.ads",
    'categories' => "iad::cms.documentation.categories",
    'ups' => "iad::cms.documentation.ups",
  ]
];

