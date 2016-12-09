 <html>
    <head>
        <title> SelfFeed </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/index.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/profile.css">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Open+Sans:800');
            @import url('https://fonts.googleapis.com/css?family=Open+Sans:700');
            @import url('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300'); 
            @import url('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700');
            @import url('https://fonts.googleapis.com/css?family=Prociono');
            @import url('https://fonts.googleapis.com/css?family=Cormorant+Garamond:600');
            @import url('https://fonts.googleapis.com/css?family=Dosis:800');
            @import url('https://fonts.googleapis.com/css?family=Dosis:200');
            @import url('https://fonts.googleapis.com/css?family=Amaranth');

        </style>
        <script>  
            function back(){
                window.location.replace("<?php echo base_url(); ?>index.php/Menu");
            }
        </script>
    </head>
    <body>
        <div class="wrapper">
            <div class="member_menu" id="white">
                <div class="member_menu_header" id="black">
                    <div class="left_filler" id="header_left_position">
                        <div class="left_5_percent">
                            <a class="clickable back" href="<?php echo base_url(); ?>index.php/Menu">
                                <span class="icons-back"></span>
                            </a>
                        </div>
                    </div>
                    <div class="center_filler">
                        <div class="center_box" >
                             <a href="#">SELFFEED</a>
                        </div>
                    </div>
                    <div class="right_filler"></div>
                </div>
                <div class="faq_content">
                    <h2>Success</h2>
                    <p> Congratulations , your application have been submitted! </p>
                    <div class="buttons">
                        <button class="button" id="black_button" onclick="back()">Back</button>
                    </div>
                    
                </div>
                <footer class="position-relative" id="footer">
                    <div class="content-width">
                        <div class="links">
                            <span class="trademark">&copy; 2016 Selffeed </span>
                        </div>
                        <div class="social_media_icons">
                            <a href="https://www.facebook.com/SelfFeed/?fref=ts" class="facebook_icon"></a>
                            
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
 </html>