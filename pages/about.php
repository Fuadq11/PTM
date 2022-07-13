<?php require_once "./lang/lang.php";
  require_once "./Database/db.php";
    //===================== About teksti və videonu dinamik almaq ====================
    $s = "SELECT `content` FROM sections WHERE id = 2 OR id = 6;";		
    $r = mysqli_query($con, $s);
    $r2 = mysqli_query($con, $s);
    $aboutmesaj = mysqli_fetch_assoc($r)['content'];
    $videolink = mysqli_fetch_assoc($r)['content'];
    //======================================================================
?>
<link href="./css/about-fotogallery.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
</section>
<style type="text/css"> 

#sloqan h1,h2 {
  font-weight: 200;
  margin: 0.4em 0;
}
#sloqan h1 { font-size: 1.5em; }
#sloqan h2 {
  color: #888;
  font-size: 1.3em;
}
</style>
<main id="about">
            
            <div class="container-custom">
              <h1 class="text-center">
                İQTİSADİ ZONALARIN İNKİŞAFI AGENTLİYİNİN NƏZDİNDƏ
                PEŞƏ TƏHSİL MƏRKƏZİ
              </h1>
              <img class="about-page-img" src="img/1.jpeg" alt="İQTİSADİ ZONALARIN İNKİŞAFI AGENTLİYİNİN NƏZDİNDƏ
              PEŞƏ TƏHSİL MƏRKƏZİ">
  
            
            <!-- Cards -->
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                  
                    <div class="card-body">
                        
                        <h3>23</h3>
                        <span>Sinif otağı</span>
                    </div>
                 
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                
                    <div class="card-body">
                       
                        <h3>13</h3>
                        <span>labaratoriya</span>
                    </div>
                 
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                 
                    <div class="card-body">
                       
                        <h3>153 </h3>
                        <span>Nəfərlik Akt zalı</span>
                    </div>
                 
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
              
                    <div class="card-body">
                        
                        <h3>184</h3>
                        <span>Nəfərlik yeməkxana</span>
                    </div>
                  
                </div>
              </div>
            </div>
  
            <!-- End of Card -->
  
             <!------- about us content --------->
<section class="about-us">
    <div class="row">
        <div id="sloqan" class="col-sm-12 col-md-4">
            <h2>Niyə məhz İqtisadi Zonaların İnkşafı Agentliyinin nəzdində Peşə Təhsil Mərkəzi ?</h2>
            <h1>Çünki bizdə,
              <span
                 class="txt-rotate"
                 data-period="2000"
                 data-rotate='[ "yüksək ixtisaslı mütəxəssislər var!", "müasir infrastruktur var!", "dünya təhsil sistemi təcrübəsi var!", " hər bir özəllik var!" ]'></span>
            </h1>
            
        </div>
      
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6">
            <h1>Peşə Təhsil Mərkəzi:</h1>
            <?=$aboutmesaj?>
        </div>
        <div class=" about-col col-md-6">
            <iframe width="700" height="395" src="<?=$videolink?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <div id="image-viewer">
        <span class="close">&times;</span>
        <img class="modal-content" id="full-image">
    </div>

    <div class="row">
        <div class="course">
            <h1>Foto Qalerya</h1>
            <br>
            <?php
            $query = "SELECT * FROM `qalerya` WHERE status = 1 ORDER BY id LIMIT 16;";
            $run = mysqli_query($con, $query);
             if(mysqli_num_rows($run) == 0)
             {
                   echo '<h3>Qalerya boşdur</h3>';
                   return;
             }
            while($get = mysqli_fetch_assoc($run))
            {
                ?>
            <div class="responsive images">
                <div class="gallery">
                    <img src="<?=$get['image_url']?>" alt="image" width="600" height="400">
                </div>
            </div>
            <?php
                   
            } 
            ?>
        </div>
    </div>
    <script>
        //========== Image viewer  ============
        $(".images img").click(function() {
            $("#full-image").attr("src", $(this).attr("src"));
            $('#image-viewer').show();
        });

        $("#image-viewer, .close").click(function() {
            $('#image-viewer').hide();
        });

        //=============== Sloqan tanitim =============

        var TxtRotate = function(el, toRotate, period) {
          this.toRotate = toRotate;
          this.el = el;
          this.loopNum = 0;
          this.period = parseInt(period, 10) || 2000;
          this.txt = '';
          this.tick();
          this.isDeleting = false;
        };

        TxtRotate.prototype.tick = function() {
          var i = this.loopNum % this.toRotate.length;
          var fullTxt = this.toRotate[i];

          if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
          } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
          }

          this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

          var that = this;
          var delta = 100 - Math.random() * 100;

          if (this.isDeleting) { delta /= 2; }

          if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
          } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 300;
          }

          setTimeout(function() {
            that.tick();
          }, delta);
        };
        window.onload = function() {
          var elements = document.getElementsByClassName('txt-rotate');
          for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-rotate');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtRotate(elements[i], JSON.parse(toRotate), period);
            }
          }
          // INJECT CSS
          var css = document.createElement("style");
          css.type = "text/css";
          css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
          document.body.appendChild(css);
        };

    </script>

  </section>
          </div>
          </main>