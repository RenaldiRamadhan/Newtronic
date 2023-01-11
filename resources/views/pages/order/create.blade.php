@extends('layout.auth')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">{{ __('Order Tiket') }}</h1>
                                </div>

                                @if ($errors->any())
                                    <div class="alert alert-danger border-left-danger" role="alert">
                                        <ul class="pl-4 my-2">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                             
                                <form method="POST" action="{{ route('order.store') }}" class="order">
                                  @csrf
                                    <input type="hidden">

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="name" placeholder="{{ __('Name') }}"   autofocus>
                                    </div>
                                    <div class="form-group">
                                     
                                      <select name="service_id"
                                      class="form-control @error('service_id') is-invalid @enderror">
                                        @foreach ($services as $service)
                                          <option value="{{ $service->id }}">{{ $service->name }}</option>
                                        @endforeach
                                      </select>
                                  </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="phone_no" placeholder="{{ __('No HP') }}"   autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input type="time" class="form-control form-control-user timepicker" name="waktu" placeholder="{{ __('Waktu') }}"   autofocus>
                                    </div>
                                    
                                

                                    <div class="form-group">
                                        <button type="submit" class="btn  btn-primary btn-user btn-block">
                                            Cetak
                                        </button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    $('.timepicker').timepicker({
        timeFormat: 'HH:mm',
        interval: 60,
        minTime: '6',
        maxTime: '21:00',
        defaultTime: '6',
        startTime: '10:00',
        dynamic: true,
        dropdown: true,
        scrollbar: true
    });
    </script>
