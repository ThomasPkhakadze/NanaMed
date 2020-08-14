@extends('layouts.admin')

@section('content')

<section class="content">
  <div class="row">
    <div class="col-md-12">
      <!-- Custom Tabs -->
      <div class="card">
        <div class="card-header d-flex p-0">
          <h3 class="card-title p-3">სიახლეები</h3>
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
                      <table class="table table-bordered table-striped">
                        <thead>
                          <th width="25%">სამუშაო დღეები/საათები</th>
                          <th>საკონტაქტო ინფორმაცია</th>
                          <th>ფიზიკური მისამართი</th>
                          <th width="10%">ქმედება</th>
                        </thead>
                        <tbody>
        
                          @foreach ($ci as $cInfo)
                          <tr height="40px" width="700px">
                            <td>{!! $cInfo->schedule_ge !!}</td>
                            <td>{!! $cInfo->contact_info_ge !!}</td>
                            <td>{!! $cInfo->address_ge !!}</td>
        
                            <td>
                              <div class="col-md-1">
                                <form action="{{ route('contact-info.destroy',  $cInfo->id )}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger" type="submit">წაშლა</button>
                                </form>
                                <a href="{{ route('contact-info.edit',  $cInfo->id)}}" class="btn btn-success">შეცვლა</a>
        
                              </div>
                            </td>
                          </tr>
                          @endforeach
        
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane " id="en">
                      <table class="table table-bordered table-striped">
                        <thead>
                          <th width="25%">სამუშაო დღეები/საათები</th>
                          <th>საკონტაქტო ინფორმაცია</th>
                          <th>ფიზიკური მისამართი</th>
                          <th width="10%">ქმედება</th>
                        </thead>
                        <tbody>
        
                          @foreach ($ci as $cInfo)
                          <tr height="40px" width="700px">
                            <td>{!! $cInfo->schedule_en !!}</td>
                            <td>{!! $cInfo->contact_info_en !!}</td>
                            <td>{!! $cInfo->address_en !!}</td>
        
                            <td>
                              <div class="col-md-1">
                                <form action="{{ route('contact-info.destroy',  $cInfo->id )}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger" type="submit">წაშლა</button>
                                </form>
                                <a href="{{ route('contact-info.edit',  $cInfo->id)}}" class="btn btn-success">შეცვლა</a>
        
                              </div>
                            </td>
                          </tr>
                          @endforeach
        
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane " id="ru">
                      <table class="table table-bordered table-striped">
                        <thead>
                          <th width="25%">სამუშაო დღეები/საათები</th>
                          <th>საკონტაქტო ინფორმაცია</th>
                          <th>ფიზიკური მისამართი</th>
                          <th width="10%">ქმედება</th>
                        </thead>
                        <tbody>
        
                          @foreach ($ci as $cInfo)
                          <tr height="40px" width="700px">
                            <td>{!! $cInfo->schedule_ru !!}</td>
                            <td>{!! $cInfo->contact_info_ru !!}</td>
                            <td>{!! $cInfo->address_ru !!}</td>
        
                            <td>
                              <div class="col-md-1">
                                <form action="{{ route('contact-info.destroy',  $cInfo->id )}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger" type="submit">წაშლა</button>
                                </form>
                                <a href="{{ route('contact-info.edit',  $cInfo->id)}}" class="btn btn-success">შეცვლა</a>
        
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
            <div class="tab-pane" id="create">
              <form action="{{ route('contact-info.store') }}" method="POST">
                @csrf
                    <div class="box-body">
                      <h2>ქართული</h2> <br>
                      <div class="form-group">
                        <label for="schedule_ge">სამუშაო დღეები/საათები</label>
                        <textarea name="schedule_ge" class="textarea"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="contact_info_ge">საკონტაქტო ინფორმაცია</label>
                        <textarea name="contact_info_ge" class="textarea"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="address_ge">ფიზიკური მისამართი</label>
                        <textarea name="address_ge" class="textarea"></textarea>
                      </div>
                      <hr class="bg-primary">

                      <h2>ინგლისური</h2> <br>
                      <div class="form-group">
                        <label for="schedule_en">სამუშაო დღეები/საათები</label>
                        <textarea name="schedule_en" class="textarea"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="contact_info_en">საკონტაქტო ინფორმაცია</label>
                        <textarea name="contact_info_en" class="textarea"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="address_en">ფიზიკური მისამართი</label>
                        <textarea name="address_en" class="textarea"></textarea>
                      </div>
                      <hr class="bg-primary">

                      <h2>რუსული</h2> <br>
                      <div class="form-group">
                        <label for="schedule_ru">სამუშაო დღეები/საათები</label>
                        <textarea name="schedule_ru" class="textarea"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="contact_info_ru">საკონტაქტო ინფორმაცია</label>
                        <textarea name="contact_info_ru" class="textarea"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="address_ru">ფიზიკური მისამართი</label>
                        <textarea name="address_ru" class="textarea"></textarea>
                      </div>
                      <hr class="bg-primary">
    
                    </div>
                    <!-- /.box-body -->
    
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
              </form>
            </div>
          </div>
          <!-- /.tab-content -->
        </div><!-- /.card-body -->
      </div>
      <!-- ./card -->
    </div>
  </div>
</section>


@endsection