<?php

// foreach in array numerik
$lists_of_number = [10, 20, 30, 40, 50];

foreach ($list_of_number as $item) {
    echo $item . PHP_EOL;
}

// with index
foreach ($list_of_number as $index => $value) {
    echo $index . ': ' . $value . PHP_EOL;
}




// foreach in array assosiative
$lists_of_person = [
    [
        'name' => 'John Doe',
        'age' => 20,
        'hobby' => 'game'
    ],
    [
        'name' => 'Jane Doe',
        'age' => 30,
        'hobby' => 'programming'
    ]
];

foreach ($lists_of_person as $item) {
    echo 'Name: ' . $item['name'] . PHP_EOL;
    echo 'Age: ' . $item['age'] . PHP_EOL;
    echo 'Hobby: ' . $item['hobby'] . PHP_EOL;
}


// with index
foreach ($lists_of_person as $key => $value) {
    echo $key . ': ' . $value['name'] . PHP_EOL;
    echo $key . ': ' . $value['age'] . PHP_EOL;
    echo $key . ': ' . $value['hobby'] . PHP_EOL;
}



// with index string name
$person = ['name' => 'John', 'age' => 30, 'city' => 'New York'];

foreach ($person as $key => $value) {
    echo "Key: $key, Value: $value\n";
}
