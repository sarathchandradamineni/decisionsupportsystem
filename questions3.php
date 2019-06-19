<?php
session_start();
if(isset($_POST['submit_button']))
{
	$_SESSION['question11'] = intval($_POST['q11']);
	$_SESSION['question12'] = intval($_POST['q12']);
	$_SESSION['question13'] = intval($_POST['q13']);
	$_SESSION['question14'] = intval($_POST['q14']);
	$_SESSION['question15'] = intval($_POST['q15']);
	header("location:questions4.php");
}
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

    [data-ddr-page-widget-additional-css-id="a22a0480aa"] {
        font-family: 'Segoe UI', sans-serif;
    }
	body
	{
	background-image:url("bgtree.jpg");
	background-position: center center;
	}
	.navigation_bar
	{
	float:left;
	width:20%;
	background-color:rgb(91, 91, 97);
	opacity: 0.75;
	border-radius:10px;
	margin:10px;
	color:white;
	padding:10px;
	font-family: 'Segoe UI', sans-serif;
	height:100%;
	font-size:40px;
	}
	.questions_div
	{
	float:left;
	background-color: rgb(91, 91, 97);
	opacity: 0.75;
	border-radius:10px;
	padding:10px;
	width:77%;
	margin:10px;
	color:white;
	font-size:25px;
	font-family: 'Segoe UI', sans-serif;
	}
	.ques1
	{
	margin:10px;
	margin-bottom:40px;
	}
	#ddr-widget__form-submit-1200 {
        background-color: rgb(91, 91, 97);
        color: rgba(248, 248, 255, 1);
    }
	.button_next
	{
	text-align:center;
	}
	.setA,.setB,.setC,.setD
	{
	background-color:#1cbd1dff;
	margin:10px;
	text-align:center;
	border-radius:10px;
	}
	.setC
	{
	font-size:40px;
	background-color:#336600;
	}
	.namenemail
	{
	color:#1cbd1dff;
	font-size:20px;
	font-family: 'Segoe UI', sans-serif;
	}
	.name_div
	{
	float:left;
	margin-left:200px;
	}
	.email_div
	{
	float:left;
	margin-left:400px;
	}
</style>
<body>
<div class="ddr-page-wrapper">
    <div class="ddr-page">
        <div id="ddr-c2a86c2826" class="ddr-page-section-wrapper ddr-page-section-wrapper-0" style="background-color: rgb(91, 91, 97);opacity: 0.75;">
            <div class="ddr-page-section-pre-content ddr-page-section-pre-content-0">
                <div class="ddr-page-section ddr-page-section-0">
                    <div class="ddr-page-row ddr-page-row-0 ddr-page-row__wrap--320 ddr-page-row__wrap--480 ddr-page-row__wrap--768">
                        <div class="ddr-page-column ddr-page-column-0 ddr-page-column__wrap--320 ddr-page-column__wrap--480 ddr-page-column__wrap--768 " style="width: 100%;">
                            <div id="ddr-54e704e183" class="ddr-page-widget ddr-page-widget__headline ddr-page-widget-0 " data-ddr-page-widget-additional-css-id="a22a0480aa">
                                <div class="ddr-widget">
                                    <h1 class="ddr-widget__headline" style="margin: 30px; color: rgb(28, 189, 29); font-size: 55px; text-align: center;">IMPLEMENTATION OF LNG &amp; LCNG IN VEHICLES</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="namenemail">
			    <div class="name_div">
				<p><b>Name : &nbsp<?php echo$_SESSION['name_user'] ?></b></p>
				</div>
				<div class="email_div">
				<p><b>Email :&nbsp<?php echo$_SESSION['email_user'] ?></b></p>
				</div>
			</div>
        </div>
		<div class="bottompage">
		    <div class="navigation_bar">
			   <div class="setA">
			   Usability
			   </div>
			   <div class="setB">
			   Refueling
			   </div>
			   <div class="setC">
			   Maintenance
			   </div>
			   <div class="setD">
			   Environmental Aspects
			   </div>			   
			</div>
			<form method="post">
			<div class="questions_div"> 
			    <div class="ques1">
				11) What is the major draw backs that you felt with petrol or diesel engines so far<br>
                <input type="radio" name="q11" value="8">  Maintenance  charge<br>
                <input type="radio" name="q11" value="10"> Fuel expenses<br>
                <input type="radio" name="q11" value="5"> efficiency of engines<br> 
				</div>
				
				<div class="ques1">
				12) Do you consider maintenance and service as major factors for purchasing a vehicle <br>
                <input type="radio" name="q12" value="10"> Yes, to a large extent<br>
                <input type="radio" name="q12" value="7"> Yes, but also consider various other factors<br>
				<input type="radio" name="q12" value="3"> No, not at all consider this factor
				</div>
				 
			    <div class="ques1">
				13) what is your average monthly expenditure for maintenance of your vehicle (in SEK)<br>
                <input type="radio" name="q13" value="7"> 0 - 500 kr<br>
                <input type="radio" name="q13" value="7"> 500 - 1000 kr<br>
                <input type="radio" name="q13" value="7"> 1000 - 2000 kr<br> 
                <input type="radio" name="q13" value="10"> >2000 kr
				</div>
				
				<div class="ques1">
				14) Does boot space of the vehicle really matters for your choice?<br>
                <input type="radio" name="q14" value="0"> Yes, to a large extent<br>
                <input type="radio" name="q14" value="5"> Yes, but up to some extent<br>
				<input type="radio" name="q14" value="10"> No, not at all consider this factor
				</div>
				
				<div class="ques1">
				15) How often your vehicle undergo service<br>
                <input type="radio" name="q15" value="10"> Once in a month<br>
                <input type="radio" name="q15" value="7"> Once in a couple of months<br>
                <input type="radio" name="q15" value="7"> Once for every six months
				</div>
			</div>
			<div class="button_next">
			<button id="ddr-widget__form-submit-1200" type="submit" name="submit_button" style="padding: 10px 15px; font-size: 20px; border-radius: 10px; cursor: pointer;"><b>Next >></b></button>
			</div>
			</form>
		</div>
    </div>
</div>
</body>