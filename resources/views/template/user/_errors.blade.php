@if($errors->any())
    <ul class="alert-danger alert">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif