@include('partials.header')
<div class="row">
    <div class="col-md-6 mt-4">
        <h5 class="mb-2">Placement</h5>
        <p class="text-muted">Place toasts with custom CSS as you need them. The top right is often used for
            notifications, as is the top middle. If you’re only ever going to show one toast at a time, put the positioning
            styles right on the <code>.toast</code>.</p>
        <div class="p-3">
            <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center" style="min-height: 200px;">

                <!-- Then put toasts within -->
                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
                    <div class="toast-header">
                        <img src="assets/images/logo-sm.png" alt="brand-logo" height="14" class="mr-1">
                        <strong class="mr-auto">Upvex</strong>
                        <small>11 mins ago</small>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div> <!--end toast-->
            </div>
        </div>
    </div> <!-- end col-->
</div>
@include('partials.footer')