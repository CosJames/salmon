<?php

include_once "../inc/controller_transaction.inc.php";

$studentNumber = $_POST["studentNumber"];
$memberCardNo = $_POST["memberCardNo"];

$transaction = new Transaction();
$transaction->createTransaction($studentNumber, $memberCardNo);