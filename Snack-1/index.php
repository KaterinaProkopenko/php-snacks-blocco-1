<?php 
$students = [
    [
        'name' => 'Laura',
        'lastname' => 'Bianchi',
        'votes' => [9, 9, 9, 9, 10]
    ],
    [
        'name' => 'Michele',
        'lastname' => 'Papagni',
        'votes' => [8, 5, 7, 6]
    ],
    [
        'name' => 'Fabio',
        'lastname' => 'Forghieri',
        'votes' => [10, 2, 4]
    ],
    [
        'name' => 'Roberto',
        'lastname' => 'Marazzini',
        'votes' => [2, 8, 3, 4, 5]
    ],
    [
        'name' => 'Roberta',
        'lastname' => 'Danderini',
        'votes' => [2, 8, 9, 5, 4]
    ]
];

foreach($students as $student){
    echo $student['name'] . ' ' . $student['lastname'] . ': ' . array_sum($student['votes']) / count($student['votes']) . '<br>';
    
}
?>