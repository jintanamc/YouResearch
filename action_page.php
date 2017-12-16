
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
                <div class="ui sticky secondary pointing menu">
                    <a class="logo item" style="margin-bottom:10px;" href="index.html">
                        YouResearch
                    </a>
                    <a class="item" href="index.html">
                        <i class="home icon"></i> Home
                    </a>
                    <a class="active item" href="blog.html">
                        <i class="file text icon"></i> Blog
                    </a>
                    <a class="item" href="studentadv.html">
                        <i class="student icon"></i> Student Advisors
                    </a>
                    <a class="item" href="contact.html">
                        <i class="student icon"></i> Contact
                    </a>
                    <div class="right menu">
                        <div class="item">
                            <i id="contact" class="write icon"></i>
                        </div>
                    </div>
                </div>

    <div class="ui inverted vertical footer segment">
        <div class="ui grid container center aligned">
            <div class="row">
                 <h2 class="ui inverted header">Contact Us</h2>
            </div>
            <form action="action_page.php" method="get" class="ui inverted form segment" id="contact_form" >
              <p> thank you</p>
            <div class="ui divider"></div>
        </div-->
        <div class="ui center aligned container">
            <img src="images/glass.png" class="ui centered mini image"><br>
            <div class="ui horizontal inverted small divided link list">
                <a class="item" href="https://www.facebook.com/YouResearch"><i class="facebook icon"></i></a>
                <a class="item" href="https://www.linkedin.com/company/youresearch?trk=ppro_cprof"><i class="linkedin icon"></i></a>
            </div>
            <div class="two column row">
                <a href="https://jintana.me" target="_blank" id="footer" style="color:beige; font-size:1.0em;">Made with <i class="heart icon" style="color:#e74c3c; font-size:1.2vw;"></i>by Jintana</a>
            </div>
        </div>
    </div>
    <script>
    var $form = $('form#test-form'),
          url = 'https://script.google.com/macros/u/1/s/AKfycbzrqSqjEBgzzWXDRRLjtPmbdIwZGhtcy6Nwmrl_9G52UnLodPs/exec'
      ('#submit-form').on('click', function(e) {
          e.preventDefault();
          var jqxhr = $.ajax({
              url: url,
              method: "GET",
              dataType: "json",
              data: $form.serializeObject()
          }).success(

          );
      })
    </script-->
</body>
</html>
