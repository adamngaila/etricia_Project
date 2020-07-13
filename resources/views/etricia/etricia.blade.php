@extends('layouts.powerpack')


@section('title')
Iristracker | Etricia
@endsection


@section('content')


      
        <div class="row">
          <div class="col-md-12 ml-auto mr-auto">
            <div class="card card-upgrade">
              <div class="card-header text-center">
                <h4 class="card-title">Etricia Powerpack</h3>
                  <p class="card-category">Are you looking for sustainable reliable source of energy? Blackcience brings yuou the Etricia project which it is a powerpack which can power your home, shop or your productive activities. Your powerpack has the following features.</p>
              </div>
              <div class="card-body">
                <div class="table-responsive table-upgrade">
                  <table class="table">
                    <thead>
                      <th></th>
                      <th class="text-center"> Feauture</th>
                      <th class="text-center">Status</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Components</td>
                        <td class="text-center">144 lithium cells</td>
                        <td class="text-center">all active </td>
                      </tr>
                      <tr>
                        <td>Capacity</td>
                        <td class="text-center">Power output</td>
                        <td class="text-center">1kw</td>
                      </tr>
                      
                      <tr>
                        <td>Control, switch off, switch on</td>
                       </tr>
                      <tr>
                        <td class="text-center"></td>
                        <td class="text-center">
                          <BUTTON  id="switchON"  class="btn btn-round btn-success">SWITCH ON</BUTTON>
                        </td>
                        <td class="text-center">
                          <BUTTON id="swichOFF" class="btn btn-round btn-primary">SWITCH OFF</BUTTON>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <iframe frameborder="0" height="1200" width="100%" marginwidth="0%" scrolling="no" src="http://192.168.8.100:1880/ui/"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('scripts')
<script type="text/javascript">
	var db = firebase.firestore();
	var washa = document.getElementById("switchON");
	var zima = document.getElementById("swichOFF");
	window.alert("is working");
	zima.addEventListener("click",function(){
		window.alert("is working");
		db.collection("powerpack").get().then((querySnapsort)=>{
	querySnapsort.forEach((doc)=>{
		console.log(`${doc.id}=>${doc.data()}`)
	});
})
	});

	washa.addEventListener("click",function(){
		window.alert("is working");
	});
		db.collection("powerpack").onSnapshot(function(Snapsort){
			Snapsort.docChanges().forEach(function(change){
				if(change.type==="modified"){
					console.log("status: ",change.doc.data());
				}
			});

		});



	
	


</script>
@endsection