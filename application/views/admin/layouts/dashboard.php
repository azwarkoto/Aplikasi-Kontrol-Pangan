<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('admin/includes/head'); ?>
<body class="white-content">
  <div class="wrapper">
    <div class="sidebar" data="blue">
      <?php $this->load->view('admin/includes/menu'); ?>
      
    </div>
    <div class="main-panel" data="blue">
      <?php $this->load->view('admin/includes/header'); ?>
  
      <?php $this->load->view('admin/pages/'.$pages) ?>

      <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Creative Tim
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Blog
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>2018 made with <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <?php $this->load->view('admin/includes/settings'); ?>
  </div>
  
  <?php $this->load->view('admin/includes/foot'); ?>
</body>

</html>