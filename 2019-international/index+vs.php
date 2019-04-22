<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>BattleLab Robotica 2019</title>
        <link rel="shortcut icon" href="../favicon.png" />

		<link rel="stylesheet" type="text/css" href="../css/publicStyle.css" />

		<script src="../js/jquery-1.9.1.min.js"></script>
		<script src="../js/2022.js"></script>
        <script src="../js/main16.js"></script>

    </head>
	<script src="../js/vs.js"></script>
    <body>
        <div id="meciCurent">
            <div id="linkul">blr.bestcj.ro/2019</div>
            <img src="../img/robots/robot-placeholder.gif" alt="robot-placeholder" id="gifEchipa1" class="gifRobot">
            <div id="paddingEchipa1"></div>
            <div id="echipaActiva1" class="scor">Echipa 1</div>
            <div id="scorul">
                <span id="scorEchipa1" class="scor">0</span>
                <span id="douaPuncte" class="scor">:</span>
                <span id="scorEchipa2" class="scor">0</span>
            </div>
            <div id="echipaActiva2" class="scor">Echipa 2</div>
            <div id="paddingEchipa2"></div>
            <img src="../img/robots/robot-placeholder.gif" alt="robot-placeholder" id="gifEchipa2" class="gifRobot">
        </div>

        <a href="http://www.utcluj.ro/"><img src="../img/ut.png" id="utLogo" /></a>
        <a href="http://ie.utcluj.ro/"><img src="../img/ie.png" id="ieLogo" /></a>
        <a href="http://www.bestcj.ro/"><img src="../img/best.png" id="bestLogo" /></a>
        <a href="https://www.youtube.com/watch?v=hy5RzWgZ3eg" target="_blank"><img src="../img/youtube.png"d id="youtubeLogo" /></a>



        <div id="wrapper">
            <div class="pre-concurs">
                <br>
                <br>
                <p>
                    Bine ați venit la ediția 2016 a concursului BattleLab Robotica!
                    Pe această pagină, începând cu ora 10:00 se vor putea vedea
                    live toate meciurile.
                </p>
                <br>
                <p>
                    De asemenea, în curand vom updata în partea stângă link-ul
                    către video livestreaming-ul din acest an, care va fi hostat pe
                    YouTube.
                </p>
                <br>
                <p>
                    Pentru rezultate de la ediția trecută, accesați: <a href="/2015/" style="color: #668B8B">http://blr.bestcj.ro/2015</a>
                </p>
            </div>

            <div id="mainMenu">
<!--
                <ul>
                    <li>
                        <a href="#" class="active">
                            Grupe <br/> Set 1
                            <span class="gifPlaceholder"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Grupe <br/> Set 2
                            <span class="gifPlaceholder"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" style="padding:19px 0 20px 0;">
                            Finale
                            <span class="gifPlaceholder"><img src="img/animated.gif" /></span>
                        </a>
                    </li>
                </ul>
 -->
            </div>

            <div id="groupsMenu">
                <!--
                <ul>
                    <li>
                        <a href="" class="active" id="grupaA">
                            Grupa A
                            <span class="gifPlaceholder"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Grupa B
                            <span class="gifPlaceholder"><img src="img/animated.gif" /></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Grupa C
                            <span class="gifPlaceholder"></span>
                        </a>
                    </li>

                    <li><a href="#">
                            Grupa D
                            <span class="gifPlaceholder"></span>
                        </a>
                    </li>

                </ul>
                -->
            </div>

            <div id="finalele">


            </div>

            <div id="grupaSauFinala">

                <!--
                <table id="grupa">
                    <tr>
                        <th id="colLoc">Loc</th>
                        <th id="colRobot">Robot</th>
                        <th id="colJ" title="Jucate">J</th>
                        <th id="colV" title="Victorii">V</th>
                        <th id="colE" title="Egaluri">E</th>
                        <th id="colI" title="Infrangeri">I</th>
                        <th id="colGoalDiff" title="Diferenta de runde castigate">+/-</th>
                        <th id="colP" title="Puncte">Pct</th>
                    </tr>
                    <tr class="calificat">
                        <td>1</td>
                        <td>Robot</td>
                        <td>2</td>
                        <td>3</td>
                        <td>2</td>
                        <td>3</td>
                        <td>0</td>
                        <td>18</td>
                    </tr>
                    <tr class="calificat">
                        <td>1</td>
                        <td>Hal</td>
                        <td>2</td>
                        <td>3</td>
                        <td>2</td>
                        <td>3</td>
                        <td>0</td>
                        <td>18</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Robotcunumelung</td>
                        <td>2</td>
                        <td>3</td>
                        <td>2</td>
                        <td>3</td>
                        <td>0</td>
                        <td>18</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Robot</td>
                        <td>2</td>
                        <td>3</td>
                        <td>2</td>
                        <td>3</td>
                        <td>0</td>
                        <td>18</td>
                    </tr>
                    <tr class="descalificat">
                        <td>1</td>
                        <td>Robot</td>
                        <td>2</td>
                        <td>3</td>
                        <td>2</td>
                        <td>3</td>
                        <td>0</td>
                        <td>18</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Robot</td>
                        <td>2</td>
                        <td>3</td>
                        <td>2</td>
                        <td>3</td>
                        <td>0</td>
                        <td>18</td>
                    </tr>
                </table>
                -->
            </div>


            <div id="meciuri">
                <!--
                <h2>Meciuri jucate</h2>

                <table id="meciuriTable">
                    <tr>
                        <th id="colOra">Ora</th>
                        <th id="colRobot1">Robot 1</th>
                        <th id="colRobot2">Robot 2</th>
                        <th id="colS1" title="Scor Robot 1">S1</th>
                        <th id="colS2" title="Scor Robot 2">S2</th>
                    </tr>
                    <tr>
                        <td>11:39</td>
                        <td>Hal</td>
                        <td>Robotcunumelung</td>
                        <td>1</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>11:39</td>
                        <td>Robotcunumelung</td>
                        <td>Robot</td>
                        <td>1</td>
                        <td>2</td>
                    </tr>
                </table>
                -->
           </div>



        </div>
    </body>
</html>
