<?php $this->layout('theme', ['title' => 'Início']); ?>

       
<div class="d-flex justify-content-center align-items-center text-white full_screen" id="img_banner">
    <div class="row d-flex justify-content-center show">
        <div class="col-md-12 text-center p-5">
            <img src="././src/images/logo.png" class="show1" height="80" width="80" alt="" srcset="">
            <h1 class="display-6 fw-semibold show1">Seja bem vindo ao Nova Russas tênis clube</h1>
            <h2 class="display-6 fw-semibold show2">Vamos começar a sua reserva</h2>            
        </div>
    </div>            
</div>

<div class="bar_top"></div>
<div class="full_screen d-flex align-items-center justify-content-center" id="area_escolha">
    <div class="row">
        <div class="col-md-12">
            <div class="center">
                <img src="././src/images/logo.png" height="80" width="80" alt="" srcset="">
                <h2 class="display-6 fw-semibold"> Selecione a quadra desejada</h2>
            </div>            
           
            <div class="card p-3">   
                <div id="carouselExampleInterval" class="carousel slide slide_carrousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                        <img src="././src/images/quadra1.jpg" class="d-block slide_carrousel_item w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                        <img src="././src/images/quadra2.jpg" class="d-block slide_carrousel_item w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="././src/images/quadra3.jpg" class="d-block slide_carrousel_item w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>    
            </div> 
           
        </div>
    </div>
</div>
