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
            </div>
             <div id="statement" class="tabcontent">
              <h5 class ="title">Statement</h5>
      <address contenteditable>
        <p>{{ Auth::user()->name }}</p>
        <p>{{ Auth::user()->region }}<br>{{ Auth::user()->location}}</p>
        <p>{{ Auth::user()->phone }}</p>
        <p>{{ Auth::user()->email }}</p>
      </address>
      <span><img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=https://etricia.herokuapp.com/api/qrcode_user?code={{Auth::user()->serverip}}" alt="..." size="150"></span>
    </header>
    <article>
      <h1>Recipient</h1>
      <address contenteditable>
        <p>{{ Auth::user()->serveip }}</p>
      </address>
      <table class="meta">
        <tr>
          <th><span contenteditable>Statement #</span></th>
          <td><span contenteditable>101138</span></td>
        </tr>
        <tr>
          <th><span contenteditable>Date</span></th>
          <td><span contenteditable>{{ date("Y/m/d")}}</span></td>
        </tr>
        <tr>
          <th><span contenteditable>Amount Due</span></th>
          <td><span id="prefix" contenteditable>$</span><span>600.00</span></td>
        </tr>
      </table>
      <table class="inventory">
        <thead>
          <tr>
            <th><span contenteditable>Item</span></th>
            <th><span contenteditable>Description</span></th>
            <th><span contenteditable>Rate</span></th>
            <th><span contenteditable>Quantity</span></th>
            <th><span contenteditable>Price</span></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a class="cut">-</a><span contenteditable>Front End Consultation</span></td>
            <td><span contenteditable>Experience Review</span></td>
            <td><span data-prefix>$</span><span contenteditable>150.00</span></td>
            <td><span contenteditable>4</span></td>
            <td><span data-prefix>$</span><span>600.00</span></td>
          </tr>
        </tbody>
      </table>
      <a class="add">+</a>
      <table class="balance">
        <tr>
          <th><span contenteditable>Total</span></th>
          <td><span data-prefix>$</span><span>600.00</span></td>
        </tr>
        <tr>
          <th><span contenteditable>Amount Paid</span></th>
          <td><span data-prefix>$</span><span contenteditable>0.00</span></td>
        </tr>
        <tr>
          <th><span contenteditable>Balance Due</span></th>
          <td><span data-prefix>$</span><span>600.00</span></td>
        </tr>
      </table>
    </article>
    <aside>
            </div>
              </div>
            </div>
          </div>
        </div>
@endsection
@section('scripts')

@endsection