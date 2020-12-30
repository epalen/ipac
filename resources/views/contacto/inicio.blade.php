@extends('layouts.app')

@include('includes.cabecera')
@include('contacto.incluir.contenido')
@include('includes.pie')
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
</script>
<script>
    jQuery(document).ready(function(){
        jQuery('.btn-contact-submit').click(function(e){
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ url('/formulario/contacto') }}",
                method: 'post',
                dataType: 'json',
                data: {
                    name: jQuery('#name').val(),
                    email: jQuery('#email').val(),
                    phone: jQuery('#phone').val(),
                    subject: jQuery('#subject').val(),
                    content: jQuery('#content').val()
                },
                success: function(result){
                    jQuery('.alert-success').show().fadeOut(8000);
                    jQuery('.alert-success').html(result.success);
                    $("#form")[0].reset();
                },
                error: function (request, status, error) {
                    json = $.parseJSON(request.responseText);
                    $.each(json.errors, function(key, value){
                        $('.alert-danger').show().fadeOut(8000);
                        $('.alert-danger').append('<p>'+value+'</p>');
                        $('#name-error').html( data.errors.name[0] );
                        $('#email-error').html( data.errors.name[0] );
                        $('#phone-error').html( data.errors.name[0] );
                        $('#subject-error').html( data.errors.name[0] );
                    });
                    $("#result").html('');
                }
            });
        });
    });
</script>