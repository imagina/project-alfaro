<?php


return [
  //Extra field to crud ads
  'ads' => [
    'squareMeter' => [
      'value' => null,
      'name' => 'squareMeter',
      'type' => 'input',
      'required' => false,
      'isFakeField' => true,
      'fakeFieldName' => 'options',
      'props' => [
        'entity' => "Modules\Iad\Entities\Ads",
        'label' => 'icustom::common.crudFields.labelSquareMeter',
      ]
    ],
    'lotAreaMeter' => [
      'value' => null,
      'name' => 'lotAreaMeter',
      'type' => 'input',
      'required' => false,
      'isFakeField' => true,
      'fakeFieldName' => 'options',
      'props' => [
        'entity' => "Modules\Iad\Entities\Ads",
        'label' => 'icustom::common.crudFields.lotAreaMeter',
      ]
    ],
    'builtAreaMeter' => [
      'value' => null,
      'name' => 'builtAreaMeter',
      'type' => 'input',
      'required' => false,
      'isFakeField' => true,
      'fakeFieldName' => 'options',
      'props' => [
        'entity' => "Modules\Iad\Entities\Ads",
        'label' => 'icustom::common.crudFields.builtAreaMeter',
      ]
    ],
    'bedrooms' => [
      'value' => null,
      'name' => 'bedrooms',
      'type' => 'input',
      'required' => false,
      'isFakeField' => true,
      'fakeFieldName' => 'options',
      'props' => [
        'entity' => "Modules\Iad\Entities\Ads",
        'label' => 'icustom::common.crudFields.labelBedrooms',

      ]
    ],
    'toilets' => [
      'value' => null,
      'name' => 'toilets',
      'type' => 'input',
      'required' => false,
      'isFakeField' => true,
      'fakeFieldName' => 'options',
      'props' => [
        'label' => 'icustom::common.crudFields.labelToilets',
        'entity' => "Modules\Iad\Entities\Ads",
      ]
    ],
    'parking' => [
      'value' => null,
      'name' => 'parking',
      'type' => 'input',
      'required' => false,
      'isFakeField' => true,
      'fakeFieldName' => 'options',
      'props' => [
        'label' => 'icustom::common.crudFields.labelParking',
        'entity' => "Modules\Iad\Entities\Ads",
      ]
    ],
    'antiquity' => [
      'value' => null,
      'name' => 'antiquity',
      'type' => 'input',
      'isFakeField' => true,
      'fakeFieldName' => 'options',
      'props' => [
        'label' => 'icustom::common.crudFields.labelAntiquity',
        'entity' => "Modules\Iad\Entities\Ads",
      ]
    ],
    'stratus' => [
      'value' => null,
      'name' => 'stratus',
      'type' => 'input',
      'isFakeField' => true,
      'fakeFieldName' => 'options',
      'props' => [
        'label' => 'icustom::common.crudFields.labelStratus',
        'entity' => "Modules\Iad\Entities\Ads",
      ]
    ],
    'subsidy' => [
      'value' => null,
      'name' => 'subsidy',
      'type' => 'input',
      'isFakeField' => true,
      'fakeFieldName' => 'options',
      'props' => [
        'label' => 'icustom::common.crudFields.labelSubsidy',
        'entity' => "Modules\Iad\Entities\Ads",
      ]
    ],
    'secondaryDescription' => [
      'value' => null,
      'name' => 'secondaryDescription',
      'type' => 'html',
      'isFakeField' => true,
      'props' => [
        'label' => 'icustom::common.crudFields.labelSecondaryDescription',
      ]
    ],
  ],
  'category' => [
    'sortOrder' => [
      'value' => 0,
      'name' => 'sortOrder',
      'type' => 'input',
      'props' => [
        'label' => 'Orden',
        'type' => 'number',
        'min' => '0'
      ]
    ]
  ]
];
