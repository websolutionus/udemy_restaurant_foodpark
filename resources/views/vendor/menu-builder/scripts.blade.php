<script>
    var menus = {
        "oneThemeLocationNoMenus": "",
        "moveUp": '{{__("menu-builder::messages.move_up")}}',
        "moveDown": '{{__("menu-builder::messages.move_down")}}',
        "moveToTop": '{{__("menu-builder::messages.move_top")}}',
        "moveUnder": '{{__("menu-builder::messages.move_under")}}',
        "moveOutFrom": '{{__("menu-builder::messages.move_out_from")}}',
        "under": '{{__("menu-builder::messages.under")}}',
        "outFrom": '{{__("menu-builder::messages.out_from")}}',
        "menuFocus": '{{__("menu-builder::messages.menu_focus")}}',
        "deleteMenu": '{{__("menu-builder::messages.deleting_this_menu")}}',
        "enterMenuName": '{{__("menu-builder::messages.enter_menu_name")}}',
        "subMenuFocus" : '{{__("menu-builder::messages.submenu_focus")}}'
    };
    var arraydata = [];
    var addcustommenur = '{{ route("menus.items.create") }}';
    var updateitemr = '{{ route("menus.items.update")}}';
    var generatemenucontrolr = '{{ route("menus.update") }}';
    var deleteitemmenur = '{{ route("menus.items.delete") }}';
    var deletemenugr = '{{ route("menus.delete") }}';
    var createnewmenur = '{{ route("menus.create") }}';
    var csrftoken = "{{ csrf_token() }}";
    var menuwr = "{{ url()->current() }}";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrftoken
        }
    });
</script>
<script type="text/javascript" src="{{asset('vendor/menu-builder/scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/menu-builder/scripts2.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/menu-builder/menu.js')}}"></script>

<script>
    $(document).ready(function(){
        $('#custom-menu-item-pages').on('change', function(e){
            let selectedOption = $(this).find('option:selected');
            let url = selectedOption.data('url');
            $('#custom-menu-item-url').val(url);
            $('#custom-menu-item-name').val($(this).val());
        })
    })
</script>
