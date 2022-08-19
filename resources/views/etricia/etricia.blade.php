@extends('layouts.powerpack')


@section('title')
Etricia | Monitoring
@endsection


@section('content')
  <link href="../assets/css/treestyle.css" rel="stylesheet" />
<div class="body genealogy-body genealogy-scroll">
    <div class="genealogy-tree">
        <ul>
            <li>
                <a href="javascript:void(0);">
                    <div class="member-view-box">
                        <div class="member-image">
                           <h3>Control Monitor tree</h3>
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
                                            <img src="assets.png" alt="Member">
                                            <div class="member-details">
                                                <h5>Temperature</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="products.png" alt="Member">
                                            <div class="member-details">
                                                <h5>Voltage</h5>
                                            </div>
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
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                    <div class="member-details">
                                                        <h5>Frequency</h5>
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
                                            <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                            <div class="member-details">
                                                <h5>Switch</h5>
                                                <div class="table-responsive table-upgrade">
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
                                                  </div>
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
                                                        <h5>Charge</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                  
                                </ul>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
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