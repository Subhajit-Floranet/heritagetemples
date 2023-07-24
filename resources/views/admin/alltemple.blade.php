@include('layouts.header')
<div class="container">
            <div class="card">
            <div class="card-body">
            <h4 class="header-title">Temple Info</h4>
            <div class="single-table">
            <div class="table-responsive">
            <table class="table text-center">
            <thead class="text-uppercase bg-info">
            <tr class="text-white">
            <th scope="col">Sr.No</th>
            <th scope="col">Temple name</th>
            <th scope="col">Temple Category</th>
            <th scope="col">Period</th>
            <th scope="col">City</th>
            <th scope="col">view</th>
            <th scope="col">edit</th>
            <th scope="col">Delete</th>
            <th scope="col">ActivE</th>
            </tr>
            </thead>
            <tbody>
            @php $i=0; @endphp
            @foreach($data as $datas)
            @php $i++ @endphp
            <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$datas['temple_name']}}</td>
            <td>{{$datas['category']}}</td>
            <td>{{$datas['time_period']}}</td>
            <td>{{$datas['city']}}</td>
            <td><a href="{{url('/ViewTemple')}}/{{$datas['slug']}}"><i class="ti-shift-right"></i></a></td>
            <td><a href="{{url('/EditTemple')}}/{{$datas['slug']}}"><i class="fa fa-edit"></i></a></td>
            <td><a href="{{url('/DeleteTemple')}}/{{$datas['slug']}}"><i class="ti-trash"></i></a></td>
            @if($datas['active']==1)
            <td><a href="{{url('/activate')}}/{{$datas['slug']}}" class="btn btn-flat btn-success mb-3">Active</a>
            @else            
            <td><a href="{{url('/activate')}}/{{$datas['slug']}}" class="btn btn-flat btn-danger mb-3">Deactive</a>
            @endif
            </tr>
            @endforeach
            </tbody>
            </table>
            </div>
            </div>
            </div>
            </div>
</div>
@include('layouts.footer')