<?php 
    namespace Controller;
    
    class File{        
        
        public function generateCSV($months, $baseSalaryDates, $bonusSalaryDates, $filename){
            try{
                $fp = fopen($filename, 'w');
                fputcsv($fp, array("Month", "Base Salary Dates", "Bonus Salary Dates"));
                $i=0;
                foreach($months as $month){
                   fputcsv($fp, array($month, $baseSalaryDates[$i], $bonusSalaryDates[$i]));
                   $i++;
                }
                fclose($fp);
                echo $filename." saved successfully\n";
            }catch(Exception $e){
                echo "Message : ".$e->getMessage();
            }
        }
    }
