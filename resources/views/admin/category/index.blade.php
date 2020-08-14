@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-8 ">
            <h1>Categories</h1>
            <table id="Table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ქართულად</th>
                        <th>ინგლისურად</th>
                        <th>რუსულად</th>
                        <th>ქმედება</th>


                    </tr>
                </thead>
    
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <th>{{ $category->id }}</th>
                        <td>{{ $category->name_ge }}</td>
                        <td>{{ $category->name_en }}</td>
                        <td>{{ $category->name_ru }}</td>
                        <td>
                            <form action=" {{ route('categories.destroy', $category->id) }} " method="post">
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
                <form action=" {{ route('categories.store') }} " method="post">
                    @csrf
                        <label>ახალი კატეგორია :</label>
                        <label for="name_ge">ქართული</label>
                        <input type="text" name="name_ge">
                        <label for="name_en">ინგლისური</label>
                        <input type="text" name="name_en">
                        <label for="name_ru">რუსული</label>
                        <input type="text" name="name_ru">
                        <input type="submit" class="btn btn-primary mt-2">
                </form>
            </div>
        </div>
    </div>
</section>

@endsection