<div id="toast" class="toast-container">
    @if (session('success'))
        <div class="toast-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('errors'))
        <div class="toast-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>


<script>
    setTimeout(function() {
        var toast = document.getElementById('toast');
        toast.style.display = 'none';
    }, 3000);
</script>
