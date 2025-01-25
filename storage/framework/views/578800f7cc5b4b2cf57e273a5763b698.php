<form method="" action="/search" style="width: 80% !important ; margin-right: 50px" class="navbar-form navbar-right form-container " role="search">
        <div class="form-group" style="width: 80%">
          
         
           <input required="" value="<?php if(isset($_GET['q'])): ?><?php echo e($_GET['q']); ?><?php endif; ?>" style="width: 100%;  padding: 20px ; font-size: 18px " type="text" class="form-control" id="jsSearchInput" name="q" placeholder="Search for products">
          
          
        </div>
        <button style="background-color:rgba(0,255,44,1.00)" class="btn btn-success" type="submit"><svg height="30" viewBox="0 0 15 15" width="20" xmlns="http://www.w3.org/2000/svg" class="" name="search"><path d="M6.222 0C2.8 0 0 2.794 0 6.216s2.8 6.222 6.222 6.222a6.174 6.174 0 0 0 3.538-1.121l3.364 3.357a1.091 1.091 0 0 0 1.555 0 1.095 1.095 0 0 0 0-1.549l-3.363-3.364a6.164 6.164 0 0 0 1.12-3.545C12.437 2.794 9.638 0 6.223 0zm0 2.19a4.007 4.007 0 0 1 4.018 4.026 4.007 4.007 0 0 1-4.018 4.025 4.008 4.008 0 0 1-4.025-4.025A4.008 4.008 0 0 1 6.222 2.19z" fill="white" fill-rule="nonzero"></path></svg></button>
        
      </form><?php /**PATH G:\websites\Zicodim\resources\views/search_bar.blade.php ENDPATH**/ ?>