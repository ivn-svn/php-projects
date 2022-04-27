<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>timesheet</title>
	<meta name="description" content="Source code by Svetlin I.">
	<meta name="author" content="Svetlin!">
    <!-- <link rel="stylesheet" href="stdz_style.css"> -->
    <link rel="stylesheet" href="corner.css">
    <link rel="stylesheet" href="timesheet_style.css?v=<?php echo time(); ?>">
</head>
<body>
    <!-- JUMBO with shadows -->
    <div id="jumbotron">  
        <!--  .l -->
        <div class="l">
            <div class="company_header">
                <div class="companyname">
                    <h3>
                        Company Name Ltd.
                    </h3>
                </div>
                <div class="timesheet">
                    <h4>
                        Work Hours Timesheet
                    </h4>
                </div>
                <div class="dnplaceholder">
                    <div class="date">
                        Month: Feb 22
                    </div>
                    <div class="name">
                        Name: Mad Max
                    </div>
                </div>
            </div>
                <!-- TABLE STYLED WITH CSS -->
                <div class="thetable">
                    <?php
                        $data = array();

                        $companyLogo = "https//www.companylogo.xyz/logo";
                        $month = "February 23"; 
                        $name = "Mad Max";

                        $data[] = ["workStart" => "07:00", "workEnd" => "15:45", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "04.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "06:30", "workEnd" => "15:15", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "05.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "07:30", "workEnd" => "16:15", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "06.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "07:00", "workEnd" => "15:45", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "04.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "06:30", "workEnd" => "15:15", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "05.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "07:30", "workEnd" => "16:15", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "06.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "07:00", "workEnd" => "15:45", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "04.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "06:30", "workEnd" => "15:15", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "05.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "07:30", "workEnd" => "16:15", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "06.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "07:00", "workEnd" => "15:45", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "04.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "06:30", "workEnd" => "15:15", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "05.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "07:30", "workEnd" => "16:15", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "06.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "07:00", "workEnd" => "15:45", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "04.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "06:30", "workEnd" => "15:15", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "05.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "07:30", "workEnd" => "16:15", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "06.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "07:00", "workEnd" => "15:45", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "04.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "06:30", "workEnd" => "15:15", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "05.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "07:30", "workEnd" => "16:15", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "06.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "07:00", "workEnd" => "15:45", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "04.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "06:30", "workEnd" => "15:15", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "05.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "07:30", "workEnd" => "16:15", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "06.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "07:00", "workEnd" => "15:45", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "04.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "06:30", "workEnd" => "15:15", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "05.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "07:30", "workEnd" => "16:15", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "06.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "07:00", "workEnd" => "15:45", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "04.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "06:30", "workEnd" => "15:15", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "05.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "07:30", "workEnd" => "16:15", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "06.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "07:00", "workEnd" => "15:45", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "04.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "06:30", "workEnd" => "15:15", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "05.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "07:30", "workEnd" => "16:15", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "06.02.2022", "remark" => "empty"]; 
                        $data[] = ["workStart" => "07:00", "workEnd" => "15:45", "breaks" => "0:45",  "actualWorkHours" => "08,00", "placeholder" => "empty", "sick" => "empty", "vaccation"  => "empty", "holiday" => "empty", "recordedOn" => "04.02.2022", "remark" => "empty"];
                        

                        $dataHeader["day"] = "Day";
                        $dataHeader["workStart"] = "Work start";
                        $dataHeader["workEnd"] = "Work end";
                        $dataHeader["breaks"] = "Pause";
                        $dataHeader["actualWorkHours"] = "Actual Workhours";
                        $dataHeader["placeholder"] = "Placeholder";
                        $dataHeader["sick"] = "Sick Leave";
                        $dataHeader["vaccation"] = "Vaccation";
                        $dataHeader["holiday"] = "Holiday";
                        $dataHeader["recordedOn"] = "Recorded on:";
                        $dataHeader["remark"] = "Remark:";


                        $listKeys = ["day", "workStart", "workEnd", "breaks", "actualWorkHours", "placeholder", "sick", "vaccation", "holiday", "recordedOn", "remark"];
                    ?>

                    <div>
                        <table>
                            <thead>
                                <tr>
                                    <?php
                                        foreach($dataHeader as $x => $x_value) {
                                            echo "<th>" . $x_value . "</th>";
                                        } 
                                    ?>
                                </tr>            
                            </thead>

                            <tbody>

                                <?php
                                    $endday = 31;
                                    $currentDay = 1;
                                    foreach($data as $key=>$row) {
                                        echo "<tr>";
                                        echo "<td>" . $currentDay . "</td>";

                                        foreach($row as $key2=>$row2){
                                            echo "<td>" . $row2 . "</td>";
                                        }
                                        echo "</tr>";
                                        $currentDay += 1;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <!-- END TABLE STYLED WITH CSS -->
                <!--  EMPLOYEE SIGNATURE -->
                    <div class="signaturearea">
                        <div class="employeesignature">
                            <p>Employee Signature:</p>                                        
                            <p><br/><br/><br/></p>      
                            <p><br/><br/><br/></p>                                                                          
                            <p>__________________________</p>                                        
                        </div>
                    </div>
                <!-- END EMPLOYEE SIGNATURE -->
            </div>
        <!-- END .l -->
        </div>
    <!-- END JUMBOTRON with shadows -->
    </div>
</body>
</html>
