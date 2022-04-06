<?php
function getAppraisalFee($loanNumber)
{

    if ($loanNumber > 20000) {
        $result = 500;
    } else {
        $result = 100;

    }
    return $result;
}
