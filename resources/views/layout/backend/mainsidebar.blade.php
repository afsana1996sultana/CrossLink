<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/admin')}}" class="brand-link">
      <!-- <img src="{{url('backend/img/afsana.jpg')}}" alt="" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">CrossLink</span>
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

              <li class="nav-item">
                <a href="{{url('/resume')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>Resume</p>
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
              <p>Product Range
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/product')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-globe"></i>
              <p>All Projects
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/project-list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-globe"></i>
              <p>Services
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/all-service')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Service</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book-open"></i>
              <p>Blogs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/blog-list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blogs</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('/comment')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Comments</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-globe"></i>
              <p>Customers
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/customer-list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Customers</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('/customer-work')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customers Work</p>
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

              <li class="nav-item">
                <a href="{{url('about/1/edit')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('career-data/1/edit')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Career</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-book-open"></i>
                  <p>Mission & Vission
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/mission')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Mission</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{url('/vission')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Vission</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="{{url('/testimonial')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimonial</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('/frequently-asked-question')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Frequently Asked Questions</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{url('/offer')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Offers</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{url('/sponsor')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sponsor</p>
                </a>
              </li>

              
              <li class="nav-item">
                <a href="{{url('/team')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Team Member</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{url('/automation-work')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Automation Work</p>
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
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>