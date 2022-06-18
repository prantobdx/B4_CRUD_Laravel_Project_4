<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand" >Logo</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse"  data-target="#menu">
        <span class="navbar-toggler-icon"></span>    
        </button> 
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ml-auto">

                    <li class="navbar-item"><a href="{{ route('js')  }}" class="nav-link">JavaScript</a></li>

                    <li class="navbar-item"><a href="{{ route('add-fullname') }}" class="nav-link">Add FullName</a></li> 

                    <li class="navbar-item"> <a href="{{ route('my-calculator') }}" class="nav-link">My Calculator</a></li>

                    <li class="navbar-item"> <a href="{{ route('add-products') }}" class="nav-link">Add Products</a></li>

                    <li class="navbar-item"> <a href="{{ route('manage-product') }}" class="nav-link">Manage Product</a></li>

                </ul>
            </div>
    </div>
  </nav>