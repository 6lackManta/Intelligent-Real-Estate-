@extends("frontend.app")
@section('title') {{ "Land Portal Login" }} @endsection
@section('content')

<<div class="product-model">   
   <div class="container">
      <ol class="breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li class="active">Plots/Lands for Sale</li>
     </ol>
      <h2>ALL</h2>     
     <div class="col-md-9 product-model-sec">
      @foreach ($lands as $land)
        {{-- expr --}}
           <a href="{{url('lands/single/'.$land->id)}}"><div class="product-grid love-grid">
            <div class="more-product"><span> </span></div>            
            <div class="product-img b-link-stripe b-animate-go  thickbox">
              <img style="siz" src="{{ asset('images/'.$land->image) }}"  class="img-responsive" alt=""/>
              <div class="b-wrapper">
              <h4 class="b-animate b-from-left  b-delay03">             
              <button class="btns"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Quick Vsiew</button>
              </h4>
              </div>
            </div></a>            
            <div class="product-info simpleCart_shelfItem">
              <div class="product-info-cust prt_name">
                <h4>{{$land->title}}</h4>
                <p>{{$land->country}}</p>
                <span class="item_price">{{$land->price}}</span>               
                <input type="text" class="item_quantity" value="1" />
                <input type="button" class="item_add items" value="ADD">
              </div>                          
              <div class="clearfix"> </div>
            </div>
          </div>  
      @endforeach
          
           
          
          
          
          
          
          
          
          
          
          
          
      </div>
      <div class="rsidebar span_1_of_left">
         <section  class="sky-form">
           <div class="product_right">
             <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Categories</h4>
             <div class="tab1">
               <ul class="place">               
                 <li class="sort">Furniture</li>
                 <li class="by"><img src="" " alt=""></li>
                  <div class="clearfix"> </div>
                </ul>
               <div class="single-bottom">            
                  <a href="#"><p>Sofas</p></a>
                  <a href="#"><p>Fabric Sofas</p></a>
                  <a href="#"><p>Love Seats</p></a>
                  <a href="#"><p>Dinning Sets</p></a>
                 </div>
                </div>              
              <div class="tab2">
               <ul class="place">               
                 <li class="sort">Decor</li>
                 <li class="by"><img src="{{asset('frontend/images/do.png')}}" alt=""></li>
                  <div class="clearfix"> </div>
                </ul>
               <div class="single-bottom">            
                  <a href="#"><p>Shelves</p></a>
                  <a href="#"><p>Wall Racks</p></a>
                  <a href="#"><p>Curios</p></a>
                  <a href="#"><p>Ash Trays</p></a>
                 </div>
                </div>
              <div class="tab3">
               <ul class="place">               
                 <li class="sort">Lighting</li>
                 <li class="by"><img src="{{asset('frontend/images/do.png')}}" alt=""></li>
                  <div class="clearfix"> </div>
                </ul>
               <div class="single-bottom">            
                  <a href="#"><p>Table Lamps</p></a>
                  <a href="#"><p>Tube Lights</p></a>
                  <a href="#"><p>Study Lamps</p></a>
                  <a href="#"><p>Usb Lamps</p></a>
                 </div>
                </div>
              <div class="tab4">
               <ul class="place">               
                 <li class="sort">Bed & Bath</li>
                 <li class="by"><img src="{{asset('frontend/images/do.png')}}" alt=""></li>
                  <div class="clearfix"> </div>
                </ul>
               <div class="single-bottom">            
                  <a href="#"><p>Towels</p></a>
                  <a href="#"><p>Bath Roles</p></a>
                  <a href="#"><p>Mirrors</p></a>
                  <a href="#"><p>Soap Stands</p></a>
                 </div>
                </div>
              <div class="tab5">
               <ul class="place">               
                 <li class="sort">Fabric</li>
                 <li class="by"><img src="{{asset('frontend/images/do.png')}}" alt=""></li>
                  <div class="clearfix"> </div>
                </ul>
               <div class="single-bottom">            
                  <a href="#"><p>Sofas</p></a>
                  <a href="#"><p>Fabric Sofas</p></a>
                  <a href="#"><p>Beds</p></a>
                  <a href="#"><p>Relax Chairs</p></a>
                 </div>
                </div>
              
              <!--script-->
            <script>
              $(document).ready(function(){
                $(".tab1 .single-bottom").hide();
                $(".tab2 .single-bottom").hide();
                $(".tab3 .single-bottom").hide();
                $(".tab4 .single-bottom").hide();
                $(".tab5 .single-bottom").hide();
                
                $(".tab1 ul").click(function(){
                  $(".tab1 .single-bottom").slideToggle(300);
                  $(".tab2 .single-bottom").hide();
                  $(".tab3 .single-bottom").hide();
                  $(".tab4 .single-bottom").hide();
                  $(".tab5 .single-bottom").hide();
                })
                $(".tab2 ul").click(function(){
                  $(".tab2 .single-bottom").slideToggle(300);
                  $(".tab1 .single-bottom").hide();
                  $(".tab3 .single-bottom").hide();
                  $(".tab4 .single-bottom").hide();
                  $(".tab5 .single-bottom").hide();
                })
                $(".tab3 ul").click(function(){
                  $(".tab3 .single-bottom").slideToggle(300);
                  $(".tab4 .single-bottom").hide();
                  $(".tab5 .single-bottom").hide();
                  $(".tab2 .single-bottom").hide();
                  $(".tab1 .single-bottom").hide();
                })
                $(".tab4 ul").click(function(){
                  $(".tab4 .single-bottom").slideToggle(300);
                  $(".tab5 .single-bottom").hide();
                  $(".tab3 .single-bottom").hide();
                  $(".tab2 .single-bottom").hide();
                  $(".tab1 .single-bottom").hide();
                })  
                $(".tab5 ul").click(function(){
                  $(".tab5 .single-bottom").slideToggle(300);
                  $(".tab4 .single-bottom").hide();
                  $(".tab3 .single-bottom").hide();
                  $(".tab2 .single-bottom").hide();
                  $(".tab1 .single-bottom").hide();
                })  
              });
            </script>
            <!-- script -->          
         </section>
                     
           <section  class="sky-form">
            <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Price</h4>
              <ul class="dropdown-menu1">
                 <li><a href="">                               
                <div id="slider-range"></div>             
                <input type="text" id="amount" style="border: 0; font-weight: NORMAL;   font-family: 'Arimo', sans-serif;" />
               </a></li>      
              </ul>
           </section>
           <!---->
           <script type="text/javascript" src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
           <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery-ui.css') }}">
          <script type='text/javascript'>//<![CDATA[ 
          $(window).load(function(){
           $( "#slider-range" ).slider({
                range: true,
                min: 0,
                max: 400000,
                values: [ 8500, 350000 ],
                slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                }
           });
          $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

          });//]]> 
          </script>
           <!---->
      
              <section  class="sky-form">
            <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Brand</h4>
              <div class="row row1 scroll-pane">
                <div class="col col-4">
                  <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Roadstar</label>
                </div>
                <div class="col col-4">
                  <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Tornado</label>
                  <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kissan</label>
                  <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Oakley</label>
                  <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Manga</label>
                  <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Wega</label>
                  <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kings</label>
                  <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Zumba</label>
                </div>
              </div>
           </section>     
       </div>        
        </div>
    </div>
</div>  
@endsection
