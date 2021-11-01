<?php
$airlines = [
    'Japan' => [
      'FSC' => [['companyname' => 'Japan Airlines', 'color' => 'red', 'president' => ['name' => '赤坂祐二', 'Est' => 1951]], 
                ['companyname' => 'All Nipon Airways', 'color' => 'blue', 'president' => ['name' => '片野坂真哉', 'Est' => 1952]]
    ],
      'MCC' => [['companyname' => 'スカイマーク', 'color' => 'yellow', 'president' => ['name' => '有森正和', 'Est' => 1996]], 
                ['companyname' => 'スターフライヤー', 'color' => 'black', 'president' => ['name' => '松石禎己', 'Est' => 2002]]
    ],
      'LCC' => [['companyname' => 'Peach', 'color' => 'pink', 'president' => ['name' => '森健明', 'Est' => 2011]], 
                ['companyname' => 'Jetstar Japan', 'color' => 'Orange', 'president' => ['name' => '片岡優', 'Est' => 2010]]
  ]
    ],
    'US' => [
      'FSC' => [['companyname' => 'American Airlines', 'color' => 'skyblue', 'president' => ['name' => 'Doug Parker', 'Est' => 1930]], 
                ['companyname' => 'Delta Airlines', 'color' => 'navyblue', 'president' => ['name' => 'Ed Bastian', 'Est' => 1928]]
  ],
      'MCC' => [['companyname' => 'Hawaiian Airlines', 'color' => 'purple', 'president' => ['name' => 'Mark Dunkerly', 'Est' => 1929]], 
                ['companyname' => 'Virgin America', 'color' => 'crimson', 'president' => ['name' => 'C.David Cush', 'Est' => 2006]]
  ],
      'LCC' => [['companyname' => 'Spirit Airlines', 'color' => 'yellow', 'president' => ['name' => 'Jacob M. Schorr Chairman', 'Est' => 1980]], 
                ['companyname' => 'Southwest Airlines', 'color' => 'yellow', 'president' => ['name' => 'Gary C. Kelly', 'Est' => 1967]]
  ]
    ]
  ];
  
  echo $airlines['Japan']['FSC'][1]['president']['name']."\n";

  