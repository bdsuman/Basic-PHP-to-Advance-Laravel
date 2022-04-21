<!--
Class 7 Assingment: Suman Chandra Sen, Id:1886 

Question 02:

		Let’s make a website which only contains our teams section.
	Now create an array of our teams at least three elements and make the our team section dynamic using php.
    Make an array of our teams including image
    Make a section of our team by using html css
    And dynamic the section by php
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team Member</title>
    <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
    body {
        background-image: linear-gradient(#3F51B5, #1A237E);
        background-repeat: no-repeat;
        color: #000;
        overflow-x: hidden
    }

    p {
        color: #fff
    }

    h2 {
        font-weight: bold;
        margin-bottom: 40px;
        padding-top: 40px;
        color: #fff
    }

    @media (max-width:767px) {
        h2 {
            margin-bottom: 25px;
            padding-top: 25px;
            font-size: 24px
        }
    }

    .intro {
        font-size: 16px;
        max-width: 500px;
        margin: 0 auto
    }

    .intro p {
        margin-bottom: 0
    }

    .people {
        padding: 50px 0;
        cursor: pointer
    }

    .item {
        margin-bottom: 30px
    }

    .item .box {
        text-align: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 280px;
        position: relative;
        overflow: hidden
    }

    .item .cover {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(31, 148, 255, 0.75);
        transition: opacity 0.15s ease-in;
        opacity: 0;
        padding-top: 80px;
        color: #fff;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.15)
    }

    .item:hover .cover {
        opacity: 1
    }

    .item .name {
        font-weight: bold;
        margin-bottom: 8px
    }

    .item .title {
        text-transform: uppercase;
        font-weight: bold;
        color: #bbd8fb;
        letter-spacing: 2px;
        font-size: 13px;
        margin-bottom: 20px
    }

    .social {
        font-size: 18px
    }

    .social a {
        color: inherit;
        margin: 0 10px;
        display: inline-block;
        opacity: 0.7
    }

    .social a:hover {
        opacity: 1
    }
</style>
   
</head>
<body>
<?php 

$team_members=[
   
    ['name'=>'Zinia Rahman','image'=>'https://i.imgur.com/HjKTNkG.jpg','title'=>'CEO','facebook'=>'#','twitter'=>'#','instagram'=>'#'],
    ['name'=>'Muklesur Rahman Mamun','image'=>'https://i.imgur.com/HjKTNkG.jpg','title'=>'Director','facebook'=>'#','twitter'=>'#','instagram'=>'#'],
    ['name'=>'Suman Sen','image'=>'img/suman_sen.jpg','title'=>'Software Developer','facebook'=>'https://www.facebook.com/sumanglobal','twitter'=>'htps://twitter.com/sumanglobal','instagram'=>'https://instagram.com/sumanglobal']
]

?>
<div class="team-grid">
     <div class="container">
         <div class="intro">
             <h2 class="text-center">Meet Our Team</h2>
             <p class="text-center">Meet our team section and team members</p>
         </div>
         <div class="row people d-flex justify-content-center">
             <?php 

             foreach ($team_members as $team_member){
             
             ?>
             <div class="col-md-4 col-lg-3 item">
                 <div class="box" style="background-image:url(<?php echo $team_member['image'] ;?>)" alt="<?php echo $team_member['image'] ;?>" class="img-responsive">
                     <div class="cover">
                         <h3 class="name"><?php echo $team_member['name'] ;?></h3>
                         <p class="title"><?php echo $team_member['title'] ;?></p>
                         <div class="social"><a href="<?php echo $team_member['facebook'] ;?>" target="_blank" ><i class="fa fa-facebook-official"></i></a><a href="<?php echo $team_member['twitter'] ;?>" target="_blank"><i class="fa fa-twitter"></i></a><a href="<?php echo $team_member['instagram'] ;?>" target="_blank" ><i class="fa fa-instagram"></i></a></div>
                     </div>
                 </div>
             </div>
            <?php
             }
            ?>
         </div>
     </div>
 </div>
</body>
</html>