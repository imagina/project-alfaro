<?php

return [
  'categoriesAdsInHome' => [
    'name' => 'icustom::categoriesAdsInHome',
    'value' => null,
    'type' => 'treeSelect',
    'columns' => 'col-12 col-md-6',
    'loadOptions' => [
      'apiRoute' => 'apiRoutes.qad.categories',
      'select' => ['label' => 'title', 'id' => 'id'],
    ],
    'props' => [
      'label' => 'icustom::common.settings.labelCategoriesAdsInHome',
      'clearable' => true,
      'multiple' => true,
      'value-consists-of' => 'LEAF_PRIORITY',
      'sortValueBy' => 'ORDER_SELECTED'
    ],
  ],
  'noteReportAd' => [
    'value' => null,
    'name' => 'icustom::noteReportAd',
    'type' => 'html',
    'props' => [
      'label' => 'icustom::common.settings.labelNoteReportAd',
    ]
  ],
  'imageBackgroundSearch' => [
    'value' => (object)['setting::mainimage' => null],
    'name' => 'medias_single',
    'fakeFieldName' => 'icustom::imageBackgroundSearch',
    'type' => 'media',
    'groupName' => 'backgrounds',
    'groupTitle' => 'icustom::common.settings.groupNameBackgrounds',
    'props' => [
      'label' => 'icustom::common.settings.labelImageBackgroundSearch',
      'zone' => 'setting::mainimage',
      'entity' => "Modules\Setting\Entities\Setting",
      'entityId' => null
    ]
  ],
  'imageBackgroundSearch2' => [
    'value' => (object)['setting::mainimage' => null],
    'name' => 'medias_single',
    'fakeFieldName' => 'icustom::imageBackgroundSearch2',
    'type' => 'media',
    'groupName' => 'backgrounds',
    'groupTitle' => 'icustom::common.settings.groupNameBackgrounds2',
    'props' => [
      'label' => 'icustom::common.settings.labelImageBackgroundSearch2',
      'zone' => 'setting::mainimage',
      'entity' => "Modules\Setting\Entities\Setting",
      'entityId' => null
    ]
  ],
  'imageBackgroundFooter' => [
    'value' => (object)['setting::mainimage' => null],
    'name' => 'medias_single',
    'fakeFieldName' => 'icustom::imageBackgroundFooter',
    'type' => 'media',
    'groupName' => 'backgrounds',
    'groupTitle' => 'icustom::common.settings.groupNameBackgrounds',
    'props' => [
      'label' => 'icustom::common.settings.labelImageBackgroundFooter',
      'zone' => 'setting::mainimage',
      'entity' => "Modules\Setting\Entities\Setting",
      'entityId' => null
    ]
  ],
  'imageBackgroundSearchAds' => [
    'value' => (object)['setting::mainimage' => null],
    'name' => 'medias_single',
    'fakeFieldName' => 'icustom::imageBackgroundSearchAds',
    'type' => 'media',
    'groupName' => 'backgrounds',
    'groupTitle' => 'icustom::common.settings.groupNameBackgrounds',
    'props' => [
      'label' => 'icustom::common.settings.labelImageBackgroundSearchAds',
      'zone' => 'setting::mainimage',
      'entity' => "Modules\Setting\Entities\Setting",
      'entityId' => null
    ]
  ],
  'filterRangePricesStep' => [
    'name' => 'icustom::filterRangePricesStep',
    'groupName' => 'filters',
    'groupTitle' => 'icustom::common.settings.groupNameFilters',
    "onlySuperAdmin" => true,
    'value' => 20000,
    'type' => 'input',
    'columns' => 'col-12 col-md-6',
    'props' => [
      'label' => 'icustom::common.settings.labelFilterRangePricesStep'
    ],
  ],
];
