<?php

  require_once "./lang/lang.php";
?>
<main>
            
            <section id="slider">
                <div class="container-custom">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="back-black d-block">
                          <div class="carousel-item active">
                            <img src="img/1.jpeg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>First slide label</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                           
                            <img src="img/2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Second slide label</h5>
                              <p>Some representative placeholder content for the second slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="img/3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Third slide label</h5>
                              <p>Some representative placeholder content for the third slide.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </button>
                      </div>
                </div>

            </section>
            <section id="xeberler" class="mt-5">
              <div class="container-custom">
                
              <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12" > 
                  <div class="son_xeberler">
                    <h1 class="news_head"><?=$lang['page_title_news']?></h1>
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-sm-12  mb-5" >
                      <div class="card home-custom-card">
                        <a href="#">
                        <img class="card-img-top" src="img/4.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                        </div>
                      </a>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-sm-12  mb-5" >
                    
                      <div class="card home-custom-card">
                        <a href="#">
                        <img class="card-img-top" src="img/4.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                        </div>
                      </a>
                      </div>
                  
                    </div>
                </div>
              </div>
              </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <h1 class="news_head"><?=$lang['page_title_announcement']?></h1>
                  <div class="umumi_xeberler" style="padding: 0 15px; overflow: auto;height:25rem">
                  <div class="row">
                    <div class="col-12 text-center">
                      <div class="card text-white bg-info mb-3">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h5 class="card-title">Info card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 text-center">
                      <div class="card text-white bg-warning mb-3">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h5 class="card-title">Warning card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 text-center">
                      <div class="card text-white bg-success mb-3">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h5 class="card-title">Success card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 text-center">
                      <div class="card text-white bg-secondary mb-3">
                      <div class="card-header">Header</div>
                      <div class="card-body">
                        <h5 class="card-title">Secondary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                  </div>
                  </div>
                </div></div>
              </div>
            </div>
            </section>
           <section id="Tədris" class="mb-5">
             <div class="container-custom">
              <h1 class="mb-5 mt-5 text-center text-uppercase "><?=$lang['header_speciality']?></h1>
              <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12  mb-5">
                  <div class="card">
                    <img class="card-img-top" src="img/i1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Veb dizayn və proqram təminatı qrupu</h5>
                      <p class="card-text">Peşəkar müəllim heyyəti və dərs proqramı üçün keçid edərək tanış ola bilərsiz</p>
                      <a href="#" class="btn btn-primary btn-color"><?=$lang['read_more']?>...</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12  mb-5">
                  <div class="card">
                    <img class="card-img-top" src="img/i2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">	Proqramla idarə olunan dəzgahların operatoru</h5>
                      <p class="card-text">Peşəkar müəllim heyyəti və dərs proqramı üçün keçid edərək tanış ola bilərsiz</p>
                      <a href="#" class="btn btn-primary btn-color"><?=$lang['read_more']?>...</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12  mb-5">
                  <div class="card">
                    <img class="card-img-top" src="img/i3.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Elektrik avadanlıqlarına xidmət və təmir üzrə elektrik montyoru</h5>
                      <p class="card-text">Peşəkar müəllim heyyəti və dərs proqramı üçün keçid edərək tanış ola bilərsiz</p>
                      <a href="#" class="btn btn-primary btn-color"><?=$lang['read_more']?>...</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-100 text-center ">
                <a href="#" class="btn btn-primary btn-lg active mx-auto btn-color" role="button" aria-pressed="true"><?=$lang['about_speciality']?></a>
              </div>
             
            </div>
           </section>
           <section id="partners" class="mb-5">
             <div class="container-custom">
             <h1 class="text-center text-uppercase"><?=$lang['cooperation']?></h1>
             <div class="row ml-2 mr-2 mt-5">
               <div class="col "><img src="img/test_loqo.png" alt=""></div>     
               <div class="col "><img src="img/test_loqo.png" alt=""></div>     
               <div class="col "><img src="img/test_loqo.png" alt=""></div>     
               <div class="col "><img src="img/test_loqo.png" alt=""></div>     
               <div class="col "><img src="img/test_loqo.png" alt=""></div>     
               <div class="col "><img src="img/test_loqo.png" alt=""></div>     
             </div>
            </div>
           </section>
        </main>