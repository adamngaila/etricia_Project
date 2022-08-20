@extends('layouts.bill')
@section('title')
Etricia | Bills
@endsection
@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header" style="padding: 0px">
            <div class="tab">
               <button class="tablinks" onclick="openCity(event, 'bill')">Bill History</button>
               <button class="tablinks" onclick="openCity(event, 'payments')">Payment History</button>
            </div>
         </div>
              <div class="card-body ">
            <div id="bill" class="tabcontent active">
               <h5>Bills History</h5>
               <table class="table table-striped table-bordered" style="font-size: 11px;">
                  <thead>
                     <tr>
                        <th>Date</th>
                        <th>Bill ref</th>
                        <th>Consumption Wh</th>
                        <th>Cost Tzs</th>
                     </tr>
                  </thead>
                  <tbody>
                    @foreach($billl_list as $bill)
                     <tr>
                        <td>{{$bill->updated_at}}</td>
                        <td> {{$bill->CostRef}}</td>
                        <td> {{$bill->Consumption}}</td>
                        <td> {{$bill->ConsumtionCost}}</td>
                     </tr>

                    @endforeach
                  </tbody>
               </table>
               {{$billl_list-> links()}}
            </div>
              <div id="payments" class="tabcontent">
               <h5 class="title">Payment History</h5>
            </div>
              </div>
            </div>
          </div>
        </div>
@endsection
@section('scripts')

@endsection