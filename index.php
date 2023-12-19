<?php
$title="Booatstrap Traning Sample Page";
require_once("header.php");
?>
<?php

require_once("navigation.php");
?>
<body>
  
  
  <header class="page-header header container-fluid">
  </header>
  <div class="overlay"></div>

  <div class="description">
    <h1>Welcome to the Landing Page!</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis. Suspendisse consectetur mi id libero fringilla, in pharetra sem ullamcorper.</p>
    <button class="btn btn-outline-secondary btn-lg">Tell Me More!</button>
  </div>
  <div class="container features">
    <div class="row">
      
        <div class="col-lg-4 col-md-4 col-sm-12">
            <h3 class="feature-title">Lorem ipsum</h3>
            <img src="images/column-1.jpg" class="img-fluid">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-12">
            <h3 class="feature-title">Lorem ipsum</h3>
            <img src="images/column-2.jpg" class="img-fluid">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h3 class="feature-title">Get in Touch!</h3>
          <div class="form-group">
              <input type="text" class="form-control" placeholder="Name" name="" id="name">
          </div>
          <div class="form-group">
              <input type="email" class="form-control" placeholder="Email Address" name="email" id="email">
          </div>
          <div class="form-group">
              <textarea class="form-control" rows="4" id="message"></textarea>
          </div>
          <input type="submit" class="btn btn-secondary btn-block" value="Send" name="" id="submitButton">

      </div>

      
      
  </div>
</div>


<div class="background">
  <div class="container team">
      <div class="row">
          <div class="card col-lg-3 col-md-3 col-sm-4 text-center">
              <a href="portfolio.html" class="team-portfolio-link">
                  <img class="card-img-top rounded-circle" src="images/team-image-1.webp" alt="Card image">
                  <div class="card-body">
                      <h4 class="card-title">Jane Doe</h4>
                      <p class="card-text">Job Description</p>
                  </div>
              </a>
              
          </div>
          <div class="card col-lg-3 col-md-3 col-sm-4 text-center">
              <a href="portfolio.html" class="team-portfolio-link">
                  <img class="card-img-top rounded-circle" src="images/team-image-2.jpeg" alt="Card image">
                  <div class="card-body">
                      <h4 class="card-title">Jane Doe</h4>
                      <p class="card-text">Job Description</p>
                  </div>
              </a>
              
          </div>

          <div class="card col-lg-3 col-md-3 col-sm-4 text-center">
              <a href="portfolio.html" class="team-portfolio-link">
                  <img class="card-img-top rounded-circle" src="images/team-image-1.webp" alt="Card image">
                  <div class="card-body">
                      <h4 class="card-title">Jane Doe</h4>
                      <p class="card-text">Job Description</p>
                  </div>
              </a>
              
          </div>

          <div class="card col-lg-3 col-md-3 col-sm-4 text-center">
              <a href="portfolio.html" class="team-portfolio-link">
                  <img class="card-img-top rounded-circle" src="images/team-image-2.jpeg" alt="Card image">
                  <div class="card-body">
                      <h4 class="card-title">Jane Doe</h4>
                      <p class="card-text">Job Description</p>
                  </div>
              </a>
              
          </div>

          <div class="card col-lg-3 col-md-3 col-sm-4 text-center">
              <a href="portfolio.html" class="team-portfolio-link">
                  <img class="card-img-top rounded-circle" src="images/team-image-1.webp" alt="Card image">
                  <div class="card-body">
                      <h4 class="card-title">Jane Doe</h4>
                      <p class="card-text">Job Description</p>
                  </div>
              </a>
              
          </div>

          <div class="card col-lg-3 col-md-3 col-sm-4 text-center">
              <a href="portfolio.html" class="team-portfolio-link">
                  <img class="card-img-top rounded-circle" src="images/team-image-2.jpeg" alt="Card image">
                  <div class="card-body">
                      <h4 class="card-title">Jane Doe</h4>
                      <p class="card-text">Job Description</p>
                  </div>
              </a>
              
          </div>

          <div class="card col-lg-3 col-md-3 col-sm-4 text-center">
              <a href="portfolio.html" class="team-portfolio-link">
                  <img class="card-img-top rounded-circle" src="images/team-image-1.webp" alt="Card image">
                  <div class="card-body">
                      <h4 class="card-title">Jane Doe</h4>
                      <p class="card-text">Job Description</p>
                  </div>
              </a>
              
          </div>

          <div class="card col-lg-3 col-md-3 col-sm-4 text-center">
              <a href="portfolio.html" class="team-portfolio-link">
                  <img class="card-img-top rounded-circle" src="images/team-image-2.jpeg" alt="Card image">
                  <div class="card-body">
                      <h4 class="card-title">Jane Doe</h4>
                      <p class="card-text">Job Description</p>
                  </div>
              </a>
              
          </div>
          
          
          
      </div>
  </div>
</div>



<script> 



function clickListener(){
consol.log('Button clicked')
}


let submitButton=document.querySelector('#submitButton');

let name=document.querySelector('#name');
let email=document.querySelector('#email');
let message=document.querySelector('#message');



submitButton.addEventListener('click',clickListener);

function clickListener(event){
event.preventDefault();
console.log('Button clicked');
let nameText=name.value;
let emailText=email.value;
let messageText=message.value;
console.log('name:',nameText,'email:',emailText,'message:',messageText);
}
submitButton.addEventListener('click',clickListener);

function emailValidate(email){
if(email.includes('@'))
{
return true;
}
else {
return false;
}
}


</script>


</body>
</html>

   
<?php

require_once("footer.php");
?>

<?php
   

?>

