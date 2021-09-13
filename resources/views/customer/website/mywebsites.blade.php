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

             @php
                 $websites_detail = \App\Models\Website::where(['user_id' => Auth::user()->id, 'website_data' => NULL])->get();
                 

                 if($websites_detail->count() > 0){
                     echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                         <h6>Please provide Website credentails so that we continue</h6>
                         <ol>";
                             foreach($websites_detail as $web){
                                 echo "<li><a href='".route('website.details', $web->id)."'><u>$web->website</u></a></li>";
                             }
                     echo "</ol>
                         <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                             <span aria-hidden='true'>&times;</span>
                         </button>
                     </div>";
                 }
             @endphp
    <div class="row">
      <div class="col-lg-6 col-md-6  col-sm-6 col-8 my-auto">
          <div class="dashboard-right-title-tag">
              <h6 class="mb-0">My Websites</h6>
           </div>
      </div>
       <div class="col-lg-6 col-md-6 col-sm-6 col-4 text-right">
            <!-- <button type="file"> Upload</button>   -->

             {{-- <a href="{{ route('customer.generate.ticker') }}"><label class="choose-file"><i class="fa fa-pencil"></i> Generate Ticket </label></a> --}}
        </div>
   </div>
         <hr>
               <div class="dasboard-right-main-contetent-area">
        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                     <th style="width:20px;"><input type="checkbox"></th>
                     <th style="width:20px;">No.</th>
                     <th>Website</th>
                     <th>Subscription Date</th>
                     <th>Amount</th>
                     <th>Payment</th>
                     <th>Action</th>
                </tr>
            </thead>
                <tbody>
                  @php
                    $i = 1;
                  @endphp
                  @foreach($websites as $website)


                    <tr>
                        <td ><input type="checkbox"></td>
                        <td>{{ $i++ }}</td>
                        <td>{{ $website->website }}</td>
                        <td>{{ $website->subscription_date }}</td>
                        <td>${{$website->amount}}</td>
                        <td>{{$website->payment}}</td>
                        <td class="text-right">
                            <a href="{{ route('customer.website.detail', $website->id) }}"><button class="btn inline-btn tablebtn recent-user-detail-btn"><i class="fa fa-eye"></i></button></a>
                            <!-- <button class="btn inline-btn tablebtn bg-danger recent-user-detail-btn"><i class="fa fa-trash"></i></button> -->
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
