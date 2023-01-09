<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
            @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

           <div align="center" style="padding-top: 100px;">
            <table>
                <tr style="background-color: black">
                    <th style="padding: 14px">Customer Name</th>
                    <th style="padding: 14px">Email</th>
                    <th style="padding: 14px">Phone</th>
                    <th style="padding: 14px">Repair Type</th>
                    <th style="padding: 14px">Date</th>
                    <th style="padding: 14px">Message</th>
                    <th style="padding: 14px">Status</th>
                    <th style="padding: 14px">Approved</th>
                    <th style="padding: 14px">Cancelled</th>
                </tr>

                @foreach ($data as $appoint)


                <tr align="center" style="background-color: LightSlateGrey">
                    <td>{{$appoint->name}}</td>
                    <td>{{$appoint->email}}</td>
                    <td>{{$appoint->phone}}</td>
                    <td>{{$appoint->problem}}</td>
                    <td>{{$appoint->date}}</td>
                    <td>{{$appoint->message}}</td>
                    <td>{{$appoint->status}}</td>
                    <td>
                        <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{url('cancelled',$appoint->id)}}">Cancelled</a>
                    </td>
                </tr>

                @endforeach

            </table>
           </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
  </body>
</html>
