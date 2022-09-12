<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyWebsite</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet"> 
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: 'Playfair Display', serif;
    }
    .myrow
    {
        background: #000;
        display:flex;
       align-items:center;
       justify-content:center;
    }
   .myrow p
   {
       font-size:30px;
       padding:25px;
       
       margin-right:20px;
   }
    .anc {
        font-size: 1.2rem;
    }

    .carousel-item img {
        width: 100%;
        height: 90vh;
    }
 
    .font {
        width: 100vw;
        height: 16vh;
        position: absolute;
        display:flex;
        justify-content:center;
    }


    .font h1 {
        font-size: 3rem;
        animation-name: animate;
        animation-duration: 2s;
        animation-timing-function: linear;
        animation-fill-mode: forwards;
        animation-iteration-count: 1;
        position: relative;
    }
    h1{
        font-weight:bold;
        text-transform:capitalize;
    }

    @keyframes animate {
        0% {
            left: -1000px;
        }

        100% {
            left: 0px;
        }
    }

    .mycard {
        margin-top: 250px;
    }

    .logo {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    i {
        font-size: 70px;
    }

    .card {
        box-shadow: 1px 1px 4px rgba(252, 244, 244, 0.4);
        transition:all 0.6s linear; 
        /* background-color:rgba(252,244,244,0.4); */
    }
    .card:hover{
        transform:scale(1.1);

    }
    .gap
    {
        margin-top:80px;
    }
    .imag img
    {
        background:black;
        width:100%;
        opacity: 0.8;
    }
    #ing
    {
        height:65%;
        width:65%;
    }
        
    footer{
     background: #000;
     margin-bottom:0px;
    }
    .jumbotron
    {
        margin-bottom:0;
    }
    #sticker
    {
        color:rgb(225, 238, 104);
    }
    @media(max-width:768px)
    {
        .font{
            height:33vh;
        }
        .myrow button{
            margin-right:30px;
        }
        .card:hover{
       transform:scale(1.05);
    }
    #sticker
    {
        display:none;
    }
    }
</style>

<body>
    <script src="https://kit.fontawesome.com/45d01987fe.js" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <a class="navbar-brand" href="#" style="font-size:2rem; font-weight:bold">Amazing Blogging</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <i class="fab fa-angular" id="sticker" style="margin-left:400px"></i>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link anc" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link anc" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle anc" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item anc" href="#">View</a>
                        <a class="dropdown-item anc" href="#">Explore</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item anc" href="#">Know us</a>
                    </div>
                </li>

            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
        </div>
    </nav>

    <!-- corousel -->

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade mt-3" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1416339684178-3a239570f315?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1416339684178-3a239570f315?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1416339684178-3a239570f315?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1416339684178-3a239570f315?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80." class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1416339684178-3a239570f315?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1416339684178-3a239570f315?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> -->



    <!-- font animation -->

    <div class="font text-center gap bg-primary " style="background: #000; opacity:0.6; color:beige;">
        <h1 class="my-auto">A<sub>W</sub>E<sub>S</sub>O<sub>M</sub>E <sub>B</sub>L<sub>O</sub>G<sub>G</sub>I<sub>N</sub>G</h1>
    </div>
    <!-- cards -->



    <div class="mycard container ">

        <div class="row row-cols-1 row-cols-md-3 ">

            <div class="col mb-4 p-5">
                <div class="card h-100  shadow  mb-2 bg-white rounded" style="border-color:transparent;">
                    <div class="logo">
                        <i class="fab fa-affiliatetheme"></i>
                        <h1 class="mt-2">About Us</h1>
                    </div>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body mx-3 my-1 text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>


            <div class="col mb-4 p-5">
                <div class="card h-100  shadow  mb-2 bg-white rounded" style="border-color:transparent;">
                    <div class="logo">
                        <i class="fab fa-affiliatetheme"></i>
                        <h1 class="mt-2">About Us</h1>
                    </div>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body mx-3 my-1 text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

            <div class="col mb-4 p-5">
                <div class="card h-100 shadow  mb-2 bg-white rounded" style="border-color:transparent;">
                    <div class="logo">
                        <i class="fab fa-affiliatetheme"></i>
                        <h1 class="mt-2">About Us</h1>
                    </div>
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body mx-3 my-1 text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

           
        </div>

   <!-- description -->
       <h1 class="text-center my-5" style="font-size:40px;">Meet the Essentials: tools designed to fuel growth</h1>
       <p class="text-center my-4">Build, Run, and Grow  a better online business that’s up and running in less time, with less cost. With Essentials, get an ecommerce platform that won’t hold you back today 
           or in the future—with your choice of the best features and functionality to showcase your products and manage your business.</p>
     <div class="row gap">
         <div class="col-md-6">
          <img src="https://wwwcdn.bigcommerce.com/www1.bigcommerce.com/assets/03-ValProp1.jpg?mtime=20200313142052" class="img-fluid mt-2" alt="">
         </div>
         <div class="col-md-6 mt-5">
          <h1 class="text-center my-5" style="font-size:30px;">Simplify ecommerce management</h1>
          <p class="text-center my-5 mx-4">Take the guesswork out of managing your new or growing online business.

            Improve planning with inventory management tools
            Craft personalized shopping experiences with customer groups
            Choose from leading shipping and payment providers to find your best fit solutions, without penalties </p>
         </div>
     </div>
     <div class="row  gap">
        
        <div class="col-md-6 mt-5">
         <h1 class="text-center my-5" style="font-size:30px;">Convert more salest</h1>
         <p class="text-center my-5 mx-4">Help customers cross the finish line with a seamless path to purchase and advanced marketing tools.

            Leverage our Page Builder tool to get your store up and running faster and make quick changes to your site, no coding required 
            Streamline checkout with optimized one page checkout and win back customers with shopping cart recovery
            Put your products’ best foot forward with native Google AMP and optimized images via Akamai Image Manager</p>
        </div>
        <div class="col-md-6">
            <img src="https://wwwcdn.bigcommerce.com/www1.bigcommerce.com/assets/06-ValProp4.jpg?mtime=20200313142055" class="img-fluid mt-2" alt="">
           </div>
    </div>


    </div>
     <hr class="w-75 mx-auto mt-5">
    


      
     <div class="container">
     <div class="imag">
         <img class="img-fluid" src="https://images.pexels.com/photos/267392/pexels-photo-267392.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
     </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="row" style="display:flex; justify-content:center; align-items:center;">
            <div class="col-md-6 text-center px-5 mx-auto ">
                <h1>If your business has hands</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore molestias accusamus similique
                     officia porro est ratione dolorum. Beatae delectus voluptatem, iure repellat ab maxime,
                      culpa, quasi aliquid quod magnam nam?
                </p>
            </div>
            <div class="col-md-6 mx-auto " style="display:flex; justify-content:center; align-items:center;">
                <img class="img-fluid mx-auto img-thumbnail" id="ing" src="https://images.pexels.com/photos/2068975/pexels-photo-2068975.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
            </div>
        </div>
    </div>
    <!-- division -->
    <div class="myrow text-center text-white my-5 ">
        <p>Don't stop learning grow your knowledge</p>
        <button type="button" class="btn btn-outline-primary">Give a free trial</button>
    </div>

    <div class="container-fluid">
    <div class="jumbotron text-center mb-5" style="box-shadow:1px 1px 1px 1px rgba(0,0,0,0.5);">
       <b> <h1 class="mb-5">Reach out the popular learning sites</h1></b>
       <div class="card-deck mt-5">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="card-deck mt-5">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="#" role="button">Explore</a>
      </div>
      <div class="jumbotron text-center" style="box-shadow:1px 1px 1px 1px rgba(0,0,0,0.5);">
        <b> <h1 class="">Enhance Your Skills</h1></b>
         <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
         <hr class="my-4">
         <p>We are here to entertain your show your interest in learning new things</p>
         <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
       </div>
    </div>
    <div class="container" style="color:gray;">
     <p class="mx-3 my-5" >
         

With this offer, you will not be charged the monthly subscription fee for the BigCommerce plan selected for a period of one month from the date of activation (the “Offer”). The free Offer period applies only to base monthly subscription fees and does not apply to other services or products.The offer is valid for a limited time, and may be modified or terminated by BigCommerce at any time. You must select either a Standard, Plus or Pro plan to be eligible. Within 15 days from the date of activation, you must complete the registration process, including providing valid credit card information for future billing. Offer not valid for existing customers, limited to one use per customer, and may not be combined with any other offer.
     </p>
     <p class="mx-3 my-5">
IMPORTANT: After the end of the free promotional period your card will be charged the monthly subscription fee for the plan type you have selected, unless you cancel your account prior to the end of the free offer period. If you cancel your account or do not complete registration, your store will be deactivated and you will no longer be able to access the control panel. By registering an account and submitting your payment details, you are agreeing to BigCommerce's terms of service

     </p>
    </div>
    <footer>
    <div class="jumbotron bg-dark" style="opacity:0.6; color:gray;">
        <h2 class="text-center mb-5">This is the final Phenomena</h2>
        <div class="container">
        <div class="row gt-5" >
  <div class="col-sm-3 col-md-3 ">
    <div class="card" style="background:transparent; box-shadow:none; border:none;">
      <div class="card-body">
        <h5 class="card-title">About</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-3 col-md-3">
    <div class="card" style="background:transparent; box-shadow:none; border:none;">
      <div class="card-body">
        <h5 class="card-title">Contact</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-3 col-md-3">
    <div class="card" style="background:transparent; box-shadow:none; border:none;">
      <div class="card-body">
        <h5 class="card-title">Know More</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-3 col-md-3">
    <div class="card" style="background:transparent; box-shadow:none; border:none;">
      <div class="card-body">
        <h5 class="card-title">Explore</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
</div>
<div class="row gt-5 mt-4" >
    <div class="col-sm-3 col-md-3 ">
      <div class="card" style="background:transparent; box-shadow:none; border:none;">
        <div class="card-body">
          <h5 class="card-title">About</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          
        </div>
      </div>
    </div>
    <div class="col-sm-3 col-md-3">
      <div class="card" style="background:transparent; box-shadow:none; border:none;">
        <div class="card-body">
          <h5 class="card-title">Contact</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          
        </div>
      </div>
    </div>
    <div class="col-sm-3 col-md-3">
      <div class="card" style="background:transparent; box-shadow:none; border:none;">
        <div class="card-body">
          <h5 class="card-title">Know More</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          
        </div>
      </div>
    </div>
    <div class="col-sm-3 col-md-3">
      <div class="card" style="background:transparent; box-shadow:none; border:none;">
        <div class="card-body">
          <h5 class="card-title">Explore</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          
        </div>
      </div>
    </div>
    </div>
    <hr style="background-color:black; height:1px; opacity:0.5;"/>
</div>   
      </div>
    </footer>
        <script src="https://kit.fontawesome.com/45d01987fe.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>
</body>

</html>