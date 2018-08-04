<?php

// for loop start

for ($i = 100; $i <= 150; $i++) {
    echo "the number is - $i <br>";
}
// for loop end

// while loop start

$w = 201;

while ($w <= 250) {
    echo "the roll number is - $w <br>";
    $w++;
}

// while loop end

// do..while loop start

$d = 301;

do{
    echo "value is - $d <br>";
    $d++;
}
while ($d <=350);

// do..while loop end


// Numeric Array start

$data = array("HTML", "CSS", "PHP", "Laravel", "Database", "MySql");
echo "<pre>";
print_r($data);
// Numeric Array end

// Associative Array start

$data = array('a' => "Argentina", 'b' => "Brazil", 'c' => "Germany", 'd' => "Portugal");
echo "<pre>";
print_r($data);

// Associative Array end

// Multi-dimensiona array start

$data = array(
    array("Cricket"),
    array("Football"),
    array("Hockey"),
    array("Badminton"),
);
echo "<pre>";
print_r($data);

// Multi-dimensiona array end

// function without parameter start

function cmbd() {
    return "WE ARE CodeManBD Student <br>";
}
echo cmbd();

// function without parameter end

// function with parameter start

function cm($course, $course_1, $course_2, $course_3) {
    return "In Codemanbd We Learn $course, $course_1, $course_2 and $course_3.";

}
 echo cm("PHP", "Laravel", "MySql", "Wordpress");

// function with parameter end
?>