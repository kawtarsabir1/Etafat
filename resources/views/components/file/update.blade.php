@foreach ($filetypes as $file)
    <div class="expanel expanel-default">
        <div class="expanel-heading">
            <h3 class="expanel-title">{{$file->name}}</h3>
        </div>
        <div class="expanel-body">
            {{$file->description}}
            <x-dropzone.button :id="'file-'.$file->id" />
        </div>
    </div>
@endforeach

@push("component-script")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="{{asset('js/dropzone.js')}}"></script>
    <script>
        @foreach ($filetypes as $file)
        new MyDropZone("#file-{{$file->id}}",'{{$file->id}}',{
            url : "{{ route('admin.files.storeMedia') }}",
            maxFiles : {{$file->maxfiles}},
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
        })
        @endforeach
    </script>
@endpush
