<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/admin')}}" class="brand-link">
      <!-- <img src="{{url('backend/img/afsana.jpg')}}" alt="" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">AdminPanel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('backend/img/afsana.jpg')}}" class="img-circle elevation-2" alt="">
        </div>
        <div class="info">
          <a href="{{url('/admin')}}" class="d-block">Afsana Sultana</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">Admin Setting</li>
          <li class="nav-item">
            <a href="{{url('/admin')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p> 
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/contactus')}}" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>Contact Us</p>   
            </a>
          </li>

          <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
                <p>
                  Inbox
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/message')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>Message</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/newsletter')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>Newsletter</p>
                </a>
              </li>
            </ul>
          </li>
  
          <li class="nav-item">
            <a href="{{url('/users')}}" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>User</p>   
            </a>
          </li>
  
          <li class="nav-header">Content Setting</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book-open"></i>
              <p>Site Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/home')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Main page</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book-open"></i>
              <p>All Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/menu')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('/sub-menu')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub-menu</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('/child-menu')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Child-menu</p>
                </a>
              </li>
            </ul>
          </li>



          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-globe"></i>
              <p>Manage Website
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('topbar/1/edit')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Topbar</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('header/1/edit')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Header</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-globe"></i>
              <p>Website Footer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('footer/1/edit')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Footer</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('/usefull-link')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usefull Links</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('/social-link')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Social Links</p>
                </a>
              </li>

            </ul>
          </li>


          <!-- <li class="nav-item">
            <a href="#" class="nav-link"><i class="fas fa-globe"></i><span> Manage Website</span></a>
            <ul class="nav nav-treeview">
              <li class="nav-item"><a class="nav-link" href="{{url('topbar/1/edit')}}">Topbar</a></li>
              <li class=""><a class="nav-link" href="{{url('/slider')}}">Slider</a></li>
              <li class=""><a class="nav-link" href="{{url('home-page/1/edit')}}">Home Page</a></li>
              <li class=""><a class="nav-link" href="{{url('home-visibility/1/edit')}}">Home Page One Visibility</a></li>
              <li class=""><a class="nav-link" href="{{url('menu-visibility')}}">Menu visibility</a></li>
              <li class=""><a class="nav-link" href="{{url('sub-menu')}}">Sub Menu</a></li>
              <li class=""><a class="nav-link" href="{{url('shop-page/1/edit')}}">Shop Page</a></li>
              <li class=""><a class="nav-link" href="{{url('/show-homepage')}}">Show Homepage</a></li>
              <li class=""><a class="nav-link" href="{{url('/service')}}">Service</a></li>
              <li class=""><a class="nav-link" href="{{url('seller-condition/1/edit')}}">Seller Conditions</a></li>
              <li class=""><a class="nav-link" href="{{url('announcement/1/edit')}}">Announcement</a></li>
              <li class=""><a class="nav-link" href="{{url('/mega-menu-category')}}">Mega Menu</a></li>
              <li class=""><a class="nav-link" href="{{url('banner-image')}}">Banner Image</a></li>
              <li class=""><a class="nav-link" href="{{url('product-section')}}">Product Show Section</a></li>
              <li class=""><a class="nav-link" href="{{url('/brand-partner')}}">Brand Partner</a></li>
              <li class=""><a class="nav-link" href="{{url('default-avatar/1/edit')}}">Default Avatar</a></li> 
            </ul>
          </li> -->

          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                About Us
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/aboutus')}}" class="nav-link">
                  <i class="nav-icon fa fa-user"></i>
                  <p>About</p> 
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('/director')}}" class="nav-link">
                  <i class="nav-icon fa fa-user"></i>
                  <p>Board Of Directors</p> 
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('/mission')}}" class="nav-link">
                  <i class="nav-icon fa fa-book-open"></i>
                  <p>Mission/Vission</p> 
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('/frontlogo')}}" class="nav-link">
                  <i class="nav-icon fas fa-tree"></i>
                  <p>Logo</p> 
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-book-open"></i>
                  <p>Our Team
                  <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/team')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Lead Team Member</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/teammember')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Other Team Member</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li> -->

          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Business Units
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/businesscategories')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories of Business</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/business')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Business</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/additionalimage')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Additional Image</p>
                </a>
              </li>
            </ul>
          </li> -->

          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Services
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/servicecategories')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories of services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/service')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Services</p>
                </a>
              </li>
            </ul>
          </li> -->


          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Projects
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/projectcategories')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories of  Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/allproject')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Projects</p>
                </a>
              </li>
            </ul>
          </li> -->

          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Partners
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/partnercategories')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories of Partners</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/partner')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Partners</p>
                </a>
              </li>
            </ul>
          </li> -->

          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Training Schedule
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/bsctraining')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bsc Training</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/diplomatraining')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Diploma Training</p>
                </a>
              </li>
            </ul>
          </li> -->

          <!-- <li class="nav-item">
            <a href="{{url('/ourclient')}}" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>Our Clients</p>   
            </a>
          </li> -->

          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Others
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/frequentsection')}}" class="nav-link">
                  <i class="fa fa-edit nav-icon"></i>
                  <p>Frequently Ask Question</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('/skill')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Skills</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/count')}}" class="nav-link">
                  <i class="fa fa-edit nav-icon"></i>
                  <p>Counts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/choosesection')}}" class="nav-link">
                  <i class="fa fa-edit nav-icon"></i>
                  <p>Choose Section</p>
                </a>
              </li>
            </ul>
          </li> -->

          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/productcategories')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories of Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/product')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
            </ul>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>