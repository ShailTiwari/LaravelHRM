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

      <div id="example-table"></div>

       <x-footer/> 


                    <script type="text/javascript">  

                      function edit_row(e,cell)                      
                      {
                       var id=cell.getRow().getData().id;
                       let url = 'employee_edit/'+id+'';
                       document.location.href=url;
                        console.log(url);
                      }   
                      function delete_row(e,cell)                      
                      {
                       var id=cell.getRow().getData().id;
                       let url = 'employee_delete/'+id+'';
                       //document.location.href=url;
                       // console.log(url);
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
                          {title:"Icon", field:"profile_picture", formatter:"image", formatterParams:{
                           height:"20px",
                           width:"20px",
                           urlPrefix:"{{ url('img/')}}/",
                          }},
                          {title:"Name", field:"name",editor:"input"},
                          {title:"Email", field:"email",editor:"input"},
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