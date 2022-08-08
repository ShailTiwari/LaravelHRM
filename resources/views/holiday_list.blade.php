    <x-header  title={{$page_name}}/>
    <x-sidebar/>
    <div class="container-xxl flex-grow-1 container-p-y">

              <div class="card mb-4">
                <div class="card-body">
                  <div class="row gy-3">
                     <!-- End Offcanvas -->
                    <div class="col-lg-3 col-md-6">                      
                      <div class="mt-3">
                        <input
                          class="form-control"
                          type="text"
                          placeholder="Search..."
                        >                     
                      </div>
                    </div> 

                    <div class="col-lg-2 col-md-6">
                      <div class="mt-3">
                        <button
                          class="btn btn-primary"
                          type="button"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvasEnd"
                          aria-controls="offcanvasEnd"
                        >
                          Show
                        </button>                       
                      </div>
                    </div>

                     <!-- Default Offcanvas -->
                    <div class="col-lg-2 col-md-6">
                      <div class="mt-3">
                       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">New</button>                      
                      </div>
                    </div>



                  </div>
                </div>
              </div>






        <!-- Large Modal -->
          <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
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
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Name*</label> 
                             <input class="form-control" type="hidden" name="id" id="editid" value="" />
                             <input class="form-control" type="text" name="title" id="title" value="" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Date</label>
                            <input class="form-control" type="date" name="start" id="start" value="" />
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
            <div class="modal-dialog modal-lg" role="document">
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
                 <form id="formAccountSettings" method="POST"action="{{ route('update_department_profile') }}" enctype="multipart/form-data">
                          @csrf
                      <div class="modal-body"> 
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Name*</label> 
                             <input class="form-control" type="hidden" name="id" id="editid" value="" />
                             <input class="form-control" type="text" name="title" id="edittitle" value="" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Date</label>
                            <input class="form-control" type="date" name="start" id="editstart" value="" />
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


      <div id="example-table"></div>

       <x-footer/> 


                    <script type="text/javascript">  

                      function edit_row(e,cell)                      
                      {
                       var id=cell.getRow().getData().id;
                       let url = 'projects_edit/'+id+'';
                      // document.location.href=url;
                        console.log(url);
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
                    return "<i class='bx bx-trash-alt me-1'></i>"; 
                    };
                      var editIcon = function(cell, formatterParams, onRendered)
                    {
                    return "<i class='bx bx-edit-alt me-1'></i>"; 
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
                    </script>