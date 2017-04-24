
    <div class="list-group">
        @if (Auth::check())
            <a class="list-group-item active" href="#"><i class="fa fa-rss fa-fw" aria-hidden="true"></i>  Stream <span class="pull-right"><i class="fa fa-arrow-right" aria-hidden="true"></i></span></a>
            <a class="list-group-item" href="#"><i class="fa fa-newspaper-o fa-fw" aria-hidden="true"></i>   My Activity</a>
            <a class="list-group-item" href="#"><i class="fa fa-at fa-fw" aria-hidden="true"></i>  Mentions</a>
            <a class="list-group-item" href="#"><i class="fa fa-user-circle-o fa-fw" aria-hidden="true"></i>  My Aspects</a>
            <a class="list-group-item" href="#"><i class="fa fa-hashtag fa-fw" aria-hidden="true"></i>  Followed Tags</a>
        @endif
        <a class="list-group-item" href="#"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>  Public Activity</a>
    </div>


    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        @if (Auth::check())
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="text-decoration:none;">
                    <h4 class="panel-title">
                        <i class="fa fa-caret-right fa-fw" aria-hidden="true"></i>  Invite your friends
                        <span class="pull-right"><img src="https://lut.im/1l0TsVbkxs/CWqVdEChujtnHNFU.png" width="30px" height="30px" style="margin-top:-5px;" /></span>
                    </h4>
                </a>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <small>Share this link via email, blog, or social networks!</small>
                    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="https://MyPod.tld/i/sdg321sd51sd5" value="https://MyPod.tld/i/sdg321sd51sd5">
                    <a href="#"><small>Invite people by email</small></a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="text-decoration:none;">
                    <h4 class="panel-title">
                        <i class="fa fa-caret-right fa-fw" aria-hidden="true"></i>  Welcome new users
                        <span class="pull-right"><img src="https://lut.im/tYZEWjA4ar/MWNQ87vpQjgX5USx.png" width="30px" height="30px" style="margin-top:-5px;" /></span>
                    </h4>
                </a>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                    <small>Follow <a href="#">#newhere</a> and welcome new users to diaspora*!</small><br>
                    <small><a href="#">Learn more</a></small>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="text-decoration:none;">
                    <h4 class="panel-title">
                        <i class="fa fa-caret-right fa-fw" aria-hidden="true"></i>  Need help?
                        <span class="pull-right"><img src="https://lut.im/2NaUlxi8tw/ORxUN6TR8LHxFfB5.jpg" width="30px" height="30px" style="margin-top:-5px;" /></span>
                    </h4>
                </a>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                    <small>The diaspora* community is here!</small><br>
                    <small>Do You:</small><br>
                    <small>... have a <a href="#">#question</a>?</small><br>
                    <small>... find a <a href="#">#bug</a>?</small><br>
                    <small>... have a <a href="#">#feature</a> suggestion?</small><br>
                    <small><a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Help</a>, <a href="#">Tutorials</a> & <a href="#">Wiki</a>: help for your first steps.</small>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree" style="text-decoration:none;">
                    <h4 class="panel-title">
                        <i class="fa fa-caret-right fa-fw" aria-hidden="true"></i>  Connect services
                        <span class="pull-right"><img src="https://lut.im/pzq6ALuuUd/MDX2uPKSBlYp3ZgE.png" width="30px" height="30px" style="margin-top:-5px;" /></span>
                    </h4>
                </a>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                <div class="panel-body">
                    <small>You can connect the following services to diaspora*:</small><br>
                    <div align="center">
                        <i class="fa fa-wordpress fa-lg" aria-hidden="true"></i>
                        <i class="fa fa-tumblr-square fa-lg" aria-hidden="true"></i>
                        <i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFive">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseThree" style="text-decoration:none;">
                    <h4 class="panel-title">
                        <i class="fa fa-caret-right fa-fw" aria-hidden="true"></i>  Bookmarklet
                        <span class="pull-right"><img src="https://lut.im/rQSoPC9Pgx/FTjYVoZQZXQZ3qIS.svg" width="30px" height="30px" style="margin-top:-5px;" /></span>
                    </h4>
                </a>
            </div>
            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                <div class="panel-body">
                    <small>Post to diaspora* from anywhere by bookmarking this link => <a href="#">Post to diaspora*</a>.</small>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingSix">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseThree" style="text-decoration:none;">
                    <h4 class="panel-title">
                        <i class="fa fa-caret-right fa-fw" aria-hidden="true"></i>  Got a problem?
                        <span class="pull-right"><img src="https://lut.im/MEYKXNQlWC/z0fSndZMAdFttj9B.png" width="30px" height="30px" style="margin-top:-5px;" /></span>
                    </h4>
                </a>
            </div>
            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix" style="text-decoration:none;">
                <div class="panel-body">
                    <small>Contact the administrator of your pod!<br>
                    <a href="#">Podmin email</a></small>
                </div>
            </div>
        </div>
        @endif
        <div class="panel panel-footer">
            <hr>
            <div align="center">
                <p>Be excellent to each other! ♥</p>
            </div>
            <hr>
            <small><a href="#">hedero.social</a></small><br>
            <small><a href="#">Wiki</a></small><br>
            <small><a href="#">Novedades</a></small><br>
            <small><a href="#">Code 1.2.34.5-a6bc7d8ef</a></small><br>
            <small><a href="#">Estadísticas del nodo</a></small><br>
            <small><a href="#">Toggle mobile</a></small><br>
        </div>
    </div>