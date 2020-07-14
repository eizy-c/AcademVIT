@if(session('success'))
  <div aria-live="polite" aria-atomic="true" style="position: absolute; min-height: 200px; z-index: 1000;">
  <div style="position: fixed; top: 65px; right:10px;">
      <div class="toast" role="alert" aria-live="polite" aria-atomic="true" data-delay="9000">
        <div class="toast-header toast-success">
          <strong class="mr-auto"> {{ session('success') }}</strong>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
  </div>
</div>
@endif
@if(session('danger'))
  <div aria-live="polite" aria-atomic="true" style="position: absolute; min-height: 200px; z-index: 1000;">
  <div style="position: fixed; top: 65px; right:10px;">
      <div class="toast" role="alert" aria-live="polite" aria-atomic="true" data-delay="9000">
        <div class="toast-header toast-danger">
          <strong class="mr-auto"> {{ session('danger') }}</strong>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
  </div>
</div>
@endif
@if($errors->any())
<div aria-live="polite" aria-atomic="true" style="position: absolute; min-height: 200px; z-index: 1000;">
  <div style="position: fixed; top: 65px; right:10px;">
    @foreach($errors->all() as $e)
      <div class="toast" role="alert" aria-live="polite" aria-atomic="true" data-delay="9000">
        <div class="toast-header toast-danger">
          <strong class="mr-auto">{{ $e }}</strong>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endif
