<!--

Template Name: K-Z World
Email: yaraelmalah90@gmail.com
Last Modified: 24 - 05 - 2020 
By: Yara ElMalah

 -->


<?php

include 'init.php';
include  $templates . 'header.php'
 ?>
<!--Start Header-->
<header>
  <div class="container-fluid">
  <div class="row">
    <div  class="col-md-7 hidden-sm hidden-xs">
      <div class="head">
          <img class="img-responsive" src="<?php echo $imagesFiles ?>hi.jpg" alt="movies-poster" />
      </div>
    </div>
    <div  class="col-md-5 col-sm-12">
      <div class="head-caption">
        <h2 class="text-capitalize">hello guys</h2>
        <p class="lead">I am K-Z and here I spread my preference on any visual entertainment like: Movies, Anime, Books, .. etc. <br>
          Want to join me ? Sign up Now !!
        </p>
      </div>
      <div class="head-navigate">
        <button class="btn btn-warning text-capitalize btn-lg sign-button" data-scroll="register">sign up</button>
      <button class="btn btn-primary text-capitalize btn-lg explore"
       data-scroll="current-show">taka an overview</button>
      </div>
    </div>
  </div>
</div>
</header>
<!--End Header-->
<!--Start Companies-->
<section class="companies">
  <div class="container-fluid">
    <div class="row">
      <ul class="list-unstyled">
        <li class="col-md-4 col-xs-4"><img class = "img-responsive"  src="<?php echo $imagesFiles; ?>Companies/disney.png"</li>
        <li class="col-md-4 col-xs-4"><img class="img-responsive"  src="<?php echo $imagesFiles; ?>Companies/hbo.png"</li>
          <li class="col-md-4 col-xs-4"><img class="img-responsive"  src="<?php echo $imagesFiles; ?>Companies/marvel.png"</li>
          <li class="col-md-4 col-xs-4"><img class="img-responsive" src="<?php echo $imagesFiles; ?>Companies/hulu.png"</li>
          <li class="col-md-4 col-xs-4"><img class="img-responsive"  src="<?php echo $imagesFiles; ?>Companies/nick.png"</li>
          <li class="col-md-4 col-xs-4"><img class="img-responsive"  src="<?php echo $imagesFiles; ?>Companies/netflix.png"</li>
      </ul>
    </div>

  </div>
</section>
<!--End Companies-->
<!--Start Slider-->
<section class="slider" id="current-show">
  <div id="sections-content" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#sections-content" data-slide-to="0" class="active"></li>
      <li data-target="#sections-content" data-slide-to="1"></li>
      <li data-target="#sections-content" data-slide-to="2"></li>
      <li data-target="#sections-content" data-slide-to="3"></li>
      <li data-target="#sections-content" data-slide-to="4"></li>
      <li data-target="#sections-content" data-slide-to="5"></li>
      <li data-target="#sections-content" data-slide-to="6"></li>
      <li data-target="#sections-content" data-slide-to="7"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?php echo $imagesFiles; ?>lucifer.jpg" alt="lucifer">
        <div class="carousel-caption">
          <h3 class="text-capitalize">lucifer</h3>
          <p class="lead hidden-xs">Lucifer, a demon, returns from hell to reside in Los Angeles and runs a club. He soon gets involved with the local police and assists them in solving tricky criminal cases.</p>
          <button class="btn btn-danger btn-lg text-capitalize text-center">watch now</button>
          <button class="btn btn-primary btn-lg text-capitalize text-center">go to Series</button>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo $imagesFiles; ?>irishman.jpg" alt="irishman">
        <div class="carousel-caption">
          <h3 class="text-capitalize">irishman</h3>
          <p class="lead hidden-xs">In the 1950s, truck driver Frank Sheeran gets involved with Russell Bufalino and his Pennsylvania crime family. As Sheeran climbs the ranks to become a top hit man, he also goes to work for Jimmy Hoffa -- a powerful Teamster tied to organized crime.</p>
          <button class="btn btn-danger btn-lg text-capitalize text-center">watch now</button>
          <button class="btn btn-primary btn-lg text-capitalize text-center">go to movies</button>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo $imagesFiles; ?>death-parade.jpg" alt="death-parade">
        <div class="carousel-caption">
          <h3 class="text-capitalize">death parade</h3>
          <p class="lead hidden-xs">The Quindecim Bar hosts games between the recently deceased that determine the fate of their souls.</p>
          <button class="btn btn-danger btn-lg text-capitalize text-center">watch now</button>
          <button class="btn btn-primary btn-lg text-capitalize text-center">go to anime</button>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo $imagesFiles; ?>harry-potter.jpg" alt="harry-potter">
        <div class="carousel-caption">
          <h3 class="text-capitalize">harry potter books</h3>
          <p class="lead hidden-xs">Harry Potter is a series of fantasy novels written by British author J. K. Rowling. The novels chronicle the lives of a young wizard, Harry Potter, and his friends Hermione Granger and Ron Weasley, all of whom are students at Hogwarts School of Witchcraft and Wizardry.</p>
          <button class="btn btn-danger btn-lg text-capitalize text-center">read now</button>
          <button class="btn btn-primary btn-lg text-capitalize text-center">go to books</button>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo $imagesFiles; ?>hunter.jpg" alt="hunterxhunter">
        <div class="carousel-caption">
          <h3 class="text-capitalize">hunter x hunter</h3>
          <p class="lead hidden-xs">The show features the protagonist Gon, on a mission to train himself as a hunter. He reunites with his father, who is alive and an accomplished hunter too.</p>
          <button class="btn btn-danger btn-lg text-capitalize text-center">watch now</button>
          <button class="btn btn-primary btn-lg text-capitalize text-center">go to anime</button>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo $imagesFiles; ?>breaking-bad.jpg" alt="breaking-bad">
        <div class="carousel-caption">
          <h3 class="text-capitalize">breaking bad</h3>
          <p class="lead hidden-xs">Walter White, a chemistry teacher, discovers that he has cancer and decides to get into the meth-making business to repay his medical debts. His priorities begin to change when he partners with Jesse.</p>
          <button class="btn btn-danger btn-lg text-capitalize text-center">watch now</button>
          <button class="btn btn-primary btn-lg text-capitalize text-center">go to series</button>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo $imagesFiles; ?>attack-on-titan.jpg" alt="attack-on-titan">
        <div class="carousel-caption">
          <h3 class="text-capitalize">attack on titan</h3>
          <p class="lead hidden-xs">When man-eating Titans first appeared 100 years ago, humans found safety behind massive walls that stopped the giants in their tracks. But the safety they have had for so long is threatened when a colossal Titan smashes through the barriers, causing a flood of the giants into what had been the humans' safe zone.</p>
          <button class="btn btn-danger btn-lg text-capitalize text-center">watch now</button>
          <button class="btn btn-primary btn-lg text-capitalize text-center">go to anime</button>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo $imagesFiles; ?>coll.jpg" alt="collection">
        <div class="carousel-caption">
          <h3 class="text-capitalize">find your next journey</h3>
          <p class="lead hidden-xs">We have a good collection of a visual entertainment</p>
  <button class="btn btn-success btn-lg text-capitalize text-center">books <i class="fas fa-book"></i></button>
    <button class="btn btn-primary btn-lg text-capitalize text-center">anime <i class="fas fa-paw"></i></button><br>
          <button class="btn btn-danger btn-lg text-capitalize text-center">movies <i class="fas fa-film"></i></button>
          <button class="btn btn-info btn-lg text-capitalize text-center">series <i class="fas fa-tv"></i></button>
        </div>
      </div>
</div>
    </div>
</section>
<!--End Slider-->
 <!--Start Recommendations-->
 <section class="recommendations">
        <div class="container">
            <h3 class="text-center text-capitalize">our recommendations</h3>
            <ul class="shuffle list-unstyled text-center">
                <li class="selected filter" data-filter=''>All</li>
                <li class="filter" data-filter='.movies'>Movies</li>
                <li class="filter" data-filter='.anime'>Anime</li>
                <li class="filter" data-filter='.series'>TV Series</li>
                <li class="filter" data-filter='.books'>Books</li>
            </ul>
            <div class="shuffle-recommend" id="container">
                <div class="row">
                    <div class="our-filter">
                        <div class="">
                            <div class="movies our-filter-item">
                                <div class="pic">
                                    <img class="img-responsive" src="<?php echo $imagesFiles; ?>recommend/extraction.jpg" alt="Extraction" />
                                </div>
                                <div class="pic-caption">
                                    <h4 class="text-capitalize">Extraction</h4>
                                    <span class="year">2020</span> <span class="gender">Action</span> <span class="time hidden-xs">1h 57m</span>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="series our-filter-item">
                                <div class="pic">
                                    <img class="img-responsive" src="<?php echo $imagesFiles; ?>recommend/riverdale.jpg" alt="Riverdale" />
                                </div>
                                <div class="pic-caption">
                                    <h4 class="text-capitalize">Riverdale</h4>
                                    <span class="year">2017</span> <span class="gender">Crime</span> <span class="time hidden-xs hidden-xs">4 Seasons</span>
                                </div>
                            </div>
                        </div>
                        <div class=" ">
                            <div class="anime our-filter-item">
                                <div class="pic">
                                    <img class="img-responsive" src="<?php echo $imagesFiles; ?>recommend/psycho-pass.jpg" alt="psycho-pass" />
                                </div>
                                <div class="pic-caption">
                                    <h4 class="text-capitalize">Psycho-Pass</h4>
                                    <span class="year">2012</span> <span class="gender">Crime</span> <span class="time hidden-xs">3 Seasons</span>
                                </div>
                            </div>
                        </div>
                        <div class=" ">
                            <div class="books our-filter-item">
                                <div class="pic">
                                    <img class="img-responsive" src="<?php echo $imagesFiles; ?>recommend/claudine.jpg" alt="caudine" />
                                </div>
                                <div class="pic-caption">
                                    <h4 class="text-capitalize">Claudine at School</h4>
                                    <span class="year">1900</span> <span class="gender">History</span> <span class="time hidden-xs">294 Pages</span>
                                </div>
                            </div>
                        </div>
                        <div class="  ">
                            <div class="movies our-filter-item">
                                <div class="pic">
                                    <img class="img-responsive" src="<?php echo $imagesFiles; ?>recommend/amelie.jpg" alt="Amélie" />
                                </div>
                                <div class="pic-caption">
                                    <h4 class="text-capitalize">Amélie</h4>
                                    <span class="year">2001</span> <span class="gender">Drama</span> <span class="time hidden-xs"> 2h 9m</span>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="series our-filter-item">
                                <div class="pic">
                                    <img class="img-responsive" src="<?php echo $imagesFiles; ?>recommend/stranger.jpg" alt="stranger-things" />
                                </div>
                                <div class="pic-caption">
                                    <h4 class="text-capitalize">Stranger Things</h4>
                                    <span class="year">2016</span> <span class="gender"> Horror</span> <span class="time hidden-xs"> 3 Seasons</span>
                                </div>
                            </div>
                        </div>
                        <div class=" ">
                            <div class="anime our-filter-item">
                                <div class="pic">
                                    <img class="img-responsive" src="<?php echo $imagesFiles; ?>recommend/hunter.jpg" alt="stranger-things" />
                                </div>
                                <div class="pic-caption">
                                    <h4 class="text-capitalize">Hunter X Hunter</h4>
                                    <span class="year">2011</span> <span class="gender">Fiction</span> <span class="time hidden-xs"> 6 Seasons</span>
                                </div>
                            </div>
                        </div>
                        <div class=" ">
                            <div class="books our-filter-item">
                                <div class="pic">
                                    <img class="img-responsive" src="<?php echo $imagesFiles; ?>recommend/game.jpg" alt="game-of-thrones" />
                                </div>
                                <div class="pic-caption">
                                    <h4 class="text-capitalize">A Song Of Ice and Fire</h4>
                                    <span class="year">1996</span> <span class="gender"> Fantasy</span> <span class="time hidden-xs"> 5 Books</span>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="movies our-filter-item">
                                <div class="pic">
                                    <img class="img-responsive" src="<?php echo $imagesFiles; ?>recommend/girl.jpg" alt="girl-interrupted" />
                                </div>
                                <div class="pic-caption">
                                    <h4 class="text-capitalize">Girl, Interrupted</h4>
                                    <span class="year">1999</span> <span class="gender"> Drama</span> <span class="time hidden-xs"> 2h 7m</span>
                                </div>
                            </div>
                        </div>
                        <div class=" ">
                            <div class="series our-filter-item">
                                <div class="pic">
                                    <img class="img-responsive" src="<?php echo $imagesFiles; ?>recommend/west.jpg" alt="westworld" />
                                </div>
                                <div class="pic-caption">
                                    <h4 class="text-capitalize">Westworld</h4>
                                    <span class="year">2016</span> <span class="gender">Fiction</span> <span class="time hidden-xs"> 3 Seasons</span>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="anime our-filter-item">
                                <div class="pic">
                                    <img class="img-responsive" src="<?php echo $imagesFiles; ?>recommend/one-piece.jpg" alt="one-piece" />
                                </div>
                                <div class="pic-caption">
                                    <h4 class="text-capitalize">One Piece</h4>
                                    <span class="year">1999</span> <span class="gender">Travel</span> <span class="time hidden-xs">21 Seasons</span>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="series our-filter-item">
                                <div class="pic">
                                    <img class="img-responsive" src="<?php echo $imagesFiles; ?>recommend/lacasa.jpg" alt="money-heist" />
                                </div>
                                <div class="pic-caption">
                                    <h4 class="text-capitalize">La Casa De Papel</h4>
                                    <span class="year">2017</span> <span class="gender">Crime</span> <span class="time hidden-xs">4 Seasons</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Recommendations-->
    <div class="clearfix"></div>
    <?php include $functions . 'form-variables.php'; ?> 
    <!--Start SignUp Form-->
    <section class="signup" id="register">
      <div class="overlay">
      <div class="container">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h3 class="text-center text-capitalize">don't miss a beat <i class="fas fa-magic fa-lg"></i></h3>
            <h4 class="text-center text-uppercase">sign up now</h4> 
            <div class="row">
              <div class="col-md-6">
            <div class="form-group">
              <input type="text" 
              name="first-name" 
              placeholder="first name" 
              class="text-capitalize input-lg form-control full-name first" 
              required="required" 
              value="<?php
                      if(isset($firstName)):
                        echo $firstName;
                       endif;
                   ?>" >
            </div>
            <div class="form-group">
              <input type="text" 
              name="last-name" 
              placeholder="last name" 
              class="text-capitalize input-lg form-control full-name last"
              required="required" 
              value="<?php if(isset($lastName)):
                        echo $lastName;
                       endif;
                   ?>" >
            </div> 
            <div class="form-group">
              <input type="password" 
              name="password" 
              placeholder="Password" 
              class="input-lg form-control validate-pass" 
              autocomplete 
              required="required" 
              >
            </div>
             <div class="form-group">
              <input type="email" 
              name="email" 
              placeholder="Email" 
              class="input-lg form-control validate-mail" 
              required="required" 
              value="<?php
                      if(isset($email)):
                        echo $email;
                      endif;
                   ?>">
            </div>
          </div>
          <div class="col-md-6">
            
            <div class="form-group form-control age">
              <span class="label-span">Day</span>
              <select id="day"></select> 
              <span class="label-span">Month</span>
              <select id="month"></select> 
              <span class="label-span">Year</span>
              <select id="year"></select> 
            </div>
            <div class="form-group">
              <textarea name="bio"
                placeholder="Tell Us about Yourself!" 
                class=" form-control" 
                value=""
              ></textarea>
            </div>
             <input type="submit" value="Sign Up Now"
            class="btn btn-danger btn-lg btn-block">
          </div>

            
            </div>
        </form>
         <!--The Errors-->
          <div class="errors text-center">
            <?php include $functions . 'backend-form.php'; ?>
              
            </div>
        </div>
      </div>
    </section>
          <!--End SignUp Form-->
<?php
include $templates . 'footer.php';

?>
