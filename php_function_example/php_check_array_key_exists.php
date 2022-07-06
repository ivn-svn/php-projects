<?php 
# Where $dailyTotalToAggregate is initially the empty array that would contain the aggregated hours for: 
# holiday
# home 
# calendar
# work

function dailyTotalsAggregatedPerMonth($dayToCover, $dailyTotalToAggregate, $hoursSum) {
    if (array_key_exists($dayToCover, $dailyTotalToAggregate)) {
        $dailyTotalToAggregate[$dayToCover] += floatval($hoursSum);
    }
    else {
        $dailyTotalToAggregate[$dayToCover] = floatval($hoursSum);
    }
}
?>