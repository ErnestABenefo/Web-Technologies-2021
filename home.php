<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="LoginPage" />
    <meta name="author" content="Ernest Nana Kwaku Ampomah - Benefo" />
    <meta name=" keywords" content="Log In" />
    <meta name="viewport" content="width = device-width, initial-scale = 2" />
    <title>HomePage</title>
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="quiz.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&display=swap" rel="stylesheet">

 </head>






  <body>
      <!--The Header containing the Navigation Bar-->
        <header>
                        
            <img class="logo" src="bmslogo.png" alt="logo">
            <nav>
                <ul class="nav_links">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="BlogSample/blog_index.php">Create Posts</a></li>
                    <!--<li><a href="#">Read Other Posts</a></li>-->
                    <!--<li><a href="editpost.php">Edit Post</a></li>-->
                </ul>
            </nav>
            <a class="cta" href="#"><button>Log Out</button></a> 
        </header>






<!--Body of the Program. THis is where the form is-->
<h1 class="intro">Welcome to the Business Marketing Test platform. Answer this questionnaire to know which marketing strategy to adopt for your business!</h1>
<!--The questionnaire-->
        <h1 style="text-align: center">Who are you?</h1>
            <div id="quiz-area">
                <section class="q-n-a">
                    <h3 class="question"> What's the nature of your business?</h3>
                    <div class="answers">
                        <div class="answer" data-value="1">Sole proprietorship</div>
                        <div class="answer" data-value="2">Family Business</div>
                        <div class="answer" data-value="3">Corporations</div>
                        <div class="answer" data-value="4">Company</div>
                    </div>
                    <div class="button-holder">&nbsp;</div>
                </section>

                <section class="q-n-a"> 
                    <h3 class="question">Choose the nature of service which best describes your business.</h3>
                    <div class="answers">
                        <div class="answer" data-value="1">Arts, Crafts, Technical and Soft skills</div>
                        <div class="answer" data-value="2">Clothing and textiles</div>
                        <div class="answer" data-value="3">Computing hardware, and Technology.</div>
                        <div class="answer" data-value="4">Food</div>
                    </div>
                    <div class="button-holder">&nbsp;</div>
                </section>

                <section class="q-n-a">
                    <h3 class="question">Choose your target audience.</h3>
                    <div class="answers">
                        <div class="answer" data-value="1">Everyone</div>
                        <div class="answer" data-value="2">Students</div>
                        <div class="answer" data-value="3">Middle to High income earners</div>
                        <div class="answer" data-value="4">Other businesses</div>
                    </div>
                    <div class="button-holder">&nbsp;</div>
                </section>

                <section class="q-n-a">
                    <h3 class="question">What part of Africa does your target market belong to?.</h3>
                    <div class="answers">
                        <div class="answer" data-value="1">West Africa</div>
                        <div class="answer" data-value="2">East and Central Africa</div>
                        <div class="answer" data-value="3">North Africa</div>
                        <div class="answer" data-value="4">South Africa.</div>
                    </div>
                    <div class="button-holder">&nbsp;</div>
                </section>
                        
            </div>

        <div class= "button finish" >What's your business?</div>
   
<!--Javascript functionality of the questionnaire form-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script type="text/javascript">

            var questions = $('.question').length;//stores number of questions
            
            
            $('.answer').on('click', function(){
                if($(this).parent().find('.selected').length > 0){
                    total -=$(this).parent().find('.selected').data('value');
                    $(this).parent().find('.selected').removeClass('selected');
                }

                $(this).addClass('selected');
                total += $(this).data('value');

                 
                
            })
            $('.finish').on('click', function(){
                var message = '';
                if($('.selected').length === questions){

                    if (total < 5){
                    message = 'Your focus is on customers, hence a B2c marketing strategy would be great. Especially over platforms like WhatsApp and Facebook.';

                    }else if( total < 8){
                        message = 'B2B and B2C strategies should be employed. Consider using social media, email marketing and online ecommerce shops like Jumia.';
                    }
                    else if( total < 12){
                        message = 'An interesting strategy to employ here. Reward customers for their referrals. Each one of them belong to a network of friends.';
                    }
                    else if (total <17){
                        message = 'You will need to focus primarily on marketing to other businesses. Hence a B2B marketing strategy would be effective.';
                        
                    }
                    
                }else{
                    
                    message = 'You missed a question';
                }
                

               
                 alert(message)
                 //console.log(message)
                
             }

             

            )



        </script>
    <!--Footer Elements-->  

     <footer>
         <div class="container">
             <ul class="flex-row">
                 <li><a href="">Home</a></li>
                 <li><a href="">About Us</a></li>
                 
                 <li><a href="">Terms</a></li>
                 <li><a href="">Contact Us</a></li>
             </ul>

             <ul class="flex-row">
                 <li><i class= "fa fa-youtube"></i></li>
                 <li><i class= "fa fa-twitter"></i></li>
                 <li><i class= "fa fa-facebook"></i></li>
                 <li><i class= "fa fa-instagram"></i></li>
             </ul>

             <p>&copy 2020 BMT</p>
         </div>

     </footer>
       
    </body>

</html>





