<?php


include_once 'linked_list/Node.php';
include_once 'linked_list/LinkedList.php';
include_once 'Student.php';
include_once 'StudentManager.php';

$studentManager = new StudentManager();

$student = new Student('Duc', 'duc@gmail.com');
$student2 = new Student('Uyen', 'uyen@gmail.com');
$student3 = new Student('Tuyet', 'tuyet@gmail.com');
$student4 = new Student('Lam', 'lam@gmail.com');

$studentManager->insertFirstNode($student);
$studentManager->insertFirstNode($student2);
$studentManager->insertLastNode($student3);
//$studentManager->insertLastNode($student4);
$studentManager->insert(1,$student4);

print_r($studentManager->getFirstNode());
