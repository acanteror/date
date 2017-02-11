<?php


class DateModel{


    public function getDateRangeToday(){

        $dt = new \DateTime('now');

        $firstToday = $dt->format('Y-m-d 00:00:00');
        $lastToday = $dt->format('Y-m-d 23:59:59');

        $result = array ('first' => $firstToday, 'last' => $lastToday
        );
        return $result;
    }

    public function getDateRangeYesterday(){

        $dt = new \DateTime('now');

        $firstYesterday = $dt->modify('yesterday')->format('Y-m-d 00:00:00');
        $lastYesterday = $dt->format('Y-m-d 23:59:59');

        $result = array (
            'first' => $firstYesterday, 'last' => $lastYesterday,
        );
        return $result;
    }

    public function getDateRangeWeek(){

        $dt = new \DateTime('now');
        $firstOfWeek = $dt->modify('last monday')->format('Y-m-d 00:00:00');
        $dt = new \DateTime('now');
        $lastOfWeek = $dt->modify('next sunday')->format('Y-m-d 23:59:59');

        $result = array (
            'first' => $firstOfWeek, 'last' => $lastOfWeek,

        );
        return $result;
    }

    public function getDateRangeMonth(){

        $dt = new \DateTime('now');

        $firstOfMonth = $dt->modify('first day of this month')->format('Y-m-d 00:00:00');
        $lastOfMonth = $dt->modify('last day of this month')->format('Y-m-d 23:59:59');

        $result = array (
            'first' => $firstOfMonth, 'last' => $lastOfMonth,
        );
        return $result;
    }

    public function getDateRangeYear(){

        $dt = new \DateTime('now');

        $firstOfYear = $dt->modify('first day of this month')->format('Y-m-d 00:00:00');
        $lastOfYear = $dt->modify('last day of this month')->format('Y-m-d 23:59:59');

        $result = array (
            'first' => $firstOfYear, 'last' => $lastOfYear,
        );
        return $result;
    }

    public function handleFilter ($filter){

        switch ($filter) {
            case 0:
                $result = $this->getDateRangeYear();
                $first = $result['first'];
                $last = $result['last'];
                break;
            case 1:
                $result = $this->getDateRangeToday();
                $first = $result['first'];
                $last = $result['last'];
                break;
            case 2:
                $result = $this->getDateRangeYesterday();
                $first = $result['first'];
                $last = $result['last'];
                break;
            case 3:
                $result = $this->getDateRangeWeek();
                $first = $result['first'];
                $last = $result['last'];
                break;
            case 4:
                $result = $this->getDateRangeMonth();
                $first = $result['first'];
                $last = $result['last'];
                break;
            default:
                $first = null;
                $last = null;
        }

        $result = array ('first' => $first, 'last' => $last);

        return $result;

    }


}