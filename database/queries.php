<?php

function hourly_wage_less_than_ten_dollars_query () {
    $userQuery = "SELECT empID, firstName, lastName";
    $userQuery .= " FROM personnel";
    $userQuery .= " WHERE hourlyWage < 10.00";
    return $userQuery;
}

function name_change_query() {
    $userQuery = "UPDATE personnel";
    $userQuery = "SET lastName='Jackson', jobTitle='Manager'";
    $userQuery = "WHERE empID='12353'";
    return $userQuery;
}

function name_change_test_query() {
    $userQuery = "SELECT lastName, jobTitle";
    $userQuery = "FROM personnel";
    $userQuery = "WHERE empID = '12353'";
    return $userQuery;
}

function wage_report_query() {
    $userQuery = "SELECT empID";
    $userQuery = "FROM personnel"; 
    $userQuery = "WHERE hourlyWage >='$hourlyWage ' AND jobTitle='$jobTitle' ";
    return $userQuery;
}

function add_sales_person_query() {
    $userQuery = "INSERT INTO personnel (empID, firstName, lastName, jobTitle, hourlyWage)";
    $userQuery = "VALUES ('$empID', '$firstName', '$lastName', 'Sales', '8.25')";
    return $userQuery;
}