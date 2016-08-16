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

    <div class="setting-box account-info">

        <div class="close closer"></div>






        <div class='container-settings'>
            <h1 class="settings-title">Account Info :</h1>
            <table class="settings-table">
                <tr>
                    <td class="td-left">Username:</td>
                    <td class="td-right"><input id='usern' name='usern' type="text" placeholder="<?php echo $_SESSION['username'];?>" class="form-control input-reg-semi-full settings-input"><button type="submit" id='usernsubmit' class="btn btn-success settings-btns">Change</button><div id="user-load" class="load-submit"></div>  </td>
                </tr>
                <tr>
                    <td class="td-left">Full Name:</td>
                    <td class="td-right"><input id='fnamer' name='fname' placeholder="<?php echo $_SESSION['firstname'];?>" type="text" class="form-control input-reg-semi-full settings-input"><button id='fnamesubmit' type="submit" class="btn btn-success settings-btns">Change</button> <div id="fname-load" class="load-submit"></div> </td>
                </tr>

                <tr>
                    <td class="td-left">Email:</td>
                    <td class="td-right"><input id='emailer' name='emailer' type="text" placeholder="<?php echo $_SESSION['email'];?>" class="form-control input-reg-semi-full settings-input"><button id='emailsubmit' type="submit" class="btn btn-success settings-btns">Change</button>  <div id="email-load" class="load-submit"></div> </td>
                </tr>
                <tr>
                    <td class="td-left">Nationality:</td>
                    <td class="td-right"><input id='nationaliter' name='nationaliter' type="text" placeholder="<?php echo $_SESSION['nationality'];?>" class="form-control input-reg-semi-full settings-input"><button id='nationalitysubmit' type="submit" class="btn btn-success settings-btns">Change</button> <div id="nation-load" class="load-submit"></div>  </td>
                </tr>
                <tr>
                    <td class="td-left">Phone:</td>
                    <td class="td-right"><input id='phoner' name='phoner' type="text"placeholder="<?php echo $_SESSION['phone'];?>"  class="form-control input-reg-semi-full settings-input"><button id='phonesubmit' type="submit" class="btn btn-success settings-btns">Change</button> <div id="phone-load" class="load-submit"></div>  </td>
                </tr>
                <tr>
                    <td class="td-left">Location:</td>
                    <td class="td-right"><input id='locationer' name='locationer' type="text" placeholder="<?php echo $_SESSION['location'];?>" class="form-control input-reg-semi-full settings-input"><button id='locationsubmit' type="submit" class="btn btn-success settings-btns">Change</button> <div id="location-load" class="load-submit"></div>  </td>
                </tr>
                <tr>
                    <td class="td-left">Password:</td>
                    <td class="td-right"><input id='passworder' name='passworder' type="password" placeholder="Old password" class="form-control input-reg-semi-full settings-input password"><input id='passworder2' type="password" placeholder="New password" class="form-control input-reg-semi-full settings-input password2"><button id='passwordsubmit' type="submit" class="btn btn-success settings-btns">Change</button> <div id="pass-load" class="load-submit"></div>  </td>
                </tr>
            </table>
            <div class="settings-left">

            </div>
            <div class="settings-right">

            </div>
        </div>
    </div>
    <div class="setting-box privacy">

        <div class="close closer"></div>






        <div class='container-settings'>
            <h1 class="settings-title">Account Info :</h1>
            <table class="settings-table">
                <tr>
                    <td class="td-left">Username:</td>
                    <td class="td-right"><input id='usern' name='usern' type="text" placeholder="<?php echo $_SESSION['username'];?>" class="form-control input-reg-semi-full settings-input"><button type="submit" id='usernsubmit' class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">First Name:</td>
                    <td class="td-right"><input placeholder="<?php echo $_SESSION['firstname'];?>" type="text" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button> </td>
                </tr>
                <tr>
                    <td class="td-left">Last Name:</td>
                    <td class="td-right"><input type="text" placeholder="<?php echo $_SESSION['lastname'];?>" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Email:</td>
                    <td class="td-right"><input type="text" placeholder="<?php echo $_SESSION['email'];?>" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Nationality:</td>
                    <td class="td-right"><input type="text" placeholder="<?php echo $_SESSION['nationality'];?>" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Phone:</td>
                    <td class="td-right"><input type="text"placeholder="<?php echo $_SESSION['phone'];?>"  class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Location:</td>
                    <td class="td-right"><input type="text" placeholder="<?php echo $_SESSION['location'];?>" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Password:</td>
                    <td class="td-right"><input type="text" placeholder="Old password" class="form-control input-reg-semi-full settings-input password"><input type="text" placeholder="New password" class="form-control input-reg-semi-full settings-input password2"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
            </table>
            <div class="settings-left">

            </div>
            <div class="settings-right">

            </div>
        </div>
    </div>







    <div class="setting-box jinterest">

        <div class="close closer"></div>

        <div class="add-interest">
            <input type="text" id="add-interest-text" class="input-reg-semi-full" placeholder="Ex: Truck Driver, Technician. Nurse"/>
            <button id="add-interest-btn" class="btn-success">ADD INTEREST</button>
            <div class="jinterest-status"></div>
        </div>
        <div class="interests-area">

        </div>
        <div class="save-exit-jinterest">
            <button id="saveexitj" class="btn-primary">SAVE & EXIT</button>
        </div>





    </div>



    <div class="setting-box files-window">

        <div class="close closer"></div>

        <div class="add-file">
            <iframe id="add-file" src="" scrolling="no">

            </iframe>

            <!-- <form method="post" action="" id="upload_file">
             <input type="file" id="add-file-text" class="input-reg-semi-full" />
             <input type="submit" id="add-file-btn" class="btn-success" value="ADD FILE"/></form>
             <div class="files-status"></div>-->
        </div>
        <div class="files-area">

        </div>
        <div class="save-exit-files">
            <button id="saveexitj2" class="btn-primary">SAVE & EXIT</button>
        </div>





    </div>







    <div class="setting-box security">

        <div class="close closer"></div>






        <div class='container-settings'>
            <h1 class="settings-title">Account Info :</h1>
            <table class="settings-table">
                <tr>
                    <td class="td-left">Username:</td>
                    <td class="td-right"><input id='usern' name='usern' type="text" placeholder="<?php echo $_SESSION['username'];?>" class="form-control input-reg-semi-full settings-input"><button type="submit" id='usernsubmit' class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">First Name:</td>
                    <td class="td-right"><input placeholder="<?php echo $_SESSION['firstname'];?>" type="text" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button> </td>
                </tr>
                <tr>
                    <td class="td-left">Last Name:</td>
                    <td class="td-right"><input type="text" placeholder="<?php echo $_SESSION['lastname'];?>" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Email:</td>
                    <td class="td-right"><input type="text" placeholder="<?php echo $_SESSION['email'];?>" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Nationality:</td>
                    <td class="td-right"><input type="text" placeholder="<?php echo $_SESSION['nationality'];?>" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Phone:</td>
                    <td class="td-right"><input type="text"placeholder="<?php echo $_SESSION['phone'];?>"  class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Location:</td>
                    <td class="td-right"><input type="text" placeholder="<?php echo $_SESSION['location'];?>" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Password:</td>
                    <td class="td-right"><input type="text" placeholder="Old password" class="form-control input-reg-semi-full settings-input password"><input type="text" placeholder="New password" class="form-control input-reg-semi-full settings-input password2"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
            </table>
            <div class="settings-left">

            </div>
            <div class="settings-right">

            </div>
        </div>
    </div>
    <div class="setting-box preferences">

        <div class="close closer"></div>






        <div class='container-settings'>
            <h1 class="settings-title">Account Info :</h1>
            <table class="settings-table">
                <tr>
                    <td class="td-left">Username:</td>
                    <td class="td-right"><input id='usern' name='usern' type="text" placeholder="<?php echo $_SESSION['username'];?>" class="form-control input-reg-semi-full settings-input"><button type="submit" id='usernsubmit' class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">First Name:</td>
                    <td class="td-right"><input placeholder="<?php echo $_SESSION['firstname'];?>" type="text" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button> </td>
                </tr>
                <tr>
                    <td class="td-left">Last Name:</td>
                    <td class="td-right"><input type="text" placeholder="<?php echo $_SESSION['lastname'];?>" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Email:</td>
                    <td class="td-right"><input type="text" placeholder="<?php echo $_SESSION['email'];?>" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Nationality:</td>
                    <td class="td-right"><input type="text" placeholder="<?php echo $_SESSION['nationality'];?>" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Phone:</td>
                    <td class="td-right"><input type="text"placeholder="<?php echo $_SESSION['phone'];?>"  class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Location:</td>
                    <td class="td-right"><input type="text" placeholder="<?php echo $_SESSION['location'];?>" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Password:</td>
                    <td class="td-right"><input type="text" placeholder="Old password" class="form-control input-reg-semi-full settings-input password"><input type="text" placeholder="New password" class="form-control input-reg-semi-full settings-input password2"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
            </table>
            <div class="settings-left">

            </div>
            <div class="settings-right">

            </div>
        </div>
    </div>

    //
    <div class="setting-box help">

        <div class="close closer"></div>






        <div class='container-settings'>
            <h1 class="settings-title">Account Info :</h1>
            <table class="settings-table">
                <tr>
                    <td class="td-left">Username:</td>
                    <td class="td-right"><input id='usern' name='usern' type="text" placeholder="<?php echo $_SESSION['username'];?>" class="form-control input-reg-semi-full settings-input"><button type="submit" id='usernsubmit' class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">First Name:</td>
                    <td class="td-right"><input placeholder="<?php echo $_SESSION['firstname'];?>" type="text" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button> </td>
                </tr>
                <tr>
                    <td class="td-left">Last Name:</td>
                    <td class="td-right"><input type="text" placeholder="<?php echo $_SESSION['lastname'];?>" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Email:</td>
                    <td class="td-right"><input type="text" placeholder="<?php echo $_SESSION['email'];?>" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Nationality:</td>
                    <td class="td-right"><input type="text" placeholder="<?php echo $_SESSION['nationality'];?>" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Phone:</td>
                    <td class="td-right"><input type="text"placeholder="<?php echo $_SESSION['phone'];?>"  class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Location:</td>
                    <td class="td-right"><input type="text" placeholder="<?php echo $_SESSION['location'];?>" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Password:</td>
                    <td class="td-right"><input type="text" placeholder="Old password" class="form-control input-reg-semi-full settings-input password"><input type="text" placeholder="New password" class="form-control input-reg-semi-full settings-input password2"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
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
                        <p align="center"> WHAT'S GOING ON!</p>
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
            <div class="feed"><div class="feed-title"><div class="feed-title-text">Hamilton tops Russia practice, Vettel stops</div><div class="feed-source">Fri, 29 Apr 2016 22:03:44 GMT</div></div> <div class="feed-thumbnail"><div><img class="feed-image backup-image" src="http://www.Gulf-Times.com/Content/Upload/Slider/420162922341176531623.jpg" /></div><div style="clear: both;"></div></div> <div class="feed-description"> <p class="feed-description-text"><br/>Formula One world champion Lewis Hamilton was top of the timesheets in Russian Grand Prix practice yesterday after Mercedes team-mate Nico Rosberg set the early pace and Ferrari suffered reliability problems. <br />
Rosberg, chasing his seventh win in a row and fourth of the season, was quickest in the morning around the Olympic Park used for the 2014 Winter Games in the Black Sea resort. <br />
The championship leader dropped to third in the afternoon, however, with Hamilton setting a best time of one minute 37.583 seconds on supersoft tyres compared to Rosberg&rsquo;s 1:38.450. <br />
Ferrari&rsquo;s Sebastian Vettel stopped on track during the second session but was still second fastest. <br />
&ldquo;I think we&rsquo;re looking strong here, but we need to keep working hard if we are to try and stay ahead of the Ferraris,&rdquo; said Hamilton. &ldquo;They look like they might be another step closer this weekend.&rdquo; <br />
Hamilton is the only driver to have won in Russia since the race&rsquo;s debut in 2014 and he needs to complete the hat-trick on Sunday to eat into his team mate&rsquo;s hefty 36 point lead after just three of the 21 races. <br />
The Mercedes pair, who have won 35 of the last 41 races between them, were comfortably ahead of the rest in the morning but Vettel showed pace for Ferrari before he hit problems. <br />
The four-times world champion, whose team have suffered power unit problems in two races this season, stopped with an hour to go. <br />
Ferrari&rsquo;s Kimi Raikkonen was fourth in both practices. <br />
&ldquo;Looks like we had an electric problem, but I am sure we can fix it,&rdquo; said Vettel, who faces a five-place grid penalty after a gearbox change. <br />
&ldquo;Still, it is a shame, because now we are lacking some laps, especially in the long runs ... which would have allowed us to see how competitive we are.&rdquo; <br />
Australian Daniel Ricciardo, who tested a new head protection device at the start of the session and has finished fourth in all three races, was sixth and fifth for Red Bull in the two sessions. <br />
Russian team mate Daniil Kvyat was seventh, with McLaren&rsquo;s Jenson Button eighth and Fernando Alonso 10th in a boost for&nbsp; Honda-powered McLaren as they fight their way back up the pecking order after a nightmare 2015 season. &ldquo;Getting at least one car into Q3 (the final phase of qualifying) tomorrow would be good news for us. I think that&rsquo;s possible,&rdquo; said Alonso. <br />
Renault&rsquo;s Russian test driver Sergey Sirotkin, who will be competing in the GP2 support series this season, replaced Denmark&rsquo;s Kevin Magnussen for the first session. <br />
He ended up 13th fastest with regular race driver Jolyon Palmer 18th. </p><a class="d_link" href="http://localhost/ominzy/home/news/"><div class="feed-description-readmore"><<< BACK</div></a> </div> <div class="feed-reaction"></div> </div>
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

