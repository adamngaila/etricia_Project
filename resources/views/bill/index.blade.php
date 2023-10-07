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
               <button class="tablinks" onclick="openCity(event, 'bill')" id="defaultOpen">Bill History</button>
               <button class="tablinks" onclick="openCity(event, 'payments')">Payment History</button>
                <button class="tablinks" onclick="openCity(event, 'statement')">Statement</button>
            </div>
         </div>
              <div class="card-body ">
            <div id="bill" class="tabcontent">
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
                  {{$billl_list-> links()}}
               </table>
{{$billl_list-> links()}}
            </div>
              <div id="payments" class="tabcontent">
               <h5 class="title">Payment History</h5>
               <table class="table table-striped table-bordered" style="font-size: 11px;">
                  <thead>
                     <tr>
                        <th>Date</th>
                        <th>Payment Description</th>
                        <th>Amount Tzs</th>
                       
                     </tr>
                  </thead>
                  <tbody>
                    @foreach($payments as $pay)
                     <tr>
                        <td>{{$payments->updated_at}}</td>
                        <td> {{$payments->paymentDescrpition}}</td>
                        <td> {{$payments->AmountPaid}}</td>
                        
                     </tr>

                    @endforeach
                  </tbody>
                  {{$billl_list-> links()}}
               </table>
{{$billl_list-> links()}}
            </div>
             <div id="statement" class="tabcontent">

              <h5 class ="title">Statement</h5>
              <button class="btn btn-success  btn-rounded pull-right "  type="submit" id="print_invoice"> <i class="fas fa-print"></i>PDF</button>
      <address  disabled>
        <p>{{ Auth::user()->name }}</p>
        <p>{{ Auth::user()->region }}<br>{{ Auth::user()->location}}</p>
        <p>{{ Auth::user()->phone }}</p>
        <p>{{ Auth::user()->email }}</p>
      </address>
      <span><img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=https://etricia.mauzosheet.com/api/qrcode_user?code={{Auth::user()->serverip}}" alt="..." size="150"></span>
   
    <article>
      <h1>Recipient</h1>
      <address >
        <p>{{ Auth::user()->serveip }}</p>
      </address>
      <table class="meta">
        <tr>
          <th><span >Statement #</span></th>
          <td><span >101138</span></td>
        </tr>
        <tr>
          <th><span >Date</span></th>
          <td><span >{{ date("Y/m/d")}}</span></td>
        </tr>
        <tr>
          <th><span >Amount Due</span></th>
          <td><span id="prefix" >Tzs</span><span>{{$statement->Balance}}</span></td>
        </tr>
      </table>
      <table class="inventory">
        <thead>
          <tr>
            <th><span >Item</span></th>
            <th><span >Description</span></th>
            <th><span >Rate</span></th>
            <th><span >Quantity</span></th>
            <th><span >Price</span></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><span >Huduma ya Etricia</span></td>
            <td><span >Matumizi wh</span></td>
            <td><span data-prefix>Tzs</span><span >500.00</span></td>
            <td><span >{{$statement->TotalConsumption}}</span></td>
            <td><span data-prefix>Tzs</span><span>{{$statement->TotalCost}}</span></td>
          </tr>
        </tbody>
      </table>
     
      <table class="balance">
        <tr>
          <th><span>Total</span></th>
          <td><span data-prefix>Tzs</span><span>{{$statement->TotalCost}}</span></td>
        </tr>
        <tr>
          <th><span >Amount Paid</span></th>
          <td><span data-prefix>Tzs</span><span >{{$statement->ToatlPayment}}</span></td>
        </tr>
        <tr>
          <th><span >Balance Due</span></th>
          <td><span data-prefix>Tzs</span><span>{{$statement->Balance}}</span></td>
        </tr>
      </table>
    </article>

            </div>
              </div>
            </div>
          </div>
        </div>
        <input type="hidden" id="packcode" name="packcode" value= "{{ Auth::user()->serverip }}">
@endsection
@section('scripts')

@endsection