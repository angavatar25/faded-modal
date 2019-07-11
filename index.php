<!DOCTYPE html>
<html lang="en">
<head>
   <?php $prefix="";?>
   <?php include($prefix."include/head.php"); ?>
   <?php include($prefix."include/tracking-script/head.php"); ?>
</head>
<body>
   <?php include($prefix."include/tracking-script/body.php"); ?>

   <section class="our-team">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <a href="#" class="team-member" data-toggle="modal" data-target="#modalFull">
                  <div class="member-image">
                     <img src="<?php echo $prefix;?>assets/img/hehe/Heather_Web_1.jpg" class="image-main" alt="">
                  </div>
                  <div class="member-name">
                     <p class="team-name">
                        Andreas Dwi Jatmiko
                     </p>
                  </div>
                  <div class="container container-sm">
                     <!-- <a href="" data-toggle="modal" data-target="#modalFull">cs</a> -->
                     <!-- <button type="button" class="btn btn-modal btn-primary" data-toggle="modal" data-target="#modalFull">Trigger Modal</button> -->
                  </div>
              </div>
               </a>
            </div>
         </div>
      </div>
   </section>

   <section class="at-section">
      <div class="modal modal-full fade fadeinup-sm-down" id="modalFull" tabindex="1" role="dialog">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-body p-box">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true"><i class="fal fa-times"></i></span>
                  </button>
                  <div class="wrapper-content">
                     <div class="modal-teamname">
                        <h1 class="name">Andreas Dwi Jatmiko</h1>
                     </div>
                     <div class="modal-title">
                        <li class="title">
                           <p>Senior Front-End Developer</p>
                        </li>
                        <li>
                           <a href="#">
                              <i class="fab fa-twitter"></i>
                           </a>
                        </li>
                        <li>
                           <a href="">
                              <i class="fab fa-linkedin-in"></i>
                           </a>
                        </li>
                     </div>
                     <p class="text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets 
                        containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                     </p>
                     <p class="text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                     </p>
                     <p class="text"></p>
                     <p class="text"></p>
                  </div>
                  <div class="modal-image" style="background-image: url(https://humanventures.co/wp-content/uploads/2017/09/Heather_Popup_Test_6.jpg);"></div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <?php include($prefix."include/script.php"); ?>
</body>
</html>