    @include('layouts.header')
    <br>
    <form action="{{url('/EditTemple/{slug}')}}" method="post">
    @csrf
    <div class="container">
    <p><b>Temple Name</b></p>
    <input class="form-control" name="temple_name" id="temple_name" value="{{$temple[0]['temple_name']}}" >
    <br>
    <p><b>Time Period</b></p>
    <input class="form-control" name="time_period" id="time_period" value="{{$temple[0]['time_period']}}" >
    <br>
    <p><b>Patron</b></p>
    <input class="form-control" name="patron" id="patron" value="{{$temple[0]['patron']}}" >
    <p><b>&nbsp;Deity</b></p>
    <input class="form-control" name="deity" id="deity" value="{{$temple[0]['deity']}}" >
    <p><b>&nbsp;Location</b></p>
    <input class="form-control" name="location" id="location" value="{{$temple[0]['location']}}" >
    <br>
    <p><b>Category</b></p>
    <input class="form-control" name="category" id="category" value="{{$temple[0]['category']}}" >
    <p><b>&nbsp;City</b></p>
    <input class="form-control"  name="city" id="city" value="{{$temple[0]['city']}}" >
    <p><b>&nbsp;Active</b></p>
    @if($temple[0]['active']==1)
    <select name="active" id="active" class="form-control">
    <option value="1" selected>Active</option>
    <option value="0">Disable</option>
    </select>
    @else
    <select name="active" id="active" class="form-control">
    <option value="1" >Active</option>
    <option value="0" selected>Disable</option>
    </select> @endif
    <br>
    <div class="card">
    <div class="card-body">
    <h4 class="header-title">Temple Banner</h4>
    <div class="single-table">
    <div class="table-responsive">
    <table class="table text-center">
    <thead class="text-uppercase bg-info">
    <tr class="text-white">
    <th>Sr No</th>
    <th>Image</th>
    <th>delete</th>
    </tr>
    </thead>
    <tbody>
    @php $i=0; @endphp
    @foreach($temple as $banner_image)
    @foreach($banner as $banner_img)
    @php $i++; @endphp

    <tr>
    <th scope="row">{{$i}}</th>
    <td><img src="{{url('images')}}/{{$banner_img}}" style="width:100px;"><a href=""></a></td>
    <td><input type="file" selected="{{$banner_img}}" class="form-control"></td>
    </tr>
    @endforeach
    @endforeach
    </tbody>
    </table>
    <br>
    <p><b>About Temple</b></p>
    <textarea class="form-control" id="about_temple" name="about_temple" width="100%" height="150" ckeditor="true" maxlength="20000" ismandatory="false" >{{$about_temple}}</textarea>    
    </div>
    <br>
    <div class="button" style="text-align:center">
    <button type="submit" class="btn btn-primary">Save & Continue</button>
    </div>
    </form>
    @include('layouts.footer')