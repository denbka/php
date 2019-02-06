<?php
$det = [
    'Двигатель' => '30.11.2000',
    'Карбюратор' => '12.12.2016',
    'Гидрокомпенсатор' => '21.06.2014',
    'Трамблёр' => '02.08.2018',
    'Ступичный подшипник' => '06.03.2019',
    'Топливный фильтр' => '',
    'Грушитель' => '25.12.2000'
];

class Car {

    public $details;

    public function getDetails($date='12.12.2016') {
        echo "Детали, которые выпущены позже $date <br>";
        foreach ($this->details as $key => $value) {
            $v = explode('.', $value);
            $s = explode('.', $date);
            if ($v[2] > $s[2]) {
                echo $key.'=>'.$value.'<br>';
            } elseif ($v[2] >= $s[2] && $v[1] > $s[1]) {
                echo $key.'=>'.$value.'<br>'; 
            } elseif ($v[2] >= $s[2] && $v[1] >= $s[1] && $v[0] > $s[0]) {
                echo $key.'=>'.$value.'<br>';
            }
        }
    }

    public function __construct($d) {
                $this->details = $d;
    }
}

$lada = new Car($det);
$lada->getDetails();
?>