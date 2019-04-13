<?php

class Main {

    private $html;
    private $document;

    public function init() {
        $html = file_get_contents('http://www.ux.ua/ru/marketdata/indexresult-csv.aspx?type=2');
        $document = phpQuery::newDocument($html);
        $echo = $document;
        return $echo;
    }

}
