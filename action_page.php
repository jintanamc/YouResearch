
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

  <!-- Site Properties -->
  <title>YouResearch</title>
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="homepage.css">
    <link rel="stylesheet" type="text/css" href="flaticon.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous" defer></script>
<script src="semantic/dist/semantic.min.js" defer></script>
  <script src="js/homepage.js" defer></script>
  <script src="assets/library/jquery.min.js" defer></script>
  <script src="../dist/components/visibility.js" defer></script>
  <script src="../dist/components/transition.js" defer></script>
  <script>
  $(document)
    .ready(function() {




      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;
      $('.ui.form')
                .form({
                fields: {
                    fname   : 'empty',
                    lname   : 'empty'
                }
            });

    })
  ;
  </script>
</head>
<body id="home" data-gr-c-s-loaded="true">
    <div class="ui inverted masthead centered segment">
        <div class="ui page grid">
            <div class="column">

<!--Menu-->

                <div class="ui sticky secondary pointing menu">
                    <a class="logo item" style="margin-bottom:10px;" href="index.html">
                        YouResearch
                    </a>

                    <div class="ui dropdown item">
                      About Us <i class="users icon dropdown icon"></i>
                      <div class="menu">
                        <a class="item" href="whatwedo.html">What We Do</a>
                        <a class="item" href="team.html">Our Team</a>
<a class="item" href="collaborations.html">Collaborations</a>

                      </div>
                    </div>
                  </a>

                  <div class="ui dropdown item">
                    Research <i class="users icon dropdown icon"></i>
                    <div class="menu">
                      <a class="item" href="whatwedo.html">Our Strategy</a>
                      <a class="item" href="team.html">Getting Started</a>
                        <a class="item" href="collaborations.html">Collaborations</a>
                    </div>
                  </div>
                </a>


                    <a class="item" href="blog.html">
                        <i class="file text icon"></i> Blog
                    </a>


                    <a class="item" href="resources.html">
                        <i class="users icon"></i> Resources
                    </a>
                    <a class="item" href="contact.html">
                        <i class="send icon"></i> Contact
                    </a>


                    <div class ="donate">
                                <a href="https://www.paypal.me/YouResearchProgram" class="large basic inverted animated fade ui button">
                                            <div class="visible content">Donate</div>
                                            <div class="hidden content">Donate</div>
                                        </a>

                                    </div>
                </div>

<!--page content-->

                </div>
                </div>
                </div>
                <div class="ui vertical feature segment">
                <div class="ui centered page grid">
                <div class="row">
                <div class="fourteen wide column">
                    <br/><br/>
                    <h2 class="ui centered header border">Contact</h2>

                </div>
                </div>
                <div class="row">
                <div class="fourteen wide column">
                  <p class = "fourteen">For inquiries regarding a specific research area, look to see <a href="team.html">which team member</a> is most equipped to answer your question. If you are interested in joining the YouResearch team, complete the respective form below. For any other inquiries, fill out the Contact Us form. Our team will respond to you within 48 hours.</p>
                  </div>


                  <!--form stuff-->
                  <form action="action_page.php" method="get" class="ui form segment" id="contact_form" >
                  <div class="three fields">
                     <div class="required field outline blue"> <!--why is this not required-->
                         <label style="float:left;">First Name</label>
                         <input placeholder="First Name" name="fname" type="text">
                     </div>
                     <div class="field">
                         <label style="float:left;">Middle Name</label>
                         <input type="text" name="mname" placeholder="Middle Name">
                     </div>
                     <div class="required field">
                         <label style="float:left;">Last Name</label>
                         <input placeholder="Last Name" name="lname" type="text">
                     </div>
                  </div>
                  <div class="required field">
                     <label style="float:left;">E-mail</label>
                     <input placeholder="joe@schmoe.com" name="email" type="email">
                  </div>
                  <div class="field">
                     <label style="float:left;">Comment</label>
                     <textarea name="comment" form="contact_form"></textarea>
                  </div>
                  <button class="ui submit button" type="submit" id="submit_form">Submit</button>
                  <div class="ui error message"></div>
                  <div class="ui success message">
                     <div class="header">Form Completed</div>
                     <p>We have received your message and will contact you soon.</p>
                  </div>
                  </form>
                  </div>
                  </div>
                </div>
                </div>
                </div>
                </div>
                </div>


<!--footer-->
                <div class="ui vertical footer segment">

            <div class="ui center aligned container">
                <img src="images/glass.png" class="ui centered mini image"><br>
                <div class="ui horizontal inverted small divided link list">
                  <a class="item" href="https://www.facebook.com/YouResearch"><i class="facebook icon" style="font-size:1.5em;"></i></a>
                  <a class="item" href="https://www.linkedin.com/company/youresearch?trk=ppro_cprof"><i class="linkedin icon" style="font-size:1.5em;"></i></a>
                </div>
                <div class="two column row">
                    <a href="http://jintana.me" target="_blank" id="footer" style="color:beige; font-size:1.0em;">Made with <i class="heart icon" style="color:#e74c3c;"></i>by Jintana</a>
                </div>
            </div>
            </div>
</body>
</html>
