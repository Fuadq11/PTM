<?php require_once "./lang/lang.php";?>
<main id="about-body">
            <div class="container-contact">
              <div class="content-contact">
                <div class="left-side">
                  <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topic"><?=$lang['adress']?></div>
                    <div class="text-one">Sumqayıt şəhəri Kimyaçılar küç 1</div>
                    
                  </div>
                  <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic"><?=$lang['phone']?></div>
                    <div class="text-one">+99451-205-97-54</div>
                    <div class="text-two">+99451-205-43-82</div>
                  </div>
                  <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic"><?=$lang['email']?></div>
                    <div class="text-one">scipvec@gmail.com</div>
                   
                  </div>
                </div>
                <div class="right-side">
                  <div class="topic-text"><?=$lang['contact_message_head']?></div>
                  <p><?=$lang['contact_message_subhead']?></p>
                <form action="#">
                  <div class="input-box">
                    <input type="text" placeholder="<?=$lang['contact_message_nameplaceholder']?>">
                  </div>
                  <div class="input-box">
                    <input type="text" placeholder="<?=$lang['contact_message_emailplaceholder']?>">
                  </div>
                  <div class="input-box message-box">
                    <textarea placeholder="<?=$lang['contact_message_messageplaceholder']?>"></textarea>
                  </div>
                  <div class="button">
                    <input type="button" value="<?=$lang['send']?>" >
                  </div>
                </form>
              </div>
              </div>
            </div>
        </main> 