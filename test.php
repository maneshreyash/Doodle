<!DOCTYPE html>
 <html lang="en" class="no-js"> <!--<![endif]-->
    <head>

        
        <title>Calendar</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="css/homepage.css" type="text/css" rel="stylesheet"/>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="http://yui.yahooapis.com/3.18.1/build/yui/yui-min.js"></script>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link href="css/homepage.css" type="text/css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="css/poll_details.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
        
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
         <script type="text/javascript" src="js/poll_details.js">
            
        </script>
    </head>
    <body class="yui3-skin-sam">
        <header>
            <img src="css/images/DoodleLogo.png" alt="Doodle Icon"  class="logoimage"/>
            <table>
                <tr>
                    <td>
                        <a href="#contact">Contact</a>
                    </td>
                </tr>
            </table>
        </header>
        <div class="container">
            <!-- Codrops top bar -->
            
            
            <section style="overflow: auto;">               
                <div id="container_demo" >
                                                            
                    <div id="wrapper">

                        <div id="login" class="animate form">
                            <h1>Poll Title Bro!</h1>
                            <div id="demo" class="yui3-skin-sam yui3-g"> 
                                <div id="leftcolumn" class="yui3-u">
                                    <div id="mycalendar">

                                    </div><br>
                                </div>
                            </div>
                        <div class="intervs"> 
                            <form method="POST" action="insert_intervals.php" name="ofrm">
                                <input type="hidden" value="" name="date" id="date" />
                                <fieldset id="interval">
                                   <h2 class="selectdate">Selected date: <span id="selecteddate"></span></h2>
                                </fieldset>
                                <input type="button" value="Add an interval" class="pollbutton" id="add" />
                                <input type="submit" value="Submit" class="pollbutton">
                            </form>
                        </div>
                        </div>                      
                    </div>
                </div>  
            </section>
        </div>
        <div id="contact" >
            <h1 id="h1contact">Contact us</h1>    
            <table >
                <tr>
                    <td>
                        <img src="css/images/phone.png" alt="Phone Icon"  class="icon"/>
                    </td>
                    <td>
                        +1 (469)-959-1111
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="css/images/location.png" alt="Address Icon"  class="icon"/>
                    </td>
                    <td>
                        The University of Texas at Dallas, Richardson, Texas
                    </td>
                </tr>
                <tr> 
                    <td>
                        <img src="css/images/mail.png" alt="Email Icon"  class="icon"/>
                    </td>
                    <td>
                        contactdoodle@gmail.com
                    </td>
                </tr>    
            </table>
        </div>            
        <div id="follow">
            <h1 id="h1follow">Follow us</h1>
            <table>    
                <tr> 
                    <td>
                        <a href="https://www.linkedin.com" >
                            <img src="css/images/linkedin.png" alt="LinkedIn Icon"  class="icon"/>
                        </a>
                    </td>
                    <td>
                        <a href="https://www.linkedin.com" >
                            LinkedIn
                        </a>    
                    </td>
                    <td>
                        <a href="https://www.facebook.com" >
                            <img src="css/images/facebook.png" alt="Facebook Icon"  class="icon"/>
                        </a>
                    </td>
                    <td>
                        <a href="https://www.facebook.com" >
                            Facebook
                        </a>    
                    </td>
                    <td>
                        <a href="https://www.youtube.com">
                            <img src="css/images/youtube.png" alt="Youtube Icon"  class="icon"/>
                        </a>
                    </td>
                    <td>
                        <a href="https://www.youtube.com" >
                            YouTube
                        </a>    
                    </td>    
                </tr>
            </table>
        </div>
        <footer>
            This Doodle is made with Love in Dallas @2018 CS 6314.001 Final Project
        </footer>

    </body>
</html>



















<!-- <html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Calendar</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="css/homepage.css" type="text/css" rel="stylesheet"/>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="http://yui.yahooapis.com/3.18.1/build/yui/yui-min.js"></script>
        
        <style type="text/css">
            body
            {
                font-family:Gill Sans MT;
                padding:10px;
            }
            legend
            {
                padding:0px 10px;
                background:black;
                color:#FFF;
            }
            .yui3-button {
                margin:10px 0px 10px 0px;
                color: #fff;
                background-color: #3476b7;
            }
        </style>
    </head>
    <body class="yui3-skin-sam">
        <header>
            <img src="css/images/DoodleLogo.png" alt="Doodle Icon"  class="logoimage"/>
            <table>
                <tr>
                    <td>
                        <a href="#contact">Contact</a>
                    </td>
                </tr>
            </table>
        </header>
            <center>
                <div id="demo" class="yui3-skin-sam yui3-g"> 
                    <div id="leftcolumn" class="yui3-u">
                        <div id="mycalendar">

                        </div>
                    </div>
                </div>
                <div>
                    <form method="POST" action="insert_intervals.php" name="ofrm">
                        <input type="hidden" value="" name="date" id="date" />
                        <fieldset id="interval">
                            <legend>Selected date: <span id="selecteddate"></span></legend>
                        </fieldset>
                        <input type="button" value="Add an interval" class="add" id="add" />
                        <input type="submit" value="Submit">
                    </form>
                </div>
        </center>
        <div id="contact" >
            <h1 id="h1contact">Contact us</h1>    
            <table >
                <tr>
                    <td>
                        <img src="css/images/phone.png" alt="Phone Icon"  class="icon"/>
                    </td>
                    <td>
                        +1 (469)-959-1111
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="css/images/location.png" alt="Address Icon"  class="icon"/>
                    </td>
                    <td>
                        The University of Texas at Dallas, Richardson, Texas
                    </td>
                </tr>
                <tr> 
                    <td>
                        <img src="css/images/mail.png" alt="Email Icon"  class="icon"/>
                    </td>
                    <td>
                        contactdoodle@gmail.com
                    </td>
                </tr>    
            </table>
        </div>            
        <div id="follow">
            <h1 id="h1follow">Follow us</h1>
            <table>    
                <tr> 
                    <td>
                        <a href="https://www.linkedin.com" >
                            <img src="css/images/linkedin.png" alt="LinkedIn Icon"  class="icon"/>
                        </a>
                    </td>
                    <td>
                        <a href="https://www.linkedin.com" >
                            LinkedIn
                        </a>    
                    </td>
                    <td>
                        <a href="https://www.facebook.com" >
                            <img src="css/images/facebook.png" alt="Facebook Icon"  class="icon"/>
                        </a>
                    </td>
                    <td>
                        <a href="https://www.facebook.com" >
                            Facebook
                        </a>    
                    </td>
                    <td>
                        <a href="https://www.youtube.com">
                            <img src="css/images/youtube.png" alt="Youtube Icon"  class="icon"/>
                        </a>
                    </td>
                    <td>
                        <a href="https://www.youtube.com" >
                            YouTube
                        </a>    
                    </td>    
                </tr>
            </table>
        </div>
        <footer>
            This Doodle is made with Love in Dallas @2018 CS 6314.001 Final Project
        </footer>
        <script type="text/javascript">
            var h = 0;
            
            $(document).ready(function() {
            
                $("#add").click(function() {
                    h++;
                    var lastField = $("#interval div:last");
                    var intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
                    var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + intId + "\"/>");
                    fieldWrapper.data("idx", intId);
                    var sInterval = $("<input id = \"time\" type=\"time\" name=\"sInt" + h + "\" class=\"startInterval\" />");
                    var eInterval = $("<input type=\"time\" name=\"eInt" + h + "\" class=\"endInterval\" />");
                    var removeButton = $("<input type=\"button\" class=\"remove\" value=\"Delete\" />");
                    
                    if (sInterval > eInterval){
                        window.location.replace("http://stackoverflow.com");
                    }
                    
                    removeButton.click(function() {
                        $(this).parent().remove();
                    });
                    
                    fieldWrapper.append(sInterval);
                    fieldWrapper.append(eInterval);
                    fieldWrapper.append(removeButton);
                    $("#interval").append(fieldWrapper);
            });
        });
            
        YUI().use('calendar', 'datatype-date', 'cssbutton',  function(Y) {
            
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth(); //January is 1
            var yyyy = today.getFullYear();
            
            var calendar = new Y.Calendar({
                contentBox: "#mycalendar",
                width:'340px',
                showPrevMonth: true,
                showNextMonth: true,
                minimumDate: new Date(yyyy, mm, dd) , 
                date: new Date()}).render();
                var dtdate = Y.DataType.Date;
            
                calendar.on("selectionChange", function (ev) {
                    var newDate = ev.newSelection[0];
                    Y.one("#selecteddate").setHTML(dtdate.format(newDate));
                    var variable = document.getElementById('selecteddate').innerHTML;
                    document.getElementById("date").value = variable;
                    //window.alert(variable);
                });
        });
        </script>
    </body>
</html>     