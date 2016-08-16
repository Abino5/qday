/*
var link01 = "url('" + data01 + "')";
            var link02 = "url('" + data02 + "')";
            var link03 = "url('" + data03 + "')";
            var link04 = "url('" + data04 + "')";
            var link05 = "url('" + data05 + "')";
            var link06 = "url('" + data06 + "')";
            var link07 = "url('" + data07 + "')";
            var link08 = "url('" + data08 + "')";
            var link09 = "url('" + data09 + "')";
            var link010 = "url('" + data010 + "')";



            $('#01').css("background-image", link01);
            $('#02').css("background-image", link02);
            $('#03').css("background-image", link03);
            $('#04').css("background-image", link04);
            $('#05').css("background-image", link05);
            $('#06').css("background-image", link06);
            $('#07').css("background-image", link07);
            $('#08').css("background-image", link08);
            $('#09').css("background-image", link09);
            $('#10').css("background-image", link010);

             * 
             * 
             * <div class="phone-section phoner">
                        <input type="text" id="country-codejob" class="dropdowner" placeholder="+974" />
                        <input class="input-large input-reg-semi-full" type="number" id="phonejob" name="phonejob" max="99999999" placeholder="phone" />

                    </div>
                    
                    <div class="select-class">
                        <select class="dropdowner" id="day">
                            <option class="option" value='' disabled selected="selected">Day</option>
                            <option class="option" value='01'>01</option>
                            <option class="option" value='02'>02</option>
                            <option class="option" value='03'>03</option>
                            <option class="option" value='04'>04</option>
                            <option class="option" value='05'>05</option>
                            <option class="option" value='06'>06</option>
                            <option class="option" value='07'>07</option>
                            <option class="option" value='08'>08</option>
                            <option class="option" value='09'>09</option>
                            <option class="option" value='10'>10</option>
                            <option class="option" value='11'>11</option>
                            <option class="option" value='12'>12</option>
                            <option class="option" value='13'>13</option>
                            <option class="option" value='14'>14</option>
                            <option class="option" value='15'>15</option>
                            <option class="option" value='16'>16</option>
                            <option class="option" value='17'>17</option>
                            <option class="option" value='18'>18</option>
                            <option class="option" value='19'>19</option>
                            <option class="option" value='20'>20</option>
                            <option class="option" value='21'>21</option>
                            <option class="option" value='22'>22</option>
                            <option class="option" value='23'>23</option>
                            <option class="option" value='24'>24</option>
                            <option class="option" value='25'>25</option>
                            <option class="option" value='26'>26</option>
                            <option class="option" value='27'>27</option>
                            <option class="option" value='28'>28</option>
                            <option class="option" value='29'>29</option>
                            <option class="option" value='30'>30</option>
                            <option class="option" value='31'>31</option>
                            
                            
                        </select>
                        <select class="dropdowner" id="month">
                            <option class="option" value='' disabled selected="selected">Month</option>
                            <option class="option" value='january'>January</option>
                            <option class="option" value='february'>February</option>
                            <option class="option" value='january'>March</option>
                            <option class="option" value='february'>April</option>
                            <option class="option" value='january'>May</option>
                            <option class="option" value='february'>June</option>
                            <option class="option" value='january'>July</option>
                            <option class="option" value='february'>August</option>
                            <option class="option" value='january'>September</option>
                            <option class="option" value='february'>October</option>
                            <option class="option" value='january'>November</option>
                            <option class="option" value='february'>December</option>
                            
                        </select><select class="dropdowner" id="year">
                            <option class="option" value='' disabled selected="selected">Year</option>
                            <option class="option" value='1998'>1998</option>
                            <option class="option" value='1999'>1999</option>
                            <option class="option" value='1998'>2000</option>
                            <option class="option" value='1999'>2001</option>
                            <option class="option" value='1998'>2002</option>
                            <option class="option" value='1999'>2003</option>
                            <option class="option" value='1998'>2004</option>
                            <option class="option" value='1999'>2005</option>
                            <option class="option" value='1998'>2006</option>
                            <option class="option" value='1999'>2007</option>
                            <option class="option" value='1998'>2008</option>
                            <option class="option" value='1999'>2009</option>
                            <option class="option" value='1998'>2010</option>
                            <option class="option" value='1999'>2011</option>
                            <option class="option" value='1998'>2012</option>
                            <option class="option" value='1999'>2013</option>
                            <option class="option" value='1998'>2014</option>
                            <option class="option" value='1999'>2015</option>
                            <option class="option" value='1998'>2016</option>
                            
                            
                        </select>

                    </div>
                    
                    <select class="input-large input-reg-full" id="field">
                        <option value="" disabled selected>Job Role</option>
                        <option value="accounting">Accounting</option>
                        <option value="adminclerical">Admin & Clerical</option>
                        <option value="bankingfinance">Banking & Finance</option>
                        <option value="businessopportunities">Business Opportunities</option>
                        <option value="contractfreelance">Contract & Freelance</option>
                        <option value="customerservice">Customer Service</option>
                        <option value="diversityopportunities">Diversity Opportunities</option>
                        <option value="engineering">Engineering</option>
                        <option value="executive">Executive</option>
                        <option value="franchise">Franchise</option>
                        <option value="government">Government</option>
                        <option value="healthcare">Health Care</option>
                        <option value="hospitality">Hospitality</option>
                        <option value="humanresources">Human Resources</option>
                        <option value="informationtechnology">Information Technology</option>
                        <option value="internshipscollege">Internships & College</option>
                        <option value="manufacturing">Manufacturing</option>
                        <option value="nonprofit">Nonprofit</option>
                        <option value="parttime">Part Time</option>
                        <option value="retail">Retail</option>
                        <option value="salesmarketing">Sales & Marketing</option>
                        <option value="sciencebiotech">Science & Biotech</option>
                        <option value="transportation">Transportation</option>
                        
                        
                         
 
                        
                    </select>
                    <input type="text" class="input-large input-reg-full" id="title" placeholder="Your Job title ( Example : Web Developer )" />
                    
                    
                    
                        
                        <div class="phone-section cv">
                            
                            <span class="btn btn-success fileinput-button">
        
        <p id="upload">+ Upload CV</p>
        <!-- The file input field used as target for the file upload widget -->
        <input id="fileupload" type="file" name="files[]" multiple>
    </span>
                            <div class="uploadstatus">
                                <div id="progress">
                                    <div id="uploadtext">
                                        <p>< < < Microsoft Word file Only</p></div>
                                    <div id="progressbar"></div>
    </div>
    <!-- The container for the uploaded files -->
    
                            </div>
                        </div> 
             */