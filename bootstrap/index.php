<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  </head>
  <style>
p{
  color:blue;
}
h5{
  color:red;
  
}
 .nav-link{
  color: bisque;
}
#hh{
  color: bisque;
}
#aa{
  color: bisque;
} 
  </style>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg bg-success">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="images/clogo.jpeg" width="100" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active"id="hh" aria-current="page" href="#"><b>Home</b></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 <b> Information </b>
                </a>
                <ul class="dropdown-menu active">
                  <li><a class="dropdown-item" href="#">History</a></li>
                  <li><a class="dropdown-item" href="#">Goal</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Features</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active"id="aa" aria-disabled="true"><b>About-As</b></a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-danger" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <div id="carouselExampleDark" class="carousel carousel-danger slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="bbbbb.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First image</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed molestiae exercitationem quam nemo iste consequuntur dolores quae, eveniet deserunt totam!</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="bbb.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second image</h5>
              <p > Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi delectus perferendis accusantium! Possimus temporibus repellat minus praesentium, accusantium culpa velit?.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="ccc.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third image</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus iusto numquam perspiciatis impedit commodi iure veritatis sit iste quis tempore!.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h3 class="display-6 text-center mt-5 mb-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br> Temporibus consectetur consequatur</h3>
          </div>
        </div>
      
       <div class="row justify-content-evenly pt-3 pb-3">
        <div class="col-md-3 text-center mt-5">
          <h1> <i class="bi bi-file-code-fill text-danger"></i></h1>
          <h5>Built for devloper</h5>
          <p>landkit is made for make your life easy.variable ,build tooling</p>
        </div>
        <div class="col-3 text-center mt-5">
          <h1><i class="bi bi-basket3-fill text-primary"></i></h1>
          <h5>Built for devloper</h5>
          <p>landkit is made for make your life easy.variable ,build tooling</p>

        </div>
        <div class="col-3 text-center mt-5">
         <h1><i class="bi bi-calendar-range-fill text-success"></i></h1>
         <h5>Built for devloper</h5>
         <p>landkit is made for make your life easy.variable,build tooling</p>
      </div>
      
        <hr>
        <div class="row justify-content-evenly pt-3 pb-5">
          <div class="col-md-5">
            <img src="images/groth.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-5">
            <h5>Web devlopment</h5>
            <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="100" aria-valuemin="100" aria-valuemax="100">
              <div class="progress-bar bg-success" style="width: 25%"></div>
            </div>
            <h5>App devlopment</h5>
            <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar bg-info" style="width: 50%"></div>
            </div>
            <h5>Seo</h5>
            <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar bg-warning" style="width: 75%"></div>
            </div>
            <h5>software devlopment</h5>
            <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar bg-danger" style="width: 100%"></div>
            </div>
            <h5>Marketing</h5>
            <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar bg-primary" style="width: 100%"></div> 
            </div>
          </div>
        </div>
         <div class="row justify-content-evenly pt-2 pb-5" style="background-color:#f1f1f1;">
          <div class="col-md-5 mt-5">
            <h3 class="mb-4">Contact Form</h3>


            <form action="boot.php" method="post">
              <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="name" class="form-control" id="exampleInputEmail1" name="name">
                <div id="name" class="form-text">We'll never share your name with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email id</label>
                <input type="emailhelp" class="form-control" id="exampleInputPassword1" name="email">
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">phone number</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="number">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Massage</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="massage"></textarea>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary" name="sub" >Submit</button>
            </form>
          </div>
          <div class="col-md-5 mt-5">
            <h3 class="md-4">Address</h3>
            <p>E/434 Secound floor,North east delhi <br>
            Delhi-110053 <br>
            <i class="bi bi-telephone"></i>: 8700-350-189</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6999.304432545974!2d77.25520614098672!3d28.700048363296627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfc3e6e1a2eaf%3A0x6e7d55f9d5d972d!2sBhajanpura%2C%20Shahdara%2C%20Delhi!5e0!3m2!1sen!2sin!4v1701755144057!5m2!1sen!2sin" style="width:100%;" height="330" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
         </div>
        <div class="row justify-content-evenly bg-dark text-white pt-2 pb-5">
          <div class="col-md-3 pt-4 ">
          <h4 class="pb-2">Royal tech</h4>
           <label> Royal tech is company <br>
          in IT filed wich is providing <br>
         service to costumer to developed <br>
        their Websites,Apps and etc.</label>   
          </div>
          <div class="col-md-3 pt-4">
          <h4 class="pb-2">Important link</h4>
            <label>Home</label><br>
            <label >About-As</label><br>
            <label>Contact-AS</label><br>
            <label >Our team</label><br>
          </div>
          <div class="col-md-3 pt-4">
            <h4 class="pb-2">Contact-AS</h4>
           <label>E/434 Secound floor,North east delhi <br>
              Delhi-110053 <br>
              <i class="bi bi-telephone"></i>: 8700-350-189</label>
          </div>
        </div>
        <div class="row bg-secondary text-white text-center pb-2">
          <div class="col-12">
            <label>Copyright 1999-2021 by Royaltech. All Right Reserved.</label>
          </div>
        </div>
      </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
      // function sub() {

      // if (sub) {
      // let confirm = confirm("Are you want to save it! ");
      // if (confirm) {
      //   alert("Save successfuly.");
      // }
      // } else {
      //   alert("Try again !");
      // }
    </script>
  </body>
</html>