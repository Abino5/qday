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
                <p align="center" class="user-name">Abeomer</p>
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
            <div class="feed"><div class="feed-title"><div class="feed-title-text">Major EM currencies rise to 6-month high</div><div class="feed-source">Fri, 29 Apr 2016 21:31:00 GMT</div></div> <div class="feed-thumbnail"><div><img class="feed-image backup-image" src="http://www.Gulf-Times.com/Content/Upload/Slider/42016292130264335136492.jpg" /></div><div style="clear: both;"></div></div> <div class="feed-description"> <p class="feed-description-text"><br/>Russia&rsquo;s rouble and Turkey&rsquo;s lira lead a gang of top emerging market currencies to six-month highs yesterday as signals this week that US interest rates are likely to stay ultra-low cemented a third month of losses for the dollar.<br />
EM stocks were suffering the effects of a heavy week for major markets like Wall Street and Tokyo, but for currencies the mood remained resolutely upbeat as the dollar&rsquo;s slump provided them with fresh boost.<br />
The Russian rouble was up at 64.34 per dollar and set for an 11th week of gains, its longest winning streak in at least three decades, as an ongoing recovery in oil prices pushed it higher ahead of a meeting of the country&rsquo;s central bank.<br />
Russian rates are expected to stay at 11%. <br />
Analysts said the rouble may weaken towards the end of the day, however, as investors cut their risk exposure ahead of a long weekend. Russia has May public holidays on Monday and Tuesday.<br />
Turkey&rsquo;s lira, another &lsquo;high beta&rsquo; EM currency, was up for a fifth straight day at 2.8045 per dollar. <br />
That was its highest since a spike in November, but removing that, the loftiest since August.<br />
China&rsquo;s central bank strengthened its daily guidance rate for the yuan too and by the most on the record, reflecting the major shift in dollar this week. &ldquo;We still don&rsquo;t expect the Federal Reserve to move (US interest rates) any time soon, probably not this year, so its party on for emerging markets,&rdquo; said Aberdeen Asset Management portfolio manager Viktor Szabo.<br />
MSCI&rsquo;s 23-country emerging market stocks index was down 0.6% on the day. It has struggled this month following a blockbuster 13% gain in March.<br />
In central, Europe Polish shares have fallen almost 3% this week as the direction of the new government and higher interest rates than peers such as Hungary continues to unsettle traders.<br />
First time in more than a decade the yields on Polish government bonds are now higher than on Hungarian bonds.<br />
&ldquo;Yes you could argue the monetary policy is much looser, but never the less the higher yield certainly reflects the much higher political risk in Poland now,&rdquo; said Rabobank economist Piotr Matys.<br />
Ratings agency Fitch is expected to publish its latest review of Kazakhstan and Mozambique later in the day with the southern African state likely to be of particular interest.<br />
It is in fiscal dire straits and has seen aid payments from the World Bank, the International Monetary Fund and Britain suspended in the past two weeks after it emerged the government had failed to disclose as much as $1.35bn in loans taken out by state companies.<br /> </p><a class="d_link" href="http://localhost/ominzy/home/news/"><div class="feed-description-readmore"><<< BACK</div></a> </div> <div class="feed-reaction"></div> </div>
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
    var username='Abino';

    var settingsg = "<?= base_url('settings') ?>";
    var ajax22 = "<?= base_url('ajax') ?>";

</script>

