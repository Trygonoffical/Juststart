@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid mt-4">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 mb-4 text-gray-800">Enquiry</h1>

    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Listing</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered page_data_table" id="page_data_table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Mail</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($recordList)
                        @foreach($recordList as $row)
                            @php
                            $row_id = $row->id;
                            $row_name = $row->first_name .' '.$row->last_name;
                            $row_email = $row->email;
                            $row_phone = $row->phone;
                            $row_message = $row->message;
                            //$row_created_at = date('d M. Y H:i', strtotime($row->created_at));
                            $row_created_at = date('Y-m-d H:i', strtotime($row->created_at));
                            $mail_status = 'No';

                            if($row->mail_status){
                                $mail_status = 'Yes';
                            }
                            @endphp
                            <tr class="">
                                <td><span title="{{$row_name}}">{{substr($row_name, 0, 20) }}</span></td>
                                <td>{{$row_email}}</td>
                                <td>{{$row_phone}}</td>
                                <td>{{$mail_status}}</td>
                                <td>{{ $row_created_at }}</td>
                                <td>
                                    <button type="button" class="btn btn-outline-primary btn-sm row-more-info-button" data-togglexxxx="modal" data-targetxxx="#enquiryDetailModal">
                                        View
                                    </button>

                                    <div class="d-none row-more-info">
                                        <div class="row mb-2">
                                            <div class="col-md-4"><b>Name:</b></div>
                                            <div class="col-md-8">{{$row_name}}</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-4"><b>Email:</b></div>
                                            <div class="col-md-8">{{$row_email}}</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-4"><b>Phone:</b></div>
                                            <div class="col-md-8">{{$row_phone}}</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-4"><b>Date:</b></div>
                                            <div class="col-md-8">{{$row_created_at}}</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-12"><b>Message:</b></div>
                                            <div class="col-md-12">{{$row_message}}</div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- View Enquiry Modal -->
<!-- Modal -->
<div class="modal fade" id="enquiryDetailModal" tabindex="-1" role="dialog" aria-labelledby="enquiryDetailModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enquiry</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body-enquiry"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- END Modal -->

<script>
$(document).ready(function() {
  $('#page_data_table').DataTable({
    "order": [[ 4, "desc" ]]
  });

  $(document).on('click', '.row-more-info-button', function(){
    let html_data = $(this).next('.row-more-info').html();
    $('#modal-body-enquiry').html(html_data);
    $('#enquiryDetailModal').modal('show');
  })

  
});



</script>    

@endsection
    