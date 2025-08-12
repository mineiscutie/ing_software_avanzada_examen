@if(session('estado'))
<div class="alert alert-success">
  {{ session('estado') }}
</div>
@endif
