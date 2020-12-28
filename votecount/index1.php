<?php

$con = mysqli_connect("localhost","root","","mytest");
if(isset($_GET['results']))
{
    $get_votes = "select * from votes";
    $run_votes = mysqli_query($con, $get_votes);
    $row_votes = mysqli_fetch_array($run_votes);

        $chirag = $row_votes['chirag'];
        $nitish = $row_votes['nitish'];
        $tejaswi = $row_votes['tejaswi'];
        $anant = $row_votes['anant'];
        $sunil = $row_votes['sunil'];
        $manoj = $row_votes['manoj'];
        $jitan = $row_votes['jitan'];
        $bhagirathi = $row_votes['bhagirathi'];

    $count = $chirag+$nitish+$tejaswi+$anant+$sunil+$manoj+$jitan+$bhagirathi;
    $per_chirag = round($chirag*100/$count) . "%";
    $per_nitish = round($nitish*100/$count) . "%";
    $per_tejaswi = round($tejaswi*100/$count) . "%";
    $per_anant = round($anant*100/$count) . "%";
    $per_sunil = round($sunil*100/$count) . "%";
    $per_manoj = round($manoj*100/$count) . "%";
    $per_jitan = round($jitan*100/$count) . "%";
    $per_bhagirathi = round($bhagirathi*100/$count) . "%";

    echo "
            <div style='background:orange' padding: 10px; text-align: center;>
            <center>
                <h2>Update Result:</h2>
                <p style='background: black; color: white; padding:10px; width: 500px;'>
                    <b> Chirag Passwan: </b> $chirag ($per_chirag)
                </p>
                <p style = 'background: black; color: white; padding:10px; width:500px;'>
                    <b> Nitish Kumar: </b> $nitish ($per_nitish)
                </p>
                <p style = 'background: black; color: white; padding:10px; width:500px;'>
                    <b> Tejaswi Yadav: </b> $tejaswi ($per_tejaswi)
                </p>
                <p style = 'background: black; color: white; padding:10px; width:500px;'>
                    <b> Anant Singh: </b> $anant ($per_anant)
                </p>
                <p style = 'background: black; color: white; padding:10px; width:500px;'>
                    <b> Sunil: </b> $sunil ($per_sunil)
                </p>
                <p style = 'background: black; color: white; padding:10px; width:500px;'>
                    <b> Manoj Tiwari: </b> $manoj ($per_manoj)
                </p>
                <p style = 'background: black; color: white; padding:10px; width:500px;'>
                    <b> Jitan: </b> $jitan ($per_jitan)
                </p>
                <p style = 'background: black; color: white; padding:10px; width:500px;'>
                    <b> bhagirathi: </b> $bhagirathi ($per_bhagirathi)
                </p>
            </center>
            </div>
            ";
    
}
?>