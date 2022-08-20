@extends('layouts.map')
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
            <div id="bill" class="tabcontent">
               <h5>Bills History</h5>
               <table class="table table-striped table-bordered">
                  <thead>
                     <tr>
                        <th>Date</th>
                        <th>Bill ref</th>
                        <th class="td-actions">Amount </th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td> Fresh Web Development Resources </td>
                        <td> http://www.egrappler.com/ </td>
                        <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                     </tr>
                  </tbody>
               </table>
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