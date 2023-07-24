@include('layouts.header')
<form action="{{url('/AddTempleImage')}}" method="post" enctype="multipart/form-data">
    @csrf
<div class="container">
    <p><b>Select the Temple</b></p>
    <select name="temple_select" class="form-control" id="temple_select">
    @if($data>" ")
    @foreach($data as $datas)
    <option value="{{$datas['slug']}}">{{$datas['temple_name']}}</option>
    @endforeach
    @else
    <option value="">No Data Found</option>
    @endif
    </select>
    <br>
    <table>
    <tr>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    </tr>
    <tr>
    <td>
    <div class="form-floating">
    <p><b>Image Title</b></p>
    <input type="text" class="form-control"  name="image_title[]" id="image_title"  placeholder="Enter Image Title">
    </div> 
    </td>
    <td>
    <div class="form-floating">
    <p><b>Select Temple Image<b></p>
    <input type="file" class="form-control" placeholder="" name="image[]" id="image" multiple>
    </div>  
    </td>
    <td>
    <div class="form-floating">
    <p><b>Enter Temple Description</b></p>
    </div>
    <input type="text" class="form-control"  name="desc[]" id="desc[]"  placeholder="Enter Image description" style="width: 500px;">
    </div>
    </td>
    <td>
    <p><b>To Add</b></p>
    <button type="button" class="btn btn-success" id="add">Add</button>
    </td>
    </tr>
    <tr>
    <table>
    <div class="show_item">

    </div> 
    <br>
    <div class="button" style="text-align:center;">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@include('layouts.footer')
<script>
    $(document).ready(function(){
        $('#add').click(function(e){
        e.preventDefault();
        $('.show_item').prepend('<table><tr><th></th><th></th><th></th><th></th></tr><tr><td><div class="form-floating">\
        <p><b>Image Title</b></p>\
        <input type="text" class="form-control" name="image_title[]" id="image_title" placeholder="Enter Image Title"></div></td><td>\
        <div class="form-floating"><p><b>Select Temple Image<b></p>\
        <input type="file" class="form-control" placeholder="" name="image[]" id="image"></div></td><td>\
        <div class="form-floating"><p><b>Enter Temple Description</b></p></div>\
        <input class="form-control" name="desc[]" id="desc" placeholder="Enter temple Description" style="width: 500px;">\
        </div></td><td><p><b>To Add</b></p><button class="btn btn-danger remove" id="remove">Remove</button></td></tr><table>');
        });

        $(document).on('click','.remove',function(e){
            e.preventDefault();
            let row_item =$(this).parent().parent();
            $(row_item).remove();
        });

        
});
</script>