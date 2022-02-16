@extends('layouts.dashboard')
@section('content1')
<div class="formContainer">
        <h5 class="h_5">Vision de l'année</h5>

        
        <form class ="form" method="post" action = "{{ route('yearvision_store') }}" enctype="multipart/form-data">
            @csrf()

            <label class = "text_p6" for="year">Année</label>
            <input type="number" name = "year" value = "{{ old('year')}}" placeholder = "Année...">
            @if($errors->any())
                <p class = "error-txt">{{ $errors->first('year') }}</p>
            @endif
            
            <label class = "text_p6" for="subject">Thème</label>
            <input class = "input-UC" type="text" name = "subject" value = "{{ old('subject')}}">
            @if($errors->any())
                <p class = "error-txt">{{ $errors->first('subject') }}</p>
            @endif

            <label class = "text_p6" for="details">Thème</label>
            <textarea name="details" cols="30" rows="10">{{ old('subject')}}</textarea>
    
            <button type="submit" class = "form_btn">Submit</button>
        </form>

    </div>

@endsection