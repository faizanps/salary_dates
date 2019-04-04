<?php
    include_once './view/Salary.php';
    use UI\Salary as Salary;
    
    $salaryView = new Salary();
    $salaryView->readArgs($argc, $argv);
