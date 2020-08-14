@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-8">
      <form role="form" action=" {{ route('faq.update', $faq->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="box-body">
          <h2>ქართული</h2>
          <div class="form-group">
            <label for="question_ge">შეკითხვა</label>
            <textarea name="question_ge" class="textarea">{{ $faq->question_ge }}</textarea>
          </div>
          <div class="form-group">
            <label for="answer_ge">პასუხი</label>
            <textarea name="answer_ge" class="textarea">{{ $faq->answer_ge }}</textarea>
          </div>
          <hr class="bg-primary">

          <h2>ინგლისური</h2>
          <div class="form-group">
            <label for="question_en">შეკითხვა</label>
            <textarea name="question_en" class="textarea">{{ $faq->question_en }}</textarea>
          </div>
          <div class="form-group">
            <label for="answer_en">პასუხი</label>
            <textarea name="answer_en" class="textarea">{{ $faq->answer_en }}</textarea>
          </div>
          <hr class="bg-primary">

          <h2>რუსული</h2>
          <div class="form-group">
            <label for="question_ru">შეკითხვა</label>
            <textarea name="question_ru" class="textarea">{{ $faq->question_ru }}</textarea>
          </div>
          <div class="form-group">
            <label for="answer_ru">პასუხი</label>
            <textarea name="answer_ru" class="textarea">{{ $faq->answer_ru }}</textarea>
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
</div>
@endsection