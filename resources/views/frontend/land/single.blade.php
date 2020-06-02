@extends("frontend.app")
@section('title') {{ "Land Portal Login" }} @endsection
@section('content')
<div class="col-md-9 det">
          <div class="single_left">
           <div class="grid images_3_of_2">
             <ul id="etalage">
              <li>
                <a href="optionallink.html">
                  <img class="etalage_thumb_image" src="{{ asset('images/'.$land->image) }}" class="img-responsive" />
                  <img class="etalage_source_image"src="{{ asset('images/'.$land->image) }}" class="img-responsive" title="" />
                </a>
              </li>
              <li>
                <img style="width: '500'" class="etalage_thumb_image"src="{{ asset('images/'.$land->image) }}" class="img-responsive" />
                <img class="etalage_source_image"src="{{ asset('images/'.$land->image) }}" class="img-responsive" title="" />
              </li>             
                <li>
                <img class="etalage_thumb_image"src="{{ asset('images/'.$land->image) }}" class="img-responsive"  />
                <img class="etalage_source_image"src="{{ asset('images/'.$land->image) }}"class="img-responsive"  />
              </li>
             </ul>
             <div class="clearfix"></div>   
              </div>
          </div>
          <div class="single-right">
           <h3>{{$land->title}}</h3>
           <div class="id"><h4>{{$land->type}}</h4></div>
            <form action="" class="sky-form">
                 <fieldset>         
                 <section>
                   <div class="rating">
                  <input type="radio" name="stars-rating" id="stars-rating-5">
                  <label for="stars-rating-5"><i class="icon-star"></i></label>
                  <input type="radio" name="stars-rating" id="stars-rating-4">
                  <label for="stars-rating-4"><i class="icon-star"></i></label>
                  <input type="radio" name="stars-rating" id="stars-rating-3">
                  <label for="stars-rating-3"><i class="icon-star"></i></label>
                  <input type="radio" name="stars-rating" id="stars-rating-2">
                  <label for="stars-rating-2"><i class="icon-star"></i></label>
                  <input type="radio" name="stars-rating" id="stars-rating-1">
                  <label for="stars-rating-1"><i class="icon-star"></i></label>
                  <div class="clearfix"></div>
                 </div>
                </section>
                </fieldset>
            </form>
            <div class="cost">
             <div class="prdt-cost">
               <ul>
                        
                 <li>Sellling Price:</li>
                 <li class="active">Rs {{$land->price}} PKR</li>
                 <a href="#">BUY NOW</a>
               </ul>
             </div>
           
             <div class="clearfix"></div>
            </div>
            <div class="item-list">
             <ul>
               <li>Country :  {{$land->country}}</li>
               <li>City : {{$land->state}}</li>
               <li>State :{{ $land->city }}</li>
               <li>Area: {{$land->area}} {{$land->unit}}</li>
             </ul>
            </div>
            <div class="single-bottom1">
            <h6>Description</h6>
            <p class="prod-desc">{{$land->desc}}</p>
           </div>          
          </div>
          <div class="clearfix"></div>
                        
        </div>
 
@endsection
