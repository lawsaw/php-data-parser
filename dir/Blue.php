<?php

class Blue {

    private $url = 'http://www.ux.ua/ru/marketdata/indexresult-csv.aspx?type=2';

    public function init() {
        $file = file($this->url);
        $data = [];
        foreach($file as &$row) {
            $rowData = explode(';', $row);
            foreach($rowData as &$col) {
                $col = iconv("windows-1251","UTF-8", $col);
            }
            $data[] = $rowData;
        }
        return $data;
    }

}
