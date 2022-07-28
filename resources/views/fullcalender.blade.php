    <x-header  title={{$page_name}}/>
    <x-sidebar/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
  <div class="container-xxl flex-grow-1 container-p-y">
  <div class="card mb-4">
  <h5 class="card-header">Events Details </h5>
  <meta name="csrf-token" content="{{ csrf_token() }}">




  

<div class="container">


    <div id='calendar'></div>

</div>

<script>
$(document).ready(function () {   

var SITEURL = "{{ url('/') }}"; 

$.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});  

var calendar = $('#calendar').fullCalendar({
                    editable: true,
                    events: SITEURL + "/event",
                    displayEventTime: false,
                    editable: true,
                    eventRender: function (event, element, view) {
                        if (event.allDay === 'true') {
                                event.allDay = true;
                        } else {
                                event.allDay = false;
                        }
                    },
                    selectable: true,
                    selectHelper: true,
                    select: function (start, end, allDay) {
                        var title = prompt('Event Title:');
                        if (title) {
                            var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                            var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                            $.ajax({
                                url: SITEURL + "/event_save",
                                data: {
                                    title: title,
                                    start: start,
                                    end: end,
                                    type: 'add'
                                },
                                type: "POST",
                                success: function (data) {
                                    displayMessage("Event Created Successfully");
                                    calendar.fullCalendar('renderEvent',
                                        {
                                            id: data.id,
                                            title: title,
                                            start: start,
                                            end: end,
                                            allDay: allDay
                                        },true); 
                                    calendar.fullCalendar('unselect');
                                }
                            });
                        }
                    },

                    eventDrop: function (event, delta) {
                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
                        $.ajax({
                            url: SITEURL + '/event_save',
                            data: {
                                title: event.title,
                                start: start,
                                end: end,
                                id: event.id,
                                type: 'update'
                            },

                            type: "POST",

                            success: function (response) {

                                displayMessage("Event Updated Successfully");

                            }

                        });

                    },

                    eventClick: function (event) {

                        var deleteMsg = confirm("Do you really want to delete?");

                        if (deleteMsg) {

                            $.ajax({
                                type: "POST",
                                url: SITEURL + '/event_save',
                                data: {
                                        id: event.id,
                                        type: 'delete'
                                },
                                success: function (response) {
                                    calendar.fullCalendar('removeEvents', event.id);
                                    displayMessage("Event Deleted Successfully");

                                }

                            });

                        }

                    }

 

                });

 

});

 

function displayMessage(message) {

    toastr.success(message, 'Event');

} 

  

</script>

  

</body>

</html>