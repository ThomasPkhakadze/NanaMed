@extends('layouts.admin')

@section('content')

<!-- Custom Tabs -->
<div class="card">
  <div class="card-header d-flex p-0">
    <h3 class="card-title p-3">სერვისები</h3>
    <ul class="nav nav-pills ml-auto p-2">
      <li class="nav-item"><a class="nav-link active" href="#view" data-toggle="tab">იხილეთ</a></li>
      <li class="nav-item"><a class="nav-link" href="#create" data-toggle="tab">შექმენით ახალი</a></li>
    </ul>
  </div><!-- /.card-header -->
  <div class="card-body">
    <div class="tab-content">
      <div class="tab-pane active" id="view">
        <div class="card">
          <div class="card-header d-flex ">
            <ul class="nav nav-pills ml-auto p-2">
              <li class="nav-item"><a class="nav-link active" href="#ge" data-toggle="tab">ქართული</a></li>
              <li class="nav-item"><a class="nav-link" href="#en" data-toggle="tab">ინგლისური</a></li>
              <li class="nav-item"><a class="nav-link" href="#ru" data-toggle="tab">რუსული</a></li>

            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="ge">
                <table class="table table-bordered table-striped" id="Table">
                  <thead>
                    <th width="25%">სათაური</th>
                    <th>აღწერა</th>
                    <th>სურათი</th>
                    <th>გამოქვეყნების თარიღი</th>
                    <th width="10%">ქმედება</th>
                  </thead>
                  <tbody>

                    @foreach ($services as $service)
                    <tr height="80px">
                      <td>{{ $service->title_ge }}</td>
                      <td>{!! $service->description_ge !!}</td>
                      <td> <img src="{{ asset($service->image) }} " alt="image" width="100px"></td>
                      <td>
                        <dd> {{ date('M j, Y H:i', strtotime($service->created_at)) }}</dd>
                      </td>
                      <td>
                        <div class="col-md-1">
                          <form action="{{ route('posts.destroy',  $service->id )}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">წაშლა</button>
                          </form>
                          <a href="{{ route('services.show',  $service->id)}}" class="btn btn-primary">ნახვა</a>
                          <a href="{{ route('services.edit',  $service->id)}}" class="btn btn-success">შეცვლა</a>

                        </div>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
              <div class="tab-pane " id="en">
                <table class="table table-bordered table-striped" id="Table">
                  <thead>
                    <th width="25%">სათაური</th>
                    <th>აღწერა</th>
                    <th>სურათი</th>
                    <th>გამოქვეყნების თარიღი</th>
                    <th width="10%">ქმედება</th>
                  </thead>
                  <tbody>

                    @foreach ($services as $service)
                    <tr height="80px">
                      <td>{{ $service->title_en }}</td>
                      <td>{!! $service->description_en !!}</td>
                      <td> <img src="{{ asset($service->image) }} " alt="image" width="100px"></td>
                      <td>
                        <dd> {{ date('M j, Y H:i', strtotime($service->created_at)) }}</dd>
                      </td>
                      <td>
                        <div class="col-md-1">
                          <form action="{{ route('posts.destroy',  $service->id )}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">წაშლა</button>
                          </form>
                          <a href="{{ route('services.show',  $service->id)}}" class="btn btn-primary">ნახვა</a>
                          <a href="{{ route('services.edit',  $service->id)}}" class="btn btn-success">შეცვლა</a>

                        </div>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
              <div class="tab-pane " id="ru">
                <table class="table table-bordered table-striped" id="Table">
                  <thead>
                    <th width="25%">სათაური</th>
                    <th>აღწერა</th>
                    <th>სურათი</th>
                    <th>გამოქვეყნების თარიღი</th>
                    <th width="10%">ქმედება</th>
                  </thead>
                  <tbody>

                    @foreach ($services as $service)
                    <tr height="80px">
                      <td>{{ $service->title_ru }}</td>
                      <td>{!! $service->description_ru !!}</td>
                      <td> <img src="{{ asset($service->image) }} " alt="image" width="100px"></td>
                      <td>
                        <dd> {{ date('M j, Y H:i', strtotime($service->created_at)) }}</dd>
                      </td>
                      <td>
                        <div class="col-md-1">
                          <form action="{{ route('posts.destroy',  $service->id )}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">წაშლა</button>
                          </form>
                          <a href="{{ route('services.show',  $service->id)}}" class="btn btn-primary">ნახვა</a>
                          <a href="{{ route('services.edit',  $service->id)}}" class="btn btn-success">შეცვლა</a>

                        </div>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="create">
        <form action=" {{ route('services.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="box-body">
            <h2>ქართული</h2>
            <div class="form-group">
              <label for="title_ge">სათაური</label>
              <input type="text" class="form-control" name="title_ge" placeholder="Enter title">
            </div>
            <div class="form-group">
              <label for="description_ge">აღწერა</label>
              <textarea name="description_ge" class="textarea"></textarea>
            </div>

            <hr>

            <h2>ინგლისური</h2>
            <div class="form-group">
              <label for="title_en">სათაური</label>
              <input type="text" class="form-control" name="title_en" placeholder="Enter title">
            </div>
            <div class="form-group">
              <label for="description_en">აღწერა</label>
              <textarea name="description_en" class="textarea"></textarea>
            </div>


            <hr>

            <h2>რუსული</h2>
            <div class="form-group">
              <label for="title_ru">სათაური</label>
              <input type="text" class="form-control" name="title_ru" placeholder="Enter title">
            </div>
            <div class="form-group">
              <label for="description_ru">აღწერა</label>
              <textarea name="description_ru" class="textarea"></textarea>
            </div>

            <hr>

            <div class="form-group">
              <label for="image">სურათი</label>
              <input type="file" id="image" name="image">
            </div>


          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href=" {{ route('posts.index') }} " class="btn btn-danger"> Cancel</a>
          </div>
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
  </div><!-- /.card-body -->
</div>
<!-- ./card -->
@endsection