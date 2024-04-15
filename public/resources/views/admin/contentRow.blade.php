<!-- Content Row -->
<div class="row">

<!-- Total Users -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Members</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$user}}</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-users"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Total Books -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Total Books</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$book}}</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-book"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Borrowed Books -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Borrowed Books
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$borrow}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                <i class="fas fa-book-open"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- returned Books -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        returned Books</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$return}}</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-bookmark"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Content Row -->