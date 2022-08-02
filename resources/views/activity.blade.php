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
                         @foreach($projects as $project)
                          <option value="{{$project->id}}" >{{$project->title}}</option>                          
                         @endforeach
                        </select>
                    </div>

                    <div class="col mb-0">
                      <label for="dobLarge" class="form-label">Issue type*</label>
                       <select  name="type" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                         @foreach($issues as $issue)
                          <option value="{{$issue->id}}" >{{$issue->title}}</option>                          
                         @endforeach
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
                         @foreach($assignee as $assign)
                          <option value="{{$assign->id}}" >{{$assign->name}}</option>                          
                         @endforeach
                        </select>
                    </div>
                    <div class="col mb-0">
                      <label for="dobLarge" class="form-label">Reporter</label>
                      <select  name="reporter" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                         @foreach($reporter as $report)
                          <option value="{{$report->id}}" > {{$report->name}} </option>                          
                         @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailLarge" class="form-label">Labels</label> 
                      <select  name="labels" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                         @foreach($labels as $label)
                          <option value="{{$label->id}}" >{{$label->title}}</option>                          
                         @endforeach
                        </select>
                    </div>
                    <div class="col mb-0">
                      <label for="dobLarge" class="form-label">Flagged</label>
                      <select  name="flagged" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                         @foreach($flagges as $flagge)
                          <option value="{{$flagge->id}}" >{{$flagge->title}}</option>                          
                         @endforeach
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
       @foreach($task_status as $status)
  <div class="card col-4 mb-4 activity-secondary">
   <h5 class="d-inline card-header">{{$status->title}}</h5>
     <div id="items-{{$status->id}}" class="list-group col">
       @foreach($posts as $post)
        @if($post->taskstatus==$status->id)    
                  <div id="{{ $post->id }}" data-id="{{ $post->id }}" data-myattr="1"  data-myatt="{{ $post->id }}"  class="">
                    <div class="col-lg-12 col-md-12 col-6 mb-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="{{ url('img/project_img/'.$project->icon_picture) }}"
                                alt="icon"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                              </div>
                            </div>
                          </div>
                          <a href="projects/activity/{{$project->key}}/{{$project->id}}">
                          <span class="fw-semibold d-block mb-1">{{ $post->key }}</span>
                          <h6 class="card-title mb-2">{{ $post->summary }}</h6>                            
                          </a>
                          <small class="text-success fw-semibold"><i class="bx bx-calendar"></i>{{ $post->start }}</small>
                        </div>
                      </div>
                    </div>
                  </div>
         @endif
         @endforeach
      </div>
      <div class="card card-body btn-outline-info gap-10 d-flex">
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
            Add Task
          </button>
      </div>
  </div>
   @endforeach
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