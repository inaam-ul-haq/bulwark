@extends('layouts.app')

@section('style')

@endsection

@section('content')
<div class="container">
     <div class="dashboard-right-scroll-contetn container-fluid">
         @if(session()->has('alert-success'))
            <div class="alert alert-success">
                {{ session()->get('alert-success') }}
            </div>
        @endif
    <div class="row">
      <div class="col-lg-6 col-md-6  col-sm-6 col-8 my-auto">
          <div class="dashboard-right-title-tag">
              <h6 class="mb-0">All Leads</h6>
           </div>
      </div>
       <div class="col-lg-6 col-md-6 col-sm-6 col-4 text-right">
            <!-- <button type="file"> Upload</button>   -->

{{--             <a href="{{ route('admin.create.customer') }}"><label class="choose-file"><i class="fa fa-user-plus"></i> Add </label></a>--}}
        </div>
   </div>
         <hr>
               <div class="dasboard-right-main-contetent-area">
        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                     <th style="width:20px;"><input type="checkbox"></th>
                     <th style="width:20px;">No.</th>
                     <th>Customer Name</th>
                     <th>Email</th>
                     <th>Website</th>
                     <th>Action</th>
                </tr>
            </thead>
                <tbody>
                  @php
                    $i = 1;
                  @endphp
                  @foreach($customers as $customer)


                    <tr>
                        <td ><input type="checkbox"></td>
                        <td>{{ $i++ }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{$customer->get_website->first()->website}}</td>
                        <td class="text-right">
{{--                            <button class="btn inline-btn tablebtn recent-user-detail-btn"><i class="fa fa-download"></i></button>--}}
{{--                            <button class="btn inline-btn tablebtn bg-danger recent-user-detail-btn"><i class="fa fa-trash"></i></button>--}}
                        </td>
                    </tr>
                    @endforeach

                </tbody>
        </table>

    </div>
</div>
@endsection


@section('script')

@endsection
