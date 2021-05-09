@extends('frontend.layouts.user_panel')

@section('panel_content')

    <div class="aiz-titlebar mt-2 mb-4">
      <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="h3">{{ translate('Your Custom order') }}</h1>
        </div>
      </div>
    </div>



    <div class="card">
        <div class="card-header row gutters-5">
            <div class="col">
                <h5 class="mb-md-0 h6">{{ translate('All Custom order') }}</h5>
            </div>
            <div class="col-md-3">
                <div class="input-group input-group-sm">
                   
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table aiz-table mb-0">
                <thead>
                    <tr>
         
             
                        <th width="30%">{{ translate('Customer Name')}}</th>
                        <th data-breakpoints="md">{{ translate('Product Name')}}</th>
                        <th data-breakpoints="md">{{ translate('Product Link')}}</th>
                        <th data-breakpoints="md">{{ translate('Qty')}}</th>
                        <th data-breakpoints="md">{{ translate('Price Offered')}}</th>
                        <th data-breakpoints="md">{{ translate('Accept/Reject')}}</th>
                     
                    </tr>
                </thead>
                <tbody>
                @foreach($listorders as $order)
                        <tr>
                            <td>{{$order->user_name}}</td>
                            <td>
                             {{$order->product_name}}
                            </td>
                            <td>
                            <a href="{{$order->product_slug}}" >Click to View Product</a>
                            </td>
                            <td>
                            {{$order->quantity}}
                            </td>
                             <td>
                           {{$order->offer_price}}
                            </td>
                          
                         
                            <td>
                                  <button type="button" class="btn btn-primary btn-sm">Approve</button>
                               <button type="button" class="btn btn-danger btn-sm">Reject</button>

                            </td>
                       
                         
                        </tr>
                       @endforeach
                </tbody>
            </table>
           
        </div>
    </div>

@endsection



