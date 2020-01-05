<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Years Resolutions Calender</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">

    <!-- App CSS -->
    <link rel="stylesheet" href="main.css">
</head>
<body>


<?php
// Get how many days are left..
$cdate = mktime(0, 0, 0, 1, 1, 2021);
$today = time();
$difference = $cdate - $today;
if ($difference < 0) { $difference = 0; }
?>

<div class="container">
    <div class="row">
        <header class="col-12">
            New Years Resolutions Calender
        </header>
    </div>

    <div class="row">
        <!-- Stats and Menu Side bar -->
        <div class="col-lg-4">
            <h3>Current Resolutions</h3>
            <ol>
                <li data-task="1">Practice Drawing for 20 minutes every day</li>
                <li data-task="2">Do DDP Yoga every day</li>
            </ol>

            <h3>Days to Go</h3>
            <h1><?php echo floor($difference/60/60/24) ?></h1>

            <h3>Current Points</h3>
            <h2><span id="points_amount">0</span>/732</h2>
            <div class="progress">
                <div class="progress-bar" id="points_progress_bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="728"></div>
            </div>
        </div>

        <!-- Calender Tables -->
        <div class="col-lg-8">
            <div class="calender-wrapper" id="calender-wrapper">
                <!-- January -->
                <table>
                    <tr>
                        <th colspan="7">January</th>
                    </tr>
                    <tr>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td data-date="2020-01-01">1</td>
                        <td data-date="2020-01-02">2</td>
                        <td data-date="2020-01-03">3</td>

                        <td data-date="2020-01-04">4</td>
                    </tr>
                    <tr>
                        <td data-date="2020-01-05">5</td>
                        <td data-date="2020-01-06">6</td>
                        <td data-date="2020-01-07">7</td>
                        <td data-date="2020-01-08">8</td>
                        <td data-date="2020-01-09">9</td>
                        <td data-date="2020-01-10">10</td>
                        <td data-date="2020-01-11">11</td>
                    </tr>
                    <tr>
                        <td data-date="2020-01-12">12</td>
                        <td data-date="2020-01-13">13</td>
                        <td data-date="2020-01-14">14</td>
                        <td data-date="2020-01-15">15</td>
                        <td data-date="2020-01-16">16</td>
                        <td data-date="2020-01-17">17</td>
                        <td data-date="2020-01-18">18</td>
                    </tr>
                    <tr>
                        <td data-date="2020-01-19">19</td>
                        <td data-date="2020-01-20">20</td>
                        <td data-date="2020-01-21">21</td>
                        <td data-date="2020-01-22">22</td>
                        <td data-date="2020-01-23">23</td>
                        <td data-date="2020-01-24">24</td>
                        <td data-date="2020-01-25">25</td>
                    </tr>
                    <tr>
                        <td data-date="2020-01-26">26</td>
                        <td data-date="2020-01-27">27</td>
                        <td data-date="2020-01-28">28</td>
                        <td data-date="2020-01-29">29</td>
                        <td data-date="2020-01-30">30</td>
                        <td data-date="2020-01-31">31</td>
                        <td class="empty"></td>
                    </tr>
                </table>

                <!-- February -->
                <table>
                    <tr>
                        <th colspan="7">February</th>
                    </tr>
                    <tr>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td data-date="2020-02-01">1</td>
                    </tr>
                    <tr>
                        <td data-date="2020-02-02">2</td>
                        <td data-date="2020-02-03">3</td>
                        <td data-date="2020-02-04">4</td>
                        <td data-date="2020-02-05">5</td>
                        <td data-date="2020-02-06">6</td>
                        <td data-date="2020-02-07">7</td>
                        <td data-date="2020-02-08">8</td>
                    </tr>
                    <tr>
                        <td data-date="2020-02-09">9</td>
                        <td data-date="2020-02-10">10</td>
                        <td data-date="2020-02-11">11</td>
                        <td data-date="2020-02-12">12</td>
                        <td data-date="2020-02-13">13</td>
                        <td data-date="2020-02-14">14</td>
                        <td data-date="2020-02-15">15</td>
                    </tr>
                    <tr>
                        <td data-date="2020-02-16">16</td>
                        <td data-date="2020-02-17">17</td>
                        <td data-date="2020-02-18">18</td>
                        <td data-date="2020-02-19">19</td>
                        <td data-date="2020-02-20">20</td>
                        <td data-date="2020-02-21">21</td>
                        <td data-date="2020-02-22">22</td>
                    </tr>
                    <tr>
                        <td data-date="2020-02-23">23</td>
                        <td data-date="2020-02-24">24</td>
                        <td data-date="2020-02-25">25</td>
                        <td data-date="2020-02-26">26</td>
                        <td data-date="2020-02-27">27</td>
                        <td data-date="2020-02-28">28</td>
                        <td data-date="2020-02-28">29</td>
                    </tr>
                </table>

                <!-- March -->
                <table>
                    <tr>
                        <th colspan="7">March</th>
                    </tr>
                    <tr>
                        <td data-date="2020-03-01">1</td>
                        <td data-date="2020-03-02">2</td>
                        <td data-date="2020-03-03">3</td>
                        <td data-date="2020-03-04">4</td>
                        <td data-date="2020-03-05">5</td>
                        <td data-date="2020-03-06">6</td>
                        <td data-date="2020-03-07">7</td>

                    </tr>

                    <tr>
                        <td data-date="2020-03-08">8</td>
                        <td data-date="2020-03-09">9</td>
                        <td data-date="2020-03-10">10</td>
                        <td data-date="2020-03-11">11</td>
                        <td data-date="2020-03-12">12</td>
                        <td data-date="2020-03-13">13</td>
                        <td data-date="2020-03-14">14</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-15">15</td>
                        <td data-date="2020-03-16">16</td>
                        <td data-date="2020-03-17">17</td>
                        <td data-date="2020-03-18">18</td>
                        <td data-date="2020-03-19">19</td>
                        <td data-date="2020-03-20">20</td>
                        <td data-date="2020-03-21">21</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-22">22</td>
                        <td data-date="2020-03-23">23</td>
                        <td data-date="2020-03-24">24</td>
                        <td data-date="2020-03-25">25</td>
                        <td data-date="2020-03-26">26</td>
                        <td data-date="2020-03-27">27</td>
                        <td data-date="2020-03-28">28</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-29">29</td>
                        <td data-date="2020-03-30">30</td>
                        <td data-date="2020-03-31">31</td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                    </tr>
                </table>

                <!-- April -->
                <table>
                    <tr>
                        <th colspan="7">April</th>
                    </tr>

                    <tr>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td data-date="2020-03-01">1</td>
                        <td data-date="2020-03-02">2</td>
                        <td data-date="2020-03-03">3</td>
                        <td data-date="2020-03-04">4</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-05">5</td>
                        <td data-date="2020-03-06">6</td>
                        <td data-date="2020-03-07">7</td>
                        <td data-date="2020-03-08">8</td>
                        <td data-date="2020-03-09">9</td>
                        <td data-date="2020-03-10">10</td>
                        <td data-date="2020-03-11">11</td>
                    </tr>
                    <tr>
                        <td data-date="2020-03-12">12</td>
                        <td data-date="2020-03-13">13</td>
                        <td data-date="2020-03-14">14</td>
                        <td data-date="2020-03-15">15</td>
                        <td data-date="2020-03-16">16</td>
                        <td data-date="2020-03-17">17</td>
                        <td data-date="2020-03-18">18</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-19">19</td>
                        <td data-date="2020-03-20">20</td>
                        <td data-date="2020-03-21">21</td>
                        <td data-date="2020-03-22">22</td>
                        <td data-date="2020-03-23">23</td>
                        <td data-date="2020-03-24">24</td>
                        <td data-date="2020-03-25">25</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-26">26</td>
                        <td data-date="2020-03-27">27</td>
                        <td data-date="2020-03-28">28</td>
                        <td data-date="2020-03-29">29</td>
                        <td data-date="2020-03-30">30</td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                    </tr>
                </table>

                <!-- May -->
                <table>
                    <tr>
                        <th colspan="7">May</th>
                    </tr>

                    <tr>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td data-date="2020-03-01">1</td>
                        <td data-date="2020-03-02">2</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-03">3</td>
                        <td data-date="2020-03-04">4</td>
                        <td data-date="2020-03-05">5</td>
                        <td data-date="2020-03-06">6</td>
                        <td data-date="2020-03-07">7</td>
                        <td data-date="2020-03-08">8</td>
                        <td data-date="2020-03-09">9</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-10">10</td>
                        <td data-date="2020-03-11">11</td>
                        <td data-date="2020-03-12">12</td>
                        <td data-date="2020-03-13">13</td>
                        <td data-date="2020-03-14">14</td>
                        <td data-date="2020-03-15">15</td>
                        <td data-date="2020-03-16">16</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-17">17</td>
                        <td data-date="2020-03-18">18</td>
                        <td data-date="2020-03-19">19</td>
                        <td data-date="2020-03-20">20</td>
                        <td data-date="2020-03-21">21</td>
                        <td data-date="2020-03-22">22</td>
                        <td data-date="2020-03-23">23</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-24">24</td>
                        <td data-date="2020-03-25">25</td>
                        <td data-date="2020-03-26">26</td>
                        <td data-date="2020-03-27">27</td>
                        <td data-date="2020-03-28">28</td>
                        <td data-date="2020-03-29">29</td>
                        <td data-date="2020-03-30">30</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-31">31</td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                    </tr>
                </table>

                <!-- June -->
                <table>
                    <tr>
                        <th colspan="7">June</th>
                    </tr>

                    <tr>
                        <td class="empty"></td>
                        <td data-date="2020-03-01">1</td>
                        <td data-date="2020-03-02">2</td>
                        <td data-date="2020-03-03">3</td>
                        <td data-date="2020-03-04">4</td>
                        <td data-date="2020-03-05">5</td>
                        <td data-date="2020-03-06">6</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-07">7</td>
                        <td data-date="2020-03-08">8</td>
                        <td data-date="2020-03-09">9</td>
                        <td data-date="2020-03-10">10</td>
                        <td data-date="2020-03-11">11</td>
                        <td data-date="2020-03-12">12</td>
                        <td data-date="2020-03-13">13</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-14">14</td>
                        <td data-date="2020-03-15">15</td>
                        <td data-date="2020-03-16">16</td>
                        <td data-date="2020-03-17">17</td>
                        <td data-date="2020-03-18">18</td>
                        <td data-date="2020-03-19">19</td>
                        <td data-date="2020-03-20">20</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-21">21</td>
                        <td data-date="2020-03-22">22</td>
                        <td data-date="2020-03-23">23</td>
                        <td data-date="2020-03-24">24</td>
                        <td data-date="2020-03-25">25</td>
                        <td data-date="2020-03-26">26</td>
                        <td data-date="2020-03-27">27</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-28">28</td>
                        <td data-date="2020-03-29">29</td>
                        <td data-date="2020-03-30">30</td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                    </tr>
                </table>

                <!-- July -->
                <table>
                    <tr>
                        <th colspan="7">July</th>
                    </tr>


                    <tr>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td data-date="2020-03-01">1</td>
                        <td data-date="2020-03-02">2</td>
                        <td data-date="2020-03-03">3</td>
                        <td data-date="2020-03-04">4</td>
                    </tr>

                   <tr>
                       <td data-date="2020-03-05">5</td>
                       <td data-date="2020-03-06">6</td>
                       <td data-date="2020-03-07">7</td>
                       <td data-date="2020-03-08">8</td>
                       <td data-date="2020-03-09">9</td>
                       <td data-date="2020-03-10">10</td>
                       <td data-date="2020-03-11">11</td>
                   </tr>

                    <tr>
                        <td data-date="2020-03-12">12</td>
                        <td data-date="2020-03-13">13</td>
                        <td data-date="2020-03-14">14</td>
                        <td data-date="2020-03-15">15</td>
                        <td data-date="2020-03-16">16</td>
                        <td data-date="2020-03-17">17</td>
                        <td data-date="2020-03-18">18</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-19">19</td>
                        <td data-date="2020-03-20">20</td>
                        <td data-date="2020-03-21">21</td>
                        <td data-date="2020-03-22">22</td>
                        <td data-date="2020-03-23">23</td>
                        <td data-date="2020-03-24">24</td>
                        <td data-date="2020-03-25">25</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-26">26</td>
                        <td data-date="2020-03-27">27</td>
                        <td data-date="2020-03-28">28</td>
                        <td data-date="2020-03-29">29</td>
                        <td data-date="2020-03-30">30</td>
                        <td data-date="2020-03-31">31</td>
                        <td class="empty"></td>
                    </tr>
                </table>

                <!-- August -->
                <table>
                    <tr>
                        <th colspan="7">August</th>
                    </tr>

                    <tr>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td data-date="2020-03-01">1</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-02">2</td>
                        <td data-date="2020-03-03">3</td>
                        <td data-date="2020-03-04">4</td>
                        <td data-date="2020-03-05">5</td>
                        <td data-date="2020-03-06">6</td>
                        <td data-date="2020-03-07">7</td>
                        <td data-date="2020-03-08">8</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-09">9</td>
                        <td data-date="2020-03-10">10</td>
                        <td data-date="2020-03-11">11</td>
                        <td data-date="2020-03-12">12</td>
                        <td data-date="2020-03-13">13</td>
                        <td data-date="2020-03-14">14</td>
                        <td data-date="2020-03-15">15</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-16">16</td>
                        <td data-date="2020-03-17">17</td>
                        <td data-date="2020-03-18">18</td>
                        <td data-date="2020-03-19">19</td>
                        <td data-date="2020-03-20">20</td>
                        <td data-date="2020-03-21">21</td>
                        <td data-date="2020-03-22">22</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-23">23</td>
                        <td data-date="2020-03-24">24</td>
                        <td data-date="2020-03-25">25</td>
                        <td data-date="2020-03-26">26</td>
                        <td data-date="2020-03-27">27</td>
                        <td data-date="2020-03-28">28</td>
                        <td data-date="2020-03-29">29</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-30">30</td>
                        <td data-date="2020-03-31">31</td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                    </tr>


                </table>

                <!-- September -->
                <table>
                    <tr>
                        <th colspan="7">September</th>
                    </tr>

                    <tr>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td data-date="2020-03-01">1</td>
                        <td data-date="2020-03-02">2</td>
                        <td data-date="2020-03-03">3</td>
                        <td data-date="2020-03-04">4</td>
                        <td data-date="2020-03-05">5</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-06">6</td>
                        <td data-date="2020-03-07">7</td>
                        <td data-date="2020-03-08">8</td>
                        <td data-date="2020-03-09">9</td>
                        <td data-date="2020-03-10">10</td>
                        <td data-date="2020-03-11">11</td>
                        <td data-date="2020-03-12">12</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-13">13</td>
                        <td data-date="2020-03-14">14</td>
                        <td data-date="2020-03-15">15</td>
                        <td data-date="2020-03-16">16</td>
                        <td data-date="2020-03-17">17</td>
                        <td data-date="2020-03-18">18</td>
                        <td data-date="2020-03-19">19</td>
                    </tr>

                   <tr>
                       <td data-date="2020-03-20">20</td>
                       <td data-date="2020-03-21">21</td>
                       <td data-date="2020-03-22">22</td>
                       <td data-date="2020-03-23">23</td>
                       <td data-date="2020-03-24">24</td>
                       <td data-date="2020-03-25">25</td>
                       <td data-date="2020-03-26">26</td>
                   </tr>

                    <tr>
                        <td data-date="2020-03-27">27</td>
                        <td data-date="2020-03-28">28</td>
                        <td data-date="2020-03-29">29</td>
                        <td data-date="2020-03-30">30</td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                    </tr>

                </table>

                <!-- October -->
                <table>
                    <tr>
                        <th colspan="7">October</th>
                    </tr>

                    <tr>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td data-date="2020-03-01">1</td>
                        <td data-date="2020-03-02">2</td>
                        <td data-date="2020-03-03">3</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-04">4</td>
                        <td data-date="2020-03-05">5</td>
                        <td data-date="2020-03-06">6</td>
                        <td data-date="2020-03-07">7</td>
                        <td data-date="2020-03-08">8</td>
                        <td data-date="2020-03-09">9</td>
                        <td data-date="2020-03-10">10</td>
                    </tr>

                   <tr>
                       <td data-date="2020-03-11">11</td>
                       <td data-date="2020-03-12">12</td>
                       <td data-date="2020-03-13">13</td>
                       <td data-date="2020-03-14">14</td>
                       <td data-date="2020-03-15">15</td>
                       <td data-date="2020-03-16">16</td>
                       <td data-date="2020-03-17">17</td>
                   </tr>

                    <tr>
                        <td data-date="2020-03-18">18</td>
                        <td data-date="2020-03-19">19</td>
                        <td data-date="2020-03-20">20</td>
                        <td data-date="2020-03-21">21</td>
                        <td data-date="2020-03-22">22</td>
                        <td data-date="2020-03-23">23</td>
                        <td data-date="2020-03-24">24</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-25">25</td>
                        <td data-date="2020-03-26">26</td>
                        <td data-date="2020-03-27">27</td>
                        <td data-date="2020-03-28">28</td>
                        <td data-date="2020-03-29">29</td>
                        <td data-date="2020-03-30">30</td>
                        <td data-date="2020-03-31">31</td>
                    </tr>
                </table>

                <!-- November -->
                <table>
                    <tr>
                        <th colspan="7">November</th>
                    </tr>

                    <tr>
                        <td data-date="2020-03-01">1</td>
                        <td data-date="2020-03-02">2</td>
                        <td data-date="2020-03-03">3</td>
                        <td data-date="2020-03-04">4</td>
                        <td data-date="2020-03-05">5</td>
                        <td data-date="2020-03-06">6</td>
                        <td data-date="2020-03-07">7</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-08">8</td>
                        <td data-date="2020-03-09">9</td>
                        <td data-date="2020-03-10">10</td>
                        <td data-date="2020-03-11">11</td>
                        <td data-date="2020-03-12">12</td>
                        <td data-date="2020-03-13">13</td>
                        <td data-date="2020-03-14">14</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-15">15</td>
                        <td data-date="2020-03-16">16</td>
                        <td data-date="2020-03-17">17</td>
                        <td data-date="2020-03-18">18</td>
                        <td data-date="2020-03-19">19</td>
                        <td data-date="2020-03-20">20</td>
                        <td data-date="2020-03-21">21</td>
                    </tr>

                   <tr>
                       <td data-date="2020-03-22">22</td>
                       <td data-date="2020-03-23">23</td>
                       <td data-date="2020-03-24">24</td>
                       <td data-date="2020-03-25">25</td>
                       <td data-date="2020-03-26">26</td>
                       <td data-date="2020-03-27">27</td>
                       <td data-date="2020-03-28">28</td>
                   </tr>
                    <tr>
                        <td data-date="2020-03-29">29</td>
                        <td data-date="2020-03-30">30</td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                    </tr>
                </table>

                <!-- December -->
                <table>
                    <tr>
                        <th colspan="7">December</th>
                    </tr>

                    <tr>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td data-date="2020-03-01">1</td>
                        <td data-date="2020-03-02">2</td>
                        <td data-date="2020-03-03">3</td>
                        <td data-date="2020-03-04">4</td>
                        <td data-date="2020-03-05">5</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-06">6</td>
                        <td data-date="2020-03-07">7</td>
                        <td data-date="2020-03-08">8</td>
                        <td data-date="2020-03-09">9</td>
                        <td data-date="2020-03-10">10</td>
                        <td data-date="2020-03-11">11</td>
                        <td data-date="2020-03-12">12</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-13">13</td>
                        <td data-date="2020-03-14">14</td>
                        <td data-date="2020-03-15">15</td>
                        <td data-date="2020-03-16">16</td>
                        <td data-date="2020-03-17">17</td>
                        <td data-date="2020-03-18">18</td>
                        <td data-date="2020-03-19">19</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-20">20</td>
                        <td data-date="2020-03-21">21</td>
                        <td data-date="2020-03-22">22</td>
                        <td data-date="2020-03-23">23</td>
                        <td data-date="2020-03-24">24</td>
                        <td data-date="2020-03-25">25</td>
                        <td data-date="2020-03-26">26</td>
                    </tr>

                    <tr>
                        <td data-date="2020-03-27">27</td>
                        <td data-date="2020-03-28">28</td>
                        <td data-date="2020-03-29">29</td>
                        <td data-date="2020-03-30">30</td>
                        <td data-date="2020-03-31">31</td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</div>

    <!-- //////// JAVASCRIPT //////// -->

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
    <!--  Main JS File    -->
    <script src="main.js"></script>
</body>
</html>