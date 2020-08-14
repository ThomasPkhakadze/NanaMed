@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <!-- Custom Tabs -->
      <div class="card">
        <div class="card-header d-flex p-0">
          <h3 class="card-title p-3">Slider</h3>
          <ul class="nav nav-pills ml-auto p-2">
            <li class="nav-item"><a class="nav-link active" href="#view" data-toggle="tab">იხილეთ</a></li>
            <li class="nav-item"><a class="nav-link" href="#create" data-toggle="tab">შექმენით ახალი</a></li>
          </ul>
        </div><!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane active" id="view">
              <table id="Table" class="table table-bordered table-striped">
                <thead>
                  <th width="10%">სათაური</th>
                  <th width="10%">აღწერა</th>
                  <th width="15%">ღილაკი</th>
                  <th width="15%">URL</th>
                  <th width="40%">სურათი</th>
                  <th width="10%">ქმედება</th>


                </thead>
                <tbody>
                  @foreach ($sliders as $slider)
                  <tr>
                    <td>{{$slider->title_ge}} </td>
                    <td>{!! $slider->description_ge !!} </td>
                    <td>{{$slider->button_ge}} </td>
                    <td>{{ $slider->url }}</td>
                    <td><img src="{{asset($slider->image)}} " width="250px" alt=""> </td>
                    <td>
                      <form action="{{ route('slider.destroy',  $slider->id )}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">წაშლა</button>
                      </form>
                      <a href="{{ route('slider.edit',  $slider->id)}}" class="btn btn-success">შეცვლა</a>
                    </td>
                  </tr>

                  @endforeach

                </tbody>
              </table>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="create">
              <form role="form" action=" {{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                  <h2>ქართული</h2>
                  <div class="form-group">
                    <label for="title_ge">სათაური</label>
                    <input type="text" class="form-contdol" name="title_ge" placeholder="მაგარი სერვისი">
                  </div>
                  <div class="form-group">
                    <label for="description_ge">აღწერა</label>
                    <textarea name="description_ge" class="textarea"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="button_ge">ღილაკი</label>
                    <input type="text" class="form-contdol" name="button_ge" placeholder="იხილეთ ჩვენი სერვისები">
                  </div>

                  <hr class="bg-primary">

                  <div class="box-body">
                    <h2>ინგლისური</h2>
                    <div class="form-group">
                      <label for="title_en">სათაური</label>
                      <input type="text" class="form-contdol" name="title_en" placeholder="მაგარი სერვისი">
                    </div>
                    <div class="form-group">
                      <label for="description_en">აღწერა</label>
                      <textarea name="description_en" class="textarea"></textarea>

                    </div>
                    <div class="form-group">
                      <label for="button_en">ღილაკი</label>
                      <input type="text" class="form-contdol" name="button_en" placeholder="იხილეთ ჩვენი სერვისები">
                    </div>

                    <hr class="bg-primary">

                    <div class="box-body">
                      <h2>რუსული</h2>
                      <div class="form-group">
                        <label for="title_ru">სათაური</label>
                        <input type="text" class="form-contdol" name="title_ru" placeholder="მაგარი სერვისი">
                      </div>
                      <div class="form-group">
                        <label for="description_ru">აღწერა</label>
                        <textarea name="description_ru" class="textarea"></textarea>

                      </div>
                      <div class="form-group">
                        <label for="button_ru">ღილაკი</label>
                        <input type="text" class="form-contdol" name="button_ru" placeholder="იხილეთ ჩვენი სერვისები">
                      </div>

                      <hr class="bg-primary">

                      <div class="form-group">
                        <label for="url">URL(გადასამიმართებელი)</label>
                        <input type="text" class="form-contdol" id="url" name="url" placeholder="services">
                      </div>
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