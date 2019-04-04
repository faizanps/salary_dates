<?php
    namespace Controller;
    use \DateTime;
    use \DateInterval;
    use \DatePeriod;
    
    class SalaryDates{
        
        public function getBaseSalaryDates() : array{
            $baseSalaryDates = [];
            $months = [];
            $startDate = new \DateTime('first day of this month');
            $endDate = new \DateTime('1st january next year');
            $interval = new \DateInterval('P1M');
            $period = new \DatePeriod($startDate, $interval, $endDate);
            $baseSalDate = new DateTime();
            foreach($period as $month){
                array_push($months, $month->format('F'));
                $baseSalDate->modify("Last day of ".$month->format('F'));
                $date = $baseSalDate->format('d-m-Y');
                if($this->isWeekend($date) == 1){
                    if($baseSalDate->format('w') == 0){
                        $baseSalDate->modify('-2 day');
                        array_push($baseSalaryDates, $baseSalDate->format('d-m-Y'));
                    }
                    if($baseSalDate->format('w') == 6){
                        $baseSalDate->modify('-1 day');
                        array_push($baseSalaryDates, $baseSalDate->format('d-m-Y'));
                    }
                }else{
                    array_push($baseSalaryDates, $baseSalDate->format('d-m-Y'));
                }
            }
            return array($months, $baseSalaryDates);
        }
        
        public function getBonusSalaryDates() : array{
            $bonusSalaryDates = [];
            $startDate = new \DateTime('first day of this month');
            $endDate = new \DateTime('1st january next year');
            $interval = new \DateInterval('P1M');
            $period = new \DatePeriod($startDate, $interval, $endDate);
            $bonusSalDate = new DateTime();
            foreach($period as $month){
                $bonusSalDate->modify("First day of ".$month->format('F'));
                $bonusSalDate->add(new DateInterval('P14D'));
                $date = $bonusSalDate->format('d-m-Y');
                if($this->isWeekend($date) == 1){
                    if($bonusSalDate->format('w') == 0){
                        $bonusSalDate->modify('next wednesday');
                        array_push($bonusSalaryDates, $bonusSalDate->format('d-m-Y'));
                    }
                    if($bonusSalDate->format('w') == 6){
                        $bonusSalDate->modify('next wednesday');
                        array_push($bonusSalaryDates, $bonusSalDate->format('d-m-Y'));
                    }
                }else{
                    array_push($bonusSalaryDates, $bonusSalDate->format('d-m-Y'));
                }
            }
            return $bonusSalaryDates;
        }
        
        public function isWeekend($date){
            $dateObj = new DateTime($date);
            $weekend = [0,6];
            if(in_array($dateObj->format('w'),$weekend)){
                return 1;
            }else{
                return 0;
            }
        }
    }
