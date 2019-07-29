<?php

namespace Controller\Back ;

class Receipt_annual_dashboard{

    function run(){

        exec("cd /Users/damienblaison/Desktop/projet6/src/Controller/Back ; php Receipt_annual_generation.php > /dev/null &");

    }

    function dashboard(){

        $content =[

            "Receipt_generation_progress" => (new \Controller\Back\htmlElement\Progress_bar())->render(0,100,"Receipt_annual_generation_progress")

        ];

        (new \View\Back\Receipt\Receipt_annual_dashboard())->render($content);
    }

};
