@extends('layouts.admin')


@section('content')
<form action="{{ route('contact-info.update', $ci->id) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="box-body">
          <h2>ქართული</h2> <br>
          <div class="form-group">
            <label for="schedule_ge">სამუშაო დღეები/საათები</label>
            <textarea name="schedule_ge" class="textarea">{{ $ci->schedule_ge }}</textarea>
          </div>
          <div class="form-group">
            <label for="contact_info_ge">საკონტაქტო ინფორმაცია</label>
            <textarea name="contact_info_ge" class="textarea">{{ $ci->contact_info_ge }}</textarea>
          </div>
          <div class="form-group">
            <label for="address_ge">ფიზიკური მისამართი</label>
            <textarea name="address_ge" class="textarea">{{ $ci->address_ge }}</textarea>
          </div>
          <hr class="bg-primary">

          <h2>ინგლისური</h2> <br>
          <div class="form-group">
            <label for="schedule_en">სამუშაო დღეები/საათები</label>
            <textarea name="schedule_en" class="textarea">{{ $ci->schedule_en }}</textarea>
          </div>
          <div class="form-group">
            <label for="contact_info_en">საკონტაქტო ინფორმაცია</label>
            <textarea name="contact_info_en" class="textarea">{{ $ci->contact_info_en }}</textarea>
          </div>
          <div class="form-group">
            <label for="address_en">ფიზიკური მისამართი</label>
            <textarea name="address_en" class="textarea">{{ $ci->address_en }}</textarea>
          </div>
          <hr class="bg-primary">

          <h2>რუსული</h2> <br>
          <div class="form-group">
            <label for="schedule_ru">სამუშაო დღეები/საათები</label>
            <textarea name="schedule_ru" class="textarea">{{ $ci->schedule_ru }}</textarea>
          </div>
          <div class="form-group">
            <label for="contact_info_ru">საკონტაქტო ინფორმაცია</label>
            <textarea name="contact_info_ru" class="textarea">{{ $ci->contact_info_ru }}</textarea>
          </div>
          <div class="form-group">
            <label for="address_ru">ფიზიკური მისამართი</label>
            <textarea name="address_ru" class="textarea">{{ $ci->address_ru }}</textarea>
          </div>
          <hr class="bg-primary">

        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
  </form>
@endsection