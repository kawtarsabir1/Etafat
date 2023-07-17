<div id="jstree"></div>
<div id="tree_selections">
    @if(!$disabled)
        @foreach ($nodes as $p)
            @if($p["state"]["selected"])
                <input type="hidden" name="permissions[]" value="{{$p['id']}}" >
            @endif
        @endforeach
    @endif

</div>


@push('component-style')
<link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/jstree.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('fonts/font-awesome/css/font-awesome.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-tree.css')) }}">
@endpush

@push('component-script')

    <script src="{{ asset(mix('vendors/js/extensions/jstree.min.js')) }}"></script>

    <script type="text/javascript">
    $( document ).ready(function() {
        $("#jstree").jstree({
            core: {
                data: @json($nodes),
            },
            plugins: ["types", "checkbox", "wholerow"],
            types: {
                parent: {
                    icon: "far fa-folder text-primary"
                },
                child: {
                    icon: "far fa-file"
                },
            }
        });
        $('#jstree').on('changed.jstree', function(e, data) {
            $("#tree_selections").empty();
            data.selected.forEach(s => {
                $("#tree_selections").append('<input type="hidden" name="permissions[]" value="' + s +
                '">');
            })
        });

        @if($disabled)
        $('#jstree').on('ready.jstree', function(e, data) {
            $('#jstree li').each( function() {
                $("#jstree").jstree().disable_node(this.id);
            });
        })
        @endif
    });
    </script>
@endpush
