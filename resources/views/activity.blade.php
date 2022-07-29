    <x-header  title={{$page_name}}/>
    <x-sidebar/>
    <div class="container-xxl flex-grow-1 container-p-y">
   
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div id="demo" class="row">

  <div class="card col-4 mb-4 btn-secondary">
   <h5 class="d-inline card-header">TO DO</h5>
    <div id="items-1" class="list-group col">
       @foreach($posts as $post)
        @if($post->taskstatus ==1)    
        <div id="{{ $post->id }}" data-id="{{ $post->id }}" data-myattr="1"  data-myatt="{{ $post->id }}"  class="list-group-item nested-1">
          <div class="card ">
              <div class="card-body btn-outline-info">
                <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                  <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                    <div class="card-title">
                      <h5 class="text-nowrap mb-2">{{ $post->title }}</h5>
                    </div>
                    <div class="mt-sm-auto">
                      <h3 class="mb-0">{{ $post->description }}</h3>
                    </div>
                  </div>
                  <div id="profileReportChartt">
                   <span class="avatar-initial rounded bg-label-primary"
                    ><i class="bx bx-mobile-alt"></i
                  ></span>
                </div>
                </div>
              </div>
            </div>
          </div>
         @endif
         @endforeach
    </div>
  </div>




  <div class="card col-4 mb-4 btn-warning">
   <h5 class="d-inline card-header">IN PROGRESS</h5>
    <div id="items-2" class="list-group col">
         @foreach($posts as $post)
        @if($post->taskstatus ==2) 
        <div id="{{ $post->id }}"   data-id="{{ $post->id }}" data-myattr="2" data-myatt="{{ $post->id }}" class="list-group-item nested-1">
        <div class="card">
              <div class="card-body btn-outline-info">
                <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                  <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                    <div class="card-title">
                      <h5 class="text-nowrap mb-2">{{ $post->title }}</h5>
                    </div>
                    <div class="mt-sm-auto">
                      <h3 class="mb-0">{{ $post->description }}</h3>
                    </div>
                  </div>
                  <div id="profileReportChartt">
                   <span class="avatar-initial rounded bg-label-primary"
                    ><i class="bx bx-mobile-alt"></i
                  ></span>
                </div>
                </div>
              </div>
            </div>
          </div>
         @endif
         @endforeach
    </div>
  </div>


  <div class="card col-4 mb-4 btn-success">
   <h5 class="d-inline card-header">DONE</h5>
    <div id="items-3" class="list-group col">
         @foreach($posts as $post)
        @if($post->taskstatus ==3)  
        <div id="{{ $post->id }}" data-id="{{ $post->id }}" data-myattr="3" data-myatt="{{ $post->id }}"  class="list-group-item nested-1">
          <div class="card">
              <div class="card-body btn-outline-info">
                <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                  <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                    <div class="card-title">
                      <h5 class="text-nowrap mb-2">{{ $post->title }}</h5>
                    </div>
                    <div class="mt-sm-auto">
                      <h3 class="mb-0">{{ $post->description }}</h3>
                    </div>
                  </div>
                  <div id="profileReportChartt">
                   <span class="avatar-initial rounded bg-label-primary"
                    ><i class="bx bx-mobile-alt"></i
                  ></span>
                </div>
                </div>
              </div>
            </div>
        </div>
         @endif
         @endforeach
    </div>
  </div>



  </div>
  </div>


    <x-footer/> 
  <script src="https://unpkg.com/sortablejs-make/Sortable.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-sortablejs@latest/jquery-sortable.js"></script>
  
  <script type="text/javascript">
    
// List 1
$('#items-1').sortable({
    group: 'list',
    animation: 200,
    ghostClass: 'ghost',
    onSort: reportActivity,
});

// List 2
$('#items-2').sortable({
    group: 'list',
    animation: 200,
    ghostClass: 'ghost',
    onSort: reportActivity,
});

// List 2
$('#items-3').sortable({
    group: 'list',
    animation: 200,
    ghostClass: 'ghost',
    onSort: reportActivity,
});


/*Update status in database start*/
function updatePostOrder() 
{

  var arr =  $('#items-1').sortable('toArray');
    var i, n;
    var attrs = [];
    for (i = 0, n = arr.length; i < n; i++) {
     // attrs.push($('#Todo' + arr[i]).data('myattr'));

      attrs.push({
                    orderid : i, 
                    status : 1, 
                    myattr : $('#' + arr[i]).data('myattr'), 
                    myatt :$('#' + arr[i]).data('myatt'),
                 });


    }
 var sort1 = attrs;


  var arr =  $('#items-2').sortable('toArray');
    var i, n;
    var attrs = [];
    for (i = 0, n = arr.length; i < n; i++) {
       attrs.push({
                     orderid : i, 
                    status : 2, 
                     myattr : $('#' + arr[i]).data('myattr'), 
                     myatt :$('#' + arr[i]).data('myatt'),
                 });
    }
 var sort2 = attrs;


  var arr =  $('#items-3').sortable('toArray');
    var i, n;
    var attrs = [];
    for (i = 0, n = arr.length; i < n; i++) {
      attrs.push({
                    orderid : i, 
                    status : 3, 
                    myattr : $('#' + arr[i]).data('myattr'), 
                    myatt :$('#' + arr[i]).data('myatt'),
                 });
    }
 var sort3 = attrs;

   var sortnext = jQuery.merge( sort1, sort2 );
   var sortarray = jQuery.merge( sortnext, sort3 );
   var SITEURL = "{{ url('/') }}"; 
   var order = []; 
   var token = $('meta[name="csrf-token"]').attr('content');
   $.each(sortarray, function( index, value ) {
            order.push({
              id:value.myatt,
              head_id:index, 
              status:value.status,
              ticketid:value.myatt,
              order:value.orderid,
            });
          });
    console.log(order);


    $.ajax({
            type: "POST",
            dataType: "json",
             url: SITEURL + "/activity_save",
            data: {
              order: order,
              _token: token
            },
            success: function(response) {
                if (response.status == "success") {
                  console.log(response);
                } else {
                  console.log(response);
                }
            }
          });

}

/*Update status in database end*/








// Arrays of "data-id"
$('#get-order').click(function() 
{
   // var sort1 = $('#items-1').sortable('toArray');
   // console.log(sort1);
   // var sort2 = $('#items-2').sortable('toArray');
   // console.log(sort2);
   // var sort3 = $('#items-3').sortable('toArray');
   // console.log(sort2);

    var arr =  $('#items-1').sortable('toArray');
    var i, n;
    var attrs = [];
    for (i = 0, n = arr.length; i < n; i++) {
     // attrs.push($('#Todo' + arr[i]).data('myattr'));

      attrs.push({
                    orderid : i, 
                    status : 1, 
                    myattr : $('#' + arr[i]).data('myattr'), 
                    myatt :$('#' + arr[i]).data('myatt'),
                 });


    }
 var sort1 = attrs;


  var arr =  $('#items-2').sortable('toArray');
    var i, n;
    var attrs = [];
    for (i = 0, n = arr.length; i < n; i++) {
       attrs.push({
                     orderid : i, 
                    status : 2, 
                     myattr : $('#' + arr[i]).data('myattr'), 
                     myatt :$('#' + arr[i]).data('myatt'),
                 });
    }
 var sort2 = attrs;


  var arr =  $('#items-3').sortable('toArray');
    var i, n;
    var attrs = [];
    for (i = 0, n = arr.length; i < n; i++) {
      attrs.push({
                    orderid : i, 
                    status : 3, 
                    myattr : $('#' + arr[i]).data('myattr'), 
                    myatt :$('#' + arr[i]).data('myatt'),
                 });
    }
 var sort3 = attrs;

   var sortnext = jQuery.merge( sort1, sort2 );
   var sortarray = jQuery.merge( sortnext, sort3 );
   var SITEURL = "{{ url('/') }}"; 
   var order = []; 
   var token = $('meta[name="csrf-token"]').attr('content');
   $.each(sortarray, function( index, value ) {
            order.push({
              id:value.myatt,
              head_id:index, 
              status:value.status,
              ticketid:value.myatt,
              order:value.orderid,
            });
          });
    console.log(order);


    $.ajax({
            type: "POST",
            dataType: "json",
             url: SITEURL + "/activity_save",
            data: {
              order: order,
              _token: token
            },
            success: function(response) {
                if (response.status == "success") {
                  console.log(response);
                } else {
                  console.log(response);
                }
            }
          });




    
    /**/
}); 

// Report when the sort order has changed
function reportActivity() 
{
  updatePostOrder();
    console.log('The sort order has changed and update in databse');
};

  </script>
</body>
</html>