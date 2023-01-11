@extends('layout.admin')

@section('main-content')
    <!-- Page Heading -->

    
    <div class="orders">
        <div class="row">
          <div class="col-7">
            <div class="card col-7">
              <div class="card-body col-7">
                <h4 class="box-title">Jadwal Service Tersedia</h4>
              </div>
              <div class="card-body--">
                <div class="table-stats order-table ov-h">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Service</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($services as $service)
                        <tr>
                          <td>{{ $service->id }}</td>
                          <td>{{ $service->name }}</td>
                          <td>
                          </td>
                        </tr>
                      @empty
                          <tr>
                            <td colspan="3" class="text-center p-3">
                              Data tidak tersedia
                            </td>
                          </tr>
                      @endforelse
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

@endsection



