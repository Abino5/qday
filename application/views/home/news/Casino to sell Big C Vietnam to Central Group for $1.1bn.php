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
            <div class="feed"><div class="feed-title"><div class="feed-title-text">Casino to sell Big C Vietnam to Central Group for $1.1bn</div><div class="feed-source">Fri, 29 Apr 2016 20:28:07 GMT</div></div> <div class="feed-thumbnail"><div><img class="feed-image backup-image" src="http://www.Gulf-Times.com/Content/Upload/Slider/42016292026492243742110.jpg" /></div><div style="clear: both;"></div></div> <div class="feed-description"> <p class="feed-description-text"><br/>Casino is to sell its Big C Vietnam business to Thai conglomerate Central Group for &euro;1bn ($1.1bn) including debt, giving the French retailer further respite from a debt pile that pushed its credit rating to junk. <br />
Casino, facing weak markets in Brazil and fierce competition in France, has said it aimed to raise around &euro;4bn this year by selling off businesses in Thailand and Vietnam plus the sale of real estate assets in Latin America. <br />
Casino will make &euro;920mn from the sale, which will take the total raised from asset sales to &euro;4.2bn, the company said. <br />
The retailer was criticised in December by US activist investor Muddy Waters, which said Casino was &ldquo;dangerously leveraged&rdquo; and Standard &amp; Poor&rsquo;s in March cut its credit rating to junk. <br />
Casino has rejected the criticism, pledging to cut debt using proceeds from disposals, and promising improved profits and cash flow in its main French market. <br />
&ldquo;This is another piece of good news for Casino. We estimate the deleveraging plan to add &euro;6 per share to Casino&rsquo;s valuation&rdquo; Bernstein analyst Bruno Monteyne said in a note. <br />
Casino shares rose about 2% in early trading, bucking a 1.5% fall in the benchmark CAC 40 Index. They were up 1.03% by 1130 GMT. <br />
Central, controlled by the Chirathivat family with interests in real estate and retail, beat TCC Group of Thai tycoon Charoen Sirivadhanabhakdi to take a majority stake in hypermarket operator Big C Vietnam, people familiar with the matter said. The deal, first reported by Reuters earlier yesterday, will give Central access to Big C&rsquo;s 43 stores in Vietnam and 30 malls that generated turnover of &euro;586mn in 2015. It marks Central&rsquo;s most significant overseas acquisition since buying assets in Europe, including the 2011 purchase of Italian department store chain La Rinascente. <br />
Central will team up with Vietnamese electronics firm Nguyen Kim, 49% owned by Central, for the Big C deal, Central Vietnam said in a statement. <br />
The two Thai rivals have been expanding into Southeast Asian markets in search of growth. They are betting on Vietnam&rsquo;s demographics and hedging against political and economic uncertainty back home. <br />
Through supermarkets, malls, dairy and beer, they are pursuing deals that could top Vietnam&rsquo;s record $4bn worth of M&amp;A deals achieved last year.. <br />
Casino, which entered Vietnam over 18 years ago, is retreating from Asia as part of its plans to cut debt which totalled &euro;6.1bn at the end of 2015. In February, Casino sold its stake in Thai hypermarket operator Big C Supercenter for &euro;3.1bn to TCC, which outbid Central. <br />
The Big C Vietnam sale represented a multiple of 1.8 times net sales for 2015. Last year, TCC agreed to buy the Vietnam cash and carry wholesale business of Germany&rsquo;s Metro Group for 1.3 times net sales. <br />
HSBC advised Casino on the sale, while Cit </p><a class="d_link" href="http://localhost/ominzy/home/news/"><div class="feed-description-readmore"><<< BACK</div></a> </div> <div class="feed-reaction"></div> </div>
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

