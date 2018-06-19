
<?php 
include('backend/insertMail.php'); 

// Header + Navigation

include('header.php'); 

?>

    <div id="global-container">

        <div class="column add-bottom">
            <div>
                <div id="nowPlay">
                    <span id="npTitle"></span>
                </div>
                <div id="audiowrap">
                    <audio preload id="audio2" class="audio" controls controlsList="nodownload">Your browser does not support HTML5 Audio!</audio>
                    <div id="tracks">
                        <a id="btnPrev" class="disabled">&laquo;</a>
                        <a id="btnNext">&raquo;</a>
                    </div>
                </div>
                <div id="plwrap">
                    <ul id="plList">
                        <li>
                            <div class="plItem">
                                <div class="plNum">01.</div>
                                <div class="plTitle">Cueillir la Rose</div>
                                <div class="plLength">5:30</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">02.</div>
                                <div class="plTitle">Dans Paris</div>
                                <div class="plLength">5:38</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">03.</div>
                                <div class="plTitle">Ronde à 3 pas</div>
                                <div class="plLength">3:41</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">04.</div>
                                <div class="plTitle">Se ieu Sabia</div>
                                <div class="plLength">5:11</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="column add-bottom center">
            <p>Created by <a href="http://www.markhillard.com/">mh</a>. </p>
        </div>
    </div>

<?php
include('footer.php');
?>