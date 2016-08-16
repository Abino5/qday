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

        <div class="close closer"></div>






        <div class='container-settings'>
            <h1 class="settings-title">Account Info :</h1>
            <table class="settings-table">
                <tr>
                    <td class="td-left">Username:</td>
                    <td class="td-right"><input id='usern' name='usern' type="text" placeholder="Abino" class="form-control input-reg-semi-full settings-input"><button type="submit" id='usernsubmit' class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">First Name:</td>
                    <td class="td-right"><input placeholder="Abe" type="text" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button> </td>
                </tr>
                <tr>
                    <td class="td-left">Last Name:</td>
                    <td class="td-right"><input type="text" placeholder="omer" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Email:</td>
                    <td class="td-right"><input type="text" placeholder="abeomer@gmail.com" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Nationality:</td>
                    <td class="td-right"><input type="text" placeholder="Qatar" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Phone:</td>
                    <td class="td-right"><input type="text"placeholder="50516625"  class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Location:</td>
                    <td class="td-right"><input type="text" placeholder="Qatar" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Password:</td>
                    <td class="td-right"><input type="text" placeholder="Old Password" class="form-control input-reg-semi-full settings-input password"><input type="text" class="form-control placeholder="New Password" input-reg-semi-full settings-input password2"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
            </table>
            <div class="settings-left">

            </div>
            <div class="settings-right">

            </div>
        </div>


















    </div>
</div>

<div class="wrapper">
    <div class="span4 form-inline section-container" id="user-info">
        <div class="user-image">
            <div class="user-image-content">
                <div class="user-type-image">

                </div>
                <p align="center" class="user-name"><?php echo $this->session->userdata('firstname').' '.$this->session->userdata('lastname');?></p>
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

                <div id="help" class="user-section-settings">

                    Help

                </div>
            </div>

            <div class="clearfix2"></div>
            <div class="user-settings-section interests">
                <div class="user-settings-section-title" id="tags">
                    Your job interest area
                </div>
                <div class="tags-edit" id="tagsedit">
                    <div class="ico-editer" id="jinterest"></div>
                </div>


            </div>
            <div class="clearfix2"></div>
            <div class="user-files-location">
                <div class="user-settings-section-title" id="tags">
                    Your files (CVs, Recommendation letters)
                </div>
                <div class="tags-edit">
                    <div class="ico-editer" id="filesedit"></div>
                </div>

            </div>
            <div class="clearfix2"></div>
            <div class="market-items-location">
                <div class="user-settings-section-title" id="tags">
                    Your items on market
                </div>
                <div class="tags-edit" id="marketedit">
                    <div class="ico-editer"></div>
                </div>
                <div class="noitem">You have no items yet...</div>


            </div>



        </div>
    </div>
    <div class="span7 form-inline section-container" id="main">
        <div class="main-content-choice-holder">
            <div class="feed-switcher">
                <div class="feed-type-options">

                    <div class="feed-switch" id="jobs">
                        <p align="center"> JOBS</p>
                    </div>
                    <div class="feed-switch" id="market">
                        <p align="center"> MARKET-PLACE</p>
                    </div>
                    <div class="feed-switch" id="forum">
                        <p align="center"> ASK PEOPLE</p>
                    </div>
                </div>
                <div class="feed-choice-options">
                    <div id="politics" class="feed-options-selected">Politics</div>
                    <div id="sports" class="feed-options-unselected">Sports</div>

                    <div id="technology" class="feed-options-unselected">Technology</div>
                    <div id="entertainment" class="feed-options-unselected">Entertainment</div>
                    <div id="buzz" class="feed-options-unselected">BUZZ</div>
                </div>
            </div>
        </div>
        <div class="feeds-container">
            <div class="feed"><div class="feed-title"><div class="feed-title-text">Hur leads Korean assault at Texas Shootout</div><div class="feed-source">Fri, 29 Apr 2016 21:58:14 GMT</div></div> <div class="feed-thumbnail"><div><img class="feed-image backup-image" src="http://www.Gulf-Times.com/Content/Upload/Slider/4201629215736362229702.jpg" /></div><div style="clear: both;"></div></div> <div class="feed-description"> <p class="feed-description-text"><br/>Hur Mi-Jung posted five consecutive birdies around the turn en route to a five-under 66 on Thursday to take the lead after the first round of the LPGA Tour&rsquo;s Texas Shootout. <br />
The 26-year-old Hur started on the back nine and needed just 27 putts for a one-stroke lead over fellow South Koreans Ryu So-Yeon, Ji Eun-Hee and American Gerina Piller. <br />
Hur led a South Korean assault on the Las Colinas Country Club course as six of the top eight on the leaderboard are from the Korean Peninsula. <br />
&ldquo;My putting just was everything on the course today,&rdquo; said Hur. &ldquo;My shot wasn&rsquo;t that good and my address wasn&rsquo;t that comfortable but my putting did really well. <br />
&ldquo;So it helps me really a lot and that&rsquo;s why I had five straight birdies and finished strong.&rdquo; <br />
Hur began her birdie run on the par-four 15th hole. The two-time LPGA Tour winner is looking for her first victory since the 2014 Yokohama Tire Classic. Her other win came almost seven years ago in Portland, Oregon. <br />
It is no surprise Hur is in contention this week as she has been playing some of her best golf of the season in recent weeks. &nbsp;<br />
She is coming off her best finish of the season with a tied for sixth performance at the Swinging Skirts Classic. She also recorded back-to-back top-14 finishes at the Kia Classic and ANA Inspiration. <br />
Ryu shot a near perfect round with a bogey-free four-under 67. Ryu had a tournament course record 63 at the Swinging Skirts last week. <br />
She missed just one fairway and one green on Thursday. <br />
&ldquo;I shot 17 greens, and even when I missed I was still able to putt it because I was just off the green,&rdquo; Ryu said. <br />
&ldquo;I was just comfortable with everything&mdash;the driver, irons, wood, everything was great. Even my putting was really great. <br />
&ldquo;The only one disappointing thing is I missed a five-foot birdie putt at the last. <br />
&ldquo;But I had a bogey-free round today, so it was a really simple round.&rdquo;<br />
<br />
<strong>Leading first round scores</strong><br />
66 - Hur Mi-Jung (KOR) <br />
67 - Gerina Piller, Ji Eun-Hee (KOR), Ryu So-Yeon (KOR) <br />
68 - Catriona Matthew (SCO), Amy Yang (KOR), Kim Sei-Young (KOR), Jenny Shin (KOR) <br />
69 - Brooke M. Henderson (CAN), Jacqui Concolino, Ariya Jutanugarn (THA), Alison Walshe (USA), Casey Grice (USA), Carlota Ciganda (ESP), Jodi Ewart Shadoff (ENG), Chun In-Gee (KOR), Danielle Kang (USA) </p><a class="d_link" href="http://localhost/ominzy/home/news/"><div class="feed-description-readmore"><<< BACK</div></a> </div> <div class="feed-reaction"></div> </div>
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
    window.mode = '<?php echo $mode;?>';
    var type='<?php echo $type; ?>';
    var username2='<? echo $username?>';
    var userimage = "<?php echo $_SESSION['profileuserimage']?>";
    var userbgimage = "<?php echo $_SESSION['profilebgimage']?>";
    var settingsg = "<?= base_url('settings') ?>";
    var ajax22 = "<?= base_url('ajax') ?>";
    window.user = "<?php echo $_SESSION['email']?>";


</script>

