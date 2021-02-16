@if(!$multiple) <label for="listingTitle">Cities</label> @endif

<select name="city_id" id="city_id" class="form-control" @if($multiple) multiple @endif>
    <option value="">Select City</option>
    @foreach($cities as $city)
        <option value="{{$city->id.'##'.$city->city_name}}">{{$city->city_name}}</option>
    @endforeach
</select>