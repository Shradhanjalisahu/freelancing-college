<style>
    .custom-body{
        padding: 7px 0px 0px 33px;
    }
    #toast-title{
        color:white;
    }
</style>
<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center" 
style="position: relative; min-height: 200px;">
  <!-- Then put toasts within -->
  <div class="toast" style="position: absolute; top: 0; right: 0;">
    <div class="toast-header" id="toast-header">
      <strong class="mr-auto" id="toast-title"></strong>
      <small></small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body" id="toast-body"></div>
  </div>
</div>