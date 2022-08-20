@extends('layouts.powerpack')


@section('title')
Etricia | Monitoring
@endsection


@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                Control and Monitoring window
                <form action="{{route('etricia')}}" method = 'get'>
@csrf
<button class="btn btn-success  btn-rounded pull-right "  type="submit"> <i class="fas fa-plus"></i>Charts</button>
              </div>
              <div class="card-body ">
  <link href="../assets/css/treestyle.css" rel="stylesheet" />
<div class="body genealogy-body genealogy-scroll">
    <div class="genealogy-tree">
        <ul>
            <li>
                <a href="javascript:void(0);">
                    <div class="member-view-box">
                        <div class="member-image">
                           <img src="../images/tree/toplevel.jpg" alt="Member">
                            <div class="member-details">
                                <h5>blc-001l-2021</h5>
                            </div>
                        </div>
                    </div>
                </a>
                <ul class="active">
                    <li>
                        <a href="javascript:void(0);">
                            <div class="member-view-box">
                                <div class="member-image">
                                     <img src="../images/tree/monitor.jpg" alt="Member">
                                    <div class="member-details">
                                        <h4>Monitor</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <ul >
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <div class="member-details">
                                                <h5>Temperature</h5>
                                            </div>
                                        </div>
                                         <div class="table-responsive ">
                  <table class="table table-responsive-sm table-bordered table-striped table-sm">
                    <thead class="thead-light">
                      <th>param</th>
                      <th class="text-center"> unit</th>
                      <th class="text-center">value</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>temperature</td>
                        <td class="text-center">celcius</td>
                        <td class="text-center">30 </td>
                      </tr>
                      </tbody>
                  </table>
              </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                    <div class="member-image">
                                            <div class="member-details">
                                                <h5>Voltage</h5>
                                            </div>
                                        </div>
                                        <div class="table-responsive table-upgrade">
                                        <table class ="table table-responsive-sm table-bordered table-striped table-sm">
                    <thead class="thead-light">
                      <th>param</th>
                      <th class="text-center"> unit</th>
                      <th class="text-center">value</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>voltage</td>
                        <td class="text-center">V</td>
                        <td class="text-center">13</td>
                      </tr>
                      </tbody>
                  </table>
              </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="employee.jpg" alt="Member">
                                            <div class="member-details">
                                                <h5>Other parameters</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                    <div class="member-details">
                                                        <h5>Current</h5>
                                                    </div>
                                                </div>
                                                 <div class="table-responsive table-upgrade">
                                        <table class ="table table-responsive-sm table-bordered table-striped table-sm">
                    <thead class="thead-dark">
                      <th>param</th>
                      <th class="text-center"> unit</th>
                      <th class="text-center">value</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Amps</td>
                        <td class="text-center">A</td>
                        <td class="text-center">0.23</td>
                      </tr>
                      </tbody>
                  </table>
              </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                    <div class="member-details">
                                                        <h5>Battery</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                    <div class="member-details">
                                                        <h5>Power</h5>
                                                    </div>
                                                </div>
                                                 <div class="table-responsive table-upgrade">
                                        <table class ="table table-responsive-sm table-bordered table-striped table-sm">
                    <thead class="thead-dark">
                      <th>param</th>
                      <th class="text-center"> unit</th>
                      <th class="text-center">value</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Power</td>
                        <td class="text-center">W</td>
                        <td class="text-center">96</td>
                      </tr>
                      </tbody>
                  </table>
              </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li> 
</ul>
</li>                                               <li>
                        <a href="javascript:void(0);">
                            <div class="member-view-box">
                                <div class="member-image">
                                  <img src="../images/tree/control.jpg" alt="Member">
                                    <div class="member-details">
                                        <h4>Control</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <ul class="active">
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                             <table class="table">
                                                     
                                                      <tbody>
                                                       
                                                        <tr>
                                                          <td class="text-center"></td>
                                                          <td class="text-center">
                                                            <BUTTON  id="switchON"  class="btn btn-round btn-success">ON</BUTTON>
                                                          </td>
                                                          <td class="text-center">
                                                            <BUTTON id="swichOFF" class="btn btn-round btn-primary">OFF</BUTTON>
                                                          </td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                            <div class="member-details">
                                                <h5>Switch</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                </li>
                          
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                   <img src="../images/tree/charge.png" alt="Member">
                                                    <div class="member-details">
                                                        <h5>Charge</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                   <img src="../images/tree/lock.jpg" alt="Member">
                                                    <div class="member-details">
                                                        <h5>lock</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                  </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

 </div>
          </div>
        </div>
    
      
@endsection

@section('scripts')
<script>
$(function () {
    $('.genealogy-tree ul').hide();
    $('.genealogy-tree>ul').show();
    $('.genealogy-tree ul.active').show();
    $('.genealogy-tree li').on('click', function (e) {
        var children = $(this).find('> ul');
        if (children.is(":visible")) children.hide('fast').removeClass('active');
        else children.show('fast').addClass('active');
        e.stopPropagation();
    });
});
</script>

@endsection