@extends('layout.main')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert bg-green-100 border-l-4 border-green-500 text-green-700 p-4 flex justify-between w-full mb-2"
            role="alert">
            <p>{{ $message }}</p>
            <button type="button" class="close outline-none focus:outline-none" data-dismiss="alert">×</button>

        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert bg-red-100 border-l-4 border-red-500 text-red-700 p-4 flex justify-between w-full mb-2"
            role="alert">
            <p>{{ $message }}</p>
            <button type="button" class="close outline-none focus:outline-none" data-dismiss="alert">×</button>
        </div>
    @endif

    <div class="mt-4 lg:w-3/4 mx-auto">
        <div class="lg:w-3/4 mx-auto">
           
            <livewire:item  />
            
        </div>
    </div>
   
  
    <script type="text/javascript">
        var path = "{{ route('autocomplete') }}";
        $('input.typeahead').typeahead({
            source:  function (terms, process) {
            return $.get(path, { terms: terms }, function (data) {
                    return process(data);
                });
            }
        });
    </script>
@endsection
