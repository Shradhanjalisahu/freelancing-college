<div class="search-result-bar">
    <h6 id="total-results">
        @if($total > 0)
            We found total {{$total}} college(s) for you
        @else 
            OOPS! no colleges found, try different filters

        @endif
        
    </h6>
    
</div>
<div class="row" >
    @foreach($colleges as $college)
        <div class="col-md-4">
            <div class="card rounded-0 card-hover-overlay card-listing" data-lat="-33.922125" data-lag="151.159277" data-id="1">
                <div class="position-relative">
                    <img class="card-img rounded-0 listing-img" src="https://images.unsplash.com/photo-1553717361-9c5b614f6975?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8Y29sbGVnZSUyMGJ1bGRpbmdzfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="ace-college-of-engineering--management-agra.jpg" class="img-fluid mr-3" style="height:180px; max-width:230px; font-size: 1rem !important;">
                    <div class="card-img-overlay">
                        
                        <h6 class="listing-title">
                            <a href="{{url('collegedetail/' . $college->url)}}">
                               <p class="text-white listing-address">
                                
                                {{ucfirst($college->collegeName)}}
                            </p>
                            </a>
                        </h6>
                        <p class="text-white listing-location">{{ucfirst($college->location)}}</p>
                    </div>
                </div>
                <div class="card-footer bg-transparent">
                    <ul class="list-unstyled d-flex mb-0 py-2">
                        <li class="text-primary">
                            {{$college->course}}
                        </li>
                    
                    </ul>
                </div>
            </div>
        </div>
    @endforeach


</div>