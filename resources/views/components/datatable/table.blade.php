 
    <table class="table align-middle mt-3 table-nowrap table-hover datatable {{ $dom }}" style="width:100%">
        <thead class="table-light">
            <tr>
                @foreach ($tableDefinition as $row)
                    <th scope="col"> {{ $row['title'] }}</th>
                @endforeach
            </tr>
        </thead>
    </table> 


@push('component-style')
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/sweetalert2.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-sweet-alerts.css')) }}">

    <style>
        .datatable th{
            white-space: nowrap;
        }
        /* .datatable td{
            white-space: nowrap;
        } */
    </style>
    @endpush
@push('component-script')
    <script src="{{ asset(mix('vendors/js/extensions/sweetalert2.all.min.js')) }}"></script>

    <script>
        var {{ $var }};
        $(function() {
            {{ $var }} = $(".{{ $dom }}").DataTable({
                processing: true,
                serverSide: true,
                "ajax": {
                    "url": "{{ $url }}",
                    "data": {
                        "datatable_content": true,
                    }
                },
                columns: @json($columns),
                "scrollX": true,
            });
            $(".datatable-buttons a").click(function() {
                var id = $(this).data("id_action");
                {{ $var }}.button(id).trigger();
            });
            $("#table-search").on("keyup", function() {
                {{ $var }}.search(this.value).draw();
            });
        });
 

        function submitForm(id) {
            Swal.fire({
                text: "{{ trans('global.areYouSure') }}",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#34c38f",
                cancelButtonColor: "#f46a6a",
                confirmButtonText: "Yes, delete it!"
            }).then(t => {
                t.value && document.getElementById(id).submit();
            });
        }
    </script>
@endpush
