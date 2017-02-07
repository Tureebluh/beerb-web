<?php require_once("includes/dbconnection.php") ?>
<?php include("includes/header.php") ?>

<div class="container">
    <?php include("includes/navbar.php") ?>

    <div id="downloadJumbotron" class="jumbotron text-center tab-content">
        <div id="home" class="tab-pane fade in active">
            <img class="img-responsive" id="mainLogo" src="img/BeeLogo.png" alt="Bee Logo"></img>
            <br>
            <p>Create your own Twitch&trade; commercial breaks in minutes!</p>
            <p><a id ="downloadBtn" class="btn btn-primary btn-lg" href="..\download\test.txt" role="button" download>Download</a></p>
            <br>
            <span>Download Counter:  <span id="span_downloadsCounter"></span></span>
        </div>
        <div id="contact" class="tab-pane fade">
            <img class="img-responsive" id="mainLogo" src="img/BeeLogo.png" alt="Bee Logo"></img>
            <div class="row text-center">
                <div class="col-xs-4 custom-thumbnail">
                    <div class="thumbnail">
                        <img src="img/glyphicons-social-31-facebook@3x.png" alt="Text Picture">
                        <div class="caption">
                            <h2><a href="https://www.facebook.com/Tureebluh">Facebook</a></h2>
                            <p>Follow me on Facebook for updates on live streaming events and more!</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 custom-thumbnail">
                    <div class="thumbnail">
                        <img src="img/glyphicons-social-32-twitter@3x.png" alt="">
                        <div class="caption">
                            <h2><a href="https://twitter.com/tureebluh">Twitter</a></h2>
                            <p>Be sure to follow me on Twitter for update announcements and more!</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 custom-thumbnail">
                    <div class="thumbnail">
                        <img src="img/glyphicons-social-23-youtube@3x.png" alt="">
                        <div class="caption">
                            <h2><a href="https://www.youtube.com/channel/UCAtMTo8OwHfLXEng1gc8-Mw">YouTube</a></h2>
                            <p>Be sure to check out the tutorial video posted to this YouTube channel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row text-center">
        <div class="col-xs-4 custom-thumbnail">
            <div class="thumbnail">
                <img src="img/glyphicons-108-text-resize@3x.png" alt="Text Picture">
                <div class="caption">
                    <h3>Unlimited Text Possibilities</h3>
                    <p>Have a whacky font in mind for your next big stream? No problem. Any font you have installed on your computer can be used in BeeRB.</p>
                </div>
            </div>
        </div>
        <div class="col-xs-4 custom-thumbnail">
            <div class="thumbnail">
                <img src="img/glyphicons-9-film@3x.png" alt="">
                <div class="caption">
                    <h3>Build the perfect commercial.</h3>
                    <p>Add and remove Text to the screen as much as want, with any combination of Text Profiles you've created.</p>
                </div>
            </div>
        </div>
        <div class="col-xs-4 custom-thumbnail">
            <div class="thumbnail">
                <img src="img/glyphicons-392-video-hd@3x.png" alt="">
                <div class="caption">
                    <h3>Quality with streamers in mind.</h3>
                    <p>Designed to be sourced through OBS&trade;(Open Broadcaster Software) or XSplit&trade; as a Game Capture to both improve performance, and ease of use.</p>
                </div>
            </div>
        </div>
    </div>
	
</div>

<?php include("includes/footer.php") ?>


