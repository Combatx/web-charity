@push('css_vendor')
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/summernote/summernote-bs4.min.css') }}">
@endpush

@push('script_vendor')
    <!-- Summernote -->
    <script src="{{ asset('AdminLTE/plugins/summernote/summernote-bs4.min.js') }}"></script>
@endpush

@push('script')
    <script>
        $('.summernote').summernote({
            fontNames: [''],
            height: 200,
        })

        $('.note-btn-group.note-fontname').remove();
        setTimeout(() => {
            $('.note-btn-group.note-fontname').remove();
        }, 300);
    </script>
@endpush
