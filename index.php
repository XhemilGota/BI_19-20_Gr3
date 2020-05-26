<!DOCTYPE html>
<html>

    <head>
        <?php include("header.php");?>

        <link href='css/homepagestyle.css' rel='stylesheet'>
        <link href='css/entry.css' rel='stylesheet'>
    </head>

    <body>
    <div id="body-part">
        <!--Wrapper div used to work with this part as a whole-->
        <div id="wrapper">
        <?php include("menu.php");?>
                    <section id="firstSection">
                         <section id="slideSection" style="cursor: pointer;">
                             <p id="whichIndex" style="display: none">1</p>
                             <img  width="715" height="400" id="slide" onclick="getIndex1(parseInt(document.getElementById('whichIndex').textContent)); blurOthers(); slide();">
                         </section>

                        <div id="sideTitle">
                            <h1 id="title">$500,000</h1>
                            
                            <p id="slideCaption"></p>
                            
                            
                            <input type="button" onclick="window.location='Buy_Page1.html';" value="SEE MORE &raquo;">

                            
                        </div>
                    </section>
                    <script>
                        
                            var images = ["img/homes/main1.jpg","img/homes/main2.jpg", "img/homes/main3.png", "img/homes/main4.png"];
                            var titles = ["CHARMING COTTAGE", "BACKYARD PARADISE", "STUNNING CLASSIC" , "SPARKLING POOL"];
                            var quotes = ["&quot;The house you looked at today and wanted to think about until tomorrow may be the same house someone looked at yesterday and will buy today.&quot;", "&quot;Winter is the time for comfort, for good food and warmth, for the touch of a friendly hand and for a talk beside the fire: it is the time for home.&quot;", "&quot;Chase your dreams but always know the road that will lead you home again.&quot;", "&quot;Owning a home is a keystone of wealth&rsquo; both financial affluence and emotional security.&quot;"];
                            var step=0;
                            var whichAnimation=0;
                            var indexOfPhoto =[1,9,10,5];
                            function slideit(){
                            
                              if(whichAnimation>1)
                              {
                                  whichAnimation=0;
                              }
                              document.getElementById("slide").src=images[step];
                              document.getElementById("slide").style.animation="ani"+whichAnimation+" 5s linear";
                              document.getElementById("whichIndex").innerHTML=indexOfPhoto[step];
                              document.getElementById("slideCaption").style.animation="textani"+whichAnimation+" 5s linear";
                              document.getElementById("slideCaption").innerHTML=quotes[step];
                              whichAnimation++;
                              
                              document.getElementById("title").innerHTML=titles[step];
                              
                              if (step<images.length-1)
                              {
                                step++;
                              }
                              else 
                              {
                                step=0;
                              }
                              setTimeout(slideit,5000);
                            }
                            slideit();
                        </script>

                   <section id="secondSection">
                        <div style="margin-top: 50px">
                            <h1>EXCLUSIVE PROPERTIES</h1>
                            <em>"Finding a new home can be difficult. Here on Truestate, we make it easy by providing<br>the newest listings all in one place so you can keep up to date "
                            </em>
                        </div>

                        <div class="photos" style="margin-top: 50px">
                            <div class="imgBox" onclick="getIndex(this); blurOthers(); slide();">
                                <img src="img/homepage/1/main.jpg" width="300" height="210" alt="San Francisco, CA 94123, Cow Hollow">

                                <div class="imgInfo">
                                    <p class="price">$5,000,000</p>
                                    <p>
                                        <img src="img/homepage/bedLogo.JPG"> 4bd
                                        <img src="img/homepage/bathLogo.JPG"> 7ba
                                        <img src="img/homepage/sqrftLogo.JPG"> 5,465 sqrft
                                    </p>
                                </div>
                            </div>
                            
                            <div class="imgBox" onclick="getIndex(this); blurOthers(); slide();">
                                <img src="img/homepage/2/950Lombard-big-7.jpg" width="300" height="210" alt="San Francisco, CA 94133, Russian Hill">
                                <div class="imgInfo">
                                    <p class="price">$6,500,000</p>
                                    <p>
                                        <img src="img/homepage/bedLogo.JPG"> 6bd
                                        <img src="img/homepage/bathLogo.JPG"> 8ba
                                        <img src="img/homepage/sqrftLogo.JPG"> 9,495 sqrft
                                    </p>
                                </div>
                            </div>
                            
                            <div class="imgBox lastBox" onclick="getIndex(this); blurOthers(); slide();">
                                <img src="img/homepage/3/main.jpg" width="300" height="210" alt="Houston, TX 77024Piney Point">
                                <div class="imgInfo">
                                    <p class="price">$1,500,000</p>
                                    <p>
                                        <img src="img/homepage/bedLogo.JPG"> 5bd
                                        <img src="img/homepage/bathLogo.JPG"> 2bd
                                        <img src="img/homepage/sqrftLogo.JPG"> 3,200 sqrft
                                    </p>
                                </div>
                            </div>
                            
                            <div class="imgBox" onclick="getIndex(this); blurOthers(); slide();">
                                <img src="img/homepage/4/main.jpg" width="300" height="210" alt="Houston, TX 77098">
                                <div class="imgInfo">
                                    <p class="price">$200,000</p>
                                    <p>
                                        <img src="img/homepage/bedLogo.JPG"> 3bd
                                        <img src="img/homepage/bathLogo.JPG"> 2bd
                                        <img src="img/homepage/sqrftLogo.JPG"> 1,100 sqrft
                                    </p>
                                </div>
                            </div>
                            
                            <div class="imgBox" onclick="getIndex(this); blurOthers(); slide();">
                                <img src="img/homepage/5/main.jpg" width="300" height="210" alt="Brooklyn, NY 11235Sheepshead Bay">
                                <div class="imgInfo">
                                    <p class="price">$700,000</p>
                                    <p>
                                        <img src="img/homepage/bedLogo.JPG"> 4bd
                                        <img src="img/homepage/bathLogo.JPG"> 3bd
                                        <img src="img/homepage/sqrftLogo.JPG"> 3,000 sqrft
                                    </p>
                                </div>
                            </div>
                            
                            <div class="imgBox lastBox" onclick="getIndex(this); blurOthers(); slide();">
                                <img src="img/homepage/6/main.jpg" width="300" height="210" class="lastphoto" alt="Los Angeles, CA 90077">
                                <div class="imgInfo">
                                    <p class="price">$2,450,000</p>
                                    <p>
                                        <img src="img/homepage/bedLogo.JPG"> 6bd
                                        <img src="img/homepage/bathLogo.JPG"> 7bd
                                        <img src="img/homepage/sqrftLogo.JPG"> 5,777 sqrft
                                    </p>
                                </div>
                            </div>
                            
                            <div class="imgBox" onclick="getIndex(this); blurOthers(); slide();">
                                <img src="img/homepage/7/main.jpg" width="300" height="210" alt="Bel-Air / Holmby Hills, California">
                                <div class="imgInfo">
                                    <p class="price">$8,000,000</p>
                                    <p>
                                        <img src="img/homepage/bedLogo.JPG"> 17bd
                                        <img src="img/homepage/bathLogo.JPG"> 22bd
                                        <img src="img/homepage/sqrftLogo.JPG"> 30,000 sqrft
                                    </p>
                                </div>
                            </div>
                            
                            <div class="imgBox" onclick="getIndex(this); blurOthers(); slide();">
                                <img src="img/homepage/8/main.jpg" width="300" height="210" alt="Beverly Hills, California">
                                <div class="imgInfo">
                                    <p class="price">$1,250,000</p>
                                    <p>
                                        <img src="img/homepage/bedLogo.JPG"> 6bd
                                        <img src="img/homepage/bathLogo.JPG"> 8bd
                                        <img src="img/homepage/sqrftLogo.JPG"> 8,060 sqrft
                                    </p>
                                </div>
                            </div>
                            
                            <div class="imgBox lastBox" onclick="getIndex(this); blurOthers(); slide();">
                                <img src="img/homepage/9/main.jpg" width="300" height="210" class="lastphoto" alt="Bel-Air / Holmby Hills, California">
                                <div class="imgInfo">
                                    <p class="price">$1,500,000</p>
                                    <p>
                                        <img src="img/homepage/bedLogo.JPG"> 5bd
                                        <img src="img/homepage/bathLogo.JPG"> 6bd
                                        <img src="img/homepage/sqrftLogo.JPG"> 8,542 sqrft
                                    </p>
                                </div>
                            </div>
                        </div>

                        <input onclick="window.location.href = 'Buy_Page1.html';" type="button" value="VIEW THE FULL GALLERY &raquo;" class="viewfullgallery">
                    </section>
        
        </div>
    </div>

             <div id="slideshow">

                        <div>
                            <p id="pageNum">5/8</p>
                        </div>

                <div id="slideshow2">
                    <img src="" id="slideshowImg">

                    <div class="imgInfo">
                        
                        <p id="hoverText"></p>
                        
                    </div>

                    <div class="prev" onclick="plusSlides(-1)"><p>&#10094;</p></div>
                    <div class="next" onclick="plusSlides(1)"><p>&#10095;</p></div>
                    <a class="closeBtn" onclick="document.getElementById('slideshow').style.display = 'none'; unBlurOthers();">&times;</a>
                    <div id="descriptionBtn" onclick="descriptionExpand();"> &#10094; </div>
                </div>

                 <div id="description">
                        
                         <div id="map" style="width:450px; height: 350px; float:right; margin: 30px 150px 0 0; border: 1px solid white;">
                            
                        </div>
                     
                     <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBxeeraroriooA1NxYn6QW6NLlYlvQvn4&callback=initMap">
                         
                     </script>
                        
                        <div style="width:400px; height:400px; margin-bottom: 30px;">
                            <p class="imp" id="street"></p>
                            <p class="imp" id="price">$</p>
                            <p id="city"></p>
                            <p id="bedroom"></p>
                            <p id="bathroom"></p>
                            <p id="sqrt"></p>
                            <p id="downPayment"></p>
                            <p id="installment"></p>
                        </div>

                        <h2>Description</h2>

                        <p id="descriptionText"></p>

                        <p>If you're interested in this property, then <a onclick="propertyIndex();" href="interestedContact.html" id="descriptionContact" target="blank">Contact Us</a></p>
                        <p>Did you like this? Then check our <a href="top10.html">top 10 houses</a> this year.</p>
                    </div>
            </div>


            <?php include("footer.php");?>
        
        <script src="js/general.js" onload="changeColorOfMenu('homepage')">
        </script>
        <script src="js/homepage.js"></script>
    </body>
       
</html>