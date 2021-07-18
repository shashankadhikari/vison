<style>
    .alert {
        border: 0;
        border-radius: 0.1875rem;
        color: #fff;
        background-color: green;
        margin-top: -2.8rem;
        z-index: 200;
        padding-top: .9rem;
        padding-bottom: .9rem;
        position: relative;
        width: 240px;
        float: right;
    }

    .fa-trash {
        border: none;
    }

</style>
<script>
    setTimeout(fade_out, 4000);

    function fade_out() {
        $("#message").fadeOut().empty();
    }
</script>

@if (session('status'))
    <div class="alert alert-success" id="message" role="alert">
        {{ session('status') }}
    </div>
@endif
@if (session('message'))
    <div class="alert alert-success" id="message" role="alert">
        {{ session('message') }}
    </div>
@endif
@if (count($errors) > 0)
    <div class="alert alert-danger" id="message">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
