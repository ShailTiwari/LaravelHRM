    <x-header/>
    <x-sidebar/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mt-5">
        <div class="col-md-10 offset-md-1">
             <table class="table table-bordered">
              <thead>
                <tr>
                  <th width="30px">#</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Created At</th>
                </tr>
              </thead>
              <tbody id="tablecontents">
                @foreach($posts as $post)
                  <tr class="row1" data-id="{{ $post->id }}">
                    <td class="pl-3"><i class="fa fa-sort"></i></td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ date('d-m-Y h:m:s',strtotime($post->created_at)) }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
      </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
    <script type="text/javascript">
      $(function () {

        var SITEURL = "{{ url('/') }}"; 
        $( "#tablecontents" ).sortable({
          items: "tr",
          cursor: 'move',
          opacity: 0.6,
          update: function(e) {
              updatePostOrder();
          }
        });

        function updatePostOrder() {
          var order = [];
          var token = $('meta[name="csrf-token"]').attr('content');
          $('tr.row1').each(function(index, element) {
            order.push({
              id: $(this).attr('data-id'),
              order: index
            });
          });

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
      });
    </script>
</body>
</html>