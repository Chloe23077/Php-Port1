<?php
function calculateSalary($jobListings) {
    $totalSalary = 0;
    $count = count($jobListings);

    foreach($jobListings as $job) {
        $totalSalary += $job['salary'];
    }
    $averageSalary = ($count > 0) ? $totalSalary/ $count : 0;

    return formatSalary($averageSalary);
}



