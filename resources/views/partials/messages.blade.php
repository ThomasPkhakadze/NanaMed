@if (Session::has('success'))

<div class="alert alert-success" >
     <strong>ოპერაცია წარმატებით შესრულდა!    {{  Session::get('success')  }} </strong>
</div>
@endif
@if ($errors->any())
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div><br />
      @endif