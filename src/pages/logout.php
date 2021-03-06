<?php 
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" type="x-icon" href="../assets/images/AdobeStock_427723549.jpeg"/>
    <link href="../assets/Css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/Css/headers.css" rel="stylesheet" />
    <link href="../assets/Css/heroes.css" rel="stylesheet" />
    <link href="../assets/Css/features.css" rel="stylesheet" />
    <link href="../assets/Css/product.css" rel="stylesheet" />
    <script src="../assets/js/bootstrap.js"></script>
    <title>Garege Auto</title>
  </head>
  <body>

      <header style="background-color: black;">
       <div class="container" >
        <div class="row">

          <div class="col order-last" style="justify-items: center; margin: auto;">
           <div class="text-end">
              <a href="Sign-in.php">  <button type="button" class="btn btn-outline-light">Connexion</button></a>
              <a href="Sign-up.php">  <button type="button" class="btn btn-outline-warning">Creer un compte</button></a>
              </div> 
             </div>

          <div class="col">
            <div class="text-center">
            <a href="#"><img src="../assets/images/AdobeStock_427723549.jpeg" alt="logo" width="150px" height="100px"/></a>
            </div>
          </div>

          <div class="col order-first">
           
          </div>
        </div>
      </div>
        <div class="px-3 py-2 bg-dark text-white">
          
          <div class="container">
              <div class="container">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">ACCUEIL</button>
                </li>
                <li class="nav-item" role="presentation">
                  <MARKETPLACE class="nav-link" id="pills-MARKETPLACE-tab" data-bs-toggle="pill" data-bs-target="#pills-MARKETPLACE" type="button" role="tab" aria-controls="pills-MARKETPLACE" aria-selected="false">MARKETPLACE</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-RDV-tab" data-bs-toggle="pill" data-bs-target="#pills-RDV" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">PRENDRE RENDEZ-VOUS</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-Employe-tab" data-bs-toggle="pill" data-bs-target="#pills-Employe" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">ESPACE DES EMPLOYES</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">CONTACT</button>
                </li>
              </ul>
              </div>
              
      </header>
      <main>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" style="background-image: url(../assets/images/bg3.jpg);background-repeat:no-repeat;background-size:cover;">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
              <h1 class="display-4 fw-normal">Bienvenue chez garage Super Cars</h1>
              <p class="lead fw-normal">
                Que shouaitez-vous faire?
              </p>
            </div>
          </div>
          <div class="container-fluid" style="background-color: black; color: #fff;">
            <div class="container px-4 py-5" id="featured-3">
              <h2 class="pb-2 border-bottom" style="justify-content: center;margin: auto;">Nos services</h2>
              <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="feature col">
                  <a href="#" class="icon-link" style="background-color: #ffffff;height: 100%;color: black; width: 100%;display: flex;flex-direction: column; justify-content: space-around;">
                  <div > 
                    <img  src="../assets/images/reparation-automobile (1).png" alt="battrie" width=50px height="50px" >                    
                  </div>
                  <div>
                    <h2>entretien</h2> 
                  </div> 
                  </a>
                </div>
                <div class="feature col">
                  <a href="#" class="icon-link" style="background-color: #ffffff;height: 100%;color: black; width: 100%;display: flex;flex-direction: column; justify-content: space-around;">
                  <div> 
                    <img  src="../assets/images/Mecanique.png" alt="battrie" width=50px height="50px" >                    
                  </div>
                  <div >
                    <h2>mecanique</h2> 
                  </div> 
                  </a>
                </div>
                <div class="feature col" style="height: 250px;">
                  <a href="#" class="icon-link" style="background-color: #ffffff;height: 100%;color: black; width: 100%;display: flex;flex-direction: column; justify-content: space-around;">
                  <div > 
                    <img  src="../assets/images/operateur.png" alt="battrie" width=50px height="50px" >                    
                  </div>
                  <div>
                    <h2>depannage</h2> 
                  </div> 
                  </a>
                </div>
              </div>
            </div>
            <div class="container px-4 py-5" id="featured-3">
              <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="feature col">
                  <a href="#" class="icon-link" style="background-color: #ffffff;height: 100%;color: black; width: 100%;display: flex;flex-direction: column; justify-content: space-around;">
                  <div > 
                    <img  src="../assets/images/galce.png" alt="battrie" width=50px height="50px" >                    
                  </div>
                  <div>
                    <h2>Vitrage</h2> 
                  </div> 
                  </a>
                </div>
                <div class="feature col">
                  <a href="#" class="icon-link" style="background-color: #ffffff;height: 100%;color: black; width: 100%;display: flex;flex-direction: column; justify-content: space-around;">
                  <div> 
                    <img  src="../assets/images/carrosserie.png" alt="battrie" width=50px height="50px" >                    
                  </div>
                  <div >
                    <h2>carrosserie</h2> 
                  </div> 
                  </a>
                </div>
                <div class="feature col" style="height: 250px;">
                  <a href="#" class="icon-link" style="background-color: #ffffff;height: 100%;color: black; width: 100%;display: flex;flex-direction: column; justify-content: space-around;">
                  <div > 
                    <img  src="../assets/images/pneus.png" alt="battrie" width=50px height="50px" >                    
                  </div>
                  <div>
                    <h2>pneus</h2> 
                  </div> 
                  </a>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="tab-pane fade" id="pills-MARKETPLACE" role="tabpanel" aria-labelledby="pills-MARKETPLACE-tab">
           <div class="container">
            <div class="row">
              <div class="col order-last">
                <div>
              <label for="customRange1" class="form-label">Prix</label>
              <input type="range" class="form-range" id="customRange1">
            </div>
              </div>
              <div class="col" style="justify-items: center;margin: auto;">
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>Categorie</option>
                <option value="1">Voitures</option>
                <option value="2">motos</option>
                <option value="3">Pieces de rechange</option>
              </select>
              </div>
              <div class="col order-first" style="justify-items: center;margin: auto;">
                <form class="w-100 me-3">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
              </form>
              </div>
            </div>
            <div class="container" style="margin: auto;justify-content: center;">
             <button type="button" class="btn btn-dark">search</button>
            </div>
          </div>
            <div class="container">
              <div class="album py-5 bg-light">
                <div class="container">
            
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                      <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Photo" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Photo</text></svg>
            
                        <div class="card-body">
                          <p class="card-text"></p>
                          <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">Prix</small>
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary">Voir</button>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                     <div class="card shadow-sm">
                       <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Photo" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Photo</text></svg>
           
                       <div class="card-body">
                         <p class="card-text"></p>
                         <div class="d-flex justify-content-between align-items-center">
                           <small class="text-muted">Prix</small>
                           <div class="btn-group">
                             <button type="button" class="btn btn-sm btn-outline-secondary">Voir</button>
                           </div>
                           
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col">
                    <div class="card shadow-sm">
                      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Photo" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Photo</text></svg>
          
                      <div class="card-body">
                        <p class="card-text"></p>
                        <div class="d-flex justify-content-between align-items-center">
                          <small class="text-muted">Prix</small>
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Voir</button>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                   <div class="card shadow-sm">
                     <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Photo" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Photo</text></svg>
         
                     <div class="card-body">
                       <p class="card-text"></p>
                       <div class="d-flex justify-content-between align-items-center">
                         <small class="text-muted">Prix</small>
                         <div class="btn-group">
                           <button type="button" class="btn btn-sm btn-outline-secondary">Voir</button>
                         </div>
                         
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                  <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Photo" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Photo</text></svg>
        
                    <div class="card-body">
                      <p class="card-text"></p>
                      <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">Prix</small>
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary">Voir</button>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                 <div class="card shadow-sm">
                   <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Photo" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Photo</text></svg>
       
                   <div class="card-body">
                     <p class="card-text"></p>
                     <div class="d-flex justify-content-between align-items-center">
                       <small class="text-muted">Prix</small>
                       <div class="btn-group">
                         <button type="button" class="btn btn-sm btn-outline-secondary">Voir</button>
                       </div>
                       
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col">
                <div class="card shadow-sm">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Photo" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Photo</text></svg>
      
                  <div class="card-body">
                    <p class="card-text"></p>
                    <div class="d-flex justify-content-between align-items-center">
                      <small class="text-muted">Prix</small>
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Voir</button>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
               <div class="card shadow-sm">
                 <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Photo" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Photo</text></svg>
     
                 <div class="card-body">
                   <p class="card-text"></p>
                   <div class="d-flex justify-content-between align-items-center">
                     <small class="text-muted">Prix</small>
                     <div class="btn-group">
                       <button type="button" class="btn btn-sm btn-outline-secondary">Voir</button>
                     </div>
                     
                   </div>
                 </div>
               </div>
             </div>
             <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Photo" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Photo</text></svg>
    
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">Prix</small>
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Voir</button>
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
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...
           <i class="uil uil-location-point"></i>
          </div>
          <div class="tab-pane fade" id="pills-RDV" role="tabpanel" aria-labelledby="pills-RDV-tab">
            <div class="container" style="background-color:rgb(229, 229, 255)">
               <h2 class="pb-2 border-bottom">Prenez rendez-vous pour l'entretien de votre voiture</h2>
               <p>Remplissez ce formulaire pour demander un rendez-vous pour un entretien. Notre conseiller prendra contact avec vous rapidement pour confirmer votre rendez-vous.</p>
               <div>
                 <div style="background-color: black;color: #fff; height: 50px;">
                    <h2>CHOISISSEZ L???INTERVENTION ?? R??ALISER</h2>
                 </div>
                 <div>
                  <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          Entretien & revision 
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckFreinage" >
                            <label class="form-check-label" for="flexCheckFreinage">
                              <img src="../assets/images/disc-brake.png" alt="d">
                              Freinage
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckBatterie" >
                            <label class="form-check-label" for="flexCheckBatterie">
                              <img src="../assets/images/8541729_car_battery_icon.png" alt="b" width="32px" height="32px">
                              Batterie
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckEchappement" >
                            <label class="form-check-label" for="flexCheckEchappement">
                              <img src="../assets/images/tuyau-dechappement.png" alt="de">
                              Echappement
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckAmortisseur" >
                            <label class="form-check-label" for="flexCheckAmortisseur">
                              <img src="../assets/images/amortisseur.png" alt="">
                              Amortisseur
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckControleTechnique" >
                            <label class="form-check-label" for="flexCheckControleTechnique">
                              <img src="../assets/images/chercher.png" alt="">
                              Controle Thechnique
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckVidange_revision" >
                            <label class="form-check-label" for="flexCheckVidange_revision">
                              <img src="../assets/images/petrole.png" alt="">
                              Vidange-revision
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckClimatisation" >
                            <label class="form-check-label" for="flexCheckClimatisation">
                              <img src="../assets/images/climatisation.png" alt="">
                              Climatisation
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          Mecanique/Diagnistique
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckMecanique_diagnostique" checked>
                          <label class="form-check-label" for="flexCheckMecanique_diagnostique">
                            <img src="../assets/images/Mecanique.png" alt="" width="32px" height="32px">
                            Mecanique / diagnostique
                          </label>
                        </div>
                       </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          Vitrage
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckVitrage" checked>
                            <label class="form-check-label" for="flexCheckVitrage">
                              <img src="../assets/images/galce.png" alt="" width="32px" height="32px">
                              Vitrage
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                          carrosserie
                        </button>
                      </h2>
                      <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckCarrosserie" checked>
                            <label class="form-check-label" for="flexCheckCarrosserie">
                              <img src="../assets/images/carrosserie.png" alt="" width="32px" height="32px">
                              Carrosserie
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                          Pneus
                        </button>
                      </h2>
                      <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckPneusHiver" >
                            <label class="form-check-label" for="flexCheckPneusHiver">
                              <img src="../assets/images/tire (1).png" alt="">
                              Pneus hiver
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckRoues_PneusHiver" >
                            <label class="form-check-label" for="flexCheckRoues_PneusHiver">
                              <img src="../assets/images/wheel.png" alt="">
                              Roues + PneusHiver
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckPneusEte" >
                            <label class="form-check-label" for="flexCheckPneusEte">
                              <img src="../assets/images/tire.png" alt="">
                              Pneus ete
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckRoues_PneusEte" >
                            <label class="form-check-label" for="flexCheckRoues_PneusEte">
                              <img src="../assets/images/wheel.png" alt="">
                              Roues + Pneus ete
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                 </div>
               </div>
               <div>
                  <div style="background-color: black;color: #fff;height: 50px;">
                    <h2>V??hicule poss??d??</h2>
                  </div>
                  <div class="container">
                    <div class="mb-3">
                      <label for="FormControlInputNum_immatriculation" class="form-label">Num immatriculation</label>
                      <input type="email" class="form-control" id="FormControlInputNum_immatriculation" placeholder="12-a-11">
                    </div>
                    <div class="mb-3">
                    <label for="DataListMarque" class="form-label">Marque</label>
                    <input class="form-control" list="datalistOptions" id="DataListMarque" >
                    <datalist id="datalistOptions">
                       <option value="Mercedes-benz">
                       <option value="BMW">
                       <option value="Audi">
                       <option value="volkswagen">
                       <option value="Porche">
                    </datalist>
                    </div>
                    <div class="mb-3">
                      <label for="FormControlInputModele" class="form-label">Modele</label>
                      <input type="text" class="form-control" id="FormControlInputModele" >
                    </div>
                   
                   <div class="mb-3">
                      <label for="FormControlInputKilomertrage" class="form-label">Kilometrage</label>
                      <input type="text" class="form-control" id="FormControlInputKilomertrage">
                   </div>
                  </div>
               </div>
               <div>
                 <div>
                 <div style="background-color: black;color: #fff; height: 50px;">
                    <h2>La DATE ET L'HORAIRE DE RENDEZ-VOUS</h2>
                  </div>
                    <div class="container">
                      <div class="container">
                          <p>Date de RDV souhaitee</p>
                      </div>
                      <div class="container">
                        <div >
                          mois
                        </div>
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>
                                  <span title="Lundi">L</span>
                                </th>
                                <th>
                                  <span title="Mardi">M</span>
                                </th>
                                <th>
                                  <span title="Mercredi">Me</span>
                                </th>
                                <th>
                                  <span title="Jeudi">J</span>
                                </th>
                                <th>
                                  <span title="Vendredi">V</span>
                                </th>
                                <th title="Samedi">S</th>
                             
                              <th>
                                <span title="Dimanche">D</span>
                              </th> 
                            </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                              </tr>
                              <tr>
                                <td>8</td>
                                <td>9</td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                              </tr>
                              <tr>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                              </tr>
                              <tr>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                              </tr>
                              <tr>
                                <td>29</td>
                                <td>30</td>
                                <td>31</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                 
                </div>
               </div>
               <div>
                <div style="background-color: black;color: #fff; height: 50px;">
                  <h2>INFORMATION DE CONTACT</h2>
                </div>
                <div class="container">
                </div>
               </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-Employe" role="tabpanel" aria-labelledby="pills-Employe-tab">
          <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">ESPACE-EMPLOYES</h1>
      <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple???s marketing pages.</p>
      <a class="btn btn-outline-secondary" href="../pages/login_emp.php">ACCES A ESPACE-EMPLOYES</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>
        </div>
      </main>
    <footer>
      <div class="container">
        <footer class="py-5">
          <div class="row">
            <div class="col-2">
              <h5>Section</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 text-muted">Home</a>
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 text-muted">Features</a>
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 text-muted">Pricing</a>
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 text-muted">FAQs</a>
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 text-muted">About</a>
                </li>
              </ul>
            </div>

            <div class="col-4 offset-1">
              <form>
                <h5>Subscribe to our newsletter</h5>
                <p>Monthly digest of whats new and exciting from us.</p>
                <div class="d-flex w-100 gap-2">
                  <label for="newsletter1" class="visually-hidden"
                    >Email address</label
                  >
                  <input
                    id="newsletter1"
                    type="text"
                    class="form-control"
                    placeholder="Email address"
                  />
                  <button class="btn btn-primary" type="button">
                    Subscribe
                  </button>
                </div>
              </form>
            </div>
          </div>

          <div class="d-flex justify-content-between py-4 my-4 border-top">
            <p>&copy; 2021 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
              <li class="ms-3">
                <a class="link-dark" href="#"
                  ><svg class="bi" width="24" height="24">
                    <use xlink:href="#twitter" /></svg>
                  </a>
              </li>
              <li class="ms-3">
                <a class="link-dark" href="#">
                  <svg class="bi" width="24" height="24">
                    <use xlink:href="#instagram" /></svg>
                  </a>
              </li>
              <li class="ms-3">
                <a class="link-dark" href="#">
                  <svg class="bi" width="24" height="24">
                    <use xlink:href="#facebook" />
                  </svg>
                  </a>
              </li>
            </ul>
          </div>
        </footer>
      </div>
    </footer>
  </body>
</html>
