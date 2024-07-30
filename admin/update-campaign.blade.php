@extends('layout.main')
{{-- medicamails@medicainfotech.com --}}
{{-- ITj#Pf=njc3H --}}
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Campaign /</span> Update Campaign </h4>

        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit Campaign</h5>
                    {{-- <small class="text-muted float-end">Default label</small> --}}
                </div>
                <div class="card-body">
                    <form id="campaign">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Campaing Name </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control campaign_name" value="{{ isset($templateData[0]->campaign_name) ? $templateData[0]->campaign_name : '' }}" name="campaign_name" id="basic-default-name"
                                    placeholder="Campaings Name" />
                                     <input type="text" class="form-control" value="{{ isset($templateData[0]->campaign_name) ? base64_encode($templateData[0]->id) : '' }}" name="tmp_id" hidden />
                                     <span id="campaign_name_error" style="color:red;display:none;">
												<small>
													<i>Please Provide Campaing Name</i>
												</small>
                                        </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Subject </label>
                            <div class="col-sm-10">
                                <input type="text" id="basic-default-phone" value="{{ isset($templateData[0]->subject) ? $templateData[0]->subject : '' }}" name="subject" class="form-control phone-mask subject"
                                    placeholder="Add Mails Subject" aria-label="Add Mails Subject"
                                    aria-describedby="basic-default-phone" />
                                     <span id="subject_error" style="color:red;display:none;">
												<small>
													<i>Please Mail Subject </i>
												</small>
                                        </span>
                            </div>
                            </div>
                            <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-phone">Customize Campaign</label>
                                  <div class="col-sm-1">
                                      <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" value="1" name="customize" id="customize_switch" @if ($templateData[0]->is_customize === 'Yes')
                            {{ 'checked' }}
                        @endif  />
                      </div>
                                    </div>
                            <div class="col-sm-4">
                                  <select class="form-select customize @if ($templateData[0]->is_customize === 'Yes')
                            {{ 'd-block' }} @else {{ 'd-none' }} 
                        @endif" >
                                    <option value="" selected>Use Customize Variable</option>
                                    <option value="1">First Name</option>
                                    <option value="2">Last Name</option>
                                    <option value="3">Company Name</option>
                                 </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Message</label>
                            <div class="col-sm-10">
                                <textarea id="email_content" class="form-control email_content" name="email_content">
                                    @php
                                        echo  isset($templateData[0]->email_message) ? $templateData[0]->email_message : '';
                                    @endphp
                                </textarea>
                                 <span id="email_content_error" style="color:red;display:none;">
												<small>
													<i>Please Provide Mail Content </i>
												</small>
                                        </span>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="button" class="btn btn-primary" id="addCampaign">Save</button>
                            </div>
                        </div>
                    </form>
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
