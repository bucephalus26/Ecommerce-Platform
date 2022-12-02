<div class="container">
        <!-- Side Nav bar starts -->
            <div class="navigation">
                <ul>
                    <li>
                        <a href="#">
                            <span class="icon"><ion-icon name="clipboard-outline"></ion-icon></span>
                            <span class="title">Sports4Us - {{ Auth::user()->name }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.index')}}">
                            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/user">
                            <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                            <span class="title">Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.category.index')}}">
                            <span class="icon"><ion-icon name="copy-outline"></ion-icon></span>
                            <span class="title">Categories</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.product.index')}}">
                            <span class="icon"><ion-icon name="cube-outline"></ion-icon></span>
                            <span class="title">Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.message.index')}}">
                            <span class="icon"><ion-icon name="chatbox-outline"></ion-icon></span>
                            <span class="title">Message</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/setting">
                            <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                            <span class="title">Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="/userlogout">
                            <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                            <span class="title">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Side Nav bar Ends -->


            <!-- Main Section -->
            <div class="main">
                <div class="topbar">
                    <div class="toggle">
                        <ion-icon name="grid-outline"></ion-icon>
                    </div>
                   <br>
                   <!-- Cards for order types -->
                    <div class="cardbox">
                      <div class="card" onclick="">
                          <div>
                              <div class="numbers">New Orders</div>
                              <a href="{{@route('admin.order.index', ['slug' => 'New'])}}"></a>
                          </div>
                          <div class="iconBx">
                              <ion-icon name="person-add-outline"></ion-icon>                            
                          </div>
                      </div>
                        <div class="card">
                            <div>
                                <div class="numbers">Accepted Orders</div>
                                <a href="{{@route('admin.order.index', ['slug' => 'Accepted'])}}"></a>
                            </div>
                            <div class="iconBx">
                                <ion-icon name="checkmark-done-circle-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <div class="numbers">Shipping Orders</div>
                                <a href="{{@route('admin.order.index', ['slug' => 'Shipped'])}}"></a>
                            </div>
                            <div class="iconBx">
                                <ion-icon name="boat-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <div class="numbers">Completed Orders</div>
                                <a href="{{@route('admin.order.index', ['slug' => 'Completed'])}}"></a>
                            </div>
                            <div class="iconBx">
                                <ion-icon name="checkmark-done-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <div class="numbers">Canceled Orders</div>
                                <a href="{{@route('admin.order.index', ['slug' => 'Canceled'])}}"></a>
                            </div>
                            <div class="iconBx">
                              <ion-icon name="stop-circle-outline"></ion-icon>
                            </div>
                        </div>
                    </div>
                    <hr class="line">                    
                </div>
                <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>