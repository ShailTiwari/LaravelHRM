    <x-header  title={{$page_name}}/>
    <x-sidebar/>
     <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">                      
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                   <div class="home-tab d-sm-flex align-items-center justify-content-between border-bottom">
                 <!--  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="false">Audiences</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Demographics</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">More</a>
                    </li>
                  </ul> -->
                  <!--  <div class="form-group">
                    <div class="input-group btn-wrapper">
                       <input type="text" class="btn form-control" placeholder="Search." aria-label="Recipient's username">

                      <input type="text" class="btn form-control" placeholder="Search..." aria-label="Recipient's username">
                      <div class="input-group-append">
                        <button class="btn btn-rounded btn-sm btn-primary" type="button">Search</button>
                      </div>
                    </div>
                  </div> -->

                  <div>
                    <div class="btn-wrapper"> 
                      <input type="text" class="btn btn-otline-dark align-items-center" placeholder="Search" aria-label="">
                      <input type="text" class="btn btn-otline-dark align-items-center" placeholder="Search" aria-label="">
                      <input type="text" class="btn btn-otline-dark align-items-center" placeholder="Search" aria-label="">
                      <button  id="ajax-trigger" class="btn btn-primary text-white align-items-center"><i class="icon-eye"></i> Show</button>



                      

                      <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a> 
                      <a href="#" class="btn btn-warning text-white align-items-center" type="button"  data-bs-toggle="modal" data-bs-target="#largeModal"><i class="icon-plus"></i> New</a>
                      <button id="download-xlsx" class="btn btn-success text-white align-items-center btn-xs"><i class="icon-download"></i>Export</button>
                    </div>
                  </div>
                </div>
                  <div class="table-responsive">
                    <div id="example-table"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



      
        <!-- Large Modal -->
          <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel3">Add New</h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                 <form id="formAccountSettings" method="POST"action="{{ route('create_holiday') }}" enctype="multipart/form-data">
                          @csrf
                      <div class="modal-body"> 
                        <div class="row">
                            <div class="col mb-3">
                            <label for="firstName" class="form-label">Name*</label> 
                             <input class="form-control" type="text" name="title" id="title" value="" />
                          </div>
                        </div>

                         <div class="row">
                            <div class="col mb-3">
                               <label for="lastName" class="form-label">Date</label>
                                <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                                <span class="input-group-addon input-group-prepend border-right">
                                  <span class="icon-calendar input-group-text calendar-icon"></span>
                                </span>
                                <input type="text" class="form-control" name="start" id="start">
                              </div>                          
                            </div>
                          </div>


                          <div class="row">
                            <div class="col mb-3">
                              <label for="nameLarge" class="form-label">Description*</label>
                             <textarea  name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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

   <!-- Large Edit Modal -->
          <div class="modal fade" id="largeModaledit" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel3">Edit Holiday</h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                 <form id="formAccountSettings" method="POST"action="{{ route('update_holiday_profile') }}" enctype="multipart/form-data">
                          @csrf
                      <div class="modal-body"> 
                          <div class="row">
                            <div class="col mb-3">
                            <label for="firstName" class="form-label">Name*</label> 
                             <input class="form-control" type="hidden" name="id" id="editid" value="" />
                             <input class="form-control" type="text" name="title" id="edittitle" value="" />
                          </div>
                        </div>

                         <div class="row">
                            <div class="col mb-3">
                               <label for="lastName" class="form-label">Date</label>
                                <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                                <span class="input-group-addon input-group-prepend border-right">
                                  <span class="icon-calendar input-group-text calendar-icon"></span>
                                </span>
                                <input type="text" class="form-control" name="start" id="editstart">
                              </div>                          
                            </div>
                          </div>


                          <div class="row">
                            <div class="col mb-3">
                              <label for="nameLarge" class="form-label">Description*</label>
                             <textarea  name="description" class="form-control" id="editdescription" rows="3"></textarea>
                            </div>
                          </div>
                      </div>   
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                          Close
                        </button>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                 </form>
              </div>
            </div>
          </div>

    
       <x-footer/> 

 <script type="text/javascript">  
  
                    function edit_row(e,cell)                      
                      {
                        $("#editid").val();
                        $("#editname").val();
                        $("#editstart").val();
                        $("#editdescription").val();
                        var id=cell.getRow().getData().id;
                        var title=cell.getRow().getData().title;
                        var description=cell.getRow().getData().description;
                        var start=cell.getRow().getData().start;

                        $("#editid").val(id);
                        $("#edittitle").val(title);
                        $("#editstart").val(start);
                        $("#editdescription").val(description);
                        $("#largeModaledit").modal('show');
                      } 
                      
                      function delete_row(e,cell)                      
                      {
                       var id=cell.getRow().getData().id;
                       let url = 'holiday_delete/'+id+'';
                        console.log(url);
                        swal({
                            title: 'Are you sure?',
                            text: 'This record and it`s details will be permanantly deleted!',
                            icon: 'warning',
                            buttons: ["Cancel", "Yes!"],
                        }).then(function(value) {
                            if (value) {
                               window.location.href = url;
                            }
                        });


                      }                      



                      $('#image').change(function()
                      {                             
                      let reader = new FileReader();
                      reader.onload = (e) => { 
                        $('#preview-image').attr('src', e.target.result); 
                      }
                      reader.readAsDataURL(this.files[0]);                     
                     });
                    </script>



                    <script type="text/javascript">
                    var deleteIcon = function(cell, formatterParams, onRendered)
                    {
                    return "<i class='icon-trash'></i>"; 
                    };
                       var editIcon = function(cell, formatterParams, onRendered)
                    {
                    return "<i class='icon-pencil'></i>"; 
                    };

                      var tabledata = '<?php echo $members ;?>';
                     var table = new Tabulator("#example-table", {
                          height:"411px",
                          pagination:true, //enable.
                          paginationSize:5, // this option can take any positive integer value  
                          data:tabledata, //assign data to table
                          layout:"fitColumns", //fit columns to width of table (optional)
                          columns:[
                          {title:"ID", field:"id", formatter:"rownum"},
                          {title:"Day", field:"start",editor:"input"},
                          {title:"Date", field:"start",editor:"input"},
                          {title:"Holiday", field:"title",editor:"input"},
                          {title:"Status", field:"isactive", hozAlign:"center", formatter:"tickCross", headerSort:false, headerVertical:false},
                          {formatter:editIcon, width:40, hozAlign:"center", headerSort:false, cellClick:function(e, cell){
                            edit_row(e,cell);
                          }},
                          {formatter:deleteIcon, width:40, hozAlign:"center", headerSort:false, cellClick:function(e, cell){
                            delete_row(e,cell);
                          }},

                          ],
                      });
                    
                  
                  //trigger AJAX load on "Load Data via AJAX" button click
                 /* $("#ajax-trigger").click(function(){
                      table.setData("http://127.0.0.1:8000/employee_data");
                      
                  });*/

                  //trigger download of data.xlsx file
                    document.getElementById("download-xlsx").addEventListener("click", function(){
                        table.download("xlsx", "data.xlsx", {sheetName:"Employee Data"});
                    });
                    </script>