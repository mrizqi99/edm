<div class="sidebar close">
  <div class="logo-details">
    <span class="logo_name"><img src="<?php echo base_url() ?>image/logo.png"></img></span>
  </div>
  <ul class="nav-links">
    <li>
      <a href="<?= base_url('MasterData'); ?>">
        <i class='bx bxs-dashboard'></i>
        <span class="link_name">Dashboard</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="<?= base_url('MasterData'); ?>">Dashboard</a></li>
      </ul>
    </li>
    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-desktop'></i>
          <span class="link_name">Maintain Menu</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Maintain Menu</a></li>
      </ul>
    </li>
    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bxs-data'></i>
          <span class="link_name">Master Data</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Master Data</a></li>
        <li><a href="<?= base_url('MasterData/area'); ?>">Area</a></li>
        <li><a href="<?= base_url('MasterData/section'); ?>">Section</a></li>
        <li><a href="<?= base_url('MasterData/dies'); ?>">Dies</a></li>
        <li><a href="<?= base_url('MasterData/PIC'); ?>">PIC</a></li>
        <li><a href="#">Plan</a></li>
        <li><a href="<?= base_url('MasterData/user'); ?>">User</a></li>
      </ul>
    </li>
    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bxs-report'></i>
          <span class="link_name">Report</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Report</a></li>
      </ul>
    </li>
    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bxs-analyse' ></i>
          <span class="link_name">Analysis</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Analysis</a></li>
      </ul>
    </li>
    <li>
      <a href="#">
        <i class='bx bx-cog' ></i>
        <span class="link_name">Setting</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Setting</a></li>
      </ul>
    </li>
    <li>
  <div class="profile-details">
    <div class="name-job">
      <div class="profile_name"><?= $user['nama']; ?></div>
      <div class="job">#USER ID: <?= $user['userId']; ?>&ensp;#BU : <?= $user['buCode']; ?></div>
    </div>
    <a href="<?= base_url('Login/logout'); ?>">
      <i class='bx bx-power-off'></i>
    </a>
  </div>
</li>
</ul>
</div>
