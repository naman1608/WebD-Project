<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="styless.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Clarket</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light border border-5 shd">
      <div class="container-fluid container-lg hs">
        <a class="navbar-brand home-heading " href="/index.php">Clarket</a>
        <form class="d-flex me-auto ms-auto">
          <button class="btn btn-outline-dark" type="submit">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="21"
              height="21"
              fill="currentColor"
              class="bi bi-search m-auto mx-1 "
              viewBox="0 0 16 16"
            >
              <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
              />
            </svg>
          </button>
          <input
            class="form-control widath "
            type="search"
            placeholder="Search for products such as Table,Fan,Books etc."
            aria-label="Search"
          />
        </form>
        <button class="btn nav-item cbtn me-auto" id="sell-btn">SELL</button>

        <script type="text/javascript">
          document.getElementById("sell-btn").onclick = function () {
              //console.log('hello');
              location.href = "sell_form.php";
          };
          function cardclick(){
            location.href = "product_details.php";
          }
        </script>
        
        <ul class="navbar-nav">
          <li class="nav-item me-1">
            <a
              class="nav-link rounded-pill logged-out"
              href="signin.php"
              id="Account"
              role="button"
            >
              Sign In
            </a>

            <div class="dropdown show">
              <a class="btn cbtn mb-2 dropdown-toggle logged-in" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Naman
              </a>
            
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="user_account.php">Profile</a>
                <a class="dropdown-item" href="#" id="logoutbutton">Logout</a>
              </div>
            </div>
          </li>
        </ul>
      </div>

    </nav>
    <div class="container-xxl mt-1">

      <div class="container-xxl pt-2 ">
        <div class="row g-0">
          <div class="col-2 col-md-3  border-end border-4">
            <p class="h6 text-start fnt">Filters</p>
            <hr class="dropdown-divider">
            <div class="container mt-4">
              
              <p class="text-muted h5">COST</p>
              <input type="range" name="" id="cost"  min="100" max="10000" step="100">
            </div>
            <div class="container mt-5">
              <div class="row">
                <div class="col-6 ">
                  <div class="container">
                    
                    <div class="row ">
                      <div class="col-3 ">
                        
                        <p class="text-muted">Min</p>
                      </div>
                      <div class="col-3 ">
                        
                        <input type="number" name="min" id="minimum" class="wix rounded-pill" value="100">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6 ">
                  <div class="container">
                    
                    <div class="row">
                      <div class="col-3">
                        
                        <p class="text-muted">Max</p>
                      </div>
                      <div class="col-3">
                        
                        <input type="number" name="max" id="maximum" class="wix rounded-pill"  value="100">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container mt-4">
              <p class="text-muted h5">College</p>
              <div class="container ms-4">
                
                <div class="form-check p-2">
                  <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label text-muted" for="flexCheckDefault">
                    Netaji Subhas University of technology
                  </label>
                </div>
                <div class="form-check p-2">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
             
                  <label class="form-check-label text-muted" for="flexCheckChecked">
                    Delhi Technological University
                  </label>
                </div>
                <div class="form-check p-2">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                  <label class="form-check-label text-muted" for="flexCheckChecked">
                    IIITD
                  </label>
                </div>
              </div>
            </div>
            <div class="tagArea mt-3">

              <p class="text-muted h5">Tags</p>
              <form class="form-inline mt-1">
                
                <input type="text" class="form-control" id="inlineFormInputName2" placeholder="Tags">
                <button  class="btn bii" id="tags" type="button"><svg xmlns="http://www.w3.org/2000/svg" class="sizee" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                </svg></button>
              </form>
              <div class="dpp"></div>
            </div>
          </div>
          <div class="col-10 col-md-9 scrl">
            <div class="card mt-3 mb-2 ms-1 me-1 shadow-sm">
              <div class="card-body" onclick="cardclick()">
                <div class="container">
                   <div class="row">
                     <div class="col-3">
                       <img src="assets/table2.png" alt="" class="img-fluid">
                     </div>
                     <div class="col-6 border-end border-2">
                      <p class=" fnt pb-0 mb-0">Woodworks Table  Polished</p>
                      <div class="card-text pb-3 pt-0 mt-0">Netaji Subhas University Of technology</div>
                      <h4><div class="card-text badge bg-primary ms-1 mt-2 bh">&#8377; 1500 - Negotiable</div></h4>
                     </div>
                     <div class="col-3">
                       
                      <div class="row g-0">
                        <div class="col-4 nopadding ">
                          
                          <p class="card-text h5 pt-3 text-center ms-2">Seller :</p>
                        </div>
                        <div class="col-8 nopadding">
                          
                          <div class="card-text text-muted pt-3 text-start ">Mahfooz Haque</div>
                        </div>
                      </div>
                      
                       <div class="container mt-4">
                        <div class="me-auto">
                          <div class="h5">Tags:</div>
                          <span class="card-text badge bg-secondary bs text-muted m-1">Furniture</span>
                          <span class="card-text badge bg-secondary  bs text-muted m-1">Table</span>
                         
                           
                        </div>
                        <div class=" me-auto">
          
                            <span class="card-text badge bg-secondary bs text-muted m-1">Teak</span>
                            <!-- <span class="card-text badge bg-secondary  bs text-muted m-1">Table</span> -->
                          
                            
                         </div>
                         
                        </div>
                     </div>
                   </div>
                </div>
              </div>
            </div>
            <div class="card mt-3 mb-2 ms-1 me-1 shadow-sm">
              <div class="card-body" onclick="cardclick()">
                <div class="container">
                   <div class="row">
                     <div class="col-3">
                       <img src="assets/table.jpg" alt="" class="img-fluid">
                     </div>
                     <div class="col-6 border-end border-2">
                      <p class="fnt pb-0 mb-0">Woodworks Table  Polished</p>
                      <div class="card-text pt-0 mt-0 pb-3">Netaji Subhas University Of technology</div>
                      <h4><div class="card-text badge bg-primary ms-1 mt-2 bh">&#8377; 1500-Negotiable</div></h4>
                     </div>
                     <div class="col-3">
                       <div class="container">
                      </div>
                      <div class="row">
                        <div class="col-4 nopadding ">
                          
                          <p class="card-text h5 pt-3 text-center ms-2">Seller :</p>
                        </div>
                        <div class="col nopadding">
                          
                          <div class="card-text text-muted pt-3 text-start ">Mahfooz Haque</div>
                        </div>
                      </div>
                      
                       <div class="container mt-4">
                        <div class="me-auto">
                          <div class="h5">Tags:</div>
                          <span class="card-text badge bg-secondary bs text-muted m-1">Furniture</span>
                          <span class="card-text badge bg-secondary  bs text-muted m-1">Table</span>
                        
                       
                          <span class="card-text badge bg-secondary bs text-muted m-1">Wood</span>
                          <span class="card-text badge bg-secondary  bs text-muted m-1">Study</span>
                         
                        </div>
                     </div>
                   </div>
                </div>
              </div>
            </div>
            </div>
            <div class="card  mt-3 mb-2 ms-1 me-1 shadow-sm">
              <div class="card-body" onclick="cardclick()">
                <div class="container">
                   <div class="row">
                     <div class="col-3">
                       <img src="assets/bed.jfif" alt="" class="img-fluid">
                     </div>
                     <div class="col-6 border-end border-2">
                      <p class="fnt pb-0 mb-0">Godrej Double Decker bed</p>
                      <div class="card-text pb-3 pt-0 mt-0">Indraprastha institute of Information Technology, Delhi  </div>
                      <h4><div class="card-text badge bg-primary ms-1 mt-2 bh ">&#8377; 9800-Negotiable</div></h4>
                     </div>
                     <div class="col-3">
                      <div class="row">
                        <div class="col-4 nopadding ">
                          
                          <p class="card-text h5  pt-3 text-center ms-2">Seller :</p>
                        </div>
                        <div class="col nopadding">
                          
                          <div class="card-text text-muted pt-3 text-start ">Yajur Tayal</div>
                        </div>
                      </div>
                       <div class="container mt-4">
                        <div class=" me-auto">
                          <div class="h5">Tags:</div>
                          <span class="card-text badge bg-secondary bs text-muted m-1">Godrej</span>
                          <span class="card-text badge bg-secondary  bs text-muted m-1">Double decker</span>
                           
                        </div>
                        <div class=" me-auto">
                          <span class="card-text badge bg-secondary bs text-muted m-1">Bed</span>
                          <!-- <span class="card-text badge bg-secondary  bs text-muted m-1"></span> -->
                         </div>
                         
                        </div>
                     </div>
                   </div>
                </div>
              </div>
            </div>
            <div class="card mt-3 mb-0 ms-1 me-1 shadow-sm ">
              <div class="card-body" onclick="cardclick()">
                <div class="container">
                   <div class="row">
                     <div class="col-3">
                       <img src="assets/chair.jfif" alt="" class="img-fluid">
                     </div>
                     <div class="col-6 border-end border-2">
                      <p class="fnt pb-0 mb-0">Khimser Dining Chair</p>
                      <div class="card-text pb-3 pt-0 mt-0">Delhi Technological University </div>
                      <h4><div class="card-text badge bg-primary ms-1 mt-2 bh">&#8377; 3000-Negotiable</div></h4>
                     </div>
                     <div class="col-3">
                      <div class="container">
                      </div>
                      <div class="row">
                        <div class="col-4 nopadding ">
                          
                          <p class="card-text h5 pt-3 text-center ms-2">Seller :</p>
                        </div>
                        <div class="col nopadding">
                          
                          <div class="card-text text-muted pt-3 text-start ">Samad Ahmed</div>
                        </div>
                      </div>
                       <div class="container mt-4">
                        <div class="me-auto">
                          <div class="h5">Tags:</div>
                          <span class="card-text badge bg-secondary bs text-muted m-1">Furniture</span>
                          <span class="card-text badge bg-secondary  bs text-muted m-1">chair</span>
                           
                  
 
                            <span class="card-text badge bg-secondary bs text-muted m-1">Wood</span>
                            <!-- <span class="card-text badge bg-secondary  bs text-muted m-1"></span> -->
                            
                        
                         
                        </div>
                     </div>
                   </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">© 2021 Company, Inc</p>
    
        <a href="/" class="col-md-4 d-flex home-heading align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <p class="display-5">Clarket</p><sup>©️</sup></svg>
        </a>
    
        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
          <li class="nav-item"><a href="contact_us.php" class="nav-link px-2 text-muted" >Contact US</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About US</a></li>
        </ul>
      </footer>
    </div>
    <script>
      let tags=document.querySelector('#tags');
      function addtag(){
        window.onscroll=function (){};
           let tagDiv=document.querySelector('.dpp');
           let val=document.querySelector('#inlineFormInputName2');
           if(tagDiv.innerHTML=="" && val.value!=""){
             tagDiv.classList.add('dispTags');
          }
          if(val.value!=""){
          tagDiv.innerHTML+=`<span class="badge bs tgs">${val.value}</span>`;
          }
      }
      tags.addEventListener('click',addtag);
      let cst=document.querySelector('#cost');
      function setCost(){
        let cst=document.querySelector('#cost');
        let min=document.querySelector('#minimum');
        let max=document.querySelector('#maximum');
        min.value=cst.value;
        max.value=cst.value;
      }
      cst.addEventListener('mousemove',setCost);
    </script>
    <script
    src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
      ></script>
      <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
      ></script>
      <script
    
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
      ></script>
      <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
      ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script type="module" src="scripts/auth.js"></script>
    </body>
    </html>
    