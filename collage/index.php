<?php
include_once ('collage.php');
include_once ('branch.php');
include_once ('course.php');

$test = new course('graphics', 20, true);
$test2 = new branch('20 ffff st.', 'Tel-Aviv', 03444444);

$test->addCourses('graphics');
$test2 = new college('Jhone');
$test2->addbrunches('jerusalem');

print_r ($test);
echo "<br/>";
print_r ($test2);





