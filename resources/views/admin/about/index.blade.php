@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <!-- Custom Tabs -->
      <div class="card">
        <div class="card-header d-flex p-0">
          <h3 class="card-title p-3">ჩვენს შესახებ</h3>
          <ul class="nav nav-pills ml-auto p-2">
            <li class="nav-item"><a class="nav-link active" href="#view" data-toggle="tab">იხილეთ</a></li>
            <li class="nav-item"><a class="nav-link" href="#create" data-toggle="tab">შექმენით ახალი</a></li>
          </ul>
        </div><!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane active" id="view">
              <table class="white-space: nowrap">
                <thead>
                  <th width="25%">ქართული ტექსტი</th>
                  <th width="25%">ინგლისური ტექსტი</th>
                  <th width="25%">რუსული ტექსტი</th>


                  <th width="20%">სურათი</th>
                  <th width="5%">ქმედება</th>

                </thead>
                <tbody>
                  @foreach ($about as $About)
                  <tr>
                    <td>{!! $About->content_ge !!}</td>
                    <td>{!! $About->content_en !!}</td>
                    <td>{!! $About->content_ru !!}</td>

                    <td><img src="{{asset($About->image)}}" alt="" width="190px;"></td>
                    <td>
                      <form action="{{ route('about.destroy',  $About->id )}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">წაშლა</button>
                      </form>
                      <a href="{{ route('about.edit',  $About->id)}}" class="btn btn-success">შეცვლა</a>
                    </td>
                  </tr>

                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="create">

              <form role="form" action=" {{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                  <h2>ქართული</h2>
                  <div class="form-group py-4">
                    <label for="content_ge">ტექსტი</label>
                    <textarea class="textarea" placeholder="აჯან ჯალი ჯანჯალი" name="content_ge"></textarea>
                  </div>
                  <hr>
                  <h2>ინგლისური</h2>
                  <div class="form-group py-4">
                    <label for="content_en">ტექსტი</label>
                    <textarea class="textarea" placeholder="აჯან ჯალი ჯანჯალი" name="content_en"></textarea> </div>
                  <hr>
                  <h2>რუსული</h2>
                  <div class="form-group py-4">
                    <label for="content_ru">ტექსტი</label>
                    <textarea class="textarea" placeholder="აჯან ჯალი ჯანჯალი" name="content_ru"></textarea>
                  </div>
                  <hr>
                  <div class="form-group">
                    <label for="image">სურათი</label>
                    <input type="file" id="image" name="image">
                  </div>
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
</div>
@endsection