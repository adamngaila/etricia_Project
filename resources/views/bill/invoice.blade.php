@extends('layouts.bill')
@section('content')
  <h5 class ="title">Statement</h5>
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
@endsection