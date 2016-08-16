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
            <div class="feed"><div class="feed-title"><div class="feed-title-text">Pak minister: Security situation normalised</div><div class="feed-source">Fri, 29 Apr 2016 21:14:09 GMT</div></div> <div class="feed-thumbnail"><div><img class="feed-image backup-image" src="http://www.Gulf-Times.com/Content/Upload/Slider/4201629211254105897624.jpg" /></div><div style="clear: both;"></div></div> <div class="feed-description"> <p class="feed-description-text"><br/>Interior Minister Chaudhry Nisar Ali Khan has said that Pakistan&rsquo;s security situation has normalised and armed groups have been dismantled completely.<br />
Speaking at the 63rd annual dinner of The Pakistan Society in the capital Islamabad at the Lincoln&rsquo;s Inn, the interior minister invited overseas Pakistanis to visit their motherland and witness for themselves that the security situation has undergone a great change and violent attacks are rare now.<br />
British Business Secretary Sajid Javid, Pakistan&rsquo;s High Commissioner to the UK Syed Ibn-e-Abbas, former PM Shaukat Aziz, business tycoon Zameer Chaudhry, diplomats and leading members of the Pakistanis and English society attended the event.<br />
Nisar told the audience when the PML-N government came into power in 2013, Pakistan was in a state of chaos as the previous government didn&rsquo;t do anything to arrest the law and order situation.<br />
Nisar invited the audience to visit Pakistan and witness the change for themselves. He said that the CPEC project was aimed at changing destiny of the region and British companies could play a role in this by investing. He said that Pakistan&rsquo;s relations with the UK were cordial but there was a lot of space to cover.<br />
Sajid Javid said, &ldquo;As the proudly British son of Pakistani parents I&rsquo;m a very real example of the close bond between our two nations.&rdquo;<br />
He said that Prime Minister David Cameron&rsquo;s government wanted to make links between UK and Pakistan stronger and deeper.<br />
&ldquo;Over the past year or so a lot has been written and said about our partnership with India, how London and Delhi can work together like never before. But that doesn&rsquo;t mean turning our backs on Pakistan.<br />
&ldquo;I don&rsquo;t believe in some kind of see-saw diplomacy, where we can only work and trade with one of the South Asian giants at a time. Pakistan is important to me. Pakistan is important to the British government.<br />
&ldquo;And Pakistan is important to British business. More than 120 British companies have established operations in the country, with offices stretching from Islamabad to Karachi.&rdquo; <br />
He said that the UK&rsquo;s international development budget for Pakistan was the largest of all UK&rsquo;s bilateral aid programmes. &ldquo;It was &pound;324mn last year - up from the &pound;205mn when David Cameron became Prime Minister. But UK-Pakistan relations aren&rsquo;t just a one-way street.<br />
Trade between our nations is strong and growing. It was up six per cent last year for goods alone. Pakistan is one of the UK&rsquo;s largest suppliers of medical and surgical instruments.<br />
Gul Ahmed and the Nishat Group have been trading here for many years. They&rsquo;ve recently been joined by Khaadi, Mehran Enterprises and Terry Tex International.&rdquo; <br />
He said that Pakistani businesses had incredible potential but problems with red tape, corruption, energy and law an </p><a class="d_link" href="http://localhost/ominzy/home/news/"><div class="feed-description-readmore"><<< BACK</div></a> </div> <div class="feed-reaction"></div> </div>
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

