@extends('layout.main')
{{-- medicamails@medicainfotech.com --}}
{{-- ITj#Pf=njc3H --}}
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Campaigns /</span> Campaigns List </h4>
        <div class="col-xxl">
          
             <div class="card">
                    <a href="{{ route('add_campaign')}}" class="float-right w-25"><button type="button" class="btn btn-primary m-3" >New Campaign</button></a>
                <div class="table-responsive text-nowrap">
                  
                  <table class="table">
                    <thead>
                      <tr>
                        <th style="max-width: 5%;">Sr.</th>
                        <th>Campaings Name</th>
                        <th>Subject</th>
                        <th>Sent</th>
                        <th>Schedule</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @php
                        $i =1;
                      @endphp
                      @foreach ($campaigns as $list)
                      <tr>
                         <td>{{$i}}</td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ isset($list->campaign_name) ? $list->campaign_name : '' }}</strong></td>
                        <td>{{ isset($list->subject) ? $list->subject : '' }}</td>
                        <td><span class="badge bg-label-primary me-1">{{ isset($list->sent) ? $list->sent : 0 }}</span></td>
                         <td><span class="badge bg-label-primary me-1">{{ isset($list->schedule_datetime) ? $list->schedule_datetime : 'No' }}</span></td>
                           <td><span class="badge bg-label-primary me-1">{{ isset($list->status) ? $list->status : '' }}</span></td>
                         <td>{{ isset($list->created_at) ? $list->created_at : '' }}</td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{route('get-campaign',['temp_id'=>base64_encode($list->id), 'type'=>0])}}"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item delete_campaign" data-delete_id="{{base64_encode($list->id)}}" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      @php
                        $i++;
                      @endphp
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>

                </div>
            </div>
        </div>
        <!-- / Content -->

        <!-- Button trigger modal -->
        <!-- Modal -->
    

        <!-- Footer -->
        @endsection
