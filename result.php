<?php
session_start();
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,"dsspro");
$name = $_SESSION['name_user'];
$email = $_SESSION['email_user'];
$q1 = $_SESSION['question1'];
$q2 = $_SESSION['question2'];
$q3 = $_SESSION['question3'];
$q4 = $_SESSION['question4'];
$q5 = $_SESSION['question5'];
$q6 = $_SESSION['question6'];
$q7 = $_SESSION['question7'];
$q8 = $_SESSION['question8'];
$q9 = $_SESSION['question9'];
$q10 = $_SESSION['question10'];
$q11 = $_SESSION['question11'];
$q12 = $_SESSION['question12'];
$q13 = $_SESSION['question13'];
$q14 = $_SESSION['question14'];
$q15 = $_SESSION['question15'];
$q16 = $_SESSION['question16'];
$q17 = $_SESSION['question17'];
$q18 = $_SESSION['question18'];
$q19 = $_SESSION['question19'];
$q20 = $_SESSION['question20'];
$q[0] = $q1;
$q[1] = $q2;
$q[2] = $q3;
$q[3] = $q4;
$q[4] = $q5;
$q[5] = $q6;
$q[6] = $q7;
$q[7] = $q8;
$q[8] = $q9;
$q[9] = $q10;
$q[10] = $q11;
$q[11] = $q12;
$q[12] = $q13;
$q[13] = $q14;
$q[14] = $q15;
$q[15] = $q16;
$q[16] = $q17;
$q[17] = $q18;
$qt[0] = " As you travel long distances LNG is more favorable than traditional fuels ";
$qt[1] = "";
$qt[2] = " You prefer to use the vehicle for more than four years, LNG is more suitable, which reduce the operating cost in the long run ";
$qt[3] = " Performance of LNG vehicle is less when compared to the gasoline Vehicle so LNG suites you ";
$qt[4] = "";
$qt[5] = " As you refuel your vehicle with huge amounts of fuel, LNG suites you as LNG refueling stations are not available as that of petrol and diesel ";
$qt[6] = " Refueling of LNG is a complex process, As you refuel your vehicle for every ten days this may not become a big problem ";
$qt[7] = " Since the LNG filling station is near you, you can use LNG easily ";
$qt[8] = " LNG and LCNG are cheaper than petrol and diesel ";
$qt[9] = " You consider the fuel expenses is the main factor so LNG and CLNG suites you";
$qt[10] = "Fuel expenses of LNG are very less when compared with other traditional fuels";
$qt[11] = "LNG is preferred to you like usage of LNG has less maintenance and service cost compared to other fuels";
$qt[12] = "";
$qt[13] = "As boot space of the vehicle doesn't matter for you, LNG suites you";
$qt[14] = "Vehicle running with LNG is recommended as LNG vehicle requires less service and maintenance";
$qt[15] = "Selection of environmental benefits would be considered as merit because LNG has admirable environmental benefits";
$qt[16] = "Emission from the LNG vehicle is very less when compared to traditional fuel vehicles";
$qt[17] = "";

$qf[0] = "If you use your car for short trips there is a high degree of fuel vapourization ";
$qf[1] = " The main benefit of LNG is less fuel cost and maintenance cost if you use your less often there is no value in buying LNG vehicle which is more expensive than petrol and diesel vehicles";
$qf[2] = "if you change your vehicle frequently then there is no value in buying expensive LNG and CLNG vehicles ";
$qf[3] = "LNG vehicle will provide less torque when compared to Petrol and diesel vehicles";
$qf[4] = "";
$qf[5] = "As the refilling process is complex and tedious, LNG won't suit you if you refuel your vehicle with less quantity of fuel";
$qf[6] = "As the refilling process is complex and tedious, LNG won't suit you if you refuel your vehicle frequently";
$qf[7] = "";
$qf[8] = "";
$qf[9] = "As pickup for LNG and CLNG vehicles is less when compared to petrol and diesel, if you prefer performance as the main factor then LNG and CLNG vehicles won't suit you";
$qf[10] = "";
$qf[11] = "If you do not consider maintenance cost then there is no need to buy expensive LNG and CLNG vehicles";
$qf[12] = "";
$qf[13] = "If you want more boot space then LNG and CLNG vehicles won't suit you because fuel tank of these vehicles is large";
$qf[14] = "";
$qf[15] = "if performance is your main priority then LNG and CLNG vehicles won't suit you";
$qf[16] = "";
$qf[17] = "";

/*for($i = 0; $i <= 17; $i++)
	echo $q[$i];*/
$total = $q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8+$q9+$q10+$q11+$q12+$q13+$q14+$q15+$q16+$q17+$q18+$q19+$q20;
$query = "insert into main_table(name,email,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16,q17,q18,q19,q20,total) values('$name','$email',$q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10,$q11,$q12,$q13,$q14,$q15,$q16,$q17,$q18,$q19,$q20,$total)";
//echo $query;
$qi = mysqli_query($conn,$query);
/*if($qi)
	echo"inserted successfuly";
else
	die(mysql_error);*/

?>	
<style type="text/css">
    @import url("https://fonts.googleapis.com/css?family=Segoe+UI");
</style>

<style type="text/css">
    * {
        box-sizing: border-box;
    }

    .ddr-page-wrapper {
        position: relative;
        padding: 0px;
        margin: 0px;
        font-family: sans-serif;
        font-size: 16px;
		background-position: center center;
    }
	body
	{
		background-image:url('bgtree.jpg');
		background-position:center center;
	}

    .ddr-page-wrapper .ddr-page {
        position: relative;
    }

    .ddr-page-wrapper .ddr-page .ddr-page-section-pre-content::after,
    .ddr-page-wrapper .ddr-page .ddr-page-section-pre-content::before,
    .ddr-page-wrapper .ddr-page>div::after,
    .ddr-page-wrapper .ddr-page>div::before {
        content: "";
        display: table;
        clear: both;
    }

    .ddr-page-row,
    .ddr-page-section-wrapper .ddr-page-section {
        position: relative;
        box-sizing: border-box;
    }

    .ddr-page-row {
        display: flex;
        width: 100%;
    }

    .ddr-page-row__wrap {
        flex-wrap: wrap;
    }

    .ddr-page-row__wrap .ddr-page-column__wrap {
        width: 100% !important;
    }

    .ddr-page-row__wrap-reverse {
        flex-wrap: wrap-reverse;
    }

    .ddr-page-row__wrap-reverse .ddr-page-column__wrap-reverse {
        width: 100% !important;
    }

    .ddr-page-column {
        display: flex;
        flex-wrap: wrap;
        box-sizing: border-box;
        position: relative;
        align-content: flex-start;
    }

    .ddr-page-widget {
        width: 100%;
        position: relative;
        overflow: hidden;
    }

    .ddr-widget {
        background-color: transparent;
        background-image: none;
        top: auto;
        bottom: auto;
        left: auto;
        right: auto;
        height: auto;
        width: auto;
        max-height: none;
        max-width: none;
        min-height: 0px;
        min-width: 0px;
        padding: 0px;
        margin: 0px;
        overflow: hidden;
    }

    .ddr-widget__headline {
        position: relative;
        overflow: hidden;
        word-break: break-word;
    }

    @media (min-width: 1025px) {
        .ddr-page-row__wrap--max {
            flex-wrap: wrap;
        }

        .ddr-page-row__wrap--max .ddr-page-column__wrap--max {
            width: 100% !important;
        }

        .ddr-page-row__wrap-reverse--max {
            flex-wrap: wrap-reverse;
        }

        .ddr-page-row__wrap-reverse--max .ddr-page-column__wrap-reverse--max {
            width: 100% !important;
        }

        .ddr-page-column__hide--max,
        .ddr-page-widget__hide--max {
            display: none;
        }
    }

    @media (max-width: 1024px) and (min-width: 769px) {
        .ddr-page-row__wrap--1024 {
            flex-wrap: wrap;
        }

        .ddr-page-row__wrap--1024 .ddr-page-column__wrap--1024 {
            width: 100% !important;
        }

        .ddr-page-row__wrap-reverse--1024 {
            flex-wrap: wrap-reverse;
        }

        .ddr-page-row__wrap-reverse--1024 .ddr-page-column__wrap-reverse--1024 {
            width: 100% !important;
        }

        .ddr-page-column__hide--1024,
        .ddr-page-widget__hide--1024 {
            display: none;
        }
    }

    @media (max-width: 768px) and (min-width: 481px) {
        .ddr-page-row__wrap--768 {
            flex-wrap: wrap;
        }

        .ddr-page-row__wrap--768 .ddr-page-column__wrap--768 {
            width: 100% !important;
        }

        .ddr-page-row__wrap-reverse--768 {
            flex-wrap: wrap-reverse;
        }

        .ddr-page-row__wrap-reverse--768 .ddr-page-column__wrap-reverse--768 {
            width: 100% !important;
        }

        .ddr-page-column__hide--768,
        .ddr-page-widget__hide--768 {
            display: none;
        }
    }

    @media (max-width: 480px) and (min-width: 321px) {
        .ddr-page-row__wrap--480 {
            flex-wrap: wrap;
        }

        .ddr-page-row__wrap--480 .ddr-page-column__wrap--480 {
            width: 100% !important;
        }

        .ddr-page-row__wrap-reverse--480 {
            flex-wrap: wrap-reverse;
        }

        .ddr-page-row__wrap-reverse--480 .ddr-page-column__wrap-reverse--480 {
            width: 100% !important;
        }

        .ddr-page-column__hide--480,
        .ddr-page-widget__hide--480 {
            display: none;
        }
    }

    @media (max-width: 320px) and (min-width: 0px) {
        .ddr-page-row__wrap--320 {
            flex-wrap: wrap;
        }

        .ddr-page-row__wrap--320 .ddr-page-column__wrap--320 {
            width: 100% !important;
        }

        .ddr-page-row__wrap-reverse--320 {
            flex-wrap: wrap-reverse;
        }

        .ddr-page-row__wrap-reverse--320 .ddr-page-column__wrap-reverse--320 {
            width: 100% !important;
        }

        .ddr-page-column__hide--320,
        .ddr-page-widget__hide--320 {
            display: none;
        }
    }

    [data-ddr-page-widget-additional-css-id="07706ddbc1"] {
        font-family: 'Segoe UI', sans-serif;
    }
	.result_text
	{
		text-align:center;
		background-color: rgb(91, 91, 97);
		opacity:0.75;
		margin-top:10px;
		color:white;
		padding:10px;
	    font-family: 'Segoe UI', sans-serif;
		font-size:30px;
	}
	.reason_support
	{
		background-color: rgb(91, 91, 97);
		opacity:0.75;
		margin-top:10px;
		color:white;
		padding:10px;
	    font-family: 'Segoe UI', sans-serif;
		font-size:20px;
	}
</style>
<div class="ddr-page-wrapper">
    <div class="ddr-page">
        <div id="ddr-d0c8d147d0" class="ddr-page-section-wrapper ddr-page-section-wrapper-0" style="background-color: rgb(91, 91, 97); opacity:0.75;">
            <div class="ddr-page-section-pre-content ddr-page-section-pre-content-0">
                <div class="ddr-page-section ddr-page-section-0">
                    <div class="ddr-page-row ddr-page-row-0 ddr-page-row__wrap--320 ddr-page-row__wrap--480 ddr-page-row__wrap--768">
                        <div class="ddr-page-column ddr-page-column-0 ddr-page-column__wrap--320 ddr-page-column__wrap--480 ddr-page-column__wrap--768 " style="width: 100%;">
                            <div id="ddr-8fcebbccf6" class="ddr-page-widget ddr-page-widget__headline ddr-page-widget-0 " data-ddr-page-widget-additional-css-id="07706ddbc1">
                                <div class="ddr-widget">
                                    <h1 class="ddr-widget__headline" style="margin: 30px; text-align: center; font-size: 55px; color: rgb(28, 189, 29);">IMPLEMENTATION OF LNG &amp; CLNG IN VEHICLES</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="result_LNG">
		    <div class="result_text">
			Decision:
			<?php 
			if($total > 120)
				echo "LNG vehicle best suites you";
			else if($total>75 && $total<=120)
				echo "LNG vehicle suites you but you have to consider the follownig pros and cons with LNG";
			else if($total<=75)
				echo "Traditional fuels like gasoline and diesel suites you better than the LNG"
			?></div>
		</div>
		<div class="reason_support">
		    <div class="positve_reason">
			<b><i>PROS</i></b><br>
			<ul>
		    <?php
			for($j =0 ;$j <= 17; $j++)
			{	
				if($q[$j] == 10 && $qt[$j]!="")
				{
					?> <li><?php echo $qt[$j];?>.</li><br>
					<?php
				}
			}
			?>
			</ul>
			</div>
			
		    <div class="negative_reason">
			<b><i>CONS</i></b><br>
			<ul>
		    <?php
			for($j =0 ;$j <= 17; $j++)
			{	
				if($q[$j] == 0 && $qf[$j]!="")
				{
					?> 
					<li><?php  echo $qf[$j];?>.</li>
					<br>
					<?php
				}
			}
			?>
			</ul>
			</div>
		</div>
    </div>
</div>