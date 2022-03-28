<?php
//$array_name as $key => $value

/*

$persons = [
   
    'skills' => [
        'html' => [
            'version' => [4,5]
        ],
    ],
];

foreach ($persons as $key =>$info)   //$array_name as $key => $value
{


    //  echo "<pre>";
    //      //print_r($key);
    //      print_r($info);
    //  echo "</pre>";

     foreach ($info as $skill) 
     {
            //  echo "<pre>";
            //  print_r($skill);
            //  echo "</pre>";

            foreach($skill as $version)
            {
                // echo "<pre>";
                //      print_r($version);
                //  echo "</pre>";
                foreach($version as $value)
                {
                     echo "<pre>";
                        print_r($value);
                     echo "</pre>";   
                }
            }
     }

}

*/

$groups = [

    'group_1' => [
        'Momen',
        'Jahidul',
        'Rabbi',
        'Salman Shah',
    ],
    'group_2' => [
        'Farid',
        'Humayan',
        'Mihajur',
        'Najmul'
    ],
    'group_3' => [
        'Iftekhar',
        'Jotymoy',
        'Prosantha',
        'Sabrina',
    ],
    'group_4' => [
        'Angcon',
        'Mafiur',
        'Sumaiya',
        'Tazin'
    ],
    'group_5' => [
        'Nishan',
        'Mishu',
        'Rana Vai',
        'Bisshogit'
    ],
];


foreach ($groups as $key => $group) {

        
     echo "<pre>";
        //  print_r($key).": "."<br>";
        //  print_r($group);

        echo $key.": "."<br>";
         foreach ($group as $member) {
            //print_r($member)."<br>";

            echo $member."<br>";
         }
        echo "</pre>";

}

