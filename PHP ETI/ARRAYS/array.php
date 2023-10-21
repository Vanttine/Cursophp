<?php 

//$cars = array(6, 'Luiz', 12.4);
//var_dump($cars[1]);

//$cars = ['Uno', 'Gol', 'Fusion', 'Civic'];
//var_dump($cars[2]);
/*
$car = [
    'cor' => 'Branco',
    'portas' => 2,
    'ano' => 2018,
];

$car['airbag'] = true;
$car['som'] = 'Model 123';

echo $car['cor'];

$car['cor'] = 'Black';
echo $car['cor'];
*/

        $cars = [
            'Mercedes' => [
                'cor' => 'black',
                'motor' => 5.2
            ],
            'Ford' => [
                'cor' => 'white',
                'motor' => 3.2
            ],
            'Ferrari' => [
                'cor' => 'orange',
                'motor' => 5.2
            ],

];

        echo $cars['Ford']['cor'];
        echo $cars['Ford']['cor'] = 'blue';
?>

