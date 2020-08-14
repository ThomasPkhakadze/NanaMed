@extends('layouts.admin')

@section('content')
@section('header','პოსტები')
@section('description','იხილეთ და/ან დაამატეთ ახალი ')

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
                      <table class="table table-bordered table-striped" id="Table">
                        <thead>
                          <th>სათაური</th>
                          <th>აღწერა</th>
                          <th>ტექსტი</th>
                          <th>სურათი</th>
                          <th>გამოქვეყნების თარიღი</th>
                          <th >ქმედება</th>
                        </thead>
                        <tbody>
        
                          @foreach ($posts as $post)
                          <tr height="80px">
                            <td>{{ $post->title_ge }}</td>
                            <td>{{ $post->description_ge }}</td>
                            <td>{!! $post->content_ge !!}</td>
        
                            <td> <img src="{{ asset($post->image) }} " alt="image" width="100px"></td>
                           
                            <td>
                              <dd> {{ date('M j, Y H:i', strtotime($post->created_at)) }}</dd>
                            </td>
                            <td>
                              <div class="col-md-1">
                                <form action="{{ route('posts.destroy',  $post->id )}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger" type="submit">წაშლა</button>
                                </form>
                                <a href="{{ route('posts.show',  $post->id)}}" class="btn btn-primary">ნახვა</a>
                                <a href="{{ route('posts.edit',  $post->id)}}" class="btn btn-success">შეცვლა</a>
        
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
                          <th>სათაური</th>
                          <th>აღწერა</th>
                          <th>ტექსტი</th>
                          <th>სურათი</th>
                          <th>გამოქვეყნების თარიღი</th>
                          <th >ქმედება</th>
                        </thead>
                        <tbody>
        
                          @foreach ($posts as $post)
                          <tr height="80px">
                            <td>{{ $post->title_en }}</td>
                            <td>{{ $post->description_en }}</td>
                            <td>{!! $post->content_en !!}</td>
        
                            <td> <img src="{{ asset($post->image) }} " alt="image" width="100px"></td>
                           
                            <td>
                              <dd> {{ date('M j, Y H:i', strtotime($post->created_at)) }}</dd>
                            </td>
                            <td>
                              <div class="col-md-1">
                                <form action="{{ route('posts.destroy',  $post->id )}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger" type="submit">წაშლა</button>
                                </form>
                                <a href="{{ route('posts.show',  $post->id)}}" class="btn btn-primary">ნახვა</a>
                                <a href="{{ route('posts.edit',  $post->id)}}" class="btn btn-success">შეცვლა</a>
        
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
                          <th>სათაური</th>
                          <th>აღწერა</th>
                          <th>ტექსტი</th>
                          <th>სურათი</th>
                          <th>გამოქვეყნების თარიღი</th>
                          <th >ქმედება</th>
                        </thead>
                        <tbody>
        
                          @foreach ($posts as $post)
                          <tr height="80px">
                            <td>{{ $post->title_ru }}</td>
                            <td>{{ $post->description_ru }}</td>
                            <td>{!! $post->content_ru !!}</td>
        
                            <td> <img src="{{ asset($post->image) }} " alt="image" width="100px"></td>
                           
                            <td>
                              <dd> {{ date('M j, Y H:i', strtotime($post->created_at)) }}</dd>
                            </td>
                            <td>
                              <div class="col-md-1">
                                <form action="{{ route('posts.destroy',  $post->id )}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger" type="submit">წაშლა</button>
                                </form>
                                <a href="{{ route('posts.show',  $post->id)}}" class="btn btn-primary">ნახვა</a>
                                <a href="{{ route('posts.edit',  $post->id)}}" class="btn btn-success">შეცვლა</a>
        
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
              <form action=" {{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                  <h2>ქართული</h2>
                  <div class="form-group">
                    <label for="title_ge">სათაური</label>
                    <input type="text" class="form-control" name="title_ge" placeholder="Enter title">
                  </div>
                  <div class="form-group">
                    <label for="description_ge">აღწერა</label>
                    <input type="text" class="form-control" name="description_ge" placeholder="Enter Description">
                  </div>
                  <div class="form-group">
                    <label for="content_ge">კონტენტი</label>
                    <textarea name="content_ge" class="textarea"></textarea>
                  </div>

                  <hr>

                  <h2>ინგლისური</h2>
                  <div class="form-group">
                    <label for="title_en">სათაური</label>
                    <input type="text" class="form-control" name="title_en" placeholder="Enter title">
                  </div>
                  <div class="form-group">
                    <label for="description_en">აღწერა</label>
                    <input type="text" class="form-control" name="description_en" placeholder="Enter Description">
                  </div>
                  <div class="form-group">
                    <label for="content_en">კონტენტი</label>
                    <textarea name="content_en" class="textarea"></textarea>
                  </div>

                  <hr>

                  <h2>რუსული</h2>
                  <div class="form-group">
                    <label for="title_ru">სათაური</label>
                    <input type="text" class="form-control" name="title_ru" placeholder="Enter title">
                  </div>
                  <div class="form-group">
                    <label for="description_ru">აღწერა</label>
                    <input type="text" class="form-control" name="description_ru" placeholder="Enter Description">
                  </div>
                  <div class="form-group">
                    <label for="content_ru">კონტენტი</label>
                    <textarea name="content_ru" class="textarea"></textarea>
                  </div>

                  <hr>

                  <div class="form-group">
                    <label for="image">სურათი</label>
                    <input type="file"  name="image">
                  </div>
                  <div class="form-group">
                    <label for="slug">URL(ლინკი)</label>
                    <input type="text" class="form-control"  name="slug" placeholder="Enter URL">
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
    </div>
  </div>
</section>

@endsection