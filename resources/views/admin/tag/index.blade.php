@extends('layouts.admin')

@section('content')

<section class="content">
  <div class="row">
    <div class="row">
      <div class="col-md-8 ">
          <h1>Tag(თეგი)</h1>
          <table id="Table" class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>ქართული</th>
                      <th>ინგლისური</th>
                      <th>რუსული</th>
                      <th>ქმედება</th>
                  </tr>
              </thead>
  
              <tbody>
                  @foreach ($tags as $tag)
                  <tr>
                      <th>{{ $tag->id }}</th>
                      <td>{{ $tag->name_ge }}</td>
                      <td>{{ $tag->name_en }}</td>
                      <td>{{ $tag->name_ru }}</td>
                      <td>
                          <form action=" {{ route('tags.destroy', $tag->id) }} " method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div> <!-- end of .col-md-8 -->
  
      <div class="col-md-3 m-4">
          <div class="well " >
              <form action=" {{ route('tags.store') }} " method="post">
                  @csrf
                      <label>ახალი თეგი :</label><br>
                      <label for="name_ge">ქართული</label>
                      <input type="text" name="name_ge">
                      <label for="name_en">ინგლისური</label>
                      <input type="text" name="name_en">
                      <label for="name_ru">რუსული</label>
                      <input type="text" name="name_ru">
                      <input type="submit" class="btn btn-primary m-2">
              </form>
          </div>
      </div>
  </div>
  </div>
</section>
@endsection