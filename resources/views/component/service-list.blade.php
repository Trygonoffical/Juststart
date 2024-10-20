<style>
.service-card:hover{
  ssstransform: translateY(-0.10rem);
  animation: slideUp 1.0s;
  box-shadow: 0 0 0 0.05rem rgb(200 212 229), 0 0 1.25rem rgb(185 207 255) !important;
}

/* .home-service-list .overlay a img{
  width:auto !important;
  height:auto !important;
} */

.home-service-list .overlay a h2{
  font-size:20px !important;
}
.home-service-list .overlay a h2, .home-service-list .overlay a p{
  color:#262b32 !important;
}
.home-service-list .overlay .custom-from-top{
  bottom: 40%;
  padding: 0 1rem;
}
.home-service-list .overlay .custom-from-bottom{
  bottom: 10%;
  padding: 0 1rem;
}

.home-service-list .overlay.color span.bg {
    /* background: rgba(53 53 54 / 70%); */
}
.home-service-list .overlay figcaption p.from-bottom-button {
    text-align:center;
}
.home-service-list .overlay figcaption p.from-bottom-button a.btn{
    /* max-width: 300px; */
}
</style>


<style>
.d-card{
  position: relative;
  overflow: hidden;
  background: #ffffff;
  border-radius: 8px;
  -moz-border-radius: 8px;
  -webkit-border-radius: 8px;
  border: solid 1px #dddddd;
  background-size: 100%; background-repeat: no-repeat;
}

.d-card:hover{
  border: solid 1px #ff5874;
}

.d-card .d-card-icon{
  text-align: center;
  position: absolute;
  width: 64px;
  height: 100%;
  font-size: 36px;
  color: #FFF;
  padding: 12px;
  border-radius: 0px;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  /* background: #037dde;
  background: linear-gradient(180deg, rgb(3 125 222) 20%, rgba(56, 177, 237, 0) 100%); */
  background: #ff5874;
  background: linear-gradient(180deg, rgb(255 88 116) 20%, rgba(56, 177, 237, 0) 100%)
}

.d-card .d-card-icon img{
  width:40px;
}

.d-card .text{
  color: #343f52;
  font-size: 15px;
  padding: 25px;
  padding-left: 90px;
  background-size: 100%;
  background-repeat: no-repeat;
}
</style>

<section class="wrapper mb-8">
<div class="container pt-14 pt-md-16">

  <div class="row text-center">
    <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
      <h3 class="fs-16 text-uppercase text-muted mb-3">What We Do?</h3>
      <h3 class="display-2 font-bolder mb-10 px-xl-10">Our Popular Services</h3>
    </div>
    <!-- /column -->
  </div>  

  <div class="row g-custom-x" style="background-size: 100%; background-repeat: no-repeat;">
      <div class="col-lg-6 col-md-6 mb-6" style="background-size: 100%; background-repeat: no-repeat;">
          <div class="d-card" >
            <a href="{{ url('service/private-limited-company-registration') }}">
              <span class="d-card-icon">
                <img src="{{asset('images/service-icon/3.png')}}" alt="Service Icon">
              </span>
              <div class="text" >
                <h4>Private Limited Company Registration</h4>
                Find the most reliable Private Limited Company Registration in India with Juststart. Increase your business authenticity and trustworthiness and move ahead on a sustainable path of growth.
              </div>
            </a>
          </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-6" style="background-size: 100%; background-repeat: no-repeat;">
          <div class="d-card" >
            <a href="{{ url('service/one-person-company-opc-registration') }}">
              <span class="d-card-icon">
                <img src="{{asset('images/service-icon/2.png')}}" alt="service icon">
              </span>
              <div class="text" >
                <h4>One Person Company Registration</h4>
                Get your One Person Company registered in India easily with our expert & comprehensive registration services. Elevate your one man army game and embrace your entrepreneurship journey.
              </div>
            </a>
          </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-6" style="background-size: 100%; background-repeat: no-repeat;">
          <div class="d-card" >
            <a href="{{ url('service/llp-registration-india') }}">
              <span class="d-card-icon">
                <img src="{{asset('images/service-icon/1.png')}}" alt="Limited Liability Partnership Registration">
              </span>
              <div class="text" >
                <h4>Limited Liability Partnership Registration</h4>
                Avail of our expert LLP Registration service in India, & ensure infinite growth of your startup/ business with limited liability. Enjoy an easy, precise and quick registration process with our end-to-end solution.
              </div>
            </a>
          </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-6" style="background-size: 100%; background-repeat: no-repeat;">
          <div class="d-card" >
            <a href="{{ url('service/trademark-registration-india') }}">
              <span class="d-card-icon">
                <img src="{{asset('images/service-icon/1.png')}}" alt="Trademark Registration">
              </span>
              <div class="text" >
                <h4>Trademark Registration</h4>Find expert & legitimate professional Trademark Registration with us to safeguard your business/profession’s unique identity including name, mark, design, logo, products/services, etc. to keep it stand out.
              </div>
            </a>
          </div>
      </div>                        
  </div>

</div>
</section>

