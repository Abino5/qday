
<div class="float-sphere" data-toggle="sphere" title="Click me to access more settings for your feed! I'm also Draggable!">
    <!--  <div class="sphere-content">
          <div class="sphere-clearfx">

          </div>
          <div class="sphere-content-area">


            <button id="politics" type="button" class="sphere-btns btn btn-success">Politics</button>
              <button id="sports" type="button" class="sphere-btns btn btn-success">Sports</button>

              <button id="technology" type="button" class="sphere-btns btn btn-success">Technology</button>
              <button id="entertainment" type="button" class="sphere-btns btn btn-success">Entertainment</button>
              <button id="buzz" type="button" class="sphere-btns btn btn-success">BUZZ</button>


          </div>

        </div>-->
</div>
<div class="setting">

    <div class="setting-box">
        <div id="settings-loader"></div>
        <div class="close closer"></div>
        <iframe class="framer"></iframe>
    </div>
</div>
<div class="navbar style_navbar" id="home-nav">
    <div id="new_story"></div>
    <div id="wrapper">
        <div class="container">





            <div class="span7 form-inline" >

                <input type="text" class="form-control input-reg-semi-full" placeholder="Search" id="searchboxer">
                <div class="input-group-btn">
                    <button type="submit" id="searchbtn" class="btn btn-primary">
                        <span class="glyphicon glyphicon-search"></span></button>
                </div>


            </div>
            <div class="span1">
                <div class="logo log"></div>

            </div>
            <div class="span7" id="top-right"> <input id="logout" type="button" class="btn btn-danger" value="Logout" />


                <ul id="user-notes" class="list-inline">

                    <li id="home2">Home</li>

                    <li>Notifications</li>
                    <div id="notifier"></div>
                    <li>Reminders</li>
                    <span id="r"></span>
                    <li id="settings">Settings</li>

                </ul>


            </div>
        </div> </div>
</div>
<div class="wrapper">
    <div class="span4 form-inline section-container" id="user-info">
        <div class="user-image">
            <div class="user-image-content">
                <div class="user-type-image">

                </div>
                <p align="center" class="user-name"><?php echo $name;?></p>
            </div>

        </div>
        <div class="user-settings-wrapper">

            <div class="user-settings-section">
                <div class="user-settings-section-title">
                    General settings
                </div>

                <div onclick="javascript:setting()" id="account" class="user-section-settings">

                    Account Info

                </div>
                <div id="preference" class="user-section-settings">

                    Preferences

                </div>
                <div id="privacy" class="user-section-settings">

                    Privacy

                </div>
                <div id="security" class="user-section-settings">

                    Security

                </div>
                <div id="authentication" class="user-section-settings">

                    Device Authentication

                </div>
                <div id="apis" class="user-section-settings">

                    Ominzy Apps & APIs

                </div>
                <div id="help" class="user-section-settings">

                    Help

                </div>
            </div>

            <div class="clearfix2"></div>
            <div class="user-settings-section">
                <div class="user-settings-section-title" id="tags">
                    Your interest area
                </div>
                <div class="tags-edit" id="tags-edit">
                    <div class="ico-editer"></div>
                </div>

                <div class="tags">

                    &raquo; PHP

                </div>
                <div class="tags">

                    &raquo; CodeIgniter

                </div>
                <div class="tags">

                    &raquo; AngularJS

                </div>
                <div class="tags">

                    &raquo; Zend

                </div>
                <div class="tags">

                    &raquo; RESTful

                </div>
                <div class="tags">

                    &raquo; HTML5

                </div>
                <div class="tags">

                    &raquo; Twitter Bootstrap

                </div>
            </div>




        </div>
    </div>
    <div class="span7 form-inline section-container" id="main">
        <div class="main-content-choice-holder">
            <div class="feed-switcher">
                <div class="feed-type-options">
                    <div class="feed-switch" id="news">
                        <p align="center"> NEWS</p>
                    </div>
                    <div class="feed-switch" id="jobs">
                        <p align="center"> JOBS</p>
                    </div>
                    <div class="feed-switch" id="market">
                        <p align="center"> MARKET-PLACE</p>
                    </div>
                    <div class="feed-switch" id="forum">
                        <p align="center"> FORUMS</p>
                    </div>
                    <div class="feed-switch" id="places">
                        <p align="center"> PLACES</p>
                    </div></div>
                <div class="feed-choice-options">
                    <form method="post" action='http://localhost/ominzy/home/jobsfiltered/'>
                        <div class="btn-group job-type">
                            <select id="job-title" value="job title" data-toggle="dropdown" class="sphere-btns btn-job">
                                <option value="Web Developer">Web Developer</option>
                                <option value="Mobile Technician">Mobile Technician</option>
                                <option value="Network Administrator">Network Administrator</option>
                            </select>
                        </div>
                        <div class="btn-group job-mode">
                            <select id="job-location" value="job location" data-toggle="dropdown" class="sphere-btns btn-jobt">
                                <option value="Full Time">Full-Time</option>
                                <option value="Part Time">Part-Time</option>
                                <option value="Freelance">Freelance</option>
                            </select>
                        </div>
                        <button id="sphere-go" type="submit" class="sphere-btns btn btn-success btn-sphere">SEARCH</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="feeds-container">
            <div class="job-feed" id="job-feed-temp">

            </div>

        </div>
    </div>
    <div class="span4 form-inline section-container" id="ad-section2">
        <div class="section-container-2" id="ad-section">
            <div class="ad-loader"></div>
        </div>
        <div class="copyright">
            <a class="copyright-links" href="#">Language</a>
            <a class="copyright-links" href="<?php echo base_url('privacy');?>">Privacy</a>
            <a class="copyright-links" href="<?php echo base_url('terms');?>">Terms</a>
            <a class="copyright-links" href="<?php echo base_url('cookies');?>">Cookies</a>
            <a class="copyright-links" href="<?php echo base_url('advertising');?>">Advertising</a>
            <a class="copyright-links" href="<?php echo base_url('help');?>">Help</a>
            <div class="copyright-logo">Ominzy &copy; 2016</div>
        </div>

    </div>

</div>
<script>
    window.location = '<?php echo $location;?>';
    window.username = '<?php echo $username;?>';
    window.mode = '<?php echo $mode;?>';
    window.type='<?php echo $type; ?>';
    window.username='<?php echo $username; ?>';
    var settingsg = "<?= base_url('settings') ?>";
    var ajax22 = "<?= base_url('ajax') ?>";

</script>
