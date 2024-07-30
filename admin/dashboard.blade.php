{{-- <x-app-layout> --}}
   @extends('layout.main')
{{-- medicamails@medicainfotech.com --}}
{{-- ITj#Pf=njc3H --}}
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Campaign /</span> Send Mails</h4>

        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Draft Mail</h5>
                    {{-- <small class="text-muted float-end">Default label</small> --}}
                </div>
                <div class="card-body">
                    <form id="mailData">
                        <div class="row mb-3 ">
                            <label class="col-sm-2 col-md-2 col-lg-2 col-form-label" for="basic-default-name">Campaigns</label>
                            <div class="col-sm-7 col-md-7 col-lg-7">
                                 <select class="form-select  mb-2" name="select_campaign" id="select_campaign">
                                    <option value="" selected>Select Campaign</option>
                                    <option value="0">Customize Campaign</option>
                                        @foreach (getDropDownlist('campaigns',['id','campaign_name'],['user_id'=> Auth::user()->id ]) as $campaings)
                                    <option value="{{ base64_encode($campaings->id)}}" >{{ $campaings->campaign_name}}</option>
                                    @endforeach
                                 </select>
                                  {{-- <div class="form-text">You can use <b>Customize Compagin</b> if you <b>don't want to Create New Campaing</b></div> --}}
                            </div>
                            
                            <div class="col-sm-3 col-md-3 col-lg-3">
                            <a href="{{ route('add_campaign')}}"><button type="button" class="btn btn-primary" >Create New Campaign</button></a>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-Sender">Sender</label>
                            <div class="col-sm-7 ">
                                <input type="email" class="form-control border-0" value='{{ Auth::user()->email  }}' name="sender" id="basic-default-Sender"
                                    placeholder="From Email Address" readonly />
                            </div>
                            {{-- <div class="col-sm-3 ">
                                <input type="text"  name="subject" class="form-control phone-mask"
                                    placeholder="From Name" aria-label="From Name"
                                    aria-describedby="basic-default-phone" />
                            </div> --}}
                             <div class="col-sm-3">
                                <div class="input-group input-group-merge">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modalCenter">@Add Reciepints</button>
                                    <span class="input-group-text" id="basic-default-email2" style="display: none;"></span>
                                </div>
                            </div>
                        </div>
                       

                        {{-- <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">To</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modalCenter">@Add Reciepints</button>
                                    <span class="input-group-text" id="basic-default-email2" style="display: none;"></span>
                                </div>
                            </div>
                        </div> --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="subject">Subject</label>
                            <div class="col-sm-8">
                                <input type="text" id="subject" name="subject" class="form-control phone-mask"
                                    placeholder="Add Mails Subject" aria-label="Add Mails Subject"
                                    aria-describedby="basic-default-phone" />
                            </div>
                            <div class="col-sm-2">
                                  <select class="form-select customize" >
                                    <option value="" selected>Custom Variable</option>
                                    <option value="1">First Name</option>
                                    <option value="2">Last Name</option>
                                    <option value="3">Company Name</option>
                                 </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Message</label>
                            <div class="col-sm-10">
                                <textarea id="email_content" class="form-control" name="email_content"></textarea>
                            </div>
                        </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="schedule">Schedule</label>
                            <div class="col-sm-1">
                              <div class="form-check form-switch">
                        <input class="form-check-input mt-2" type="checkbox" name="is_schedule" value="Yes" id="schedule" />
                      </div>
                            </div>
                            <div class="col-sm-3" >
                                   <input
                            class="form-control schedule_field"
                            type="datetime-local"
                            value="2021-06-18T12:30:00"
                           
                            name="schedule_duration"
                          />
                            </div>
                             <div class="col-sm-3" >
                                   <select class="form-select schedule_field " name="timezone">
                                    @include('client-panel.timzone_list');
                                 </select>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="button" class="btn btn-primary" id="mailSend">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- / Content -->

        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Add Reciepints</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <h6 class="text-muted">Upload Emails</h6>
                                <div class="nav-align-top mb-4">
                                    <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
                                        <li class="nav-item">

                                            <button type="button" class="nav-link active" role="tab"
                                                data-bs-toggle="tab" data-bs-target="#navs-pills-justified-home"
                                                aria-controls="navs-pills-justified-home" aria-selected="true">
                                                <i class="tf-icons bx bx-home"></i> Import CSV
                                            </button>
                                           
                                        </li>
                                       
                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                                data-bs-target="#navs-pills-justified-profile"
                                                aria-controls="navs-pills-justified-profile" aria-selected="false">
                                                <i class="tf-icons bx bx-user"></i> Copy / Paste
                                            </button>
                                        </li>
                                        {{-- <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                                data-bs-target="#navs-pills-justified-messages"
                                                aria-controls="navs-pills-justified-messages" aria-selected="false">
                                                <i class="tf-icons bx bx-message-square"></i> Messages
                                            </button>
                                        </li> --}}
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="navs-pills-justified-home"
                                            role="tabpanel">
                                            <form id="csvForm" enctype="multipart/form-data">
                                                <div class="input-group">
                                                    <input type="file" name="csvfile" class="form-control w-50 file_csv" accept=".csv" id="inputGroupFile02" />
                                                  </div>
                                                    <small>Use Column Heading  <b>email</b> in CSV</small>
                                            </form>

                                        </div>
                                        <div class="tab-pane fade" id="navs-pills-justified-profile" role="tabpanel">
<textarea name="" id="" class="form-control" cols="30" rows="10" placeholder="test1@gmail.com,
test2@gail.com, ..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary m-2 float-right" id="upload_file"> Upload </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        @endsection

{{-- </x-app-layout> --}}
