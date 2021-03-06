<?php
    namespace UI;
    include_once __DIR__.'/../controller/SalaryDates.php';
    include_once __DIR__.'/../controller/File.php';
    use Controller\SalaryDates as SalaryDates;
    use Controller\File as File;
    
    class Salary {
        function readArgs($argc, $argv){
            if($argc > 1 && $argc <=2){
                $salaryDates = new SalaryDates();
                list($months,$baseSalaryDates) = $salaryDates->getBaseSalaryDates();
                $bonusSalaryDates = $salaryDates->getBonusSalaryDates();
                $file = new File();
                $file->generateCsv($months, $baseSalaryDates, $bonusSalaryDates, $argv[1]);
            }else if($argc <= 1){
                echo "Too few arguments provided. Expected argument : CSV-Filename\n";
            }else if($argc > 2){
                echo "Too many arguments provided. Expected argument : CSV-Filename\n";
            }
        }
    }
