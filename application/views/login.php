<div class="bg-img">
  <div class="content">
    <header>DIES DAILY ACTIVITY</header>
    <header>LOGIN FORM</header>
    <form action="<?= base_url('Login'); ?>" method="post">
      <div class="field">
      <span class="fa fa-user"></span>
      <input type="text"  name="userId" required placeholder="Username" >
      </div>
      <div class="field space">
      <span class="fa fa-lock"></span>
      <input type="password" name="npk" class="pass-key" required placeholder="Password">
      <span class="show">SHOW</span>
      </div>
      <div class="field">
      <input type="submit" value="LOGIN">
      </div>
    </form>
  </div>
</div>
