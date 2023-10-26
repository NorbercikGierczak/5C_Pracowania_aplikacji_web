<?php
function incrementVisitCounter() {
    if (!isset($_COOKIE['visit_date']) || $_COOKIE['visit_date'] != date('Y-m-d')) {
        if (!isset($_COOKIE['visit_count'])) {

            setcookie('visit_count', 1, time() + 86400); 
        } else {
            setcookie('visit_count', $_COOKIE['visit_count'] + 1, time() + 86400);
        }
        setcookie('visit_date', date('Y-m-d'), time() + 86400);
    }
}

incrementVisitCounter();

$visitCount = isset($_COOKIE['visit_count']) ? $_COOKIE['visit_count'] : 0;

echo "Liczba odwiedzin: " . $visitCount;
?>