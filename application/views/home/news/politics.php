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
                    <td class="td-right"><input id='usern' name='usern' type="text" placeholder="" class="form-control input-reg-semi-full settings-input"><button type="submit" id='usernsubmit' class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">First Name:</td>
                    <td class="td-right"><input placeholder="" type="text" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button> </td>
                </tr>
                <tr>
                    <td class="td-left">Last Name:</td>
                    <td class="td-right"><input type="text" placeholder="" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Email:</td>
                    <td class="td-right"><input type="text" placeholder="" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Nationality:</td>
                    <td class="td-right"><input type="text" placeholder="" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Phone:</td>
                    <td class="td-right"><input type="text"placeholder=""  class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
                </tr>
                <tr>
                    <td class="td-left">Location:</td>
                    <td class="td-right"><input type="text" placeholder="" class="form-control input-reg-semi-full settings-input"><button type="submit" class="btn btn-success settings-btns">Change</button>  </td>
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

                    <li id="home2" title="Home"></li>

                    <li id="notification" title="Notifications"></li>
                    <div id="notifier"></div>
                    <li id="reminder" title="Interview Reminders"></li>
                    <span id="r"></span>


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
                <p align="center" class="user-name"></p>
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
                <div class="tags-edit" id="tagsedit">
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
            <div class="feed"><div class="feed-title"><div class="feed-title-text">Abbott Lab agrees to buy St Jude Medical for $25bn</div><div class="feed-source">Thu, 28 Apr 2016 21:02:52 GMT</div></div> <div class="feed-thumbnail"><div><img class="feed-image backup-image" src="http://www.Gulf-Times.com/Content/Upload/Slider/4201628211585491006360.jpg" /></div><div style="clear: both;"></div></div> <div class="feed-description"> <p class="feed-description-text"><br/><span style="font-family: Tahoma;">Abbott Laboratories agreed to buy St Jude Medical in a deal that values the maker of heart devices at $25bn, making its biggest ever acquisition as the industry consolidates to gain bargaining power with hospitals.</span><br />
<span style="font-family: Tahoma;">St Jude Medical shareholders will receive $46.75 in cash and 0.8708 shares of Abbott common stock, representing a total of approximately $85 per share, according to a statement yesterday.</span><br />
<span style="font-family: Tahoma;">Medical devices makers are merging to get access to new technology as hospitals push for lower prices. St Jude last year acquired Thoratec Corp for $3.4bn, adding left ventricular pump devices that take over for a failing heart.</span><br />
<span style="font-family: Tahoma;">The combined Abbott-St Jude medical company will have a pipeline of new medical device products across cardiovascular, diabetes, vision and neuromodulation patient care, according to the statement.</span><br />
<span style="font-family: Tahoma;">Abbott said in the statement it has financing for both St Jude Medical and for its planned acquisition of Alere for $5.8bn, sending Alere shares higher in early trading. Abbott chief executive officer Miles White declined to reiterate his commitment to the Alere deal last week on the company&rsquo;s earnings call. Alere hasn&rsquo;t yet filed its 10-K report with US regulators and has been subpoenaed by the Justice Department.</span><br />
<span style="font-family: Tahoma;">St Jude Medical closed yesterday at $61.95, giving the company a market value of about $17.6bn. The stock jumped to $78.66 before the markets opened in New York. Abbott dropped 5% to $41.65 in early trading, while Alere rose 3.5% to $44.35.</span><br />
<span style="font-family: Tahoma;">The acquisition will further reshape Abbott, which split off its brand name pharmaceutical business to AbbVie in 2013. Since then, the company has shied away from major acquisitions and pursued many smaller deals, even as the CEO talked often about his desire for larger purchases.</span><br />
<span style="font-family: Tahoma;">Abbott has cash on hand, obtained by selling its generic drug business for medicines marketed in Europe and the developed world to Mylan.</span><br />
<span style="font-family: Tahoma;"><br />
</span><br /> </p><a class="d_link" href="http://localhost/ominzy/home/news/"><div class="feed-description-readmore"><<< BACK</div></a> </div> <div class="feed-reaction"></div> </div>
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
    window.mode = 'news';
    var type='politics';
    var username='';

    var settingsg = "<?= base_url('settings') ?>";
    var ajax22 = "<?= base_url('ajax') ?>";

</script>

