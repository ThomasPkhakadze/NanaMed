@extends('layouts.admin')


@section('content')

<section class="content">
  <div class="row">
    <div class="col-md-12">
      <!-- Custom Tabs -->
      <div class="card">
        <div class="card-header d-flex p-0">
          <h3 class="card-title p-3">ხშირად დასმული კითხვები</h3>
          <ul class="nav nav-pills ml-auto p-2">
            <li class="nav-item"><a class="nav-link active" href="#view" data-toggle="tab">იხილეთ</a></li>
            <li class="nav-item"><a class="nav-link" href="#create" data-toggle="tab">შექმენით ახალი</a></li>
          </ul>
        </div><!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane active" id="view">
              <table class="table table-bordered table-striped">
                <thead>
                  <th>N</th>
                  <th>ქართული შეკითხვა</th>
                  <th> ქართული პასუხი</th>
                  <th>ინგლისური შეკითხვა</th>
                  <th> ინგლისური პასუხი</th>
                  <th>რუსული შეკითხვა</th>
                  <th> რუსული პასუხი</th>
                  <th>გამოქვეყნების თარიღი</th>
                  <th width="10%">ქმედება</th>
                </thead>
                <tbody>

                  @foreach ($faq as $FAQ)
                  <tr height="40px" width="700px">
                    <td>{{ $FAQ->id }}</td>
                    <td>{!! $FAQ->question_ge !!}</td>
                    <td>{!! $FAQ->answer_ge !!}</td>
                    <td>{!! $FAQ->question_en !!}</td>
                    <td>{!! $FAQ->answer_en !!}</td>
                    <td>{!! $FAQ->question_ru !!}</td>
                    <td>{!! $FAQ->answer_ru !!}</td>

                    <td>
                      <dd> {{ date('M j, Y H:i', strtotime($FAQ->created_at)) }}</dd>
                    </td>
                    <td>
                      <div class="col-md-1">
                        <form action="{{ route('faq.destroy',  $FAQ->id )}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger" type="submit">წაშლა</button>
                        </form>
                        <a href="{{ route('faq.edit',  $FAQ->id)}}" class="btn btn-success">შეცვლა</a>
                      </div>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="create">
              <form role="form" action=" {{ route('faq.store') }}" method="POST">
                @csrf
                <div class="box-body">
                  <h2>ქართული</h2>
                  <div class="form-group">
                    <label for="question_ge">შეკითხვა</label>
                    <textarea name="question_ge" class="textarea"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="answer_ge">პასუხი</label>
                    <textarea name="answer_ge" class="textarea"></textarea>
                  </div>
                  <hr class="bg-primary">

                  <h2>ინგლისური</h2>
                  <div class="form-group">
                    <label for="question_en">შეკითხვა</label>
                    <textarea name="question_en" class="textarea"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="answer_en">პასუხი</label>
                    <textarea name="answer_en" class="textarea"></textarea>
                  </div>
                  <hr class="bg-primary">

                  <h2>რუსული</h2>
                  <div class="form-group">
                    <label for="question_ru">შეკითხვა</label>
                    <textarea name="question_ru" class="textarea"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="answer_ru">პასუხი</label>
                    <textarea name="answer_ru" class="textarea"></textarea>
                  </div>
                  <hr class="bg-primary">


                </div>
                <!-- /.box-body -->

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
</section>
@endsection