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
            <div class="feed"><div class="feed-title"><div class="feed-title-text">Australia blocks sale of country's largest farm to China</div><div class="feed-source">Fri, 29 Apr 2016 10:35:54 GMT</div></div> <div class="feed-thumbnail"><div><img class="feed-image backup-image" src="http://www.Gulf-Times.com/Content/Upload/Slider/4201629103454225740100.jpg" /></div><div style="clear: both;"></div></div> <div class="feed-description"> <p class="feed-description-text"><br/><span style="font-family: Times New Roman; font-size: 16px;">The proposed sale of Australia's largest cattle operation to China was "contrary to the national interest," the government said on Friday.</span><span style="font-family: Times New Roman; font-size: 16px;">&nbsp;</span>
<p><span style="font-family: Times New Roman; font-size: 16px;">Treasurer Scott Morrison said he blocked the sale of the 101,000-square-kilometre ranch owned by S Kidman &amp; Co in central Australia to a Chinese-led consortium. <br />
</span></p>
<p><span style="font-family: Times New Roman; font-size: 16px;">Morrison earlier rejected the sale of the same property in November to a different Chinese syndicate, citing concerns that part of it abutted a secret weapons-testing range. <br />
</span></p>
<p><span style="font-family: Times New Roman; font-size: 16px;">He said the property represents the largest private land sale in history, comprising 2% of Australia's agricultural land. <br />
</span></p>
<p><span style="font-family: Times New Roman; font-size: 16px;">The property - made up of 10 separate cattle stations - was expected to sell for about US$284mn. <br />
</span></p>
<p><span style="font-family: Times New Roman; font-size: 16px;">"Given the size and significance of the Kidman portfolio, I am concerned that the acquisition of an 80% interest in S Kidman &amp; Co Ltd by Dakang Australia Holdings Pty Ltd may be contrary to the national interest," Morrison said. <br />
</span></p>
<p><span style="font-family: Times New Roman; font-size: 16px;">"I have concerns that the form in which the Kidman portfolio has been offered as a single aggregated asset, has rendered it difficult for Australian bidders to be able to make a competitive bid." <br />
</span></p>
<p><span style="font-family: Times New Roman; font-size: 16px;">The proposed sale of the historic Australian cattle station to China had raised concerns among both liberal and conservative politicians. <br />
</span></p> </p><a class="d_link" href="http://localhost/ominzy/home/news/"><div class="feed-description-readmore"><<< BACK</div></a> </div> <div class="feed-reaction"></div> </div>
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

