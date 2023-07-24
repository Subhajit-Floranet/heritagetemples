@include('layouts.header')
<br>
<div class="container">
   <p><b>Temple Name</b></p>
    <input class="form-control" value="{{$temple[0]['temple_name']}}" disabled>
    <br>
    <p><b>Time Period</b></p>
    <input class="form-control" value="{{$temple[0]['time_period']}}" disabled>
    <br>
    <p><b>Patron</b></p>
    <input class="form-control" value="{{$temple[0]['patron']}}" disabled>
    <p><b>&nbsp;Deity</b></p>
    <input class="form-control" value="{{$temple[0]['deity']}}" disabled>
    <p><b>&nbsp;Location</b></p>
    <input class="form-control" value="{{$temple[0]['location']}}" disabled>
    <br>
    <p><b>Category</b></p>
    <input class="form-control" value="{{$temple[0]['category']}}" disabled>
    <p><b>&nbsp;City</b></p>
    <input class="form-control" value="{{$temple[0]['city']}}" disabled>
    <p><b>&nbsp;Active</b></p>
    @if($temple[0]['active']==1)
    <input class="form-control" value="Active" disabled>   
    @else
    <input class="form-control" value="Disable" disabled>   
    @endif
    <table>
    <tr><th>Image Title<th></tr>
    <tr> @if($image_title > "")
    @foreach($image_title as $title)<td><input class="form-control" value="{{$title}}" disabled >
    </td>  @endforeach
    @endif</tr>
    </table>
    <table>
    <tr><th>Image Description<th></tr>
    <tr> @if($description > "")
    @foreach($description as $desc)<td><input class="form-control" value="{{$desc}}" disabled >
    </td> 
    @endforeach
    @endif</tr>
    </table>
    <table>
    <tr><th>Temple Images<th></tr>
    <tr> @if($image > "")
    @foreach($image as $img)<td><img src="{{url('images')}}//{{$img}}" style="width:150px;">
    </td> 
    @endforeach
    @endif</tr>
    </table>
    <table>
    <tr><th>Temple Banners<th></tr>
    <tr> 
    @if($banner > "")
    @foreach($banner as $img)<td><img src="{{url('images')}}//{{$img}}" style="width:150px;">
    </td> 
    @endforeach
    @endif
</tr>
    </table>
    <p><b>About Temple</b></p>
    <textarea class="form-control" id="about_temple" name="about_temple" width="100%" height="150" ckeditor="true" maxlength="20000" ismandatory="false" disabled>{{$about_temple}}</textarea>    
    </div>
@include('layouts.footer')