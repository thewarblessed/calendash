<style>
#containerfluid{

}

</style>

<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg" id="main">
        <x-app.navbar />
        <div class="container-fluid py-4 px-5" id="containerfluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-xs border">
                        <div class="card-header pb-0">
                            <div class="d-sm-flex align-items-center mb-3">
                                <div>
                                    <h3 class="mb-0 font-weight-semibold">Create an Event</h3>
                                    <p class="text-sm mb-sm-0 mb-2">Please fill out the forms below.</p>
                                </div>
                            </div>
                            <form>
                                <div class="form-group">
                                  <label for="eventName">Name of the Event</label>
                                  <input type="text" class="form-control" id="eventName" >
                                </div>

                                  <div class="form-group">
                                    <label for="exampleFormControlInput1">Role: </label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" disabled>
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Please select estimated no. of participants </label>
                                    <input type="text" class="form-control" id="participants">
                                  </div>

                                  <div class="form-group">
                                        <label>VENUES</label>
                                        <div class="container">
                                            <div class="row">
                                            <div class="col-sm">
                                                <div class="card" style="width: 18rem;">
                                                    <img src="{{ asset('/image/venues/IT-Function-Hall.jpg') }}" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                    <h5 class="card-title">IT Function Hall</h5>
                                                    <p class="card-text">Located at IT buildng 4th Floor</p>
                                                    <a href="#" class="btn btn-info">Info</a>
                                                    <a href="#" class="btn btn-primary">Get</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="card" style="width: 18rem;">
                                                    <img src="{{ asset('/image/venues/open-court.jpg') }}" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                    <h5 class="card-title">Open-Court</h5>
                                                    <p class="card-text">Located at IT buildng 4th Floor</p>
                                                    <a href="#" class="btn btn-info">Info</a>
                                                    <a href="#" class="btn btn-primary">Get</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="card" style="width: 18rem;">
                                                    <img src="{{ asset('/image/venues/multi-purpose.jpg') }}" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                    <h5 class="card-title">Multi-purpose Hall</h5>
                                                    <p class="card-text">Located at IT buildng 4th Floor</p>
                                                    <a href="#" class="btn btn-info">Info</a>
                                                    <a href="#" class="btn btn-primary">Get</a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                  </div>
                                
                                  <div class="text-center">
                                    <button type="submit" class="btn btn-dark w-100 mt-4 mb-3">Next</button>
                                </div>
                              </form>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>