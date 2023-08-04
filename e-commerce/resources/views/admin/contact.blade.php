<!DOCTYPE html>
<html lang="en">
@include('admin.head')
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            {{-- @include('admin.body') --}}
            @include('admin.success')
            <div class="row">
              {{-- <div class="col-md-6 col-xl-4 grid-margin stretch-card"> --}}
                
                @foreach ($messages as $message )
                {{-- <div > --}}
                {{-- <div class="preview-item border-bottom"> --}}
                 {{-- <div class="preview-thumbnail"> --}}
                <div class="card" style="margin: 5px">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                   
                      <h4 class="card-title">{{$message->email}}</h4>
                      {{-- <p class="text-muted mb-1 small">View all</p> --}}
                    </div>
                    <div class="preview-list">
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          {{-- <img src="{{asset('admin/assets')}}/images/faces/face6.jpg" alt="image" class="rounded-circle" /> --}}
                        </div>

                        
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject">{{$message->name}}</h6> 
                                {{-- <br>
                                <h6 class="preview-subject">{{$message->email}}</h6> --}}
                                <p class="text-muted text-small">{{$message->created_at}}</p>

                                <form action="{{url("deleteMessage/$message->id")}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">delete</button>
                                </form>

                              </div>
                              <h6 class="preview-subject">{{$message->subject}}</h6>
                              <p class="text-muted">{{$message->message}}</p>
                              
                            </div>
                          </div>
                        </div>
                       
                        
                        
                      {{-- <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img src="{{asset('admin/assets')}}/images/faces/face8.jpg" alt="image" class="rounded-circle" />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">Luella Mills</h6>
                              <p class="text-muted text-small">10 Minutes Ago</p>
                            </div>
                            <p class="text-muted">Well, it seems to be working now.</p>
                          </div>
                        </div>
                      </div>
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img src="{{asset('admin/assets')}}/images/faces/face9.jpg" alt="image" class="rounded-circle" />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">Ethel Kelly</h6>
                              <p class="text-muted text-small">2 Hours Ago</p>
                            </div>
                            <p class="text-muted">Please review the tickets</p>
                          </div>
                        </div>
                      </div>
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img src="{{asset('admin/assets')}}/images/faces/face11.jpg" alt="image" class="rounded-circle" />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">Herman May</h6>
                              <p class="text-muted text-small">4 Hours Ago</p>
                            </div>
                            <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
                          </div>
                        </div>
                      </div> --}}
                    </div>
                  </div>
                </div>
                

              @endforeach
              
            </div>
          </div>

        


          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.footer')