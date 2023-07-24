@include('layouts.header')
<form action="{{url('/')}}" method="post">
<div class="container">
<div class="card">
    <div class="card-body">
    <h4 class="header-title">Temple Image</h4>
    <div class="single-table">
    <div class="table-responsive">
    <table class="table text-center">
    <thead class="text-uppercase bg-info">
    <tr class="text-white">
    <th>Sr No</th>
    <th>Image Title</th>
    <th>Image Description</th>
    <th>Image</th>
    <th>delete</th>
    </tr>
    </thead>
    <tbody>
    @php $i=0; @endphp
    @foreach($temple_image as $image)
    @php $i++; @endphp
    <tr>
    <th scope="row">{{$i}}</th>
    <td>@foreach($image_title as $title)<input name ="image_title[]" id="image_title" class="form-control" value="{{$title}}" style="width: 300px;"><a href=""></a>@endforeach</td>
    <td>@foreach($description as $desc)<input name ="desc[]" id="desc" class="form-control" value="{{$desc}}" style="width: 300px;"><a href=""></a>@endforeach</td>
    <td>@foreach($images as $img)<img src="{{url('images')}}/{{$img}}" style="width:100px;"><a href=""></a>@endforeach</td>
    <td><i class="ti-trash"></i></td>
    </tr>
    @endforeach
    </tbody>
    </table>
    <input type="file" name="image[]" id="image"  class="form-control" multiple>
    <br>
    
    <input type="file" name="image[]" id="image"  class="form-control" multiple>
</div>
</form>
@include('layouts.footer')