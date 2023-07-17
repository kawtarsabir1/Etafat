@foreach ($filetypes as $file)
    <div class="expanel expanel-default">
        <div class="expanel-heading">
            <h4 class="expanel-title">

                <a data-bs-container="body"
                   data-bs-content="{{$file->description}}"
                   data-bs-placement="top"
                   data-bs-popover-color="default"
                   data-bs-toggle="popover"
                   title=""
                   data-bs-original-title="Popover top"
                   aria-describedby="popover107066">{{$file->name}}</a>
            </h4>
        </div>
        <div class="expanel-body">
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
