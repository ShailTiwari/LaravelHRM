    <x-header  title={{$page_name}}/>
    <x-sidebar/>
    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- Large Modal -->
          <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel3">Create Task</h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                  <form id="formAccountSettings" method="POST"action="{{ route('create_activity') }}" enctype="multipart/form-data">
                          @csrf
                <div class="modal-body">  
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailLarge" class="form-label">Project*</label>
                       <select name="project" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                          <option selected>Select Project</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="col mb-0">
                      <label for="dobLarge" class="form-label">Issue type*</label>
                       <select  name="type" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                          <option selected>Select Type</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                    </div>
                  </div>



                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameLarge" class="form-label">Summary*</label>
                      <input name="summary"  type="text" id="nameLarge" class="form-control" placeholder="Enter Summary" />
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameLarge" class="form-label">Description*</label>
                     <textarea  name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                  </div>


                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailLarge" class="form-label">Assignee</label> 
                      <select  name="assignee" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                          <option value="0" selected>Select Assignee</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col mb-0">
                      <label for="dobLarge" class="form-label">Reporter</label>
                      <select  name="reporter" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                          <option value="0" selected>Select Reporter</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailLarge" class="form-label">Labels</label> 
                      <select  name="labels" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                          <option value="0" selected>Select Labels</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col mb-0">
                      <label for="dobLarge" class="form-label">Flagged</label>
                      <select  name="flagged" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                          <option value="0" selected>Select Flagged</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                  </button>
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>
                 </form>
              </div>
            </div>
          </div>




   
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div id="demo" class="row">

                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#largeModal"
                        >
                          Add Task
                        </button>

  <div class="card col-4 mb-4 activity-secondary">
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
                       <p class="card-text"> {{ $post->description }} </p>
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




  <div class="card col-4 mb-4 activity-secondary">
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
                       <p class="card-text"> {{ $post->description }} </p>
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


  <div class="card col-4 mb-4 activity-done">
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
                       <p class="card-text"> {{ $post->description }} </p>
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