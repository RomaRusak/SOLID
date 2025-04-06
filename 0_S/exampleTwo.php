<?php

namespace S;

//Неверная реализация

// class Report {
//     private $reportData = [];

//     public function setReportData() {

//     }

//     public function getDoctor() {

//     }

//     public function getPatient() {

//     }

//     public function getReportData() {

//     }

//     public function renderReport() {
        
//     }
// }

//Верная реализация


class Report {
    private $reportData = [];

    public function setReportData() {

    }

    public function getReportData() {

    }

    public function getDoctor() {

    }

    public function getPatient() {

    }
}

class ReportHTMLTemplate extends Report {
    public function renderReport() {
        
    }
}